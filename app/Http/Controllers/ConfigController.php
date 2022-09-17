<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function viewConfig($key, Request $request) {
      $config = DB::table('configs')->where('key', $key)->first();
      if (!$config) {
        return abort(404);
      }

      return view('pages.config', [ 'config' => $config ]);
    }

    public function updateConfig($key, Request $request) {
      DB::table('configs')->where('key', $key)->update([
        'value' => $request->value
      ]);

      return redirect('/config/'.$key);
    }

    public function getConfig($key, Request $request) {
      $config = DB::table('configs')->where('key', $key)->first();
      if (!$config) {
        return abort(404);
      }

      return response()->json([
        'key' => $config->key,
        'value' => $config->value,
      ]);
    }
}
