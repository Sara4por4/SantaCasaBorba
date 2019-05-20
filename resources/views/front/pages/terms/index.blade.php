@extends ('front.layout.app')
@section('content')

<div class="light-grey-color light-grey-color--padding">
   <div class="container">

      @include('front.components.top-banner-small',[
         'class' => 'blue',
         'image' => 'front/img/photos/photo3.jpg',
         'category' => 'Segurança',
         'title' => 'Termos de Utilização',
      ])

   </div>
</div>

<section class="section">
   <div class="container">

      <article class="article-base">
         <div class="article-base__caption">
            <h3 class="article-base__title small-title">Lorem ipsum dolor sit amet</h3>
            <div class="text editable">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
         </div>
      </article>

   </div>
</section>

@endsection
