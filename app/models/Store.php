<?php

class Store extends Eloquent {
	protected $table = 'stores';
	
    protected $primaryKey = "id_store";

    protected $guarded = array();

    public static $rules = array();

    public function user()
    {
    	return $this->belongsTo("User", "id_user");
    }

    public function listing()
    {
    	return $this->hasMany("Listing", "id_store");
    }

    public function getProvName($id)
    {
        return Area::where("id_prov", $id)
            ->where("level", 1)
            ->pluck("nama");
    }
}