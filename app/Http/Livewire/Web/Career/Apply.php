<?php

namespace App\Http\Livewire\Web\Career;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Mail\CareerMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;

class Apply extends Component
{
    use WithFileUploads;

    public $apply;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $about;
    public $why;
    public $filecv;

    public function submit() {
        
        $details = [
            'name' => $this->name,
            'email' => $this->email,
            'apply' => $this->apply,
            'phone' => $this->phone,
            'address' => $this->address,
            'about' => $this->about,
            'why' => $this->why,
            'filecv' => $this->filecv->getRealPath(),
        ];

        Mail::to('sinjiprasetio2690@gmail.com')->send(new CareerMail($details));


    }

    public function render()
    {
        return view('livewire.web.career.apply');
    }
}
