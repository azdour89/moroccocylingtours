@extends('layouts.app')
@section('title', $tour->title)
@section('description', $tour->summary)

@section('content')
<section class="section narrow">
    <p class="meta">{{ $tour->region }}</p>
    <h1 class="h1-small">{{ $tour->title }}</h1>
    <p class="lead">{{ $tour->summary }}</p>

    <dl class="stats stats-large">
        <div><dt>Days</dt><dd>{{ $tour->days }}</dd></div>
        <div><dt>Distance</dt><dd>{{ number_format($tour->distance_km) }} km</dd></div>
        <div><dt>Climbing</dt><dd>{{ number_format($tour->climbing_m) }} m</dd></div>
        <div><dt>Level</dt><dd>{{ $tour->difficulty }}</dd></div>
    </dl>

    <p>{{ $tour->description }}</p>

    @if ($tour->highlights)
        <h2>Highlights</h2>
        <ul class="plain">
            @foreach ($tour->highlights as $h)
                <li>{{ $h }}</li>
            @endforeach
        </ul>
    @endif

    <p class="price">From €{{ number_format($tour->price_eur) }} per person</p>
    <a class="btn" href="{{ route('contact', ['tour' => $tour->id]) }}">Ask about {{ $tour->title }}</a>
</section>
@endsection
