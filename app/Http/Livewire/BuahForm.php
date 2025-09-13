<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Buah;

class BuahForm extends Component
{
    public $nama_buah;
    public $stok;
    public $harga;
    public $satuan = 'kg';
    public $deskripsi;

    protected $rules = [
        'nama_buah' => 'required|string|max:50|unique:buah,nama_buah',
        'stok' => 'required|integer|min:0',
        'harga' => 'required|numeric|min:0',
        'satuan' => 'required|string|max:20',
        'deskripsi' => 'nullable|string',
    ];

    public function simpan()
    {
        $this->validate();

        Buah::create([
            'nama_buah' => $this->nama_buah,
            'stok' => $this->stok,
            'harga' => $this->harga,
            'satuan' => $this->satuan,
            'deskripsi' => $this->deskripsi,
        ]);

        session()->flash('success', 'Data buah berhasil ditambahkan!');

        // reset form
        $this->reset();
    }

    public function render()
    {
        return view('livewire.buah-form');
    }
}

