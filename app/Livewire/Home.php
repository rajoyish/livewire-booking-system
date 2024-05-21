<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        dd(Employee::find(2)->services);

        return view('livewire.home');
    }
}
