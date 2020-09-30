<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactCreate extends Component
{
    public $name;
    public $phone;
    
    public function render()
    {
        return view('livewire.contact-create');
    }
    
    public function store()
    {
        $contact = Contact::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);
        
        $this->resetInput();
        
        $this->emit('contactStored', $contact);
    }
    
    public function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
