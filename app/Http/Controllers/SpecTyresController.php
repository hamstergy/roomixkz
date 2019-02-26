<?php

namespace App\Http\Controllers;

use App\Spectyre;
use App\Spectyretype;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\URL;

class SpectyresController extends Controller
{
    public function index()
    {
        $spectyretypes = Spectyretype::orderBy('name', 'ASC')->get();
        $data = [
            'title' => 'Купить шины на спецтехнику в Алматы, с доставкой по Казахстану',
            'pagetitle' => 'Книга для гостей',
            'spectypes' => $spectyretypes,
            'description' => 'Шины на спецтехнику и сельхозтехнику по выгодным ценам. Широкий ассортимент, оперативный подбор. Доставка по Казахстану.'
        ];
        return view('spectyres.spec', $data);
    }

    public function getSpectyres($spectype)
    {
        $type = Spectyretype::where('additional',$spectype)->first();
        $tyres = Spectyre::orderBy('price', 'ASC')->where('disabled','0')
            ->where('price','<>','0')
            ->whereIn('type_id',['0', $type->id])
            ->get();
        $uniquesizes = Spectyre::select('size')->orderBy('size', 'ASC')->where('disabled','0')
        ->whereIn('type_id',['0', $type->id])
        ->distinct()
        ->get();
        $uniquewidths = Spectyre::select('width')->orderBy('width', 'ASC')->where('disabled','0')
        ->whereIn('type_id',['0', $type->id])
        ->distinct()
        ->get();
        $uniquesizes = $uniquesizes->pluck('size');
        $uniquewidths = $uniquewidths->pluck('width');
        $data = [
            'title' => 'Купить шины на '.Str::lower($type->name).' в Алматы, с доставкой по Казахстану',
            'pagetitle' => 'Книга для гостей',
            'tyres' => $tyres,
            'type' => $type,
            'uniquesizes' => $uniquesizes,
            'uniquewidths' => $uniquewidths,
            'description' => 'Шины на '.Str::lower($type->name).' по выгодным ценам. Широкий ассортимент, оперативный подбор. Доставка по Казахстану, бесплатная доставка по Алматы.'
        ];
        return view('spectyres.spectyres', $data);
    }

    public function getSpecbrands($spectype,$specsparepart)
    {
        $type = Spectype::with('specbrands')
            ->where('additional',$spectype)
            ->orderBy('name', 'ASC')->get()
            ->first();

        $parts = Specsparepart::where('additional',$specsparepart)->first();

        if ($parts->groupid == 0){
            $subparts = Specsparepart::orderBy('name', 'ASC')->get()
                ->where('groupid',$parts->id);
        } else {
            $subparts = Specsparepart::orderBy('name', 'ASC')->get()
                ->where('groupid',$parts->groupid);
        }
        $metadesc = $parts->name.' на '.Str::lower($type->name).' по выгодной цене. Широкий ассортимент, оперативный подбор. Доставка по Казахстану, бесплатная доставка по Алматы.';
        $data = [
            'title' => 'Купить '.Str::lower($parts->name).' на '.Str::lower($type->name).' в Алматы',
            'type' => $type,
            'subparts' => $subparts,
            'parts' => $parts,
            'description' => $metadesc
        ];
        return view('spec.specbrand', $data);
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
