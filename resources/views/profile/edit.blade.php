@extends('backend.layout.master')
@section('title', 'Profile')

@section('main_content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile Information</h3>
                        </div>
                        <div class="card-body">
                            <!-- Include the profile information form component here -->
                            @include('\profile\partials\update-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Update Password</h3>
                        </div>
                        <div class="card-body">
                            <!-- Include the profile information form component here -->
                            @include('\profile\partials\update-password-form')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Delete Account</h3>
                        </div>
                        <div class="card-body">
                            <!-- Include the profile information form component here -->
                            @include('\profile\partials\delete-user-form')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection
