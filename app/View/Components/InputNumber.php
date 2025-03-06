<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputNumber extends Component
{
    public $name;
    public $id;
    public $value;
    public $min;
    public $max;
    public $step;
    public $placeholder;
    public $disabled;

    public function __construct(
        $name,
        $id = null,
        $value = null,
        $min = null,
        $max = null,
        $step = 1,
        $placeholder = '',
        $disabled = false
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->min = $min;
        $this->max = $max;
        $this->step = $step;
        $this->placeholder = $placeholder;
        $this->disabled = $disabled;
    }

    public function render()
    {
        return view('components.input-number');
    }
}
