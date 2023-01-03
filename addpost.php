<?php
session_start();
require_once './model/managers/PostManager.php'; 
require_once './model/managers/CategoryManager.php'; 

$categories = CategoryManager::getAllCategories();


if(isset($S_SESSION['user'])){
     if(isset($_POST)&&!empty($_POST)){
          $title = $_POST['title'];
          $picture = $_POST['picture'];
          $content = $_POST['content'];
          $userId = $_SESSION['user']->getIdUser();
          var_dump($userId);
     }

     require_once 'views/addPostView.php';

}else{
     echo 'Vous ne passerez pas !!! ';
}




