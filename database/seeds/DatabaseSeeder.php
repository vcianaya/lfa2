<?php

use Illuminate\Database\Seeder;
use lfa\Cuenta;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        Model::reguard();
    }
}
class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuenta')->delete();

        Cuenta::create([
            'NICK' => 'usuario123',
            'password' =>bcrypt('123456'),
            'NIVEL' =>'Administrador',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon:: now()
        ]);
    }

}

