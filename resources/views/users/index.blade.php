@extends('layouts.app')

@section('content')
<div class="container">
  <h3>Daftar User</h3>
  <table class="table">
    <tr>
      <th>Username</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td><a href="/users/{{ $user->id }}/edit" class="btn btn-sm btn-warning">Edit</a></td>
    </tr>
    @endforeach
  </table>
</div>
@endsection