<?php
namespace App\Controllers;
class Biodata extends BaseController {
    function index() {
        $data['title']  =  "Biodata Bunga Adifatillah";
        return view('vw_form', $data);
    }
}