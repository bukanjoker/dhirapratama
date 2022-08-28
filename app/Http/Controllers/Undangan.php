<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Undangan extends Controller
{
    public function getUndangan(Request $request) {
      $user = $request->query('to');

      return view('pages.undangan', ['tamu' => $user]);
    }
}
