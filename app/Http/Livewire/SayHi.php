<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHi extends Component
{
    public $contact;

    // We don't need to declare a method to do simple tasks, we can use the magic methods
    protected $listeners = ['refreshChildren' => '$refresh'];

    public function mount($contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
