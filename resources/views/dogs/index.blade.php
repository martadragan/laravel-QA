@extends('layout')

@section('content')

    <div class="container">
    <div class="row">
    @foreach ($dogs as $dog)
    <div class="card" style="width: 18rem;">
        <img src="https://thenypost.files.wordpress.com/2018/10/102318-dogs-color-determine-disesases-life.jpg?quality=90&strip=all&w=618&h=410&crop=1" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> {{$dog->name}} </h5>
          <p class="card-text"> the breed is: {{$dog->breed}} and is: {{$dog->age}} years old </p>
          <a href="/dogs/{{$dog->id}}/edit" class="btn btn-primary">click</a>
        </div>
      </div>
    @endforeach
    </div>
    </div>

@endsection