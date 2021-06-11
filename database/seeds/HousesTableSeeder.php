<?php

use Illuminate\Database\Seeder;

use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 0; $i < 20; $i++) {

            // Creazione istanza
            $new_house = new House();
            // popolare le row
            // $table->string('address');
            $new_house->address = 'Clarence St, ' . rand(1, 100);
            // $table->string('city');
            $new_house->city = 'Sydney';
            // $table->string('state');
            $new_house->state = 'Australia';
            // $table->smallInteger('square_meters')->unsigned();
            $new_house->square_meters = rand(100, 300);
            // $table->tinyInteger('rooms')->unsigned();
            $new_house->rooms = rand(3, 8);
            // $table->text('descriptions')->nullable();
            $new_house->descriptions = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis cumque maxime, eveniet blanditiis officiis sit, consectetur labore magni minus error.';
            // $table->mediumInteger('price')->unsigned();
            $new_house->price = rand(100000, 500000);
            // $table->boolean('is_available')->default(1);
            $new_house->is_available = rand(0, 1);

            //push nel db
            $new_house->save();
        }
    }
}
