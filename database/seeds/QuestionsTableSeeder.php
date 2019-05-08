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
        ['id' => 1, 'questionnaire_id' => 1, 'question1' => "It is important to focus on the target audience when creating questions for a questionnaire” ", 'question2' => "Respondents are more likely to provide answers which presents them in a good light if they feel that their true answer would be deemed as controversial or unpopular", 'question3' => 'Respondents become disinterested or confused when the questions which form a questionnaire are not in a particular order or do not flow smoothly from one another', 'question4' => 'It is important for the respondents to know the purpose behind the questionnaire and why they are completing it', 'question5' => 'Respondents are less likely to complete a questionnaire to their true ability or thoughts if they have little interest in the subject of the questions'],
      ]);
    }
}
