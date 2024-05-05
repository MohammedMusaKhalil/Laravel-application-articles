<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">تعديل المقال</a>

        <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3">حذف المقال</button>
        </form>
    </div>
@endsection
