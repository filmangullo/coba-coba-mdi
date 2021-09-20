<?php

namespace App\Http\Livewire\Cms\PublicExpose;

use App\Models\PublicExposeYear;
use Livewire\WithFileUploads;
use App\Models\PublicExpose;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;

    public $pe;
    public $years;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $year;
    public $file;

    protected $rules = [
        'title_id' => 'required|min:1',
        'title_en' => 'required|min:1',
        'title_cn' => 'required|min:1',
        'year'     => 'required',
        'file'     => 'required',
    ];

    public function mount($pe)
    {
        $this->years = PublicExposeYear::orderBy('year', 'desc')->get();
        $this->pe = null;

        if($pe) {

        } else{
            $this->year    = PublicExposeYear::orderBy('year', 'desc')->first()->id;
        }
    }

    public function save()
    {
        $this->validate();

        $file = md5($this->file . microtime()).'.'.$this->file->extension();

        $query = new PublicExpose();

        $query->title_id    = $this->title_id;
        $query->title_en    = $this->title_en;
        $query->title_cn    = $this->title_cn;
        $query->year_id     = $this->year;
        $query->file        = 'storage/'.$file;

        $query->save();
        $this->file->storeAs('public', $file);


        return redirect()->route('cms-pe.index');
    }

    public function render()
    {
        return view('livewire.cms.public-expose.add-content');
    }
}
