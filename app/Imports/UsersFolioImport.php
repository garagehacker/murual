<?php

namespace App\Imports;

use App\Models\UserFolio;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersFolioImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UserFolio([
            'name'     => $row[0],
            'nfo_folio_no'    => $row[1],
            'nfo_folio_type' => $row[2],
            'nfo_start_date' => $row[3],
            'nfo_product_name' => $row[4],
            'nfo_balance_unit' => $row[5],
            'nfo_avg_cost_price' => $row[6],
            'nfo_purchase_cost_price' => $row[7],
            'nfo_div_init_paid' => $row[8],
            'nfo_div_init_reinv' => $row[9],
            'nfo_no_days' => $row[10],
            'nfo_current_nav' => $row[11],
            'nfo_curret_value' => $row[12],
            'nfo_profile_plus_loss' => $row[13],
            'nfo_abs_percentage' => $row[14],
            'nfo_cagr' => $row[15],
            'nfo_xirr' => $row[16],
        ]);
    }
}
