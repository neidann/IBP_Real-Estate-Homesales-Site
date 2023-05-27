<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order as OrderModel;
use Livewire\WithPagination;

class Order extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search="";
    protected $orders;

    public function render()
    {

        $this->orders = OrderModel::where('code','LIKE','%' . $this->search . '%')->paginate(5);
        return view('livewire.order',[
            'orders' => $this->orders
        ]);
    }
}
