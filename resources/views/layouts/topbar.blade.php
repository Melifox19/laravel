<ul class="nav navbar-nav">
  <li class="{{ Request::is('ruchers*') ? 'active' : '' }}">
    <a href="{!! route('ruchers.index') !!}"><i class="fa fa-cog"></i><span> Ruchers</span></a>
  </li>

  <li class="{{ Request::is('ruches*') ? 'active' : '' }}">
    <a href="{!! route('ruches.index') !!}"><i class="fa fa-cog"></i><span> Ruches</span></a>
  </li>
</ul>
