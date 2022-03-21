<?php

namespace Database\Seeders;

use App\Models\Dealer;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dealer = new Dealer();
        $dealer->code = "1111";
        $dealer->name = "Hưng Nguyễn";
        $dealer->phone = "0973205802";
        $dealer->email = "hungnv@gmail.com";
        $dealer->address = "Hòa Bình";
        $dealer->manager_name = "Nguyễn Văn Hưng";
        $dealer->status_id = Status::all()->random()->id;
        $dealer->save();

        $dealer = new Dealer();
        $dealer->code = "2222";
        $dealer->name = "Nhung Nguyễn";
        $dealer->phone = "0973205222";
        $dealer->email = "nhungnt@gmail.com";
        $dealer->address = "Hà Nôi";
        $dealer->manager_name = "Nguyễn Thị Nhung";
        $dealer->status_id = Status::all()->random()->id;
        $dealer->save();

        $dealer = new Dealer();
        $dealer->code = "3333";
        $dealer->name = "Long Nguyễn";
        $dealer->phone = "0973205112";
        $dealer->email = "longnv@gmail.com";
        $dealer->address = "Bình Dương";
        $dealer->manager_name = "Nguyễn Văn Long";
        $dealer->status_id = Status::all()->random()->id;
        $dealer->save();
    }
}
