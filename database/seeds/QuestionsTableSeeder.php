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
        ['id' => 4, 'questionnaire_id' => 12, 'question1' => "Edge Hill University", 'question2' => "St Helens Road", 'question3' => 'Ormskirk', 'question4' => 'L39 4QP' ],
        ['id' => 5, 'questionnaire_id' => 12, 'question1' => "Edge Hill University", 'question2' => "St Helens Road", 'question3' => 'Ormskirk', 'question4' => 'L39 4QP' ],
      ]);
    }
}
