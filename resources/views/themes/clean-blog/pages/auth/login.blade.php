<form action="{{ url('/login') }}" method="POST" role="form">
    {{ csrf_field() }}
    <div class="row control-group">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group col-xs-12 floating-label-form-group controls">
            <label for="email">E-Mail Address</label>
            <input type="email" id="email" placeholder="E-mail Address *" class="form-control" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group col-xs-12 floating-label-form-group controls">
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password *">
            @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-xs-12">
            <input type="checkbox" name="remember"> Remember Me
        </div>
    </div>

    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-sign-in"></i> Login
            </button>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </div>
    </div>

    <input hidden name="redirectTo" value="{{URL::previous()}}">
</form>