<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'supplier_id'=>1,
                'supplier_kode'=>'SUP01',
                'supplier_nama'=>'PT Sumber Makmur',
                'supplier_alamat'=>'Jakarta'
            ],
            [
                'supplier_id'=>2,
                'supplier_kode'=>'SUP02',
                'supplier_nama'=>'CV Berkah Jaya',
                'supplier_alamat'=>'Bandung'
            ],
            [
                'supplier_id'=>3,
                'supplier_kode'=>'SUP03',
                'supplier_nama'=>'UD Maju Sentosa',
                'supplier_alamat'=>'Surabaya'
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}