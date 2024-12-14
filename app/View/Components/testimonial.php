<?php

namespace App\View\Components;

use App\Models\Testimonial as ModelsTestimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class testimonial extends Component
{
    /**
     * Create a new component instance.
     */

    public $testimonials;

    public function __construct()
    {
        $this->testimonials = ModelsTestimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonial');
    }
}
