@extends('layouts.master')

@section('content')

<div class="col-lg-8 col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="custom-registration">
            <h4 class="title">Librarian Profile</h4>            
        </div>
        <div class="card-content">
					@foreach($admins as $admin)
            <form class="login100-form validate-form" method="POST" action="/adminUpdate">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                       <div class="wrap-input100 validate-input form-group{{ $errors->has('name') ? ' has-error' : '' }}">
												<label class="control-label">Name</label>
												<input id="name" type="text" class="input100 form-control" name="name" value="{{ $admin->name }}" required autofocus>
												@if ($errors->has('name'))
													<span class="help-block">
														<strong>{{ $errors->first('name') }}</strong>
													</span>
												@endif 
											</div>
                    </div>
                </div>
								<div class="row">
                    <div class="col-md-12">
                      <div class="wrap-input100 validate-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
												<label class="control-label">Email</label>
												<input id="email" type="email" class="input100 form-control" name="email" value="{{ $admin->email }}" autofocus>
												@if ($errors->has('email'))
												<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
											</div>
                    </div>
                </div>
                <div class="row">
									<div class="col-md-6">
										<div class="wrap-input100 validate-input form-group{{ $errors->has('password') ? ' has-error' : '' }}" data-validate="Enter password">
											<label class="control-label">Password</label>
											<input id="password" type="password" class="input100 form-control" name="password" required>
											@if ($errors->has('password'))
												<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-md-6">
										<div class="wrap-input100 validate-input form-group" data-validate="Enter password">
											<label class="control-label">Confirm Password</label>
											<input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required>
										</div>
									</div>
                </div>
                @include('layouts.errors')
                <p class="error text-center alert alert-danger d-none"></p>
                <button class="btn btn-primary pull-right" type="submit">Update</button>
                <div class="clearfix"></div>
            </form>
					@endforeach
        </div>
    </div>

		
</div>

{{-- <div class="limiter">
	<div class="container-login100">
    <div class="wrap-login100" >
			@foreach($admins as $admin)
			<form class="login100-form validate-form" method="POST" action="/adminUpdate">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-26">
						Admin Profile
					</span>
					<div class="wrap-input100 validate-input form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<input id="name" type="text" class="input100" name="name" value="{{ $admin->name }}" required autofocus>
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					@if ($errors->has('name'))
							<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
							</span>
					@endif
					<div class="wrap-input100 validate-input form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<input id="email" type="email" class="input100" name="email" value="{{ $admin->email }}" required autofocus>
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					@if ($errors->has('email'))
						<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
					<div class="wrap-input100 validate-input form-group{{ $errors->has('password') ? ' has-error' : '' }}" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input id="password" type="password" class="input100" name="password" required>
						@if ($errors->has('password'))
							<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>
					<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn">
										Update
								</button>
							</div>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="{{ url('/dashboard') }}" class="back_to_dash login100-form-btn">
								Back
							</a>
						</div>
					</div>
			</form>
			@endforeach
		</div>
	</div>
</div>	

<div id="dropDownSelect1"></div> --}}

@endsection 
