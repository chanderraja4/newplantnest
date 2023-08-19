@extends('admin.layouts.master_admin')

@section('main_page')
    
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class=" shadow-info border-radius-lg pt-4 pb-3 px-5 d-flex justify-content-between align-items-center" style="background-color: #17A2B8;">
              <h6 class="text-white text-capitalize ps-3">Slider table</h6>
              <a href="{{ url('addslider') }}" class="btn btn-info ps-3">Add Slider</a>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sliders as $slider)
                      
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ asset($slider->image) }}" class="avatar avatar-xl me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $slider->title }}</h6>
                          {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                        </div>
                      </div>
                    </td>
                    <td>{{ $slider->description }}</td>
                    <td class="align-middle">
                      <a href="{{url('/slider/edit/'.$slider->id)}}" class="text-light px-2 py-1 ms-2 font-weight-bold text-xs bg-info rounded-2" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                      <a href="{{url('/slider/delete/'.$slider->id)}}" class="text-light px-2 py-1 ms-2 font-weight-bold text-xs bg-primary rounded-2" data-toggle="tooltip" data-original-title="Edit user">
                        Delete
                      </a>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection