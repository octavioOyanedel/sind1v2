<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $metodo;
    public $ruta;
    public $csrf;
    public $titulo;
    public $alinear;    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($metodo, $ruta, $csrf, $titulo, $alinear)
    {
        $this->metodo = $metodo;
        $this->ruta = $ruta;
        $this->csrf = $csrf;
        $this->titulo = $titulo;
        $this->alinear = $alinear;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.form');
    }
}
