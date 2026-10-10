<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('auth.auth');
})->name('home');

Route::group([],function(){
    Route::view('dashboard', 'user.dashboard')->name('dashboard');
    Route::view('skills', 'user.skills.index')->name('skills.index');
    Route::view('borrowing', 'user.borrowing.index')->name('borrowing.index');
    Route::view('profile', 'user.profile.index')->name('profile');

    Route::view('transactions', 'user.transactions.index')->name('transactions.index');

    Route::get('transactions/{id}', function (int $id) {
        return view('user.transactions.show', ['id' => $id]);
    })->whereNumber('id')->name('transactions.show');
});


Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
