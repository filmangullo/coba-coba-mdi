<?php

namespace App\Http\Livewire\Web\Kontak;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Message;
use Captcha;

class Forms extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $currentUrl;
    public $captcha;
    public $captcha_img;

    protected $rules = [
        'name'              => ['required'],
        'email'             => ['required','email'],
        'subject'           => ['required'],
        'message'           => ['required'],
        'captcha'           => ['required', 'captcha'],
    ];

    public function reloadCaptcha() {
        $this->captcha_img = Captcha::img();
    }

    public function save()
    {


        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        session()->flash('success', 'success');
        redirect($this->currentUrl);
    }

    public function mount() {
        $this->currentUrl = url()->current();
        $this->captcha_img = Captcha::img();
    }

    public function render()
    {
        return view('livewire.web.kontak.forms');
    }
}
