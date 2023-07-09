<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Etd\EtdController;
use App\Http\Controllers\Prof\ProfController;
use App\Http\Controllers\RoleController as ControllersRoleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\RoleController;
use App\Models\categorei;
use App\Models\cours;
use App\Models\demandecours;
use Illuminate\Http\Request;


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
    $cours = cours::all();
    $cat = categorei::all();
    return view('index',['cours'=>$cours,'cat'=>$cat]);
})->name('homee');

Route::get('/about', function () {
    return view('about');
})->name('aboute');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/course', function () {

    $cours = cours::all();
    $cate = categorei::all();
    return view('course', [
        'cours' => $cours,
        'cat' => $cate
    ]);
})->name('courseee');

Route::get('/course-detail/{id}', function ($id) {

    $user = auth('etd')->user();
    $cours = cours::find($id);
    $cate = categorei::all();
   

    if ($user) {

        $enroll = demandecours::where('etds_id', $user->id)
        ->where('cours_id',$id)
        ->count();

        $demande = demandecours::where('etds_id', $user->id)
            ->where('status', 'complete')
            ->count();

        return view('course-detail', [
            'cours' => $cours,
            'cat' => $cate,
            'demande' => $demande,
            'enroll' => $enroll
        ]);
    }

    return view('course-detail', [
        'cours' => $cours,
        'cat' => $cate,

    ]);
})->name('courseDetail');

Route::post('/course-detail/{id}', function (Request $request) {

    $enroll = $request->all();

    if ($enroll) {
        demandecours::create($enroll);
        return redirect()->back();
    }
})->name('enroll');


Route::get('/courses', function () {
    return view('courses');
});



//permission
Auth::routes();















//Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        // return view('login'); 
        Route::view('/login', 'admin.login')->name('login');
        Route::post('/login', [adminController::class, 'checkadmin'])->name('check');
    });
    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        //profile
        Route::get('/profile', [adminController::class, 'profile'])->name('profile');
        Route::post('/profile/{id}', [adminController::class, 'profileU'])->name('edit');
        //cours
        Route::get('/cours', [adminController::class, 'cours'])->name('cours');
        Route::get('/categorie', [adminController::class, 'categorie'])->name('categorie');
        Route::get('/enroll', [adminController::class, 'enroll'])->name('enroll');
        Route::get('/review', [adminController::class, 'review'])->name('review');
        //users
        Route::get('/student', [adminController::class, 'student'])->name('student');
        Route::get('/prof', [adminController::class, 'prof'])->name('prof');
        //meet
        Route::get('/meet', [adminController::class, 'meet'])->name('meet');
        Route::get('/roles', [adminController::class, 'roles'])->name('roles');
        Route::post('/roles', [adminController::class, 'addroles'])->name('store');
        //controle
        Route::get('/users', [adminController::class, 'users'])->name('users');
        Route::get('/create', [adminController::class, 'create'])->name('create');
        Route::post('/create', [adminController::class, 'store'])->name('store');
        Route::get('/show/{id}', [adminController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [adminController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [adminController::class, 'update'])->name('update');
        Route::delete('/edit/{id}', [adminController::class, 'destroy'])->name('delete');


        Route::get('/roles', [RoleController::class, 'index'])->name('roles');
        Route::get('/createrole', [RoleController::class, 'create'])->name('createrole');
        Route::post('/createrole', [RoleController::class, 'store'])->name('storerole');
        Route::get('/showrole/{id}', [RoleController::class, 'show'])->name('showrole');
        Route::get('/editrole/{id}', [RoleController::class, 'edit'])->name('editrole');
        Route::post('/editrole/{id}', [RoleController::class, 'update'])->name('roleupdate');
        Route::delete('/editrole/{id}', [RoleController::class, 'destroy'])->name('roledelete');

        Route::post('/logout',[adminController::class,'logout'])->name('logout');
    });
});

//Prof
Route::prefix('prof')->name('prof.')->group(function () {
    Route::middleware(['guest:prof', 'PreventBackHistory'])->group(function () {
        // return view('login'); 
        Route::view('/login', 'prof.login')->name('login');
        Route::view('/register', 'prof.register')->name('register');
        Route::post('/login', [ProfController::class, 'check'])->name('check');
        Route::post('/register', [ProfController::class, 'register'])->name('addprof');
    });
    Route::middleware(['auth:prof', 'PreventBackHistory'])->group(function () {
        //profile
        Route::get('/profile', [ProfController::class, 'profile'])->name('profile');
        Route::post('/profile/{id}', [ProfController::class, 'profileU'])->name('edit');
        Route::get('/Cours', [ProfController::class, 'cours'])->name('cours');
        Route::post('/Cours', [ProfController::class, 'addcours'])->name('add');
        Route::post('/Cours/{id}', [ProfController::class, 'updatecours'])->name('update');
        Route::delete('/Cours/{id}', [ProfController::class, 'deletecours'])->name('delete');
        Route::get('/meet', [ProfController::class, 'meet'])->name('meet');
        Route::post('/meet', [ProfController::class, 'addmeet'])->name('addmeet');
        Route::get('/List-meet', [ProfController::class, 'meetlist'])->name('meetlist');
        Route::get('/categorie', [ProfController::class, 'cate'])->name('cate');
        Route::post('/categorie', [ProfController::class, 'addcate'])->name('addcate');
        Route::get('/student', [ProfController::class, 'student'])->name('student');
        Route::get('/Enroll', [ProfController::class, 'enroll'])->name('enroll');
        Route::post('/Enroll/{id}', [ProfController::class, 'addenroll'])->name('addenroll');
        Route::get('/review', [ProfController::class, 'review'])->name('review');
        Route::post('/logout',[ProfController::class,'logout'])->name('logout');
    });
});

//student
Route::prefix('student')->name('student.')->group(function () {
    Route::middleware(['guest:etd', 'PreventBackHistory'])->group(function () {
        // return view('login'); 
        Route::view('/login', 'student.login')->name('login');
        Route::view('/register', 'student.signup')->name('register');
        Route::post('/register', [EtdController::class, 'addetd'])->name('addetd');
        Route::post('/login', [EtdController::class, 'check'])->name('check');
    });
    Route::middleware(['auth:etd', 'PreventBackHistory'])->group(function () {
        //profile
        Route::get('/profile', [EtdController::class, 'profile'])->name('profile');
        Route::post('/profile/{id}', [EtdController::class, 'profileU'])->name('edit');
        Route::get('/cours', [EtdController::class, 'cours'])->name('cours');
        Route::get('/demande', [EtdController::class, 'demande'])->name('demande');
        Route::get('/review', [EtdController::class, 'review'])->name('review');
        Route::post('/review', [EtdController::class, 'addreview'])->name('addreview');
        Route::get('/meet', [EtdController::class, 'meet'])->name('meet');
        Route::post('/logout',[EtdController::class,'logout'])->name('logout');
    });
});

//web
Route::prefix('user')->name('user.')->group(function () {
    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
        // return view('login'); 
        Route::view('/login', 'users.login')->name('login');
        // Route::post('/login', [adminController::class, 'checkadmin'])->name('check');
    });
    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
        //profile
        /*   Route::get('/profile', [adminController::class, 'profile'])->name('profile');
        Route::post('/profile/{id}',[adminController::class,'profileU'])->name('edit');
     */


        /*  Route::get('/profile', [adminController::class, 'showprofile'])->name('profile');
        Route::post('/user/{id}', [adminController::class, 'editadmin'])->name('edit'); */



        //Route::post('/logout',[MethodController::class,'logoutadmin'])->name('logout');
    });
});
