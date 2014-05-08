<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


class Enclosure
{
    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlAttribute
     */
    public $type;

    /**
     * @var string
     * @JMS\Type("string")
     * @JMS\XmlAttribute
     */
    public $url;

    /**
     * @var string
     * @JMS\Type("integer")
     * @JMS\XmlAttribute
     */
    public $length;

    /**
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
} 