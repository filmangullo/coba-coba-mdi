<?php

namespace App\Http\Livewire\Web\ProductGallery;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Gallery;
class ListProduct extends Component
{
    public $preview;

    use WithPagination;
    public $nowPreview;

    public function mount()
    {
        if(!$this->nowPreview)
        {
            $this->nowPreview = Gallery::where('is_product', true)
                                    ->orderBy('created_at', 'desc')
                                    ->first()->img;
        }
    }

    public function preview($img)
    {
        $this->nowPreview = $img;
    }

    public function render()
    {
        return view('livewire.web.product-gallery.list-product', [
            'product'       => Gallery::where('is_product', true)->paginate(8)
        ]);
    }
}
