<?php

use App\Models\Languages;
use Illuminate\Http\Request;

$translateNL = Languages::all();

$nav = array(
    'nav1' => $translateNL[0]->nl,
    'nav2' => $translateNL[1]->nl,
    'nav3' => $translateNL[2]->nl,
    'nav4' => $translateNL[3]->nl,
);

$heading = array(
    'heading1' => $translateNL[4]->nl,
    'heading2' => $translateNL[5]->nl,
    'heading3' => $translateNL[9]->nl,
    'heading4' => $translateNL[10]->nl,
    'heading5' => $translateNL[11]->nl,
    'heading6' => $translateNL[12]->nl,
    'p-link1' => $translateNL[13]->nl,
    'p-link2' => $translateNL[14]->nl,
);

$project_details = array(
    'price' => $translateNL[6]->nl,
    'name' => $translateNL[7]->nl,
    'show-button' => $translateNL[8]->nl,
);

$footer_columns = array(
    'ftr_column1' => $translateNL[15]->nl,
    'ftr_column2' => $translateNL[19]->nl,
    'ftr_column3' => $translateNL[23]->nl,
    'rights' => $translateNL[24]->nl,
    'bottom_link1' => $translateNL[25]->nl,
    'bottom_link2' => $translateNL[26]->nl,
    'bottom_link3' => $translateNL[27]->nl,
);

$footer_column1 = array(
    'ftr_nav2' => $translateNL[16]->nl,
    'ftr_nav3' => $translateNL[17]->nl,
    'ftr_nav4' => $translateNL[18]->nl,
);

$footer_column2 = array(
    'ftr_nav2' => $translateNL[20]->nl,
    'ftr_nav3' => $translateNL[21]->nl,
    'ftr_nav4' => $translateNL[22]->nl,
);
