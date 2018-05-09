<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    public function generate(): \Generator
    {
        $emojis = ['🚀', '🚃', '🚄', '🚅', '🚇'];
        foreach ($emojis as $emoji) {
        	yield $emoji;
        }
    }
}