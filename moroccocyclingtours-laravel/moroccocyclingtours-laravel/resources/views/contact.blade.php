@extends('layouts.app')
@section('title', 'Plan your ride')

@section('content')
<section class="section narrow">
    <h1 class="h1-small">Plan your ride</h1>
    <p class="lead">Tell us when you want to ride and how many of you there are. We reply within 24 hours.</p>

    <form method="POST" action="{{ route('contact.store') }}" class="form">
        @csrf
        <div class="hp" aria-hidden="true">
            <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
        </div>

        <label>Your name
            <input name="name" value="{{ old('name') }}" required autocomplete="name">
            @error('name')<span class="error">{{ $message }}</span>@enderror
        </label>

        <label>Email
            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')<span class="error">{{ $message }}</span>@enderror
        </label>

        <label>Tour
            <select name="tour_id">
                <option value="">Not sure yet</option>
                @foreach ($tours as $tour)
                    <option value="{{ $tour->id }}" @selected(old('tour_id', $selected) == $tour->id)>{{ $tour->title }}</option>
                @endforeach
            </select>
        </label>

        <div class="row">
            <label>Group size
                <input type="number" name="group_size" min="1" max="40" value="{{ old('group_size', 2) }}" required>
                @error('group_size')<span class="error">{{ $message }}</span>@enderror
            </label>
            <label>Preferred month
                <input name="preferred_month" value="{{ old('preferred_month') }}" placeholder="April">
            </label>
        </div>

        <label>Anything we should know?
            <textarea name="message" rows="5">{{ old('message') }}</textarea>
        </label>

        <button class="btn" type="submit">Send inquiry</button>
    </form>
</section>
@endsection
