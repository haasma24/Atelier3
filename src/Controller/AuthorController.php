<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/showAuthor/{name}',name:'app_showAuthor')]
    public function showAuthor($name){
        return $this ->render('Author/show.html.twig',['name' => $name,]);
    }

    #[Route('/list',name:'app_list')]
     public function list(){
        $authors = array(
            array('id' => 1, 'picture' => '/images/Victor_Hugo.jpg','username' => ' Victor
            Hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william-shakespeare.jpg','username' => '
            William Shakespeare', 'email' => ' william.shakespeare@gmail.com', 'nb_books' =>
            200 ),
            array('id' => 3, 'picture' => '/images/Taha_Hussein.jpg','username' => ' Taha
            Hussein', 'email' => 'taha.hussein@gmail.com', 'nb_books' => 300),);

            return $this ->render('Author/list.html.twig',['tab' => $authors]);
     }

     /*#[Route('/authorDetails/{id}',name:'app_details')]
     public function authorDetails($id ){
         return $this->render('Author/details.html.twig' , ['id'=>$id ]) ;
     }*/

     #[Route('/authorDetails/{id}/{picture}/{username}/{email}/{nb_books}',name:'app_details')]
     public function authorDetails($id , $picture , $username , $email , $nb_books){
         return $this->render('Author/showAuthor.html.twig' , ['id'=>$id  , 'picture' =>$picture , 'email' =>$email , 'nb_books'=>$nb_books]) ;
     }
            
}
