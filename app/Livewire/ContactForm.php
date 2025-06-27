<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;


class ContactForm extends Component
{

    public $name, $email, $message;

    public function submit(){

        $validation = $this->validate([
            "name"=> "Required",
            "email"=> "Required|email",
            "message"=> "Required|min:5",
        ]);

        Contact::create($validation);

        session()->flash("success","Thanks! Your message has been sent.");

        $this->reset(["name","email","message"]);
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
