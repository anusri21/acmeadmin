<?php
namespace App\Http\Controllers;
use Request;
use Snowfire\Beautymail\Beautymail;
use Illuminate\Support\Facades\Input;
use Redirect;
use Session;
use Mail;
class EmailController extends Controller
{
	public function sendMail(Request $request){

        // dd($request->all());
		// $this->validate($request, [
	    //     'email' => 'bail|required|email',
    	// ]);
    	
        // $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        // dd($beautymail);
		// $beautymail->send('emails.welcome', [], function($message) 
	    // {
	    // 	$email = Input::get('email');
	    //     $message
		// 		->from('donotreply@justlaravel.com')
		// 		->to($email, 'Howdy buddy!')
		// 		->subject('Test Mail!');
        // });


        if (Request::get ( 'message' ) != null)
        $data = array (
                'bodyMessage' => Request::get ( 'message' ) 
        );
      else
        $data [] = '';
       Mail::send ( 'backend.pages.email', $data, function ($message) {
        
        $message->from ( 'donotreply@demo.com', 'Just Laravel' );
        
        $message->to ( Request::get ( 'email' ) )->subject ( 'Just Laravel demo email using SendGrid' );
    } );
	    Session::flash("message","Email sent successfully");
	    return Redirect::back();
	}  
}