<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\categorei;
use App\Models\cours;
use App\Models\demandecours;
use App\Models\etd;
use App\Models\meet;
use App\Models\review;
use App\Models\Prof;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Arr;

class adminController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:profile', ['only' => ['profile','profileU']]);
         $this->middleware('permission:user-student', ['only' => ['student']]);
         $this->middleware('permission:user-profe', ['only' => ['prof']]);

         $this->middleware('permission:meet-list', ['only' => ['meet']]);


         $this->middleware('permission:cours', ['only' => ['cours']]);
         $this->middleware('permission:cours-list', ['only' => ['cours']]);
         $this->middleware('permission:cours-categorie', ['only' => ['categorie']]);
         $this->middleware('permission:cours-review', ['only' => ['review']]);
         $this->middleware('permission:cours-enroll', ['only' => ['enroll']]);

         $this->middleware('permission:controle-user', ['only' =>['users']]);
         $this->middleware('permission:controle-user-show', ['only' =>['show']]);
         $this->middleware('permission:controle-user-create', ['only' => ['create','store']]);
         $this->middleware('permission:controle-user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:controle-user-destroy', ['only' => ['destroy']]);


        
    }

    //login
    public function checkadmin(Request $request)
    {

        $admin = Admin::where('email', $request->email)
            ->first();

        if ($admin)
            if (Hash::check($request->password, $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect()->route('admin.profile')->with(
                    [
                        'succes' => 'auth Succes'
                    ]
                );
            } else {
                return redirect()->back()->with(
                    [
                        'fail' => 'Incorrect password'
                    ]
                );
            }
        else {
            return redirect()->back()->with(
                [
                    'fail' => 'Email Incorrect'
                ]
            );
        }
    }

    //profile

    public function profile()
    {
        $enrol = demandecours::count();
        $student = etd::count();
        $cours = cours::count();
        $review = review::count();

        $prof = Prof::count();
        $categorie = categorei::count();
        $meet = meet::count();
        
        return view('admin.profile',[
            'enrol'=>$enrol,
            'student'=>$student,
            'cours'=>$cours,
            'review'=>$review,
            'prof'=>$prof,
            'categorie'=>$categorie,
            'meet'=>$meet
        ]);
    }

    public function profileU(Request $request, $id)
    {

        $admin = Admin::find($id);

        if (Hash::check($request->passwordauncien, $admin->password)) {

            Admin::where('id', $id)->update([
                'password' => Hash::make($request->passwordnew),
            ]);

            return redirect()->back()->with(
                [
                    'succes' => 'Password Update Avec Succes'
                ]
            );
        } else {
            return redirect()->back()->with(
                [
                    'fail' => 'Ancien incorrect password'
                ]
            );
        }
    }


    public function cours()
    {
        $cours = DB::table('cours')
                ->join('profs', 'cours.profs_id', '=', 'profs.id')
                ->select('profs.name as name', 'profs.prenom as prenom','cours.image as image','cours.title as title','cours.niveau as niveau',
                'cours.categorie as categorie','cours.des as des','cours.created_at as created_at')
                ->get();

        return view('admin.cours',[
            'cours'=>$cours
        ]);

    }

    public function categorie(){
        $categorie = categorei::all();
        return view('admin.categorie',[
            'categorie'=>$categorie
        ]);
    }

    public function enroll(){

      $enroll = DB::table('demandecours')
        ->join('etds','demandecours.etds_id','=','etds.id')
        ->join('cours', 'demandecours.cours_id', '=', 'cours.id')
        ->select('demandecours.*', 'cours.*','etds.*')
        ->get();

        return view('admin.enroll',[
            'enroll'=>$enroll
        ]);

    }

    public function review(){
        $review = DB::table('reviews')
        ->join('etds','reviews.etds_id','=','etds.id')
        ->join('cours', 'reviews.cours_id', '=', 'cours.id')
        ->select('reviews.des as des', 'cours.des as doso','cours.title as title','etds.*')
        ->get();
        return view('admin.review',[
            'review'=>$review
        ]);
    }

    public function student(){
        $student = etd::all();
        return view('admin.student',[
            'student'=>$student
        ]);
    }

    public function prof(){
        $prof = prof::all();
        return view('admin.prof',[
            'prof'=>$prof
        ]);
    }

    public function meet(){

        $meet = DB::table('meets')
        ->join('profs', 'meets.profs_id', '=', 'profs.id')
        ->select('meets.*', 'profs.*')
        ->get();
    
        return view('admin.meet',[
            'meet'=>$meet
        ]);
    }

   

    public function users(Request $request)
    {

        $data = admin::orderBy('id','DESC')->paginate(5);

        return view('admin.users',compact('data'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    

    

    public function create()
    {

        $roles = Role::pluck('name','name')->all();

        return view('admin.createuser',compact('roles'));

    }

    

    
    public function store(Request $request)
    {

        $this->validate($request, [


            'email' => 'required|email|unique:admins,email',

            'password' => 'required|same:confirm-password',

            'roles' => 'required'

        ]);

    

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

    

        $user = admin::create($input);

        $user->assignRole($request->input('roles'));

    

        return redirect()->route('admin.users')

                        ->with('success','User created successfully');

    }

    

  

    public function show($id)
    {

        $user = admin::find($id);

        return view('admin.show',compact('user'));

    }

    

    public function edit($id)
    {
        $user = admin::find($id);

        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('admin.edit',compact('user','roles','userRole'));

    }

    


    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'email' => 'required|email|unique:admins,email,'.$id,

            'password' => 'same:confirm-password',

            'roles' => 'required'

        ]);

    

        $input = $request->all();

        if(!empty($input['password'])){ 

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = Arr::except($input,array('password'));    

        }

    

        $user = admin::find($id);

        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

    

        $user->assignRole($request->input('roles'));

    

        return redirect()->route('admin.users')

                        ->with('success','User updated successfully');

    }

    

    public function destroy($id)
    {

        admin::find($id)->delete();

        return redirect()->route('admin.users')

                        ->with('success','User deleted successfully');

    }


    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
