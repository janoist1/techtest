<?php

namespace Ist1\ChannelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Ist1\ChannelBundle\Service\Channel;
use Ist1\ChannelBundle\Entity\ChannelCollection;


class NewsController extends Controller
{
    /**
     * Displays the index page with a list of channels
     *
     * @Route("/{channelCategory}/{newsCategory}", name="channel")
     * @Template()
     */
    public function indexAction($channelCategory, $newsCategory = null)
    {
        /** @var Channel $channelService */
        $channelService = $this->get('ist1_channel.channel');

        /** @var ChannelCollection $channelCollection */
        $channelCollection = $channelService->getChannels();

        return array(
            'channels' => $channelCollection->getChannelsByCategory($channelCategory),
            'category' => $newsCategory
        );
    }
}
