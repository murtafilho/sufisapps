@extends('layouts.app')

@section('content')
    <div class="container">


        <table class="table table-striped">

            <tr>
                <th>Origem</th>
                <th>Tema</th>
                <th>Subgrupo</th>
            </tr>
            @foreach($grupos as $grupo)
                <tr>
                    <td>{{$grupo->Des_Grp}}</td>
                    <td>{{$grupo->Des_Tema}}</td>
                    <td>{{$grupo->Des_Subg_Item}}</td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection