<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TaskTest extends KernelTestCase
{
    private $task;
    private $createdAt;
    private $author;

    public function setUp(): void
    {
        $this->task = new Task();
        $this->createdAt = new \DateTime();
        $this->author = new User();
    }

    public function testId()
    {
        self::assertEquals(null, $this->task->getId());
    }

    public function testCreatedAt()
    {
        $this->task->setCreatedAt(new \DateTime);

        self::assertEquals(date('Y-m-d H:i:s'), $this->task->getCreatedAt()->format('Y-m-d H:i:s'));
    }


    public function testTitle()
    {
        $this->task->setTitle('Titre de la tâche');
        self::assertEquals('Titre de la tâche', $this->task->getTitle());
    }

    public function testContent()
    {
        $this->task->setContent('Contenu de la tâche');
        self::assertEquals('Contenu de la tâche', $this->task->getContent());
    }

    public function testIsDone()
    {
        self::assertEquals(false, $this->task->IsDone());
    }

    public function testToggle()
    {
        self::assertEquals(false, $this->task->toggle(false));
    }

    public function testUser()
    {
        $userStub = $this->createMock(User::class);
        $this->task->setUser($userStub);
        self::assertEquals($userStub, $this->task->getUser());
    }
}
