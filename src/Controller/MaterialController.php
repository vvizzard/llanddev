<?php

namespace App\Controller;

use App\Entity\Material;
use App\Repository\MaterialRepository;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaterialController extends AbstractController
{
    /**
     * @Route("/admin/material", name="material")
     */
    public function index(Request $request, EntityManager $entityManager, 
    MaterialRepository $materialRepository): Response
    {
        $material = new Material();
        $form = $this->createFormBuilder($material)
            ->add('name')
            ->add('brand')
            ->add('link')
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($material);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }

        $materials = $materialRepository->findAll();

        return $this->render('material/index.html.twig', [
            'materials' => $materials,
            'material' => $material,
            'form' => $form->createView(),
        ]);
    }
}
