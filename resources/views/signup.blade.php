@extends('layouts.layout1')

   
    @section('script')
        <script src= '{{asset("js/signup.js")}}' defer></script>
       @endsection
  

          @section('registrazione')
            <main class="registrazione">
      
        <section class="main_right2">
            <h1>Presentati</h1>
            
            <form id='signup' name='signup' method='post' enctype="multipart/form-data" autocomplete="off">
            @csrf
                <div class="names">
                    <div class="nome "> 
                        <div><label for='nome'>Nome</label></div>
                        <!-- Se il submit non va a buon fine, il server reindirizza su questa stessa pagina, quindi va ricaricata con 
                            i valori precedentemente inseriti -->
                        <div><input type='text' name='nome' value="{{ old('nome') }}" ></div>
                        <span></span>
                    </div>
                    <div class="cognome">
                        <div><label for='cognome'>Cognome</label></div>
                        <div><input type='text' name='cognome'  value="{{ old('cognome') }}" ></div>
                        <span></span>
                    </div>
                </div>
                <div class="cf @error('cf') errorj @enderror">
                    <div><label for='cf'>Codice fiscale utente</label></div>
                    <div><input type='text' name='cf'  value="{{ old('cf') }}"></div>
                    <span>&nbsp;@error('cf') {{ $message }} @enderror</span>
                </div>
                <div class="email @error('email') errorj @enderror">
                    <div><label for='email'>Email</label></div>
                    <div><input type='text' name='email'  value="{{ old('email') }}"></div>
                    <span>&nbsp;@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="password @error('password') errorj @enderror">
                    <div><label for='password'>Password</label></div>
                    <div><input type='password' name='password' ></div>
                    <span>&nbsp;@error('password') {{ $message }} @enderror</span>
                </div>
                <div class="confirm_password @error('confirm_password') errorj @enderror">
                    <div><label for='confirm_password'>Conferma Password</label></div>
                    <div><input type='password' name='confirm_password'  ></div>
                    <span>&nbsp;@error('confirm_password') {{ $message }} @enderror</span>
                </div>
               
                <div class="allow"> 
                    <div><input type='checkbox' name='allow' value="{{ old('allow') }}" ></div>
                    <div><label for='allow'>Acconsento al furto dei dati personali</label></div>
                </div>
                <div class="submit">
                    <input type='submit' value="Registrati" id='submit' disabled>
                </div>
                 
                
            </form>
            <div class="signup">Hai un account? <a href="{{ route('login') }}">Accedi</a>
        </section>
        </main>
        @endsection
