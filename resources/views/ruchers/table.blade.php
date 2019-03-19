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

    @if (Auth::user()->role == 'admin')


    @foreach($ruchers as $rucher) <!-- ========== Si l'utilisateur est un admin on affiche tout les ruchers ========== -->

    <tr>
      <td>{!! $rucher->id !!}</td>
      <td>{!! $rucher->nom !!}</td>
      <td>{!! $rucher->idApiculteur !!}</td>
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

    @endforeach <!-- ================================================================================================== -->


    @else

    <?php
    $user = App\User::where('id', Auth::user()->id)->first();
    ?>

    @foreach($user->ruchers as $rucher)  <!-- == Sinon on affiche seulement les ruchers de l'utilisateur en question == -->

    <tr>
      <td>{!! $rucher->id !!}</td>
      <td>{!! $rucher->nom !!}</td>
      <td>{!! $rucher->idApiculteur !!}</td>
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

    @endforeach <!-- ========================================================================================== -->


    @endif



  </tbody>
</table>
