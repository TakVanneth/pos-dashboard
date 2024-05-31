@extends('layouts.app')

@section('content')
<div class="page-body">
    <div class="container-xl">
        @livewire('tables.user-by-role-table', ['role' => $role])
    </div>
</div>
@endsection
