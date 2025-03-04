<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    //

    /**
     *  Retorna la vista de sandbox
     *  @return \Illuminate\View\View
     */
    public function preAnalisisForm(){
      return view('analisis.pre_analisis');
    }

}













