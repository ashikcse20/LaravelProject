@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
                <div class="card-body">
                    <!-- @include('layouts.flash') -->
                    <x-alert />
                    <p>Here is response from image upload</p>
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="fname">First name:</label><br>
                        <input type="file" name="imagefield"><br><br>
                        <input type="submit" value="Upload">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection