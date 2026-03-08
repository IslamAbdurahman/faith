<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $message = '';
    return view('welcome',compact('message'));
//    return redirect()->route('login');
})->name('main');

Route::middleware(['auth'])->group(function () {

    Route::get('index', function (){
        return view('index');
    })->name('home.index');

    ///// Super admin routes /////
    Route::group(['prefix'=>'admin','middleware'=>'super_admin'], function (){

        Route::resources([
            'admin'=>\App\Http\Controllers\AdminController::class]);

    });

    ///// Admin routes /////
    Route::group(['prefix'=>'admin','middleware'=>'admin'], function (){

        Route::resource('admin', \App\Http\Controllers\AdminController::class)->only([
            'index', 'show','edit','update'
        ]);

    });

    ///// Manager routes /////
    Route::group(['prefix'=>'admin','middleware'=>'manager'], function (){

        Route::resource('admin', \App\Http\Controllers\AdminController::class)->only([
            'show','edit','index'
        ]);

        Route::resource('buyer', \App\Http\Controllers\BuyerController::class)->only([
            'index'
        ]);
    });

    Route::resource('clients',\App\Http\Controllers\ClientController::class);


});


//Auth::routes([
//    'register' => false, // Registration Routes...
//    'reset' => false, // Password Reset Routes...
//    'verify' => false, // Email Verification Routes...
//]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('expire',function (\Illuminate\Http\Request $request){
    try {
        $request->validate([
            'url'=>'required'
        ]);

        $client = \App\Models\Client::where('url','=',$request->url)->first();
        if ($client){
            return response()->json([
                'status'=>true,
                'data'=>$client->date,
                'limit'=>$client->limit,
                'message'=>'Active'
            ]);
        }else{
            return response()->json([
                'status'=>false,
                'data'=>'2020-01-01',
                'limit'=> 0,
                'message'=>'Topilmadi'
            ]);
        }

    }catch (\Exception $exception){
        return response()->json([
            'status'=>false,
            'data'=>'2020-01-01',
            'limit'=> 0,
            'message'=>'Topilmadi'
        ]);
    }
});

Route::post('message', function (\Illuminate\Http\Request $request){

    \Illuminate\Support\Facades\Http::post('https://api.telegram.org/bot6144318751:AAFIKgtEPZK59Q61Pt0V9eQY-rUf-6wzgyQ/sendMessage', [
        'chat_id'=>531110501,
//        'chat_id'=>507405877,
        'text'=>'Name: '.$request->name.', '.
            ' Phone: '.$request->phone. ', '.
            ' Center: '.$request->center. ', '.
            ' Comment: '.$request->comment,
        'parse_mode'=>'html'
    ]);

    return redirect()->back()->with([
        'message'=>'Ariza yuborildi, Tez orada aloqaga chiqamiz.'
    ]);


})->name('message');
