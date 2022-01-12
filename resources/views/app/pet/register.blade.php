@extends('layouts.app')
@section('content')
<!-- A bootstrap form to register a new pet -->
<div class="container body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Register a new pet</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pet.create')}}" enctype="multipart/form-data" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        
                    </form>
@endsection