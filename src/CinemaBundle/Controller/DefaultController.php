<?php

namespace CinemaBundle\Controller;

use CinemaBundle\Entity\TpFilm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $content = $this->get('templating')->render(
            'CinemaBundle:Default:index.html.twig',
            array(
                'nom' => 'nico',
            )
        );

        return new Response($content);
    }

    /**
     * Liste l'ensemble des films triés par date de publication pour une page donnée.
     *
     * @Route("/movies/{page}", requirements={"page" = "\d+"}, name="cinema_view")
     * @Method("GET")
     * @Template("CinemaBundle/view.html.twig")
     *
     * @param int $page Le numéro de la page
     *
     * @return array
     */
    public function viewAction($page)
    {
        $nbArticlesParPage = $this->container->getParameter('nb_articles_par_page');

        $em = $this->getDoctrine()->getEntityManager();

        $movies = $em->getRepository("CinemaBundle:TpFilm")
            ->findAllPagineEtTrie($page, $nbArticlesParPage);


        $pagination = array(
            'page' => $page,
            'nbPages' => ceil(count($movies) / $nbArticlesParPage),
            'nomRoute' => 'cinema_view',
            'paramsRoute' => array(),
        );

        return $this->render(
            'CinemaBundle:Default:view.html.twig',
            array(
                'movies' => $movies,
                'pagination' => $pagination,
            )
        );
    }

}
