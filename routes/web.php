<?php

use Illuminate\Support\Facades\Route;
use App\Models\Workspace;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    $workspace = Workspace::first();
    return view('welcome', compact('workspace'));
});

Route::get('/workspace', function () {
    return response()->json([
        'name' => 'triepg',
        'description' => 'Workspace untuk membuat website',
        'author' => 'Your Name',
    ]);
});
