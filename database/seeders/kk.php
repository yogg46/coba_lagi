<?php

namespace Database\Seeders;

use App\Models\client;
use App\Models\Karyawans;
use App\Models\Kategori_karyawan;
use App\Models\kc;
use App\Models\User;
use Illuminate\Database\Seeder;

class KK extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345678'),
            'role'=>'1',
        ]);
        User::create([
            'name' => 'Leader',
            'email'=>'leader@leader.com',
            'password'=>bcrypt('12345678'),
            'role'=>'4',
        ]);
        User::create([
            'name' => 'Programmer',
            'email'=>'programmer@programmer.com',
            'password'=>bcrypt('12345678'),
            'role'=>'5',
        ]);
        User::create([
            'name' => 'Marketing',
            'email'=>'marketing@marketing.com',
            'password'=>bcrypt('12345678'),
            'role'=>'3',
        ]);
        User::create([
            'name' => 'Management',
            'email'=>'management@management.com',
            'password'=>bcrypt('12345678'),
            'role'=>'2',
        ]);

        client::create([
            'client_id' => '123',
            'nama' => 'sumber sehat',
            'alamat'=>'jakarta kolun dewe',
            'cp'=>'0812345678912',
            'no_kc'=>'1',
        ]);
        client::create([
            'client_id' => '124',
            'nama' => 'masak sehat',
            'alamat'=>'jakarta kolun dewe',
            'cp'=>'0812345678912',
            'no_kc'=>'1',
        ]);
        client::create([
            'client_id' => '125',
            'nama' => 'sinaar sehat',
            'alamat'=>'jakarta kolun dewe',
            'cp'=>'0812345678912',
            'no_kc'=>'3',
        ]);
        client::create([
            'client_id' => '126',
            'nama' => 'kopii',
            'alamat'=>'jakarta kolun dewe',
            'cp'=>'0812345678912',
            'no_kc'=>'2',
        ]);
        client::create([
            'client_id' => '127',
            'nama' => 'setengaah sehat',
            'alamat'=>'jakarta kolun dewe',
            'cp'=>'0812345678912',
            'no_kc'=>'3',
        ]);

        kc::create([
            'kc_id'=>'1',
            'nama'=>'Instansi'
        ]);
        kc::create([
            'kc_id'=>'2',
            'nama'=>'Perusahaan'
        ]);
        kc::create([
            'kc_id'=>'3',
            'nama'=>'Kesehatan'
        ]);

        Karyawans::create([
            'nama' => 'yogga bayu pamungkas',
            'email' => 'y@gmail.com',
            'NIK'=>'12345678901234567',
            'no_telepon'=>'123456789012',
            'kategori'=>'1',
        ]);
        Karyawans::create([
            'nama' => 'yogga bayu',
            'email' => 'yz@gmail.com',
            'NIK'=>'12345678901234567',
            'no_telepon'=>'123456789012',
            'kategori'=>'2',
        ]);
        Karyawans::create([
            'nama' => 'yogga pamungkas',
            'email' => 'yq@gmail.com',
            'NIK'=>'12345678901234567',
            'no_telepon'=>'123456789012',
            'kategori'=>'3',
        ]);
        Karyawans::create([
            'nama' => 'yogga bayu ungkas',
            'email' => 'yw@gmail.com',
            'NIK'=>'12345678901234567',
            'no_telepon'=>'123456789012',
            'kategori'=>'4',
        ]);
        Karyawans::create([
            'nama' => 'yogga joko pamungkas',
            'email' => 'ya@gmail.com',
            'NIK'=>'12345678901234567',
            'no_telepon'=>'123456789012',
            'kategori'=>'5',
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'1',
            'kategori'=>'Administator'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'2',
            'kategori'=>'Manager'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'3',
            'kategori'=>'Marketing'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'4',
            'kategori'=>'Leader'
        ]);

        Kategori_karyawan::create([
            'no_kategori'=>'5',
            'kategori'=>'Programer'
        ]);


    }
}
