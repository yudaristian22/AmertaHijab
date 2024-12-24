<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class services extends Component
{
    public $services;

    public function __construct($services)
    {
        $this->services = $services;
    }

    public function render(): View|Closure|string
    {
        return view('components.services', ['services' => $this->services]);
    }
}