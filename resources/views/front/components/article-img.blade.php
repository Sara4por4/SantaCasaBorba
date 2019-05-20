<article class="article-base article-base--img row">
   <div class="col-md-4 col-sm-5">
      <figure>
         <img src="{{ $image }}" alt="">
      </figure>
   </div>

   <div class="col-md-8 col-sm-7">
      <div class="article-base__caption">
         <h3 class="article-base__title small-title">{{ $title }}</h3>
         <div class="text editable">
            {!! $text !!}
         </div>
      </div>
   </div>

</article>
