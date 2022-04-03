@extends('layouts/main')
@section('content')
  @if ($url == null)
    @foreach($series as $serie)
        <div class="grid-x align-center">
            <div class="cell medium-8">
                <div class="blog-post">
                    <h3><a href=" {{ url('series/'.$serie->url.'/') }} ">{{ $serie->title }}</a></h3>  
                    <h3><small>{{ substr($serie->date, 0, 10) }}</small></h3>
                    <!--<img class="thumbnail" src="../media/images/AAA" width="100%">-->
                    <p><strong>{{ $serie->content }}</strong></p>
                    <div class="callout">
                        <ul class="menu simple">
                            <li><a href="#">Author: {{ $serie->name }}</a></li>
                            <li><a href="#">Comments: 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
        <span>
        {{ $series->links() }}
        </span>
  @else
        <div class="grid-x align-center">
            <div class="cell medium-8">
                <div class="blog-post">
                    <h3><a href=" {{ route('serie', $serie->url) }} ">{{ $serie->title }}</a></h3>  
                    <h3><small>{{ substr($serie->date, 0, 10) }}</small></h3>
                    <img class="thumbnail" src="../media/images/{{$serie->image}}" width="100%">
                    <p><strong>{{ $serie->content }}</strong></p>
                    <div class="callout">
                        <ul class="menu simple">
                            <li><a href="#">Author: {{ $serie->name }}</a></li>
                            <li><a href="#">Comments: 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  @endif   

@endsection