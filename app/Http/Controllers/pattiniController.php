<?php
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class pattiniController extends Controller {

    
     public function index() {

        $session = session('user_id');

        if ($session !== null){

            $Persona = Persona::where('cf',$session)->first();
           

            return view("MHW2")->with('Persona',$Persona);

        }else{

            return view('home');

        }

            

        

        

    }


}
?>