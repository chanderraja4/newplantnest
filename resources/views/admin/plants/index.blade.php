@extends('admin.layouts.master_admin')

@section('main_page')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class=" shadow-info border-radius-lg pt-4 pb-3 px-5 d-flex justify-content-between align-items-center"
                            style="background-color: #17A2B8;">
                            <h6 class="text-white text-capitalize ps-3">Plants table</h6>
                            <a href="{{ url('plants/addpage') }}" class="btn btn-info ps-3">Add Plants</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Plants</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            About</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Price</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plants as $plant)
                                        
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset($plant->plant_image) }}"
                                                        class="avatar avatar-lg me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $plant->plant_name }}</h6>
                                                    {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $plant->description }}</td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $plant->user->category_name }}</p>
                                            {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $plant->price }}</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="{{ url('/plants/all/edit/' . $plant->id) }}" class="text-light px-2 py-1 ms-2 font-weight-bold text-xs bg-info rounded-2"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="{{ url('plants/all/delete/' . $plant->id) }}" class="text-light px-2 py-1 ms-2 font-weight-bold text-xs bg-primary rounded-2"
                                                data-toggle="tooltip" data-original-title="Edit user">
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
