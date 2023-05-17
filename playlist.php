<?php
namespace Grav\Plugin\Playlist;

use Composer\Autoload\ClassLoader;
use Grav\Common\Plugin;
use Grav\Plugin\Playlist\Playlist;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class PlaylistPlugin
 * @package Grav\Plugin
 */
class PlaylistPlugin extends Plugin
{

    const PLAYLIST_REGEX = '';
    protected $playlist;

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onPluginsInitialized' => [
                ['onPluginsInitialized', 0]
            ]
        ];
    }

    /**
     * Composer autoload
     *
     * @return ClassLoader
     */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized(): void
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        if ($this->config->get('plugins.playlist.enabled')) {
            require __DIR__.'/classes/Playlist.php';
            require __DIR__.'/vendor/mhor/php-mediainfo/src/MediaInfo.php';
        }

        $this->playlist = new Playlist();

        // Enable the main events we are interested in
        $this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0],
            'onPageContentProcessed' => ['onPageContentProcessed', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
        ]);
    }

    public function onPageContentRaw(Event $event): void
    {
        /** @var Page $page */
        $page = $event['page'];
        /** @var Twig $twig */
        $twig = $this->grav['twig'];
        /** @var Data $config */
        $config = $this->mergeConfig($page, TRUE);

        if ($config->get('enabled')) {
            // Get raw content and substitute all formulas by a unique token
            $raw = $page->getRawContent();

            // build an anonymous function to pass to `parseLinks()`
            $function = function ($matches) use ($twig, $config) {
                $search = $matches[0];

                // double check to make sure we found a valid YouTube video ID
                if (!isset($matches[1])) {
                    return $search;
                }

                $options = array(
                    '' => $config->get(''),
                );

                // build the replacement embed HTML string
                $replace = $twig->processTemplate('partials/playlist.html.twig', $options);

                // do the replacement
                return str_replace($search, $replace, $search);
            };

            // set the parsed content back into as raw content
            $page->setRawContent($this->parseLinks($raw, $function, $this::PLAYLIST_REGEX));
        }
    }
}
