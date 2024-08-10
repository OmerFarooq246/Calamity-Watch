<?php

namespace App\Http\Controllers;

use App\Models\Disaster;
use Illuminate\Http\Request;

class DisasterController extends Controller
{
    public function earthquakes($mediaType)
    {   
        $disasters = Disaster::where('Disaster_Type', "Earthquake")
                                ->where('Disaster_Subtype', 'Ground movement')
                                ->orderBy('Year','desc')
                                ->get();
        return view($mediaType,['disasters' => $disasters, 
                                'type' => 'earthquake']);
    }

    public function tsunamis($mediaType)
    {   
        $disasters = Disaster::where('Disaster_Type', "Earthquake")
                                ->where('Disaster_Subtype', 'Tsunami')
                                ->orderBy('Year','desc')
                                ->get();
        return view($mediaType,['disasters' => $disasters, 
                                'type' => 'tsunami']);
    }

    public function floods($mediaType)
    {   
        $disasters = Disaster::where('Disaster_Type', "Flood")
                                ->orderBy('Year','desc')
                                ->get();
        return view($mediaType,['disasters' => $disasters, 
                                'type' => 'flood']);
    }

    public function storms($mediaType)
    {   
        $disasters = Disaster::where('Disaster_Type', "Storm")
                                ->orderBy('Year','desc')
                                ->get();
        return view($mediaType,['disasters' => $disasters, 
                                'type' => 'storm']);
    }
}
