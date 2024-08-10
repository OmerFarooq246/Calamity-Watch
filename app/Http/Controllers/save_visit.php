<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org;
use App\Models\User_Visit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class save_visit extends Controller
{
    // public function save(org $org){
    //     echo $org;
    // }
    
    public function save(org $org): RedirectResponse{
        // echo $org;
        $visit = new User_Visit;
        $visit->uid = Auth::id();
        $visit->oid = $org->id;
        // echo $visit;
        $visit->save();
        return redirect(url($org->address));
    }
}
