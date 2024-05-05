<?php
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>إنشاء مقال جديد</h1>

        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">العنوان</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">المحتوى</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">إنشاء</button>
        </form>

    </div>
@endsection
