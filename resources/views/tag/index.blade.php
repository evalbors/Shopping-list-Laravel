@extends('layouts_app')

@section('content')
    <div class="container">
        <div class="card-header">
            Tag List<a href="{{Route('tag.create')}}" class="btn btn-secondary">Add tag</a>
        </div>
    </div>

    <ul>
         @foreach ($tags as $tag)
            <li>
                <a href="{{Route('tag.edit', $tag->id)}}">{{$tag->name}}</a>
                <form action="{{Route('tag.destroy',$tag->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="eliminar" class="btn btn-xs btn-danger" name="delete"> 
                </form>
            </li>
         @endforeach
    </ul>
@endsection
