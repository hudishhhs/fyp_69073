@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-auto">

        <div class="card">
                <div class="card-header">{{ __('lessons') }}</div>

                <div class="card-body">
            <div class="list-group">
                @foreach ($lessons as $lesson)
                    <a href="{{ route('lessons.show', $lesson->id) }}" class="list-group-item list-group-item-action{{ $lesson->id == $currentLesson->id ? ' active' : '' }}">
                        {{ $lesson->name }}
                    </a>
                @endforeach
            </div>
            </div>
        </div>

        </div>
        <div class="col-md-9">
        <div class="card">
                <div class="card-header">{{ $currentLesson->name }}</div>

                <div class="card-body">
            <article>{!! nl2br($currentLesson->content) !!}</article>
        </div>

            @isset ($currentLesson -> pre)
            <div class="card-footer">   
            <a href="{{ $currentLesson -> pre }}" class="btn btn-primary float-right">Pre-implementation Result</a>
            <a href="{{ $currentLesson -> post }}" class="btn btn-primary float-right">Post-implementation Result</a>
            @endisset

</div>
</div>
    </div>
@endsection
