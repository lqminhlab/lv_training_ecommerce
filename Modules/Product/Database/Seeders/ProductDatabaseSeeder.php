<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            SeedFakeCategoryTableSeeder::class,
            SeedFakeGalleryTableSeeder::class,
            SeedFakeProductTableSeeder::class,
        ]);
    }
}
