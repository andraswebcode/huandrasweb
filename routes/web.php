<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/adatkezeles', function () {
    return view('privacy');
})->name('privacy');
/*
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/xprojekt', function () {
    return view('xprojekt');
});
*/

Route::post('/contact', function () {
	$validated = request()->validate([
		'name' => ['required', 'string', 'max:255'],
		'email' => ['required', 'email', 'max:255'],
		'message' => ['required', 'string'],
	]);

	Mail::to(config('mail.contact.address'))->send(
		new ContactMail(
			$validated['name'],
			$validated['email'],
			$validated['message'],
		)
	);

	return redirect()
		->route('home')
		->with('contact_success', true)
        ->withFragment('contact');
})->name('contact.send');
