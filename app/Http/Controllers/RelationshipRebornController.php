<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class RelationshipRebornController extends Controller
{
	public function ujiHas()
	{
		return Dosen::has('dosenmatakuliah')->get();
	}
    
}
