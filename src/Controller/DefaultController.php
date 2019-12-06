<?php
namespace TA\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('@project/default/index.html.twig', [
            'number' => $number,
        ]);
    }
}
