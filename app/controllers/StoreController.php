<?php

class StoreController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($permalink)
    {
        $store   = Store::where("store_permalink", "=", $permalink)->firstOrFail();
        $area    = Area::where('id_kota',$store->id_kota)
                    ->where('id_kec',$store->id_kec)
                    ->firstOrFail();
        $listing = Listing::where("id_store", "=", $store->id_store)->paginate(10);
        $user    = User::where("id_user", "=", $store->id_user)->firstOrFail();
        return View::make('store.index',array(
            "store"     => $store,
            "area"      => $area,
            "listing"   => $listing,
            "user"      => $user));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    public function addStore()
    {
        return View::make('store.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function editStore($permalink,$id)
    {
        $store   = Store::where("store_permalink", "=", $permalink)->firstOrFail();
        $area    = Area::where('id_kota',$store->id_kota)
                    ->where('id_kec',$store->id_kec)
                    ->firstOrFail();
        $listing = Listing::where("id_store", "=", $store->id_store)->paginate(10);
        $user    = User::where("id_user", "=", $store->id_user)->firstOrFail();
        return View::make('store.edit',array(
            "store"     => $store,
            "area"      => $area,
            "listing"   => $listing,
            "user"      => $user));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}