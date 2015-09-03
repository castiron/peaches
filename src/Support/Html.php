<?php

namespace Castiron\Peaches\Support;

class Html
{

    public static function is_empty($htmlStr)
    {
        return ! (bool) preg_replace('/[\x00-\x1F\x80-\xFF]/', '', strip_tags($htmlStr));
    }

}