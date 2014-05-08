<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


class Image {

    /**
     * @JMS\Type("string")
     */
    public $title;

    /**
     * @JMS\Type("string")
     */
    public $url;

    /**
     * @JMS\Type("string")
     */
    public $link;
} 