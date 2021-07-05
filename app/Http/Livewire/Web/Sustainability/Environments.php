<?php

namespace App\Http\Livewire\Web\Sustainability;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Environment;

class Environments extends Component
{
    use WithPagination;
    public $nowPreview;

    public function mount()
    {
        if(!$this->nowPreview)
        {
            $this->nowPreview = Environment::orderBy('created_at', 'desc')->first();

            if($this->nowPreview) {
                $this->nowPreview = $this->nowPreview->img;
            } else {
                $this->nowPreview = null;
            }
        }
    }

    public function preview($img)
    {
        $this->nowPreview = $img;
    }

    public function render()
    {
        $env =  Environment::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.web.sustainability.environments', [
            'env' => $env
        ]);
    }
}
