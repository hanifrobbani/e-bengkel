<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SparePart;
use App\Models\Customer;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // $password = Hash::make('pw123');

        // User::factory()->create([
        //     'username' => 'Admin',
        //     'email' => 'admin@email.com',
        //     'password' => $password
        // ]);

        Customer::create([
            'nama_customer' => 'Yanto',
            'alamat' => 'Jl.Karet Berkah',
            'no_telp' => '087654575',
            'transaksi_id' => '1'
        ]);

    }
}
