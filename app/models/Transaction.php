<?php

class Transaction extends Eloquent {
	protected $table = 'transactions';

	protected $primaryKey = "id_transaction";

    protected $guarded = array();

    public static $rules = array();

    public function transactiondetail()
    {
        return $this->hasMany("TransactionDetail", "id_detail");
    }
}