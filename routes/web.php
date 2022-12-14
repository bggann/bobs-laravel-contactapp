<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function getContacts()
{
    return [1 => ['name' => 'Name 1', 'phone' => '1234567890'],
            2 => ['name' => 'Name 2', 'phone' => '0123456789'],
            3 => ['name' => 'Name 3', 'phone' => '9012345678']];
}

Route::get('/', function () {

    return view('welcome');
});

Route::get('/contacts', function () {
    $contacts = getContacts();

    return view('contacts.index', compact('contacts'));
})->name('contacts.index');

Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    $contacts = getContacts();
    abort_if(!isset($contacts[$id]), 404);
    $contact = $contacts[$id];
    return view('contacts.show')->with('contact',$contact);
})->name('contacts.show');

Route::fallback(function () {
    return "Sorry, this page does not exist";
});
