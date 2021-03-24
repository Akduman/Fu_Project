<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Form_30;
use App\Models\Personel;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
      //  Department::factory(10)->create(); 
        $this->call(DepartmentsSeed::class);        
        User::factory(30)->create();
        $this->call(FsaformsSeeder::class);
        Form_30::factory(9)->create();
        $this->call(Form31Seeder::class);
        $this->call(Form31_StatisticsSeeder::class);
        $this->call(Form31_CalendersSeeder::class);
        $this->call(Form31_Subject_ScopeSeeder::class);
        $this->call(Form33Seeder::class);
        $this->call(test_seeder_user::class);

    }
}
