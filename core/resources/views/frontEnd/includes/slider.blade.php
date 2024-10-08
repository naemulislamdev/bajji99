<style>
    #announce-slider {
        overflow: hidden;
        height: 40px;
        padding: 5px 0%;
        background: #313131;
        color: #ffff;
    }

    #announce-slider .context > h4 {
    color: #e8e2ff;
    font-size: 14px;
    margin: 0;
    padding: 5px 0px;
}
</style>


@if (count($SliderBanners) > 0)
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        @foreach ($SliderBanners->slice(0, 1) as $SliderBanner)
            <?php
            try {
                $SliderBanner_type = $SliderBanner->webmasterBanner->type;
            } catch (Exception $e) {
                $SliderBanner_type = 0;
            }
            ?>
        @endforeach
        <?php
        $title_var = 'title_' . @Helper::currentLanguage()->code;
        $title_var2 = 'title_' . env('DEFAULT_LANGUAGE');
        $details_var = 'details_' . @Helper::currentLanguage()->code;
        $details_var2 = 'details_' . env('DEFAULT_LANGUAGE');
        $file_var = 'file_' . @Helper::currentLanguage()->code;
        $file_var2 = 'file_' . env('DEFAULT_LANGUAGE');
        ?>
        @if ($SliderBanner_type == 0)
            {{-- Text/Code Banners --}}
            <div class="text-center">
                @foreach ($SliderBanners as $SliderBanner)
                    <?php
                    if ($SliderBanner->$details_var != '') {
                        $BDetails = $SliderBanner->$details_var;
                    } else {
                        $BDetails = $SliderBanner->$details_var2;
                    }
                    ?>
                    @if ($BDetails != '')
                        <div>{!! $BDetails !!}</div>
                    @endif
                @endforeach
            </div>
        @elseif($SliderBanner_type == 1)
            {{-- Photo Slider Banners --}}
            <div id="main-slider" class="flexslider">
                <ul class="slides">
                    @foreach ($SliderBanners as $SliderBanner)
                        <?php
                        if ($SliderBanner->$title_var != '') {
                            $BTitle = $SliderBanner->$title_var;
                        } else {
                            $BTitle = $SliderBanner->$title_var2;
                        }
                        $BDetails = $SliderBanner->$details_var;
                        if ($SliderBanner->$file_var != '') {
                            $BFile = $SliderBanner->$file_var;
                        } else {
                            $BFile = $SliderBanner->$file_var2;
                        }
                        ?>
                        <li>
                            <img src="{{ URL::to('uploads/banners/' . $BFile) }}" alt="{{ $BTitle }}" />
                        </li>
                    @endforeach
                </ul>
            </div>
        @else
            {{-- Video Banners --}}
            <div class="text-center">
                @foreach ($SliderBanners as $SliderBanner)
                    <?php
                    if ($SliderBanner->$title_var != '') {
                        $BTitle = $SliderBanner->$title_var;
                    } else {
                        $BTitle = $SliderBanner->$title_var2;
                    }
                    if ($SliderBanner->$details_var != '') {
                        $BDetails = $SliderBanner->$details_var;
                    } else {
                        $BDetails = $SliderBanner->$details_var2;
                    }
                    if ($SliderBanner->$file_var != '') {
                        $BFile = $SliderBanner->$file_var;
                    } else {
                        $BFile = $SliderBanner->$file_var2;
                    }
                    ?>
                    @if ($SliderBanner->youtube_link != '')
                        @if ($SliderBanner->video_type == 1)
                            <?php
                            $Youtube_id = Helper::Get_youtube_video_id($SliderBanner->youtube_link);
                            ?>
                            @if ($Youtube_id != '')
                                {{-- Youtube Video --}}
                                <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                    src="https://www.youtube.com/embed/{{ $Youtube_id }}?autoplay=1&mute=1"
                                    allow="autoplay">
                                </iframe>
                            @endif
                        @elseif($SliderBanner->video_type == 2)
                            <?php
                            $Vimeo_id = Helper::Get_vimeo_video_id($SliderBanner->youtube_link);
                            ?>
                            @if ($Vimeo_id != '')
                                {{-- Vimeo Video --}}
                                <iframe width="100%" height="500" frameborder="0" allowfullscreen
                                    src="https://player.vimeo.com/video/{{ $Vimeo_id }}?title=0&amp;byline=0">
                                </iframe>
                            @endif
                        @endif
                    @endif
                    @if ($SliderBanner->video_type == 0)
                        @if ($BFile != '')
                            {{-- Direct Video --}}
                            <video width="100%" height="500" controls autoplay>
                                <source src="{{ URL::to('uploads/banners/' . $BFile) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @endif
                    @if ($BDetails != '')
                        <div>{!! $BDetails !!}</div>
                    @endif
                @endforeach
            </div>
        @endif
        <!-- end slider -->
    </section>
@endif

<section id="announce-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                    <div class="context">
                        <h4><marquee onmouseover="this.stop();" onmouseout="this.start();">For batting those premium site bajji99.com is best for you. the agent
                            Contact Admin and Super Agent to work with. If someone from this agent list is with you
                            Contact the admin by cheating.</marquee></h4>
                    </div>
            </div>
        </div>
    </div>
</section>
