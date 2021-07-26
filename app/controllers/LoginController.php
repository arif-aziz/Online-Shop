<?php

class LoginController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('login.index');
    }

    public function login()
    {
        $username =  strtolower(Input::get('txt_login_username'));
        $password =  Input::get('txt_login_password');
        
        $user = User::where('username', $username)
                ->first();

        if (!is_null($user)) {
            if(Hash::check($password, $user->password))
            {
                Auth::login($user);
                return Redirect::to('/')
                       ->with('flash_notice', '<strong>Selamat datang!</strong> Anda berhasil login');
            }
        }

        /* authentication failure! lets go back to the login page */
        return Redirect::to('login')
               ->with('flash_error', '<strong>Login gagal!</strong> Username / Password Anda salah')
               ->withInput();
        
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::to('/')->with('flash_notice', 'Anda berhasil logout. Silahkan <a href="/login">login</a> untuk otentikasi akun Anda.');
    }

    public function admin()
    {
        return View::make('login.admin');
    }    

    public function adminlogin()
    {
        $username =  strtolower(Input::get('txt_login_username'));
        $password =  Input::get('txt_login_password');
        $usertype =  Input::get('selc_user_type');
        
        $user = User::where('username', $username)
                ->where('user_type', $usertype)
                ->first();

        if (!is_null($user) && ($user->user_type == 'Admin')) {
            if(Hash::check($password, $user->password))
            {
                Auth::login($user);
                return Redirect::to('admin/dashboard')
                       ->with('flash_notice', '<strong>Selamat datang!</strong> Anda berhasil login');
            }
        }

        /* authentication failure! lets go back to the login page */
        return Redirect::to('admin')
               ->with('flash_error', '<strong>Login gagal!</strong> Username / Password Anda salah')
               ->withInput();
        
    }

    public function adminlogout()
    {
        Auth::logout();
        return Redirect::to('admin');
    }
}