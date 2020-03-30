<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $tipo;
    public $nombre;
    public $placeholder;
    public $required;
    public $size;
    public $label;
    public $valor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($tipo, $nombre, $placeholder, $required, $size, $label, $valor)
    {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->size = $size;
        $this->label = $label;
        $this->valor = $valor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
