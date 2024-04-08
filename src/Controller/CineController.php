<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CineController extends AbstractController{
    #[Route('/', name:'cine_card')]
   public function cineCard():Response{
       return $this->render('Card/card.html.twig');
   }

   #[Route('/cine', name:'cine_bundle')]
   public function cineIndex():Response{
       return $this->render('@Cinebundle/Cine/cine.html.twig');
   }


//    #[Route('/cine/section1', name:'cine_section1')]
//    public function cineSection1() : Response{
//        return $this->render('@Cine/section1.html.twig');
//    }
  
//    #[Route('/cine/section2', name:'cine_section2')]
//    public function cineSection2() : Response{
//        return $this->render('@Cine/section2.html.twig');
//    }


//    #[Route('/cine/section3', name:'cine_section3')]
//    public function cineSection3() : Response{
//        return $this->render('@Cine/section3.html.twig');
//    }
}
