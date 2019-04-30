@if (Auth::user()->role == 'admin')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
  <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Utilisateurs</span></a>
</li>
@endif

<li class="{{ Request::is('ruchers*') ? 'active' : '' }}">
  <a href="{!! route('ruchers.index') !!}"><i class="fa fa-edit"></i><span>Ruchers</span></a>
</li>

<li class="{{ Request::is('melibornes*') ? 'active' : '' }}">
  <a href="{!! route('melibornes.index') !!}"><i class="fa fa-edit"></i><span>Melibornes</span></a>
</li>

<li class="{{ Request::is('ruches*') ? 'active' : '' }}">
  <a href="{!! route('ruches.index') !!}"><i class="fa fa-edit"></i><span>Ruches</span></a>
</li>

@if (Auth::user()->role == 'admin')
<li class="{{ Request::is('mesures*') ? 'active' : '' }}">
  <a href="{!! route('mesures.index') !!}"><i class="fa fa-edit"></i><span>Mesures</span></a>
</li>
@endif

@if (Auth::user()->role == 'admin')
<li class="{{ Request::is('alertes*') ? 'active' : '' }}">
  <a href="{!! route('alertes.index') !!}"><i class="fa fa-edit"></i><span>Alertes</span></a>
</li>
@endif
