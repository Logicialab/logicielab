<?php

namespace App\View\Components\inc\footer;

use App\Models\ConfigSite;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class icons extends Component
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
        return view('components.inc.footer.icons',[
            'icons' => ConfigSite::join('config_keys', 'config_keys.id', '=', 'config_sites.config_key_id')->where('key', '=', 'icons')->get()
        ]);
    }
}
