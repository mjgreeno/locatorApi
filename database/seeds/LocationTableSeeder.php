<?php

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(DB::table('users')->get()->count() == 0){

            DB::table('locations')->insert([
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WALGREENS', 'address' => '3696 SW TOPEKA BLVD', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66611', 'latitude' => 39.03504000, 'longitude' => -95.75870000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'KMART PHARMACY', 'address' => '1740 SW WANAMAKER ROAD', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66604', 'latitude' => 39.03504000, 'longitude' => -95.75870000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'CONTINENTAL PHARMACY LLC', 'address' => '821 SW 6TH AVE', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66603', 'latitude' => 39.05433000, 'longitude' => -95.68453000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'STORMONT-VAIL RETAIL PHARMACY', 'address' => '2252 SW 10TH AVE.', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66604', 'latitude' => 39.05167000, 'longitude' => -95.70534000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'DILLON PHARMACY', 'address' => '2010 SE 29TH ST', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66605', 'latitude' => 39.01638400, 'longitude' => -95.65065000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WAL-MART PHARMACY ', 'address' => '1501 S.W. WANAMAKER ROAD', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66604', 'latitude' => 39.03955000, 'longitude' => -95.76459000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'KING PHARMACY ', 'address' => '4033 SW 10TH AVE', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66604', 'latitude' => 39.05121000, 'longitude' => -95.72700000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'HY-VEE PHARMACY ', 'address' => '12122 STATE LINE RD', 'city' => 'LEAWOOD', 'state' => 'KS', 'postal_code' => '66209', 'latitude' => 38.90775300, 'longitude' => -94.60801000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'JAYHAWK PHARMACY AND PATIENT SUPPLY', 'address' => '2860 SW MISSION WOODS DR', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66614', 'latitude' => 39.01505300, 'longitude' => -95.77866000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'PRICE CHOPPER PHARMACY', 'address' => '3700 W 95TH ST', 'city' => 'LEAWOOD', 'state' => 'KS', 'postal_code' => '66206', 'latitude' => 38.95792000, 'longitude' => -94.62881500 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'AUBURN PHARMACY', 'address' => '13351 MISSION RD', 'city' => 'LEAWOOD', 'state' => 'KS', 'postal_code' => '66209', 'latitude' => 38.8853450, 'longitude' => -94.62800000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'CVS PHARMACY', 'address' => '5001 WEST 135 ST', 'city' => 'LEAWOOD', 'state' => 'KS', 'postal_code' => '66224', 'latitude' => 38.88323000, 'longitude' => -94.64518000  ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'SAMS PHARMACY', 'address' => '1401 SW WANAMAKER ROAD', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66604', 'latitude' => 39.04160300, 'longitude' => -95.76462600 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'CVS PHARMACY', 'address' => '2835 SW WANAMAKER RD', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66614', 'latitude' => 39.01550300, 'longitude' => -95.76434000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'HY-VEE PHARMACY', 'address' => '2951 SW WANAMAKER RD', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66614', 'latitude' => 39.01215700, 'longitude' => -95.76394000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'TALLGRASS PHARMACY', 'address' => '601 SW CORPORATE VIEW', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66615', 'latitude' => 39.05716000, 'longitude' => -95.76692000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'HUNTERS RIDGE PHARMACY', 'address' => '3405 NW HUNTERS RIDGE TER STE 200', 'city' => 'TOPEKA', 'state' => 'KS', 'postal_code' => '66618', 'latitude' => 39.12984500, 'longitude' => -95.71265400 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'ASSURED PHARMACY', 'address' => '11100 ASH ST STE 200', 'city' => 'LEAWOOD', 'state' => 'KS', 'postal_code' => '66211', 'latitude' => 38.92663200, 'longitude' => -94.64744000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WALGREENS', 'address' => '4701 TOWN CENTER DR', 'city' => 'LEAWOOD', 'state' => 'KS', 'postal_code' => '66211', 'latitude' => 38.91619000, 'longitude' => -94.64036600 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'PRICE CHOPPER PHARMACY', 'address' => '1100 SOUTH 7 HWY', 'city' => 'BLUE SPRINGS', 'state' => 'MO', 'postal_code' => '64015', 'latitude' => 39.02931000, 'longitude' => -94.27175000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'CVS PHARMACY', 'address' => '1901 WEST KANSAS STREET', 'city' => 'LIBERTY', 'state' => 'MO', 'postal_code' => '64068', 'latitude' => 39.24385000, 'longitude' => -94.44961000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'MARRS PHARMACY', 'address' => '205 RD MIZE ROAD', 'city' => 'BLUE SPRINGS', 'state' => 'MO', 'postal_code' => '64014', 'latitude' => 39.02353000, 'longitude' => -94.26060500 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WAL-MART PHARMACY', 'address' => '600 NE CORONADO DRIVE', 'city' => 'BLUE SPRINGS', 'state' => 'MO', 'postal_code' => '64014', 'latitude' => 39.02419300, 'longitude' => -94.25503000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WAL-MART PHARMACY', 'address' => '10300 E HWY 350', 'city' => 'RAYTOWN', 'state' => 'MO', 'postal_code' => '64133', 'latitude' => 38.98376500, 'longitude' => -94.45930500 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'HY-VEE PHARMACY', 'address' => '9400 E. 350 HIGHWAY', 'city' => 'RAYTOWN', 'state' => 'MO', 'postal_code' => '64133', 'latitude' => 38.99300000, 'longitude' => -94.47083000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'HY-VEE PHARMACY', 'address' => '625 W 40 HWY', 'city' => 'BLUE SPRINGS', 'state' => 'MO', 'postal_code' => '64014', 'latitude' => 39.01070400, 'longitude' => -94.27108000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'HY-VEE PHARMACY', 'address' => '109 NORTH BLUE JAY DRIVE', 'city' => 'LIBERTY', 'state' => 'MO', 'postal_code' => '64068', 'latitude' => 39.24575800, 'longitude' => -94.44702000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WALGREENS', 'address' => '1701 NW HIGHWAY 7', 'city' => 'BLUE SPRINGS', 'state' => 'MO', 'postal_code' => '64015', 'latitude' => 39.03754800, 'longitude' => -94.27153000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WALGREENS', 'address' => '9300 E GREGORY BLVD', 'city' => 'RAYTOWN', 'state' => 'MO', 'postal_code' => '64133', 'latitude' => 38.99534200, 'longitude' => -94.47340000 ],
                [ 'created_at' => date('Y-m-d H:i:s'), 'pharmacy_name' => 'WALGREENS', 'address' => '1191 W KANSAS AVE', 'city' => 'LIBERTY', 'state' => 'MO', 'postal_code' => '64068', 'latitude' => 39.24387000, 'longitude' => -94.44186400 ],

            ]);

        } else {
            echo "table has already been populated please empty and try again ";
        }

    }
}
