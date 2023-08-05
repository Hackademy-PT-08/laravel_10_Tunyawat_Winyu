@extends('components.layout')


@section('content')
    <div class="contaniner" style="display: flex; justify-content: center; align-items: center; margin-top: 5%;">
        <div class="col-12 col-md-4">

            {{-- Output Error in mancanza di dati --}}
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" style="width: 50%; margin-left: 26%; height: 60px;">
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                    </div>
                @endforeach
                
            @endif

            {{-- Includo il form di login per Fortify --}}

            <form action="/register" method="post" enctype="multipart/form-data">

                @csrf
                    <div class="container-form py-5 px-5 mb-5" style="border: 1px solid rgb(129, 129, 129); border-radius: 10px">
                        <h1 class="text-center mb-5">Sign in</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Mario" value="{{old('name')}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                            <div id="passwordHelpBlock" class="form-text">
                                Must be 8-20 characters long.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="pass_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="pass_confirmation" class="form-control" name="password_confirmation">
                        </div>
                        <input type="submit" value="Sign In" class="btn btn-primary">
                    </div>
            </form>
        </div>
    </div>
    
@endsection