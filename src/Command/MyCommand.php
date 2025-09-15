<?php

// src/Command/MyCommand.php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

// ...

#[AsCommand(name: 'app:my-command')]
class MyCommand
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
    ) {
    }

    public function __invoke(SymfonyStyle $io): int
    {
        // сгенерируйте URL без аргументов маршрута
        $signUpPage = $this->urlGenerator->generate('sign_up');

        // сгенерируйте URL с аргументами маршрута
        $userProfilePage = $this->urlGenerator->generate('user_profile', [
            'username' => $user->getUserIdentifier(),
        ]);

        // сгенерированные URL являются "абсолютными путями" по умолчанию. Передайте третий необязательный
        // аргумент, чтобы сгенерировать другие URL (например, "абсолютный URL")
        $signUpPage = $this->urlGenerator->generate('sign_up', [], UrlGeneratorInterface::ABSOLUTE_URL);

        // когда маршрут локализован, Symfony по умолчанию использует текущую локаль запроса
        // передайте другое знаениче '_locale', если вы хотите установить локаль ясно
        $signUpPageInDutch = $this->urlGenerator->generate('sign_up', ['_locale' => 'nl']);

        // ...
    }
}
