<?php

namespace App\Http\Livewire\Committee\Submission;

use Livewire\Component;
use App\Models\Manuscript_Sympozia;

class SchedullingList extends Component
{
    public function render()
    {
        $papers = Manuscript_Sympozia::all();
        return view('livewire.committee.submission.schedulling-list', compact('papers'));
    }
}
