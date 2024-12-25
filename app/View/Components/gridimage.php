<?php

namespace App\View\Components;

use App\Models\Gridimage as ModelsGridimage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class gridimage extends Component
{
    /**
     * Create a new component instance.
     */
    public $gridimages;
    public function __construct()
    {
        $this->gridimages=ModelsGridimage::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.gridimage');
    }
}
