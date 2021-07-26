<?php

class RegisterController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    	return View::make('register.index');
    }

    public function postRegister()
    {
        $destinationPath1 = public_path() . "\\picprofile\\";
        $destinationPath2 = public_path() . "\\picid\\";

        $data_reg = array(
            'email'             =>  Input::get('txt_email'),
            'username'          =>  Input::get('txt_username'),
            'password'          =>  Hash::make(Input::get('txt_password')),
            'full_name'         =>  Input::get('txt_full_name'),
            'gender'            =>  Input::get('opt_gender'),
            'birthdate'         =>  Input::get('txt_birthdate'),
            'address'           =>  Input::get('txt_address'),
            'id_prov'           =>  Input::get('reg_selc_provinsi'),
            'id_kota'           =>  Input::get('reg_selc_kabupaten'),
            'zip_code'          =>  Input::get('txt_zip_code'),
            //'profile_image'     =>  Input::file('file_profile_pic'),
            'identity_type'     =>  Input::get('selc_id_type'),
            'identity_id'       =>  Input::get('txt_id_number'),
            //'identity_image'    =>  Input::file('file_id_pic'),
            'phone'             =>  Input::get('txt_phone'),
            'mobile'            =>  Input::get('txt_mobile'),
            'balance'           =>  '0.0',
            'user_type'         =>  'User',
            'status'            =>  'Unverified',
            'has_store'         =>  '0',
            'rating'            =>  '0.0',
        );

        /* Declare Validator */
        $rules = array(
            'txt_email'         => 'unique:users,email',
            'txt_username'      => 'unique:users,username'
        );

        $validator = Validator::make(Input::all(), $rules);
        
        /* Input Validator */
        if ($validator->passes())
        {
            if (Input::hasFile('file_profile_pic'))
            {
                $profpic_name =  Input::file('file_profile_pic')->getClientOriginalName();
                Input::file("file_profile_pic")->move($destinationPath1, $profpic_name);
                $data_profpic = array( 'profile_image' => $profpic_name);
                User::insert($data_profpic); // insert into table
            }
            if (Input::hasFile('file_profile_pic'))
            {
                $idpic_name =  Input::file('file_id_pic')->getClientOriginalName();
                Input::file("file_id_pic")->move($destinationPath2, $idpic_name);
                $data_idpic = array( 'identity_image' => $idpic_name);
                User::insert($data_idpic); // insert into table  
            }

            User::insert($data_reg); // insert into table
            
            return Redirect::to('/')
                ->with('flash_notice', '<strong>Registrasi berhasil.</strong> Cek email Anda untuk validasi akun.');
        }            
        else
        {
            return Redirect::to('/register')
                ->with('flash_error', '<strong>Registrasi gagal.</strong> Email / Username telah terpakai, gunakan yang lain.');
        }
    }
}