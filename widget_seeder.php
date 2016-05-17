<?php

use Illuminate\Database\Seeder;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Widget 1', 'Description' => 'The first widget.'],
            ['name' => 'Widget 2', 'Description' => 'The second widget.'],
            ['name' => 'Widget 3', 'Description' => 'The third widget.'],
            ['name' => 'Widget 4', 'Description' => 'The fourth widget.'],
            ['name' => 'Widget 5', 'Description' => 'The fifth widget.'],
        ];

        foreach ($items as $item) {
            App\Widget::create($item);
        }
    }
}
