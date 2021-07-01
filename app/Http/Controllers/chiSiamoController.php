<?php
use Illuminate\Routing\Controller;
use App\Models\Persona;


class chiSiamoController extends Controller {
    public function index() {

        $session = session('user_id');

        if ($session !== null){

            $Persona = Persona::where('cf',$session)->first();
           

            return view("MHW5")->with('Persona',$Persona);

        }else{

            return view('MHW5');

        }

            

        

        

    }

}
?>