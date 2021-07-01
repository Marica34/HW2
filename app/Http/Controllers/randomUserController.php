<?php
use Illuminate\Routing\Controller;
use App\Models\Persona;


class randomUserController extends Controller {
    public function index() {

        $session = session('user_id');

        if ($session !== null){

            $Persona = Persona::where('cf',$session)->first();
           

            return view("MHW3")->with('Persona',$Persona);

        }else{

            return view('MHW3');

        }

            

        

        

    }

}
?>