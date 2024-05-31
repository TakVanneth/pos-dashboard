@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="container-xl">
        @livewire('tables.product-by-unit-table', ['unit' => $unit])
    </div>
</div>
@endsection
