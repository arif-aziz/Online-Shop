<?php

class UserController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id)
    {
        $store = Store::where('id_user',$id)->firstOrFail();
        $area  = Area::where('id_kota',$store->id_kota)->firstOrFail();
        $user  = User::where('id_user',$id)->firstOrFail();
        return View::make('user.index',array(
            'store' => $store,
            'area'  => $area,
            'user'  => $user));
    }

    public function editUser($id)
    {
        $user = User::where('id_user',$id)->firstOrFail();
        return View::make('user.edit')->with('user', $user);
    }

    public function balance()
    {
        return View::make('user.balance');
    }
}