<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119163,
        'name' => 'Rio Sulistiyo Putra',
        'phone' => '089651605861',
        'class' => 'XII RPL 5'];
  }
}