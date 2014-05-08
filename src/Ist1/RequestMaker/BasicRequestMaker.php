<?php

namespace Ist1\RequestMaker;


class BasicRequestMaker implements RequestMaker
{
    public function performRequest($url)
    {
        return file_get_contents($url);
    }
}
