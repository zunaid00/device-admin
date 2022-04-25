@extends('backend.layouts.app')

@section('title', __('Deleted Devise'))

@section('breadcrumb-links')
    @include('backend.auth.devise.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Deleted Devise')
        </x-slot>

        <x-slot name="body">
            <livewire:backend.users-table status="deleted" />
        </x-slot>
    </x-backend.card>
@endsection
