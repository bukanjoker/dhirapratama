<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Undangan extends Controller
{
    public function getUndangan(Request $request) {
      $user = $request->query('to');
      $ucapan = DB::table('ucapans')->orderBy('created_at', 'desc')->get();

      return view('pages.undangan', ['tamu' => $user, 'ucapans' => $ucapan]);
    }

    public function insertUcapan(Request $request) {
      $checkExist = DB::table('ucapans')
        ->where('name',$request->name)
        ->where('address',$request->address)
        ->where('comments',$request->comments)
        ->where('present',$request->kehadiran)
        ->first();

      if ($checkExist) {
        return;
      }

      $date = date('Y-m-d H:i:s');
      DB::table('ucapans')->insert(
          [
              'name' => $request->name,
              'address' => $request->address,
              'comments' => $request->comments,
              'present' => $request->kehadiran,
              'created_at' => $date,
          ]
      );

      return;
    }
}
