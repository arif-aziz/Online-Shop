<?php

class FrontController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $listings   = Listing::paginate(10);
        
        return View::make('home.index', array(
            'listings'  => $listings
        ));
    }

    public function postIndex()
    {
        
    }

    public function dashboard()
    {
        return View::make('dashboard.index');
    }

    public function tentang()
    {
        echo "Hello World";
    }

    public function kontak()
    {

    }

    public function admindashboard()
    {
        return View::make('dashboard.admin');
    }

}