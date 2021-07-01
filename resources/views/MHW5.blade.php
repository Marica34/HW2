@extends('layouts.layout2')
@section('tasto')
@if(isset($Persona))
<form method="POST" action="{{ route('logout') }}" class="button">

                            @csrf

                           <button class='tastoLogout' type="submit">Logout</button>

                        </form>
                        @else

<a href="{{ route('login') }}">Login</a>

@endif
@endsection
@section('sezioni')
          <div id="intro5">
              <h1> ENTRA ANCHE TU A FAR PARTE DELLA NOSTRA COMMUNITY</h1>
               <p>DIVENTA SOCIO e potrai accedere a tutti i corsi del nostro palaghiaccio “Ice Land” e a tutte le attività collegate.</br>
                    Vi ricordiamo che all’atto della prima iscrizione stagionale e’ obbligatoria</br>
                    l'autorizzazione di un genitore se si è minorenni.</br>
                    Inoltre al momento dell'iscrizione bisogna scegliere il tipo di abbonamento che si vuole effettuare</p>
            
          </div>

        
        <div class="sezprincipaleM5">
            <h1>
                   I NOSTRI ISTRUTTORI:
                </h1>
        
                
               
                    <p>
                   Emanuele Palilla</br>
                   Luca Rossi </br>
                   Giacomo Verdi</br>
                   Lidia Pellegrini</br>
                   Sofia Moschetto
                </p>
           
            </div>

       <div class="sezsecondariaM5">
           
                 <div id="text1">
                        <h1>PREZZI</h1>
                   <p>Per quanto riguarda gli abbonamenti offriamo sia il classico abbonamento mensile al costo di 50 euro o gli abbonamenti
                       bimestrali e trimestrali.</br>
                       L'abbonamento trimestrale al costo di 130 euro.</br>
                       L'abbonamento bimestrale invece al costo di 80 euro.</br>
                    Inoltre,per coloro i quali non posseggono i pattini, mettiamo a disposizione il noleggio.</br>
                Il costo del noleggio dei nostri pattini varierà a secoda del modello che si intende noleggiare.
                
             </p>
                
                  
               </div>
           

            
           
            </div>
            @endsection
       