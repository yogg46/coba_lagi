<?php

namespace App\Http\Livewire\Karyawan;

use App\Models\Karyawans;
use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.karyawan.edit');
    }
    /**
    * define public variable
    */
    public $nama, $karyawan_id;
    public $NIK;
    public $email;
    public $no_telepon;
    public $kategori;

    /**
     * mount or construct function
     */
    public function mount(Karyawans $karyawans)
    {
        if($karyawans) {
            $this-> karyawan_id = $karyawans->id;
            $this-> nama = $karyawans->nama;
            $this-> NIK = $karyawans->NIK;
            $this-> email = $karyawans->email;
            $this-> no_telepon = $karyawans->no_telepon;
            $this-> kategori = $karyawans->kategori;
        }
    }

    /**
     * Real-time Validation
     */

    public function updated($field)
    {
        $this->validateOnly($field, [
            'nama' => 'required|min:6',
            'email' => 'required|email',
            'NIK'=>'required',
            'no_telepon'=>'required',
            'kategori'=>'required',
        ]);
    }

    /**
     * update function
     */
    public function update()
    {
        $this->validate([
            'nama' => 'required|min:6',
            'email' => 'required|email',
            'NIK'=>'required',
            'no_telepon'=>'required',
            'kategori'=>'required',
        ]);

        if($this->karyawan_id) {

            $karyawan = Karyawans::find($this->karyawan_id);

            if($karyawan) {
                $karyawan->update([
                    'nama' => $this->nama,
                    'email' => $this->email,
                    'NIK'=>$this->NIK,
                    'no_telepon'=>$this->no_telepon,
                    'kategori'=>$this->kategori,
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('karyawan.index');

    }



}
