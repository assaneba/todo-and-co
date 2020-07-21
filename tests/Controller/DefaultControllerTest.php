<?php

namespace App\Tests\Controller;

use App\Entity\User;
use App\Tests\NeedLogin;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    use NeedLogin;
    use FixturesTrait;

    public function testHomepageRedirectLogin()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        static::assertSame(302, $client->getResponse()->getStatusCode());
        //static::assertResponseRedirects('/login');
        $client->followRedirect();
        static::assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testHomepageAuthenUser()
    {
        $client = static::createClient();

        $users = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $users["user1"]);
        $client->request('GET', '/');

        static::assertSame(200, $client->getResponse()->getStatusCode());
    }
}
