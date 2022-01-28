<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/form', function () {
    return view('welcome');
});

if(isset($_GET['file'])) {
    $name = $_GET['file'];
    $ext = pathinfo($name)['extension'];
    $originalName = str_replace(".$ext", "", $name);
    $fileuploadRegex = "/^[^A-z1-9]/";
    // dd($name['extension']);
    if(preg_match($fileuploadRegex, $originalName)) {
        die('regex for file is incorrect. <a href="/">Return</a>');
    }
}

Route::view('upload.php', 'upload.php');
Route::post('/uploads', [UploadController::class, 'index'])->name('file.upload.post');

Route::get('/', function () {
    return view('form');
});


