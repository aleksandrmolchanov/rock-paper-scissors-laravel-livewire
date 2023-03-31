<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserName extends Component
{
    public string $name = '';

    public function mount()
    {
        $this->name = session('userName', '');
    }

    public function updatedName()
    {
        session(['userName' => $this->name]);
    }

    public function render()
    {
        return view('livewire.user-name');
    }
}
