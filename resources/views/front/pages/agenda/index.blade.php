@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'blue',
         'image' => 'front/img/photos/photo2.jpg',
         'category' => 'Agenda',
         'title' => 'Mais de 100 eventos e atividades por ano a pensar nos nossos Utentes',
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

           for($i = 0; $i<5; $i++){
            $cards[] = $card;
           };
         @endphp


         <div class="agenda-list row">

            @foreach($cards as $card)
            <div class="agenda-list__element  col-sm-3 col-md-3">
               <!-- class azul para todos menos aldeia cultural qu é laranja-->
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

      $('.flip-card').click(function(){
         $(this).toggleClass('active');
      })

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
