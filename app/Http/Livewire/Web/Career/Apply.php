<?php

namespace App\Http\Livewire\Web\Career;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Mail\CareerMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificationMail;
use App\Models\Career;

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
    public $success = false;

    protected $rules = [
        'name' =>   'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'address' => 'required|min:10',
        'about' => 'required|min:15|max:300',
        'why' => 'required|min:15|max:300',
        'filecv' => 'required|mimes:pdf|max:1024',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

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

        Mail::to('webmailmarkd@gmail.com')->cc(['daniel@dynamics.co.id'])->send(new CareerMail($details));

        $details = [
            'text'       => 'Hi, '.$this->name.', thank you for submit your job application to us, We will process your application shortly.<br>We will inform you soon for your application updates.'
        ];
        // dd($details);
        Mail::to($this->email)->send(new NotificationMail($details));

        $this->success = true;

    }

    public function render()
    {
        $job = Career::where('active', true)->orderBy('publish_date', 'desc')->get();
        return view('livewire.web.career.apply', [
            'job' => $job
        ]);
    }
}
