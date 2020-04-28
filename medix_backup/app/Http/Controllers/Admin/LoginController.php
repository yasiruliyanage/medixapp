<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
      protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        foreach ($this->guard()->user()->role  as  $role) {

            if($role->name == 'admin'){
                return redirect('admin/home');

            }elseif($role->name == 'editor'){
                return redirect('admin/editor');
                
            }elseif($role->name == 'provincial_agent'){
                return redirect('provinceagent/dashboard');
                
            }elseif($role->name == 'district_agent'){
                return redirect('districtagent/dashboard');
                
            }elseif($role->name == 'zonal_agent'){
                return redirect('zonalagent/dashboard');
                
            }elseif($role->name == 'division_agent'){
                return redirect('divisionagent/dashboard');
                
            }elseif($role->name == 'school_agent'){
                return redirect('schoolagent/dashboard');
                
            }elseif($role->name == 'super_admin'){
                return redirect('superadmin/dashboard');
                
            }
        }
    }
       /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }
     /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
