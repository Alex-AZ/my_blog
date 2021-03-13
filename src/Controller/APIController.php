<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */
class APIController extends AbstractController
{
    /**
     * @Route("/articles/liste", name="liste", methods={"GET"})
     */
    public function liste(ArticlesRepository $articlesRepo)
    {
        // On récupère la liste des articles
        $articles = $articlesRepo->findAll();
        dd($articles);
    }
}
