<table class="table table-responsive" id="melibornes-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>{{__('tables.battery')}}</th>
      <th>{{__('tables.sigfox_id')}}</th>
      <th>{{__('tables.in_apiary')}}</th>
      <th colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($melibornes as $meliborne)
    @foreach($ruchers as $rucher)
    @if($meliborne->idRucher == $rucher->id)
    <tr>
      <td>{!! $meliborne->id !!}</td>
      <td>{!! $meliborne->niveauBatterie !!}%</td>
      <td>{!! $meliborne->idSigfox !!}</td>
      <td>{!! $meliborne->idRucher !!} - {!! $rucher->nom !!}</td>
      <td>
        {!! Form::open(['route' => ['melibornes.destroy', $meliborne->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
          <a href="{!! route('melibornes.show', [$meliborne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{!! route('melibornes.edit', [$meliborne->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
