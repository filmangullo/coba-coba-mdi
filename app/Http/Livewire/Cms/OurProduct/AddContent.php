<?php

namespace App\Http\Livewire\Cms\OurProduct;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\OurProduct;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;
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
        'url'     => 'required'
    ];

    public function mount($op)
    {
        $this->op = null;

        if($op)
        {
            $this->op = $op;

            $this->title_id         = $this->op->title_id;
            $this->title_en         = $this->op->title_en;
            $this->title_cn         = $this->op->title_cn;
            $this->description_id   = $this->op->description_id;
            $this->description_en   = $this->op->description_en;
            $this->description_cn   = $this->op->description_cn;
            $this->url              = $this->op->url;
        }
    }

    public function save()
    {
        $edit = $this->op ? true : false;

        if (!$edit) {
            $rules['file'] = ['required', 'image', 'max:1024' ];
        }

        $this->validate();

        $query = [
            'title_id'            => $this->title_id,
            'title_en'            => $this->title_en,
            'title_cn'            => $this->title_cn,
            'description_id'      => $this->description_id,
            'description_en'      => $this->description_en,
            'description_cn'      => $this->description_cn,
            'url'                 => $this->url,
        ];

        if ($this->file) {
            $file = md5($this->file . microtime()).'.'.$this->file->extension();
            $query['file'] = 'storage/'.$file;

            $this->file->storeAs('public', $file);
        }

        if ($edit) {
            $this->handleEventUpload($query);
        } else {
            $this->file->storeAs('public', $file);
            OurProduct::create($query);
        }

        return redirect()->route('cms-op.index');
    }

    private function handleEventUpload($query)
    {
        if (isset($query['img'])) {
            if (substr($this->op->file, 0, 8) == 'storage/'){
                Storage::delete('public/'.substr($this->op->file, 8));
            } else {
                Storage::delete('public/'.$this->op->file);
            }
        }

        OurProduct::find($this->op->id)
                          ->update($query);
    }

    public function render()
    {
        return view('livewire.cms.our-product.add-content');
    }
}
