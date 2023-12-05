<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function buttonTemplete(){
        return view('pages.ui-features.buttons');
    }

    public function dropdownTemplete(){
        return view('pages.ui-features.dropdowns');
    }

    public function typographyTemplete(){
        return view('pages.ui-features.typography');
    }

    public function iconTemplate(){
        return view('pages.icons.mdi');
    }

    public function formTemplate(){
        return view('pages.forms.basic_elements');
    }

    public function chartTemplate(){
        return view('pages.charts.chartjs');
    }

    public function tableTemplate(){
        return view('pages.tables.basic-table');
    }
}
