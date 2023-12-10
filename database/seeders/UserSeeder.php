<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Zefanya Farrel Palinggi',
            'birthdate' => '2004-06-01',
            'username' => 'MrPipsterr',
            'email' => 'mr.pipsterr@gmail.com',
            'primary_phone_number' => '081240982306',
            'gender' => 'Male',
            'role' => 'super-admin',
            'password' => bcrypt('1234567890')
        ]);

        
        User::create([
            'name' => 'Justin Bieber',
            'birthdate' => '2005-01-10',
            'username' => 'justinbieber',
            'email' => 'bieberjustinanjay@gmail.com',
            'primary_phone_number' => '081234561234',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('qwertyuiop')
        ]);

        User::create([
            'name' => 'Cristiano Ronaldo',
            'birthdate' => '2003-07-13',
            'username' => 'cristiano',
            'email' => 'ronaldoaslikw2@gmail.com',
            'primary_phone_number' => '081122334456',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('qwertyuiop')
        ]);

        User::create([
            'name' => 'Coki Pardede',
            'birthdate' => '2009-12-04',
            'username' => 'penggunanarkoba',
            'email' => 'cokipardedebebas@gmail.com',
            'primary_phone_number' => '081176583390',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('qwertyuiop')
        ]);

        User::factory(23)->create();
    }
}
