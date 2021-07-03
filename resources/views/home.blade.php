@extends("master")

@section("main-content")

    <h2>Afwezigheden</h2>
    <table>
        <tr>
            <th>uur</th>
            <th>leerkracht</th>
        </tr>
        
        @foreach ($afwezigheden as $afwezigheid)
            <tr>
                <td>{{ $afwezigheid -> uur }}</td>
                <td>{{ $afwezigheid -> leerkracht }}</td>
            </tr>
        @endforeach
        
    </table>
@endsection 