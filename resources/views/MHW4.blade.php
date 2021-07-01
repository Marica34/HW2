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
<script>
    let cf = '{{$Persona->cf}}'
</script>
<script src='{{ asset("js/abbonamento.js") }}' defer="true"></script>


@endsection

@section('sezioni')
<section class="inizio">

    <div id="testoIntro">
        <h1>I miei abbonamenti</h1>

    </div>



</section>

<section>

    <div class="corsi">

    </div>
</section>
<section>

    <div class="abbonamento1">

    </div>
</section>

@endsection