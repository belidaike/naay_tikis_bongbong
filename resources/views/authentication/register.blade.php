@extends('base')

@section('content')

<div id="register-box" class="container col-md-6 offset-md-3 card mt-5">
  <h1 class="text-center text-dark">Register </h1>

  <form action="{{ '/register' }}" method="POST">
  {{ csrf_field() }}

  <div class="form-group text-dark">
    <label for="fname">First Name</label>
    <input type="fname" name="fname" id="fname" class="form-control">
    @error('fname')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group text-dark">
    <label for="lname">Last Name</label>
    <input type="lname" name="lname" id="lname" class="form-control">
    @error('lname')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group text-dark">
    <label for="username">Username</label>
    <input type="username" name="username" id="username" class="form-control">
    @error('username')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group text-dark">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control">
    @error('email')
      <p class="text-danger">{{ $message }}</p>
    @enderror
  </div>
  <div class="form-group text-dark">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
    @error('password')
      <p class="text-danger">{{ $message }}</p>
      
    @enderror
  </div>
  <div class="form-group text-dark">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" >
    @error('password_confirmation')
      <p class="text-danger">{{ $message }}</p>
      
    @enderror
  </div>
  <div class="d-flex">
    <div class="flex-grow-1">
      <a id="sign-in-link" href="{{ '/' }}" class="href">Already have an account?</a>
    </div>
    <button class="btn px-5 text-dark" type="submit">Sign up</button>
  </div>
  </form>
</div>


<style scoped>

  .d-flex{
      margin: 20px;
  }

  .container{
    margin-bottom: 30px;
  }

  #register-box{
    background-color: #F6FBF4;
    color: white;
  }


.btn{
  background-color: #F5DF99;
}
.btn:hover {
    background-color: #4B8673;
    color: white;
  }

</style>

@endsection
