@extends('layouts.app')
@section('content')

<div class="container">

  <div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Het starters pakkket</h3>
  </div>
  <div class="card-block">

    {!! Form::open(['url' => 'order', 'class' => '']) !!}
      <form>

        {{ Form::hidden('pakket', '1') }}
        {{ Form::hidden('user_id', '1') }}
        <h3 class="panel-title">Maak gebruik van onze extra's</h3>
        <div class="checkbox">
          {{ Form::hidden('sneller_internet', '0') }}
          {{ Form::checkbox('sneller_internet', '1') }}
          {{ Form::label('sneller_internet', 'Ik wil graag het snelste internet') }}
        </div>

        <div class="checkbox">
          {{ Form::hidden('wifi', '0') }}
          {{ Form::checkbox('wifi', '1') }}
          {{ Form::label('wifi', 'Ik wil extra wifi') }}
        </div>

        <div class="checkbox">
          {{ Form::hidden('online_telefooncentrale', '0') }}
          {{ Form::checkbox('online_telefooncentrale', '1') }}
          {{ Form::label('online_telefooncentrale', 'Ik wil graag altijd iemand kunnen berijken') }}
        </div>

        <div class="checkbox">
          {{ Form::hidden('office_365', '0') }}
          {{ Form::checkbox('office_365', '1') }}
          {{ Form::label('office_365', 'Ik wil offcie 365 erbij krijgen') }}
        </div>
        <!-- TODO: Kijk of je een span kan inline kan toevoegen.-->
        <div class="checkbox">
          {{ Form::checkbox('terms', '') }}
          {{ Form::label('terms', 'Ik begrijp en ga akkoord met de voorwaarden', ['class' => 'form-check-label']) }}
        </div>

        {{ Form::submit('AFREKENEN',['class' => 'btn btn-primary']) }}
      </form>
    {!! Form::close() !!}

  </div> {{-- panel-body --}}
</div> {{-- panel panel-default --}}

</div> {{-- Container --}}
@endsection
