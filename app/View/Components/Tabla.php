<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabla extends Component
{
    public $cabecerasTabla;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cabecerasTabla)
    {
        $this->cabecerasTabla = $cabecerasTabla;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tablas.tabla');
    }
}
