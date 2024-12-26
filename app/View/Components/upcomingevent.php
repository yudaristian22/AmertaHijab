<?php

namespace App\View\Components;

use App\Models\Upcomingevent as ModelsUpcomingevent;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class upcomingevent extends Component
{
    /**
     * Create a new component instance.
     */

    public $upcomingevents;
    public function __construct()
    {
        $this->upcomingevents = ModelsUpcomingevent::latest()->take(3)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.upcomingevent');
    }
}
