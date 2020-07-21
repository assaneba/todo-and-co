<?php

namespace App\Tests\Controller;

use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    use FixturesTrait;

    protected $client ;

    public function testLogin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        static::assertSame(200, $client->getResponse()->getStatusCode());
        static::assertResponseIsSuccessful();

        static::assertSelectorNotExists('.alert.alert-danger');
        static::assertSame(1, $crawler->filter('form')->count());
        static::assertSame(1, $crawler->filter('input[name="_username"]')->count());
        static::assertSame(1, $crawler->filter('input[name="_password"]')->count());
        static::assertSame(1, $crawler->filter('button[type="submit"]')->count());

        static::assertSame(1, $crawler->filter('a.btn.btn-primary')->count());
    }

    public function testLoginWithBadCredentials()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('Se connecter')->form();
        $form['_username'] = 'Assane';
        $form['_password'] = 'BadPassword';
        $client->submit($form);

        static::assertResponseRedirects('http://localhost/login');
        //$this->assertTrue(preg_match('#\/login#', $client->getResponse()->headers->get('Location')));
        $client->followRedirect();

        static::assertSame(200, $client->getResponse()->getStatusCode());
        static::assertSelectorExists('.alert.alert-danger');
        static::assertSelectorTextSame('div.alert', "Invalid credentials.");
    }

    public function testLoginIsOk()
    {
        $client = static::createClient();

        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));
        //dd($data['user1']->getUsername());

        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('Se connecter')->form();
        $form['_username'] = $data['user1']->getUsername();
        $form['_password'] = $data['user1']->getPassword();
        $client->submit($form);

        static::assertSame(302, $client->getResponse()->getStatusCode());
    }

    public function testLogout()
    {
        $client = static::createClient();
        $client->request('GET', '/logout');
        static::assertSame(302, $client->getResponse()->getStatusCode());
    }
}
