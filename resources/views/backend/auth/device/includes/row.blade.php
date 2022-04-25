<!-- <x-livewire-tables::bs4.table.cell>
{{ $row->id }}
</x-livewire-tables::bs4.table.cell> -->

<x-livewire-tables::bs4.table.cell>
    {{ $row->device_name }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
   {{ $row->device_model }}
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
{{$row->serial_number}}
</x-livewire-tables::bs4.table.cell>


<x-livewire-tables::bs4.table.cell>
   <a href="{{ asset('uploads/front_image/'.$row->front_image) }}" target="_blank">
    <image src="{{ asset('uploads/front_image/'.$row->front_image) }}" style="width:50px">
</x-livewire-tables::bs4.table.cell>

<x-livewire-tables::bs4.table.cell>
   <a href="{{ asset('uploads/back_image/'.$row->back_image) }}" target="_blank">
    <image src="{{ asset('uploads/back_image/'.$row->back_image) }}" style="width: 50px;">
</x-livewire-tables::bs4.table.cell>


<x-livewire-tables::bs4.table.cell>
{{$row->comments}}
</x-livewire-tables::bs4.table.cell>




<x-livewire-tables::bs4.table.cell>
    
<x-utils.view-button :href="route('admin.auth.device.show', $row)" />
<x-utils.edit-button :href="route('admin.auth.device.edit', $row)" />
<x-utils.delete-button :href="route('admin.auth.device.destroy', $row)" />

</x-livewire-tables::bs4.table.cell>


