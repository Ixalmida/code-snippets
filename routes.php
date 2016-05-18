<?php
// API v1 Routes
Route::group(['prefix' => 'v1'], function () {
    // Widgets
    Route::resource('widget', 'WidgetController');
}
