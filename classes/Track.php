<?php 
namespace Grav\Plugin\Playlist;

class Track 
{
    protected $tid;
    protected $plid;
    protected $aid;
    protected $artistName;
    protected $albumName;
    protected $trackName;
    protected $trackType;
    protected $trackNum;
    protected $trackLength;
    protected $trackImage;
    protected $trackCredits;
    protected $published;
    protected $lyrics;
    protected $url;
    protected $filePath;
    protected $fileType;
    protected $mimeType;
    protected $bitrate;
    protected $samplerate;
    protected $comments;

    public function __construct($info)
    {
        $tag = $info['comments_html'];
        $this->artistName = $tag['artist'][0] ?? 'no artist';
        $this->albumName = $tag['album'][0] ?? 'no album';
        $this->trackName = $tag['title'][0] ?? 'no title';
        $this->trackNum = $tag['track_number'][0] ?? 0;
        $this->lyrics = $tag['unsyncedlyrics'][0] ?? '';
        $this->published = $tag['year'][0] ?? '';
        $this->comments = $tag['comment'][0] ?? '';

        $this->fileType = $info['fileformat'];
        $this->trackLength = $info['playtime_string'];
        $this->samplerate = $info['audio']['sample_rate'];
        $this->bitrate = $info['bitrate'];
        $this->mimeType = $info['mime_type'] ?? 'audio/wav';

        $this->filePath = $info['filenamepath'];
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
     * Get the value of tid
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set the value of tid
     */
    public function setTid($tid): self
    {
        $this->tid = $tid;

        return $this;
    }

    /**
     * Get the value of plid
     */
    public function getPlid()
    {
        return $this->plid;
    }

    /**
     * Set the value of plid
     */
    public function setPlid($plid): self
    {
        $this->plid = $plid;

        return $this;
    }

    /**
     * Get the value of aid
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set the value of aid
     */
    public function setAid($aid): self
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get the value of trackName
     */
    public function getTrackName()
    {
        return $this->trackName;
    }

    /**
     * Set the value of trackName
     */
    public function setTrackName($trackName): self
    {
        $this->trackName = $trackName;

        return $this;
    }


    /**
     * Get the value of tractNum
     */
    public function getTrackNum()
    {
        return $this->trackNum;
    }

    /**
     * Set the value of trackNum
     */
    public function setTrackNum($trackNum): self
    {
        $this->trackNum = $trackNum;

        return $this;
    }

    /**
     * Get the value of trackLength
     */
    public function getTrackLength()
    {
        return $this->trackLength;
    }

    /**
     * Set the value of trackLength
     */
    public function setTrackLength($trackLength): self
    {
        $this->trackLength = $trackLength;

        return $this;
    }

    /**
     * Get the value of trackImage
     */
    public function getTrackImage()
    {
        return $this->trackImage;
    }

    /**
     * Set the value of trackImage
     */
    public function setTrackImage($trackImage): self
    {
        $this->trackImage = $trackImage;

        return $this;
    }

    /**
     * Get the value of trackCredits
     */
    public function getTrackCredits()
    {
        return $this->trackCredits;
    }

    /**
     * Set the value of trackCredits
     */
    public function setTrackCredits($trackCredits): self
    {
        $this->trackCredits = $trackCredits;

        return $this;
    }

    /**
     * Get the value of published
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set the value of published
     */
    public function setPublished($published): self
    {
        $this->published = $published;

        return $this;
    }


    /**
     * Get the value of lyrics
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * Set the value of lyrics
     */
    public function setLyrics($lyrics): self
    {
        $this->lyrics = $lyrics;

        return $this;
    }

    /**
     * Get the value of filePath
     */
    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * Set the value of filePath
     */
    public function setFilePath($filePath): self
    {
        $this->filePath = $filePath;

        return $this;
    }

    /**
     * Get the value of comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     */
    public function setComments($comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get the value of fileType
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Set the value of fileType
     */
    public function setFileType($fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get the value of bitrate
     */
    public function getBitrate()
    {
        return $this->bitrate;
    }

    /**
     * Set the value of bitrate
     */
    public function setBitrate($bitrate): self
    {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * Get the value of samplerate
     */
    public function getSamplerate()
    {
        return $this->samplerate;
    }

    /**
     * Set the value of samplerate
     */
    public function setSamplerate($samplerate): self
    {
        $this->samplerate = $samplerate;

        return $this;
    }

    /**
     * Get the value of mimeType
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set the value of mimeType
     */
    public function setMimeType($mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }
}
