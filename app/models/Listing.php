<?php

class Listing extends Eloquent {
	protected $table = 'listings';
    protected $primaryKey = 'id_listing';

    protected $guarded = array();

    public static $rules = array();

    public function store()
    {
    	return $this->belongsTo("Store", "id_store");
    }

    public function category()
    {
    	return $this->belongsTo("Category", "id_category");
    }

    public function image()
    {
        return $this->hasMany("Image", "id_listing");
    }

}