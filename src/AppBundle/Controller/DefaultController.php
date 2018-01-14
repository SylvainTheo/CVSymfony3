<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Form;
use Doctrine\DBAL\Types\TextType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function accueil()
    {
        return $this->render('accueil.html.twig');
    }

    /**
     * @Route("/accueil")
     */
    public function accueile()
    {
        return $this->render('accueil.html.twig');
    }

    /**
     * @Route("/blog")
     */
    public function blog()
    {
        return $this->render('blog.html.twig');
    }
    /**
     * @Route("/realisation")
     */
    public function realisation()
    {
        return $this->render('realisation.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    /*public function contact()
    {
        return $this->render('contact.html.twig');
    }*/
    public function newForm(Request $request)
    {
        // create a task and give it some dummy data for this example
        $Form = new Form();
        $Form->setTitle('Ecrivez nous');
        $Form->setMessage('Un message');

        $form = $this->createFormBuilder($Form)
            ->add('Titre', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('Message', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('Envoyer', SubmitType::class, array('label' => 'Envoyer nous votre message'))
            ->getForm();

        return $this->render('contact.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
