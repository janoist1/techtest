<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


class Item
{
    /**
     * @var string
     * @JMS\Type("string")
     */
    private $title;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $link;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $guid;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime<'D, d M Y H:i:s \G\M\T'>")
     * @JMS\SerializedName("pubDate")
     */
    private $pubDate;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $category;

    /**
     * @var \Ist1\ChannelBundle\Entity\Enclosure
     * @JMS\Type("Ist1\ChannelBundle\Entity\Enclosure")
     */
    private $enclosure;

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Ist1\ChannelBundle\Entity\Enclosure $enclosure
     */
    public function setEnclosure($enclosure)
    {
        $this->enclosure = $enclosure;
    }

    /**
     * @return \Ist1\ChannelBundle\Entity\Enclosure
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }

    /**
     * @param string $guid
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    /**
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param \DateTime $pubDate
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
    }

    /**
     * @return \DateTime
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}