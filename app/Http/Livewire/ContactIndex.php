<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactIndex extends Component
{
    public $contact;
    
    public function render()
    {
        $this->contact = Contact::latest()->get();
        return view('livewire.contact-index');
    }
}
