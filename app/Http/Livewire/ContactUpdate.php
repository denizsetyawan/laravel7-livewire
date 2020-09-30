<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactUpdate extends Component
{
    public $name;
    public $phone;
    public $contactId;
    
    public $listeners = [
        'getContact' => 'showContact'
    ];
    
    public function render()
    {
        return view('livewire.contact-update');
    }
    
    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id'];
    }
}
