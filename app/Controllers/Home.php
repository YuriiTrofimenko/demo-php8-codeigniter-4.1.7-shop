<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return "Hello CodeIgniter 4!";
    }

    public function page1()
    {
        $data['title']='Page1';
        $data['text']='This text was send from Home controller';
        $data['countries'] = array('Argentina','Belgium','Canada','Great Britain');
        return view('page1', $data);
    }
}
