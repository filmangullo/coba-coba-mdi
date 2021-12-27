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
    public $img;
    public $file;

    protected $rules = [
        'title_id' => 'required|min:1',
        'title_en' => 'required|min:1',
        'title_cn' => 'required|min:1',
        'img'      => 'required',
        'file'     => 'required',
    ];

    public function save()
    {
        $this->validate();

        $img = md5($this->img . microtime()).'.'.$this->img->extension();
        $file = md5($this->file . microtime()).'.'.$this->file->extension();


        $query = new AnnualReport();

        $query->title_id    = $this->title_id;
        $query->title_en    = $this->title_en;
        $query->title_cn    = $this->title_cn;
        $query->img         = 'storage/'.$img;
        $query->file        = 'storage/'.$file;

        $query->save();
        $this->img->storeAs('public', $img);
        $this->file->storeAs('public', $file);



        return redirect()->route('cms-ar.index');
    }

    public function render()
    {
        return view('livewire.cms.annual-report.add-content');
    }
}
