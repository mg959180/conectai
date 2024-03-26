<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\masterController;

class packagesController extends Controller
{
    public function index()
    {
        $menu_id = '';
        if (isset($_GET['menu'])) {
            $menu_id = $_GET['menu'];
        }

        $section_type = '';
        if (isset($_GET['section_type'])) {
            $section_type = $_GET['section_type'];
        }

        $parent_results = DB::table(TBL_SITE_MENU)->selectRaw("smu_id , smu_name")->get();
        $data_results =   json_decode(json_encode($parent_results), true);
        $parent_menu_list = [];
        foreach ($data_results as $key => $val) {
            $parent_menu_list[$val['smu_id']] = $val['smu_name'];
        }

        $filter = false;
        $query_results = DB::table(TBL_PLANS)->selectRaw("*, (SELECT GROUP_CONCAT(smu_name SEPARATOR ', ') FROM " . TBL_SITE_MENU . " WHERE FIND_IN_SET(smu_id,plan_smu_id)  ) as menu_name");

        if (isset($menu_id) && !empty($menu_id)) {
            $query_results->whereRaw('FIND_IN_SET(' . $menu_id . ',plan_smu_id)');
            $filter = true;
        }
        if (isset($section_type) && !empty($section_type)) {
            $query_results->whereRaw("pln_section_type = '" . $section_type . "'");
            $filter = true;
        }

        $query_results = $query_results->get();
        $query_results = json_decode(json_encode($query_results), true);
        $mstObj = new masterController();
        $mstObj->setMetaData(['title' => 'Website Plans Settings - Admin - IHosting Mart Website', 'meta_desc' => 'Dashboard - Admin - Website Plans Settings', 'meta_keyword' => 'Dashboard - Admin - Website Plans Settings']);
        $mstObj->setData(['page' => 'admin.plans.list', 'page_title' => 'Website Plans', 'results' => ['data' => $query_results, 'menu_list' => $parent_menu_list, 'menu_filter' => $menu_id, 'section_filter' => $section_type, 'filter' => $filter]]);
        $mstObj->renderAdminDashboardPage();
    }

