@extends('layouts.welcome')

@section('content')
<div class="top">
     <div class="top-brand">
          <h2 class="top-title" style="font-size:10vw;">
               {{ config('app.name', 'C00KMEMOS') }}
          </h2>
          <a class="button" style="font-size:5vw;" href="{{ url('/portfolio')}}">
               {{ config('app.twoname', 'RECIPE') }}
          </a>
          <a class="button" style="font-size:5vw;" href="{{ url('/profile')}}">
               {{ config('app.thirdname', 'PROFILE') }}
          </a>
     </div>
</div>
<footer>
</footer>
@endsection

