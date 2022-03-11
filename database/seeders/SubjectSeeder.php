<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = [
            [
                'name' => 'Mathematics',
                'code_subject' => '00001'
            ],
            [
                'name' => 'BM',
                'code_subject' => '00002'
            ],
            [
                'name' => 'BI',
                'code_subject' => '00003'
            ],
            [
                'name' => 'Sejarah',
                'code_subject' => '00004'
            ],
            [
                'name' => 'Computer',
                'code_subject' => '00005'
            ],
        ];

        Subject::insert($subject);
    }
}
