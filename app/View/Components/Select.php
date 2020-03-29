<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $titulo;
    public $nombre;
    public $size;
    public $label;
    public $required;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $nombre, $size, $label, $required)
    {
        $this->titulo = $titulo;
        $this->nombre = $nombre;
        $this->size = $size;
        $this->label = $label;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
