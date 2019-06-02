<ul class="nav navbar-nav">
  <li class="{{ Request::is('melibornes*') ? 'active' : '' }}">
    <a href="{!! route('melibornes.index') !!}"><i class="fa fa-cog"></i><span> {{ __('tables.meliborne')}}</span></a>
  </li>

  <li class="{{ Request::is('ruchers*') ? 'active' : '' }}">
    <a href="{!! route('ruchers.index') !!}"><i class="fa fa-cog"></i><span> {{ __('tables.apiary') }}</span></a>
  </li>

  <li class="{{ Request::is('ruches*') ? 'active' : '' }}">
    <a href="{!! route('ruches.index') !!}"><i class="fa fa-cog"></i><span> {{ __('tables.hive') }}</span></a>
  </li>
</ul>
