<?php

namespace App\Http\Controllers;

use App\Carbrand;
use App\Carmodel;
use App\Sparepart;
use Illuminate\Http\Request;
use App\Http\Controllers\URL;

class CatalogController extends Controller
{
    public function index()
    {
        $spareparts = Sparepart::orderBy('name', 'ASC')->get()
            ->where('groupid','0');
        $subparts = Sparepart::orderBy('name', 'ASC')->get()
            ->where('groupid','<>','0');
        $data = [
            'title' => 'Купить запчасти на иномарку в Алматы',
            'pagetitle' => 'Книга для гостей',
            'spareparts' => $spareparts,
            'subparts' => $subparts,
            'description' => 'Автозапчасти для иномарок по выгодным ценам. Широкий ассортимент, оперативный подбор. Доставка по Казахстану, бесплатная доставка по Алматы.'
        ];
        return view('catalog.catalog', $data);
    }

    public function getCarbrands($sparepart)
    {
        $parts = Sparepart::where('additional',$sparepart)->first();
        if ($parts->groupid == 0){
            $subparts = Sparepart::orderBy('name', 'ASC')->get()
                ->where('groupid',$parts->id);
        } else {
            $subparts = Sparepart::orderBy('name', 'ASC')->get()
                ->where('groupid',$parts->groupid);
        }
        $markas = Carbrand::orderBy('name', 'ASC')->get();
        $metadesc = $parts->name.' по выгодной цене. Широкий ассортимент, оперативный подбор. Доставка по Казахстану, бесплатная доставка по Алматы.';
        $data = [
            'title' => 'Купить '.$parts->name.' в Алматы',
            'markas' => $markas,
            'subparts' => $subparts,
            'parts' => $parts,
            'description' => $metadesc
        ];
        return view('catalog.sparepart', $data);
    }

    public function getCarmodels($sparepart,$carbrand)
    {
        $parts = Sparepart::where('additional',$sparepart)->first();
        $markal = Carbrand::with('carmodels')
            ->where('additional',$carbrand)
            ->orderBy('name', 'ASC')->get()
            ->first();
        // $mods = Mod::where('marka_id', $markadd)
        //    ->orderBy('name', 'desc')
        //  ->take(10)
        //->get();
        $metadesc = 'Широкий ассортимент, оперативный подбор. '.$parts->name.' на '.$markal->name.' по выгодной цене. Бесплатная доставка по Алматы.';
        $data = [
            'title' =>'Купить '.$parts->name.' на '.$markal->name.' в Алматы',
            'markal' => $markal,
            'parts' => $parts,
            'description' => $metadesc
        ];
        return view('catalog.carbrand', $data);
    }
    public function request($sparepart,$carbrand,$carmodel)
    {
        $carmodels = Carmodel::where('additional',$carmodel)->first();
        $parts = Sparepart::where('additional',$sparepart)->first();
        $markal = Carbrand::where('additional',$carbrand)
            ->orderBy('created_at', 'desc')->get()
            ->first();
        // $mods = Mod::where('marka_id', $markadd)
        //    ->orderBy('name', 'desc')
        //  ->take(10)
        //->get();
        $metadesc = 'Широкий ассортимент, оперативный подбор. '.$parts->name.' на '.$markal->name.' '.$carmodels->name.' по выгодной цене. Бесплатная доставка по Алматы.';
        $data = [
            'title' => 'Купить '.$parts->name.' на '.$markal->name.' '.$carmodels->name.' в Алматы',
            'markal' => $markal,
            'parts' => $parts,
            'models' => $carmodels,
            'description' => $metadesc
        ];
        return view('catalog.carmodel', $data);
    }
}
