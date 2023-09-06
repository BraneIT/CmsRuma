<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    function home(){
        $events = DB::table('events')->orderBy('events.id', 'desc')->paginate(6);
        $news = DB::table('news')->orderBy('news.id', 'desc')->paginate(6);
        return view('frontend_views.index')->with('events', $events)->with('news', $news);
    }
    function history(){
        return view('frontend_views.istorijat');
    }
    function archaeology(){
        return view('frontend_views.arheologija');
    }
    function vilages(){
        return view('frontend_views.sela');
    }
    function znameniti(){
        return view('frontend_views.znameniti-rumljani');
    }
    function setnje(){
        return view('frontend_views.tematske-setnje');
    }
    function odmori(){
        return view('frontend_views.odmori-u-prirodi');
    }
    function izletiste(){
        return view('frontend_views.izletiste-borkovac');
    }
    function bara(){
        return view('frontend_views.bara-traskovaca');
    }
    function sport(){
        return view('frontend_views.sport-rekreacija');
    }
    function bazen(){
        return view('frontend_views.bazen-borkovac');
    }
    function sportski_centri(){
        return view('frontend_views.sportski-centri');
    }
    function fitnes_centri(){
        return view('frontend_views.fitnes-centri');
    }
    function velnes(){
        return view('frontend_views.velnes');
    }
    function ustanove(){
        return view('frontend_views.ustanove-kulture');
    }
    function bastina(){
        return view('frontend_views.sakrana-bastina');
    }
    function spomenici(){
        return view('frontend_views.spomenici');
    }
    function nasledje(){
        return view('frontend_views.gradsko-nasledje');
    }
    function hoteli(){
        return view('frontend_views.hoteli');
    }
    function moteli(){
        return view('frontend_views.moteli');
    }
    function prenocista(){
        return view('frontend_views.prenocista');
    }
    function apartmani(){
        return view('frontend_views.apartmani');
    }
    function zanatstvo_trgovina(){
        return view('frontend_views.zanatstvo-trgovina');
    }
    function povelja(){
        return view('frontend_views.cehovska-povelja');
    }
    function zanatski_proizvodi(){
        return view('frontend_views.zanatski-proizvodi');
    }
    function gastronomski_proizvodi(){
        return view('frontend_views.gastronomski-proizvodi');
    }
    function rukotvorine(){
        return view('frontend_views.rukotvorine');
    }
    function rumski_vasar(){
        return view('frontend_views.rumski-vasar');
    }
    function manifestacije(){
        $events = DB::table('events')->orderBy('events.id', 'desc')->paginate(6);
        
        return view('frontend_views.manifestacije')->with('events', $events);
    }
    function kako_stici(){
        return view('frontend_views.kako-stici');
    }
    function korisne_informacije(){
        return view('frontend_views.korisne-informacije');
    }
    function turisticki_info_centar(){
        return view('frontend_views.turisticki-info-centar');
    }
    function lov_i_ribolov(){
        return view('frontend_views.lov-ribolov');
    }
    function terapijsko_jahanje(){
        return view('frontend_views.terapijsko-jahanje');
    }
    function restorani(){
        return view('frontend_views.restorani');
    }
    function show_event($id){
        $event = Events::findOrFail($id);

        return view('frontend_views.events_show')->with('event', $event);

    }
}
