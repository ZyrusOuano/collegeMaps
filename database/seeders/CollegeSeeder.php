<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colleges')->insert([
            ['name' => 'University of the Philippines System',
            'address' => 'U.P. Diliman Campus, Diliman, Quezon City',
            'latitude' => 14.654619,
            'longtitude' => 121.068492,
            'website' => 'http://www.up.edu.ph',
            'contact_number' => '(02) 920-688 / 920-6897 / 927-60-84'],

            ['name' => 'Technological University of the Philippines',
            'address' => 'Ayala Boulevard, Ermita, City of Manila, First District 1000',
            'latitude' => 14.587328,
            'longtitude' => 120.984573,
            'website' => 'http://www.tup.edu.ph',
            'contact_number' => '(02) 302-7750 to 61 local 112'],

            ['name' => 'Rizal Technological University',
            'address' => 'Boni Avenue, City of Mandaluyong',
            'latitude' => 14.574839,
            'longtitude' => 121.042229,
            'website' => 'http://www.rtu.edu.ph/',
            'contact_number' => '(02) 533-28-58'],

            ['name' => 'Polytechnic University of the Philippines',
            'address' => 'A. Mabini Campus, Anonas Street, Sta. Mesa, Manila 1016',
            'latitude' => 14.598177,
            'longtitude' => 121.01084,
            'website' => 'www.pup.edu.ph',
            'contact_number' => '(02) 716-7832 to 40'],

            ['name' => 'Philippine Normal University',
            'address' => 'Taft Avenue, Malate, City of Manila, First District',
            'latitude' => 14.58726,
            'longtitude' => 120.982787,
            'website' => 'http://www.pnu.edu.ph',
            'contact_number' => '(02) 527-0364 / 527-0374 / 527-0375'],

            ['name' => 'Pamantasan ng Lungsod ng Maynila',
            'address' => 'General Luna, corner Muralla St, Intramuros, Manila, 1002 Metro Manila',
            'latitude' => 14.586977,
            'longtitude' => 120.97621,
            'website' => 'https://plm.edu.ph/',
            'contact_number' => '(02) 8643 2500'],

            ['name' => 'Eulogio Amang Rodriguez Institute of Science and Technology',
            'address' => 'H2X2+JG2, Nagtahan St, Sampaloc, Manila, 1008 Metro Manila',
            'latitude' => 14.599084,
            'longtitude' => 121.001225,
            'website' => 'https://earist.edu.ph/',
            'contact_number' => '(02) 7738 5059'],

            ['name' => 'Marikina Polytechnic College',
            'address' => '2 J. Chanyungco St, Marikina, 1800 Metro Manila',
            'latitude' => 14.63247,
            'longtitude' => 121.098639,
            'website' => 'https://mpc.edu.ph/',
            'contact_number' => '(02) 8682 0596'],

            ['name' => 'Navotas Polytechnic College',
            'address' => 'JXV4+WP6, Bangus St, Navotas, Metro Manila',
            'latitude' => 14.644954,
            'longtitude' => 120.956779,
            'website' => 'https://navotaspolytechniccollege.edu.ph/',
            'contact_number' => '(02) 8571 6323'],

            ['name' => 'Pateros Technological College',
            'address' => '205 College St, Pateros, Metro Manila',
            'latitude' => 14.552952,
            'longtitude' => 121.069102,
            'website' => 'https://www.paterostechnologicalcollege.edu.ph/',
            'contact_number' => '(2) 8 642 8896'],


        ]);
    }
}
