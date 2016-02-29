<?php
namespace Smichaelsen\SocialGrabber\Grabber;

interface GrabberInterface
{

    /**
     * @param string $url
     * @param \DateTimeInterface $lastPostDate
     * @param string $feedEtag
     * @param \DateTimeInterface $feedLastUpdate
     * @return array
     */
    public function grabData($url, \DateTimeInterface $lastPostDate, $feedEtag = null, \DateTimeInterface $feedLastUpdate = null);

}
