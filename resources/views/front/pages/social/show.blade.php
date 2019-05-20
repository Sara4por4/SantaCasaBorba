@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'orange',
         'image' => 'front/img/photos/photo1.jpg',
         'category' => 'Familia e Comunidade',
         'title' => 'Centro Comunitário - Santa Casa da Misericórdia de Borba',
      ])


      <section class="section">

         <!-- intro text with image -->
         @include('front.components.article-img',[
            'image' => 'front/img/logos/logo1.jpg',
            'title' => 'A cultura comunitária é a expressão concreta de tentar proporcionar aqueles que mais precisam a ajuda necessária para começar de novo a viver.',
            'text' => '<p>Esta foi a forma que a Santa Casa da Misericórdia de Borba encontrou para continuar com um dos equipamentos que foi criado a partir de uma iniciativa do Projeto de Intervenção Comunitário (PIC). Na altura foi denominado como de “Banco de Solidariedade”. Findo o Projeto, 31 de Dezembro de 2004; foi criada uma nova equipa de trabalho que até hoje não se preocupou somente em dar continuidade ao trabalho desenvolvido até então, mas também em traçar novos objetivos e metas. Surgiu então o “Centro Comunitário”.</p>',
         ])
         <!-- intro text with image -->

         <!-- intro text without image -->
         <!-- @include('front.components.article',[
            'title' => 'A cultura comunitária é a expressão concreta de tentar proporcionar aqueles que mais precisam a ajuda necessária para começar de novo a viver.',
            'text' => '<p>Esta foi a forma que a Santa Casa da Misericórdia de Borba encontrou para continuar com um dos equipamentos que foi criado a partir de uma iniciativa do Projeto de Intervenção Comunitário (PIC). Na altura foi denominado como de “Banco de Solidariedade”. Findo o Projeto, 31 de Dezembro de 2004; foi criada uma nova equipa de trabalho que até hoje não se preocupou somente em dar continuidade ao trabalho desenvolvido até então, mas também em traçar novos objetivos e metas. Surgiu então o “Centro Comunitário”.</p>',
         ]) -->
         <!-- intro text without image-->

      </section>
   </div>
</div>


<section class="section section-list">
   <div class="container">

      <div class="section__header">
         <!-- anchor menu -->
         @include('front.components.anchor-menu-v2',[
            'title'=> 'Mais informações',
            'title1'=> 'Missão',
            'title2'=> 'Objetivos',
            'title3'=> 'Galeria',
            'title4'=> 'Informações',
         ])
         <!-- anchor menu -->
      </div>

      <!-- begin first area -->
      <div class="section__container" id="1">
         <div class="row">

            <div class="col-sm-4">
               <h2 class="pull-left-sm title">Missão/</h2>
            </div>

            <div class="col-sm-8">
               <div class="text editable">
                  <h4>Natureza</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <h4>Responsável pelo Pelouro</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>

                  <ul>
                     <li>Dar despacho dos assuntos que são deferidos em reunião de Mesa.</li>
                     <li>Dar despacho dos assuntos que são deferidos em reunião de Mesa.</li>
                     <li>Dar despacho dos assuntos que são deferidos em reunião de Mesa.</li>
                     <li>Dar despacho dos assuntos que são deferidos em reunião de Mesa.</li>
                  </ul>
               </div>
            </div>

         </div>
      </div>
      <!-- end first area -->

      <!-- begin second area -->
      <div class="section__container" id="2">
         <div class="row">

            <div class="col-sm-4">
               <h2 class="pull-left-sm title">Objetivos/</h2>
            </div>

            <div class="col-sm-8">
               <div class="text editable">
                  A Santa Casa da Misericórdia de Borba tem desenvolvido, ao longo dos cerca de cinco séculos da sua existência, um papel de vital importância no que diz respeito ao apoio prestado à população do Concelho em áreas que vão desde as necessidades básicas de alimentação e saúde, até ao conforto do acolhimento em lares de idosos ou serviços de apoio domiciliário, passando, entre outras, pelas vertentes da educação, desde a tenra idade de quatro meses em que são admitidas as crianças na Creche, passando depois para o ensino que actualmente se denomina de pré-escolar e que dá lugar, depois, às actividades de tempos livres (ATL), que complementam diariamente o ensino básico das nossas crianças.
               </div>
            </div>

         </div>
      </div>
      <!-- end second area -->

      <!-- begin third area -->
      <div class="section__container" id="3">
         <div class="section__header">
            <h3 class="title">Galeria/</h3>
            <div class="border-arrows"></div>
         </div>

         <div class="cards-slideshow">
            <div class="cards-slideshow__slider">
               @include('front.components.news-card',[
                  'id' => 'gallery',
                  'subtitle' => 'Imagens',
                  'title' => 'Conheça as nossas instalações',
                  'img' => 'front/img/photos/photo1.jpg',
               ])
            </div>
            <div class="cards-slideshow__slider">
               @include('front.components.news-card',[
                  'id' => 'video',
                  'subtitle' => 'Vídeo',
                  'title' => 'Conheça as nossas instalações',
                  'img' => 'front/img/photos/photo1.jpg',
               ])
            </div>
         </div>
      </div>
      <!-- begin third area -->

      <!-- begin last area -->
      <div class="section__container" id="4">
         <div class="row">

            <div class="col-sm-4">
               <h2 class="pull-left-sm title">Informações/</h2>
            </div>

            <div class="col-sm-8">

               <div class="contacts-info">
                  <h4 class="small-title small-title--medium">Horário</h4>
                  <ul class="contacts-info__list">
                     <li>
                        <p class="text"><span class="icon icon--calendar"></span><span>Atendimento da Diretora Técnica:</span> Terças-feiras e Quintas-feiras das 9h00 às 12h30.</p>
                     </li>
                     <li>
                        <p class="text"><span class="icon icon--calendar"></span><span>Visitas aos utentes:</span> das 11h00 às 12h00; das 15h00 às 17h00.</p>
                     </li>
                     <li>
                        <p class="text"><span class="icon icon--calendar"></span><span>Serviços Administrativos:</span> das 11h00 às 12h00; das 15h00 às 17h00.</p>
                     </li>
                  </ul>
               </div>
               <div class="contacts-info">
                  <h4 class="small-title small-title--medium">Contactos</h4>
                  <ul class="contacts-info__list">
                     <li>
                        <p class="text"><span class="icon icon--pin"></span>Rua de S. Bartolomeu, nº41 e 43 - Borba
                           <a href="" class="link link--blue">Ver Mapa <span class="icon icon--map"></span></a></p>
                     </li>
                     <li>
                        <p class="text"><span class="icon icon--phone"></span>das 11h00 às 12h00; das 15h00 às 17h00.</p>
                     </li>
                     <li>
                        <p class="text"><span class="icon icon--mail"></span>das 11h00 às 12h00; das 15h00 às 17h00.</p>
                     </li>
                  </ul>
               </div>
            </div>

         </div>
      </div>
      <!-- begin last area -->


      <!-- share -->
      @include('front.components.page-share')
      <!-- share -->

   </div>
</section>


@endsection
@push('scripts')
<script src="{{url('/')}}/front/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
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

   $('#gallery').magnificPopup({
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


   $('#video').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false,
      items: [
         {
            src: 'http://www.youtube.com/embed/BeZy5rlssjM',
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
