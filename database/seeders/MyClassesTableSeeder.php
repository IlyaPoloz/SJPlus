<?php
namespace Database\Seeders;

use App\Models\ClassType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MyClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('my_classes')->delete();
        $ct = ClassType::pluck('id')->all();

        $data = [
            ['name' => 'Computer Science Fundamentals', 'class_type_id' => $ct[2]],
            ['name' => 'Introduction to Programming', 'class_type_id' => $ct[2]],
            ['name' => 'Data Structures and Algorithms', 'class_type_id' => $ct[2]],
            ['name' => 'Software Development', 'class_type_id' => $ct[3]],
            ['name' => 'Database Systems', 'class_type_id' => $ct[3]],
            ['name' => 'Computer Networks', 'class_type_id' => $ct[4]],
            ['name' => 'Operating Systems', 'class_type_id' => $ct[4]],
            ['name' => 'Artificial Intelligence', 'class_type_id' => $ct[5]],
            ['name' => 'Cybersecurity', 'class_type_id' => $ct[5]],
            ['name' => 'Machine Learning', 'class_type_id' => $ct[5]],
        ];
        

        DB::table('my_classes')->insert($data);

    }
}
