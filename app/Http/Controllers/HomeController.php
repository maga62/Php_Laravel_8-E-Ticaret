<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
    public function aboutus()
    {
        return view('home.about');
    }

    public function test($id, $name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        //return view('home.test',['id'=>$id,'name'=>$name]); id name bilmem surename falan gelse burası kalabalık olur bu yuzden farklı yontem deniyeceğiz
        /*echo "Id Number:", $id;
        echo "<br>Name:", $name;
        for($i=1;$i<=$id;$i++){
            echo "<br> $i - $name";
        }
        */
    }

}
