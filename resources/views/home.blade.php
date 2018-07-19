@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <form action="">
                        <div class="form-group">
                            <input type="text" placeholder="Enter your information" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
