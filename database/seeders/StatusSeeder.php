<?php

namespace Database\Seeders;

use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->name = "Hoạt động";
        $status->save();

        $status = new Status();
        $status->name = "Ngừng hoạt động";
        $status->save();
    }
}
