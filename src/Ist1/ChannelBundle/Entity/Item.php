<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


class Item {
    /**
     * @JMS\Type("string")
     */
    public $title;

    /**
     * @JMS\Type("string")
     */
    public $description;

    /**
     * @JMS\Type("string")
     */
    public $link;

    /**
     * @JMS\Type("string")
     */
    public $guid;

    /**
     * @JMS\Type("DateTime<'D, d M Y H:i:s \G\M\T'>")
     * @JMS\SerializedName("pubDate")
     */
    public $pubDate;

    /**
     * @JMS\Type("string")
     */
    public $category;

    /**
     * @JMS\Type("Ist1\ChannelBundle\Entity\Enclosure")
     */
    public $enclosure;
} 