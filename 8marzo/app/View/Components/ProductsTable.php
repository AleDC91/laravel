<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class ProductsTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
      public array $products
    ){}


    public function excerpt($description, $limit = 5){
        return Str::limit($description, $limit);
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products-table');
    }
}
