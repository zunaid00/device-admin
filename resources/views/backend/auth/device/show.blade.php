@extends('backend.layouts.app')

@section('title', __('View Device'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Device')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.auth.device.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">

            <table class="table table-hover">
                <tr>
                    <th>@lang('Device Id')</th>
                    <td>{{ $device->id }}</td>
                </tr>

                <tr>
                    <th>@lang('Device Name')</th>
                    <td>{{$device->device_name}}</td>
                </tr>
                 <tr>
                    <th>@lang('Front Image')</th>
                    <td><img src="/uploads/front_image/{{ $device->front_image }}" width="100px"></td>
                    
                </tr>
                <tr>
                    <th>@lang('Back Image')</th>
                    <td><img src="/uploads/back_image/{{ $device->back_image }}" width="100px"></td>
                    
                </tr>

                <tr>
                    <th>@lang('Device Model')</th>
                    <td>{{ $device->device_model }}</td>
                </tr>

                <tr>
                    <th>@lang('Serial Number')</th>
                    <td>{{ $device->serial_number }}</td>
                </tr>

                <tr>
                    <th>@lang('Comments')</th>
                    <td>{{ $device->comments }}</td>
                </tr>
                <tr>
                    <th>@lang('Sim Card')</th>
                    <td>{{ $device->sim_card }}</td>
                </tr>
                <tr>
                    <th>@lang('Charger')</th>
                    <td>{{ $device->charger }}</td>
                </tr>
                <tr>
                    <th>@lang('Handfree')</th>
                    <td>{{ $device->handfree }}</td>
                </tr>
                <tr>
                    <th>@lang('Box')</th>
                    <td>{{ $device->box }}</td>
                    
                </tr>
               
            </table>
            
        <x-slot name="footer">
            <small class="float-right text-muted">
               
            </small>
        </x-slot>
        </x-slot>
    </x-backend.card>
@endsection
