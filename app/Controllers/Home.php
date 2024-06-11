<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pagina_inicial');
    }

    public function login(): string
    {
        return view('login');
    }


}
