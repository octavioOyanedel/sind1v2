<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Filtro extends Component
{
    public $ruta;
    public $campos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($ruta, $campos)
    {
        $this->ruta = $ruta;
        $this->campos = $campos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tablas.filtro');
    }
}
