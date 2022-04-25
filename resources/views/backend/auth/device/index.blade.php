@extends('backend.layouts.app')

@section('title', __('Device Management'))

@section('breadcrumb-links')
    @include('backend.auth.device.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Device Management')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.auth.device.create')"
                    :text="__('Create Device')"
                />
            </x-slot>
        @endif

        <x-slot name="body">

        <livewire:backend.devices-table />
        </x-slot>
    </x-backend.card>
@endsection
