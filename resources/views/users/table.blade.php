<table class="table table-responsive" id="users-table">
  <thead>
    <tr>
      <th>ID
        <th>Nom</th>
        <th>E-mail</th>
        <th>Email verifié</th>
        <th>Mot de passe</th>
        <th>Jeton mémoire</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{!! $user->id !!}</td>
        <td>{!! $user->name !!}</td>
        <td>{!! $user->email !!}</td>

        @if (is_null($user->email_verified_at))
        <td> &#10005; </td>
        @else
        <td> &#10003; </td>
        @endif
        <td>*********</td>
        <td>{!! $user->remember_token !!}</td>


        <td>
          {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
          <div class='btn-group'>
            <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
          </div>
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
