 resources/views/designs/vote.blade.php

@extends('admin.master')

//@section('title', 'Vote for Designs')

@section('content')
    <h1>Vote for Your Favorite Designs</h1>

    <div class="designs-container">
        @foreach($designs as $design)
            <div class="design">
                //<img src="{{ $design->image_url }}" alt="{{ $design->description }}">
                <p>{{ $design->description }}</p>
                <form action="{{ route('design.vote', 'id' => $designId) }}" method="post">
                    @csrf
                    <button type="submit">Vote</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection 
