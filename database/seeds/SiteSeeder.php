<?php

use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Site::create([
            'logo' => null,
            'phone' => null,
            'email' => null,
            'address' => null,
        ]);
    }
}
