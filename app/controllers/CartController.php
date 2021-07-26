<?php

class CartController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cart = Cart::contents();
        //dd(String::formatMoney(1200, 'Rp'));
        return View::make('cart.index')->with('cart', $cart);    
    }

    public function postCart()
    {
        $id_listing     = Input::get('txt_id_listing'); 
        $listing        = Listing::where('id_listing' , $id_listing)->firstOrFail();

        $items = array(
            'id'                => $listing->id_listing,
            'store'             => $listing->id_store,
            'name'              => $listing->product_name,
            'quantity'          => Input::get('selc_quantity'),
            'price'             => $listing->price,
            'listing_permalink' => $listing->listing_permalink,
            'add_listing_date'  => date('d M Y'),
            'transaction_model' => Input::get('selc_transaction_model')
        );

        $cart = Cart::insert($items);

        return Redirect::to('/keranjang')
            ->with('flash_notice','Listing telah ditambahkan pada keranjang Anda.');
        
    }

    public function deleteCart($identifier)
    {
        Cart::remove($identifier);
        
        return Redirect::to('/keranjang')
                ->with('flash_notice','Item telah dihapus dari keranjang belanja Anda.');
    }

    public function editCart($identifier)
    {
        Cart::update($identifier, 'quantity', Input::get('txt_quantity'));
        Cart::update($identifier, 'price', Input::get('txt_listing_price'));
        Cart::update($identifier, 'add_listing_date', date('d M Y'));
        Cart::update($identifier, 'transaction_model', Input::get('selc_transaction_model'));

        return Redirect::to('/keranjang')
                ->with('flash_notice','Item berhasil diubah.');
    }

    public function checkout()
    {
        $data_transaction = array(
            'id_store'          =>  Input::get('txt_id_store'),
            'id_buyer'          =>  Input::get('txt_id_user'),
            'total'             =>  Input::get('txt_total'),
            'transaction_model' =>  Input::get('txt_model')
        );
        
        $trans = Transaction::insert($data_transaction); // insert into table

        $data_transaction_det = array(
            'quantity'          =>  Input::get('txt_qty')
        );

        //$trans->transactiondetail()->save($data_transaction_det); // insert into table
        $transdet = TransactionDetail::insert($data_transaction_det); // insert into table

        //return View::make('checkout.index');
    }

}