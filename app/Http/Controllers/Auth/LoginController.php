<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        /*Trae data de Modelo User*/
        $input = $request->all();


        /*validaciones de los campos*/
        $this->validate($request, [
            'username' => ['required','max:50',],
            'password' => ['required','min:3',],

        ]);
        /*compara username y email para poder ingresar de amabas formas*/
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        /*autetifica y compara los campos de la base de datos  con los inputs para ingresar*/
        if(Auth::attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            if(Auth::user()->id_rol == 1)
            {
                        /*al ingresar se cargara una alerta de Bienvenida*/
                    Alert()->success('Panaderia Fe en Jesus' ,'Bienvenido'." ". $input["username"]);
                    /*redirecciona a la vista al ingresar al sistema*/

                    return redirect()->route('home');
            }else
            {
               /*al ingresar se cargara una alerta de Bienvenida*/
               Alert()->success('Panaderia Fe en Jesus' ,'Bienvenido'." ". $input["username"]);
               /*redirecciona a la vista al ingresar al sistema*/
               return redirect()->to('/');
            }

        }else{
            /*Si esta mal el usuario o contraseña se carga una alerta de advertencia*/
            Alert()->error('Error','Contraseña o Usuario Erroneo');
            /*redireccion a el login*/
             return redirect()->route('login');
        }

    }

    public function logout(){
            /*instancia de Auth y metodo logout finalizan sesion*/
            Auth::logout();
            Session::flush();
            Alert()->info('Gracias','Sesion Finalizada.');
            return redirect()->to('/');


    }

}
