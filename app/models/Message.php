<?php

class Message extends Eloquent {
	protected $table = 'message';
	
    protected $guarded = array();

    public static $rules = array();
}