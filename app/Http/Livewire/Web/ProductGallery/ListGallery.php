<?php

namespace App\Http\Livewire\Web\ProductGallery;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Gallery;

class ListGallery extends Component
{
    public function render()
    {
        return view('livewire.web.product-gallery.list-gallery', [
            'gallery'       => Gallery::where('is_product', false)->get()
        ]);
    }
}
