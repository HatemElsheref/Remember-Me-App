<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Hatem Mohamed',
            'email'=>'admin@app.com',
            'role'=>'admin',
            'tid'=>1035885626,
            'password'=>bcrypt(12345)
        ]);
    }
}
