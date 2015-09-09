<?php

namespace DustinLeblanc\Pivotal;

/**
 * Class Pivotal
 * @package DustinLeblanc\Pivotal
 */
class Pivotal
{

    /**
     * @var string User's Pivotal Tracker API key.
     */
    protected $api_key;

    /**
     * Pivotal constructor.
     */
    public function __construct($api_key = '')
    {
        $this->api_key = $api_key;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * @param string $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * @param $id
     * @return \DustinLeblanc\Pivotal\Story
     */
    public function getStory($id)
    {
        return new Story($id);
    }
}
