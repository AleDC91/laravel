<?php

namespace App\View\Components;


use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class BooksTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Collection $books){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.books-table');
    }
}
