@extends ('layouts.layout')
@section ('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create a User</a>
            <a class="btn btn-primary" type="submit" href="{{ route('index') }}">Back</a>
        </nav>
        <form action="{{ route('store') }}" method="post">
            @csrf
            @if (session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="InputName" name="name" value="{{ old('name')}}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputEmail">Email</label>
                <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" value="{{ old('email')}}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" value="{{ old('password')}}">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 ">
                        <label for="InputPasswordConfirm">Password Confirm</label>
                        <input type="password" class="form-control" id="InputPasswordConfirm" name="password_confirm" value="{{ old('password_confirm')}}">
                        @error('password_confirm')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="InputAddress">Address</label>
                <input type="text" class="form-control" id="InputAddress" name="address" value="{{ old('address')}}">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="InputFacebook">Facebook link</label>
                <input type="text" class="form-control" id="facebook" placeholder="https://example.com" name="facebook" value="{{ old('facebook') }}">
                @error('facebook')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="InputYoutube">Youtube</label>
                <input type="text" class="form-control" id="youtube" placeholder="https://example.com" name="youtube" value="{{ old('youtube') }}">
                @error('youtube')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="FormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="btn-add text-lg-center mt-3">
                <button type="submit" class="btn btn-primary btn-sm rounded-pill w-25">Save</button>
                <button type="submit" class="btn btn-secondary btn-sm rounded-pill w-25">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection