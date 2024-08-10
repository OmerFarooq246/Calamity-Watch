<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org;
use App\Models\User_Visit;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class orgController extends Controller
{   
    public function start(){
        // $orgs = [org::all()];
        // return view('index', ['orgs' => org::all()]);
        return view('index', ['orgs' => org::take(3)->get()]);
    }

    public function org(){
        return view('org', ['orgs' => org::all()]);
    }
    public function visits(){
        // $visits = User_Visit::all()->groupBy('oid');
        // $visits = DB::table('User__Visits')
        //         ->select('oid')
        //         ->groupBy('oid')
        //         ->count();

        $visits = DB::table('User__Visits')
                ->select(DB::raw('oid, count(*) as c'))
                ->groupBy('oid')
                ->get();

        // echo $visits;
        // echo compact($visits);
        // echo $visits[0][0][0];
        // echo "\n";
        // foreach ($visits as $v)
        // echo $v->c;

        
        // return view('visits', ['orgs' => org::all()], ['visits' => User_Visit::all()]);
        return view('visits', ['orgs' => org::all()], ['visits' => $visits]);
    }
}
