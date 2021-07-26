<?php

class Category extends Eloquent {
	protected $table = 'categories';

	protected $primaryKey = "id_category";

    protected $guarded = array();

    public static $rules = array();

    public function listing()
    {
    	return $this->hasMany("Listing", "id_category");
    }

    public function subcat()
    {
        return $this->hasMany('Category', 'category_parent');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'category_parent');
    }
<<<<<<< HEAD
=======

>>>>>>> cd78434bbfd8e10109f007ff3ba8cc6e2ea8e7a8
}