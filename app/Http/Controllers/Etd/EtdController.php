<?php

namespace App\Http\Controllers\Etd;

use App\Http\Controllers\Controller;
use App\Models\cours;
use App\Models\demandecours;
use Illuminate\Http\Request;
use App\Models\etd;
use App\Models\meet;
use App\Models\review;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Prof;


class EtdController extends Controller
{

    public function check(Request $request)
    {
        $etd = etd::where('email', $request->email)
            ->first();

        if ($etd)
            if (Hash::check($request->password, $etd->password)) {

                Auth::guard('etd')->login($etd);
                return redirect()->route('student.profile')->with(
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
    public function addetd(Request $request)
    {

        $etd = $this->validate($request, [
            'name' => 'required',
            'prenom' => 'required',
            'tele' => 'required',
            'adress' => 'required',
            'date' => 'required',
            'email' => 'required|unique:etds',
            'password' => 'required',
        ]);

        if ($etd) {

            if ($request->hasFile('image')) {

                $file = $request['image'];
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('etd'), $image);
                $etd['image'] = $image;

                $etd['password'] = Hash::make($etd['password']);

                etd::create($etd);
                return redirect()->back()->with(
                    [
                        'succes' => "Compte Creé avec succes"
                    ]
                );
            }
        }
    }

    public function profile()
    {
        return view('student.profile');
    }
    public function profileU(Request $request, $id)
    {

        $etd = etd::find($id);
        if ($request->hasFile('image')) {

            $file = $request['image'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('etd'), $image);
            unlink(public_path('etd') . '/' . $etd->image);

            etd::where('id', $id)->update([
                'name' => $request->name,
                'prenom' => $request->prenom,
                'tele' => $request->tele,
                'adress' => $request->adress,
                'date' => $request->date,
                'image' => $image
            ]);
            return redirect()->back()->with(
                [
                    'succes' => 'Update Avec Succes With Profile Image'
                ]
            );
        } else {
            etd::where('id', $id)->update([
                'name' => $request->name,
                'prenom' => $request->prenom,
                'tele' => $request->tele,
                'date' => $request->date,
                'adress' => $request->adress,
            ]);
            return redirect()->back()->with(
                [
                    'succes' => 'Update Avec Succes'
                ]
            );
        }


        return redirect()->back()->with(
            [
                'succes' => 'Password Update Avec Succes'
            ]
        );
    }

    public function cours(){
        $cours = demandecours::with('cours')
        ->where('etds_id',auth('etd')->user()->id)
        ->where('status','complete')
        ->get();
        return view('student.cours',[
            'cours'=>$cours
        ]);
    }

    public function demande(){

        $demande = demandecours::with('cours')
                   ->where('etds_id',auth('etd')->user()->id)
                   ->where('status','In Progress')
                   ->get();

        return view('student.demande',[
            'demande'=>$demande
        ]);
    }

    public function review(){

        $cours = demandecours::with('cours')
                   ->where('etds_id',auth('etd')->user()->id)
                   ->where('status','complete')
                   ->get();

        return view('student.review',[
            'cours'=>$cours
        ]);
    }

    public function addreview(Request $request){

        $validatedData = $this->validate($request, [
            'des' => 'required',
            'cours_id' =>'required',
            'etds_id'=>'required'
        ]);

        if ($validatedData) {
            
            review::create($validatedData);

            return redirect()->back()->with([
                'succes' => 'Add avec Succes'
            ]);;
        } 

        return redirect()->back()->with([
            'fail' => 'Deja Exist'
        ]);
        
    }
    
    public function meet(){
       // $meet = meet::where('')
       $meet = DB::table('demandecours')
                ->join('etds', 'etds.id', '=', 'demandecours.etds_id')
                ->join('cours', 'cours.id', '=', 'demandecours.cours_id')
                ->join('profs', 'profs.id', '=', 'cours.profs_id')
                ->join('meets', 'meets.profs_id', '=', 'cours.profs_id')
                ->select('meets.*')
                ->where('meets.target_cours', '=', DB::raw('cours.title'))
                ->where('etds.id', auth('etd')->user()->id)
                ->distinct()
                ->get();
            

        return view('student.meet',['meet'=>$meet]);
    }

    public function logout(){
        Auth::guard('etd')->logout();
        return redirect()->route('student.login');
    }

}
