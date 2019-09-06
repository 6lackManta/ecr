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
               <h1 class="title"> Forgot Password??</h1>
               <form action="{{ route('password.email') }}" method="POST" role="form">
                {{ csrf_field() }}
                <div class="field">
                   <div for="email" class="label">Email Address</div>
                   <p class="control">
                       <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="text" name="email" id="email" placeholder="yokohama@email.com" value="{{ old('email') }}">
                   </p>
                   @if ($errors->has('email'))
                   <p class="help is-danger">{{ $errors->first('email')}}</p>

                   @endif
               </div>


               <button class="button is-primary is-outlined is-fullwidth m-t-30">Get reset link!</button>
            </form>
           </div>
           {{-- End of card Content --}}
        </div>
        {{-- End of card --}}
        <h5 class="has-text-centered">
        <a href="{{ route('login') }}" class="is-muted m-t-20" > <i class="fa fa-caret-left"> Back to Login </i></a></h5>
        </div>
</div>
@endsection
