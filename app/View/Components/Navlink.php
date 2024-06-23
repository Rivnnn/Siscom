<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navlink extends Component
{
    /**
     * Create a new component instance.
     */

    public string $url;
    public string $name;
    public string $active;
    public function __construct(string $url, string $name, string $active)
    {
        $this->url = $url;
        $this->name = $name;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navlink');
    }
}