<?php

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('course_semester')->truncate();
        Course::truncate();
        $semesters = [
                [
                    'semester'=>1,
                    'courses'=> [
                        ['id'=>1101, 'title'=>'Introduction to Computer Science', 'code'=>'CSE 101', 'credit'=>'3.00'],
                        ['id'=>1102, 'title'=>'Introduction to Computer Science(Sessional)', 'code'=>'CSE 102', 'credit'=>'1.50'],
                        ['id'=>1103, 'title'=>'Physics', 'code'=> 'PHY 101', 'credit'=>'3.00'],
                        ['id'=>1104, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1105, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'1.50'],
                        ['id'=>1106, 'title'=>'Mechanical Engineering', 'code'=> 'ME 101', 'credit'=>'3.00'],
                        ['id'=>1107, 'title'=>'Mechanical Engineering (Sessional)', 'code'=> 'ME 102', 'credit'=>'1.50'],
                    ]
                ],
                [
                    'semester'=>2,
                    'courses'=> [
                        ['id'=>1201, 'title'=>'Programming with c', 'code'=>'CSE 201', 'credit'=>'3.00'],
                        ['id'=>1202, 'title'=>'Programming with c', 'code'=>'CSE 202', 'credit'=>'1.50'],
                        ['id'=>1203, 'title'=>'Chemistry', 'code'=> 'CHY 201', 'credit'=>'3.00'],
                        ['id'=>1204, 'title'=>'Chemistry (Sessional)', 'code'=> 'CHY 202', 'credit'=>'1.50'],
                        ['id'=>1205, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1206, 'title'=>'Mechanical Drawing', 'code'=> 'ME 101', 'credit'=>'1.50']
                    ]
                ],
                [
                    'semester'=>3,
                    'courses'=> [
                        ['id'=>1301, 'title'=>'Programming with c', 'code'=>'CSE 201', 'credit'=>'3.00'],
                        ['id'=>1302, 'title'=>'Programming with c', 'code'=>'CSE 202', 'credit'=>'1.50'],
                        ['id'=>1303, 'title'=>'Chemistry', 'code'=> 'CHY 201', 'credit'=>'3.00'],
                        ['id'=>1304, 'title'=>'Chemistry (Sessional)', 'code'=> 'CHY 202', 'credit'=>'1.50'],
                        ['id'=>1305, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1306, 'title'=>'Mechanical Drawing', 'code'=> 'ME 101', 'credit'=>'1.50']
                    ]
                ],
                [
                    'semester'=>4,
                    'courses'=> [
                        ['id'=>1401, 'title'=>'Programming with c', 'code'=>'CSE 201', 'credit'=>'3.00'],
                        ['id'=>1402, 'title'=>'Programming with c', 'code'=>'CSE 202', 'credit'=>'1.50'],
                        ['id'=>1403, 'title'=>'Chemistry', 'code'=> 'CHY 201', 'credit'=>'3.00'],
                        ['id'=>1404, 'title'=>'Chemistry (Sessional)', 'code'=> 'CHY 202', 'credit'=>'1.50'],
                        ['id'=>1405, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1406, 'title'=>'Mechanical Drawing', 'code'=> 'ME 101', 'credit'=>'1.50']
                    ]
                ],
                [
                    'semester'=>5,
                    'courses'=> [
                        ['id'=>1501, 'title'=>'Programming with c', 'code'=>'CSE 201', 'credit'=>'3.00'],
                        ['id'=>1502, 'title'=>'Programming with c', 'code'=>'CSE 202', 'credit'=>'1.50'],
                        ['id'=>1503, 'title'=>'Chemistry', 'code'=> 'CHY 201', 'credit'=>'3.00'],
                        ['id'=>1504, 'title'=>'Chemistry (Sessional)', 'code'=> 'CHY 202', 'credit'=>'1.50'],
                        ['id'=>1505, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1506, 'title'=>'Mechanical Drawing', 'code'=> 'ME 101', 'credit'=>'1.50']
                    ]
                ],
                [
                    'semester'=>6,
                    'courses'=> [
                        ['id'=>1601, 'title'=>'Compiler Design', 'code'=>'CSE 601', 'credit'=>'3.00'],
                        ['id'=>1602, 'title'=>'Compiler Design (Sessional)', 'code'=>'CSE 602', 'credit'=>'1.50'],
                        ['id'=>1603, 'title'=>'Networking', 'code'=> 'CSE 603', 'credit'=>'3.00'],
                        ['id'=>1604, 'title'=>'Networking (Sessional)', 'code'=> 'CSE 604', 'credit'=>'1.50'],
                        ['id'=>1605, 'title'=>'Software Engineering', 'code'=> 'CSE 605', 'credit'=>'3.00'],
                        ['id'=>1606, 'title'=>'software Engineering (Sessional)', 'code'=> 'CSE 606', 'credit'=>'1.50'],
                        ['id'=>1607, 'title'=>'Concrete Mathmetics', 'code'=> 'CSE 607', 'credit'=>'1.50'],
                        ['id'=>1608, 'title'=>'Numerical Methods', 'code'=> 'CSE 609', 'credit'=>'3.00'],
                        ['id'=>1609, 'title'=>'Numerical Methods (Sessional)', 'code'=> 'CSE 609', 'credit'=>'3.00']
                    ]
                ],
                [
                    'semester'=>7,
                    'courses'=> [
                        ['id'=>1701, 'title'=>'Programming with c', 'code'=>'CSE 201', 'credit'=>'3.00'],
                        ['id'=>1702, 'title'=>'Programming with c', 'code'=>'CSE 202', 'credit'=>'1.50'],
                        ['id'=>1703, 'title'=>'Chemistry', 'code'=> 'CHY 201', 'credit'=>'3.00'],
                        ['id'=>1704, 'title'=>'Chemistry (Sessional)', 'code'=> 'CHY 202', 'credit'=>'1.50'],
                        ['id'=>1705, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1706, 'title'=>'Mechanical Drawing', 'code'=> 'ME 101', 'credit'=>'1.50']
                    ]
                ],
                [
                    'semester'=>8,
                    'courses'=> [
                        ['id'=>1801, 'title'=>'Programming with c', 'code'=>'CSE 201', 'credit'=>'3.00'],
                        ['id'=>1802, 'title'=>'Programming with c', 'code'=>'CSE 202', 'credit'=>'1.50'],
                        ['id'=>1803, 'title'=>'Chemistry', 'code'=> 'CHY 201', 'credit'=>'3.00'],
                        ['id'=>1804, 'title'=>'Chemistry (Sessional)', 'code'=> 'CHY 202', 'credit'=>'1.50'],
                        ['id'=>1805, 'title'=>'Physics (Sessional)', 'code'=> 'PHY 102', 'credit'=>'3.00'],
                        ['id'=>1806, 'title'=>'Mechanical Drawing', 'code'=> 'ME 101', 'credit'=>'1.50']
                    ]
                ],
            ];
        $sem = 101;
        foreach ($semesters as $semester) {
            
            foreach($semester['courses'] as $course){
                $cor = Course::create([
                    'id'=>$course['id'],
                    'title'=>$course['title'],
                    'code'=>$course['code'],
                    'credit'=>$course['credit']
                ]);
                $cor->semesters()->attach($sem);
            }
            $sem = $sem + 1;
        }

    }
}
