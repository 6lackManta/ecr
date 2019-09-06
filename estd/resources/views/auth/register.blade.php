@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
       <div class="card">
           <div class="card-content">
               <h1 class="title"> Get our membership</h1>
               <form action="{{ route('register') }}" method="POST" role="form">
                {{ csrf_field() }}

                {{-- name --}}
 <div class="field">
     <div for="name" class="label">Name</div>
     <p class="control">
            <input class="input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" required id="name"value="{{ old('email') }}">
                </p>
                @if ($errors->has('name'))
                   <p class="help is-danger">{{ $errors->first('name')}}</p>

                   @endif
               </div>
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
               <button class="button is-primary is-outlined is-fullwidth m-t-30">Signup</button>
            </form>
           </div>
           {{-- End of card Content --}}
        </div>
        {{-- End of card --}}
        <h5 class="has-text-centered">
        <a href="{{ route('login') }}" class="is-muted m-t-20"> Already a member!  </a></h5>
        </div>
</div>
@endsection
