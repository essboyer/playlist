<?php 
namespace Grav\Plugin\Playlist;

class PlaylistModel
{
    protected $artistName;
    protected $albumName;
    protected $trackType;
    protected $tracks = array();
    protected $credits;

    public function __construct($tracks)
    {
        self::_inferAlbumDetails($tracks);
        $this->tracks = $tracks;
    }

    function _inferAlbumDetails($tracks)
    {
        if (count($tracks) >0) {
            $track = $tracks[0];
            $this->artistName = $track->getArtistName();
            $this->albumName = $track->getAlbumName();
            $this->credits = $track->getComments();
        }
    }


    /**
     * Get the value of artistName
     */
    public function getArtistName()
    {
        return $this->artistName;
    }

    /**
     * Set the value of artistName
     */
    public function setArtistName($artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }

    /**
     * Get the value of albumName
     */
    public function getAlbumName()
    {
        return $this->albumName;
    }

    /**
     * Set the value of albumName
     */
    public function setAlbumName($albumName): self
    {
        $this->albumName = $albumName;

        return $this;
    }

    /**
     * Get the value of trackType
     */
    public function getTrackType()
    {
        return $this->trackType;
    }

    /**
     * Set the value of trackType
     */
    public function setTrackType($trackType): self
    {
        $this->trackType = $trackType;

        return $this;
    }

    /**
     * Get the value of tracks
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Set the value of tracks
     */
    public function setTracks($tracks): self
    {
        $this->tracks = $tracks;

        return $this;
    }

    /**
     * Get the value of credits
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set the value of credits
     */
    public function setCredits($credits): self
    {
        $this->credits = $credits;

        return $this;
    }
}
