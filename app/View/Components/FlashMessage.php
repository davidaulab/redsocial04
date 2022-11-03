<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FlashMessage extends Component
{
    public $code;
    public $type;
    public $message;
  

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($code, $message)
    {
        //
        $this->code = $code;
        $this->message = $message;

        if ($code <= 200) {
            $this->type = "success";
        } 
        else if ($code < 400) {
            $this->type = "warning";
        }
        else {
            $this->type = "danger";
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flash-message');
    }
}
