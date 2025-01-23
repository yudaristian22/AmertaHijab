<?php

namespace App\View\Components;

use App\Models\Team as ModelsTeam;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class team extends Component
{
    /**
     * Create a new component instance.
     */
    public $teams;
    public function __construct($teams)
    {
        $this->teams = $teams;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team');
    }
}
