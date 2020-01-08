<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\MoviesType;
use App\Entity\Movies;

class MoviesController extends AbstractController
{
    /**
     * @Route("/movies", name="admin_movies")
     */
    public function index()
    {
        $movie = new Movies;

        $form = $this->createForm(MoviesType::class, $movie);

        return $this->render('admin/movies/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
