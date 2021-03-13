<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Vidéo 6
/**
 * Class ArticlesController
 * @package App\Controller
 * @Route("/actualites", name="actualites_")
 */
class ArticlesController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index(): Response
    {
        // On appelle la liste de tous les articles(vidéo 6)
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findAll();

        // dd($articles);(vidéo 6)

        return $this->render('articles/index.html.twig', [
            'articles' => $articles
        ]);
    }
}
