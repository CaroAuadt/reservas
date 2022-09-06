<?php

namespace App\View\Components;

use App\Models\socio;
use Illuminate\View\Component;

class SocioFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     *
     * @return void
     * @param \App\Models\socio $socio
     */

    public function __construct($socio = null)
    {
        if(is_null($socio)){
            $socio= socio::make();
        }
        $this->socio= $socio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params=[
            'socio'=>$this->socio,
        ];
        return view('components.socio-form-body', $params);
    }
}
