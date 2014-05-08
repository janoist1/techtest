<?php

namespace Ist1\RequestMaker;


class BasicRequestMaker implements RequestMaker
{
    /**
     * @param $url
     * @return string
     * @throws RequestMakerException
     */
    public function performRequest($url)
    {
        $result = @file_get_contents($url);

        if ($result === false) {
            throw new RequestMakerException('Failed to get contents');
        }

        return $result;
    }
}
