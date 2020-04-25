<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     ['id' => 1, "name" => 'Aberfeldy',
        //     "image" => 'gambarGAUSAHDIGANTI.jpg', "description" => "lorem ipsum",
        //     "stock" => 8, 'cluster_id' => 3, 'body' => 2, 'sweetness' => 2, 'spicy' => 1],
        //     ['id' => 1, "name" => 'Aberfeldy',
        //     "image" => 'gambarGAUSAHDIGANTI.jpg', "description" => "lorem ipsum",
        //     "stock" => 8, 'cluster_id' => 3, 'body' => 2, 'sweetness' => 2, 'spicy' => 1],
        //     // ['id' => 1, "name" => 'Minuman pertama',
        //     // "image" => 'gambarPertama.jpg', "description" => "ini deskripsi minuman pertama",
        //     // "stock" => 4, 'cluster_id' => 2],
        //     // ['id' => 2, "name" => 'Minuman kedua',
        //     // "image" => 'gambarKedua.jpg', "description" => "ini deskripsi minuman kedua",
        //     // "stock" => 7, 'cluster_id' => 1],
        //     // ['id' => 3, "name" => 'Minuman ketiga',
        //     // "image" => 'gambarketiga.jpg', "description" => "ini deskripsi minuman ketiga",
        //     // "stock" => 1, 'cluster_id' => 1],
        //     // ['id' => 4, "name" => 'Minuman keempat',
        //     // "image" => 'gambarkeempat.jpg', "description" => "ini deskripsi minuman keempat",
        //     // "stock" => 8, 'cluster_id' => 3],
        // ];

        $nameArray = [
            'Aberfeldy','Aberlour','AnCnoc','Ardbeg','Ardmore','ArranIsleOf','Auchentoshan','Auchroisk','Aultmore',
            'Balblair','Balmenach','Belvenie','BenNevis','Benriach','Benrinnes','Benromach','Bladnoch','BlairAthol','Bowmore',
            'Bruichladdich','Bunnahabhain','Caol Ila','Cardhu','Clynelish','Craigallechie','Craigganmore','Dailuaine','Dalmore','Dalwhinnie','Deanston','Dufftown','Edradour','GlenDeveronMacduff','GlenElgin','GlenGarioch','GlenGrant','GlenKeith','GlenMoray','GlenOrd','GlenScotia','GlenSpey','Glenallachie','Glendronach','Glendullan','Glenfarclas','Glenfiddich','Glengoyne','Glenkinchie','Glenlivet','Glenlossie','Glenmorangie','Glenrothes','Glenturret','Highland Park','Inchgower','Isle of Jura','Knochando','Lagavulin','Laphroig','Linkwood','Loch Lomond','Longmorn','Macallan','Mannochmore','Miltonduff','Mortlach','Oban','OldFettercairn','OldPulteney','RoyalBrackla','RoyalLochnagar','Scapa','Speyburn','Speyside','Springbank','Strathisla','Strathmill','Talisker','Tamdhu','Tamnavulin','Teaninich','Tobermory','Tomatin','Tomintoul','Tormore','Tullibardine',
        ];

        $sweetnessArray = [
            2,3,3,1,2,3,2,3,2,3,3,2,2,2,2,2,2,2,2,1,2,1,3,2,2,3,2,2,2,2,3,3,3,3,1,2,3,2,2,2,3,3,2,2,4,3,2,2,3,2,2,3,3,2,3,1,3,1,2,3,1,2,3,1,4,2,2,2,1,3,2,2,4,2,2,2,3,2,2,3,2,1,3,3,2,3,
        ];

        $spicyArray = [
            1,3,0,2,1,1,1,1,0,2,1,2,2,2,1,2,1,2,2,2,1,2,1,2,2,1,2,2,1,1,0,1,1,1,3,0,2,2,2,0,1,1,1,1,2,0,1,2,2,2,2,1,2,1,2,1,2,1,0,1,1,1,1,1,0,3,2,2,1,2,2,1,1,0,2,2,2,3,0,2,2,0,2,2,0,2,
        ];

        $maltyArray = [
            2,3,2,2,3,1,2,2,2,1,0,2,2,2,3,2,2,2,1,2,2,1,2,1,2,2,2,2,2,3,2,2,2,1,2,1,1,2,2,2,2,2,2,2,3,2,2,2,2,2,1,2,2,2,2,1,1,1,1,1,2,3,2,1,1,1,2,3,2,2,2,2,2,2,1,3,1,2,2,1,0,2,2,2,1,2,
        ];
        $clusterArray = [
            1,1,3,2,1,3,3,1,3,3,1,1,1,3,1,1,3,1,1,1,3,2,3,2,4,3,1,1,3,1,3,1,4,3,1,3,3,3,1,3,3,3,1,1,1,3,3,3,1,3,3,1,1,1,3,2,1,2,2,3,3,1,1,3,3,1,2,4,4,4,1,1,3,3,1,1,3,2,3,3,3,3,1,3,3,4,
        ];


        // foreach($data as $d){
        //     DB::table('items')->insert([
        //         'id' => $d['id'],
        //         'name' => $d['name'],
        //         'image' => $d['image'],
        //         'description' => $d['description'],
        //         'stock' => $d['stock'],
        //         'cluster_id' => $d['cluster_id']
        //     ]);
        // }


        $faker = Faker::create();
        for($i=0;$i<86;$i++){
            $plusSatu = $i+1;
            // dd($nameArray[$i]);
            DB::table('items')->insert([
                'id' => $i+1,
                'name' => $nameArray[$i],
                'image' => "gambar ke".$plusSatu,
                'description' => "deksripsi ke".$plusSatu,
                'stock' => rand($min=5,$max=100),
                'sweetness' => $sweetnessArray[$i],
                'spicy' => $spicyArray[$i],
                'malty' => $maltyArray[$i],
                'cluster_id' => $clusterArray[$i],
                'price' => $faker->numberBetween($min=10,$max=100)
            ]);
        }
    }
}
