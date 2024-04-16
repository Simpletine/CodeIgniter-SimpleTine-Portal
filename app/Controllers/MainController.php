<?php

namespace App\Controllers;

class MainController extends BaseController
{
    public function index()
    {
        session()->set('logged', false);
     
        $this->data = [
            'heading' => 'Dashboard',
            'breadcrumb' => 'Dashboard',
        ];
        return $this->st_build();
    }
}
