<table class="table table-responsive" id="users-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>{{ __('tables.name') }}</th>
      <th>E-mail</th>
      <th>{{ __('tables.email_verif') }}</th>
      <th>{{ __('tables.psswd') }}</th>
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


      <td>
        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
        <div class='btn-group'>
          <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
          {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm(__('tables.sure'))"]) !!}
        </div>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
