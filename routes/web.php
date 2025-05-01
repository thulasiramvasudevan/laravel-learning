<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\JobController;

Route::get('/', function () {

    //$jobs = Job::all();
    //dd($jobs[0]->title);
    return view('home',
        [   'greeting' =>'welcome',
            'name'=>'TH'
        ]   
    );
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



 Route::get('/jobs', [JobController::class, 'index']);
 Route::get('/jobs/create', [JobController::class, 'create']);
 Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
 Route::get('/jobs/{job}', [JobController::class, 'show']);

 Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
     ->middleware('auth')
     ->can('edit', 'job');

 Route::patch('/jobs/{job}', [JobController::class, 'update']);
 Route::delete('/jobs/{job}', [JobController::class, 'destroy']);



Route::get('/register',[RegisteredUserController::Class, 'create']);
Route::post('/register',[RegisteredUserController::Class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::get('/logout',[SessionController::Class, 'destroy']);


Route::get('testemail', function(){
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'Done';
});