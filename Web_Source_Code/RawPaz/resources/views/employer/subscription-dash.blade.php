@extends('employer.inner')
@section('inner')
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Subscriptions</h3>
                                </div>
                                <div class="dasp_grap">
                                    <div>
                                        @if (session('error'))
                                        <div class="alert alert-danger text-center" role="alert">
                                            <span  style="font-size: 15px;">{{session('error')}}</span>
                                        </div>
                                        @endif
                                        @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong></strong> {{ session('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="prof_box messg_employ">
                                   <div class="row">
                                    <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="messg_box">

<div class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none">
        <path d="M74.9123 25.439L73.6103 26.2602L67.1256 30.332L39.3466 47.7647L38.996 47.996L38.9208 48.0422L37.5063 48.9329L37.4562 48.9562L36.2919 48.2274L36.079 48.0885L9.7645 31.5698L7.97446 30.4477L0.0875977 25.4967L0 25.439L7.97446 20.4301L36.5549 2.48853H38.3575L67.1256 20.5457L68.0771 21.1473L74.9123 25.439Z" fill="#C0874A"/>
        <path d="M68.5332 2.35327V58.583C68.5332 59.8731 67.3789 60.9246 65.9491 60.9246H9.12368C7.70703 60.9246 6.55273 59.8731 6.55273 58.583V2.35327C6.55273 1.05117 7.70703 0 9.12368 0H65.9491C67.3788 0 68.5332 1.05117 68.5332 2.35327Z" fill="#C1E0FF"/>
        <path d="M44.135 11.0012H16.2285V14.7187H44.135V11.0012Z" fill="#A2CC86"/>
        <path d="M44.135 10.4141H16.2285V14.1315H44.135V10.4141Z" fill="#0966B9"/>
        <path d="M58.6359 31.4475H16.2285V35.165H58.6359V31.4475Z" fill="#A2CC86"/>
        <path d="M58.6359 30.8606H16.2285V34.5781H58.6359V30.8606Z" fill="#0966B9"/>
        <path d="M58.6359 41.6709H16.2285V45.3884H58.6359V41.6709Z" fill="#A2CC86"/>
        <path d="M58.6359 41.084H16.2285V44.8015H58.6359V41.084Z" fill="#0966B9"/>
        <path d="M58.6359 21.2244H16.2285V24.9418H58.6359V21.2244Z" fill="#A2CC86"/>
        <path d="M58.6359 20.6375H16.2285V24.3549H58.6359V20.6375Z" fill="#0966B9"/>
        <path d="M37.5441 47.1852L37.106 47.4434L28.6307 52.3918L27.5915 53.0048L1.81553 68.0541L0.0878906 69.0545V25.3159L10.466 31.3723L36.1295 46.3569L36.3297 46.4753L37.5066 47.1636L37.5441 47.1852Z" fill="#F0BA7D"/>
        <path d="M74.742 24.5057C74.8841 24.4226 75.0004 24.4894 75.0004 24.6541V67.8049C75.0004 67.9695 74.9976 68.1018 74.9941 68.0987C74.9906 68.0956 74.9737 68.0836 74.9564 68.0718C74.9392 68.0599 74.9138 68.0429 74.9 68.0341C74.8863 68.0252 74.8722 68.018 74.8687 68.018C74.8652 68.018 74.7461 67.95 74.604 67.8671L38.8917 47.0203C38.7496 46.9374 38.5173 46.8011 38.3755 46.7174L38.2526 46.6449C38.1108 46.5613 37.8934 46.4324 37.7695 46.3584C37.6455 46.2844 37.6606 46.1564 37.803 46.0736L38.7125 45.5457C38.8549 45.4631 38.9799 45.3906 38.9901 45.3847C39.0005 45.3788 39.0174 45.369 39.0278 45.3632C39.0382 45.3573 39.163 45.2848 39.3054 45.202L40.1022 44.739C40.2446 44.6564 40.4772 44.5207 40.6195 44.4377L74.742 24.5057Z" fill="#E5A864"/>
        <path opacity="0.68" d="M55.246 16.5948C58.3353 16.5948 60.8396 14.0904 60.8396 11.0011C60.8396 7.91183 58.3353 5.40747 55.246 5.40747C52.1567 5.40747 49.6523 7.91183 49.6523 11.0011C49.6523 14.0904 52.1567 16.5948 55.246 16.5948Z" fill="#EEF3CA"/>
        <path d="M74.9998 62.2927V69.0028H74.9247L73.848 69.0529H4.05581L4.00586 68.0138C5.27031 67.1501 6.94756 65.9857 8.03682 65.2471L8.18696 65.1469L11.8426 62.6306L17.5511 58.6873L19.2035 57.5481L36.5421 45.5927L37.7062 44.7789C37.9816 44.6038 38.2946 44.4534 38.6326 44.3535C39.0332 44.2156 39.4713 44.128 39.9095 44.0905C40.0596 44.0779 40.1973 44.0655 40.3476 44.0779C40.4978 44.0529 40.6482 44.0529 40.7983 44.0529C41.199 44.0404 41.5872 44.0779 41.9626 44.1529C42.3631 44.2281 42.7262 44.3535 43.0517 44.5285L56.1965 51.8396L62.6937 55.4573L64.3838 56.3962L70.5054 59.8013L74.5363 62.0422C74.6491 62.1049 74.7742 62.1674 74.8995 62.2426C74.9247 62.2552 74.9622 62.2802 74.9998 62.2927Z" fill="#C0874A"/>
        <path d="M75.0003 64.6589V69.053H0.0878906V64.6589C1.40244 63.8575 3.13008 62.7685 4.25669 62.0925L4.40684 61.9923L8.175 59.6515L14.0713 55.996L15.7739 54.9319L33.6633 43.8277L34.865 43.0766C35.491 42.7011 36.3047 42.5133 37.106 42.5007C37.2561 42.4881 37.3938 42.4881 37.5441 42.5007C37.6944 42.4881 37.8445 42.4881 37.9948 42.5007C38.3454 42.5007 38.6834 42.5383 39.0089 42.6133C39.4597 42.7011 39.8726 42.8638 40.2233 43.0766L41.9634 44.1532L53.0049 51.0136L59.3145 54.9321L60.9545 55.9585L66.9135 59.6516L70.8316 62.0928C70.9444 62.1555 71.0571 62.2179 71.1822 62.293C71.9835 62.8065 73.0099 63.445 73.9739 64.0333C74.3243 64.2583 74.6748 64.4711 75.0003 64.6589Z" fill="#ECB168"/>
        <path opacity="0.2" d="M68.5272 2.35342V2.97935C68.5272 1.67754 67.3754 0.625928 65.9483 0.625928H9.12559C7.71113 0.625928 6.54688 1.67739 6.54688 2.97935V2.35342C6.54673 1.05146 7.71113 0 9.12559 0H65.9485C67.3754 0 68.5272 1.05146 68.5272 2.35342Z" fill="#90BFF0"/>
      </svg>
</div>
@if($result !='')

    <h3>Subscription</h3>
    <h4>{{ $result->plan_name }}</h4>
    <p>{{ $result->plan_description }} Credits (${{ $result->plan_amt/$result->plan_description }}/Credit)</p>

    <div class="cstm_chbx">
        <label class="cstmcntr">Auto-Renew
            <input type="checkbox" checked="checked">
            <span class="cstmchkmrk"></span>
        </label>
    </div>
    <h5>Upgrade</h5>
    <button class="btn">Active</button>


@else
    <h3>Subscription</h3>
    <h4>None</h4>
    <p>00 Credits </p>

    <div class="cstm_chbx">
        <label class="cstmcntr">Auto-Renew
            <input type="checkbox" checked="checked">
            <span class="cstmchkmrk"></span>
        </label>
    </div>
    <h5>Upgrade</h5>
    <button class="btn">Cancel</button>
@endif

</div>
                                    </div>

                                   </div>
                                    </div>
                                </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
       @endsection