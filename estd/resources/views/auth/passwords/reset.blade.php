@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="notification is-success">
    {{ session('status')  }}
</div>
@endif
<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
       <div class="card">
           <div class="card-content">
               <h1 class="title">Reset Your Password </h1>
               <form action="{{ route('register') }}" method="POST" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
               {{-- Email --}}
               <div class="field">
                    <div for="email" class="label">Email Address</div>
                    <p class="control">
                            <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" required id="email" placeholder="yokohama@email.com" value="{{ old('email') }}">
                </p>
                @if ($errors->has('email'))
                   <p class="help is-danger">{{ $errors->first('email')}}</p>

                   @endif
               </div>
               {{-- /password --}}
               <div class="columns">
               <div class="column">
               <div class="field">
                   <div for="password" class="label">Password</div>
                   <p class="control">
                       <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" required id="password" placeholder="**************">
                   </p>

                   @if ($errors->has('password'))
                   <p class="help is-danger">{{ $errors->first('password')}}</p>

                   @endif
                    </div>
                </div>

               {{-- Confirm Password --}}

                    <div class="column">
               <div class="field">
                   <div for="password" class="label">Confirm Password</div>
                   <p class="control">
                       <input type="password" class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" name="password" required id="password" placeholder="**************">
                   </p>

                   @if ($errors->has('password'))
                   <p class="help is-danger">{{ $errors->first('password')}}</p>

                   @endif
               </div>
               </div>
               </div>
               <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
            </form>
           </div>
           {{-- End of card Content --}}
        </div>
        {{-- End of card --}}
        </div>
</div>
@endsection
