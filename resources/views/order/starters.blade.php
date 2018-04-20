@extends('layouts.app')
@section('content')
<div class="container">

  {!! Form::open(['url' => 'buy/submit', 'class' => 'form-3 w-clearfix']) !!}

					<!-- Amount to buy Euro -->
					{{ Form::text('price', '', ['class' => 'euro-field w-input', 'placeholder' => 'Euro']) }}

					<!-- Payment options. -->
					{!! Form::select('issuer', $issuer, null, ['class'=>'method-field w-select']) !!}

					<!-- Wallet address  -->
					{{ Form::text('to_address', '', ['class' => 'wallet-field w-input', 'placeholder' => 'Uw bitcoinadres']) }}

					<!-- volledige naam van de klant  -->
					{{ Form::text('client_full_name', '', ['class' => 'wallet-field w-input', 'placeholder' => 'Uw volledige naam']) }}

					<!-- Email addres van de klant  -->
					{{ Form::text('client_email', '', ['class' => 'wallet-field w-input', 'placeholder' => 'Uw email']) }}

					<!-- TODO: Kijk of je een span kan inline kan toevoegen.-->
					{{ Form::checkbox('terms', '', ['class' => 'w-checkbox w-checkbox-input']) }}
					{{ Form::label('terms', 'Ik begrijp dat ik bitcoins koop en ga akkoord met de voorwaarden', ['class' => 'field-label-3 w-form-label']) }}
					{{ Form::submit('AFREKENEN',['class' => 'submit w-button']) }}

				{!! Form::close() !!}

</div> {{-- Container --}}
@endsection
