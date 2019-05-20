@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner',[
         'image' => 'front/img/photos/santacasa.png',
         'category' => 'S.C.M. Borba',
         'title' => '"História da Santa Casa da Misericórdia de Borba"',
      ])

      <section class="section">

         <!-- intro text -->
         @include('front.components.article',[
            'title' => '“No dia 26 de Junho de 1379, seis borbenses fundaram a Irmandade do Santo Espírito de Nossa Senhora...” ',
            'text' => '<p>Pois achavam que os ricos deveriam partilhar, voluntariamente, com os que nada tinham. A vocação social deste tipo de irmandades, para com os doentes, os presos e os pobres, levou a uma grande adesão da população aos seus princípios. Dada a sua vertente principalmente assistencial e não só religiosa foram muito apoiadas pela população e tornaram-se rapidamente em instituições ricas, atraindo as atenções da nobreza local. A irmandade de Borba viu os seus bens arrestados pelo Duque de Bragança e só a sua conversão em Misericórdia em 1524 a salvou de ser integrada na Casa de Bragança.  A união entre a comunidade borbense e Misericórdia é uma constante que está sempre presente. Foram os borbenses que fundaram a Irmandade do Santo Espírito, que pediram a sua conversão em Misericórdia, que fundaram o seu Hospital e que sustentaram, com os seus bens, esta instituição e a sua vertente assistencial.</p>',
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
            'title'=> 'Mais informações',
            'title1'=> 'Competência',
            'title2'=> 'Administração',
            'title3'=> 'Corpos Gerentes',
         ])
         <!-- anchor menu -->
      </div>

      <!-- begin first area -->
      <div class="section__container" id="1">
         <div class="row">

            <div class="col-sm-4">
               <h2 class="pull-left-sm title">Competências/</h2>
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
               <h2 class="pull-left-sm title">Palavra da Mesa Administrativa/</h2>
            </div>

            <div class="col-sm-8">
               <div class="text editable">
                  A Santa Casa da Misericórdia de Borba tem desenvolvido, ao longo dos cerca de cinco séculos da sua existência, um papel de vital importância no que diz respeito ao apoio prestado à população do Concelho em áreas que vão desde as necessidades básicas de alimentação e saúde, até ao conforto do acolhimento em lares de idosos ou serviços de apoio domiciliário, passando, entre outras, pelas vertentes da educação, desde a tenra idade de quatro meses em que são admitidas as crianças na Creche, passando depois para o ensino que actualmente se denomina de pré-escolar e que dá lugar, depois, às actividades de tempos livres (ATL), que complementam diariamente o ensino básico das nossas crianças.
               </div>
            </div>

         </div>
      </div>
      <!-- end second area -->

      <!-- begin last area -->
      <div class="section__container" id="3">
         <div class="section__header section__header--border">
            <h3 class="title">Corpo Gerente/</h3>
         </div>
         <div class="section__container">
            <div class="manager-card-list row">
               <div class="manager-card-list__el col-sm-4">
                  @include('front.components.manager-card',[
                  'title' => 'Mesa de Assembleia Geral',
                  ])
               </div>
               <div class="manager-card-list__el col-sm-4">
                  @include('front.components.manager-card',[
                  'title' => 'Mesa Administrativa',
                  ])
               </div>
               <div class="manager-card-list__el col-sm-4">
                  @include('front.components.manager-card',[
                  'title' => 'Concelho Fiscal',
                  ])
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
