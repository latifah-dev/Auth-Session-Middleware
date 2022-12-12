<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;

class dataPengguna extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::query()->create([
            "name" => "Fulan",
            "email" => "fulan@gmail.com",
            "password" => "fulan123"
        ]);
    }
}
