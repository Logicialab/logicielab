<?php

namespace App\View\Components\pages;

use App\Models\Page;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class about extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $abouts = Page::all();
        return view('components.pages.about',[
            'abouts' => Page::all()
        ]);
    }
}
