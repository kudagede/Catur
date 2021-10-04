<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo 'jancok';
    }

    function showme($page = 'Home')
    {
        echo view('templates/header');
        echo view('pages/' . $page);
        echo view('templates/footer');
    }
}
