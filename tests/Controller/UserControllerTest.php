<?php

namespace App\Tests\Controller;

use App\Tests\NeedLogin;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class UserControllerTest extends WebTestCase
{
    use NeedLogin;
    use FixturesTrait;

    public function testUserListAccessForUnauthenticated()
    {
        $client = static::CreateClient();
        $client->request('GET', '/users');

        static::assertSame(302, $client->getResponse()->getStatusCode());
        static::assertResponseRedirects('http://localhost/login');
        $client->followRedirect();
    }

    public function testUserListAccess()
    {
        $client = static::CreateClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user5']);

        $client->request('GET', '/users');
        static::assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testGETCreateUserPageIsSuccess()
    {
        $client = static::CreateClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $client->request('GET', '/users/create');

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testPOSTCreateUserIsSuccess()
    {
        $client = static::CreateClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $crawler = $client->request('GET', '/users/create');

        $form = $crawler->selectButton('Ajouter')->form();
        $form['user[username]'] = 'testNewUser';
        $form['user[email]'] = 'usertest@mail.com';
        $form['user[password][first]'] = 'passerTest';
        $form['user[password][second]'] = 'passerTest';
        $form['user[roles]'] = 'ROLE_USER';

        $client->submit($form);

        static::assertResponseRedirects('/users');
        $crawler = $client->followRedirect();
        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }

    public function testPOSTUpdateUserIsSuccess()
    {
        $client = static::CreateClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $this->assertNotNull($data['user5']);
        
        $userId = $data['user5']->getId();

        $crawler = $client->request('GET', '/users/'.$userId.'/edit');
        $this->assertSame(200, $client->getResponse()->getStatusCode());

        $form = $crawler->selectButton('Modifier')->form();
        $form['user[username]'] = 'updated-user';
        $form['user[email]'] = 'updated-user@mail.com';
        $form['user[password][first]'] = 'passTest';
        $form['user[password][second]'] = 'passTest';
        $form['user[roles]'] = 'ROLE_USER';

        $client->submit($form);

        static::assertResponseRedirects('/users');
        $crawler = $client->followRedirect();

        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }
}
