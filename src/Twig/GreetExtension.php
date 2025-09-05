<?php

namespace App\Twig;

use App\GreetingGenerator;
use Twig\Attribute\AsTwigFilter;

class GreetExtension
{
    public function __construct(
        private GreetingGenerator $greetingGenerator,
    ) {
    }

    #[AsTwigFilter('greet')]
    public function greetUser(string $name): string
    {
        $greeting =  $this->greetingGenerator->getRandomGreeting();

        return "$name, $greeting!!!";
    }
}
