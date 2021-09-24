<?php

namespace App\Http\Livewire\Cms\Slider;

use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Slider;

class ListContent extends Component
{
    use WithPagination;

    public $deleteSliderModal = false;
    public $deleteSliderId;

    public function openDeleteSliderModal($id)
    {
        $this->deleteSliderId = $id;
        $this->deleteSliderModal = true;
    }

    public function closeDeleteSliderModal()
    {
        $this->deleteSliderId = null;
        $this->deleteSliderModal = false;
    }

    public function deleteSlider()
    {
        $query = Slider::findOrFail($this->deleteSliderId);

        if (substr($query->file, 0, 8) == 'storage/'){
            Storage::delete('public/'.substr($query->file, 8));
        } else {
            Storage::delete('public/'.$query->file);
        }

        $query->delete();

        $this->deleteSliderId = null;
        $this->closeDeleteSliderModal();
    }

    public function render()
    {
        $sliders = Slider::orderBy('created_at', 'asc')->paginate(6);
        return view('livewire.cms.slider.list-content', [
            'sliders' => $sliders,
        ]);
    }
}
