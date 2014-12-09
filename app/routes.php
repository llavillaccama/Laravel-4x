<?php
Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
	));

Route::get('/user/{username}',array(
	'as' => 'profile-user',
	'uses' => 'ProfileController@user'
	));

Route::group(array('before' => 'auth'), function() {


	Route::group(array('before'=>'csrf'),function(){
		/* | Change password (post) */
		Route::post('/account/change-password',array(
			'as' => 'account-change-password-post',
			'uses' => 'AccountController@postChangePassword'
			));
	});
	/* | Change password (GET) */
	Route::get('/account/change-password',array(
		'as' => 'account-change-password',
		'uses' => 'AccountController@getChangePassword'
		));
	/* | Sign Out (GET) */
	Route::get('sign-out','AccountController@getSignOut');

});




/*
/Unautentication group
*/
Route::group(array('before' => 'guest'), function() {
	/*
	/csrf protection group
	*/
	Route::group(array('before' => 'csrf'), function(){

/*
	/Create account (Post)
	*/
	Route::post('/account/create', array(
		'as' => 'account-create-post',
		'uses' => 'AccountController@postCreate'
		));

	/*/Sign in (Post)	*/

	Route::post('/account/sign-in', array(
		'as' => 'account-sign-in-post',
		'uses' => 'AccountController@postSignIn'
		));
	/*	/Forgot password  (Post)	*/
	Route::post('/account/forgot-password',array(
		'as' => 'account-forgot-password-post',
		'uses' => 'AccountController@postForgotPassword'
		));


});

	/*	/Forgot password  (Get)	*/
	Route::get('/account/forgot-password',array(
		'as' => 'account-forgot-password',
		'uses' => 'AccountController@getForgotPassword'
		));

	Route::get('/account/recover/{code}',array(
		'as' => 'account-recover',
		'uses' => 'AccountController@getRecover'
		));

	/*	/Sign in (Get)	*/

	Route::get('/account/sign-in', array(
		'as' => 'account-sign-in',
		'uses' => 'AccountController@getSignIn'
		));

	/*
	/Create account (Get)
	*/
	Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
		));

	Route::get('/account/activate/{code}', array(
		'as' => 'account-activate',
		'uses' => 'AccountController@getActivate'
		));

});