<?php

namespace Grav\Plugin\Playlist;

include 'classes/Playlist.php';
include 'vendor/autoload.php';

function test()
{
    $dir = '/srv/http/grav-dev/user/plugins/playlist/media';
    $pl = new Playlist();
    $playlist = $pl->buildPlaylistFromDir($dir);
    var_dump($playlist);
}

test();