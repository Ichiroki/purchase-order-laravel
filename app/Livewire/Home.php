<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{

    public $title;

    public function __construct($title = "Home") {
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.home', ['title' => $this->title]);
    }
}
