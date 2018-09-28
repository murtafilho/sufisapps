@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table table-striped">

            <tr>
                <th>Origem</th>
                <th>Item</th>
                <th></th>
            </tr>
            @foreach($itens as $item)
                <tr>
                    <td>{{$item->Des_Grp}}</td>
                    <td>{{$item->Des_Item}}</td>
                    <td>
                        <a href="{{route('componente', $item->Idn_Item)}}" class="btn btn-primary btn-block bt">ITEM {{$item->Idn_Item}}</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection