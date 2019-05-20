<div class="container light-grey-color">

   <nav class="nav">
      <ul class="nav__menu hidden-xs">

         <!-- responsive social -->
         <li class="nav__social social-dropdown">
            <a href="#" class="icon icon--share" data-target="#social" data-toggle="collapse" href="#social" role="button" aria-expanded="false" aria-controls="collapseExample"></a>
            <ul class="social-list collapse" id="social">
               <li>
                  <a href="#" target="_blank" class="icon icon--facebook"></a>
               </li>
               <li>
                  <a href="#" target="_blank" class="icon icon--twitter"></a>
               </li>
               <li>
                  <a href="#" target="_blank" class="icon icon--youtube"></a>
               </li>
            </ul>
         </li>
         <!-- responsive social -->

         <li class="active">
            <a href="{{url('/')}}">Início</a>
         </li>
         <li>
            <a href="{{url('/about')}}">S.C.M. Borba</a>
         </li>
         <li>
            <a href="{{url('/social')}}">Ação Social</a>
         </li>

         <!-- logo -->
         <li>
            <div class="app-logo nav__logo">
                <a href="{{url("/")}}">Santa Casa Borba</a>
            </div>
         </li>
         <!-- logo -->

         <li>
            <a href="{{url('/agenda')}}">Agenda</a>
         </li>

         <li>
            <a href="{{url('/infos')}}">Informações</a>
         </li>

         <li>
            <a href="{{url('/communication')}}">Comunicação</a>
         </li>

         <li>
            <a href="{{url('/contacts')}}" class="icon icon--chat"></a>
         </li>

      </ul>

      <!-- responsive menu -->
      <ul class="nav__responsive">

         <li>
            <button type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" class="icon icon--menu"></a>
         </li>
         <!-- logo -->
         <li>
            <div class="app-logo nav__logo">
                <a href="{{url("/")}}">Santa Casa Borba</a>
            </div>
         </li>
         <!-- logo -->
         <li>
            <a href="{{url('/contacts')}}" class="icon icon--chat"></a>
         </li>
      </ul>
      <ul class="nav__dropmenu collapse" id="menu">
         <li class="active">
            <a href="{{url('/')}}">Início</a>
         </li>
         <li>
            <a href="{{url('/about')}}">S.C.M. Borba</a>
         </li>
         <li>
            <a href="{{url('/social')}}">Ação Social</a>
         </li>
         <li>
            <a href="{{url('/agenda')}}">Agenda</a>
         </li>
         <li>
            <a href="{{url('/infos')}}">Informações</a>
         </li>
         <li>
            <a href="{{url('/communication')}}">Comunicação</a>
         </li>
         <li>
            <ul class="social-list">
               <li>
                  <a href="#" target="_blank" class="icon icon--facebook"></a>
               </li>
               <li>
                  <a href="#" target="_blank" class="icon icon--twitter"></a>
               </li>
               <li>
                  <a href="#" target="_blank" class="icon icon--youtube"></a>
               </li>
            </ul>
         </li>
      </ul>
      <!-- responsive menu -->

   </nav>
</div>
