@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Edit User</h3>
  <form method="POST" action="/users/{{ $user->id }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Username</label>
      <input type="text" name="username" class="form-control" value="{{ $user->name }}">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>
@endsection