
@if (Auth::user()->role == 'admin')
  <li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Utilisateurs</span></a>
  </li>
@endif

<li class="{{ Request::is('melibornes*') ? 'active' : '' }}">
  <a href="{!! route('melibornes.index') !!}"><i class="fa fa-edit"></i><span>Melibornes</span></a>
</li>

<li class="{{ Request::is('mesures*') ? 'active' : '' }}">
  <a href="{!! route('mesures.index') !!}"><i class="fa fa-edit"></i><span>Mesures</span></a>
</li>

<li class="{{ Request::is('alertes*') ? 'active' : '' }}">
  <a href="{!! route('alertes.index') !!}"><i class="fa fa-edit"></i><span>Alertes</span></a>
</li>

  <li class="treeview">
    <a href="#"><i class="fa fa-caret-right"></i>Rucher 1</a>
    <ul class="treeview-menu">
      <li><a href="#">Ruche 1.1</a></li>
      <li><a href="#">Ruche 1.2</a></li>
      <li><a href="#">Ruche 1.3</a></li>

    </ul>
  </li>
