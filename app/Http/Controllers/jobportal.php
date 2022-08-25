<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\employer;
use App\Models\employeredit;
use App\Models\employeeinfo;
use App\Models\Student;
use App\Models\Post;
use App\Models\Empost;
use App\Models\Cart;
use App\Models\Bookmark;
use App\Models\Admin;
use Notification;
use App\Notifications\SendEmailNotification;
use Hash;
use Session;
use DB;
use Illuminate\Support\Facades\Stroage;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class jobportal extends Controller
{

    public function login()
    {
        return view("auth.Login");

    }
    public function adminlogin()
    {
        return view("auth.adminLogin");

    }
     public function employerlogin()
    {
        return view("auth.employerlogin");

    }
    public function registration()
    {
        return view("auth.Registration");
    }
    public function employerregistration()
    {
        return view("auth.employerregistration");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]
        );
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res){
            return back()->with('success','You have registered succesfully');

        }else{
            return back()->with('fail','Something wrong!');
        }

    } 
    public function registeremployer(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:employers',
            'password'=>'required|min:5|max:12'
        ]
        );
        $employer=new employer();
        $employer->name=$request->name;
        $employer->email=$request->email;
        $employer->password=Hash::make($request->password);
        $res=$employer->save();
        if($res){
            return back()->with('success','You have registered succesfully');

        }else{
            return back()->with('fail','Something wrong!');
        }

    } 
    public function dashboard()
    {
        return view("auth.dashboard");
    }
    public function ad()
    {
        return view("auth.admindashboard");
    }

    public function dashboardforemployer()
    {
         return view("auth.dashboardforemployer");
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]
        );
        $user=User::where('email','=',$request->email)->first();
        if($user)
        {
            if(hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');

            }else{
                 return back()->with('fail','password not matches');
            }

        }
        else{
            return back()->with('fail','this email is not registered');

        }
    }
    public function loginadmin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]
        );
        $admin=Admin::where('email','=',$request->email)->first();
        if($admin)
        {
            if($request->password==$admin->password)
            {
                $request->session()->put('loginId',$admin->id);
                return redirect('admindashboard');

            }else{
                 return back()->with('fail','password not matches');
            }

        }
        else{
            return back()->with('fail','this email is not registered');

        }
    }

    public function loginemployer(Request $request)
     {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]
        );
        $employer=employer::where('email','=',$request->email)->first();
        if($employer)
        {
            if(hash::check($request->password,$employer->password))
            {
                $request->session()->put('loginId',$employer->id);
                return redirect('dashboardforemployer');
                return $request;

            }else{
                 return back()->with('fail','password not matches');
            }

        }
        else{
            return back()->with('fail','this email is not registered');

        }
    }
        public function edit()
    {
        return view("auth.edit");

    }
    public function editemployeredit(Request $request)
    {
        $request->validate([
            'cname'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required'
        ]);
        $employeredit= new employeredit();
        $employeredit->cname=$request->cname;
        $employeredit->address=$request->address;
        $employeredit->phone=$request->phone;
        $employeredit->email=$request->email;
        $res=$employeredit->save();
        if($res){
            return back()->with('success','You have entered your information succesfully');

        }else{
            return back()->with('fail','Something wrong!');
        }

    }
    public function editemployee(Request $request)
    {
        return view("auth.editemployee");

    }
    public function editemployeeemployeeinfo(Request $request){
      $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'School'=>'required',
            'College'=>'required',
            'University'=>'required',
            'CGPA'=>'required',
            'Father'=>'required',
            'Mother'=>'required'
        ]);
        $employeeinfo= new employeeinfo();
        $employeeinfo->name=$request->name;
        $employeeinfo->address=$request->address;
        $employeeinfo->phone=$request->phone;
        $employeeinfo->email=$request->email;
        $employeeinfo->School=$request->School;
        $employeeinfo->College=$request->College;
        $employeeinfo->University=$request->University;
        $employeeinfo->CGPA=$request->CGPA;
        $employeeinfo->Father=$request->Father;
        $employeeinfo->Mother=$request->Mother;

        $res=$employeeinfo->save();
        if($res){
            return back()->with('success','You have entered your information succesfully');

        }else{
            return back()->with('fail','Something wrong!');
        }

    }
    function index(Request $req)
    {
        return $req->file('file')->store('docs');
    }

    function show()
    {
        $data=employer::all();
        return view('auth.detailsofemployer',['employer'=>$data]);
    }
    public function index1()
    {
        $user=Auth::user()->load('employer');
        return view('sample.index',['user' => $user]);
    }
         public function post()
    {
        return view("auth.post");

    }
    public function postposting(Request $request)    
    {
        $request->validate([
            'companyName'=>'required',
            'email'=>'required|email|unique:postings',
            'address'=>'required',
            'phone'=>'required',
            'designation'=>'required',
            'workingHour'=>'required',
            'salary'=>'required',
            'one'=>'required',
            'two'=>'required',
            'three'=>'required',
            'four'=>'nullable',
            'five'=>'nullable',
            'six'=>'nullable',
            'seven'=>'nullable',
            'eight'=>'nullable',
            'nine'=>'nullable',
            'ten'=>'nullable'

        ]);
        $posting = new Posting();
        $posting->companyName=$request->companyName;
        $posting->email=$request->email;
        $posting->address=$request->address;
        $posting->phone=$request->phone;
        $posting->designation=$request->designation;
        $posting->workingHour=$request->workingHour;
        $posting->salary=$request->salary;
        $posting->one=$request->one;
        $posting->two=$request->two;
        $posting->three=$request->three;
        $posting->four=$request->four;
        $posting->five=$request->five;
        $posting->six=$request->six;
        $posting->seven=$request->seven;
        $posting->eight=$request->eight;
        $posting->nine=$request->nine;
        $posting->ten=$request->ten;

        $res=$posting->save();
        if($res){
            return back()->with('success','You have entered your information succesfully');

        }else{
            return back()->with('fail','Something wrong!');
        }
    } 
    public function profile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Employer:: where('id', '=', Session::get('loginId'))->first();
        }
        return view('auth.profile', compact('data'));
    }  

    public function logout()
    {
       if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('employerlogin');
        } 
    }

    public function seekerlogout()
    {
       if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        } 
    }

    public function seekerprofile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User:: where('id', '=', Session::get('loginId'))->first();
        }
        return view('auth.seekerprofile', compact('data'));
    }  

    public function seekeredit()
    {
        $data = Student::get();
        return view('auth.studentprofile',compact('data'));
    }




