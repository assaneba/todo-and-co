<?php

namespace App\Tests\Controller;

use App\Tests\NeedLogin;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class TaskControllerTest extends WebTestCase
{
    use NeedLogin;
    use FixturesTrait;

    public function testCreateTask()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $crawler = $client->request('GET', '/tasks/create');

        $form = $crawler->selectButton('Ajouter')->form();
        $form['task[title]'] = 'Title test';
        $form['task[content]'] = 'Content of the task';

        $client->submit($form);

        static::assertResponseRedirects('/tasks');
        $crawler = $client->followRedirect();

        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }

    public function testUpdateTask()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $this->assertNotNull($data['task3']);

        $crawler = $client->request('GET', '/tasks/'.$data['task3']->getId().'/edit');
        $this->assertSame(200, $client->getResponse()->getStatusCode());

        $form = $crawler->selectButton('Modifier')->form();
        $form['task[title]'] = 'Modified title';
        $form['task[content]'] = 'Modified content';

        $client->submit($form);

        static::assertResponseRedirects('/tasks');
        $crawler = $client->followRedirect();

        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }

    public function testDeleteTask()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user2']);

        $this->assertNotNull($data['task4']);

        $taskId = $data['task4']->getId();

        $client->request('GET', '/tasks/'.$taskId.'/delete');

        $this->assertSame(302, $client->getResponse()->getStatusCode());
        static::assertResponseRedirects('/tasks');
        $crawler = $client->followRedirect();
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }

    public function testTaskListForUnauthenticatedUser()
    {
        $client = static::createClient();
        $client->request('GET', '/tasks');

        static::assertSame(302, $client->getResponse()->getStatusCode());
        static::assertResponseRedirects('http://localhost/login');
        $client->followRedirect();
    }

    public function testTaskListGrantedAccess()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user3']);

        $client->request('GET', '/tasks');

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testToggle()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $this->assertNotNull($data['task8']);
        $taskId = $data['task8']->getId();

        $client->request('GET', '/tasks/'.$taskId.'/toggle');

        $this->assertSame(302, $client->getResponse()->getStatusCode());

        static::assertResponseRedirects('/tasks');
        $crawler = $client->followRedirect();
        $this->assertSame(200, $client->getResponse()->getStatusCode());

        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }

    public function testDeleteAnonymousTaskByAdmin()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user1']);

        $this->assertNotNull($data['task14']);
        $taskId = $data['task14']->getId();

        $client->request('GET', '/tasks/'.$taskId.'/delete');

        $this->assertSame(302, $client->getResponse()->getStatusCode());
        static::assertResponseRedirects('/tasks');
        $crawler = $client->followRedirect();
        $this->assertSame(200, $client->getResponse()->getStatusCode());
        $this->assertSame(1, $crawler->filter('div.alert.alert-success')->count());
    }

    public function testDeleteAnonymeTaskIsFaillureByUser()
    {
        $client = static::createClient();
        $data = $this->loadFixtureFiles(array(__DIR__.'/../../fixtures/test-contents.yml'));

        $this->login($client, $data['user5']);

        $this->assertNotNull($data['task20']);
        $taskId = $data['task20']->getId();

        $client->request('GET', '/tasks/'.$taskId.'/delete');

        $this->assertSame(403, $client->getResponse()->getStatusCode());
    }
}
