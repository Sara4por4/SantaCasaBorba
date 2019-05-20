@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner',[
         'image' => 'front/img/photos/photo1.jpg',
         'category' => 'Infância e Juventude',
         'title' => 'Grande Espetáculo Musical - Encontro Internacional de Tunas',
      ])


      <section class="section">

         <!-- intro text without image -->
         @include('front.components.article',[
            'title' => 'GRANDE ESPETÁCULO MUSICAL — ENCONTRO INTERGERACIONAL DE TUNAS "MÚSICA PARA TODAS AS IDADES"',
            'text' => '<p>Realizou-se na tarde do sábado, dia 22 de Abril de 2017, o Encontro Intergeracional de Tunas no Pavilhão Multiusos "Caetano Gazimba" da Aldeia Social da Santa Casa da Misericórdia de Borba, e o auditório esgotou a sua lotação com quase três centenas de pessoas que não quiseram perder este maravilhoso espetáculo!</p>',
         ])
         <!-- intro text without image-->

      </section>
   </div>
</div>


<section class="section section-list">
   <div class="container">

      <div class="section__header section__header--border">
         <h3 class="title">Ver também...</h3>
      </div>

      <div class="section__container">
         @php
           $card = [];
           $cards = [];

           for($i = 0; $i<3; $i++){
             $cards[] = $card;
           };
         @endphp

         <div class="news-list row">

            @foreach($cards as $card)
            <div class="news-list__element no-img col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo3.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
            @endforeach

         </div>
      </div>

      <!-- share -->
      @include('front.components.page-share')
      <!-- share -->

   </div>
</section>
@endsection


@push('scripts')
<script src="{{url('/')}}/front/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script>

   $('.link--white').magnificPopup({
   items: [
      {
        src: 'front/img/photos/photo4.jpg',
        title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo2.jpg',
         title: 'Legenda'
      },
      {
         src: 'front/img/photos/photo1.jpg',
         title: 'Legenda'
      },
   ],
   gallery: {
      enabled: true
   },
   type: 'image' // this is a default type
   });


   $('.link--orange').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
                  '<div class="mfp-close"></div>'+
                  '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

        patterns: {
          youtube: {
            index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

            id: 'v=', // String that splits URL in a two parts, second part should be %id%
            // Or null - full URL will be returned
            // Or a function that should return %id%, for example:
            // id: function(url) { return 'parsed id'; }

            src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
          },
       }
      }

   });


</script>

@endpush
