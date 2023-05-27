<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models\Property as PropertyModel;
use Livewire\WithPagination;

class Property extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $properties;
    public $search="";

    public function render()
    {
        $this->properties = PropertyModel::where('title','LIKE','%' . $this->search . '%')->paginate(5);
        return view('livewire.property',[
            'propertyList' => $this->properties
        ]);
    }
}
