<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Livewire\Component;



class FormController extends Controller
{
    public function index(){
        $form = Form::all();
        return view('committee.submission', ['forms' => $form]);
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

        return redirect('committee.submission');
    }

    public function show(Form $form){
        $data= Form::All();
        return view('livewire.committee.submission.schedulling-list', ['forms' => $data])->layout('adminlte::page');
    }

}
