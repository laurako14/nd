<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function index($vaisius, $id) {
        $id = 5 * $id;
        return view('garden.gates', ['pirmas' => $vaisius, 'antras' => $id]);
    }

    public function daugyba($num1, $num2) {
        $suma = $num1 * $num2;
        $funkcija = 'Daugyba';
        return view('garden.gates', ['pirmas' => $num1, 'antras' => $num2, 'trecias' => $suma, 'ketvirtas' => $funkcija]);
    }

    public function dalyba($num1, $num2) {
        $rez = $num1 / $num2;
        $funkcija = 'Dalyba';
        return view('garden.gates', ['pirmas' => $num1, 'antras' => $num2, 'trecias' => $rez, 'ketvirtas' => $funkcija]);
    }

    public function suma($num1, $num2) {
        $sudetis = $num1 + $num2;
        $funkcija = 'Suma';
        return view('garden.gates', ['pirmas' => $num1, 'antras' => $num2, 'trecias' => $sudetis, 'ketvirtas' => $funkcija]);
    }

    public function atimtis($num1, $num2) {
        $atimtis = $num1 - $num2;
        $funkcija = 'Atimtis';
        return view('garden.gates', ['pirmas' => $num1, 'antras' => $num2, 'trecias' => $atimtis, 'ketvirtas' => $funkcija]);
    }
}
