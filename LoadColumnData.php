<?php

namespace SEPConseil\ArduousnessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use SEPConseil\ArduousnessBundle\Entity\ardColumn;
use SEPConseil\ArduousnessBundle\Entity\ardTypetask;
use SEPConseil\ArduousnessBundle\Entity\ardValue;

class LoadColumnData extends AbstractFixture implements OrderedFixtureInterface
{
	const TASKNAME = 'Nom de la tâche';
	const HANDLINGWEIGHT = 'Poids en Kg';
	const HANDLINGNUMBER = 'Nb. pers portant charge';
	const HANDLINGWEIGHTPER = 'Charge par personne (Kg)';
	const HANDLINGSHOULDERS = 'Prise au sol ou au-dessus des épaules';
	const FREQUENCYACTION = 'Fréquence de l\'action';
	const HANDLINGTIME = 'Temps moyen de manutention (min)';
	const HANDLINGARDUOUSTIME = 'Temps pénibilité H/an';
	const FREQUENCYACTIONNUMBER = 'Unité';
	const FREQUENCYACTIONVALUE = 'Valeur';
	const HANDLING15KG = '≥ 15 Kg';
	const HANDLING10KG = '≥ 10 Kg + Contrainte';

	const HANDLINGARDUOUSTIME250KG = 'Temps pénibilité H/an ≥ 250 Kg / personne';

	const HANDLINGTOTALWEIGHT = 'Poids total charge (Kg)';
	const HANDLINGNUMBERARDUOUSDAYS = 'Nb. jour pénible / an ≥ 7500 Kg / Jr';

	const PAINFULTIMEPOSITION = 'Temps passé dans chaque position pour chacune des actions';
	const PAINFULKNEES = 'A genoux';
	const PAINFULCROUCHED = 'Accroupie';
	const PAINFULARMSSHOULDERS = 'Bras au dessus des épaules';
	const PAINFULLATERALTORSION = 'Torsion latérale du torse avec un angle ≥ 30°';
	const PAINFULTORSEFLEXED = 'Torse fléchi en avant à un angle ≥ 45°';
	const TOTAL = 'Total';
	const PAINFULTIMEYEAR = 'Temps par actions en Heures / an';

	const EXTREMTEMPERATURENAMEZONE = 'Nom de la zone';
	const EXTREMTEMPERATUREAMBIENT = 'Température ambiante en °C';
	const EXTREMTEMPERATUREAVERAGETIME = 'Temps moyen passé dans la zone (min)';
	const EXTREMTEMPERATURETOTALTIME5 = 'Total temps ≤ 5°C H/an';
	const EXTREMTEMPERATURETOTALTIME30 = 'Total temps ≥ 30°C H/an';

	const HYPERBARICWORKTYPE = 'Type de travail';
	const HYPERBARICPRESSION = 'Pression relative en hectopascals';
	const HYPERBARICTOTAL1200 = 'Total P ≥ 1200 hPa Nb / an';

	const REPETITIVEWORKCYCLETIME = 'Temps de cycle de la tache en seconde';
	const REPETITIVEWORKACTIONNUMBER = 'Nombre d\'actions technique de la tache ≤ 30s : sans unité > 30s : actions / min';
	const REPETITIVEWORKAVERAGETIME = 'Temps moyen passé à effectuer cette tache (min)';
	const REPETITIVEWORKCYCLETOTAL29 = 'Total cycle ≤ 30s Heures / an';
	const REPETITIVEWORKCYCLETOTAL31 = 'Total cycle > 30s Heures / an';

	const NIGHTWORKWEEKDAY = 'Jour de la semaine';
	const NIGHTWORKTAKEWORK = 'Heure de prise de poste';
	const NIGHTWORKENDWORK = 'Heure de fin de poste';
	const NIGHTWORKTIME = 'Temps entre 0h00 et 5h00';
	const NIGHTWORKOK = 'Pris en compte';

	const EQUIPMENT = 'Equipement';
	const VIBRATIONZONE = 'Zone d’utilisation';
	const VIBRATIONUSINGTIME = 'Temps d’utilisation (H/Jour)';
	const VIBRATIONEMITTED = 'Vibration émise (m/s²)';
	const VIBRATIONTIME = 'Vibration² x temps';

