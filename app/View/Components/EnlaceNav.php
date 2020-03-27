<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EnlaceNav extends Component
{
    public $enlacePrincipal;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($enlacePrincipal)
    {
        $this->enlacePrincipal = $enlacePrincipal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.nav.enlace-nav');
    }
}
