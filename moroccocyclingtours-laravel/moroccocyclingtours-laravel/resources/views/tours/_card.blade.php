<article class="card">
    <h3><a href="{{ route('tours.show', $tour) }}">{{ $tour->title }}</a></h3>
    <p class="meta">{{ $tour->region }}</p>
    <p>{{ $tour->summary }}</p>
    <dl class="stats">
        <div><dt>Days</dt><dd>{{ $tour->days }}</dd></div>
        <div><dt>Distance</dt><dd>{{ number_format($tour->distance_km) }} km</dd></div>
        <div><dt>Climbing</dt><dd>{{ number_format($tour->climbing_m) }} m</dd></div>
        <div><dt>Level</dt><dd>{{ $tour->difficulty }}</dd></div>
    </dl>
    <p class="price">From €{{ number_format($tour->price_eur) }} per person</p>
</article>
