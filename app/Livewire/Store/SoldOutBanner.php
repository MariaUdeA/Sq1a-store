<?php

namespace App\Livewire\Store;

use Livewire\Component;

class SoldOutBanner extends Component
{
    public $id;
    public $stock;

    public function mount($id)
    {
        $this->id = $id;
        $variant = \App\Models\ProductVariant::where('id', $id)->first();
        $this->stock = $variant? $variant->stock : null;
    }

    public function render()
    {
        return view('livewire.store.sold-out-banner');
    }
}
