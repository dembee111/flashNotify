<?php

Route::get('/notify', function(){
	notify()->flash('Амжиллтай хадгаллаа', 'success',[
         'timer' => 2000,
	]);
     return redirect()->to('/');
});

Route::get('/', function () {
    return view('welcome');
});
