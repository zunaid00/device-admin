@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Create Device'))

@section('content')


        <x-backend.card>
            <x-slot name="header">
                @lang('Create Device')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.auth.device.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
           
            <form method="post" action="{{ route('admin.auth.device.store') }}" id="form" enctype= multipart/form-data>
                @csrf
                <div >
                <div class="form-group row">
                        <label for="device_name" class="col-md-2 col-form-label">@lang('Device Name')</label>
                        <div class="col-md-10">
                            <input type="text" name="device_name" class="form-control" placeholder="{{ __('Device Name') }}" value="{{ old('device_name') }}" maxlength="100"  />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="device_model" class="col-md-2 col-form-label">@lang('Device Model')</label>
                        <div class="col-md-10">
                            <input type="text" name="device_model" class="form-control" placeholder="{{ __('Device Model') }}" value="{{ old('device_model') }}" maxlength="255"  />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="serial_number" class="col-md-2 col-form-label">@lang('Serial No')</label>
                        <div class="col-md-10">
                            <input type="text" name="serial_number" id="serial_number" class="form-control" placeholder="{{ __('Serial No') }}" maxlength="100"  />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="comment" class="col-md-2 col-form-label">@lang('Comment')</label>

                        <div class="col-md-10">
                           <textarea id="form" name="form" placeholder="{{ __('Comment') }}" maxlength="500" rows="4" cols="50"></textarea>
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="front_image" class="col-md-2 col-form-label">@lang('Front Images')</label>

                        <div class="col-md-10">
                            <input type="file" name="front_image" id="front_image" class="form-control"  />
                        </div>
                    </div><!--form-group-->
                    <div class="form-group row">
                        <label for="back_image" class="col-md-2 col-form-label">@lang('Back Images')</label>

                        <div class="col-md-10">
                            <input type="file" name="back_image" id="back_image" class="form-control"  />
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="sim" class="col-md-2 col-form-label">@lang('Sim Card')</label>

                        <div class="col-md-10">
                            <div class="form-check">
                                <input name="sim_card" id="sim_card" class="form-check-input" type="checkbox" value="1" {{ old('active', true) ? 'checked' : '' }} />
                            </div><!--form-check-->
                        </div>
                    </div><!--form-group-->


                    <div class="form-group row">
                        <label for="charger" class="col-md-2 col-form-label">@lang('Charger')</label>

                        <div class="col-md-10">
                            <div class="form-check">
                                <input name="charger" id="charger" class="form-check-input" type="checkbox" value="1" {{ old('active', true) ? 'checked' : '' }} />
                            </div><!--form-check-->
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="handfree" class="col-md-2 col-form-label">@lang('Handfree')</label>

                        <div class="col-md-10">
                            <div class="form-check">
                                <input name="handfree" id="handfree" class="form-check-input" type="checkbox" value="1" {{ old('active', true) ? 'checked' : '' }} />
                            </div><!--form-check-->
                        </div>
                    </div><!--form-group-->

                    <div class="form-group row">
                        <label for="box" class="col-md-2 col-form-label">@lang('Box')</label>

                        <div class="col-md-10">
                            <div class="form-check">
                                <input name="box" id="box" class="form-check-input" type="checkbox" value="1" {{ old('active', true) ? 'checked' : '' }} />
                            </div><!--form-check-->
                        </div>
                    </div><!--form-group--> 
                 
                </div>

            </x-slot>
                 <x-slot name="footer">
                     <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Device')</button>
                 </x-slot>
        </x-backend.card>
</form>



@endsection
