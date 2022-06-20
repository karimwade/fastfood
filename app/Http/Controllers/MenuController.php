<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Image;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function addMenu()
    {
        return \view('menu\menuForm');
    }

    public function storeMenu(Request $request)
    {
        $filename = time().'-'.$request->photo->extension();
        $path = $request->file('photo')->storeAs(
            'photos',
            $filename,
            'public');
        $menu = Menu::create([
            'titre'=>$request->titre,
            'description'=>$request->description
        ]);
        $image = new Image();
        $image->path=$path;
        $menu->image()->save($image);
        dd('menu creer');
    }

    public function showMenu()
    {
        //$menus = Menu::all();
        $images = Image::all();
        //dd($menus);
          return \view('food',
        //   ['menus'=>$menus,
            ['images'=>$images]);
    }
}

?>