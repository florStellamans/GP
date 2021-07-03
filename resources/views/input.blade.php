@extends("master")

@section("main-content")

    <h2>wie is er afwezig</h2>

    <!-- todo
    - vervanging?
    - taak?
    - vroeger naar huis?
    -->

    <form method="post" action=""> 
        @csrf    
        <select name="uur" id="uur">
            @foreach ($uren as $uur)
                <option value="{{ $uur -> id }}">{{ $uur -> uur }}</option>
            @endforeach
        </select>

        <select name="leerkracht" id="leerkracht">
            @foreach ($leerkrachten as $leerkracht)
                <option value="{{ $leerkracht -> name }}">{{ $leerkracht -> name }}</option>
            @endforeach
        </select>

        <input type="submit" name="add" value="add">
    </form>

    <form action="">
    
    
    </form>
    
@endsection