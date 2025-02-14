<?php

namespace App\Livewire\Store;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;


class Products extends Component
{
    use WithPagination;

    public $price_range;
    public $size;
    public $brand;
    public $color;
    public $category;
    public $name;

    public function render()
    {
        $query=Product::with(['variants','categories']);

        if(isset($this->price_range)){
            if(isset($this->price_range[0])){
                $query=$query->where('real_price', '>=', $this->price_range[0]);
            }

            if(isset($this->price_range[1])){
                $query=$query->where('real_price', '<=', $this->price_range[1]);
            }
        }

        if(isset($this->size)){
            $size=strtoupper($this->size);
            $query->whereHas('variants', function (Builder $q) use ($size) {
                $q->where('size', $size);
            });
        }

        if(isset($this->brand)){
            $query=$query->where("brand","like","%".$this->brand."%");
        }

        if (isset($this->color)) {
            $color=$this->color;
            $query->whereHas('variants', function (Builder $q) use ($color) {
                $q->where('color', $color);
            });
        }

        if(isset($this->category)){
            $category=$this->category;
            $query->whereHas('categories', function (Builder $q) use ($category) {
                $q->where("name","like",$category."%");
            });
        }

        if(isset($this->name)){
            $query=Product::where("name","like","%".$this->name."%");
        }

        $products=$query->paginate(10);

        return view('livewire.store.products',[
                'products' => $products,
                ]
        );
    }

}