    public function packagesForm($id = null)
    {
        $parent_results = DB::table(TBL_SITE_MENU)->selectRaw("smu_id , smu_name")->get();
        $data_results =   json_decode($parent_results, true);
        $parent_menu_list = [];
        foreach ($data_results as $key => $val) {
            $parent_menu_list[$val['smu_id']] = $val['smu_name'];
        }
        $currencies_list =  json_decode(json_encode(DB::select(" SELECT 
        cun_currency AS currency_code,
        cun_id AS currency_country_id, 
        cun_name AS currency_country_name
        FROM " . TBL_COUNTRIES . " WHERE 1 ")), true);
        $mstObj = new masterController();

        if (!empty($id)) {
            $id = decrypt($id);
            $query_results = DB::table(TBL_PLANS)->selectRaw("*")->where('plan_id', $id)->get();
            $data_res = json_decode(json_encode($query_results), true);
            $mstObj->setMetaData(['title' => 'Edit Website Plans Settings - Admin - IHosting Mart Website', 'meta_desc' => 'Dashboard - Admin - Website Plans Settings', 'meta_keyword' => 'Dashboard - Admin - Website Plans Settings']);
            $mstObj->setData(['page' => 'admin.plans.form', 'page_title' => 'Edit Website  Plans Settings', 'results' => ['results' => $data_res[0], 'mode' => 'edit', 'data' => $parent_menu_list, 'currencies_list' => $currencies_list]]);
        } else {
            $mstObj->setMetaData(['title' => 'Add Website Plans Settings - Admin - IHosting Mart Website', 'meta_desc' => 'Dashboard - Admin - Website Plans Settings', 'meta_keyword' => 'Dashboard - Admin - Website Plans Settings']);
            $mstObj->setData(['page' => 'admin.plans.form', 'page_title' => 'Add Website  Plans Settings', 'results' => ['mode' => 'add', 'data' => $parent_menu_list, 'currencies_list' => $currencies_list, 'results' => [0]]]);
        }
        $mstObj->renderAdminDashboardPage();
    }

    public function deletePackages($id)
    {
        if (isset($id)) {
            $record_id = decrypt($id);
            if (!empty($record_id)) {

                $data_user = DB::table(TBL_PLANS)->where('plan_id', '=',  $record_id)->get("*");
                $users_data = (array)$data_user[0];
                $destination_Path = public_path(UPLOADS_ADMIN_WEBSITE_PLANS_IMG_FOLDER);

                if (!empty($users_data)) {
                    if ($users_data['plan_icon_type'] == 2) {
                        if (!empty($users_data['plan_icon']) && file_exists($destination_Path . $users_data['plan_icon'])) {
                            @unlink($destination_Path .  $users_data['plan_icon']);
                        }
                    }
                    $data =  DB::table(TBL_PLANS_FEATURES)->where('pfe_plan_id', '=', $record_id)->delete();
                    $data =  DB::table(TBL_PLANS_PRICES)->where('ppr_plan_id', '=', $record_id)->delete();
                    $data =  DB::table(TBL_PLANS)->where('plan_id', '=', $record_id)->delete();
                    if ($data) {
                        return  redirect()->back()->with('message', 'success|Website PLans Deleted Successfully!');
                    } else {
                        return  redirect()->back()->with('message', 'error|Error to Deleting Website PLans!');
                    }
                } else {
                    return  redirect()->back()->with('message', 'error|Invalid Data!');
                }
            } else {
                return  redirect()->back()->with('message', 'error|Invalid Data');
            }
        } else {
            return  redirect()->back()->with('message', 'error|Invalid Data');
        }
    }

    public function savePackages(Request $request)
    {

        $destination_Path = SITE_ABS_PATH . UPLOADS_ADMIN_WEBSITE_PLANS_IMG_FOLDER;
        $token =   $request->_token;
        $mode =  $request->mode;
        $menu_parents = $request->menu_parents;
        $name = $request->name;
        $short_desc = $request->short_desc;
        $link = $request->link;
        $desc = $request->desc;
        $icon_type = $request->icon_type;
        $icon = $request->icon;
        $country = $request->country;
        $duration = $request->duration;
        $section_type = $request->section_type;
        $plan_amount = $request->plan_amount;
        $category = $request->category;
        $sub_category = $request->sub_category;
        $best_selling = $request->best_selling;
        $status = $request->status;
        $validate_data = $request->validate([
            'images' => 'image|mimes:svg,jpeg,png,jpg,gif'
        ]);
        if (isset($menu_parents)) {
            if (!empty($menu_parents)) {
                $menu_parents =  implode(',', $menu_parents);
            }
        } else {
            $menu_parents = null;
        }
        if (isset($section_type)) {
            if (!empty($section_type)) {
                $section_type =  implode(',', $section_type);
            }
        } else {
            $section_type = null;
        }
        if (isset($token)) {
            if ($mode == 'edit') {
                $plan_id  = decrypt($request->plan_id);
                $data_updated = [
                    'plan_modified_by' =>  session()->get('admin_user_id'),
                    'plan_modified_date' => date('Y-m-d H:i:s'),
                ];

                $data_updated['plan_name'] = $name;
                $data_updated['plan_short_desc'] = $short_desc;
                $data_updated['plan_desc'] =  $desc;
                $data_updated['plan_smu_id'] =  $menu_parents;
                $data_updated['plan_status'] = $status;
                $data_updated['plan_icon_type'] = $icon_type;
                $data_updated['plan_link'] = $link;
                $data_updated['plan_section_type'] = $section_type;
                $data_updated['plan_min_price'] = $plan_amount;
                $data_updated['plan_duration'] = $duration;
                $data_updated['plan_currency'] = $country;
                $data_updated['plan_category'] = $category;
                $data_updated['plan_sub_category'] = $sub_category;
                $data_updated['plan_best_selling'] = !empty($best_selling) ? 1 : 0;
                $fav_image = '';
                if ($icon_type) {
                    if ($icon_type == 2) {

                        if ($request->input('old_images')) {
                            if ($request->hasFile('images')) {
                                $image = $request->file('images');
                                if (isset($image)) {
                                    $fav_image = mt_rand() . time() . '.' . $image->getClientOriginalExtension();
                                    $image->move($destination_Path, $fav_image);
                                    $query_results = DB::table(TBL_PLANS)->selectRaw("plan_icon")->whereRaw(' plan_id   = ' . $plan_id)->get();
                                    $data_res = json_decode(json_encode($query_results), true);

                                    if (!empty($data_res[0]['plan_icon']) && file_exists($destination_Path . $data_res[0]['plan_icon'])) {
                                        @unlink($destination_Path . $data_res[0]['plan_icon']);
                                    }
                                } else {
                                    $fav_image = $request->input('old_images');
                                }
                            } else {
                                $fav_image = $request->input('old_images');
                            }
                        } else {
                            if ($request->hasFile('images')) {
                                $image = $request->file('images');
                                $fav_image = mt_rand() . time() . '.' . $image->getClientOriginalExtension();
                                $image->move($destination_Path, $fav_image);
                                $query_results = DB::table(TBL_PLANS)->selectRaw("plan_icon")->whereRaw(' plan_id   = ' . $plan_id)->get();
                                $data_res = json_decode(json_encode($query_results), true);
                                if (!empty($data_res[0]['plan_icon']) && file_exists($destination_Path . $data_res[0]['plan_icon'])) {
                                    @unlink($destination_Path . $data_res[0]['plan_icon']);
                                }
                            } else {
                                $fav_image = '';
                            }
                        }
                    } else if ($icon_type == 1) {
                        $fav_image = $icon;
                    }
                }
                $data_updated['plan_icon'] = $fav_image;
                $data =  DB::table(TBL_PLANS)->where('plan_id', '=', $plan_id)->update($data_updated);
                if (!empty($data)) {
                    return redirect()->back()->with('message', 'success|Website Plans  details updated!');
                } else {
                    return redirect()->back()->with('message', 'error|Failed To update Website Plans  details');
                }
            } else {
                $data_inserted = [
                    'plan_name' => $name,
                    'plan_short_desc' => $short_desc,
                    'plan_desc' =>  $desc,
                    'plan_icon_type' => $icon_type,
                    'plan_smu_id' =>  $menu_parents,
                    'plan_status' =>  $status,
                    'plan_category' => $category,
                    'plan_link' => $link,
                    'plan_sub_category' => $sub_category,
                    'plan_section_type' => $section_type,
                    'plan_min_price' => $plan_amount,
                    'plan_duration' => $duration,
                    'plan_currency' => $country,
                    'plan_best_selling' => !empty($best_selling) ? 1 : 0,
                    'plan_created_by' =>  session()->get('admin_user_id'),
                    'plan_created_date' => date('Y-m-d H:i:s'),
                ];
                if ($icon_type) {
                    if ($icon_type == 2) {
                        if ($request->hasFile('images')) {
                            $image = $request->file('images');
                            $fav_image = mt_rand() . time() . '.' . $image->getClientOriginalExtension();
                            $image->move($destination_Path, $fav_image);
                        } else {
                            $fav_image = null;
                        }
                    } else if ($icon_type == 1) {
                        $fav_image = $icon;
                    }
                }

                $data_inserted['plan_icon'] = $fav_image;

                if (!empty($data_inserted)) {
                    $data =  DB::table(TBL_PLANS)->insert($data_inserted);
                    $last_insert_id = DB::getPdo()->lastInsertId();
                }

                if (!empty($last_insert_id)) {
                    return redirect(ADMIN_URL . 'packages/' . encrypt($last_insert_id))->with('message', 'success|New Website Plans  details!');
                } else {
                    return redirect()->back()->with('message', 'error|Failed To add Website Plans  details');
                }
            }
        } else {
            return  redirect()->back()->with('message', 'error|Invalid Data');
        }
    }

    public function definePackagesPlans($id, $map_id = null)
    {
        $id = decrypt($id);
        $query_results = DB::table(TBL_PLANS)->selectRaw("*")->where('plan_id', $id)->get();
        $primary_res = json_decode(json_encode($query_results), true);

        $query_results = DB::table(TBL_PLANS_PRICES)->selectRaw("*  , (SELECT cun_currency_symbol FROM " . TBL_COUNTRIES . " WHERE cun_id = ppr_cun_id ) as currency_code")->where('ppr_plan_id', $id)->get();
        $data_res = json_decode(json_encode($query_results), true);


        $countries =  DB::table(TBL_COUNTRIES)->select(['cun_id', 'cun_name'])->get();
        $countries_data = json_decode(json_encode($countries), true);

        $edit_data_res[] = [];
        if (!empty($map_id)) {
            $map_id = decrypt($map_id);
            $edit_results = DB::table(TBL_PLANS_PRICES)->selectRaw("*")->where('ppr_id', $map_id)->get();
            $edit_data_res = json_decode(json_encode($edit_results), true);
        }
        $mstObj = new masterController();
        $mstObj->setMetaData(['title' => 'Edit ' . $primary_res[0]['plan_name'] . ' Price Settings - Admin - IHosting Mart Website', 'meta_desc' => 'Dashboard - Admin - ' . $primary_res[0]['plan_name'] . ' Price Settings', 'meta_keyword' => 'Dashboard - Admin - ' . $primary_res[0]['plan_name'] . ' Price Settings']);
        $mstObj->setData(['page' => 'admin.plans.pricing_form', 'page_title' => 'Edit ' . $primary_res[0]['plan_name'] . ' Price Settings', 'results' => ['results' => $data_res, 'parent_id' => $id, 'edit' => $edit_data_res, 'countries' => $countries_data]]);
        $mstObj->renderAdminDashboardPage();
    }

    public function deletePackagesPlans($id)
    {
        if (isset($id)) {
            $record_id = decrypt($id);
            if (!empty($record_id)) {

                $data_user = DB::table(TBL_PLANS_PRICES)->where('ppr_id', '=',  $record_id)->get("*");
                $users_data = (array)$data_user[0];

                if (!empty($users_data)) {
                    $data =  DB::table(TBL_PLANS_PRICES)->where('ppr_id', '=', $record_id)->delete();
                    if ($data) {
                        return  redirect()->back()->with('message', 'success|Website PLans Prices Deleted Successfully!');
                    } else {
                        return  redirect()->back()->with('message', 'error|Error to Deleting Website PLans Prices!');
                    }
                } else {
                    return  redirect()->back()->with('message', 'error|Invalid Data!');
                }
            } else {
                return  redirect()->back()->with('message', 'error|Invalid Data');
            }
        } else {
            return  redirect()->back()->with('message', 'error|Invalid Data');
        }
    }

    public function savePackagesPlans(Request $request)
    {
        $token = $request->_token;
        if ($token) {
            $plan_amount = $request->plan_amount;
            $duraion = $request->duraion;
            $country_id = $request->country;
            $parent_id = decrypt($request->parent_id);
            $status = $request->status;
            $data = [
                'ppr_amount' => $plan_amount,
                'ppr_duraion' => $duraion,
                'ppr_plan_id' => $parent_id,
                'ppr_cun_id' => $country_id,
                'ppr_status' => $status,
            ];
            $ppr_id = $request->ppr_id;
            if (isset($ppr_id) && !empty($ppr_id)) {
                $ppr_id = decrypt($ppr_id);
                if (isset($ppr_id) && !empty($ppr_id)) {
                    $last_id = DB::table(TBL_PLANS_PRICES)->where('ppr_id', '=', $ppr_id)->update($data);
                    if (!empty($last_id) && $last_id > 0) {
                        return redirect()->back()->with('message', 'success|Plan Price details updated successfully');
                    } else {
                        return redirect()->back()->with('message', 'error|Failed To update Plan Price details ');
                    }
                }
            } else {
                $last_id = DB::table(TBL_PLANS_PRICES)->insert($data);
                if (!empty($last_id) && $last_id > 0) {
                    return redirect()->back()->with('message', 'success|Price details added successfully');
                } else {
                    return redirect()->back()->with('message', 'error|Failed To added Price details');
                }
            }
        } else {
            return redirect()->back()->with('message', 'error|Invalid Data');
        }
    }

    public function definePackagesFeatures($id, $map_id = null)
    {
        $id = decrypt($id);
        $query_results = DB::table(TBL_PLANS)->selectRaw("*")->where('plan_id', $id)->get();
        $primary_res = json_decode(json_encode($query_results), true);


        $primary_price_res = DB::table(TBL_PLANS_PRICES)->selectRaw("*, (SELECT cun_currency_symbol FROM " . TBL_COUNTRIES . " WHERE cun_id = ppr_cun_id ) as currency_code")->where('ppr_plan_id', $id)->get();
        $primary_price_res = json_decode(json_encode($primary_price_res), true);


        $query_results = DB::table(TBL_PLANS_FEATURES)->selectRaw("*,CONCAT( (SELECT cun_currency_symbol FROM " . TBL_COUNTRIES . " WHERE cun_id = (SELECT ppr_cun_id FROM " . TBL_PLANS_PRICES . " WHERE ppr_id = pfe_ppr_id)),'-',(SELECT ppr_amount FROM " . TBL_PLANS_PRICES . " WHERE ppr_id = pfe_ppr_id),'-',(SELECT ppr_duraion FROM " . TBL_PLANS_PRICES . " WHERE ppr_id = pfe_ppr_id)) AS price_name")->where('pfe_plan_id', $id)->get();
        $data_res = json_decode(json_encode($query_results), true);

        $edit_data_res[] = [];
        if (!empty($map_id)) {
            $map_id = decrypt($map_id);
            $edit_results = DB::table(TBL_PLANS_FEATURES)->selectRaw("*")->where('pfe_id', $map_id)->get();
            $edit_data_res = json_decode(json_encode($edit_results), true);
        }

        $mstObj = new masterController();
        $mstObj->setMetaData(['title' => 'Edit ' . $primary_res[0]['plan_name'] . ' Feature Settings - Admin - IHosting Mart Website', 'meta_desc' => 'Dashboard - Admin - ' . $primary_res[0]['plan_name'] . ' Feature Settings', 'meta_keyword' => 'Dashboard - Admin - ' . $primary_res[0]['plan_name'] . ' Feature Settings']);
        $mstObj->setData(['page' => 'admin.plans.features_form', 'page_title' => 'Edit ' . $primary_res[0]['plan_name'] . ' Feature Settings', 'results' => ['results' => $data_res, 'price_res' => $primary_price_res, 'parent_id' => $id, 'edit' => $edit_data_res]]);
        $mstObj->renderAdminDashboardPage();
    }

    public function savePackagesFeatures(Request $request)
    {
        $token = $request->_token;
        if ($token) {
            $destination_Path = SITE_ABS_PATH . UPLOADS_ADMIN_WEBSITE_PLANS_IMG_FOLDER;
            $icon = $request->feature_icon;
            $icon_type = $request->icon_type;
            $title = $request->feature_title;
            $value = $request->feature_value;
            $desc = $request->desc;
            $parent_id = decrypt($request->parent_id);
            $status = $request->status;
            $validate_data = $request->validate([
                'images' => 'image|mimes:svg,jpeg,png,jpg,gif'
            ]);
            $data = [
                'pfe_icon_type' => $icon_type,
                'pfe_title' => $title,
                'pfe_value' => $value,
                'pfe_desc' => $desc,
                'pfe_plan_id' => $parent_id,
                'pfe_status' => $status,
            ];
            $pfe_id = $request->pfe_id;

            if ($icon_type) {
                $fav_image = '';
                if ($icon_type == 2) {

                    if ($request->input('old_images')) {
                        if ($request->hasFile('images')) {
                            $image = $request->file('images');
                            if (isset($image)) {
                                $fav_image = mt_rand() . time() . '.' . $image->getClientOriginalExtension();
                                $image->move($destination_Path, $fav_image);
                                $query_results = DB::table(TBL_PLANS_FEATURES)->selectRaw("pfe_icon")->whereRaw(' pfe_id    = ' . $pfe_id)->get();
                                $data_res = json_decode(json_encode($query_results), true);

                                if (!empty($data_res[0]['pfe_icon']) && file_exists($destination_Path . $data_res[0]['pfe_icon'])) {
                                    @unlink($destination_Path . $data_res[0]['pfe_icon']);
                                }
                            } else {
                                $fav_image = $request->input('old_images');
                            }
                        } else {
                            $fav_image = $request->input('old_images');
                        }
                    } else {
                        if ($request->hasFile('images')) {
                            $image = $request->file('images');
                            $fav_image = mt_rand() . time() . '.' . $image->getClientOriginalExtension();
                            $image->move($destination_Path, $fav_image);
                        } else {
                            $fav_image = '';
                        }
                    }
                } else if ($icon_type == 1) {
                    $fav_image = $icon;
                }
            }
            $data['pfe_icon'] = $fav_image;

            if (isset($pfe_id) && !empty($pfe_id)) {
                $pfe_id = decrypt($pfe_id);
                if (isset($pfe_id) && !empty($pfe_id)) {
                    $last_id = DB::table(TBL_PLANS_FEATURES)->where('pfe_id', '=', $pfe_id)->update($data);
                    if (!empty($last_id) && $last_id > 0) {
                        return redirect()->back()->with('message', 'success|Plan Price details updated successfully');
                    } else {
                        return redirect()->back()->with('message', 'error|Failed To update Plan Price details ');
                    }
                }
            } else {
                $last_id = DB::table(TBL_PLANS_FEATURES)->insert($data);
                if (!empty($last_id) && $last_id > 0) {
                    return redirect()->back()->with('message', 'success|Plan Price details added successfully');
                } else {
                    return redirect()->back()->with('message', 'error|Failed To added Plan Price details');
                }
            }
        } else {
            return redirect()->back()->with('message', 'error|Invalid Data');
        }
    }

    public function deletePackagesFeatures($id)
    {
        if (isset($id)) {
            $record_id = decrypt($id);
            if (!empty($record_id)) {

                $data_user = DB::table(TBL_PLANS_FEATURES)->where('pfe_id', '=',  $record_id)->get("*");
                $users_data = (array)$data_user[0];

                if (!empty($users_data)) {
                    $data =  DB::table(TBL_PLANS_FEATURES)->where('pfe_id', '=', $record_id)->delete();
                    if ($data) {
                        return  redirect()->back()->with('message', 'success|Website PLans Features Deleted Successfully!');
                    } else {
                        return  redirect()->back()->with('message', 'error|Error to Deleting Website PLans Features!');
                    }
                } else {
                    return  redirect()->back()->with('message', 'error|Invalid Data!');
                }
            } else {
                return  redirect()->back()->with('message', 'error|Invalid Data');
            }
        } else {
            return  redirect()->back()->with('message', 'error|Invalid Data');
        }
    }
}
