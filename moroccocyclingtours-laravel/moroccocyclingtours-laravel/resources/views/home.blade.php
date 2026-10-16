@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-text">
        <h1>Ride over the Atlas. Finish at the dunes.</h1>
        <p>Small-group cycling tours across Morocco, with a support van, a local guide and a hotel at the end of every day.</p>
        <a class="btn" href="{{ route('tours.index') }}">See the tours</a>
    </div>

    {{-- Elevation profile: the signature element. Edit the points to match a real stage. --}}
    <figure class="profile">
        <svg viewBox="0 0 600 220" role="img" aria-label="Elevation profile of a day crossing the High Atlas, climbing from 900 m to 2,260 m">
            <path d="M0 190 L60 175 L130 150 L200 110 L260 70 L310 38 L340 30 L380 60 L450 120 L520 160 L600 178 L600 220 L0 220 Z" class="profile-fill"/>
            <path d="M0 190 L60 175 L130 150 L200 110 L260 70 L310 38 L340 30 L380 60 L450 120 L520 160 L600 178" class="profile-line"/>
            <circle cx="340" cy="30" r="5" class="profile-dot"/>
        </svg>
        <figcaption>Tizi n'Tichka, 2,260 m. Day 3 of High Atlas Passes.</figcaption>
    </figure>
</section>

<section class="section">
    <h2>Choose your ride</h2>
    <div class="tour-grid">
        @foreach ($tours as $tour)
            @include('tours._card', ['tour' => $tour])
        @endforeach
    </div>
    <p><a href="{{ route('tours.index') }}">All tours</a></p>
</section>

<section class="section split">
    <div>
        <h2>What is included</h2>
        <ul class="plain">
            <li>Quality road or gravel bikes, fitted to you</li>
            <li>Support van and mechanic on every ride</li>
            <li>Riad and hotel nights, breakfast and dinner</li>
            <li>Airport or Marrakech station transfers</li>
        </ul>
    </div>
    <div>
        <h2>When to come</h2>
        <p>March to May and September to November give the best temperatures. Summer rides start at dawn in the south; we adjust routes to the heat.</p>
    </div>
</section>
@endsection
