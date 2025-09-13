<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Profile extends Component
{
    public function render()
    {
        // ambil semua data user
        $users = User::all();

        // kirim ke view
        return view('livewire.profile', [
            'users' => $users
        ]);
    }
}

