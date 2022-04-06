<?php

namespace App\Http\Livewire\Projects;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index')
            ->extends('layout.main',
            ['tittle' => 'Projects',
            'slug'=>'projects'])
            ->section('isi_page');

    }
}
