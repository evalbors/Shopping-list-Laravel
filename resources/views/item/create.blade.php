@extends('layouts.app') 

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('item.store')}}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" name="name" class="form-control" placeholder="write item here">
                    </div>
                </div>

                <label>Priority</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="priority" id="exampleRadios1" value="1">
                    <label class="form-check-label" for="priority">
                        Importart
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="priority" id="exampleRadios1" value="2">
                    <label class="form-check-label" for="priority">
                        No worries really
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="priority" id="exampleRadios1" value="3">
                    <label class="form-check-label" for="priority">
                        Not neccesary & you know
                    </label>
                </div>

                @foreach($tags as $tag)
                    <input type='checkbox' name='tags[{{$tag->id}}]' value='{{$tag->id}}'><label>{{$tag->name}}</label>
                @endforeach


                <a href="{{Route('tag.create')}}" class="">Add tag</a>

                <div class="card-footer">
                    <input type="submit" value="Crear" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
