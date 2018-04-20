@extends('layouts.app') @section('content')
<div class="container">

  {!! Form::open(['url' => 'order/create', 'class' => 'form-3 w-clearfix']) !!}
    <form>

      <!-- TODO: Kijk of je een span kan inline kan toevoegen.-->
      <div class="form-check">
        {{ Form::checkbox('terms', '', ['class' => 'form-check-input']) }}
        {{ Form::label('terms', 'Ik begrijp en ga akkoord met de voorwaarden', ['class' => 'form-check-label']) }}
      </div>

      {{ Form::submit('AFREKENEN',['class' => 'btn btn-primary']) }}
    </form>
  {!! Form::close() !!}

</div> {{-- Container --}} @endsection
