<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImportLocationsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $service = new App\Library\GHN\Service();
        $provinces = $service->getProvinces()['data'];

        foreach($provinces as $province) {
            $p = new App\Models\Province();
            $p->name = $province['ProvinceName'];
            $p->ghn_id = $province['ProvinceID'];
            $p->code = $province['Code'];
            $p->save();
        }

        //
        $service = new App\Library\GHN\Service();
        $provinces = App\Models\Province::all();

        foreach ($provinces as $province) {
            echo "Importing {$province->name} \n";

            $districts = $service->getDistricts($province->ghn_id)['data'];

            foreach($districts as $district) {
                $d = new App\Models\District();
                $d->province_id = $province->id;
                $d->name = $district['DistrictName'];
                $d->ghn_id = $district['DistrictID'];
                $d->code = $district['Code'];
                $d->save();
            }
        }

        //
        $service = new App\Library\GHN\Service();
        $districts = App\Models\District::all();

        foreach ($districts as $district) {
            echo "Importing {$district->name} \n";

            $wards = $service->getWards($district->ghn_id)['data'];

            if ($wards != null) {
                foreach($wards as $ward) {
                    $w = new App\Models\Ward();
                    $w->district_id = $district->id;
                    $w->name = $ward['WardName'];
                    $w->ghn_id = $ward['WardCode'];
                    $w->code = $ward['WardCode'];
                    $w->save();
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
