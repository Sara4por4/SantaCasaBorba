@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">

   @include('front.components.home-slideshow')

   <div class="container">
      <section class="section">
         <div class="intro-list row">

            <div class="intro-list__element col-sm-4">
            @include('front.components.intro-card',[
               'title' => 'Infância e Juventude',
               'img' => 'front/img/icons/infancia.svg',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
               'number' => '2',
               'link' => 'social#1',
            ])
            </div>
            <div class="intro-list__element col-sm-4">
            @include('front.components.intro-card',[
               'title' => 'População Idosa',
               'img' => 'front/img/icons/idosos.svg',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>',
               'number' => '2',
               'link' => 'social#2',
            ])
            </div>
            <div class="intro-list__element col-sm-4">
            @include('front.components.intro-card',[
               'title' => 'Família e Comunidade',
               'img' => 'front/img/icons/familia.svg',
               'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
               'number' => '2',
               'link' => 'social#3',
            ])
            </div>

         </div>
      </section>

      <section class="section">

         <div class="section__header">
            <h2 class="title">As nossas instituições</h2>
            <div class="border-arrows"></div>
         </div>
         <div class="section__container">

            <div class="cards-slideshow">

               <!-- begin card -->
               <div class="cards-slideshow__slider">
                  @include('front.components.inst-card',[
                     'subtitle' => 'Família e Comunidade',
                     'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                     'img' => 'front/img/photos/photo1.jpg',
                     'link' => ''
                  ])
               </div>
               <!-- end card -->
               <!-- begin card -->
               <div class="cards-slideshow__slider">
                  @include('front.components.inst-card',[
                     'subtitle' => 'Família e Comunidade',
                     'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                     'img' => 'front/img/photos/photo7.jpg',
                     'link' => ''
                  ])
               </div>
               <!-- end card -->
               <!-- begin card -->
               <div class="cards-slideshow__slider">
                  @include('front.components.inst-card',[
                     'subtitle' => 'Família e Comunidade',
                     'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                     'img' => 'front/img/photos/photo1.jpg',
                     'link' => ''
                  ])
               </div>
               <!-- end card -->
               <!-- begin card -->
               <div class="cards-slideshow__slider">
                  @include('front.components.inst-card',[
                     'subtitle' => 'Família e Comunidade',
                     'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                     'img' => 'front/img/photos/photo2.jpg',
                     'link' => ''
                  ])
               </div>
               <!-- end card -->
               <!-- begin card -->
               <div class="cards-slideshow__slider">
                  @include('front.components.inst-card',[
                     'subtitle' => 'Família e Comunidade',
                     'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                     'img' => 'front/img/photos/photo7.jpg',
                     'link' => ''
                  ])
               </div>
               <!-- end card -->
            </div>

         </div>
         <!-- end: main body -->
      </section>
   </div>
</div>


<section class="section">
   <div class="container">

      <div class="section__header section__header--border">
         <h2 class="pull-left title">Agenda</h2>
         <a href="#" class="pull-right link link--grey">Agenda Anual <span class="icon icon--caret-right"></span></a>
      </div>
      <div class="section__container">
         <div class="agenda-list row">

            <div class="agenda-list__element col-sm-3 col-md-3">
               <!--azul para todos menos aldeia cultural-->
               @include('front.components.agenda-card',[
                  'class' => 'blue',
                  'subtitle' => 'CATL - Centro de atividades de tempo livre',
                  'date' => '09/01/2019',
                  'week' => '4ªfeira',
                  'title' => 'ENCONTRO DE CULTURAS – Festival de Musica Tradicional com Folclore e Cante Alentejano.',
                  'time' => '16h00',
                  'address' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'info' => 'Visita da Oficina do Idoso e USB Escola Eb.1, 2 e 3 Santa Marta',
                  'link' => ''
               ])
            </div>
            <div class="agenda-list__element col-sm-3  col-md-3">
               <!--laranja só para aldeia cultural-->
               @include('front.components.agenda-card',[
                   'class' => 'orange',
                  'subtitle' => 'Aldeia Cultural Misericórdia Borba',
                  'date' => '09/01/2019',
                  'week' => '4ªfeira',
                  'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'time' => '16h00',
                  'address' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'info' => 'Visita da Oficina do Idoso e USB',
                  'link' => ''
               ])
            </div>
            <div class="agenda-list__element col-sm-3  col-md-3">
               <!--laranja só para aldeia cultural-->
               @include('front.components.agenda-card',[
                   'class' => 'orange',
                  'subtitle' => 'Aldeia Cultural Misericórdia Borba',
                  'date' => '09/01/2019',
                  'week' => '4ªfeira',
                  'title' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'time' => '16h00',
                  'address' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'info' => 'Visita da Oficina do Idoso e USB',
                  'link' => ''
               ])
            </div>
            <div class="agenda-list__element col-sm-3 col-md-3">
               <!--azul para todos menos aldeia cultural-->
               @include('front.components.agenda-card',[
                  'class' => 'blue',
                  'subtitle' => 'CATL - Centro de atividades de tempo livre',
                  'date' => '09/01/2019',
                  'week' => '4ªfeira',
                  'title' => 'ENCONTRO DE CULTURAS – Festival de Musica Tradicional com Folclore e Cante Alentejano.',
                  'time' => '16h00',
                  'address' => 'Creche e Jardim de Infância D. Ana Angélica da Silveira',
                  'info' => 'Visita da Oficina do Idoso e USB Escola Eb.1, 2 e 3 Santa Marta',
                  'link' => ''
               ])
            </div>

         </div>
      </div>

   </div>
