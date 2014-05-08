<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


class Enclosure
{
    /**
     * @JMS\Type("string")
     * @JMS\XmlAttribute
     */
    public $type;

    /**
     * @JMS\Type("string")
     * @JMS\XmlAttribute
     */
    public $url;

    /**
     * @JMS\Type("integer")
     * @JMS\XmlAttribute
     */
    public $length;
} 