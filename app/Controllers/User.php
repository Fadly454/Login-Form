<?php

namespace App\Controllers;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
         session()->setFlashdata('gagal', 'Tolong isi Email dan Password Anda');
         return redirect()->to(base_url('login'));
      }
      return view('user_view');
   }

   //--------------------------------------------------------------------

}