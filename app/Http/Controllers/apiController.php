<?php

use Illuminate\Routing\Controller;
use App\Models\Pattini;
use App\Models\Persona;
use App\Models\Abbonamento;
use App\Models\Preferiti;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class apiController extends Controller {

    public function stampaPattini() {
        return Pattini::all();
    }
    public function stampaAbbonamento($cf) {
        return Persona::with("relazioneAbbonamento")->where("cf",$cf)->get();
    } 
    public function stampa($cf){
      
        return Abbonamento::where('cf',$cf)->get();
    }
    function randomUser() {   
   

        $response = Http::get("https://randomuser.me/api/?nat=es&results=20");
        if($response->failed()) abort(500);

        return $response->body();
    }
    public function aggiornaAbbonamento($cf,$durataAbb){
        $result = DB::select('call P3(?, ?)', array($cf,$durataAbb));
        return Abbonamento::where('cf',$cf)->get();
        
       
    }
    
    public function aggiungiPreferiti($taglia,$modello){
        $cf=session('user_id');
        $pattino= Pattini::where('taglia','=',$taglia)->where('modello','=',$modello)->first();
      
        $preferito= Preferiti::create([
        'cf'=>$cf,
        'codiceP'=>$pattino->codice]);
return $preferito;
    }
    public function preferiti(){
        return Preferiti::all();
    }
}
?>