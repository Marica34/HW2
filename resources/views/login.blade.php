@extends('layouts.layout1')
@section('login')
             <main class="login">
       
        <section class="main_right">
              
                
        
            <h1>Per accedere a maggiori contenuti Accedi o Registrati</h1>
        
            
            <form id='login' name='login' method='post'>
            @csrf<!--serve per prendere il token -->
                <!-- Seleziono il valore di ogni campo sulla base dei valori inviati al server via POST -->
                <div class="cf">
                    <div><label for='cf'>Codice fiscale </label></div>
                    <div><input type='text' name='cf' value="{{ old('cf') }}"></div>
                </div>
                <div class="password">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password' ></div>
                </div>
                <div class="remember">
                    <div><input type='checkbox' name='remember' ></div>
                    <div><label for='remember'>Ricorda l'accesso</label></div>
                </div>
                <div>
                    <input type='submit' value="Accedi">
                </div>
                
            </form>
            <div class="signup">Non hai un account? <a href="{{ route('signup') }}">Iscriviti</a>
      
        </section>
        
        </main>
        @endsection

