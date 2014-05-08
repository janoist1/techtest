<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


class Channel
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
    private $link;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $language;

    /**
     * @var \DateTime
     * @JMS\Type("DateTime<'D, d M Y H:i:s \G\M\T'>")
     * @JMS\SerializedName("lastBuildDate")
     */
    private $lastBuildDate;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $copyright;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $category;

    /**
     * @var \Ist1\ChannelBundle\Entity\Image
     * @JMS\Type("Ist1\ChannelBundle\Entity\Image")
     */
    private $image;

    /**
     * @var string
     * @JMS\Type("string")
     */
    private $ttl;

    /**
     * @var \Ist1\ChannelBundle\Entity\Item
     * @JMS\Type("array<Ist1\ChannelBundle\Entity\Item>")
     * @JMS\XmlList(inline = true, entry="item")
     */
    private $items;


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
     * @param string $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
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
     * @param \Ist1\ChannelBundle\Entity\Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \Ist1\ChannelBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \Ist1\ChannelBundle\Entity\Item $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return \Ist1\ChannelBundle\Entity\Item
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param \DateTime $lastBuildDate
     */
    public function setLastBuildDate($lastBuildDate)
    {
        $this->lastBuildDate = $lastBuildDate;
    }

    /**
     * @return \DateTime
     */
    public function getLastBuildDate()
    {
        return $this->lastBuildDate;
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

    /**
     * @param string $ttl
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
    }

    /**
     * @return string
     */
    public function getTtl()
    {
        return $this->ttl;
    }
} 