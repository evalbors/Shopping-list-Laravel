@extends('layouts.app') 


@section('content')

    <div class="container">
        <div class="card-header">
            Shopping List <a href="{{Route('item.create')}}" class="btn btn-secondary">Add item</a>
        </div>
    </div>

    <ul>
         @foreach ($items as $item)
            <li>
                <a href="{{Route('item.edit',$item->id)}}">{{$item->name}}</a>
                <form action="{{Route('item.destroy',$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <imput type="submit" value="eliminar" class="btn btn-xs btn-danger">
                </form>
            </li>
         @endforeach
    </ul>
@endsection



