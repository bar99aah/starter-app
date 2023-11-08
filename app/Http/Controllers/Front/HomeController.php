<?php

namespace App\Http\Controllers\Front;

// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
public function store(){
    return "index";
}

public function update(){
    return "update";
}

public function delete(){
    return "delete";
}public function index(){
    return view('home');
}
}

