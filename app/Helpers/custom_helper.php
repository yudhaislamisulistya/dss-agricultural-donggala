<?php

use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use App\Models\SeleksiModel;
use App\Models\SubKriteriaModel;
use App\Models\UserModel;

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

function get_kriteria(){
    $kriteriaModel = new KriteriaModel();
    $data = $kriteriaModel->get()->getResult();
    return $data;
}

function get_alternatif(){
    $alternatifModel = new AlternatifModel();
    $data = $alternatifModel->get()->getResult();
    return $data;
}

function get_seleksi_by_id_user_dan_group_by_kode_seleksi($id_user){
    $seleksiModel = new SeleksiModel();
    $data = $seleksiModel->where('id_user', $id_user)->groupBy('kode_seleksi')->get()->getResult();
    return $data;
}


?>