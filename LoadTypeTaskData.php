<?php

namespace SEPConseil\ArduousnessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SEPConseil\ArduousnessBundle\Entity\ardTypetask;

class LoadTypeTaskData extends AbstractFixture implements OrderedFixtureInterface
{
	const HANDLINGCARRY = 'Manutention manuelle - Porter des charges';
	const HANDLINGPUSH = 'Manutention manuelle - Pousser / Tirer des charges';
	const HANDLINGPLURALITY = 'Manutention manuelle - Cumul des charges';
	const PAINFULL = 'Postures pénibles';
	const EXTREMTEMPERATURE = 'Températures extrêmes';
	const HYPERBARIC = 'Travail en milieu hyperbare';
	const REPETITIVEWORK = 'Travail répétitif';
	const NIGHTWORK = 'Travail de nuit';
	const VIBRATIONBODY = 'Vibration du corps';
	const VIBRATIONHAND = 'Vibration des bras et des mains';
	const NOISEAVERAGE = 'Bruit moyen';
	const NOISEMAX = 'Pic de bruit';

	public function Load (ObjectManager $manager)
	{
		$ardTypetasks = array();

// ligne a ajouter pour l'ajout d'un type de tableau
		$ardTypetasks[] = $this->createObject(self::HANDLINGCARRY);

//
		$ardTypetasks[] = $this->createObject(self::HANDLINGPUSH);
		$ardTypetasks[] = $this->createObject(self::HANDLINGPLURALITY);
		$ardTypetasks[] = $this->createObject(self::PAINFULL);
		$ardTypetasks[] = $this->createObject(self::EXTREMTEMPERATURE);
		$ardTypetasks[] = $this->createObject(self::HYPERBARIC);
		$ardTypetasks[] = $this->createObject(self::REPETITIVEWORK);
		$ardTypetasks[] = $this->createObject(self::NIGHTWORK);
		$ardTypetasks[] = $this->createObject(self::VIBRATIONBODY);
		$ardTypetasks[] = $this->createObject(self::VIBRATIONHAND);
		$ardTypetasks[] = $this->createObject(self::NOISEAVERAGE);
		$ardTypetasks[] = $this->createObject(self::NOISEMAX);


		foreach ($ardTypetasks as $ardTypetask)
		{
      		$manager->persist($ardTypetask);
    	}

    	$manager->flush();
	}

	private function createObject ($libelleTypeTask)
    {
        $object = new ardTypetask();

        $object->setLibelleTypeTask($libelleTypeTask);

        $this->addReference($libelleTypeTask, $object);

        return $object;
    }

    public function getOrder()
    {
        return 10;
    }
}