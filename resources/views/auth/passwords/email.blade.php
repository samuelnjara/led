@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->

<body class="sign-in-up">
   <section>
     <div id="page-wrapper" class="sign-in-wrapper">
       <div class="graphs">
         <div class="sign-in-form">
           <div class="sign-in-form-top">
             <p><span>{{env('APP_NAME','ledamcha')}} </span> <a href="#"> password reset</a></p>
           </div>
           <div class="signin">

             <form method="POST" action="{{ route('password.email') }}">
                 @csrf
             <div class="row">

               <div class=" form-group @error('email') has-error @enderror">
         				<div class="col-md-10">
         					<div class="input-group input-icon right in-grp1">
         						<span class="input-group-addon">
         							<i class="fa fa-envelope-o"></i>
         						</span>
         						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email" autofocus>
         					</div>
         				</div>
         				<div class="col-sm-2">

                  @error('email')
                    <p class="help-block">{{ $message }}</p>
                  @enderror

         				</div>

         			</div>
              <div class="clearfix"> </div>
             </div>



             <input class="mt-2" type="submit" value="Send Password Reset Link">


           </form>
           </div>

         </div>
       </div>
     </div>

@endsection