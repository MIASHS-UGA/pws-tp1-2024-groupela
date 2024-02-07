<?php
require_once 'app/Models/Article.php';

class Home
{
  function index()
  {
    //On inclut la classe Article pour qu’elle soit disponible.
    $article_model = new Article();

     //On instancie la classe Article et on stocke l’objet dans une variable $article_model.
     $articles = $article_model->list();//Apel de la fonction list() sur l’objet Article 
                                        //On stocke le résultat dans la variable $articles.
     //On inclut le fichier template.php ()
     require "resources/views/template.php";
  }
    //Pour traiter l'ajout d'un nouvel article
    function add()
    {
    //On teste si $_POST contient des données   
    if(isset($_POST['ajout_article'])) {
        //Appel de la fonction add du fichier Article.php dans Models
        $article_model = new Article();
        $article_model->add($_POST);
    }
    $articles = $article_model->list();
    require "resources/views/template.php";
    }
}

//ON A UUN SOUCI SUR CETTE PARTIE LA A L'AFFICHAGE

