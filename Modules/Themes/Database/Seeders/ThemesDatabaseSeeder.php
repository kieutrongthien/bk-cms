<?php

namespace Modules\Themes\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Themes\Entities\Themes;
use Carbon\Carbon;

class ThemesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        if(!Themes::where('lower_name', 'nikki')->exists()) {
            Themes::insert([
                'name' => 'Nikki',
                'lower_name' => 'nikki',
                'author' => 'Colorlib',
                'description' => 'Default theme from Colorlib.',
                'created_at' => Carbon::now()
            ]);
        }
    }
}
