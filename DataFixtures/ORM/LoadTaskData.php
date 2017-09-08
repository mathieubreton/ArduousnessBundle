<?php

namespace SEPConseil\ArduousnessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SEPConseil\ArduousnessBundle\Entity\ardTask;
use SEPConseil\ArduousnessBundle\Entity\ardTypetask;

class LoadTaskData extends AbstractFixture implements OrderedFixtureInterface
{
	const TASKCARRY20 = 'Porter des planches 20x60x200';
	const TASKCARRY30 = 'Porter des poutres 30x30x400';
	const TASKCARRY50 = 'Porter des poutres 50x30x400';

	public function Load (ObjectManager $manager)
	{
		$ardTasks = array();

		{
			$libelleTask = self::TASKCARRY20;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];

			$ardTasks[] = $this->createObject($libelleTask, $typestask);
		}

		{
			$libelleTask = self::TASKCARRY30;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];

			$ardTasks[] = $this->createObject($libelleTask, $typestask);
		}

		{
			$libelleTask = self::TASKCARRY50;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];

			$ardTasks[] = $this->createObject($libelleTask, $typestask);
		}

		foreach ($ardTasks as $ardTask)
		{
      		$manager->persist($ardTask);
    	}

		$manager->flush();
	}

	private function createObject ($libelleTask, $typestask)
    {
        $object = new ardTask();

        $object->setLibelleTask($libelleTask);
        foreach ($typestask as $typetask) 
        {
            $object->addTasktype($this->getReference($typetask));
        }

        $this->addReference($libelleTask, $object);

        return $object;
    }

    public function getOrder()
    {
        return 40;
    }
      
}