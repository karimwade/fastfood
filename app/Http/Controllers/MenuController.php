<?php
namespace App\Http\Controllers;

class MenuController extends Controller
{

    public function addMenu()
    {
        return \view('menu\menuForm');
    }

    public function storeMenu()
    {
        
    }
}

?>