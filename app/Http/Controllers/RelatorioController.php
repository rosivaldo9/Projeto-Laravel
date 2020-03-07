<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use PDF;

class RelatorioController extends Controller
{

    public function index(){
        $aluno = Aluno::all();
        $pdf= PDF::loadView('pdf', compact('aluno'));
        return$pdf->setPaper('a4')->stream('pdf');
    }
}
