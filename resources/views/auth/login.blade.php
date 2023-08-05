@extends('components.layout')


@section('content')

    <div class="contaniner" style="display: flex; justify-content: center; align-items: center; margin-top: 8%;">
        <div class="col-12 col-md-4">

            {{-- Output Error in mancanza di dati --}}
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" style="width: 60%; margin-left: 26%; height: 80px;">
                        <ul>
                            <li>{{$error}}</li>
                        </ul>
                    </div>
                @endforeach
                
            @endif

            {{-- Includo il form di login per Fortify --}}

            <form action="/login" method="post" enctype="multipart/form-data">

                @csrf
                    <div class="container-form py-5 px-5" style="border: 1px solid rgb(129, 129, 129); border-radius: 10px">
                        <h1 class="text-center mb-5">Login</h1>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{old('email')}}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
            </form>
        </div>
    </div>
    
@endsection