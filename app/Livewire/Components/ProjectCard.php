<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ProjectCard extends Component
{
    public $img;
    public $title;
    public $description;
    public $tags = [];

    public function render()
    {
        return view('livewire.components.project-card');
    }
}
