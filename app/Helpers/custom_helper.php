<?php

use App\Models\KriteriaModel;
use App\Models\SubKriteriaModel;

function get_sub_kriteria_by_kode_kriteria($kode_kriteria){
    $subKriteriaModel = new SubKriteriaModel();
    $data = $subKriteriaModel->where('kode_kriteria', $kode_kriteria)->get()->getResult();
    return $data;
}

function get_kriteria_by_kode_kriteria($kode_kriteria){
    $kriteriaModel = new KriteriaModel();
    $data = $kriteriaModel->where('kode_kriteria', $kode_kriteria)->first();
    return $data;
}

?>