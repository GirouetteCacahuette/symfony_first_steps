<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionVoteController extends AbstractController
{
    /**
     * @Route("/question/{id}/vote/{direction}")
     * @param $id
     * @param $direction
     * @return Response
     */
    public function vote($id, $direction)
    {
        if ($direction === "up") {
            $currentVoteCount = rand(7, 100);
        } else {
            $currentVoteCount = rand(0, 5);
        }

        return new JsonResponse([
            'votes' => $currentVoteCount
        ]);
    }
}