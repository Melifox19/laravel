<div class="form-group">
  {!! Form::label('', 'Liste des ruches :') !!}


  <table class="table table-responsive" id="ruchers-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Date de création</th>
        <th>Dernière modification</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user->ruchers as $rucher)
      <tr>
        <td>{!! $rucher->id !!}</td>
        <td>{!! $rucher->nom !!}</td>
        <td>{!! $rucher->created_at !!}</td>
        <td>{!! $rucher->updated_at !!}</td>
        <td>

          {!! Form::open(['route' => ['ruchers.destroy', $rucher->id], 'method' => 'delete']) !!}
          <div class='btn-group'>
            <a href="{!! route('ruchers.show', [$rucher->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          </div>
          {!! Form::close() !!}
        </td>
      </tr>

      <tr>
        @foreach($rucher->ruches as $ruche)
        <td>
          {!! $ruche->id !!} <br />

          <div class='btn-group'>
            <a href="{!! route('ruches.show', [$ruche->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          </div>
        </td>
        @endforeach
      </tr>

      @endforeach
    </tbody>
  </table>
</div>
