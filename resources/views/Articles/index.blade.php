<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>قائمة المقالات</h1>

        @foreach($articles as $article)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->content }}</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">عرض التفاصيل</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
