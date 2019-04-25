<?php
Route::group(['middleware' => 'web'], function () {
    Route::resource('ebusinesscard', 'vcian\ebusinesscard\EBusinessCardController');
    Route::get('generate-pdf/{slug}','vcian\ebusinesscard\EBusinessCardController@generatePDF');
});
