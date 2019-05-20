<div class="agenda-card flip-card {{$class}}">
   <div class="flip-card-inner">
      <div class="flip-card-front">
         <h4 class="agenda-card__category small-text">{{$subtitle}}</h4>
         <h3 class="subtitle subtitle--light">{{$date}}</br>{{$week}}</h3>
         <h2 class="agenda-card__title text text--caps">{{$title}}</h2>
      </div>

      <div class="flip-card-back">
         <div class="row">
            <div class="col-xs-4">
               <h4 class="small-text">Data:</h4>
            </div>
            <div class="col-xs-8">
               <h4 class="small-text small-text--medium">{{$date}}</h4>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-4">
               <h4 class="small-text">Hora:</h4>
            </div>
            <div class="col-xs-8">
               <h4 class="small-text small-text--medium">{{$time}}</h4>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-4">
               <h4 class="small-text">Local:</h4>
            </div>
            <div class="col-xs-8">
               <h4 class="small-text small-text--medium">{{$address}}</h4>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-4">
               <h4 class="small-text">Info:</h4>
            </div>
            <div class="col-xs-8">
               <h4 class="small-text small-text--medium">{{$info}}</h4>
            </div>
         </div>
         <a href="{{$link}}" class="link" download>ver programa <span class="icon icon--doc"></span></a>
      </div>
   </div>
</div>
