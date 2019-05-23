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

@foreach($ruchers as $rucher)
    <li class="treeview">
        <a href="#"><i class="fa fa-caret-right"></i>{{ $rucher->nom }}</a>
        <!-- 🐝 -->
        <ul class="treeview-menu">
            @foreach($ruches as $ruche)
                @if($ruche->idRucher == $rucher->id)
                <li><a href="{{ $ruche->id }}"> {{ $ruche->id }} </a></li>
                @endif
            @endforeach
        </ul>
    </li>
@endforeach
