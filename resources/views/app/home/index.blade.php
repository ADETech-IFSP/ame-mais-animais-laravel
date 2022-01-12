@extends('layouts.app')
@section('content')
<!-- Make a boostrap list card of Pets from $pets var with foreach -->
<div class="container body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Pets</h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($pets as $pet)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ $pet->photo }}" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>{{ $pet->name }}</h4>
                                        <p>{{ $pet->description }}</p>
                                        <p>
                                            <a href="{{ route('pet.show', ['id' => $pet->id]) }}" class="btn btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('pet.edit', ['id' => $pet->id]) }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('pet.delete', ['id' => $pet->id]) }}" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection