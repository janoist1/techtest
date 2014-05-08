<?php

namespace Ist1\ChannelBundle\Service;

use JMS\Serializer\Serializer;
use Ist1\RequestMaker\RequestMaker;


class Channel
{
    /**
     * @var \JMS\Serializer\Serializer
     */
    protected $serializer;

    /**
     * @var \Ist1\RequestMaker\RequestMaker
     */
    protected $requestMaker;

    /**
     * Url of the resource
     *
     * @var string
     */
    protected $url;

    /**
     * Format of the resource
     *
     * @var string $format
     */
    protected $format;

    /**
     * @param Serializer $serializer
     * @param RequestMaker $requestMaker
     * @param $url
     * @param string $format
     */
    function __construct(Serializer $serializer, RequestMaker $requestMaker, $url, $format = 'xml')
    {
        $this->serializer = $serializer;
        $this->requestMaker = $requestMaker;
        $this->url = $url;
        $this->format = $format;
    }

    /**
     * Returns a collection of Channels
     *
     * @return \Ist1\ChannelBundle\Entity\ChannelCollection
     */
    public function getChannels()
    {
        $resultString = $this->requestMaker->performRequest($this->url);

        $channel = $this->serializer->deserialize(
            $resultString,
            'Ist1\ChannelBundle\Entity\ChannelCollection',
            $this->format
        );

        return $channel;
    }
} 