@if (Auth::user()->role == 'admin')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
  <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>{{ __('tables.user')}}</span></a>
</li>
@endif

@if (Auth::user()->role == 'admin')
<li class="{{ Request::is('mesures*') ? 'active' : '' }}">
  <a href="{!! route('mesures.index') !!}"><i class="fa fa-edit"></i><span>{{ __('tables.measure')}}</span></a>
</li>
@endif

@if (Auth::user()->role == 'admin')
<li class="{{ Request::is('alertes*') ? 'active' : '' }}">
  <a href="{!! route('alertes.index') !!}"><i class="fa fa-edit"></i><span>{{__('tables.warning')}}</span></a>
</li>
@endif

@foreach($ruchers as $rucher)
    <li class="treeview">
        <a href="#"><i class="fa fa-caret-right"></i>{{ $rucher->nom }}</a>
        <!-- 🐝 -->
        <ul class="treeview-menu">
            @foreach($ruches as $ruche)
                @if($ruche->idRucher == $rucher->id)
                <li><a href="/ruches/{{ $ruche->id }}"> {{ $ruche->id }} </a></li>
                @endif
            @endforeach
        </ul>
    </li>
@endforeach
