<?php

namespace App\Http\Livewire;

use App\Models\Property;
use Livewire\Component;

class HomeSearch extends Component
{
    public $search="";

    public function render()
    {
        if($this->search !="")
            $items = Property::where('title','LIKE','%' . $this->search . '%')->get();
        else
            $items = [];
        return view('livewire.home-search',[
            'items' => $items
        ]);
    }
}
