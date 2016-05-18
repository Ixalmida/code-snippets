<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // Seeders to run (order matters!)
    private $seeders = [
        'WidgetSeeder' => 'widgets',
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear the error log on each run
        file_put_contents(__DIR__ . '/../../storage/logs/laravel.log', '');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($this->seeders as $seeder => $table) {
            // Truncate the table, if any
            if ($table) {
                DB::table($table)->truncate();
            }

            // Run the seeder
            $this->call($seeder);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
