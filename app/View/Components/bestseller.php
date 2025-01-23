<?php

namespace App\View\Components;

use App\Models\Bestseller as ModelsBestseller;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bestseller extends Component
{
    /**
     * Create a new component instance.
     */
    public $bestsellers;
    public function __construct($bestsellers)
    {
        $this->bestsellers = $bestsellers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bestseller', ['bestsellers' => $this->bestsellers]);
    }
}
