<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavAdmin extends Component
{
    public $titulo;
    public $enlaces;
    public $tituloTabla;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $enlaces, $tituloTabla)
    {
        $this->titulo = $titulo;
        $this->enlaces = $enlaces;
        $this->tituloTabla = $tituloTabla;        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tablas.nav-admin');
    }
}
