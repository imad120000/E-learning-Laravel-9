<?php

namespace App\Http\Controllers\Prof;

use App\Http\Controllers\Controller;
use App\Models\categorei;
use App\Models\category;
use App\Models\cours;
use App\Models\demandecours;
use Illuminate\Http\Request;
use App\Models\Prof;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\meet;
use Firebase\JWT\JWT;
use Illuminate\Support\Facades\DB;


class ProfController extends Controller
{
    public function check(Request $request)
    {

        $prof = Prof::where('email', $request->email)
            ->first();

        if ($prof)
            if (Hash::check($request->password, $prof->password)) {
                Auth::guard('prof')->login($prof);
                return redirect()->route('prof.profile')->with(
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
    public function register(Request $request)
    {

        $etd = $this->validate($request, [
            'name' => 'required',
            'prenom' => 'required',
            'tele' => 'required',
            'naissance' => 'required',
            'email' => 'required|unique:etds',
            'password' => 'required',

        ]);
        if ($etd) {
            if ($request->hasFile('image')) {

                $file = $request['image'];
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('profimage'), $image);
                $etd['image'] = $image;
                $etd['password'] = Hash::make($etd['password']);

                Prof::create($etd);
                return redirect()->back()->with(
                    [
                        'succes' => "Compte Creé avec succes"
                    ]
                );
            }
        }
        return redirect()->back()->with(
            [
                'fail' => "Element Required"
            ]
        );
    }
    public function profile()
    {
        $profile = Prof::where('email', auth('prof')->user()->email)->get();

        $review = DB::table('reviews')
            ->join('etds', 'etds.id', '=', 'reviews.etds_id')
            ->join('cours', 'cours.id', '=', 'reviews.cours_id')
            ->join('profs', 'profs.id', '=', 'cours.profs_id')
            ->select('reviews.des as des', 'cours.title as title', 'etds.name as name', 'etds.prenom as prenom', 'etds.image as image')
            ->where('cours.profs_id', auth('prof')->user()->id)
            ->count();

        $student = DB::table('demandecours')
            ->join('etds', 'etds.id', '=', 'demandecours.etds_id')
            ->join('cours', 'cours.id', '=', 'demandecours.cours_id')
            ->join('profs', 'profs.id', '=', 'cours.profs_id')
            ->select('etds.name as name', 'etds.prenom as prenom', 'profs.id as prof_Id', 'cours.niveau as niveau', 'cours.title as title', 'etds.image as image')
            ->where('cours.profs_id', auth('prof')->user()->id)
            ->where('demandecours.status', 'complete')
            ->count();

        $cours = cours::where('profs_id', auth('prof')->user()->id)
            ->count();

        $enroll = DemandeCours::join('cours', 'cours.id', '=', 'demandecours.cours_id')
            ->join('profs', 'profs.id', '=', 'cours.profs_id')
            ->where('profs.id', '=', auth('prof')->user()->id)
            ->count();

        return view('prof.profile', [
            'prof' => $profile,
            'review' => $review,
            'student' => $student,
            'cours' => $cours,
            'enrol'=>$enroll
        ]);
    }
    public function profileU(Request $request, $id)
    {

        $prof = Prof::find($id);

        if (Hash::check($request->passwordauncien, $prof->password)) {

            if ($request->hasFile('image')) {

                $file = $request['image'];
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('profimage'), $image);
                unlink(public_path('profimage') . '/' . $prof->image);

                Prof::where('id', $id)->update([
                    'password' => Hash::make($request->passwordnew),
                    'name' => $request->name,
                    'prenom' => $request->prenom,
                    'tele' => $request->tele,
                    'naissance' => $request->naissance,
                    'image' => $image
                ]);
                return redirect()->back()->with(
                    [
                        'succes' => 'Update Avec Succes With Profile Image'
                    ]
                );
            } else {

                Prof::where('id', $id)->update([
                    'password' => Hash::make($request->passwordnew),
                    'name' => $request->name,
                    'prenom' => $request->prenom,
                    'tele' => $request->tele,
                    'naissance' => $request->naissance
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
        $cours = cours::where('profs_id', auth('prof')->user()->id)->get();
        $cat = categorei::all();
        return view('prof.cours', [
            'cours' => $cours,
            'cat' => $cat
        ]);
    }

    public function addcours(Request $request)
    {

        $cours = $this->validate($request, [
            'title' => 'required',
            'niveau' => 'required',
            'des' => 'required',
            'video' => 'required',
            'categorie' => 'required'
        ]);

        if ($cours) {
            if ($request->hasFile('image')) {

                $file = $request['image'];
                $image = time() . '_' . $file->getClientoriginalname();
                $file->move(public_path('cours'), $image);
                $cours['image'] = $image;
                $cours['profs_id'] = auth('prof')->user()->id;

                cours::create($cours);
                return redirect()->back()->with(
                    [
                        'succes' => "Cours Creé avec succes"
                    ]
                );
            }
        }
        return redirect()->back()->with(
            [
                'fail' => "Element Required"
            ]
        );
    }

    public function updatecours(Request $request, $id)
    {

        $cours = cours::find($id);

        if ($request->hasFile('image')) {

            $file = $request['image'];
            $image = time() . '_' . $file->getClientoriginalname();
            $file->move(public_path('cours'), $image);
            unlink(public_path('cours') . '/' . $cours->image);

            cours::where('id', $id)->update([
                'title' => $request->title,
                'niveau' => $request->niveau,
                'des' => $request->des,
                'video' => $request->video,
                'categorie' => $request->categorie,
                'image' => $image

            ]);
            return redirect()->back()->with(
                [
                    'succes' => 'Update Avec Succes With Profile Image'
                ]
            );
        } else {

            cours::where('id', $id)->update([

                'title' => $request->title,
                'niveau' => $request->niveau,
                'des' => $request->des,
                'video' => $request->video,
                'categorie' => $request->categorie,

            ]);
            return redirect()->back()->with(
                [
                    'succes' => 'Update Avec Succes'
                ]
            );
        }
    }

    public function deletecours($id)
    {
        $cours = cours::find($id);
        unlink(public_path('cours') . '/' . $cours->image);
        $cours->delete();
        return redirect()->back()->with([
            'succes' => 'Delete avec Succes'
        ]);
    }

    public function meet()
    {
        $cours = cours::where('profs_id',auth('prof')->user()->id)->get();
        return view('prof.meet',[
            'cours'=>$cours
        ]);
    }

    /* public function addmeet(Request $request)
    {

        $validatedData = $request->validate([
            'meet_title' => 'required|string',
            'target_niveau' => 'required|string',
            'target_cours' => 'required|string',
            'meet_date' => 'required|date',
            'meet_duration' => 'required|integer',
            'meet_password' => 'required|string',
        ]);


        // Generate the Jitsi Meet URL with JWT token
        $jitsiMeetURL = $this->generateJitsiMeetURL($validatedData['meet_title'], $validatedData['meet_password']);

        meet::create([
            'meet_title' => $validatedData['meet_title'],
            'target_niveau' => $validatedData['target_niveau'],
            'target_cours' => $validatedData['target_cours'],
            'meet_date' => $validatedData['meet_date'],
            'meet_duration' => $validatedData['meet_duration'],
            'meet_password' => $validatedData['meet_password'],
            'jitsi_meet_url' => $jitsiMeetURL,
        ]);
    } */
    /* private function generateJitsiMeetURL($roomName, $password)
    {
        $randomKey = bin2hex(random_bytes(16)); // Generate a 32-character hexadecimal key

        $jwtKey = $randomKey; // Replace with your JWT secret key
        $jwtPayload = [
            'room' => $roomName,
            'password' => $password,
        ];
        $jwtToken = JWT::encode($jwtPayload, $jwtKey,'HS512');

        return 'https://meet.jit.si/' . $roomName . '?jwt=' . $jwtToken;
    } */

    public function addmeet(Request $request)
    {
        $validatedData = $request->validate([
            'meet_title' => 'required|string',
            'target_niveau' => 'required|string',
            'target_cours' => 'required|string',
            'meet_date' => 'required|date',
        ]);

        // Generate the Jitsi Meet URL
        $jitsiMeetURL = $this->generateJitsiMeetURL($validatedData['meet_title'],'');
        if($validatedData){
            meet::create([
                'profs_id'=>auth('prof')->user()->id,
                'meet_title' => $validatedData['meet_title'],
                'target_niveau' => $validatedData['target_niveau'],
                'target_cours' => $validatedData['target_cours'],
                'meet_date' => $validatedData['meet_date'],
                'jitsi_meet_url' => $jitsiMeetURL,
            ]);
            return redirect()->back()->with([
                'succes'=>"Add avec succes"
            ]);
        }
     
    }


    private function generateJitsiMeetURL($roomName, $password)
    {
        $jitsiMeetURL = 'https://meet.jit.si/';

        return $jitsiMeetURL . urlencode($roomName) . '?password=' . urlencode($password);
    }


    public function cate()
    {
        return view('prof.categorie');
    }

    public function addcate(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required|string|unique:categoreis',
        ]);

        if ($validatedData) {

            categorei::create($validatedData);

            return redirect()->back()->with([
                'succes' => 'Add avec Succes'
            ]);;
        }

        return redirect()->back()->with([
            'fail' => 'Deja Exist'
        ]);
    }

    public function student()
    {

        $student = DB::table('demandecours')
            ->join('etds', 'etds.id', '=', 'demandecours.etds_id')
            ->join('cours', 'cours.id', '=', 'demandecours.cours_id')
            ->join('profs', 'profs.id', '=', 'cours.profs_id')
            ->select('etds.name as name', 'etds.prenom as prenom', 'profs.id as prof_Id', 'cours.niveau as niveau', 'cours.title as title', 'etds.image as image')
            ->where('cours.profs_id', auth('prof')->user()->id)
            ->where('demandecours.status', 'complete')
            ->get();

        return view('prof.student', [
            'student' => $student
        ]);
    }

    public function enroll()
    {

        $student = DB::table('demandecours')
            ->join('etds', 'etds.id', '=', 'demandecours.etds_id')
            ->join('cours', 'cours.id', '=', 'demandecours.cours_id')
            ->join('profs', 'profs.id', '=', 'cours.profs_id')
            ->select('demandecours.id as idc', 'etds.name as name', 'etds.prenom as prenom', 'profs.id as prof_Id', 'cours.niveau as niveau', 'cours.title as title', 'etds.image as image', 'etds.id as id')
            ->where('cours.profs_id', auth('prof')->user()->id)
            ->where('demandecours.status', 'In Progress')
            ->get();

        return view('prof.Enrollment', [
            'student' => $student
        ]);
    }

    public function addenroll($id)
    {

        demandecours::where('id', $id)->update([
            'status' => 'complete',
        ]);
        return redirect()->back()->with(
            [
                'succes' => 'Update Avec Succes '
            ]
        );
    }

    public function review()
    {

        $review = DB::table('reviews')
            ->join('etds', 'etds.id', '=', 'reviews.etds_id')
            ->join('cours', 'cours.id', '=', 'reviews.cours_id')
            ->join('profs', 'profs.id', '=', 'cours.profs_id')
            ->select('reviews.des as des', 'cours.title as title', 'etds.name as name', 'etds.prenom as prenom', 'etds.image as image')
            ->where('cours.profs_id', auth('prof')->user()->id)
            ->get();

        return view('prof.review', [
            'review' => $review
        ]);
    }

    public function meetlist(){
        $meet = meet::where('profs_id',auth('prof')->user()->id)->get();
        return view('prof.meetD',[
            'meet'=>$meet
        ]);
    }

    public function logout(){
        Auth::guard('prof')->logout();
        return redirect()->route('prof.login');
    }
}
