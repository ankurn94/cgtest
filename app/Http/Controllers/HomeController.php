<?php

namespace App\Http\Controllers;


use App\Models\Photographer;
use App\Models\Album;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()//EvoCategoryGateway $evoCategoryGateway)
    {
       // $this->middleware('web');
       // $this->evoCategoryGateway = $evoCategoryGateway;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = Photographer::with(['album'])->get(); // Get photographer if evr needed.
       
        return view('photographer');
    }
    public function redaLansacpesFile(){

        //If we don't want to fecth from File then we can fetch from DB.

        $path = storage_path() . "/landscapes.json";
        $jsonData = json_decode(file_get_contents($path), true); 
        return response()->json($jsonData);  
    }

}
