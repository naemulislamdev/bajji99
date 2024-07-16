<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;

class UserDashboardController extends Controller
{
    public function dashboard(){
        // return "Dashboard";
        $site_desc_var = "site_desc_" . @Helper::currentLanguage()->code;
        $site_keywords_var = "site_keywords_" . @Helper::currentLanguage()->code;
        $data['PageTitle'] = "Profile";
        $data['PageDescription'] = Helper::GeneralSiteSettings($site_desc_var);
        $data['PageKeywords'] = Helper::GeneralSiteSettings($site_keywords_var);
        return View('frontEnd.dashboard.dashboard',$data);
    }
}
