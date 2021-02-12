@extends('templates.default')
@section('content')

  <h3>Update your profile</h3>

  <div class="row">
    <div class="col-lg-6">
      <form action="{{ route('profile.edit') }}" role="form" method="post" class="form-vertical">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
              <label for="first_name" class="control-label">
                First name
              </label>
              <input type="text" name="first_name" id="first_name" class="form-control" value="{{ Request::old('first_name') ?: Auth::user()->first_name }}">
              @if ($errors->has('first_name'))
                <span class="help-block">{{ $errors->first('first_name') }}</span>
              @endif
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
              <label for="last_name" class="control-label">
                Last name
              </label>
              <input type="text" name="last_name" id="last_name" class="form-control" value="{{ Request::old('last_name') ?: Auth::user()->last_name }}">
              @if ($errors->has('last_name'))
                <span class="help-block">{{ $errors->first('last_name') }}</span>
              @endif
            </div>
          </div>
        </div>
        <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
          <label for="location" class="control-label">
            Location
          </label>
          <input type="text" name="location" id="location" class="form-control" value="{{ Request::old('location') ?: Auth::user()->location }}">
          @if ($errors->has('location'))
            <span class="help-block">{{ $errors->first('location') }}</span>
          @endif
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">Update</button>
        </div>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>

@stop