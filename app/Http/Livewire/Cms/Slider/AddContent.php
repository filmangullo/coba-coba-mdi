<?php

namespace App\Http\Livewire\Cms\Slider;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Slider;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;
    public $slider;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $description_id;
    public $description_en;
    public $description_cn;
    public $button_id;
    public $button_en;
    public $button_cn;
    public $button1_id;
    public $button1_en;
    public $button1_cn;
    public $url;
    public $url1;
    public $file;
    public $active = true;

    protected $rules = [
        'title_id'          => 'required|min:1',
        'title_en'          => 'required|min:1',
        'title_cn'          => 'required|min:1',
        'description_id'    => 'required|min:1',
        'description_en'    => 'required|min:1',
        'description_cn'    => 'required|min:1',
    ];

    public function mount($slider)
    {
        $this->slider = null;

        if($slider)
        {
            $this->slider = $slider;

            $this->title_id         = $this->slider->title_id;
            $this->title_en         = $this->slider->title_en;
            $this->title_cn         = $this->slider->title_cn;
            $this->description_id   = $this->slider->description_id;
            $this->description_en   = $this->slider->description_en;
            $this->description_cn   = $this->slider->description_cn;
            $this->button_id        = $this->slider->button_id;
            $this->button_en        = $this->slider->button_en;
            $this->button_cn        = $this->slider->button_cn;
            $this->button1_id       = $this->slider->button1_id;
            $this->button1_en       = $this->slider->button1_en;
            $this->button1_cn       = $this->slider->button1_cn;
            $this->url              = $this->slider->url;
            $this->url1             = $this->slider->url1;
        }
    }

    public function save()
    {
        $edit = $this->slider ? true : false;

        if (!$edit) {
            $rules['file'] = ['required', 'image', 'max:1024' ];
        }

        $this->validate();

        $query = [
            'title_id'              => $this->title_id,
            'title_en'              => $this->title_en,
            'title_cn'              => $this->title_cn,
            'description_id'        => $this->description_id,
            'description_en'        => $this->description_en,
            'description_cn'        => $this->description_cn,
            'button_id'             => $this->button_id,
            'button_en'             => $this->button_en,
            'button_cn'             => $this->button_cn,
            'button1_id'            => $this->button1_id,
            'button1_en'            => $this->button1_en,
            'button1_cn'            => $this->button1_cn,
            'url'                   => $this->url,
            'url1'                  => $this->url1,
        ];

        if ($this->file) {
            $file = md5($this->file . microtime()).'.'.$this->file->extension();
            $query['file'] = 'storage/'.$file;

            $this->file->storeAs('public', $file);
        }

        if ($edit) {
            $this->handleEventUpload($query);
        } else {
            Slider::create($query);
        }

        return redirect()->route('cms-slider.index');
    }

    private function handleEventUpload($query)
    {
        if (isset($query['file'])) {
            if (substr($this->slider->file, 0, 8) == 'storage/'){
                Storage::delete('public/'.substr($this->slider->file, 8));
            } else {
                Storage::delete('public/'.$this->slider->file);
            }
        }

        Slider::find($this->slider->id)
                          ->update($query);
    }


    public function render()
    {
        return view('livewire.cms.slider.add-content');
    }
}
