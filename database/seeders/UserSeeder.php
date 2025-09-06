<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'meetup_session_id' => 1,
                'username' => 'Comp1',
                'password' => bcrypt('Cccomp1!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp2',
                'password' => bcrypt('Cccomp2!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp3',
                'password' => bcrypt('Cccomp3!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp4',
                'password' => bcrypt('Cccomp4!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp5',
                'password' => bcrypt('Cccomp5!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp6',
                'password' => bcrypt('Cccomp6!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp7',
                'password' => bcrypt('Cccomp7!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp8',
                'password' => bcrypt('Cccomp8!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp9',
                'password' => bcrypt('Cccomp9!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp10',
                'password' => bcrypt('Cccomp10!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp11',
                'password' => bcrypt('Cccomp11!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Comp12',
                'password' => bcrypt('Cccomp12!'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'admin',
                'password' => bcrypt('CubicAR1225'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'GuadayWilly',
                'password' => bcrypt('GuadaWilly23'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador1',
                'password' => bcrypt('1Tvz0sTF'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador2',
                'password' => bcrypt('wHrRCiYe'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador3',
                'password' => bcrypt('V4TRB9pn'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador4',
                'password' => bcrypt('xhv30X86'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador5',
                'password' => bcrypt('lOmufUBF'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador6',
                'password' => bcrypt('eX5uP7Tz'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador7',
                'password' => bcrypt('pGoOcnLt'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador8',
                'password' => bcrypt('pSN2ODDj'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador9',
                'password' => bcrypt('R2xhFSaL'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Facilitador10',
                'password' => bcrypt('qgCAfvex'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin1',
                'password' => bcrypt('Kg7XPRIX'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin2',
                'password' => bcrypt('q9WpLa23'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin3',
                'password' => bcrypt('YNkGb1pM'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin4',
                'password' => bcrypt('Vdy5bsLF'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin5',
                'password' => bcrypt('rbfjEgTr'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin6',
                'password' => bcrypt('GiFtnGWh'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin7',
                'password' => bcrypt('eqDILch6'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin8',
                'password' => bcrypt('HEw9zSG2'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin9',
                'password' => bcrypt('zCZSD5Ro'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Checkin10',
                'password' => bcrypt('7QH08NP0'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Caja1',
                'password' => bcrypt('X0PO80so'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Caja2',
                'password' => bcrypt('3BrU5wYI'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Caja3',
                'password' => bcrypt('HYkPy10C'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Caja4',
                'password' => bcrypt('JZX58fJc'),
            ],
            [
                'meetup_session_id' => 1,
                'username' => 'Caja5',
                'password' => bcrypt('kXoqGWkR'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
