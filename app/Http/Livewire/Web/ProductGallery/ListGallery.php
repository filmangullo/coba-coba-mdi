<?php

namespace App\Http\Livewire\Web\ProductGallery;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Gallery;

class ListGallery extends Component
{
    use WithPagination;

    public $imgModalSrc;
    public $imgModal =false;

    public function showImg($img)
    {
        $this->imgModalSrc  = $img;
        $this->imgModal     = true;
    }
    public function render()
    {

        return view('livewire.web.product-gallery.list-gallery', [
            'gallery'       => Gallery::where('is_product', false)->orderBy('created_at', 'desc')->paginate(8)
        ]);
    }
}
