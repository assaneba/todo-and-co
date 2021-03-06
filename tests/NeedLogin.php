<?php

namespace App\Tests;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

trait NeedLogin
{
    /**
     * @param  mixed $client
     * @param  mixed $user
     *
     * @return void
     */
    public function login (KernelBrowser $client, User $user): void
    {
        $session = $client->getContainer()->get('session');

        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $session->set('_security_main', serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $client->getCookieJar()->set($cookie);
    }

    private function getUser (String $username = null)
    {
        $userRepository = static::$container->get(UserRepository::class);
        return $userRepository->findOneBy(['username' => $username]);
    }
}