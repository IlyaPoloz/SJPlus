<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2023-2024'],
            ['type' => 'system_title', 'description' => 'SJP'],
            ['type' => 'system_name', 'description' => 'School Journal Plus'],
            ['type' => 'term_ends', 'description' => '7/10/2023'],
            ['type' => 'term_begins', 'description' => '7/10/2023'],
            ['type' => 'phone', 'description' => '3717272812'],
            ['type' => 'address', 'description' => 'Latvia, Riga, Raiņa Bulvāris 19'],
            ['type' => 'system_email', 'description' => 'sjp@sjp.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_rf', 'description' => '1225'],
            ['type' => 'next_term_fees_phd', 'description' => '1225'],
            ['type' => 'next_term_fees_mp', 'description' => '1225'],
            ['type' => 'next_term_fees_up', 'description' => '1225'],
            ['type' => 'next_term_fees_dp', 'description' => '1225'],
            ['type' => 'next_term_fees_cp', 'description' => '1225'],
        ];

        DB::table('settings')->insert($data);

    }
}
