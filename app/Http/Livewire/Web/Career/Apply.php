<?php

namespace App\Http\Livewire\Web\Career;

use Livewire\Component;

class Apply extends Component
{
    public $apply_job;
    public $fullname = "ss";
    // public $email;
    // public $phone;
    // public $address;
    // public $about;
    // public $why;

    public function render()
    {
        return view('livewire.web.career.apply');
    }
}