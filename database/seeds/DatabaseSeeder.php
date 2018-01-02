<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Login;
use App\Models\Teacher;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    private $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Login::truncate();
        Teacher::truncate();
        Student::truncate();

        $this->persistAdmin();

        factory(Teacher::class, 5)->create();
        factory(Student::class, 5)->create();

    }

    private function persistAdmin(){
        DB::table('logins')->insert([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'role'  => 'admin',
            'remember_token' => str_random(10),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