</section>

<div class="section">
   <div class="container">
      <div class="count-wrapper">
         <div class="count-wrapper__bg" style="background-image:url(front/img/photos/photo6.jpg)"></div>
         <div class="count-wrapper__wrapper">
            <h3 class="count-wrapper__title big-title">"Sempre junto da comunidade"</h3>
            <div class="count-list row">
               <div class="col-sm-3">
                  @include('front.components.count-card',[
                     'description' => 'Anos de Fundação',
                     'number' => '100',
                     'icon' => 'front/img/icons/anos.svg'
                  ])
               </div>
               <div class="col-sm-3">
                  @include('front.components.count-card',[
                     'description' => 'Respostas Sociais',
                     'number' => '15',
                     'icon' => 'front/img/icons/respostas.svg'
                  ])
               </div>
               <div class="col-sm-3">
                  @include('front.components.count-card',[
                     'description' => 'Colaboradores Diretos',
                     'number' => '100',
                     'icon' => 'front/img/icons/colaboradores.svg'
                  ])
               </div>
               <div class="col-sm-3">
                  @include('front.components.count-card',[
                     'description' => 'Utentes apoiados',
                     'number' => '100',
                     'icon' => 'front/img/icons/utentes.svg'
                  ])
               </div>
            </div>
         </div>
      </div>

   </div>
</div>


<section class="section">
   <div class="container">

      <div class="section__header section__header--border">
         <h2 class="pull-left title">Comunicação</h2>
         <a href="#" class="pull-right link link--grey">Notícias Atuais <span class="icon icon--caret-right"></span></a>
      </div>
      <div class="section__container">
         <div class="news-list news-list--home row">
            <div class="news-list__element col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo3.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
            <div class="news-list__element col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo4.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
            <div class="news-list__element col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo5.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
            <div class="news-list__element col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo1.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
            <div class="news-list__element col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo1.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
            <div class="news-list__element col-sm-4">
               @include('front.components.img-card',[
                  'img' =>  'front/img/photos/photo1.jpg',
                  'title' => 'Grande Espetáculo Musical, Encontro Internacional de Tunas',
                  'category' => 'CTAL - Centro de Atividades de Tempo Livre',
                  'date' => '14/01/18',
                  'link' => 'communication-detail',
               ])
            </div>
         </div>
      </div>

   </div>
</section>

@endsection

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>

      AOS.init();

      $('.flip-card').click(function(){
         $(this).toggleClass('active');
      })

      $('.slideshow').slick({
          dots: false,
          arrows: false,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '160px',
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
          responsive: [
             {
                breakpoint: 1281,
                settings: {
                   centerPadding: '90px',
                }
            },
             {
                breakpoint: 1140,
                settings: {
                   centerPadding: '60px',
                }
            },
             {
                breakpoint: 1024,
                settings: {
                   centerPadding: '40px',
                }
            },
             {
                breakpoint: 768,
                settings: {
                   centerPadding: '15px',
                }
            },
         ]
      });
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
               infinite: true
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
      $('.count-list').slick({
          dots: false,
          arrows: false,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '40px',
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
          responsive: [
            {
                breakpoint: 4000,
                settings: 'unslick'
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
         ]
      });
      $('.agenda-list').slick({
          dots: false,
          arrows: false,
          variableWidth: false,
          infinite: true,
          speed: 900,
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '30px',
          fade: false,
          pauseOnHover: false,
          cssEase: 'cubic-bezier(0.215, 0.610, 0.355, 1.000)',
          autoplay: true,
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
      // count on scroll
        var a = 0;
        $(window).scroll(function() {

          var oTop = $('.count-list').offset().top - window.innerHeight;
          if (a == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
              var $this = $(this),
                countTo = $this.attr('data-count');
              $({
                countNum: $this.text()
              }).animate({
                  countNum: countTo
                },
                {
                  duration: 2000,
                  easing: 'swing',
                  delay: 1000,
                  step: function() {
                    $this.text(Math.floor(this.countNum));
                  },
                  complete: function() {
                    $this.text(this.countNum);
                  }

                });
            });
            a = 1;
          }
       });
</script>
@endpush
