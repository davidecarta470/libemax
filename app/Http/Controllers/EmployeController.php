<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Stamping;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dipendenti = Employe::all();
        return view('dipendenti',compact('dipendenti'));
    }

   


    public function show($id)
    {
        $dipendente = Employe::where('id',$id)->first();
        $bedgiature = Stamping::where('dipendente_id',$id)->get();
        return view('dipendente',compact('dipendente','bedgiature'));
    }


 
}
