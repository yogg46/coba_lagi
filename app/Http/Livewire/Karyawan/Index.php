<?php

namespace App\Http\Livewire\Karyawan;


use App\Models\Karyawans;
use App\Models\Kategori_karyawan;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;

    public $nama;
    public $ids;
    public $NIK;
    public $email;
    public $no_telepon;
    public $kategori;

    public function render()
    {
        $karyawan = Karyawans::all();
        $kk = Kategori_karyawan::all();
        return view('livewire.karyawan.index',['karyawan' => $karyawan,'k_k'=>$kk ])
        ->extends('layout.main',
        ['tittle' => 'Karyawan',
        'slug'=> 'All'])
        ->section('isi_page');
    }


    protected $rules = [
        'nama' => 'required|min:6',
        'email' => 'required|email|unique:karyawan',
        'NIK'=>'required|min:16',
        'no_telepon'=>'required|min:12',
        'kategori'=>'required',
    ];


    public function save()
    {
        $this->validate();

        $simpan = new Karyawans;

        $simpan->nama = $this->nama;
        $simpan->NIK = $this->NIK;
        $simpan->no_telepon = $this->no_telepon;
        $simpan->kategori = $this->kategori;
        $simpan->email = $this->email;

        $simpan->save();
        session()->flash('message', 'Data Berhasil Disimpan.');
        $this->resetInput();

        $this->emit('save');

        //redirect
        return redirect()->route('karyawan.index');

    }

    public function simpan()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nama = null;
        $this->NIK = null;
        $this->email = null;
        $this->no_telepon = null;
        $this->kategori = null;
    }



    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama' => 'required|min:6',
            'email' => 'required|email',
            'NIK'=>'required|min:16',
            'no_telepon'=>'required|min:12',
            'kategori'=>'required',
        ]);
    }
    /**
     * update function
     */
    public function edit($id)
    {
        $karyawans= Karyawans::where('id',$id)->first();
        $this-> ids = $karyawans->id;
        $this-> nama = $karyawans->nama;
        $this-> NIK = $karyawans->NIK;
        $this-> email = $karyawans->email;
        $this-> no_telepon = $karyawans->no_telepon;
        $this-> kategori = $karyawans->kategori;



    }

    public function update()
    {
        $this->validate([
            'nama' => 'required|min:6',
            'email' => 'required|email',
            'NIK'=>'required|min:16',
            'no_telepon'=>'required|min:12',
            'kategori'=>'required',
        ]);
        if($this->ids){
            $karyawans= Karyawans::find($this->ids);
            $karyawans->update([
                'nama'=> $this->nama,
                'email'=> $this->email,
                'NIK'=> $this->NIK,
                'no_telepon'=> $this->no_telepon,
                'kategori'=> $this->kategori,
            ]);

                //flash message
            session()->flash('message', 'Data Berhasil Diupdate.');
            $this->resetInput();
            $this->emit('edit');

            //redirect
            return redirect()->route('karyawan.index');

        }



    }

    public function destroy($id)
    {


        if($id){
            Karyawans::where('id',$id)->delete();
        }
        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('karyawan.index');
    }




}
