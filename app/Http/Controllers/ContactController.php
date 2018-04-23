<?php

namespace App\Http\Controllers;
use Constants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;
use App\Mail\ContactMail; // <- add this line
// use DataTables;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\MessageBag;
use Validator;
use Response;
use Carbon;
use Mail;
class ContactController extends Controller
{

  public function view(Request $request){
    Log::debug('ContactController => view()');
    return view('contactUs');
  }

  public function send(Request $request){
    Log::debug('ContactController => send()');
    // validasi input
    $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',

    ]);
    // Jika input gagal redirect ke login page
    if ($validator->fails()) {
           Log::warn('Error validasi input ');
           $response = array('errors' => $validator->getMessageBag(),
           'rc' => Constants::SYS_RC_VALIDATION_INPUT_ERROR());
           Log::debug(Response::json($response));
           return Response::json($response);
    }
    $name = $request->name;
    $email = $request->email;
    $phone = $request->phone;
    $subject = $request->subject;
    $message = $request->message;

    $app = app();
    $updated_at = Carbon\Carbon::now(Constants::ASIA_TIMEZONE());
    Log::info('Update at '.$updated_at);
    DB::beginTransaction();

    try {
        // update system setting by id
        DB::insert('insert into contact (name, email,phone_no,subject,message, created_on)
        values (:name, :email, :phone, :subject, :message, :createdOn)',
        ['name' => $name, 'email' => $email , 'phone' => $phone , 'subject' => $subject
        , 'message' => $message, 'createdOn' => $updated_at]);
        DB::commit();
        // notif e-mail
        Log::info('Send notif email '.$email);
        Log::info('Send notif name '.$name);
        // Mail::send('emails.hello', array('guest' => $name), function($message)
        // {
        //     $message->to('agusdk2011@gmail.com');
        //     $message->subject('test2');
        //
        // });
        Mail::to($email)->send(new ContactMail('ini adalah subject'));

        // DB::rollback();
        $response = array('level' => Constants::SYS_MSG_LEVEL_SUCCESS(),
        'message' => Constants::SYS_MSG_CONTACT_SUCCESS_ADDED(),
        'rc' => '0');



    } catch (\Exception $e) {
        Log::info('error db '.$e->getMessage());
        DB::rollback();
        $response = array('message' => Constants::SYS_MSG_UNKNOWN_ERROR(),
        'rc' => Constants::SYS_RC_UNKNOWN_ERROR(),
        'errors' => '');
    }
    return Response::json($response);
  }


}
