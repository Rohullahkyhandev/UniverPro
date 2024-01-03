<?php

namespace App\Http\Controllers\PDC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class documentsController extends Controller
{



    public function index()
    {
        return view('pdc.documents.index');
    }
}
