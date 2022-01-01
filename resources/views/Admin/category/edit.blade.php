@extends('Admin.master')

@section('content')
<div class="box">
    <h3>Update {{ $category->title}}</h3>
    <form action="{{route("category.update",$category->slug)}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <input type="text"
            name="title"
            placeholder="Titre"
            value="{{ $category->title }}"
            class="form-control">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>
   
    
@endsection