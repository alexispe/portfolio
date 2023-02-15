<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\Project;
use Illuminate\View\Component;

class TopBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public bool $sticky = false,
        public bool $dark = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.top-bar', [
            'sticky' => $this->sticky,
            'theme' => $this->dark ? 'dark' : 'light',
        ]);
    }
}
