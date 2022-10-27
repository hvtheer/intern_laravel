@extends('layouts.layout')
@section('content')
<div class="col-md-10 content">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Send email to user</a>
            <a class="btn btn-primary" type="submit" href="{{ route('user.index') }}">Back</a>
        </nav>
        <form action="#" method="post">
            @csrf
            <div id="choose-users">
                <label for="Name">Name</label>
                <select class="selectpicker form-control" name="email" title="Choose one of the following ...">
                    <option value="all">All users</option>
                    @if (!empty($users))
                        @foreach ($users as $user)
                            <option value="{{ $user['email'] }}">{{ $user['name'] }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div id="choose-attachments">
                <label for="Attachment">Attachment</label>
                <input class="form-control" type="file" id="InputAttachment" name="attachment">
            </div>
            <div class="text-lg-center mt-3">
                <button class="btn btn-primary btn-sm rounded-pill w-25" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection