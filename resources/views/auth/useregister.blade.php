@extends('layouts.master_blade')

@section('home_master')
    
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-info h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('backend/assets/img/illustrations/illustration-signup.jpg') }}'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5 mt-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('user.register') }}">
                    @csrf
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Name</label> --}}
                      <input type="text" name="name" placeholder="Username" class="form-control" :value="old('name')" required autofocus autocomplete="name" >
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Email</label> --}}
                      <input type="email" name="email" placeholder="Email" class="form-control"  :value="old('email')" required autocomplete="username">
                    </div>
                    @error('email')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">City</label> --}}
                      <input type="text" name="city" placeholder="City" class="form-control"  :value="old('city')" required autocomplete="city">
                    </div>
                    @error('city')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Contact</label> --}}
                      <input type="number" name="contact" placeholder="Contacts" class="form-control"  :value="old('contact')" required autocomplete="contact">
                    </div>
                    @error('contact')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="input-group input-group-outline mb-3">
                      {{-- <label class="form-label">Password</label> --}}
                      <input type="password" name="password" placeholder="Password" class="form-control"  required autocomplete="new-password">
                    </div>
                    @error('password')
                          <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-lg bg-gradient-info btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="{{url('user/login')}}" class="text-info text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 
  
  @endsection