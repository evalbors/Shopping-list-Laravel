@extends('layouts.app') 

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('tag.update', $item->id)}}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" name="name" class="form-control" value="{{$tag->name}}">
                    </div>
                </div>

                @method('put')
                <div class="card-footer">
                    <input type="submit" value="Editar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
 @endsection