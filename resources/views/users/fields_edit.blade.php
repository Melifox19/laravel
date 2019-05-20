<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('tables.name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('tables.psswd')) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Confirm Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', __('tables.psswd_confirm')) !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', __('tables.role')) !!}
    {!! Form::select('role', array('user' => __('tables.apiarist'), 'admin' => __('tables.admin')), null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('tables.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">__('tables.cancel')</a>
</div>
