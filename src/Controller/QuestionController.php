<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     * @return Response
     */
    public function homepage()
    {
        return $this->render("/home.html.twig") ;
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug)
    {
        $answers = [
            "Answer 1",
            "Answer 2",
            "Answer 3"
        ];

        dump($slug, $this);

        return $this->render("/question/show.html.twig", [
           "question" => strtoupper(str_replace("-", " ", $slug)),
            "answers" => $answers
        ]);
    }
}