<?php

namespace App\View\Components;

use App\Models\Project;
use Illuminate\View\Component;

class ProjectsList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
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
        $projects = Project::orderBy('published_at', 'desc')->get();

        return view('components.projects-list', [
            'projects' => $projects,
        ]);
    }
}
