<div class="news-card" onclick="location.href='{{$link}}'">

   <div class="news-card__img-wrap">
      <div class="news-card__img" style="background-image:url({{$img}})"></div>
   </div>
   <div class="news-card__caption">
      <h4 class="text text--medium">{{$category}}</h4>
      <a href="{{$link}}" class="news-card__title small-title small-title--light">{{$title}}</a>
   </div>
   <div class="news-card__footer">

      <div class="row">
         <div class="col-xs-6">
            <p class="news-card__date small-text small-text--medium">{{$date}}</p>
         </div>
         <div class="col-xs-6">
            <p class="link link--share">Share <span class="icon icon--facebook"></span></p>
         </div>
      </div>

   </div>
</div>
