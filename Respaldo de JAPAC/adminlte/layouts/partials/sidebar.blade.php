<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="{{ url('') }}"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Encabezado -->
            <li class="header">Menu Principal</li>
            
            <!--Boton del Home-->
            <li><a href="{{ url('home') }}"><i class="fa fa-home" ></i> <span><font size=2>Inicio</font></span></a></li>
            
            <!--Boton del Perfil-->
            <li><a href="{{ url('perfil') }}"><i class="fa fa-user-circle-o" ></i> <span><font size=2>Perfil</font></span></a></li>

            <!--Boton del Establecimiento-->
            <li><a href="{{ url('establecimientos') }}"><i class="fa fa-building"></i> <span><font size=2>Establecimientos</font></span></a></li>
            
            <!--Boton y Listado de Inspecciones Formales-->
            <li class="treeview">
                <a href="#"><i class="fa fa-caret-square-o-right"></i><span><font size=2>Inspecciones Formales</font></span></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('inspeccionesformales/visitainspeccion') }}"><i class="fa fa-users"></i><font size=1>Visita de Inspeccion</font></a></li>
                    <li><a href="{{ url('inspeccionesformales/inicioprocedimiento') }}"><i class="fa fa-road"></i><font size=1>Inicio de Procedimiento</font></a></li>
                    <li><a href="{{ url('inspeccionesformales/indiceincumplimiento') }}"><i class="fa fa-calculator" ></i><font size=1>Indice de Incumplimiento</font></a></li>
                    <li><a href="{{ url('inspeccionesformales/resolutivoadministrativo') }}"><i class="fa fa-money"></i><font size=1>Resolutivo Administrativo</font></a></li>
                </ul>
            </li>

            <!--Boton y Listado de Laboratorios Externos-->
            <li class="treeview">
                <a href="#"><i class="fa fa-caret-square-o-right"></i><span><font size=2>Laboratorios Externos</font></span></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('laboratoriosexternos/resultadoslabexternos') }}"><i class="fa fa-book"></i><font size=1>Resultado de Lab. Externos</font></a></li>
                    <li><a href="{{ url('laboratoriosexternos/inicioprocedimientolabexternos') }}"><i class="fa fa-road"></i><font size=1>Inicio de Procedimiento de Lab. Externos</font></a></li>
                    <li><a href="{{ url('laboratoriosexternos/indiceincumplimientolabexternos') }}"><i class="fa fa-calculator"></i><font size=1>Indice de Incumplimiento de Lab. Externos</font></a></li>
                    <li><a href="{{ url('laboratoriosexternos/resolutivoadministrativolabexternos') }}"><i class="fa fa-money"></i><font size=1>Resolutivo Administrativo de Lab. Externos</font></a></li>
                </ul>
            </li>

            <!--Boton del Inspecciones Informales-->
            <li><a href="{{ url('inspeccionesinformales') }}"><i class="fa fa-bug" ></i><span><font size=2>Inspecciones Informales</font></span></a></li>

            <!--Boton de Salir-->
            <li><a href="{{ url('/logout') }}" class="fa fa-sign-out"  id="logout"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><span><font size=3>Salir</font></span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
