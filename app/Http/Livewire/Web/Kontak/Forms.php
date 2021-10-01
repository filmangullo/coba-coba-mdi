<?php

namespace App\Http\Livewire\Web\Kontak;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Message;

class Forms extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $currentUrl;

    protected $rules = [
        'name'              => ['required'],
        'email'             => ['required'],
        'subject'           => ['required'],
        'message'           => ['required'],
    ];

    public function save()
    {


        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->name     = '';
        $this->email    = '';
        $this->subject  = '';
        $this->message  = '';

        session()->flash('success', 'success');
        redirect($this->currentUrl);
    }

    public function mount() {
        $this->currentUrl = url()->current();
    }

    public function render()
    {
        return view('livewire.web.kontak.forms');
    }
}
