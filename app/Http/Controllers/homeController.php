

<?php
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class homeController extends Controller {
    public function home() {

        $session = session('user_id');

        if ($session !== null){

            $Persona = Persona::where('cf',$session)->first();
           

            return view("home")->with('Persona',$Persona);

        }else{

            return view('home');

        }

            

        

        

    }

}
?>
