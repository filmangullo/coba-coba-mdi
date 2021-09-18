<?php

namespace App\Http\Livewire\Cms\AnnualReport;

use Livewire\WithFileUploads;
use App\Models\AnnualReport;
use Livewire\Component;

class AddContent extends Component
{
    use WithFileUploads;
    public $fr;

    public $title_id;
    public $title_en;
    public $title_cn;
    public $file;

    protected $rules = [
        'title_id' => 'required|min:6',
        'title_en' => 'required|min:6',
        'title_cn' => 'required|min:6',
        'file'     => 'required',
    ];

    public function save()
    {
        $this->validate();

        $file = md5($this->file . microtime()).'.'.$this->file->extension();

        $query = new AnnualReport();

        $query->title_id    = $this->title_id;
        $query->title_en    = $this->title_en;
        $query->title_cn    = $this->title_cn;
        $query->file        = 'storage/'.$file;

        $query->save();
        $this->file->storeAs('public', $file);


        return redirect()->route('cms-ar.index');
    }

    public function render()
    {
        return view('livewire.cms.annual-report.add-content');
    }
}
