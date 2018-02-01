@extends('layouts/app')<!--Extend from the app layout-->
@section('content')<!--Which section we need to extend-->

<div class="col-sm-7 col-sm-offset-2">
    <div class="panel panel-primary">
        <div class="panel-heading">Photos Gallery</div>
    <div class="panel-body">
        <ul class="list-group">
  <!--Tested imges with laravel       
         <img class="img-responsive" src="/images/1.jpg"> Store the images in public folder

    -->
         @foreach($photos as $photo)
        <li class="list-group-item">{{$photo->id}}</li>
        <li class="list-group-item">{{$photo->title}}</li>
        <li class="list-group-item">{{$photo->description}}</li>
        <img class="img-responsive" src="{{$photo->source}}"/>
        <br/>
            @endforeach
        </ul> 
        </ul>
             
    </div>
</div>
<hr/>
<footer class="footer col-sm-6 col-sm-offset-3">
        <p style="text-align:center">© 2018 Company, Inc.</p>
</footer>
</div>
@endsection()