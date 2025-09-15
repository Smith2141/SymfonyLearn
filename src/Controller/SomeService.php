<?php

// src/Service/SomeService.php

namespace App\Service;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SomeService
{
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
    ) {
    }

    public function someMethod(): void
    {
        // ...

        // сгенерировать URL без аргументов маршрутв
        $signUpPage = $this->urlGenerator->generate('sign_up');

        // сгенерировать URL с аргументами маршрута
        $userProfilePage = $this->urlGenerator->generate('user_profile', [
            'username' => $user->getUserIdentifier(),
        ]);

        // сгенерированные URL являются "абсолютными путями" по умолчанию. Передайте третий необязательный
        // аргумент, чтобы сгенерировать другие URL (например, "абсолютный URL")
        $signUpPage = $this->urlGenerator->generate('sign_up', [], UrlGeneratorInterface::ABSOLUTE_URL);

        // когда маршрут локализован, Symfony по умолчанию использует текущую локаль запроса
        // передайте другое значение '_locale', если вы хотите установить локаль четко
        $signUpPageInDutch = $this->urlGenerator->generate('sign_up', ['_locale' => 'nl']);
    }
}
