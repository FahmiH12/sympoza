<?php

namespace App\Http\Livewire\Committee\Create;

use Livewire\Component;
use App\Models\Manuscript_Sympozia;


class CreateForm extends Component
{
    public function render()
    {
        $papers = Manuscript_Sympozia::all();
        return view('livewire.committee.create.create-form', compact('papers'));
    }
}
