@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'blue',
         'image' => 'front/img/photos/photo3.jpg',
         'category' => 'Contactos',
         'title' => 'Entre em contacto connosco a qualquer hora',
      ])

   </div>
</div>


<section class="section">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="section__header section__header--border-small">
               <h2 class="small-title small-title--primary">Formulário de Contacto/</h2>
            </div>
            <div class="section__container">
               <!-- contacts form -->
               @include('front.forms.contacts-form')
               <!-- contacts form -->
            </div>
         </div>
         <div class="col-md-4 padding-left">
            <div class="section__header section__header--border-small">
               <h2 class="small-title small-title--primary">Contactos/</h2>
            </div>
            <div class="section__container">

               <div class="contacts-info">
                  <ul class="contacts-info__list">
                     <li>
                        <p class="text"><span class="icon icon--pin"></span>
                           Rua Humberto Silveira Fernandes, 16, 7209 Borba
                           <a href="#" class="link link--blue" style="margin-left:0;display:block">Ver mapa <span class="icon icon--map"></span></a>
                        </p>
                     </li>
                     <li>
                        <p class="text"><span class="icon icon--phone"></span>(+351) 000 000 000</p>
                     </li>
                     <li>
                        <p class="text"><span class="icon icon--phone"></span>(+351) 000 000 000</p>
                     </li>
                     <li>
                        <p class="text text--medium"><span class="icon icon--mail"></span>geral@info.pt</p>
                     </li>
                  </ul>
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
