<?php

namespace App\Tests\Form;

use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Component\Form\Test\TypeTestCase;

class TaskTypeTest extends TypeTestCase
{
    public function testSubmitOk()
    {
        $formData = [
            'title' => 'Le titre',
            'content'=> 'Le contenu'
        ];
        $task = new Task();
        $task->setTitle($formData['title']);
        $task->setContent($formData['content']);

        $objectChecker = new Task();

        $form = $this->factory->create(TaskType::class, $objectChecker);
        $form->submit($formData);

        static::assertTrue($form->isSynchronized());
        static::assertEquals($task->getTitle(), $objectChecker->getTitle());
        static::assertEquals($task->getContent(), $objectChecker->getContent());
    }
}
