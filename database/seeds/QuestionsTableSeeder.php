<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('questions')->insert([
        ['id' => 1, 'questionnaire_id' => 1, 'question1' => "This is Question 1", 'question2' => "This is Question 2", 'question3' => 'This is Question 3', 'question4' => 'This is Question 4', 'question5' => 'This is Question 5'],
      ]);
    }
}
