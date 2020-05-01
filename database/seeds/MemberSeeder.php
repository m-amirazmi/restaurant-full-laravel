<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Ramsey',
            'lname' => 'Jordon',
            'email' => 'rj@gmail.com',
            'phone_number' => '123-456-7890',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
