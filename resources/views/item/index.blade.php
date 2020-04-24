@extends('layouts.app') 


@section('content')
    <div class="container">
        <div class="card-header">
            <h1>Shopping List</h1>
            <a href="{{Route('item.create')}}" class="btn btn-primary">Add item</a>
        </div>
    </div>

    <ul>
         @foreach ($items as $item)
            <li>
                <a href="{{Route('item.edit', $item->id)}}">{{$item->name}}</a>
                <form action="{{Route('item.destroy',$item->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="eliminar" class="btn btn-xs btn-danger" name="delete"> 
                </form>
            </li>
         @endforeach
    </ul>
@endsection



