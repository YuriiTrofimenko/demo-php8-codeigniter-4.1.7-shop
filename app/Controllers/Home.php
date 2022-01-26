<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $itemModel;

    public function __construct()
    {
        $this->itemModel = model('App\Models\ItemModel');
    }

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

    public function items()
    {
        $data['title']='Items';
        $data['items']=$this->itemModel->findAll();
        return view('items', $data);
    }

    public function getItemDescription()
    {
        $send = $this->request->getPost('send');
        if(!$send)
            return view('get_item_description');
        else
        {
            // получить из тела запроса значение параметра itemid
            $id = $this->request->getPost('itemid');
            // стандартным методом получить из БД все данные пункта, выбранного по ИД = $id
            $item = $this->itemModel->find($id);
            // собрать данные в массив
            $data['item']=$item;
            $data['title']='Description Of Items '.$id;
            // отрисовать представление item_info,
            // передав ему данные $data,
            // и вернуть готовую веб-страницу клиенту
            // var_dump($data);
            // die();
            return view('item_description', $data);
        }
    }
}
