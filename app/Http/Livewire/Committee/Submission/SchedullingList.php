<?php

namespace App\Http\Livewire\Committee\Submission;

use Livewire\Component;
use App\Models\Manuscript_Sympozia;
use App\Models\Form;

class SchedullingList extends Component
{
    public function render()
    {
        $papers = Manuscript_Sympozia::all();
        return view('livewire.committee.submission.schedulling-list', compact('papers'));
    }

    public function store(Request $request){
        
        $form= new Form;
        $form->nama_conference= $request->nama_conference;
        $form->topik_conference= $request->topik_conference;
        $form->nama_paper= $request->nama_paper;
        $form->link_conference= $request->link_conference;
        $form->tempat= $request->tempat;
        $form->waktu= $request->waktu;
        $form->deadline= $request->deadline;
        $form->path= $request->path;
        $form->save();

        return redirect('livewire.committee.submission.schedulling-list');
    }

    public function show(Form $form){
        $data= Form::All();
        return view('livewire.committee.submission.schedulling-list', ['forms' => $data]);
    }
}
