@extends('layouts.front')
@section('title', 'COOKMEMOS-レシピ一覧')

@section('content')
    <div class="container">
        <div class="titles text-left h1 col-md-10 mx-auto">RECIPE</div>
        {{--
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ secure_asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{ Str::limit($headline->dish_name, 30) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ Str::limit($headline->material, 400) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ Str::limit($headline->recipe, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
         --}}
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date" style="color:black">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ Str::limit($post->dish_name, 80) }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->material, 1000) }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->recipe, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ secure_asset('storage/image/'.
                                    $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
