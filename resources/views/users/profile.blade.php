@extends('components.layout')

@section('content')

    {{-- FOrm di aggiornamento Profilo --}}

    <h1 class="text-center py-5">Profile</h1>

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

    {{-- Form di aggiornamento profilo(email) --}}

    <form action="/user/profile-information" method="post">

        @method('PUT')

        @csrf

            <div class="container" style="width: 50%; padding: 10px; box-shadow: 1px 6px 6px rgba(98, 98, 98, 0.4)" >
                <div class="col-12">
                    <h3 class="text-center py-3">Name/Email</h3>
                    <div class="form-group">
                        <div class="form-group" style="padding: 30px 50px 50px 50px;">
                            {{-- Name --}}
                            <label for="name" class="form-label mt-4">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{auth()->user()->name}}">
                            
                            {{-- Email --}}
                            <label for="email" class="form-label mt-4">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{auth()->user()->email}}">

                            <div>
                                {{-- Update Button --}}
                                <button type="submit" class="btn btn-primary mt-4">Update</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

    </form>

    {{-- Form di aggiornamento profilo('password') --}}

    <form action="/user/password" method="post" class="py-5">

        @method('PUT')

        @csrf

            <div class="container" style="width: 50%; padding: 10px; box-shadow: 1px 6px 6px rgba(98, 98, 98, 0.4" >
                <div class="col-12">
                    
                    <h3 class="text-center py-3">Password</h3>
                    <div class="form-group" style="padding: 30px 50px 50px 50px">
                        {{-- Current Password --}}
                        <div class="form-group">
                            <label for="current-pass" class="form-label mt-4">Password</label>
                            <input type="password" class="form-control" id="current-pass" name="password" placeholder="Current Password" autocomplete="off">
                        </div>
                        {{-- New password --}}
                        <div class="form-group">
                            <label for="new-pass" class="form-label mt-4">Password</label>
                            <input type="password" class="form-control" id="new-pass" name="new-password" placeholder="New password" autocomplete="off">
                        </div>
                        {{-- Confirm New Password --}}
                        <div class="form-group">
                            <label for="new-pass-confirm" class="form-label mt-4">Confirm Password</label>
                            <input type="password" class="form-control" id="new-pass-confirm" name="password-confirmation" placeholder="Confirm New Password" autocomplete="off">
                        </div>
                        
                        {{-- Update Butt --}}
                        <div class="py-5">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </div>
                </div>
            </div>

    </form>

@endsection