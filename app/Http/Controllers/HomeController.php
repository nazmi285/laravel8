<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function registration()
    {
        return view('registration');
    }

    public function laporan(Request $request)
    {
        $trainings = \App\Models\Training::all();
        
        return view('laporan',compact('trainings'));
        // return view('laporan')->with('trainings',$trainings);
        // return view('laporan')->with(['trainings'=>$trainings,'paramter2'=>'value 2']);
    }

    public function store(Request $request)
    {
        $training = new \App\Models\Training;
        $training->nama_penuh = $request->nama_penuh;
        $training->emel = $request->emel;
        $training->save();
        
        return redirect('laporan')->with('success','Berjaya disimpan.');
    }

    public function export() 
    {
        return Excel::download(new LaporanExport, 'laporan training.xlsx');
    }
}
