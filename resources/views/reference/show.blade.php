@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">Reference</div>
        <div class="card-body">

          <span>
            <h5>ID:</h5>
          </span>
          <P>{{$reference->id}}</P>
          <br>

          <span>
            <h5>Reference Name:</h5>
          </span>
          <P>{{$reference->name}}</P>
          <br>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection