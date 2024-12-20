<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Workspace;

Route::get('/workspace', function () {
    return response()->json([
        'name' => 'triepg',
        'description' => 'Workspace untuk membuat website',
        'author' => 'Your Name',
    ]);
});
