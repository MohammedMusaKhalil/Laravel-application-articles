<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>تعديل المقال</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">العنوان</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">المحتوى</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

    </div>
@endsection
