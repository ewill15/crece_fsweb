@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <p>
                <strong>Lista de Posts</strong> 
                <table>
                    <th>
                        <tr>Titulo</tr>
                        <tr>Accion</tr>
                    </th>
                    <tbody>
                        {{$posts}}
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                        </tr>
                        <tr>
                            <a href="{{ route('admin.edit', ['id' => $post->id]) }}">Edit</a>
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
                
            </p>
        </div>
    </div>
@endsection