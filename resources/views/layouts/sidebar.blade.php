
 <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info" style="background: url({{ asset('img/portada.jpg')}}) no-repeat no-repeat;">
                <div class="image">
                    <img src="{{ asset('img/user.jpg')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                   
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a ><i class="material-icons">person</i>Perfil</a></li>
                            <li role="separator" class="divider"></li>
                          
                        </ul>
                       
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu</li>
                    <li class="@if($active == 'home') active @endif">
                        <a href="{{ url('/home') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Inicio</span>
                        </a>
                    </li> 
                     <li class="@if($active == 'departamentos') active @endif">
                        <a href="{{ url('/teams') }}">
                            <i class="material-icons">view_list</i>
                            <span>Departamentos</span>
                        </a>
                    </li>
                    <li class="@if($active == 'empleados') active @endif">
                        <a href="{{ url('/players') }}">
                            <i class="material-icons">people</i>
                            <span>Empledos</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2022 <a href="javascript:void(0);">NominaTDB - Proyecto escolar</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
</section