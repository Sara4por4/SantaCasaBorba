@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'blue',
         'image' => 'front/img/photos/photo5.jpg',
         'category' => 'Ação Social',
         'title' => 'Promovemos o bem-estar social da população do Município',
      ])

      <section class="section">

         <!-- intro text -->
         @include('front.components.article',[
            'title' => 'A Ação Social constitui uma área de intervenção estratégica prioritária do Município de Borba, na medida em que existe a consciência que é importante tomar medidas que promovam o bem-estar dos estratos sociais mais desfavorecidos, como forma de promover uma maior elevação e coesão social.',
            'text' => '<p>O objetivo prioritário é a promoção do bem-estar biopsicossocial e económico dos cidadãos residentes no Município, através da utilização de técnicas de intervenção social que contribuam para organizar, disponibilizar e mobilizar serviços e recursos que promovam o desenvolvimento e capacitação dos indivíduos, em prol de uma sociedade alicerçada nos valores da dignidade, justiça, solidariedade e igualdade. O trabalho social assenta numa perspetiva pró-ativa alicerçada nos princípios orientadores do atual “Regulamento municipal de apoios no âmbito da Ação Social”.</p>',
         ])
         <!-- intro text -->

      </section>
   </div>
</div>


<section class="section section-list">
   <div class="container">

      <div class="section__header">
         <!-- anchor menu -->
         @include('front.components.anchor-menu',[
            'title'=> 'As nossas Instituições',
            'title1'=> 'Infância e Juventude',
            'title2'=> 'População Idosa',
            'title3'=> 'Família e Comunidade',
         ])
         <!-- anchor menu -->
      </div>

      <!-- begin first area -->
      <div class="section__container" id="1">

         <!-- intro text -->
         @include('front.components.topic-card',[
            'title'=> 'Infância e Juventude',
            'icon'=> 'front/img/icons/infancia.svg',
            'image'=> 'front/img/photos/photo8.jpg',
            'text'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
         ])
         <!-- intro text -->

         <!-- instituições slide -->
         <div class="border-arrows 1"></div>

         @php
           $card = [];
           $cards = [];

           for($i = 0; $i<7; $i++){
            $cards[] = $card;
           };
         @endphp

         <div class="cards-slideshow 1">

            <!-- begin card -->
            @foreach($cards as $card)
            <div class="cards-slideshow__slider">
               @include('front.components.inst-card',[
                  'subtitle' => 'Infância e Juventude',
                  'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'img' => 'front/img/photos/photo1.jpg',
                  'link' => 'social-detail'
               ])
            </div>
            @endforeach
            <!-- end card -->

         </div>
         <!-- instituições slide -->

      </div>
      <!-- end first area -->


      <!-- begin second area -->
      <div class="section__container" id="2">

         <!-- intro text -->
         @include('front.components.topic-card',[
            'title'=> 'População Idosa',
            'icon'=> 'front/img/icons/idosos.svg',
            'image'=> 'front/img/photos/photo7.jpg',
            'text'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
         ])
         <!-- intro text -->

         <!-- instituições slide -->
         <div class="border-arrows 2"></div>

         <div class="cards-slideshow 2">

            <!-- begin card -->
            @foreach($cards as $card)
            <div class="cards-slideshow__slider">
               @include('front.components.inst-card',[
                  'subtitle' => 'População Idosa',
                  'title' => 'ERPI — Humberto Silveira Fernandes',
                  'img' => 'front/img/photos/photo1.jpg',
                  'link' => 'social-detail'
               ])
            </div>
            @endforeach
            <!-- end card -->

         </div>
         <!-- instituições slide -->

      </div>
      <!-- end second area -->

      <!-- begin last area -->
      <div class="section__container" id="3">

         <!-- intro text -->
         @include('front.components.topic-card',[
            'title'=> 'Família e Comunidade',
            'icon'=> 'front/img/icons/familia.svg',
            'image'=> 'front/img/photos/photo6.jpg',
            'text'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
         ])
         <!-- intro text -->

         <!-- instituições slide -->
         <div class="border-arrows 3"></div>

         <div class="cards-slideshow 3">

            <!-- begin card -->
            @foreach($cards as $card)
            <div class="cards-slideshow__slider">
               @include('front.components.inst-card',[
                  'subtitle' => 'População Idosa',
                  'title' => 'ERPI — Humberto Silveira Fernandes',
                  'img' => 'front/img/photos/photo1.jpg',
                  'link' => 'social-detail'
               ])
            </div>
            @endforeach
            <!-- end card -->

         </div>
         <!-- instituições slide -->

      </div>
      <!-- end last area -->

      <!-- share -->
      @include('front.components.page-share')
      <!-- share -->

   </div>
</section>

@endsection


@push('scripts')
<script>

      $('.cards-slideshow.1').slick({
          dots: false,
          arrows: true,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 5,
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
          appendArrows: '.border-arrows.1',
           prevArrow: '<button class="slick-prev slick-arrow icon icon--arrow-left"></button>',
           nextArrow: '<button class="slick-next slick-arrow icon icon--arrow-right"></button>',
           responsive: [
           {
              breakpoint: 1320,
              settings: {
               slidesToShow: 4,
               slidesToScroll: 4,
               infinite: true,
              }
           },
           {
              breakpoint: 900,
              settings: {
               slidesToShow: 3,
               slidesToScroll: 3
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
      $('.cards-slideshow.2').slick({
          dots: false,
          arrows: true,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 5,
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
          appendArrows: '.border-arrows.2',
        prevArrow: '<button class="slick-prev slick-arrow icon icon--arrow-left"></button>',
        nextArrow: '<button class="slick-next slick-arrow icon icon--arrow-right"></button>',
        responsive: [
           {
             breakpoint: 1320,

              settings: {
               slidesToShow: 4,
               slidesToScroll: 4,
               infinite: true,
              }
           },
           {
              breakpoint: 900,
              settings: {
               slidesToShow: 3,
               slidesToScroll: 3
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
      $('.cards-slideshow.3').slick({
          dots: false,
          arrows: true,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 5,
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
          appendArrows: '.border-arrows.3',
        prevArrow: '<button class="slick-prev slick-arrow icon icon--arrow-left"></button>',
        nextArrow: '<button class="slick-next slick-arrow icon icon--arrow-right"></button>',
        responsive: [
          {
             breakpoint: 1320,

             settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
             }
          },
          {
             breakpoint: 900,
             settings: {
              slidesToShow: 3,
              slidesToScroll: 3
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
     $('.anchor-menu__list').slick({
         dots: false,
         arrows: false,
         variableWidth: true,
         infinite: false,
         speed: 900,
         slidesToShow: 1,
         fade: false,
         pauseOnHover: false,
         cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
         autoplay: false,
         responsive: [
            {
               breakpoint: 410,
               settings: {
                  slidesToShow: 1,
               }
           },
            {
               breakpoint: 3000,
               settings: 'unslick',
           }
        ]
     });
</script>
@endpush
