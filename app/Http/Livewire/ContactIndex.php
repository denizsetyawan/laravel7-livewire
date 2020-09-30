<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

class ContactIndex extends Component
{
    protected $listeners = [
        'contactStored' => 'handleStored'
    ];
    
    public $contact;
    
    public function render()
    {
        $this->contact = Contact::latest()->get();
        return view('livewire.contact-index');
    }
    
    public function handleStored($contact)
    {
        //dd($contact);
    }
}
