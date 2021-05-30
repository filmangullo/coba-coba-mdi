<?php

namespace App\Http\Livewire\Cms\Gallery;

use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Gallery;

class AddContent extends Component
{
    use WithFileUploads;
    public $image;

    public $img;
    public $is_product = 'false';

    public function mount($image)
    {
        $this->image = null;

        if($image)
        {
            $this->image        = $image;

            $this->is_product   = $this->image->is_product;
        }
    }

    public function save()
    {
        $edit = $this->image ? true : false;

        $rules = [
            'author_id'             => ['required'],
        ];

        if (!$edit) {
            $rules['img'] = ['required', 'image', 'max:1024' ];
        }

        $image = [
            'is_product'        => $this->is_product == 'true' ? true : false,
        ];

        if ($this->img) {
            $image['img'] = 'storage/'. $this->img->store('', 'public');
        }

        if ($edit) {
            $this->handleEventUpload($image);
        } else {
            Gallery::create($image);
        }

        return $this->redirectRoute('cms-gallery.index');
    }

    private function handleEventUpload($image)
    {
        if (isset($image['img'])) {
            Storage::disk('public')->delete(substr($this->image->img, 8));
        }

        Gallery::find($this->image->id)
                   ->update($image);
    }

    public function render()
    {
        return view('livewire.cms.gallery.add-content');
    }
}