#posting and editing student information
    public function addPost()
    {
        return view('auth.add-post');
    }
    public function savePost(Request $request)
    {
        DB::table('posts')->insert([
            'user_id'=>$request->user_id,
            'name'=>$request->name,
            'fathername'=>$request->fathername,
            'mothername'=>$request->mothername,
            'presentaddress'=>$request->presentaddress,
            'Village'=>$request->Village,
            'Thana'=>$request->Thana,
            'Upazila'=>$request->Upazila,
            'District'=>$request->District,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'school'=>$request->school,
            'ssc'=>$request->ssc,
            'college'=>$request->college,
            'hsc'=>$request->hsc,
            'university'=>$request->university,
            'cgpa'=>$request->cgpa,
            'h1'=>$request->h1,
            'h2'=>$request->h2,
            'studying'=>$request->studying,
            'one'=>$request->one,
            'two'=>$request->two,
            'three'=>$request->three,
            'four'=>$request->four,
            'interest'=>$request->interest,
            'salaryinterest'=>$request->salaryinterest,
            'workinghourinterest'=>$request->workinghourinterest,
            'workplaceinterest'=>$request->workplaceinterest
        ]);
        return back()->with('post_add','You have entered your information succesfully');

    }
    public function postList()
        {
            $data = array();
        if(Session::has('loginId'))
        {
            $data = Post:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.post-list', compact('data'));
        }

    public function editPost()
    {
        $post = DB::table('posts')->where('user_id','=', Session::get('loginId'))->first();
        return view('auth.edit-post',compact('post'));
    }

    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'user_id'=>$request->user_id,
            'name'=>$request->name,
            'fathername'=>$request->fathername,
            'mothername'=>$request->mothername,
            'presentaddress'=>$request->presentaddress,
            'Village'=>$request->Village,
            'Thana'=>$request->Thana,
            'Upazila'=>$request->Upazila,
            'District'=>$request->District,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'school'=>$request->school,
            'ssc'=>$request->ssc,
            'college'=>$request->college,
            'hsc'=>$request->hsc,
            'university'=>$request->university,
            'cgpa'=>$request->cgpa,
            'h1'=>$request->h1,
            'h2'=>$request->h2,
            'studying'=>$request->studying,
            'one'=>$request->one,
            'two'=>$request->two,
            'three'=>$request->three,
            'four'=>$request->four,
            'interest'=>$request->interest,
            'salaryinterest'=>$request->salaryinterest,
            'workinghourinterest'=>$request->workinghourinterest,
            'workplaceinterest'=>$request->workplaceinterest
        ]);
        return back()->with('post_update','Post updated success');
    }
    public function studentprofile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Post:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.studentprofile', compact('data'));
    } 



    #posting and editing employer information

      public function emaddPost()
    {
        return view('auth.emadd-post');
    }
    public function emsavePost(Request $request)
    {
        DB::table('emposts')->insert([
            'user_id'=>$request->user_id,
            'companyname'=>$request->companyname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'house'=>$request->house,
            'road'=>$request->road,
            'thana'=>$request->thana,
            'district'=>$request->district,
            'designation'=>$request->designation,
            'type'=>$request->type,
            'parttime_or_fulltime'=>$request->parttime_or_fulltime,
            'salary'=>$request->salary,
            'r1'=>$request->r1,
            'r2'=>$request->r2,
            'r3'=>$request->r3,
            'hour'=>$request->hour
        ]);
        return back()->with('empost_add','You have entered your information succesfully');

    }
    public function emprofile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Empost:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.emprofile', compact('data'));
    }

    public function showw(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != "") {
            $emposts = Empost::where('designation', 'LIKE', "%$search%")->orwhere('companyname', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->orwhere('phone', 'LIKE', "%$search%")->orwhere('house', 'LIKE', "%$search%")->orwhere('road', 'LIKE', "%$search%")->orwhere('thana', 'LIKE', "%$search%")->orwhere('district', 'LIKE', "%$search%")->orwhere('salary', 'LIKE', "%$search%")->orwhere('type', 'LIKE', "%$search%")->orwhere('parttime_or_fulltime', 'LIKE', "%$search%")->orwhere('r1', 'LIKE', "%$search%")->orwhere('r2', 'LIKE', "%$search%")->orwhere('r3', 'LIKE', "%$search%")->orwhere('hour', 'LIKE', "%$search%")->get();
        }
        else{
            $emposts = Empost::all();
        }
        $data=compact('emposts', 'search');
        return view('auth.list')->with($data);
    }

     public function showww(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != "") {
            $posts = Post::where('name', 'LIKE', "%$search%")->orwhere('fathername', 'LIKE', "%$search%")->orwhere('mothername', 'LIKE', "%$search%")->orwhere('presentaddress', 'LIKE', "%$search%")->orwhere('Village', 'LIKE', "%$search%")->orwhere('Thana', 'LIKE', "%$search%")->orwhere('Upazila', 'LIKE', "%$search%")->orwhere('district', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->orwhere('phone', 'LIKE', "%$search%")->orwhere('school', 'LIKE', "%$search%")->orwhere('ssc', 'LIKE', "%$search%")->orwhere('college', 'LIKE', "%$search%")->orwhere('hsc', 'LIKE', "%$search%")->orwhere('university', 'LIKE', "%$search%")->orwhere('cgpa', 'LIKE', "%$search%")->orwhere('h1', 'LIKE', "%$search%")->orwhere('h2', 'LIKE', "%$search%")->
            orwhere('studying', 'LIKE', "%$search%")->orwhere('one', 'LIKE', "%$search%")->orwhere('two', 'LIKE', "%$search%")->orwhere('three', 'LIKE', "%$search%")->orwhere('four', 'LIKE', "%$search%")->orwhere('interest', 'LIKE', "%$search%")->orwhere('salaryinterest', 'LIKE', "%$search%")->orwhere('workinghourinterest', 'LIKE', "%$search%")->orwhere('workplaceinterest', 'LIKE', "%$search%")->get();
        }
        else{
            $posts = Post::all();
        }
        $data=compact('posts', 'search');
        return view('auth.seeker-list')->with($data);
    }



    public function emedit()
    {
        $data = Empost::get();
        return view('auth.emprofile',compact('data'));
    }


    public function empostList()
        {
            $data = array();
        if(Session::has('loginId'))
        {
            $data = Empost:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.empost-list', compact('data'));
        }

    public function emeditPost()
    {
        $post = DB::table('emposts')->where('user_id','=', Session::get('loginId'))->first();
        return view('auth.emedit-post',compact('post'));
    }

    public function emupdatePost(Request $request)
    {
        DB::table('emposts')->where('id',$request->id)->update([
            'user_id'=>$request->user_id,
            'companyname'=>$request->companyname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'house'=>$request->house,
            'road'=>$request->road,
            'thana'=>$request->thana,
            'district'=>$request->district,
            'designation'=>$request->designation,
            'type'=>$request->type,
            'parttime_or_fulltime'=>$request->parttime_or_fulltime,
            'salary'=>$request->salary,
            'r1'=>$request->r1,
            'r2'=>$request->r2,
            'r3'=>$request->r3,
            'hour'=>$request->hour
        ]);
        return back()->with('empost_update','Post updated success');
    }
    public function uploadportfolio()
    {
        return view("auth.uploadportfolio");

    }
     public function saveportfolio(Request $request)
    {
        DB::table('uploadportfolios')->insert([
            'user_id'=>$request->user_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'link'=>$request->link
        ]);
 
        return back()->with('post_add','You have entered your information succesfully');
    }
    public function sorted($order = null)
    {
        $posts = Post::when($order, function ($query, $order) {
            return $query->orderBy($order);
        }, function($query) {
            return $query->orderBy('id');
        })
        ->get();
        return view('auth.sorted-seeker-list', compact('posts'));    
    }
    public function sortt($order = null)
    {
        $emposts = Empost::when($order, function ($query, $order) {
            return $query->orderBy($order);
        }, function($query) {
            return $query->orderBy('id');
        })
        ->get();
        return view('auth.sorted-job-list', compact('emposts'));    
    }
    public function courseee()
    {
        return view('auth.courses');
    }
    public function addTocart(Request $req)
    {
        if(Session::has('loginId')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('loginId');
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('addedcourses');
        }
        else
        {
            return redirect('/dashboard');
        }
    }
    public function addedcourses()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Cart:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.addedcourses', compact('data'));
    }
    public function checkout()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Cart:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.checkout', compact('data'));
    }
     public function delete_row($id)
     {
        Cart::where('user_id',$id)->delete();
        return redirect()->back()->with('success','Post updated success');
    }
    public function cv()
     {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Post:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.index', compact('data'));
    }
    public function bookmark()
    {
        $data = array();
            $data = Empost:: where('id', '=', '1')->first();
        return view('auth.bookmark', compact('data'));
    }
    public function rec()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = Post:: where('user_id', '=', Session::get('loginId'))->first();
        }
        return view('auth.rec', compact('data'));
    }

    public function rating()
    {
        return view('auth.rating');
    }

    public function sendnotification()
    {
        $user=User::all();
        $details=[
            'greeting'=>'Hi user',
            'body'=>'This is the email body',
            'actiontext'=>'A new JOB has been posted',
            'actionurl'=>'/',
            'lastline'=>'You have an interview to give',
        ];
        Notification::send($user,new SendEmailNotification($details));
        dd('Email send succesfully');
    }
    public function senddnotification()
    {
        $user=User::all();
        $details=[
            'greeting'=>'Hi user',
            'body'=>'This is the email body',
            'actiontext'=>'You have an Interview to give.Check out our JOB posts',
            'actionurl'=>'/',
            'lastline'=>'Join with us!',
        ];
        Notification::send($user,new SendEmailNotification($details));
        dd('Email send succesfully');
    }


}

