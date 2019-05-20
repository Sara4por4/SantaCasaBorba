@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'blue',
         'image' => 'front/img/photos/photo3.jpg',
         'category' => 'Informações',
         'title' => 'Dispomos de vários tipos de Informação sobre a nossa atividade',
      ])

   </div>
</div>


<section class="section section-list">
   <div class="container">

      <div class="section__header">
         <!-- anchor menu -->
         @include('front.components.tabs',[
            'title'=> 'Filtrar por',
         ])
         <!-- anchor menu -->
      </div>

      <div class="section__container" >

         @php
           $card = [];
           $cards = [];

           for($i = 0; $i<8; $i++){
             $cards[] = $card;
           };
         @endphp

         <div class="tab-content">
            <div id="1" class="tab-pane in active">
               <div class="mag-list row">

                  @foreach($cards as $card)
                  <div class="mag-list__element col-sm-4 col-md-3">
                     @include('front.components.mag-card',[
                        'image'=> 'front/img/photos/photo9.jpg',
                        'nr'=> '23',
                        'date'=> 'Janeiro 2017',
                        'pdf'=> 'front/img/photos/photo9.jpg',
                     ])
                  </div>
                  @endforeach

               </div>
            </div>

            <div id="2" class="tab-pane fade">
               <div class="mag-list row">

                  @foreach($cards as $card)
                  <div class="mag-list__element col-sm-4 col-md-3">
                     @include('front.components.doc-card',[
                     'category'=> 'Plano de atividades',
                     'title'=> 'Nome do Documento',
                     'link'=> '',

                     ])

                  </div>
                  @endforeach

               </div>
            </div>

         </div>

      </div>


      <!-- share -->
      @include('front.components.page-share')
      <!-- share -->

   </div>
</section>

@endsection


@push('scripts')
<script>

      $('.cards-slideshow').slick({
          dots: false,
          arrows: true,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 4,
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
          appendArrows: '.border-arrows',
        prevArrow: '<button class="slick-prev slick-arrow icon icon--arrow-left"></button>',
        nextArrow: '<button class="slick-next slick-arrow icon icon--arrow-right"></button>',
        responsive: [
           {
              breakpoint: 1024,
              settings: {
               slidesToShow: 3,
               slidesToScroll: 3,
               infinite: true,
               dots: true
              }
           },
           {
              breakpoint: 600,
              settings: {
               slidesToShow: 2,
               slidesToScroll: 2
              }
           },
           {
              breakpoint: 480,
              settings: {
               slidesToShow: 1,
               slidesToScroll: 1
              }
           }
         ]
      });
</script>
@endpush
