<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sites;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProjectController extends AbstractController
{
    /**
     * @Route("/project", name="project")
     */
    public function index()
    {
        
        
        return $this->render('project/index.html.twig', [
            'controller_name' => 'ProjectController',
        ]);
    }


    /**
     * @Route("/", name="home")
     */
    public function home() {
        $repo = $this->getDoctrine()->getRepository(Sites::class);
        $links = $repo->findAll();

         return $this->render('project/home.html.twig', [
             'sites' => $links, 

         ]);
    }

     /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion() {
        return $this->render('project/connexion.html.twig');
   }


   /**
     * @Route("/ajout", name="ajout_site")
     */
    public function create(Request $request, ObjectManager $manager) {
     
        $site = new Sites();

        $form = $this->createFormBuilder($site)
                        ->add('Liens')
                        ->add('save', SubmitType::class,[
                            'label' => 'Ajouter le site '
                        ])
                        ->getForm();
    
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $manager->persist($site);
            $manager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('project/ajout.html.twig',[
            'ajout' => $form->createView()
            ]);
           
   }


    /**
     * @Route("/supprimer", name="home")
     */
    public function  remove(Request $request) {
        $repo = $this->getDoctrine()->getRepository(Sites::class);
        $links = $repo->findAll();

         return $this->render('project/home.html.twig', [
             'sites' => $links, 

         ]);
    }
}
