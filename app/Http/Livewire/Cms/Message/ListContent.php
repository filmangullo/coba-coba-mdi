<?php

namespace App\Http\Livewire\Cms\Message;

use App\Models\Message;
use Livewire\Component;

class ListContent extends Component
{
    public $countData = 15;
    public $showMessage;

    public function message($id)
    {
        $this->showMessage = Message::findOrFail($id);
    }

    public function more()
    {
        $this->countData    += 5;
    }
    public function render()
    {

        return view('livewire.cms.message.list-content', [
            'message'       => Message::orderBy('created_at', 'desc')->paginate($this->countData)
        ]);
    }
}
