<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputImage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct( public $name, public $imageUploadId, public $imagePreviewId, public $imageLabelId, public $image = null)
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-image');
    }
}
