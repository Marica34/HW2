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
@section('script')


<script src="js/randomUser.js" defer="true"></script>
@endsection
@section('sezioni')
 <section>
            
            <div class="persone">

            </div>
        </section>
        @endsection
      