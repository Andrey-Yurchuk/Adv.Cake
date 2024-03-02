<?php

declare(strict_types=1);

namespace App\Classes;

class Text
{
    /**
     * The method that reverses the order of letters in each word while preserving case and punctuation
     *
     * @param string $string
     * @return string
     */
    public function revertCharacters(string $string): string
    {
        return preg_replace_callback('/[\d\w]+/u', function ($matches) {
            $chars = mb_str_split($matches[0]);
            $chars = array_reverse($chars);
            return implode('', $chars);
        }, $string);
    }
}
