<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Tables extends Component
{
    public function render()
    {
        // ambil semua data user
        $users = User::all();
        // ambil semua data buah
        $fruits = \App\Models\Buah::all();

        // kirim ke view
        return view('livewire.tables', [
            'users' => $users,
            'fruits' => $fruits
        ]);
    }
}
