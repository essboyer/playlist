# Playlist Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

The **Playlist** Plugin is an extension for [Grav CMS](https://github.com/getgrav/grav). A media player with playlist. It builds a simple and cross-browser media player with a built in playlist. It supports all the major formats, displays album art, allows shares of songs and more!

A Playlist is created with files placed in the `media directory` of a `Page` with special type `Playlist`

## Installation

Installing the Playlist plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](https://learn.getgrav.org/cli-console/grav-cli-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install playlist

This will install the Playlist plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/playlist`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `playlist`. You can find these files on [GitHub](https://github.com/essboyer/grav-plugin-playlist) or via [GetGrav.org](https://getgrav.org/downloads/plugins).

You should now have all the plugin files under

    /your/site/grav/user/plugins/playlist
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/essboyer/grav-plugin-playlist/blob/main/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/playlist/playlist.yaml` to `user/config/plugins/playlist.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named playlist.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

**Describe how to use the plugin.**

## Credits
This plugin was created using [Music Card] and [Youtube] plugins for reference.
Information on the media items is gathered by using [MediaInfo]

## To Do

- [ ] Future plans, if any

