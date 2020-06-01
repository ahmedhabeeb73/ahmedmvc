<?php

/*
 * App Core Class
 * creates Url & loads core controller
 * url format -/controller/method/params
 *
 * */


class Core {

 protected $currentController="Pages";
 protected $currentMethod="index";
 protected $params=[];


 public function __construct()
 {
     $url=$this->getUrl();


     //look in controllers for first value
     if(isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]).'.php')){
         //if exists, Set as controller
         $this->currentController =ucwords($url[0]);
         //unset 0 index
         unset($url[0]);

     }

     //Require the Controller
     require_once ("../app/controllers/" . $this->currentController .'.php');

     //Instantiate controller class
     $this->currentController=new $this->currentController;
 }

    public  function getUrl(){
     if(isset($_GET['url'])) {
         $url=rtrim($_GET['url']);
         $url=filter_var($url,FILTER_SANITIZE_URL);
         $url=explode('/',$url);
         return $url;
     }
 }

}
