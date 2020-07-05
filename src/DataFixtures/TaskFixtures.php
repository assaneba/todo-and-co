<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TaskFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <= 15; $i++) {
            $task = new Task();
            $task->setTitle('Tache n°' . $i);
            $task->setContent('Contenue de la tache n°'. $i);
            $task->setCreatedAt(new \DateTime());

            if (in_array($i, [0,2])){
                $task->setUser($this->getReference(UserFixtures::USER_REFERENCE.$i));
            }
            elseif (in_array($i, [1,3])) {
                $task->setUser($this->getReference(UserFixtures::ADMIN_REFERENCE.$i));
            }
            else {
                $task->setUser(null);
            }
            $manager->persist($task);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }

}
