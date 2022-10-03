@extends('base')

@section('content')

<div class="p-5">
  <h1 class="text-center text-white">Your Activity</h1><br><br>
  <div class="d-grid gap-2 d-md-flex">
  </div>
  <table class="table text-white text-center">
    <thead>
      <tr>
        <th>Timestamp</th>
        <th>Log Entry</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($logs as $log)
          <tr>
            <td>{{ $log->created_at }}</td>
            <td>{{ $log->log_entry }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>

<style>
  table, th, td, tr{
    border: 2px solid blue;
  }
</style>
@endsection