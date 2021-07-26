<?php

class AreaController extends BaseController {

    public function getProvinsi()
    {
        $provinsi = Area::where("level", 1)->get();
        return Response::json(array(
            "area" => $provinsi->toArray()), 
        200);
    }

    public function getAllkota($id)
    {
        $allkota = Area::where("level", 2)
        ->where("id_prov", $id)
        ->get();
        return Response::json(array(
            "area" => $allkota->toArray()), 
        200);        
    }

    public function getKota($id = 35)
    {
        $kota = Area::where("level", 2)
        ->where("id_prov", $id)
        ->get();
        return Response::json(array(
            "area" => $kota->toArray()), 
        200);        
    }

    public function getKecamatan($id_kota, $id_prov = 35)
    {
        $kecamatan = Area::where("level", 3)
        ->where("id_kota", $id_kota)
        ->where("id_prov", $id_prov)
        ->get();
        return Response::json(array(
            "area" => $kecamatan->toArray()), 
        200);        
    }
}