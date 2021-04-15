<?php

namespace Modules\Pages\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Pages\Entities\Pages;
use Carbon\Carbon;

class PagesDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Pages::insert([
            'id' => 1,
            'name' => 'Homepage',
            'slug' => 'home',
            'content' => view('pages::default'),
            'created_at' => Carbon::now()
        ]);
    }
}
