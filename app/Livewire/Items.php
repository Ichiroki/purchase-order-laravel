<?php

namespace App\Livewire;

use App\Livewire\Forms\ItemsForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Items')]
class Items extends Component
{
    public ItemsForm $form;
    public bool $isSubmitted = false;

    public function add() {
        $this->form->store();
        $this->isSubmitted = true;
    }

    public function render()
    {
        $items = \App\Models\Items::latest()->paginate(5);
        return view('livewire.items', [
            'items' => $items
        ]);
    }
}
