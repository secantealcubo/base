<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Libs CSS -->
      <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/libs/quill/dist/quill.core.css') }}" />
      <link rel="stylesheet" href="{{ asset('assets/libs/highlightjs/styles/vs2015.css') }}" />
      <!--
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}">
      -->
      <!-- Map -->
      <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />
      <!-- Theme CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
      <!-- Title -->
      <title>Inicio</title>
      @livewireStyles
   </head>
   <body>
      <!-- NAVIGATION
         ================================================== -->
      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
         <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
            <!--
            <img src="{{asset('')}}" class="navbar-brand-img 
               mx-auto" alt="...">
            </a>
            -->
            <!-- User (xs) -->
            <div class="navbar-user d-md-none">
               <!-- Dropdown -->
               <div class="dropdown">
                  <!-- Toggle -->
                  <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="avatar avatar-sm avatar-online">
                        <i class="fe fe-user avatar-img rounded-circle"></i>
                  
                     </div>
                  </a>
                  <!-- Menu -->
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                     <!--<a href="{{ route('profile.show') }}" class="dropdown-item">Perfil</a>-->
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                           this.closest('form').submit();">Cerrar sesión</a>
                     </form>
                  </div>
               </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
               <!-- Form -->
               <form class="mt-4 mb-3 d-md-none">
                  <div class="input-group input-group-rounded input-group-merge">
                     <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                     <div class="input-group-prepend">
                        <div class="input-group-text">
                           <span class="fe fe-search"></span>
                        </div>
                     </div>
                  </div>
               </form>
               <!-- Navigation -->
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link active" href="{{ url('/dashboard') }}">
                     <i class="fe fe-home"></i> Inicio
                     </a>
                  </li>
                  <!--
                  <li class="nav-item">
                     <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                     <i class="fe fe-users"></i> Fichas de liderazgo
                     </a>
                     <div class="collapse" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a href="./todas-las-fichas.html" class="nav-link">
                              Todas las fichas
                              </a>
                           </li>
                           <li class="nav-item">
                              <a href="./busqueda-avanzada.html" class="nav-link ">
                              Búsqueda avanzada
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  -->
               </ul>
               <!-- Divider -->
               <hr class="navbar-divider my-3">
               <!-- Navigation -->
               <ul class="navbar-nav mb-md-4">
                  <li class="nav-item">
                     <a class="nav-link" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
                     <i class="fe fe-settings"></i> Configuración
                     </a>
                     <div class="collapse " id="sidebarBasics">
                        @if(\Auth::user()->can('ver usuarios'))
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item ">
                              <a a href="{{ route('usuarios.index') }}" class="nav-link">
                              Usuarios
                              </a>
                           </li>
                        </ul>
                        @endif
                        @if(\Auth::user()->can('ver roles'))
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item ">
                              <a a href="{{ route('roles.index') }}" class="nav-link">
                              Roles y privilegios
                              </a>
                           </li>
                        </ul>
                        @endif
                        <!--
                        @if(\Auth::user()->getRoleNames()->first() == "administrador")
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item ">
                              <a a href="{{ route('modulos.index') }}" class="nav-link">
                              Módulo
                              </a>
                           </li>
                        </ul>
                        <ul class="nav nav-sm flex-column">
                           <li class="nav-item">
                              <a href="{{ route('permisos.index') }}" class="nav-link {{ (request()->routeIs('permisos.nuevo')) ? 'active' : '' }}">
                              Permisos
                              </a>
                           </li>
                        </ul>
                        @endif
                        -->
                     </div>
                  </li>
                  <!--
                  <li class="nav-item">
                     <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                     <i class="fe fe-help-circle"></i> Ayuda
                     </a>
                     <div class="collapse " id="sidebarComponents">
                        <ul class="nav nav-sm flex-column">
                           <li>
                              <a href="#" class="nav-link">
                              FAQ
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
                  -->
               </ul>
               <!-- Push content down -->
               <div class="mt-auto"></div>
               <!-- User (md) -->
               <div class="navbar-user d-none d-md-flex" id="sidebarUser">
                  <!-- Icon -->
                  <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                  <span class="icon">
                  <i class="fe fe-bell"></i>
                  </span>
                  </a>
                  <!-- Dropup -->
                  <div class="dropup">
                     <!-- Toggle -->
                     <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                           <i class="fe fe-user avatar-img rounded-circle"></i>
                        </div>
                     </a>
                     <!-- Menu -->
                     <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <!--<a href="./profile-posts.html" class="dropdown-item">Perfil</a>-->
                        <!--<a href="{{ route('profile.show') }}" class="dropdown-item">Perfil</a>-->
                        <!--<hr class="dropdown-divider">-->
                        <form method="POST" action="{{ route('logout') }}">
                           @csrf
                           <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                              this.closest('form').submit();">Cerrar sesión</a>
                        </form>
                     </div>
                  </div>
                  <!-- Icon -->
                  <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                  <span class="icon">
                  <i class="fe fe-search"></i>
                  </span>
                  </a>
               </div>
            </div>
            <!-- / .navbar-collapse -->
         </div>
      </nav>
      <!-- MAIN CONTENT
         ================================================== -->
      <div class="main-content">
         {{ $slot ?? '' }}
         @yield('content')
      </div>
      <!-- / .main-content -->
      <!-- JAVASCRIPT
         ================================================== -->
      <!-- Libs JS -->
      @livewireScripts
      <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/libs/@shopify/draggable/lib/es5/draggable.bundle.legacy.js') }}"></script>
      <script src="{{ asset('assets/libs/autosize/dist/autosize.min.js') }}"></script>
      <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
      <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
      <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
      <script src="{{ asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
      <script src="{{ asset('assets/libs/list.js/dist/list.min.js') }}"></script>
      <script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
      <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
      <script src="{{ asset('assets/libs/chart.js/Chart.extension.js') }}"></script>
      <!-- Map -->
      <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <!-- Theme JS -->
      <script src="{{ asset('assets/js/theme.min.js') }}"></script>
      <script src="{{ asset('assets/js/dashkit.min.js') }}"></script>
      <script>
         const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
               toast.addEventListener('mouseenter', Swal.stopTimer)
               toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
         });
         // Disparados cuando se utiliza el $this->emit('toast')
         Livewire.on('toast', data => {
            Toast.fire({
               icon: data[0],
               title: data[1]
            })
         });  
         Livewire.on('toast_aux', data => {
            Toast.fire({
               icon: data[0],
               title: data[1]
            })
            setTimeout(function() {
                    location.href = data[2];
                }, 3000);
         });       
         // Disparado por el evento de una sesión (redirect desde otra pÃ¡gina a esta)
         @if(session()->has('toast'))
            Toast.fire({
            icon: "{{ session('toast')[0] }}",
            title: "{{ session('toast')[1] }}"
         })
         @endif
         
         // Modal para confirmar acción de eliminar registro
         Livewire.on('confirmDelete', () => {
            Swal.fire({
               title: 'Confirmar acción',
               text: "Eliminarás este registro",
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#d33',
               cancelButtonColor: '#c2c2c2',
               confirmButtonText: 'Eliminar',
               cancelButtonText: 'Cancelar'
            }).then((result) => {
               if (result.isConfirmed) {
                  window.livewire.emit('deleteConfirmed');
               }
            })
         });
      </script>
      @yield('js')
      @stack('scripts')
   </body>
</html>