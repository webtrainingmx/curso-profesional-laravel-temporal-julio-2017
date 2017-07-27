@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>Create museum</h1>
        {!! Form::open(['route' => 'museums.store']) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {{ Form::label('name', 'Name: ') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            @if ($errors->has('name'))
                <span class="help-block">
                    @foreach ($errors->get('name') as $message)
                        <strong>{{ $message }}</strong>
                    @endforeach
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {{ Form::label('description', 'Description: ') }}
            {{ Form::textarea('description', null, ['class' => 'form-control']) }}

            @if ($errors->has('description'))
                <span class="help-block">
                    @foreach ($errors->get('description') as $message)
                        <strong>{{ $message }}</strong>
                    @endforeach
                </span>
            @endif
        </div>
        {{ Form::submit('Click Me!', ['class'=>'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection