<link href="{!! asset('css/users_show.css') !!}" media="all" rel="stylesheet" type="text/css" />

<div class="form-group">
  {!! Form::label('', __('tables.list_apiary')) !!}


  <table class="table table-responsive" id="ruchers-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>{{ __('tables.name')}}</th>
        <th colspan="3"> {{ __('tables.see_apiary')}} </th>
      </tr>
    </thead>
    <tbody>
      @foreach($user->ruchers as $rucher)
      <div class="rucher_case">
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

        <tr class="allRuche_case" >
          @foreach($rucher->ruches as $ruche)
          <td class="ruche_case">
            <?php if (isset($ruche->addrMelinet))
            { ?>
              Ruche : {!! $rucher->id !!}-{!! $ruche->addrMelinet !!} <?php
            }
            else
            { ?>
              Melilabo : {!! $rucher->id !!}-{!! $ruche->idSigfox !!} <?php
            } ?>
            <div class='btn-group'>
              <a href="{!! route('ruches.show', [$ruche->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
            </div>
          </td>
          @endforeach
        </tr>
      </div>

      @endforeach
    </tbody>
  </table>
</div>
