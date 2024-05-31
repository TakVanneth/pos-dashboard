<?php

namespace App\Livewire\Tables;

use Livewire\Component;
use App\Models\Role;
use Livewire\WithPagination;

class RoleTable extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $search = '';

    public $sortField = 'position';

    public $sortAsc = false;

    public function sortBy($field): void
    {
        if($this->sortField === $field)
        {
            $this->sortAsc = ! $this->sortAsc;

        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
    
    public function render()
    {
        return view('livewire.tables.role-table', [
            'roles' => Role::select(['id', 'position'])
                ->search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage)
        ]);
    }
}
