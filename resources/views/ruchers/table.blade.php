<table class="table table-responsive" id="ruchers-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Propriétaire</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($ruchers as $rucher)
    @foreach($users as $user)

    <tr>
      <td>{!! $rucher->id !!}</td>
      <td>{!! $rucher->nom !!}</td>
      <td>{!! $rucher->idApiculteur !!} - {!! $user->name !!}</td>
      <td>
        {!! Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
          <a href="{!! route('ruchers.show', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{!! route('ruchers.edit', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
          {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
        </div>
        {!! Form::close() !!}
      </td>
    </tr>

    @endif
    @endforeach
    @endforeach

  </tbody>
</table>
