@extends('admin.master')
@section('countData')
    <div class="row" style="margin-top: 10px">
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0 text-center"><i class="material-icons">face</i>{{ count($users)}}
                        </h2>
                        <h6 class="text-muted text-center">Total Registered Users</h6></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0 text-center">
                            <i class="material-icons">photo_library</i>{{ count($images)}}</h2>
                        <h6 class="text-muted text-center">Total Upload Product</h6></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0 text-center">
                            <i class="material-icons">card_giftcard</i>{{ count($images->where('section_id','==',1)) }}
                        </h2>
                        <h6 class="text-muted text-center">Special Offers</h6></div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-3">
            <div class="card card-body">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col p-r-0 align-self-center">
                        <h2 class="font-light m-b-0 text-center">
                            <i class="material-icons">local_offer</i>{{ count($images->where('section_id','==',2)) }}
                        </h2>
                        <h6 class="text-muted text-center">Basic Offers</h6></div>
                </div>
            </div>
        </div>
    </div>
@endsection