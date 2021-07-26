<?php

class Area extends Eloquent {
	protected $table = 'area';

	protected $primaryKey = "id_area";
	
    protected $guarded = array();

    public static $rules = array();

}