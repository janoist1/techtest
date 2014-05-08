<?php

namespace Ist1\ChannelBundle\Entity;

use JMS\Serializer\Annotation as JMS;


/**
 * @JMS\XmlRoot("rss")
 */
class ChannelCollection
{
    /**
     * @var array<\Ist1\ChannelBundle\Entity\Channel>
     * @JMS\Type("array<Ist1\ChannelBundle\Entity\Channel>")
     * @JMS\XmlList(inline = true, entry="channel")
     */
    private $channels;

    /**
     * @param array<\Ist1\ChannelBundle\Entity\Channel> $channels
     */
    public function setChannels($channels)
    {
        $this->channels = $channels;
    }

    /**
     * @return array<\Ist1\ChannelBundle\Entity\Channel>
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @param $category
     * @return array<\Ist1\ChannelBundle\Entity\Channel>
     */
    public function getChannelsByCategory($category)
    {
        $channels = array();

        /** @var Channel $channel */
        foreach ($this->channels as $channel) {
            if (strcasecmp($channel->getCategory(), $category) == 0){
                $channels[] = $channel;
            }
        }

        return $channels;
    }
} 