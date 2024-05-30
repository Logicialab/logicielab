<?php

namespace App\View\Components\section;

use App\Models\Partie;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class whyWe extends Component
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
        return view('components.section.why-we',[
            'why_we' => Partie::join('partie_tags', 'partie_tags.id', '=', 'parties.partie_tag_id')->where('partie_tags.key', '=', 'why_we')->get(),
            'why_we_items' => Partie::join('partie_tags', 'partie_tags.id', '=', 'parties.partie_tag_id')->where('partie_tags.key', '=', 'why_we_item')->get()
        ]);
    }
}
