<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;
use Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRquest;
use App\Repository\LoginRepository;


class loginController extends Controller
{

    /**
     * @var LoginRepository
     */
    protected $repository;

    public function __construct(LoginRepository $repository){
        $this->repository = $repository;
    }

    public function dashboard(request $request){
        return view('index');
    }

    public function ragistration(RegisterRquest $request){

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password)
        ];
        $user = $this->repository->create($data);
        
        if($user){
            return redirect()->back()->with('success','User register Successfully');
        }
        return redirect()->back()->with('error','Something went wrong');
    }

    public function login(LoginRequest $request){
        
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('dashboard')->with('success','User login successfully');
        }
        return redirect()->back()->with('error','Credential was wrong');
    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with('success','Logout Successfully');
    }

    
}
