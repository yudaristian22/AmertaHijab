<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Bestseller;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\Client;
use App\Models\Gridimage;
use App\Models\Team;
use App\Models\Upcomingevent;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::take(3)->get(); // Limit to 3 services
        $portfolios = Portfolio::take(9)->get(); // Limit to 9 portfolios
        $clients = Client::take(3)->get();
        $contacts = Contact::first();
        $testimonials = Testimonial::paginate(3);
        $upcomingevents = Upcomingevent::latest()->take(3)->get();
        $bestsellers = Bestseller::take(4)->get();
        $gridimages = Gridimage::paginate(8);
    
        return view('home.index', compact('sliders','about','services','portfolios','clients','contacts','testimonials','upcomingevents','bestsellers','gridimages'));
    }
    public function about(){
        $about = About::first();
        $clients = Client::all();
        $teams = Team::all();
        
        return view('home.about',compact('about','clients','teams'));
    }
    public function team(){
        $teams = Team::all();

        return view('home.team',compact('teams'));
    }
    public function services(){
        $services = Service::all();
        $clients = Client::all();

        return view('home.services',compact('services','clients'));
    }
    public function contact(){
        $contacts = Contact::first();

        return view('home.contact',compact('contacts'));
    }
    public function portfolio(){
        $portfolios = Portfolio::all();
        $bestseller = Bestseller::all();
        $gridimages = Gridimage::paginate(8);

        return view('home.portfolio',compact('portfolios','bestseller','gridimages'));
    }
    public function testimonials(){
        $testimonials = Testimonial::all();

        return view('home.testimonials',compact('testimonials'));
    }
    public function fetchTestimonials(Request $request)
    {
    if ($request->ajax()) {
        $testimonials = Testimonial::paginate(3);
        return view('components.testimonial-content', compact('testimonials'))->render();
    }
    }
    public function fetchGridImages(Request $request)
    {
    if ($request->ajax()) {
        $gridimages = Gridimage::paginate(8);
        return view('components.gridimage-content', compact('gridimages'))->render();
    }
    }
    public function fetchBestsellers(Request $request)
    {
    if ($request->ajax()) {
        $bestsellers = Bestseller::paginate(8);
        return view('components.bestseller-content', compact('bestsellers'))->render();
    }
    }
}