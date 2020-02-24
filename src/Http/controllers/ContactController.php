<?php
  namespace devmrh\formgenerator\Http\Controllers;

  use App\Http\Controllers\Controller;
use devmrh\formgenerator\Models\User;

class ContactController extends Controller {

    public function index(){
      $user = User::get();
      dd($user);
    }

  }