<?php

use Illuminate\Database\Seeder;
use App\Movie;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $directors=factory(App\Director::class)->times(7)->create();
        $movies=Movie::all();

        foreach ($movies as $oneMovies) {
          $oneMovies->director()->associate($directors->random(1)->first()->id);
          $oneMovies->save();
        }

    }
}
