<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class HelloWorld extends Component
{

    public $contacts;
    
    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function removeContact($id)
    {
        
        // Deleting with eloquent
        $deletedContact = Contact::whereId($id)->first()->delete();
        // dump($deletedContact);

        // Saving the new set of contacts to show it on the list
        $this->contacts = Contact::all();
    }

    public function updated()
    {
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
