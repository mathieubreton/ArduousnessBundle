<?php

namespace SEPConseil\ArduousnessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Common\Collections\Collection;
use SEPConseil\ArduousnessBundle\Entity\ardColumn;
use SEPConseil\ArduousnessBundle\Entity\ardColumnRepository;
use SEPConseil\ArduousnessBundle\Entity\ardTask;
use SEPConseil\ArduousnessBundle\Entity\ardTypetask;
use SEPConseil\ArduousnessBundle\Entity\ardValue;
use Doctrine\ORM\EntityRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SEPConseilArduousnessBundle:Default:index.html.twig');

    }

    /**
     * Function view handling.
     *
     * @param integer $typestask
     */
    public function handlingAction()
    {
       $manager = $this->getDoctrine()->getManager();
        $listTypetask = $manager
            ->getRepository('SEPConseilArduousnessBundle:ardTypetask')
            ->myFindTypeTask(); 
        $listValue1 = $manager
            ->getRepository('SEPConseilArduousnessBundle:ardValue')
            ->myFindValue1();
        $listValue2 = $manager
            ->getRepository('SEPConseilArduousnessBundle:ardValue')
            ->myFindValue2();
        $listValue3 = $manager
            ->getRepository('SEPConseilArduousnessBundle:ardValue')
            ->myFindValue3();
        // récupération typetableau de cette view
        // récupération 3 listes de valeurs

        $columns = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn');
        $listTypetask = $columns -> getTypestask();
        $columns = $columns ->myFind($listTypetask);

        foreach ($typetask as $key)
        {
            //Pour chaque id de la liste
            //Récupérer les column avec ces types tableau
        }

        foreach ($columns as $listValues)
        {
            $listValues = $columns -> getValues();
            $manager->persist($listValues);
        }
        $manager->flush();

        $tasks = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->myFindTask();

        return $this->render('SEPConseilArduousnessBundle:Default:handling.html.twig', array('tasks' => $tasks, 'listValues1' => $listValues1, 'listValues2' => $listValues2, 'listValues3' => $listValues3));

        /*$manager = $this->getDoctrine()->getManager();
        $columns = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $tasks = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetasks = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $values = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:handling.html.twig', array('columns' => $columns, 'tasks' => $tasks, 'typetasks' => $typetasks, 'values' => $values));*/
    }

    public function painfulAction()
    {
    	$manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:painful.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function temperatureAction()                                                       
    {
        $manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:temperature.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function hyperbaricAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:hyperbaric.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function repetitiveWorkAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:repetitivework.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function nightWorkAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:nightwork.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function vibrationAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:vibration.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function noiseAction()
    {
        $manager = $this->getDoctrine()->getManager();
        $column = $manager ->getRepository('SEPConseilArduousnessBundle:ardColumn')->findAll();
        $task = $manager ->getRepository('SEPConseilArduousnessBundle:ardTask')->findAll();
        $typetask = $manager ->getRepository('SEPConseilArduousnessBundle:ardTypetask')->findAll();
        $value = $manager ->getRepository('SEPConseilArduousnessBundle:ardValue')->findAll();

        return $this->render('SEPConseilArduousnessBundle:Default:noise.html.twig', array('columns' => $column, 'tasks' => $task, 'typetasks' => $typetask, 'values' => $value));
    }

    public function addTaskAction()
    {
        $task = new ardTask();

        $formBuilder = $this->get('form.factory')->createBuilder('form', $task);

        $form = $formBuilder->getForm();
        return $this->render('SEPConseilArduousnessBundle:Default:addtask.html.twig', array(
      'form' => $form->createView()
      ));

        return $this->render('SEPConseilArduousnessBundle:Default:addtask.html.twig');
    }
}