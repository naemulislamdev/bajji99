<meta charset="utf-8">
<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . @Helper::currentLanguage()->code) }}</title>
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="author" content="{{ URL::to('') }}"/>
<link rel="shortcut icon" href="{{asset('assets/frontend/img/bajji-img/live-chat.jpeg')}}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"/>
<link href="{{ URL::asset('assets/frontend/css/flexslider.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/defaults/toastr/toastr.min.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/dashboard/css/ud-style.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/style.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/bajji99.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/frontend/css/responsive.css') }}" rel="stylesheet"/>

