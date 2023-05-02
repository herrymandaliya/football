<?php

namespace App\Controller;

use App\Repository\TeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="app_dashboard")
     */
    public function index(TeamRepository $teamRepository): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'teams' => $teamRepository->findAll(),
        ]);
    }
}
