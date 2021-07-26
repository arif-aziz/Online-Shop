<?php

class SearchController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
    	$kunci = array(
	    	"key" 			=> Input::get("txt_search"),
	    	"id_kota" 		=> Input::get("selc_kabupaten"),
	    	"id_kec" 		=> Input::get("selc_kecamatan"),
	    	"id_category"	=> Input::get("selc_kategori")
    	);

	    $query 	= Listing::leftjoin("stores", "stores.id_store", "=" , "listings.id_store");	

		if($kunci['id_category'])
			$query->where("id_category", $kunci['id_category']);

		if($kunci['id_kota'])
	    	$query->where("stores.id_kota", $kunci['id_kota']);

	    if($kunci['id_kec'])
	    	$query->where("stores.id_kec", $kunci['id_kec']);

	    if($kunci['key'] != "")
	    	$query->where("product_name", "LIKE", "%" . $kunci['key'] . "%");

	    $result = $query->paginate(10);

        return View::make('listing.result', array(
        		'listings' 	=> $result,
        		'kunci'		=> $kunci
        	));

    }
}