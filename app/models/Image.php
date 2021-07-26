<?php

class Image extends Eloquent {
	protected $table = 'images';

	protected $primaryKey = "id_image";

    protected $guarded = array();

    public $timestamps = false;

    public static $rules = array();

    public function listing()
    {
    	return $this->belongsTo("Listing", "id_listing");
    }

}