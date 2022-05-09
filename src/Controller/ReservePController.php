<?php

namespace App\Controller;

use App\Entity\ReserveP;
use App\Form\ReservePType;
use App\Repository\ReservePRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reserve/p")
 */
class ReservePController extends AbstractController
{
    /**
     * @Route("/", name="reserve_p_index", methods={"GET"})
     */
    public function index(ReservePRepository $reservePRepository): Response
    {
        return $this->render('reserve_p/index.html.twig', [
            'reserve_ps' => $reservePRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reserve_p_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reserveP = new ReserveP();
        $form = $this->createForm(ReservePType::class, $reserveP);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reserveP);
            $entityManager->flush();

            return $this->redirectToRoute('reserve_p_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reserve_p/new.html.twig', [
            'reserve_p' => $reserveP,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reserve_p_show", methods={"GET"})
     */
    public function show(ReserveP $reserveP): Response
    {
        return $this->render('reserve_p/show.html.twig', [
            'reserve_p' => $reserveP,
        ]);
    }




}
