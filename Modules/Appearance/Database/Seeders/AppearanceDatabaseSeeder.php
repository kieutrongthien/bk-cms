<?php

namespace Modules\Appearance\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Appearance\Entities\Appearance;

class AppearanceDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $data = [];

        $data[] = [
            'id' => 1,
            'key' => 'default_page',
            'value' => '1'
        ];

        $data[] = [
            'id' => 2,
            'key' => 'default_theme',
            'value' => 'nikki'
        ];        

        $data[] = [
            'id' => 3,
            'key' => 'main_color',
            'value' => '#333'
        ];

        $data[] = [
            'id' => 4,
            'key' => 'secondary_color',
            'value' => '#111'
        ];

        Appearance::insert($data);
    }
}
