<?php

namespace App\Http\Controllers\Monster;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Scp_monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
   
    public function index()
    {   
       // $monster = DB::table('spc_monster')->get();
        $monster = Scp_monster::all();
        
        return view('monster.index',compact('monster'));
    }

    public function create()
    {   
        return view('monster.create');
    }

    public function show(Scp_monster $monster)
    {   

        return view('monster.detail',compact('monster'));
    }

    public function store(Request $request)
    {   
        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();
        $file->move('data_file',$file->getClientOriginalName());
        
        //simpan ke database
        $monster = new Scp_monster;

        $monster->name = $request->name;
        $monster->alias = $request->alias;
        $monster->code = $request->code;
        $monster->class = $request->class;
        $monster->rank = $request->rank;
        $monster->region = $request->region;
        $monster->status = $request->status;
        $monster->description = $request->description;
        $monster->file = $file_name;

        $monster->save();

        return redirect('monster');
    }
}