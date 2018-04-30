<?php

namespace App\Http\Controllers;
use Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\MessageBag;
use Validator;
class MainMenuController extends Controller
{
  public function MainMenu(Request $request){
    Log::debug('MainMenu');
    return view('home');
  }

  public static function getLabelSetting($labelName){
    Log::debug('getLabelSetting with name : '.$labelName);
    $labelSetting = DB::table('label_setting')->where('label_name', $labelName)->first();
    return $labelSetting;
  }

}
