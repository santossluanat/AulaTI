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

    public function quemsomos(): string
    {
        return view('quemsomos');
    }

    public function apresentacao(): string
    {
        return view('apresentacao');
    }


}
