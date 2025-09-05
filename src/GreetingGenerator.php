<?php

namespace App;

class GreetingGenerator
{
    public function getRandomGreeting(): string
    {
        $greetings = ['Hey', 'Yo', 'Aloha'];
        $greeting = $greetings[array_rand($greetings)];

        return $greeting;
    }
}
