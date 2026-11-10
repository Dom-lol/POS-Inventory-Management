<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\error;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    // try {
    //     $dbName = DB::connection()->getDatabaseName();
    //     return "$dbName Success";
    // } catch (\Exception $e) {
    //     return "❌ តភ្ជាប់មិនទាន់បានទេ: " . $e->getMessage();
    // }
    $dbName = DB::connection()->getDatabaseName();
    if ($dbName) {
        return "Success";
    } elseif (!$dbName) {
        return "Error connection";
    } else {
        return "Error Server";
    }
});
