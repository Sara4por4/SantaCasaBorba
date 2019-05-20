<div class="topic-card row">

   <div class="topic-card__img-wrapper col-sm-6">
      <div class="topic-card__img" style="background-image:url({{ $image }})"></div>
   </div>

   <div class="topic-card__text col-sm-6">
      <div class="topic-card__header">
         <img src="{{$icon}}" alt="">
         <h3 class="title title--small">{{ $title }}</h3>
      </div>
      <div class="topic-card__caption">
         {!! $text !!}
      </div>
   </div>

</div>
