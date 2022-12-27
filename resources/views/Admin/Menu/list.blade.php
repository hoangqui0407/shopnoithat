@extends('Admin.main')

@section('content')
@include('Admin.Users.alert')
<div class="overflow-x-auto">
    <button class=>test</button>
<table class="table">
    <thead>
        <tr>
            <th class="whitespace-nowrap">ID</th>
            <th class="whitespace-nowrap">Name</th>
            <th class="whitespace-nowrap">Active</th>
            <th class="whitespace-nowrap">Update</th>
            <th class="whitespace-nowrap">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        {!! \App\Helpers\helper::menu($menus) !!}
    </tbody>
</table>
</div>
@endsection

