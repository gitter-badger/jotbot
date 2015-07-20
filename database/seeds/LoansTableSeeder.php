<?php

use App\Loan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('loans')->delete();

        //[1] Tony Stark(1) @ Glass Towers(1) | Partnership(4)--Ag-Input 2015
        Loan::create([
            'applicant_id' => 1,
            'app_date' => '04/03/2015',
            'distributor_approval_date' => '04/14/2015',
            'decision_date' => '04/19/2015',
            'default_due_date' => '12/15/2015',
            'due_date' => '12/15/2015',
            'loan_type_id' => 2,
            'status_id' => 1,
            'analyst_can_approve' => 1,
            'crop_year' => '2015',
            'season' => 'S',
            'loc_id' => 5,
            'region_id' => 3,
            'user_id' => 2,
            'farmer_id' => 1,
            'is_cross_collateralized' => 1,
            'is_fast_tracked' => 0,
            'is_watched' => 1,
            'disbursement_issue' => 0,
            'has_distributor' => 1,
            'distributor_id' => 6,
            'has_addendum' => 1,
            'addendum_type' => 2,
            'bankruptcy_history' => 0,
            'required_3party' => 0,
            'added_land' => 0,
            'controlled_disbursement' => 0,
            'crop_inspection' => 0,
            'reconciliation' => 3,
            'account_classification' => '-',
            'grade' => '-',
            'limit_warning' => 0,
            'equipment_collateral' => 1,
            'realestate_collateral' => 1,
            'other_collateral' => 1,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'conditions_pg' => 1,
            'conditions_ccl' => 0,
            'conditions_cd' => 0,
            'its_list' => 1,
            'fsa_compliant' => 1
        ]);

        // Blake Donald(10) @ Rainbow Bridge(6) | Individual--Capital Bridge 2015
        Loan::create([
            'applicant_id' => 6,
            //'app_date' => Carbon::yesterday()->format('m/d/Y'),
            'app_date' => '04/24/2015',
            'default_due_date' => '06/15/2015',
            'due_date' => '06/15/2015',
            'loc_id' => 5,
            'user_id' => 2,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 5,
            'farmer_id' => 10,
            'analyst_can_approve' => 1,
            'bankruptcy_history' => 1,
            'limit_warning' => 2,
            'limit_warning_message' => 'Caution: 76% of budget exceeded.',
            'account_classification' => 'B',
            'grade' => 'B'
        ]);

        // Bruce Wayne(2) @ Secret Cave(3) | Joint Venture (1)--Ag-Pro Fasttrack 2015
        Loan::create([
            'applicant_id' => 3,
            'app_date' => Carbon::now()->subDays(2)->format('m/d/Y'),
            'default_due_date' => '12/15/2015',
            'due_date' => '12/15/2015',
            'loc_id' => 5,
            'user_id' => 2,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 4,
            'farmer_id' => 2,
            'limit_warning' => 2,
            'limit_warning_message' => 'Caution: Seed budget exceeded.',
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'reconciliation' => 0,
            'account_classification' => 'B',
            'grade' => 'B'
        ]);

        // Steve Rogers(12) @ Shielded Farms(4) | Corporation -- Ag-Vest 2015
        Loan::create([
            'applicant_id' => 4,
            'app_date' => Carbon::now()->format('m/d/Y'),
            'default_due_date' => '12/15/2015',
            'due_date' => '12/15/2015',
            'loc_id' => 5,
            'user_id' => 2,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 6,
            'farmer_id' => 12,
            'limit_warning' => 3,
            'limit_warning_message' => 'Warning: 97% of budget exceeded.',
            'its_list' => 1,
            'reconciliation' => 0,
            'account_classification' => 'A',
            'grade' => 'A'

        ]);

        // Clint Barton(5) @ Nested Row(2) | Spousal--Ag-Pro 2015
        Loan::create([
            'applicant_id' => 2,
            'app_date' => Carbon::now()->subDays(3)->format('m/d/Y'),
            'default_due_date' => '12/15/2015',
            'due_date' => '12/15/2015',
            'decision_date' => Carbon::now()->format('m/d/Y'),
            'loc_id' => 5,
            'user_id' => 2,
            'region_id' => 3,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 3,
            'farmer_id' => 5,
            'limit_warning' => 0,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'reconciliation' => 0,
            'account_classification' => 'C',
            'grade' => 'C'
        ]);

        // Matt Murdoch(9) @ Dark World(5) | Individual -- All-in 2015
        Loan::create([
            'applicant_id' => 5,
            'app_date' => Carbon::now()->subDays(2)->format('m/d/Y'),
            'default_due_date' => '12/15/2015',
            'due_date' => '12/15/2015',
            'loc_id' => 5,
            'user_id' => 2,
            'region_id' => 6,
            'crop_year' => '2015',
            'season' => 'F',
            'loan_type_id' => 1,
            'farmer_id' => 9,
            'limit_warning' => 0,
            'is_watched' => 1,
            'bankruptcy_history' => 1,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'reconciliation' => 3,
            'account_classification' => '-',
            'grade' => '-'
        ]);

        // Diana Prince(7) @ Kingdom Plains(7) | Spousal -- Grain Storage 2015
        Loan::create([
            'applicant_id' => 7,
            'app_date' => Carbon::now()->subDays(4)->format('m/d/Y'),
            'default_due_date' => '03/15/2015',
            'due_date' => '04/30/2015',
            'loc_id' => 2,
            'user_id' => 2,
            'region_id' => 2,
            'crop_year' => '2015',
            'season' => 'S',
            'loan_type_id' => 7,
            'farmer_id' => 7,
            'limit_warning' => 3,
            'limit_warning_message' => 'Warning: 100% of budget exceeded.',
            'its_list' => 1,
            'fsa_compliant' => 1,
            'reconciliation' => 0,
            'account_classification' => 'A',
            'grade' => 'A'
        ]);

        // Tony Stark(1) @ Glass Towers(1) | Partnership | Ag-Input 2014
        Loan::create([
            'app_date' => '01/01/2014',
            'default_due_date' => '12/15/2014',
            'due_date' => '12/15/2014',
            'loan_type_id' => 2,
            'status_id' => 2,
            'crop_year' => '2014',
            'season' => 'F',
            'loc_id' => 5,
            'region_id' => 3,
            'user_id' => 2,
            'farmer_id' => 1,
            'applicant_id' => 2,
            'is_active' => 0,
            'is_cross_collateralized' => 0,
            'is_fast_tracked' => 0,
            'has_distributor' => 1,
            'distributor_id' => 6,
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_afsa' => 1,
            'conditions_adis' => 1,
            'its_list' => 1,
            'fsa_compliant' => 1,
            'prev_lien_verified' => 1,
            'leases_valid' => 1,
            'bankruptcy_order_received' => 1,
            'received_3party' => 1,
            'recommended' => 1,
            'arm_approved' => 1,
            'dist_approved' => 1,
            'loan_closed' => 1,
            'loan_closed_date' => '08/01/2014',
            'added_land_verified' => 1,
            'permission_to_insure_verified' => 1,
            'arm_ucc_received' => 1,
            'dist_ucc_received' => 1,
            'aoi_received' => 1,
            'ccc_received' => 1,
            'rebate_assignment' => 1,
            'limit_warning' => 4,
            'limit_warning_message' => '100% of budget exceeded',
            'crop_inspection' => 1,
            'reconciliation' => 0,
            'grade' => 'B'
        ]);

        // Matches Excel 2015
        Loan::create([
            'app_date' => '02/18/2015',
            'default_due_date' => '12/15/2015',
            'due_date' => '12/15/2015',
            'loan_type_id' => 2,
            'status_id' => 1,
            'crop_year' => '2015',
            'season' => 'S',
            'loc_id' => 6,
            'region_id' => 5,
            'user_id' => 3,
            'farmer_id' => 9,
            'applicant_id' => 8,
            'is_cross_collateralized' => 0,
            'is_fast_tracked' => 0,
            'grade' => 'B',
            'equipment_collateral' => 0,
            'realestate_collateral' => 0,
            'analyst_can_approve' => 0,
            'is_watched' => 0,
            'disbursement_issue' => 0,
            'has_rebates' => 0,
            'has_distributor' => 1,
            'distributor_id' => 3,
            'is_stale' => 0,
            'has_addendum' => 0,
            //'addendum_type' => null,
            'bankruptcy_history' => 0,
            'required_3party' => 0,
            'added_land' => 0,
            'controlled_disbursement' => 0,
            'its_list' => 0,
            'fsa_compliant' => 1,
            'prev_lien_verified' => 0,
            'leases_valid' => 0,
            'bankruptcy_order_received' => 0,
            'received_3party' => 0,
            'recommended' => 0,
            'arm_approved' => 0,
            'dist_approved' => 0,
            'loan_closed' => 0,
            //'loan_closed_date' => '',
            'added_land_verified' => 0,
            'permission_to_insure_verified' => 0,
            'arm_ucc_received' => 0,
            'dist_ucc_received' => 0,
            'aoi_received' => 0,
            'ccc_received' => 0,
            'rebate_assignment' => 0,
            'limit_warning' => 1,
            //'limit_warning_message' => '',
            'crop_inspection' => 0,
            'reconciliation' => 0,
            'account_classification' => 'C',
            'grade' => 'C',
            'conditions_asa' => 1,
            'conditions_aci' => 1,
            'conditions_areb' => 1,
            'conditions_adis' => 1,
            'conditions_pg' => 1,
            'conditions_ccl' => 1,
            'conditions_cd' => 1,
            'its_list' => 1
        ]);
    }
}