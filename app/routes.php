<?php

namespace DepotWarehouse\Home;

use \Route;

Route::group(array('namespace' => 'DepotWarehouse\Home\Controllers'), function() {
    Route::get('/', array('as' => 'home.index', 'uses' => 'HomeController@index'));
});