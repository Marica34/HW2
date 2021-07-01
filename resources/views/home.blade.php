@extends('layouts.layout1')
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
 @section('testoI')
          <div id="intro">
              <h1> BENVENUTI SULLA NOSTRA PAGINA</h1>
               <p>"Il pattinaggio su ghiaccio è teatrale.</br> È artistico. È elegante È estremamente atletico"</p>
            
             
              <h3>-Johnny Weir</h3> 
              
          </div>
@endsection
      @section('sezioni')
        <section id="sezioneprincipale">
            <h1>
                    Perchè scegliere noi?
                </h1>
            <div id="dett">
                
                <div><img src="immagini/palabolo.jpg" alt=""> 
                </div>
                
               <div id=testoP> 
                    <p>
                   Noi trasformiamo il divertimento in una vera e propria passione.
                   I corsi di pattinaggio artistico e sincronizzato sono tenuti da istruttori federali, provenienti dal mondo 
                   dell'agonismo. 
                   Il nostro impianto sportivo, si pone al centro della sua categoria, per dimensioni e tecnologie adoperate nella costruzione.
                   Un ambiente stimolante vi trasporterà in un'attività fisica molto divertente e professionale.
                </p>
            </div>
              
            </div>
        </section>

       <section id="sezionesecondaria">
           <div id="dettagli">
               <div>
                   <div id="imm1"><img src="immagini/patt sincro.jpg" alt="">
                </div>
                   

                   <div id="text1">
                        <h1>PATTINAGGIO SINCRONIZZATO</h1>
                   <p>Il pattinaggio sincronizzato è una specialità del pattinaggio di figura. 
                     Si tratta di uno sport di gruppo in cui la squadra è composta da più atleti ,
                     pattinando in modo sincrono su una base musicale eseguono figure geometriche, sequenze di passi, salti, sollevamenti, intersezioni.</p>
                    </div>
                  
               </div>
           

               <div>
                <div id="imm2">
                    <img src="immagini/patt art.jpg" alt="">
                </div>
                
                <h1>PATTINAGGIO ARTISTICO</h1>
                <p>Il pattinaggio artistico è una specialità sportiva praticata sia nel pattinaggio di figura su ghiaccio,
                     nel pattinaggio a rotelle e anche nel pattinaggio in linea. I pattinatori ballano una coreografia su una canzone</p>
            </div>

           </div>
           
       </section>
    @endsection
