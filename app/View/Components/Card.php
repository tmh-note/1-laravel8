<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $header;
    public $cardFooter;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header, $cardFooter)
    {
        $this->header = $header;
        $this->cardFooter = $cardFooter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('common.card');
    }
}
