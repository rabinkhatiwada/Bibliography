<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Data extends Component
{
    public $count;
    public $type;

    public function __construct($count, $type)
    {
        $this->count = $count;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.data');
    }
}
