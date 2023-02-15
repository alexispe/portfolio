<?php

namespace App\View\Components;

use App\Models\Post;
use App\Models\Project;
use Illuminate\View\Component;

class Footer extends Component
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
        $projects = Project::orderBy('published_at', 'desc')->limit(6)->get();

        $posts = Post::orderBy('published_at', 'desc')->limit(6)->get();

        return view('components.footer', [
            'projects' => $projects,
            'posts' => $posts,
        ]);
    }
}
