<?php

namespace App\Livewire\Forms;

use App\Models\Items;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ItemsForm extends Form
{

    #[Validate('required', 'Name is required')]
    #[Validate('exists:\App\Models\Items,name', "This Product is already exists")]
    public $name;

    #[Validate('required', 'Price is required')]
    public $price;

    #[Validate('required', 'Quantity is required')]
    #[Validate('integer', 'Quantity only accept number value')]
    public $quantity;

    #[Validate('string', 'Description is must be a string')]
    public $description;

    public function store() {
        Items::create([
            'id' => Str::uuid(),
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'description' => $this->description
        ]);

        return $this->reset();
    }
}
