<footer>
    <div class="container">
        @php
        $data=App\Helper::getFooterSetting();
        @endphp

        <div class="row">
            <div class="col-md-12 col-xl-7">
                <div class="logo">
                    <h1 style="padding: 0px;"><span style="color: #FF8976;">{!! $data->footer_heading_logo !!}</span></h1>
                </div>
                <p>{!! $data->footer_paragraph !!}</p>
                <p>&copy; All Right Reserved 2024</p>
            </div>

            <div class="col-md-12 col-xl-5">
                <div class="row">
                    <div class="col-md-8" style="color: #fff;">
                        <h3>Find Me in Social</h3>
                        <ul id="fsocial-media" class="d-flex list-unstyled">
                            <li><a href="https://www.facebook.com/{!!$data->facebook_link!!}" class="fa fa-facebook text-white" style="text-decoration: none;"></a></li>
                            <li><a href="https://www.linkedin.com/{!!$data->linkedin_link!!}" class="fa fa-linkedin text-white" style="text-decoration: none;"></a></li>
                            <li><a href="https://www.instagram.com/{!!$data->instagram_link!!}" class="fa fa-instagram text-white" style="text-decoration: none;"></a></li>
                            <li><a href="https://www.youtube.com/{!!$data->youtube_link!!}" class="fa fa-youtube text-white" style="text-decoration: none;"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="footerdiv">
                            <a href="/"><button id="arrow"><i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </button></a>
                            <div class="privacy">
                                <h4><a href="#">Privacy Policy</a></h4>
                                <h4><a href="#">Terms of Service</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

