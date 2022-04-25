<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Auth\Models\Device;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;

/**
 * Class UsersTable.
 */
class DevicesTable extends DataTableComponent
{
    /**
     * @var
     */
    public $status;

  
    /**
     * @return Builder
     */
    public function query(): Builder
    {
       

        return Device::when($this->getFilter('search'), fn ($query, $term) => $query->search($term));
    }

    /**
     * @return array
     */
    public function filters(): array
    {
        return [
            //
        ];
    }

    /**
     * @return array
     */
    public function columns(): array
    {
        return [
            // Column::make(__('Id'))
            //     ->sortable(),
            Column::make(__('Device Name'))
                ->sortable(),
            Column::make(__('Device Model'))
                ->sortable(),
                Column::make(__('Serial Number'))
                ->sortable(),
                Column::make(__('Front Image'))
                ->sortable(),
                Column::make(__('Back Image'))
                ->sortable(),
                Column::make(__('Comments'))
                ->sortable(),
            Column::make(__('Actions')),
        ];
    }

    /**
     * @return string
     */
    public function rowView(): string
    {
        return 'backend.auth.device.includes.row';
    }
}
