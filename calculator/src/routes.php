<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Saurav\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Saurav\Calculator\CalculatorController@subtract');
