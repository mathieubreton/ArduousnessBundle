<?php

namespace SEPConseil\ArduousnessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SEPConseil\ArduousnessBundle\Entity\ardValue;
use SEPConseil\ArduousnessBundle\Entity\ardTask;
use SEPConseil\ArduousnessBundle\Entity\ardTypetask;

class LoadValueData extends AbstractFixture implements OrderedFixtureInterface
{
	const VALUEWEIGHT = 11;
	const VALUENUMBER = 1;
	const VALUECHARGE = 11;
	const GROUNDCATCHBOOLYES = 'OUI';
	const GROUNDCATCHBOOLNO = 'NON';

	public function Load (ObjectManager $manager)
	{
		$ardValues = array();
                                                                                                                                                                                                
		{
			$id = 1;
			$valueString = NULL;
			$valueInt = self::VALUEWEIGHT;
			$valueFloat = NULL;
			$valueBoolean = NULL;

			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 2;
			$valueString = NULL;
			$valueInt = self::VALUENUMBER;
			$valueFloat = NULL;
			$valueBoolean = NULL;

			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 3;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 4;
			$valueString = self::GROUNDCATCHBOOLYES;
			$valueInt = NULL;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 5;
			$valueString = self::GROUNDCATCHBOOLNO;
			$valueInt = NULL;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 6;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 7;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 8;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 9;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 10;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 11;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 12;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 13;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 14;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 15;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 16;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 17;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 18;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 19;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 20;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 21;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 22;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 23;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 24;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 25;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 26;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 27;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 28;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 29;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 30;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 31;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 32;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 33;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 34;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 35;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 36;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 37;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 38;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 39;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 40;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 41;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 42;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 43;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 44;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 45;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 46;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 47;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 48;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 49;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 50;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 51;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 52;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 53;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 54;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 55;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 56;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		{
			$id = 57;
			$valueString = NULL;
			$valueInt = self::VALUECHARGE;
			$valueFloat = NULL;
			$valueBoolean = NULL;
			
			$ardValues[] = $this->createObject($id, $valueString, $valueInt, $valueFloat, $valueBoolean);
		}

		foreach ($ardValues as $ardValue)
		{
      		$manager->persist($ardValue);
    	}

    	$manager->flush();
	}

	private function createObject ($id, $valueString, $valueInt, $valueFloat, $valueBoolean)
    {
        $object = new ardValue();

        $object->getId($id);
        $object->setValueString($valueString);
        $object->setValueInt($valueInt);
        $object->setValueFloat($valueFloat);
        $object->setValueBoolean($valueBoolean);

        $this->addReference($id, $object);

        return $object;
    }

    public function getOrder()
    {
        return 15;
    }
      
}