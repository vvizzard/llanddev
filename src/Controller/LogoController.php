<?php

namespace App\Controller;

use App\Entity\Logo;
use App\Repository\LogoRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface as EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class LogoController extends AbstractController
{
    /**
     * @Route("/admin/logo", name="logo")
     */
    public function index(Request $request, EntityManager $entityManager, 
    LogoRepository $logoRepository, Security $security): Response
    {
        $logo = new Logo();
        $form = $this->createFormBuilder($logo)
            ->add('name')
            ->add('brand')
            ->add('link')
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $logo->setCreatedBy($security->getUser());
            $logo->setCreationDate(new DateTime());

            $entityManager->persist($logo);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }

        $logos = $logoRepository->findAll();

        return $this->render('logo/index.html.twig', [
            'logos' => $logos,
            'logo' => $logo,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/logo/{id}", name="update_logo")
     */
    public function update(Request $request, EntityManager $entityManager, 
    LogoRepository $logoRepository, Logo $logo, Security $security): Response
    {
        $form = $this->createFormBuilder($logo)
            ->add('name')
            ->add('brand')
            ->add('link')
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $logo->setModifiedBy($security->getUser());
            $logo->setModificationDate(new DateTime());

            $entityManager->persist($logo);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }

        $logos = $logoRepository->findAll();

        return $this->render('logo/index.html.twig', [
            'logos' => $logos,
            'logo' => $logo,
            'form' => $form->createView(),
        ]);
    }
}
