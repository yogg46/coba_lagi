<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{
    public $progres="0";
    public $progres2="0";


    public function render()
    {
        return view('livewire.dashboard.dashboard_index')
        ->extends('layout.main',
        ['tittle' => 'Dashboard',
        'slug'=>''])
        ->section('isi_page');
    }

    public function reset1()
    {
        $this->progres ="0";
        $this-> progres2 = "0";
    }


}
