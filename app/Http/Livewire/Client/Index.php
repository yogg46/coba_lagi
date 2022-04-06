<?php

namespace App\Http\Livewire\Client;

use App\Models\client;
use App\Models\kc;
use Livewire\Component;

class Index extends Component
{
    public $client_id;
    public $nama;
    public $cp;
    public $alamat;
    public $no_kc;
    public $ids;
    public $satu;

    public function render()
    {
        return view('livewire.client.index',
        [
            'client' => client::all(),
            'kc' => kc::all()
        ])
        ->extends('layout.main',
        [
        'tittle' => 'Client',
        'slug'=>''
        ])
        ->section('isi_page');;
    }

    protected $rules = [
        'client_id' => 'required',
        'nama' => 'required|min:6',
        'alamat'=>'required|min:16',
        'cp'=>'required|min:12',
        'no_kc'=>'required',

    ];

    public function save()
    {
        $this->validate();



        $simpan = new client;

        $simpan->client_id = $this->client_id;
        $simpan->nama = $this->nama;
        $simpan->alamat = $this->alamat;
        $simpan->cp = $this->cp;
        $simpan->no_kc = $this->no_kc;

        $simpan->save();
        session()->flash('message', 'Data Berhasil Disimpan.');
        $this->resetInput();

        $this->emit('save');

        //redirect
        return redirect()->route('clients.index');

    }

    public function resetInput()
    {
        $this->client_id = null;
        $this->nama = null;
        $this->alamat = null;
        $this->cp = null;
        $this->no_kc = null;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'client_id' => 'required',
            'nama' => 'required',
            'alamat'=>'required|min:16',
            'cp'=>'required|min:12',
            'no_kc'=>'required',

        ]);
    }

    public function edit($id)
    {
        $client= client::where('id',$id)->first();
        $this-> ids = $client->id;
        $this-> client_id = $client->client_id;
        $this-> nama = $client->nama;
        $this-> alamat = $client->alamat;
        $this-> cp = $client->cp;
        $this-> no_kc = $client->no_kc;
    }

    public function update()
    {
        $this->validate([
            'client_id' => 'required',
            'nama' => 'required',
            'alamat'=>'required|min:16',
            'cp'=>'required|min:12',
            'no_kc'=>'required',

        ]);
        if($this->ids){
            $client= client::find($this->ids);
            $client->update([
                'client_id'=> $this->client_id,
                'nama'=> $this->nama,
                'alamat'=> $this->alamat,
                'cp'=> $this->cp,
                'no_kc'=> $this->no_kc,
            ]);

                //flash message
            session()->flash('message', 'Data Berhasil Diupdate.');
            $this->resetInput();
            $this->emit('edit');

            //redirect
            return redirect()->route('clients.index');

         }
    }

        public function destroy($id)
        {


            if($id){
                client::where('id',$id)->delete();
            }
            //flash message
            session()->flash('message', 'Data Berhasil Dihapus.');

            //redirect
            return redirect()->route('clients.index');
        }
}
