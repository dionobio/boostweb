<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller; use App\Models\User; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth; use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function loginForm(){ return view('auth.login'); }
    public function registerForm(){ return view('auth.register'); }
    public function login(Request $request){ $cred=$request->validate(['email'=>'required|email','password'=>'required']); if(Auth::attempt($cred)){ $request->session()->regenerate(); return redirect()->intended('/'); } return back()->withErrors(['email'=>'Sai email hoặc mật khẩu.']); }
    public function register(Request $request){ $data=$request->validate(['name'=>'required|max:120','email'=>'required|email|unique:users','phone'=>'nullable|max:30','role'=>'required|in:customer,booster','password'=>'required|min:6|confirmed']); $user=User::create(['name'=>$data['name'],'email'=>$data['email'],'phone'=>$data['phone'] ?? null,'role'=>$data['role'],'password'=>Hash::make($data['password']),'is_verified'=>true]); $user->wallet()->create(['available_balance'=>0]); Auth::login($user); return redirect('/'); }
    public function logout(Request $request){ Auth::logout(); $request->session()->invalidate(); $request->session()->regenerateToken(); return redirect('/'); }
}
