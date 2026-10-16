@extends('layouts.app')
@section('title', 'Cycling tours')

@section('content')
<section class="section">
    <h1 class="h1-small">Cycling tours in Morocco</h1>
    <div class="tour-grid">
        @forelse ($tours as $tour)
            @include('tours._card', ['tour' => $tour])
        @empty
            <p>No tours are listed yet. <a href="{{ route('contact') }}">Tell us what you have in mind.</a></p>
        @endforelse
    </div>
</section>
@endsection
