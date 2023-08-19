@extends('layouts.master_blade')

@section('home_master')

<section class="bg-light">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-2">{{ $user->user_name }}</h5>
              <p class="text-muted mb-1">Full Stack Developer</p>
              <div class="d-flex justify-content-center mb-2">
                <button type="button" class="btn  mx-1  profilebtn">Follow</button>
                <button type="button" class="btn  messagebtn ">Message</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <input type="text" value="{{ $user->user_name }}" class="border-0">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                    <input type="email" value="{{ $user->email }}" class="border-0">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">City</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" value="{{ $user->city }}" class="border-0 w-75">
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                    <input type="number" value="{{ $user->contact }}" class="border-0 w-75">
                </div>
              </div>
              <hr>
              <div class="up_de_btn mt-4">
              <a href=""><button class="btn  updatebtn">Update</button></a> 
              <a href=""><button class="btn btn-outline-danger">Delete Account</button></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection