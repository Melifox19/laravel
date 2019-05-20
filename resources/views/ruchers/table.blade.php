<table class="table table-responsive" id="ruchers-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>{{ __('tables.name')}}</th>
      @if(Auth::user()->role == "admin")
      <th>{{ __('tables.owner')}}</th>
      @endif
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($ruchers as $rucher)
    @foreach($users as $user)
    @if($rucher->idApiculteur == $user->id)

    <tr>
      <td>{!! $rucher->id !!}</td>
      <td>{!! $rucher->nom !!}</td>
      @if(Auth::user()->role == "admin")
      <td>{!! $rucher->idApiculteur !!} - {!! $user->name !!}</td>
      @endif
      <td>
        {!! Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
          <a href="{!! route('ruchers.show', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{!! route('ruchers.edit', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
          {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]) !!}
        </div>
        {!! Form::close() !!}
      </td>
    </tr>

    @endif
    @endforeach
    @endforeach

  </tbody>
</table>
