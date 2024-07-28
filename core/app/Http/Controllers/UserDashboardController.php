<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use Helper;

class UserDashboardController extends Controller
{
    public function deposit(){
        // return "Dashboard";
        $site_desc_var = "site_desc_" . @Helper::currentLanguage()->code;
        $site_keywords_var = "site_keywords_" . @Helper::currentLanguage()->code;
        $data['PageTitle'] = "Deposit";
        $data['PageDescription'] = Helper::GeneralSiteSettings($site_desc_var);
        $data['PageKeywords'] = Helper::GeneralSiteSettings($site_keywords_var);
        return View('frontEnd.dashboard.deposit',$data);
    }
    public function profile(){
        $site_desc_var = "site_desc_" . @Helper::currentLanguage()->code;
        $site_keywords_var = "site_keywords_" . @Helper::currentLanguage()->code;
        $data['PageTitle'] = "Profile";
        $data['PageDescription'] = Helper::GeneralSiteSettings($site_desc_var);
        $data['PageKeywords'] = Helper::GeneralSiteSettings($site_keywords_var);
        return View('frontEnd.dashboard.profile',$data);
    }
    public function profileUpdate(Request $request, User $user){
        $this->validate($request,[
            'email' => 'required|email',
            'date_of_birth' => 'required|date',
            'phone' => 'required|max:12',
            'full_name' => 'required|string|max:150'
        ]);
        $user->update([
            'email' => $request->email,
        ]);
        $userDetails = UserDetails::where('user_id', $user->id)->first();
        $userDetails->update([
            'full_name' => $request->full_name,
            'date_of_birth' => $request->date_of_birth
        ]);
        return back()->with('success', 'Profile has been updated successfully!');

    }

}
