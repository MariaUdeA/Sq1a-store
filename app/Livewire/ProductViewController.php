<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ProductViewController extends Component
{
    public $selectedVariant;
    public $product;

    public $selectedColor;
    public $selectedSize;

    public $colorSizes;

    public function getColorName($hex){
        $hex = ltrim($hex, '#');
        $response = Http::get('https://www.thecolorapi.com/id?hex='.$hex)['name'];
        $colorName = $response['value'];
        return $colorName;
    }

    public function changeVariant($color=null,$size=null){
        $color= $color??$this->selectedColor;
        $size= $size??$this->selectedSize;

        $query=$this->product->variants()->where('color',$color)->where('size',$size)->first();
        if(!$query){
            $variant_id=$this->product->variants()->where('color',$color)->first()->id;
        }else{
            $variant_id=$query->id;
        }

        // Redirect with the merged query parameters, preserving pagination state
        return redirect()->route('product', ['id' => $variant_id]);

    }

    public function mount(){
        $this->selectedColor = $this->selectedVariant->color;
        $this->selectedSize = $this->selectedVariant->size;
        $this->colorSizes = $this->product->variants()->where('color',$this->selectedColor)->pluck('size')->unique()->toArray();
    }

    public function render()
    {
        $color_name=$this->getColorName($this->selectedVariant->color);
        return view('livewire.product-view-controller', [
            'selectedVariant' => $this->selectedVariant,
            'product' => $this->product,
            'color_name' => $color_name,
            'selectedColor' => $this->selectedColor,
            'selectedSize' => $this->selectedSize,
            'colorSizes' => $this->colorSizes,
        ]);
    }
}
