<div class="intro-card" data-aos="fade-up" onclick="location.href='{{ $link }}'">
   <img src="{{$img}}" alt="">
   <div class="intro-card__caption">
      <a href="{{$link}}" class="intro-card__title small-title small-title--primary">{{$title}}</a>
      <div class="text editable">
         {!! $text !!}
      </div>
      <div class="intro-card__footer">
         <p class="text text--caps">{{ $number }} instituições</p>
      </div>
   </div>
</div>
