@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">مرحبًا بك في تطبيق عرض المقالات</h1>
            <p class="lead">هذا هو مشروعي الجديد المبني بواسطة Laravel.</p>
            <hr class="my-4">
            <p>بدأت الآن فرصة بناء تطبيقات ويب رائعة باستخدام Laravel و Bootstrap.</p>
            <a class="btn btn-primary btn-lg" href=__DRI__."/../Articles/show.blade.php" role="button">استكشاف المقالات</a>
        </div>
    </div>
@endsection
