<?php

namespace App\Controllers;

class IndexController{

    public function index(){
        include_once "../App/Views/index/index.phtml";
    }

    public function contact(){
        include_once "../App/Views/index/contact.phtml";
    }
}