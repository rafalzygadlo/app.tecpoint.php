<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\MultiSelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;

class UserTable extends DataTableComponent
{
    public $columnSearch = [
        'first_name' => null,
        'email' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setFooterStatus(true);
        $this->setFooterStatus(false);
        $this->setFooterDisabled();
        $this->setSingleSortingDisabled();
        $this->setTableAttributes([
            'default' => false,
            'class' => 'table table-bordered table-sm',
          ]);
        //$this->setReorderStatus(true);    
        //$this->setHideBulkActionsWhenEmptyEnabled();
    }


    public function filters(): array
    {
        return [
        
            SelectFilter::make('status')
                ->setFilterPillTitle('User Status')
                ->setFilterPillValues([
                    '1' => 'Active',
                    '0' => 'Inactive',
                ])
                ->options([
                    '' => 'All',
                    '1' => 'Yes',
                    '0' => 'No',
                ])
                ->filter(function(Builder $builder, string $value) {

                        $builder->where('status', $value);
 
                }),
            DateFilter::make('begin date')
                ->filter(function(Builder $builder, string $value) {
                    $builder->where('begin_date', '=', $value);
                }),
           
           
        ];
    }

    public function columns(): array
    {
    
        return [
            Column::make('id'),
            Column::make('avatar')
                ->label(fn($row) => mb_substr($row->first_name, 0, 1) . mb_substr($row->last_name, 0, 1) ),
            Column::make('hr')
                ->sortable()
                ->searchable(),
            Column::make('first_name')
                ->sortable()
                ->searchable()
                //->secondaryHeader(function() {
                //    return view('tables.cells.input-search', ['field' => 'first_name', 'columnSearch' => $this->columnSearch]);
                //})
                ->footer(function($rows) {
                    return '<strong>Name Footer</strong>';
                })
                ,
            Column::make('last_name')
                ->sortable()
                ->searchable(),
            Column::make('birth_date')
                ->sortable()
                ->searchable(),
            Column::make('email')
                ->sortable()
                ->searchable(),
            BooleanColumn::make('status')
                ->sortable()
                ->searchable(),
            Column::make('created_at')
                ->sortable()
                ->searchable(),
            Column::make('updated_at')
                ->sortable()
                ->searchable()

        ];
    }

    public function builder(): Builder
    {
        return User::query()
            ->select(); // Select some things
    }


    public function bulkActions(): array
    {
        return [
            'delete' => 'Delete',
            'activate' => 'Activate',
            'deactivate' => 'Deactivate'
        ];
    }

    public function delete()
    {
        User::whereIn('id', $this->getSelected())->delete();

        $this->clearSelected();
    }
    
    public function activate()
    {
        User::whereIn('id', $this->getSelected())->update(['status' => true]);

        $this->clearSelected();
    }

    public function deactivate()
    {
        User::whereIn('id', $this->getSelected())->update(['status' => false]);

        $this->clearSelected();
    }

    public function query(): Builder
    {
        return Employee::query();
    }

}
