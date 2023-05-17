<?php

namespace Grav\Plugin\Playlist;

include 'vendor/james-heinrich/getid3/getid3/getid3.php';

class Playlist
{
    protected $getID3;

    public function __construct()
    {
            $this->getID3 = new \getID3();
    }

    public function getFileMediaInfo()
    {

    }

    public function buildPlaylistFromDir($dir) 
    {
        $tracks = array();

        if (!is_dir($dir)) {
            return;
        }

        $dir = new \DirectoryIterator($dir);
  
        // process tracks in directory
        foreach($dir as $file) {
            if($file->isDot()) continue;

            $info = $this->getID3->analyze($file->getRealPath());
            $this->getID3->CopyTagsToComments($info);

            if (empty($info)) continue;

            if (array_key_exists('comments_html', $info)) {
                $track = new Track($info);
                array_push($tracks, $track);
            }        
        }

        $playlist = new PlaylistModel($tracks);

        //var_dump($playlist);
        return $playlist;
    }

    public function saveInfo()
    {

    }

    public function loadInfo()
    {

    }
}