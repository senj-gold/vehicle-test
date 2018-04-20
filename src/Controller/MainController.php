<?php

namespace App\Controller;

use App\Utils\Bmw;
use App\Utils\Boat;
use App\Utils\Gas;
use App\Utils\Helicopter;
use App\Utils\Kamaz;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        $bmw = new Bmw();
        $bmw->move();

        $boat = new Boat();

        $helicopter = new Helicopter();

        $kamaz = new Kamaz();

        return $this->render('main/index.html.twig', [
            'vehicles' => [
                $bmw,
                $boat,
                $helicopter,
                $kamaz,
            ],
            'fuel' => new Gas(),
        ]);
    }
}
