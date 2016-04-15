<?php

/*--------------------------------------------
| Application Routes
| --------------------------------------------
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
*/
Route::group(['middleware' => 'web'], function() {

	Route::auth();

	/*--------------------------------------------
	| Resources
	| --------------------------------------------
	| This is where you can register resource routes.
	*/

	/*--------------------------------------------
	| API
	| --------------------------------------------
	| Here is where you can register all of the 
	| routes for API calls.
	*/

});
