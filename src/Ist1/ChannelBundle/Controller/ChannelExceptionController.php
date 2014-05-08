<?php

namespace Ist1\ChannelBundle\Controller;

use Symfony\Bundle\TwigBundle\Controller\ExceptionController;
use Symfony\Component\HttpKernel\Exception\FlattenException;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ChannelExceptionController extends ExceptionController
{
    /**
     * @inheritdoc
     * @Template()
     */
    public function showAction(Request $request, FlattenException $exception, DebugLoggerInterface $logger = null, $_format = 'html')
    {
        $currentContent = $this->getAndCleanOutputBuffering($request->headers->get('X-Php-Ob-Level', -1));

        $code = $exception->getStatusCode();

        return array(
            'status_code' => $code,
            'status_text' => isset(Response::$statusTexts[$code]) ? Response::$statusTexts[$code] : '',
            'exception' => $exception,
            'currentContent' => $currentContent,
        );
    }
}
