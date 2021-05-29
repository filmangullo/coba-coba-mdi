<?php

namespace App\Http\Livewire\Web\Career;

use Livewire\Component;

class Apply extends Component
{
    public $pilihjob;
    public $nama;
    // public $email;
    // public $phone;
    // public $address;
    // public $about;
    // public $why;

    public function submit() {

    }

    public function render()
    {
        return view('livewire.web.career.apply');
    }
}
