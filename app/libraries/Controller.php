<?php

class Controller {
    //Load model

    public function model($model) {
        //require model file
        require_once('../app/models/' .$model . '.php');

        //instatiate model
        return new $model();
    }


    //load view
    public function view($view,$data=[]){
        //check for view file

        if(file_exists('../app/views/'.$view.'.php')){
            require_once("../app/views/".$view.'.php');
        }else {
            //view dose not exist
            die("View dose not exist");
        }
    }

}
