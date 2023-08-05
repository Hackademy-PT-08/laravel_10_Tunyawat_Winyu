@extends('components.layout')

@section('content')


    <div class="container">
        <div class="col-12" style="display: flex; justify-conten: center; align-items: center; flex-direction: column;">
            <h1 class="text'center">
                Verification Email
            </h1>
            <p class="text-center">For your Verification email we have sent you an email on your mailbox</p>
            <form action="/email/verification-notification" method="post">
                @csrf
                    <button type="submit">Resend the mail</button>
            </form>
        </div>
    </div>


@endsection