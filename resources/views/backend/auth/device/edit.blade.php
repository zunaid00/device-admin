@inject('model', '\App\Domains\Auth\Models\Device')

@extends('backend.layouts.app')

@section('title', __('Update Device'))

@section('content')
   
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Device')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.auth.device.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
            <form method="POST" action="{{route('admin.auth.device.update',$device->id) }}" id="form" name ="form" enctype="multipart/form-data"> 
                      @csrf
                      @method('PUT')

                    <div class="form-group row">
                        <label for="device_name" class="col-md-2 col-form-label">@lang('Device Name')</label>

                        <div class="col-md-10">
                            <input type="text" name="device_name" class="form-control" placeholder="{{ __('Device Name') }}" value="{{ old('device_name') ?? $device->device_name }}" />
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="device_model" class="col-md-2 col-form-label">@lang('Device Model')</label>

                        <div class="col-md-10">
                            <input type="text" name="device_model" class="form-control" placeholder="{{ __('Device Model') }}" value="{{ old('device_model') ?? $device->device_model }}" />
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="front_image" class="col-md-2 col-form-label">@lang('Front Images')</label>

                        <div class="col-md-10">
                        <td><img src="/uploads/front_image/{{ $device->front_image }}" width="100px"></td>
                            <input type="file" name="front_image" id="front_image" class="form-control" />  
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="back_image" class="col-md-2 col-form-label">@lang('Back Images')</label>

                        <div class="col-md-10">
                        <td><img src="/uploads/back_image/{{ $device->back_image }}" width="100px"></td>
                            <input type="file" name="back_image" id="back_image" class="form-control"  />
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="serial_number" class="col-md-2 col-form-label">@lang('Serial No')</label>

                        <div class="col-md-10">
                            <input type="text" name="serial_number" class="form-control" placeholder="{{ __('Serial No') }}" value="{{ old('serial_number') ?? $device->serial_number }}" />
                        </div>
                    </div><!--form-group-->
                   
                   
                  

                    <div class="form-group row">
                        <label for="comment" class="col-md-2 col-form-label">@lang('Comment')</label>

                        <div class="col-md-10">
                           <textarea id="comments" name="comments" placeholder="{{ __('Comment') }}" maxlength="500" rows="4" cols="50">{{$device->comments}}</textarea>
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">@lang('Sim')</label>

                        <div class="col-md-10">
                            <input type="text" name="sim_card" class="form-control" placeholder="{{ __('Sim Card') }}" value="{{ old('sim_card') ?? $device->sim_card }}" />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">@lang('Charger')</label>

                        <div class="col-md-10">
                            <input type="text" name="charger" class="form-control" placeholder="{{ __('Charger') }}" value="{{ old('charger') ?? $device->charger }}" />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">@lang('Handfree')</label>

                        <div class="col-md-10">
                            <input type="text" name="handfree" class="form-control" placeholder="{{ __('Handfree') }}" value="{{ old('handfree') ?? $device->handfree }}" />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="" class="col-md-2 col-form-label">@lang('Box')</label>

                        <div class="col-md-10">
                            <input type="text" name="box" class="form-control" placeholder="{{ __('Box') }}" value="{{ old('box') ?? $device->box }}" />
                        </div>
                    </div>
              
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Device')</button>
            </x-slot>
        </x-backend.card>
</form>
@endsection