	const NOISEWORKZONE = 'Zone de travail';
	const NOISEUSINGTIME = 'Temps d’utilisation (H/Jour)';
	const NOISEDBEPI = 'Efficacité des EPI contre le bruit (dB)';
	const NOISEDBZONE = 'Bruit dans la zone en dB(A)';
	const NOISEDBTASK = 'Bruit généré par la tache en dB(A)';
	const NOISEDBGLOBAL = 'Bruit global au poste en dB(A)';
	const NOISEFELT = 'Bruit ressenti x temps';

	const NOISEACTION = 'Action générant le bruit > 135 dB';
	const NOISEDBMESURED = 'Mesure du bruit en dB';
	const NOISEEFFECTIVE = 'Bruit effectif en dB';
	const NOISETOTAL = 'Total Bruit ≥ 135 dB Nb / an';

	//const CHEMICALNAME = 'Produits chimiques';
	//const CHEMICALTYPE = 'TYpe de produit';
	//const CHEMICALSUPPLIER = 'Fournisseur';


	public function Load (ObjectManager $manager)
	{
		$ardColumns = array();

		{
			// voici ce qu'il faut ajouter lorsque l'on veut ajouter une colonne avec la constante correspondante
			$libelleColumn = self::TASKNAME;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH, LoadTypeTaskData::HANDLINGPLURALITY, LoadTypeTaskData::PAINFULL, LoadTypeTaskData::EXTREMTEMPERATURE, LoadTypeTaskData::HYPERBARIC, LoadTypeTaskData::REPETITIVEWORK];
			$values = 1;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGWEIGHT;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH];
			$values = 2;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGNUMBER;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH];
			$values = 3;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGWEIGHTPER;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH];
			$values = 4;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGSHOULDERS;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];
			$values = 5;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::FREQUENCYACTION;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH, LoadTypeTaskData::HANDLINGPLURALITY, LoadTypeTaskData::EXTREMTEMPERATURE, LoadTypeTaskData::HYPERBARIC, LoadTypeTaskData::REPETITIVEWORK, LoadTypeTaskData::NOISEMAX];
			$values = 6;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGTIME;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH];
			$values = 7;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGARDUOUSTIME;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];
			$values = 8;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::FREQUENCYACTIONNUMBER;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH, LoadTypeTaskData::HANDLINGPLURALITY, LoadTypeTaskData::EXTREMTEMPERATURE, LoadTypeTaskData::HYPERBARIC, LoadTypeTaskData::REPETITIVEWORK, LoadTypeTaskData::NOISEMAX, LoadTypeTaskData::PAINFULL];
			$values = 9;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::FREQUENCYACTIONVALUE;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY, LoadTypeTaskData::HANDLINGPUSH, LoadTypeTaskData::HANDLINGPLURALITY, LoadTypeTaskData::EXTREMTEMPERATURE, LoadTypeTaskData::HYPERBARIC, LoadTypeTaskData::REPETITIVEWORK, LoadTypeTaskData::NOISEMAX];
			$values = 10;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLING15KG;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];
			$values = 11;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLING10KG;
			$typestask = [LoadTypeTaskData::HANDLINGCARRY];
			$values = 12;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGARDUOUSTIME250KG;
			$typestask = [LoadTypeTaskData::HANDLINGPUSH];
			$values = 13;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGTOTALWEIGHT;
			$typestask = [LoadTypeTaskData::HANDLINGPLURALITY];
			$values = 14;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HANDLINGNUMBERARDUOUSDAYS;
			$typestask = [LoadTypeTaskData::HANDLINGPLURALITY];
			$values = 15;
			
			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULTIMEPOSITION;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 16;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULKNEES;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 17;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULCROUCHED;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 18;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULARMSSHOULDERS;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 19;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULLATERALTORSION;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 20;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULTORSEFLEXED;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 21;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::TOTAL;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 22;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::PAINFULTIMEYEAR;
			$typestask = [LoadTypeTaskData::PAINFULL];
			$values = 23;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::EXTREMTEMPERATURENAMEZONE;
			$typestask = [LoadTypeTaskData::EXTREMTEMPERATURE];
			$values = 24;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::EXTREMTEMPERATUREAMBIENT;
			$typestask = [LoadTypeTaskData::EXTREMTEMPERATURE];
			$values = 25;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::EXTREMTEMPERATUREAVERAGETIME;
			$typestask = [LoadTypeTaskData::EXTREMTEMPERATURE];
			$values = 26;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::EXTREMTEMPERATURETOTALTIME5;
			$typestask = [LoadTypeTaskData::EXTREMTEMPERATURE];
			$values = 27;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::EXTREMTEMPERATURETOTALTIME30;
			$typestask = [LoadTypeTaskData::EXTREMTEMPERATURE];
			$values = 28;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HYPERBARICWORKTYPE;
			$typestask = [LoadTypeTaskData::HYPERBARIC];
			$values = 29;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HYPERBARICPRESSION;
			$typestask = [LoadTypeTaskData::HYPERBARIC];
			$values = 30;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::HYPERBARICTOTAL1200;
			$typestask = [LoadTypeTaskData::HYPERBARIC];
			$values = 31;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::REPETITIVEWORKCYCLETIME;
			$typestask = [LoadTypeTaskData::REPETITIVEWORK];
			$values = 32;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::REPETITIVEWORKACTIONNUMBER;
			$typestask = [LoadTypeTaskData::REPETITIVEWORK];
			$values = 33;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::REPETITIVEWORKAVERAGETIME;
			$typestask = [LoadTypeTaskData::REPETITIVEWORK];
			$values = 34;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::REPETITIVEWORKCYCLETOTAL29;
			$typestask = [LoadTypeTaskData::REPETITIVEWORK];
			$values = 35;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::REPETITIVEWORKCYCLETOTAL31;
			$typestask = [LoadTypeTaskData::REPETITIVEWORK];
			$values = 36;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NIGHTWORKWEEKDAY;
			$typestask = [LoadTypeTaskData::NIGHTWORK];
			$values = 37;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NIGHTWORKTAKEWORK;
			$typestask = [LoadTypeTaskData::NIGHTWORK];
			$values = 38;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NIGHTWORKENDWORK;
			$typestask = [LoadTypeTaskData::NIGHTWORK];
			$values = 39;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NIGHTWORKTIME;
			$typestask = [LoadTypeTaskData::NIGHTWORK];
			$values = 40;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NIGHTWORKOK;
			$typestask = [LoadTypeTaskData::NIGHTWORK];
			$values = 41;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::EQUIPMENT;
			$typestask = [LoadTypeTaskData::VIBRATIONBODY];
			$values = 42;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::VIBRATIONZONE;
			$typestask = [LoadTypeTaskData::VIBRATIONBODY];
			$values = 43;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::VIBRATIONUSINGTIME;
			$typestask = [LoadTypeTaskData::VIBRATIONBODY];
			$values = 44;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::VIBRATIONEMITTED;
			$typestask = [LoadTypeTaskData::VIBRATIONBODY];
			$values = 45;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::VIBRATIONTIME;
			$typestask = [LoadTypeTaskData::VIBRATIONBODY];
			$values = 46;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEWORKZONE;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 47;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEUSINGTIME;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 48;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEDBEPI;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 49;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEDBZONE;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 50;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEDBTASK;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 51;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEDBGLOBAL;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 52;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEFELT;
			$typestask = [LoadTypeTaskData::NOISEAVERAGE];
			$values = 53;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEACTION;
			$typestask = [LoadTypeTaskData::NOISEMAX];
			$values = 54;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEDBMESURED;
			$typestask = [LoadTypeTaskData::NOISEMAX];
			$values = 55;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISEEFFECTIVE;
			$typestask = [LoadTypeTaskData::NOISEMAX];
			$values = 56;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}

		{
			$libelleColumn = self::NOISETOTAL;
			$typestask = [LoadTypeTaskData::NOISEMAX];
			$values = 57;

			$ardColumns[] = $this->createObject($libelleColumn, $typestask, $values);
		}


		foreach ($ardColumns as $ardColumn)
		{
      		$manager->persist($ardColumn);
    	}

		$manager->flush();
	}

	private function createObject ($libelleColumn, $typestask, $values)
    {
        $object = new ardColumn();

        $object->setLibelleColumn($libelleColumn);
        foreach ($typestask as $typetask) 
        {
            $object->addTypestask($this->getReference($typetask));
        }
        $object->setValues($this->getReference($values));

        $this->setReference($libelleColumn, $object);

        return $object;
    }

    public function getOrder()
    {
        return 20;
    }
}