<?php

namespace App\View\Components;

use App\Models\About;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class aboutus extends Component
{
    /**
     * Create a new component instance.
     */
    public $about;
    public function __construct($about)
    {
        $this->about=$about;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.aboutus');
    }
}
