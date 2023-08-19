@extends('admin.layouts.master_admin')

@section('main_page')
    


<div class="container py-4 ">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-8 ">
            <div class="card my-4 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class=" shadow-info border-radius-lg pt-4 pb-3 px-5 d-flex justify-content-between align-items-center"
                        style="background-color: #17A2B8;">
                        <h6 class="text-white text-capitalize ps-3">Add Slider</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('/slider/store') }}" method="post" enctype="multipart/form-data"
                        class="bg-white p-3">
                        @csrf
    
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control border border-secondary px-2 " name="title" id=""
                                aria-describedby="emailHelpId" placeholder="Slider Name">
                                @error('title')
                                <small id="emailHelpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control border border-secondary px-2 " name="description" id="exampleFormControlTextarea1" rows="6"
                                placeholder="Description"></textarea>
                                @error('description')
                                    
                                <small id="emailHelpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control border border-secondary px-2 " name="image" id=""
                                >
                             @error('image')
                                    
                                <small id="emailHelpId" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <button class="btn btn-outline-info">Add Slider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection