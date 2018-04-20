@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card-deck mb-3 text-center">

      {{-- Starers pakket --}}
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Starters</h4>
        </div>
        <div class="card-body">
          <h2 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h2>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Gratis social wifi</li>
            <li>Dropbox</li>
            <li>Email support</li>
          </ul>
          <button type="button" onclick="window.location='{{ url("order/1") }}'" class="btn btn-lg btn-block btn-outline-primary">Meld je nu aan!</button>
        </div>
      </div>

      {{-- Ondernemers pakket --}}
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Ondernemers</h4>
        </div>
        <div class="card-body">
          <h2 class="card-title pricing-card-title">$55 <small class="text-muted">/ mo</small></h2>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Compleet wifi pakkket</li>
            <li>Telefoon en internet</li>
            <li>Email en telefonisch support</li>
            <li>Ravonet Cloude solutions</li>
          </ul>
          <button type="button" onclick="window.location='{{ url("order/2") }}'" class="btn btn-lg btn-block btn-primary">Get started</button>
        </div>
      </div>

      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h2 class="card-title pricing-card-title">Op aanvraag</h2>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
        </div>
      </div>

    </div> {{-- Cart container --}}
  </div> {{-- Cart container --}}
</div> {{-- Container --}}
@endsection
