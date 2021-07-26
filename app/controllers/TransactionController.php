<?php

class TransactionController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	$transactions   = Transaction::get();
        return View::make('transaction.index')
            ->with('transactions',$transactions);
    }

    public function viewTransaction()
    {
        $transactions   = Transaction::get();
        return View::make('listing.view')
            ->with('listings',$listings);
    }

    public function addListing()
    {
        $listings       = Listing::get();
        $categories     = Category::where('category_level',1)->get();
        $sub_categories = Category::where('category_level',2)->get();

        return View::make('listing.add', array(
            'listings'          => $listings,
            'categories'        => $categories,
            'sub_categories'    => $sub_categories));
    }

    public function postListing()
    {
        $store           = Store::where('id_user','=',Auth::user()->id_user)->firstOrFail();
        $destinationPath = public_path() . "\\pimage\\";
        
        $data_list = array(
            'id_store'              =>  $store->id_store,
            'product_desire'        =>  Input::get('opt_product_desire'),
            'product_name'          =>  Input::get('txt_product_name'),
            'product_description'   =>  Input::get('txt_description'),
            'id_category'           =>  Input::get('selc_category'),
            'condition'             =>  Input::get('opt_condition'),
            'price'                 =>  Input::get('txt_price'),
            'is_nego'               =>  Input::get('opt_nego','0'),
            'is_sold_out'           =>  '0',
            'next_price'            =>  Input::get('txt_next_price'),
            'weight'                =>  Input::get('txt_weight'),
            'quantity'              =>  Input::get('txt_quantity'),
            'is_cod'                =>  Input::get('opt_cod','0'),
            'is_appraisal'          =>  Input::get('opt_appraisal','0'),
            'is_rekber'             =>  Input::get('opt_rekber','0'),
            'is_dalam_kota'         =>  Input::get('opt_dalam_kota','0'),
            'is_luar_kota'          =>  Input::get('opt_luar_kota','0'),
            'listing_permalink'     =>  Input::get('txt_permalink')
        );
        
        $listing = Listing::create($data_list); // insert into table
        
        //dd($listing->id_listing);
        
        $rules = array('file_item_pic1' => 'image|mime:jpg,gif,png|max:10000',
                       'file_item_pic2' => 'image|mime:jpg,gif,png|max:10000',
                       'file_item_pic3' => 'image|mime:jpg,gif,png|max:10000',
                       'file_item_pic4' => 'image|mime:jpg,gif,png|max:10000',
                       'file_item_pic5' => 'image|mime:jpg,gif,png|max:10000',
                       'file_item_pic6' => 'image|mime:jpg,gif,png|max:10000');
        $validator = Validator::make(Input::all(), $rules);
        
        if (Input::hasFile('file_item_pic1'))
        {
            $image_name1 =  Input::file('file_item_pic1')->getClientOriginalName();
            Input::file("file_item_pic1")->move($destinationPath, $image_name1);
            $data_image1 = new Image(array( 'id_listing' => $listing->id_listing, 
                              'image_name' => '',
                              'image_file' => $image_name1));
            $listing->image()->save($data_image1); // insert into table
        }
        if (Input::hasFile('file_item_pic2'))
        {
            $image_name2 =  Input::file('file_item_pic2')->getClientOriginalName();
            Input::file("file_item_pic2")->move($destinationPath, $image_name2);
            $data_image2 = new Image(array('id_listing' => $listing->id_listing, 
                              'image_name' => '',
                              'image_file' => $image_name2));
            $listing->image()->save($data_image2); // insert into table
        }
        if (Input::hasFile('file_item_pic3'))
        {
            $image_name3 =  Input::file('file_item_pic3')->getClientOriginalName();
            Input::file("file_item_pic3")->move($destinationPath, $image_name3);
            $data_image3 = new Image(array('id_listing' => $listing->id_listing, 
                              'image_name' => '',
                              'image_file' => $image_name3));
            $listing->image()->save($data_image3); // insert into table
        }
        if (Input::hasFile('file_item_pic4'))
        {
            $image_name4 =  Input::file('file_item_pic4')->getClientOriginalName();
            Input::file("file_item_pic4")->move($destinationPath, $image_name4);
            $data_image4 = new Image(array('id_listing' => $listing->id_listing, 
                              'image_name' => '',
                              'image_file' => $image_name4));
            $listing->image()->save($data_image4); // insert into table
        }
        if (Input::hasFile('file_item_pic5'))
        {
            $image_name5 =  Input::file('file_item_pic5')->getClientOriginalName();
            Input::file("file_item_pic5")->move($destinationPath, $image_name5);
            $data_image5 = new Image(array('id_listing' => $listing->id_listing, 
                              'image_name' => '',
                              'image_file' => $image_name5));
            $listing->image()->save($data_image5); // insert into table
        }
        if (Input::hasFile('file_item_pic6'))
        {
            $image_name6 =  Input::file('file_item_pic6')->getClientOriginalName();
            Input::file("file_item_pic6")->move($destinationPath, $image_name6);
            $data_image6 = new Image(array('id_listing' => $listing->id_listing, 
                              'image_name' => '',
                              'image_file' => $image_name6));
            $listing->image()->save($data_image6); // insert into table
        }
  
        return Redirect::to('/listing')
            ->with('flash_notice', 'Input listing berhasil.');
    }

    public function cekPermalink($permalink)
    {
        $listing = 1;
        $iterasi = 0;
        while($listing > 0):
            if($iterasi !== 0)
            {
                $permalink = $permalink . $iterasi;
            }
            $listing = Listing::where("listing_permalink", $permalink)->count();
            $iterasi++;
        endwhile;
        echo $permalink;
    }

}