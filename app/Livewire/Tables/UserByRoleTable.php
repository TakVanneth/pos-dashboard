<?php

namespace App\Livewire\Tables;

use App\Models\Product;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserByRoleTable extends Component
{
    use WithPagination;

    public $perPage = 5;

    public $search = '';

    public $sortField = 'name';

    public $sortAsc = true;

    public $role = null;

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

    public function mount($role)
    {
        $this->role = $role;
    }

    // public function render()
    // {
    //     return view('livewire.tables.user-by-role-table',[
    //         'users' => User::where('role_id', $this->role->id)
    //             ->search($this->search)
    //             ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
    //             ->paginate($this->perPage)
    //     ]);
    // }
    public function render()
    {
        $query = User::where('role_id', $this->role->id)
            ->search($this->search);

        if (!empty($this->sortField)) {
            $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
        }

        $users = $query->paginate($this->perPage);

        return view('livewire.tables.user-by-role-table', compact('users'));
    }

}
