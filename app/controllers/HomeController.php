<?php
class HomeController extends BaseController {
	public function home(){

		return View::make('home');
	}


	public function postContact(){

		$fromEmail = Input::get('email');
		$fromName = Input::get('name');
		$subject = "Correo de usuario";

		$data = array( 'message' => Input::get('message') );

		$toEmail = 'llavillaccama@gmail.com';
		$toName = 'Web Design JC';

		Mail::send('emails.auth.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){
			$message->to($toEmail, $toName)->cc($fromEmail);
			$message->from($fromEmail, $fromName);
			$message->subject($subject);
		});
		return Redirect::route('home')
		->with('message', 'Su mensaje fue enviado correctamente en breve recibira una respuesta por parte del administrador.');
	}
}
