@extends('layouts.app')

@section('content')
    <div class="container">

            <table class="table table-striped">

                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                </tr>
                @endforeach
            </table>

    </div>
@endsection