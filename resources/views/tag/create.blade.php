@extends('layouts.app') 

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('tag.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Tag</label>
                        <input type="text" name="name" class="form-control" placeholder="write tag here">
                    </div>
                </div>

                <div class="card-footer">
                    <input type="submit" value="Crear" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>