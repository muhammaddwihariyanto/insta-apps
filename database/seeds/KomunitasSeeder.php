<?php

use Illuminate\Database\Seeder;

class KomunitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_komunitas')->insert([
            'id' => '1',
            'nama' => 'Yayasan Al Uswah',
            'telepon' => '031224567888',
            'rekening' => '12345678',
            'alamat' => 'Jl Kejawan Gebang 8 Keputih Surabaya',
            'lembaga_jenis' => 'sekolah',
            'pengisi_id' => '085230360322'
        ]);
    }
}
