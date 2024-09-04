<?php

namespace App\Controller;

use App\Entity\Avis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AvisFormType;

class AvisController extends AbstractController
{
    #[Route('/déposer-un-avis', name: 'app_create_avis')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avis = new Avis();

        $form = $this->createForm(AvisFormType::class, $avis);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avis);
            $entityManager->flush();

            return $this->redirectToRoute('app_home');
        }

        return $this->render('avis/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/avis', name: 'app_avis')]
    public function avis(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avis = $entityManager->getRepository(Avis::class)->findAll();

        return $this->render('avis/avis.html.twig', [
            'avis' => $avis,
        ]);
    }
}
