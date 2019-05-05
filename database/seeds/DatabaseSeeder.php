<?php

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
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('questionnaires')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS = 1');
      DB::table('questions')->truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(QuestionnairesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
    }
}
