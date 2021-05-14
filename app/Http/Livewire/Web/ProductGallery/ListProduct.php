<?php

namespace App\Http\Livewire\Web\ProductGallery;

use Livewire\Component;
use App\Models\Gallery;
class ListProduct extends Component
{
    public $preview;

    public function mount()
    {
        if(empty($preview))
        {
            $this->preview = Gallery::where('is_product', true)
                                    ->orderBy('created_at', 'desc')
                                    ->first();
        }

    }

    public function render()
    {
        return view('livewire.web.product-gallery.list-product');
    }
}
