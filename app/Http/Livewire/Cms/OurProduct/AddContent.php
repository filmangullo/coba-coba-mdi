<?php

namespace App\Http\Livewire\Cms\OurProduct;

use App\Models\OurProduct;
use Livewire\Component;

class AddContent extends Component
{
    public $op;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $description_id;
    public $description_en;
    public $description_cn;
    public $file;
    public $url;

    protected $rules = [
        'title_id' => 'required|min:1',
        'title_en' => 'required|min:1',
        'title_cn' => 'required|min:1',
        'description_id' => 'required|min:1',
        'description_en' => 'required|min:1',
        'description_cn' => 'required|min:1',
        'url'     => 'required',
        'file'     => 'required',
    ];

    public function mount($op)
    {

    }

    public function save()
    {
        $this->validate();

        $file = md5($this->file . microtime()).'.'.$this->file->extension();

        $query = new OurProduct();


    }

    public function render()
    {
        return view('livewire.cms.our-product.add-content');
    }
}
