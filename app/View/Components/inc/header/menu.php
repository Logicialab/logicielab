<?php

namespace App\View\Components\inc\header;

use App\Models\Menu as ModelsMenu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menu extends Component
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
        return view('components.inc.header.menu',[
            'menus' => ModelsMenu::where('menu_id', '=', 1)->get(),
        ]);
    }
}
