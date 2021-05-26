<?php

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

// Route::get('/', function () {
//     return view('Pages.index');
// });
Route::get('/', 'PagesController@index');
Route::get('/result', 'PagesController@result');
Route::resource('files','FilesController');
// Route::get('read-excel',function(){
    
//     $fileD = fopen('{{file_name}}.csv',"r");
//     $column=fgetcsv($fileD);
//     while(!feof($fileD)){
//      $rowData[]=fgetcsv($fileD);
//     }
//     foreach ($rowData as $key => $value) {
        
//         $inserted_data=array('name'=>$value[0],
//                              'details'=>$value[1],
//                         );
        
//          Product::create($inserted_data);
//     }
//     print_r($rowData);
// });

