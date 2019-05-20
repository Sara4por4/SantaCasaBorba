@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'blue',
         'image' => 'front/img/photos/photo1.jpg',
         'category' => 'Comunicação',
         'title' => 'Promovemos o bem-estar social da população do Município',
      ])
   </div>
</div>


<section class="section section-list">
   <div class="container">

      <div class="section__header">
         <!-- anchor menu -->
         @include('front.components.filters',[
            'title'=> 'Pesquisar por',
         ])
         <!-- anchor menu -->
      </div>

      <div class="section__container">

         @php
           $card = [];
           $cards = [];

           for($i = 0; $i<8; $i++){
             $cards[] = $card;
           };
         @endphp

         <div class="news-list row">

            @foreach($cards as $card)
            <div class="news-list__element col-sm-4">
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
