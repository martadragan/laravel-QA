@extends('layout')




@section('content')
    <div class="container">
    <form action="/dogs/{{$dog->id }}" method="post">
            @csrf
            @method('PATCH')
                <div class="form-group">
                        <label for="name">name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="name" value="{{ $dog->name }}">
                      </div>
                      <div class="form-group">
                        <label for="breed">breed</label>
                        <input type="text" class="form-control" name="breed" id="breed" placeholder="breed" value="{{$dog->breed}}">
                      </div>
                      <div class="form-group">
                        <label for="age">age</label>
                        <input type="text" class="form-control" name="age" id="breed" placeholder="age" value="{{$dog->age}}">
                      </div>

                      <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                <form action="/dogs/{{$dog->id}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-3">Delete</button>
                    </form>

        </form>
    </div>
@endsection
