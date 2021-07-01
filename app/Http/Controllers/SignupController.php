<?php

use Illuminate\Routing\Controller;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller {


    protected function create()
    {
        $request = request();
       

        if($this->countErrors($request) === 0) {
            $newPersona =  Persona::create([
            'cf' => $request['cf'],
            'password' => Hash::make($request['password']),
            'nome' => $request['nome'],
            'cognome' => $request['cognome'],
            'email' => $request['email'],
    
            ]);
            if ($newPersona) {
                Session::put('user_id', $newPersona->cf);
                return redirect('/home');
            } 
            else {
                return redirect('signup')->withInput();
            }
        }
      else 
        return redirect('signup')->withInput();
        
    }

    private function countErrors($data) {
        $error = array();
        
        # CF
        // Controlla che il codice fiscale rispetti il pattern specificato
        if(!preg_match('/^[a-zA-Z0-9_]{1,16}$/', $data['cf'])) {
            $error[] = "codice fiscale non valido";
        } else {
            $cf = Persona::where('cf', $data['cf'])->first();
            if ($cf !== null) {
                $error[] = "codice fiscale già utilizzato";
            }
        }
        # PASSWORD
        if (strlen($data["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 
        # CONFERMA PASSWORD
        if (strcmp($data["password"], $data["confirm_password"]) != 0) {
            $error[] = "Le password non coincidono";
        }
        # EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = Persona::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        return count($error);
    }

    public function checkUsername($query) {
        $exist = Persona::where('cf', $query)->exists();
        return ['exists' => $exist];
    }

    public function checkEmail($query) {
        $exist = Persona::where('email', $query)->exists();
        return ['exists' => $exist];
    }

    public function index() {
        return view('signup');
    } 

}
?>