@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
<div id="map"></div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initGoogleMaps();
  });
</script>
@endpush