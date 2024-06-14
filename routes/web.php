<?php

use Illuminate\Support\Facades\Route;

Route::get('/ksorter', function (){
   return collect([
       'sortBy'  => 'name',
       'orderBy' => 'desc'
   ])->dd();
});
