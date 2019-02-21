@extends('layout')


@section('content')
    <div class="container">

        <h1>Witam witam </h1>
        <h3>add a new dog</h3>

        <form method="POST" action="/dogs">
            @csrf
            {{-- token for submitting form and sequrity --}}
                <div class="form-group">
                  <label for="name">name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="breed">breed</label>
                  <input type="text" class="form-control" name="breed" id="breed" placeholder="breed">
                </div>
                <div class="form-group">
                  <label for="age">age</label>
                  <input type="text" class="form-control" name="age" id="breed" placeholder="breed">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
    </div>
@endsection