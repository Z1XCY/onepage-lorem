<?php

use App\Models\Languages;
use Illuminate\Http\Request;

$translateEN = Languages::all();

$nav = array(
    'nav1' => $translateEN[0]->en,
    'nav2' => $translateEN[1]->en,
    'nav3' => $translateEN[2]->en,
    'nav4' => $translateEN[3]->en,
);

$heading = array(
    'heading1' => $translateEN[4]->en,
    'heading2' => $translateEN[5]->en,
    'heading3' => $translateEN[9]->en,
    'heading4' => $translateEN[10]->en,
    'heading5' => $translateEN[11]->en,
    'heading6' => $translateEN[12]->en,
    'p-link1' => $translateEN[13]->en,
    'p-link2' => $translateEN[14]->en,
);

$project_details = array(
    'price' => $translateEN[6]->en,
    'name' => $translateEN[7]->en,
    'show-button' => $translateEN[8]->en,
);

$footer_columns = array(
    'ftr_column1' => $translateEN[15]->en,
    'ftr_column2' => $translateEN[19]->en,
    'ftr_column3' => $translateEN[23]->en,
    'rights' => $translateEN[24]->en,
    'bottom_link1' => $translateEN[25]->en,
    'bottom_link2' => $translateEN[26]->en,
    'bottom_link3' => $translateEN[27]->en,
);

$footer_column1 = array(
    'ftr_nav1' => $translateEN[16]->en,
    'ftr_nav2' => $translateEN[17]->en,
    'ftr_nav3' => $translateEN[18]->en,
);

$footer_column2 = array(
    'ftr_nav4' => $translateEN[20]->en,
    'ftr_nav5' => $translateEN[21]->en,
    'ftr_nav6' => $translateEN[22]->en,
);
