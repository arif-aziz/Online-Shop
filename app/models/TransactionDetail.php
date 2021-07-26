<?php

class TransactionDetail extends Eloquent {
	protected $table = 'transaction_details';

	protected $primaryKey = "id_detail";

    protected $guarded = array();

    public static $rules = array();

    public function transaction()
    {
    	return $this->belongsTo("transaction", "id_transaction");
    }
}