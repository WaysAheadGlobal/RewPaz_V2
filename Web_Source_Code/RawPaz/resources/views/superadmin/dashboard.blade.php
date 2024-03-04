@extends('superadmin.main')
@section('main')

<style>
	.cir_bx.stdsize {
        box-sizing: border-box;
        margin: 0;
        line-height: 1;
        position: relative;
        text-align: right;
    }
    .cir_bx.stdsize .percent {
        display: flex;
        align-items: center;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        font-size: 14px;
        font-weight: 800;

        align-items: center;
        justify-content: center;
    }


/* .percent {
     position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;
    font-weight: bold;
} */

	</style>
            <!-- partial -->
            <div class="main-panel ">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">
                        <div class="col-sm-12">
                            <div class="dashboard_rgt">
                                <div class="heading_bx">
                                    <h3>Dashboards</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6">

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="grap_bx_admin">
                                                    <h3>Subscription Types</h3>
                                                    <canvas id="myChart" style="width:100%;"></canvas>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="grap_revenue">
                                                    <h3>Total Revenue</h3>
                                                    <!-- <img src="{{asset('assets/images/cir3.png')}}" alt=""> -->
                                                    <div class="circle_prog_bg">
                                                        <canvas id="revenueChart"></canvas>
                                                    </div>
                                                    <div class="grp_pt">
                                                        <div class="crd_bx">
                                                           <div class="icon_bx">
                                                             <div class="ic_bx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                                                    <g clip-path="url(#clip0_744_6022)">
                                                                      <rect x="0.0673828" width="36" height="36" rx="6" fill="#FFF4DE"/>
                                                                      <mask id="mask0_744_6022" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="9" y="9" width="17" height="18">
                                                                        <rect x="9.06396" y="9.35938" width="16.6083" height="17.28" fill="white"/>
                                                                      </mask>
                                                                      <g mask="url(#mask0_744_6022)">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.2885 18.0008C24.2885 21.9772 21.1902 25.2008 17.3684 25.2008C13.5465 25.2008 10.4482 21.9772 10.4482 18.0008C10.4482 14.0243 13.5465 10.8008 17.3684 10.8008C21.1902 10.8008 24.2885 14.0243 24.2885 18.0008Z" stroke="#FFA800" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8992 20.1654C16.7871 20.2144 16.5013 20.318 16.4397 20.3195C16.3089 20.3238 16.1829 20.2475 16.122 20.1251C16.0985 20.0776 16.0293 19.7672 16.0072 19.629C15.9414 19.2085 15.9075 18.5555 15.9082 17.8988C15.9075 17.2098 15.9442 16.5258 16.0175 16.1096C16.0369 15.9973 16.0937 15.7388 16.1103 15.6971C16.1414 15.6193 16.1982 15.5581 16.2667 15.52C16.3193 15.4904 16.3795 15.4746 16.4397 15.4768C16.5013 15.4782 16.7518 15.5696 16.8376 15.6049C17.5144 15.8785 18.9461 16.8707 19.4721 17.4539C19.5191 17.5064 19.6485 17.6476 19.67 17.6764C19.7191 17.7412 19.7433 17.8196 19.7433 17.8988C19.7433 17.9723 19.7219 18.0472 19.6776 18.1098C19.6548 18.1422 19.5226 18.2862 19.479 18.3344C18.9745 18.9004 17.6016 19.858 16.8992 20.1654Z" stroke="#FFA800" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                      </g>
                                                                    </g>
                                                                    <defs>
                                                                      <clipPath id="clip0_744_6022">
                                                                        <rect width="34.6007" height="36" fill="white" transform="translate(0.0673828)"/>
                                                                      </clipPath>
                                                                    </defs>
                                                                  </svg>

                                                            </div>
                                                            <div class="cont_bx">
                                                                <h3>from professionals</h3>
                                                                <!-- <p>20% from last month</p> -->

                                                            </div>
                                                           </div>
                                                            <div class="revenue_ratio">
                                                                <h4>CAD : {{ $commission }}</h4>
                                                            </div>

                                                        </div>
                                                        <div class="crd_bx">
                                                            <div class="icon_bx">
                                                             <div class="ic_bx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                                                    <g clip-path="url(#clip0_744_6010)">
                                                                      <rect x="0.0673828" width="36" height="36" rx="6" fill="#FFE2E5"/>
                                                                      <mask id="mask0_744_6010" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="9" y="9" width="17" height="18">
                                                                        <rect x="9.06396" y="9.35938" width="16.6083" height="17.28" fill="white"/>
                                                                      </mask>
                                                                      <g mask="url(#mask0_744_6010)">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.2885 18.0008C24.2885 21.9772 21.1902 25.2008 17.3684 25.2008C13.5465 25.2008 10.4482 21.9772 10.4482 18.0008C10.4482 14.0243 13.5465 10.8008 17.3684 10.8008C21.1902 10.8008 24.2885 14.0243 24.2885 18.0008Z" stroke="#F64E60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.8992 20.1654C16.7871 20.2144 16.5013 20.318 16.4397 20.3195C16.3089 20.3238 16.1829 20.2475 16.122 20.1251C16.0985 20.0776 16.0293 19.7672 16.0072 19.629C15.9414 19.2085 15.9075 18.5555 15.9082 17.8988C15.9075 17.2098 15.9442 16.5258 16.0175 16.1096C16.0369 15.9973 16.0937 15.7388 16.1103 15.6971C16.1414 15.6193 16.1982 15.5581 16.2667 15.52C16.3193 15.4904 16.3795 15.4746 16.4397 15.4768C16.5013 15.4782 16.7518 15.5696 16.8376 15.6049C17.5144 15.8785 18.9461 16.8707 19.4721 17.4539C19.5191 17.5064 19.6485 17.6476 19.67 17.6764C19.7191 17.7412 19.7433 17.8196 19.7433 17.8988C19.7433 17.9723 19.7219 18.0472 19.6776 18.1098C19.6548 18.1422 19.5226 18.2862 19.479 18.3344C18.9745 18.9004 17.6016 19.858 16.8992 20.1654Z" stroke="#F64E60" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                      </g>
                                                                    </g>
                                                                    <defs>
                                                                      <clipPath id="clip0_744_6010">
                                                                        <rect width="34.6007" height="36" fill="white" transform="translate(0.0673828)"/>
                                                                      </clipPath>
                                                                    </defs>
                                                                  </svg>
                                                             </div>
                                                             <div class="cont_bx">
                                                                 <h3>from Customers</h3>
                                                                 <!-- <p>50% from last month</p> -->

                                                             </div>
                                                            </div>
                                                             <div class="revenue_ratio">
                                                                 <h4>CAD : {{ $custom_total-$commission }}</h4>
                                                             </div>

                                                         </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <!-- <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="Sub_sect">
                                                    <h3>Subscription vs Commission</h3>
                                                    <div class="progress_verti">
                                                        <div class="demo-preview">
                                                            <div class="progress_box">
                                                            <div class="card_bx">
                                                                <div class="progress_vertical">  <div role="progressbar" style="height: 65%;" class="progress-line"></div></div>
                                                                <div class="progress_vertical">  <div role="progressbar" style="height: 85%;" class="progress-line"></div></div>
                                                            </div>
                                                            <p>Jan</p>
                                                            </div>
                                                            <div class="progress_box">
                                                                <div class="card_bx">
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 65%;" class="progress-line"></div></div>
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 85%;" class="progress-line"></div></div>
                                                                </div>
                                                                <p>Fe</p>
                                                            </div>
                                                            <div class="progress_box">
                                                                <div class="card_bx">
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 65%;" class="progress-line"></div></div>
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 85%;" class="progress-line"></div></div>
                                                                </div>
                                                                <p>Mar</p>
                                                            </div>
                                                            <div class="progress_box">
                                                                <div class="card_bx">
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 65%;" class="progress-line"></div></div>
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 85%;" class="progress-line"></div></div>
                                                                </div>
                                                                <p>Ap</p>
                                                            </div>
                                                            <div class="progress_box">
                                                                <div class="card_bx">
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 65%;" class="progress-line"></div></div>
                                                                    <div class="progress_vertical">  <div role="progressbar" style="height: 85%;" class="progress-line"></div></div>
                                                                </div>
                                                                <p>Ma</p>
                                                            </div>

                                                          </div>

                                                    </div>

                                                    <div class="grp_pt">
                                                        <div class="crd_bx">
                                                           <div class="icon_bx">
                                                            <div class="ic_bx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                                                    <g clip-path="url(#clip0_744_5987)">
                                                                      <rect x="0.0737305" width="36" height="36" rx="6" fill="#C9F7F5"></rect>
                                                                      <mask id="mask0_744_5987" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="3" y="3" width="30" height="30">
                                                                        <rect x="3.67334" y="3.59961" width="28.8" height="28.8" fill="white"></rect>
                                                                      </mask>
                                                                      <g mask="url(#mask0_744_5987)">
                                                                        <mask id="mask1_744_5987" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="9" y="9" width="18" height="18">
                                                                          <rect x="9.43311" y="9.35938" width="17.28" height="17.28" fill="white"></rect>
                                                                        </mask>
                                                                        <g mask="url(#mask1_744_5987)">
                                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8336 24.8386C23.0414 24.8386 24.7351 24.0411 24.2541 20.8316L23.6938 16.482C23.3973 14.8805 22.3758 14.2676 21.4795 14.2676H14.151C13.2415 14.2676 12.2793 14.9266 11.9366 16.482L11.3764 20.8316C10.9678 23.6787 12.6154 24.8386 14.8232 24.8386H20.8336Z" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                          <path d="M14.7241 14.1107C14.7241 12.3927 16.1168 11 17.8348 11C18.662 10.9965 19.4566 11.3227 20.0429 11.9065C20.6291 12.4902 20.9586 13.2834 20.9586 14.1107" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                          <path d="M15.6997 17.3516H15.7327" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                          <path d="M19.8979 17.3516H19.9309" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        </g>
                                                                      </g>
                                                                    </g>
                                                                    <defs>
                                                                      <clipPath id="clip0_744_5987">
                                                                        <rect width="34.6107" height="36" fill="white" transform="translate(0.0737305)"></rect>
                                                                      </clipPath>
                                                                    </defs>
                                                                  </svg>

                                                            </div>
                                                            <div class="cont_bx">
                                                                <h3>Subscription</h3>
                                                            </div>
                                                           </div>
                                                            <div class="revenue_ratio">
                                                                <h4>{{ $total_sub }}</h4>
                                                            </div>

                                                        </div>
                                                        <div class="crd_bx">
                                                            <div class="icon_bx">
                                                             <div class="ic_bx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                                                    <g clip-path="url(#clip0_744_5969)">
                                                                      <rect x="0.0737305" width="36" height="36" rx="6" fill="#FFF4DE"></rect>
                                                                      <mask id="mask0_744_5969" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="9" y="9" width="17" height="18">
                                                                        <rect x="9.07275" y="9.35938" width="16.6132" height="17.28" fill="white"></rect>
                                                                      </mask>
                                                                      <g mask="url(#mask0_744_5969)">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4582 14.5023C10.4583 12.8549 11.7422 11.5195 13.3261 11.5195H21.4333C23.0173 11.5195 24.3002 12.855 24.3004 14.5021M24.3004 14.5021L24.3018 16.4483C24.3019 16.5915 24.2473 16.729 24.1499 16.8303C24.0525 16.9317 23.9204 16.9887 23.7826 16.9887C23.2107 16.9887 22.7512 17.4665 22.7512 18.0607C22.7512 18.6544 23.2109 19.1328 23.7826 19.1328C24.0694 19.1328 24.3018 19.3746 24.3018 19.6728V21.6168C24.3018 23.2642 23.0187 24.5998 21.434 24.5998H13.3247C11.7405 24.5998 10.4575 23.2641 10.4575 21.6168V19.6728C10.4575 19.3746 10.69 19.1328 10.9767 19.1328C11.5476 19.1328 12.0074 18.6546 12.0074 18.0607C12.0074 17.494 11.5752 17.0513 10.9767 17.0513C10.839 17.0513 10.7069 16.9944 10.6095 16.8931C10.5121 16.7917 10.4575 16.6543 10.4575 16.5111L10.4582 14.5023C10.4582 14.5022 10.4582 14.5024 10.4582 14.5023M11.4965 14.5025L11.496 16.0358C12.3734 16.2583 13.0457 17.0365 13.0457 18.0607C13.0457 19.0645 12.3882 19.9057 11.4958 20.1448V21.6168C11.4958 22.6681 12.3144 23.5198 13.3247 23.5198H21.434C22.445 23.5198 23.2635 22.668 23.2635 21.6168V20.1448C22.3707 19.9059 21.7129 19.0647 21.7129 18.0607C21.7129 17.0562 22.3706 16.2156 23.2632 15.9767L23.2621 14.5029C23.2621 13.4516 22.4436 12.5995 21.4333 12.5995H13.3261C12.3156 12.5995 11.4965 13.4514 11.4965 14.5025ZM10.4582 14.5023L24.3004 14.5021L10.4582 14.5023Z" fill="#FFA800"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9826 15.4575L18.4642 16.4721L19.5427 16.6352C20.0911 16.7198 20.3146 17.4218 19.9146 17.8284L19.9138 17.8293L19.1343 18.6181L19.3186 19.734C19.4134 20.31 18.8322 20.7379 18.3432 20.4727L18.3417 20.4719L17.3788 19.9452L16.4144 20.4727C15.9255 20.7379 15.3443 20.3103 15.4391 19.7343L15.6234 18.618L14.8445 17.8291L14.8438 17.8284C14.4438 17.4218 14.6673 16.7198 15.2156 16.6352L15.2171 16.635L16.2934 16.4721L16.7756 15.4564L16.7762 15.4552C17.0226 14.9395 17.7347 14.9336 17.9823 15.4568C17.9824 15.4571 17.9825 15.4573 17.9826 15.4575ZM17.1037 17.2047C17.0281 17.364 16.8819 17.4744 16.7129 17.5L16.0995 17.5928L16.5435 18.0425C16.666 18.1666 16.7219 18.3454 16.693 18.5208L16.5878 19.1577L17.1372 18.8572C17.2885 18.7744 17.4692 18.7744 17.6205 18.8572L18.1699 19.1577L18.0647 18.5208C18.0357 18.3454 18.0917 18.1664 18.2143 18.0423L18.6585 17.5928L18.0448 17.5C17.8758 17.4744 17.7296 17.364 17.654 17.2047L17.3788 16.625L17.1037 17.2047Z" fill="#FFA800"></path>
                                                                      </g>
                                                                    </g>
                                                                    <defs>
                                                                      <clipPath id="clip0_744_5969">
                                                                        <rect width="34.6107" height="36" fill="white" transform="translate(0.0737305)"></rect>
                                                                      </clipPath>
                                                                    </defs>
                                                                  </svg>
                                                             </div>
                                                             <div class="cont_bx">
                                                                 <h3>Commission</h3>
                                                             </div>
                                                            </div>
                                                             <div class="revenue_ratio">
                                                                 <h4>{{ $total_sess }}</h4>
                                                             </div>

                                                         </div>

                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="Sub_sect">
                                                    <h3>Subscription vs Margin</h3>
                                                    <!-- <img src="{{asset('assets/images/Charts-line.png')}}" alt=""> -->
                                                    <div class="circle_prog_bg">
                                                        <canvas id="revenueChart1"></canvas>
                                                    </div>
                                                    <div class="grp_pt">
                                                        <div class="crd_bx">
                                                           <div class="icon_bx">
                                                            <div class="ic_bx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                                                    <g clip-path="url(#clip0_744_5987)">
                                                                      <rect x="0.0737305" width="36" height="36" rx="6" fill="#C9F7F5"/>
                                                                      <mask id="mask0_744_5987" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="3" y="3" width="30" height="30">
                                                                        <rect x="3.67334" y="3.59961" width="28.8" height="28.8" fill="white"/>
                                                                      </mask>
                                                                      <g mask="url(#mask0_744_5987)">
                                                                        <mask id="mask1_744_5987" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="9" y="9" width="18" height="18">
                                                                          <rect x="9.43311" y="9.35938" width="17.28" height="17.28" fill="white"/>
                                                                        </mask>
                                                                        <g mask="url(#mask1_744_5987)">
                                                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8336 24.8386C23.0414 24.8386 24.7351 24.0411 24.2541 20.8316L23.6938 16.482C23.3973 14.8805 22.3758 14.2676 21.4795 14.2676H14.151C13.2415 14.2676 12.2793 14.9266 11.9366 16.482L11.3764 20.8316C10.9678 23.6787 12.6154 24.8386 14.8232 24.8386H20.8336Z" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                          <path d="M14.7241 14.1107C14.7241 12.3927 16.1168 11 17.8348 11C18.662 10.9965 19.4566 11.3227 20.0429 11.9065C20.6291 12.4902 20.9586 13.2834 20.9586 14.1107" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                          <path d="M15.6997 17.3516H15.7327" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                          <path d="M19.8979 17.3516H19.9309" stroke="#4AB58E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                        </g>
                                                                      </g>
                                                                    </g>
                                                                    <defs>
                                                                      <clipPath id="clip0_744_5987">
                                                                        <rect width="34.6107" height="36" fill="white" transform="translate(0.0737305)"/>
                                                                      </clipPath>
                                                                    </defs>
                                                                  </svg>

                                                            </div>
                                                            <div class="cont_bx">
                                                                <h3>Subscription</h3>
                                                            </div>
                                                           </div>
                                                            <div class="revenue_ratio">
                                                                <h4>{{ $total_sub }}</h4>
                                                            </div>

                                                        </div>
                                                        <div class="crd_bx">
                                                            <div class="icon_bx">
                                                             <div class="ic_bx">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="36" viewBox="0 0 35 36" fill="none">
                                                                    <g clip-path="url(#clip0_744_5969)">
                                                                      <rect x="0.0737305" width="36" height="36" rx="6" fill="#FFF4DE"/>
                                                                      <mask id="mask0_744_5969" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="9" y="9" width="17" height="18">
                                                                        <rect x="9.07275" y="9.35938" width="16.6132" height="17.28" fill="white"/>
                                                                      </mask>
                                                                      <g mask="url(#mask0_744_5969)">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4582 14.5023C10.4583 12.8549 11.7422 11.5195 13.3261 11.5195H21.4333C23.0173 11.5195 24.3002 12.855 24.3004 14.5021M24.3004 14.5021L24.3018 16.4483C24.3019 16.5915 24.2473 16.729 24.1499 16.8303C24.0525 16.9317 23.9204 16.9887 23.7826 16.9887C23.2107 16.9887 22.7512 17.4665 22.7512 18.0607C22.7512 18.6544 23.2109 19.1328 23.7826 19.1328C24.0694 19.1328 24.3018 19.3746 24.3018 19.6728V21.6168C24.3018 23.2642 23.0187 24.5998 21.434 24.5998H13.3247C11.7405 24.5998 10.4575 23.2641 10.4575 21.6168V19.6728C10.4575 19.3746 10.69 19.1328 10.9767 19.1328C11.5476 19.1328 12.0074 18.6546 12.0074 18.0607C12.0074 17.494 11.5752 17.0513 10.9767 17.0513C10.839 17.0513 10.7069 16.9944 10.6095 16.8931C10.5121 16.7917 10.4575 16.6543 10.4575 16.5111L10.4582 14.5023C10.4582 14.5022 10.4582 14.5024 10.4582 14.5023M11.4965 14.5025L11.496 16.0358C12.3734 16.2583 13.0457 17.0365 13.0457 18.0607C13.0457 19.0645 12.3882 19.9057 11.4958 20.1448V21.6168C11.4958 22.6681 12.3144 23.5198 13.3247 23.5198H21.434C22.445 23.5198 23.2635 22.668 23.2635 21.6168V20.1448C22.3707 19.9059 21.7129 19.0647 21.7129 18.0607C21.7129 17.0562 22.3706 16.2156 23.2632 15.9767L23.2621 14.5029C23.2621 13.4516 22.4436 12.5995 21.4333 12.5995H13.3261C12.3156 12.5995 11.4965 13.4514 11.4965 14.5025ZM10.4582 14.5023L24.3004 14.5021L10.4582 14.5023Z" fill="#FFA800"/>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9826 15.4575L18.4642 16.4721L19.5427 16.6352C20.0911 16.7198 20.3146 17.4218 19.9146 17.8284L19.9138 17.8293L19.1343 18.6181L19.3186 19.734C19.4134 20.31 18.8322 20.7379 18.3432 20.4727L18.3417 20.4719L17.3788 19.9452L16.4144 20.4727C15.9255 20.7379 15.3443 20.3103 15.4391 19.7343L15.6234 18.618L14.8445 17.8291L14.8438 17.8284C14.4438 17.4218 14.6673 16.7198 15.2156 16.6352L15.2171 16.635L16.2934 16.4721L16.7756 15.4564L16.7762 15.4552C17.0226 14.9395 17.7347 14.9336 17.9823 15.4568C17.9824 15.4571 17.9825 15.4573 17.9826 15.4575ZM17.1037 17.2047C17.0281 17.364 16.8819 17.4744 16.7129 17.5L16.0995 17.5928L16.5435 18.0425C16.666 18.1666 16.7219 18.3454 16.693 18.5208L16.5878 19.1577L17.1372 18.8572C17.2885 18.7744 17.4692 18.7744 17.6205 18.8572L18.1699 19.1577L18.0647 18.5208C18.0357 18.3454 18.0917 18.1664 18.2143 18.0423L18.6585 17.5928L18.0448 17.5C17.8758 17.4744 17.7296 17.364 17.654 17.2047L17.3788 16.625L17.1037 17.2047Z" fill="#FFA800"/>
                                                                      </g>
                                                                    </g>
                                                                    <defs>
                                                                      <clipPath id="clip0_744_5969">
                                                                        <rect width="34.6107" height="36" fill="white" transform="translate(0.0737305)"/>
                                                                      </clipPath>
                                                                    </defs>
                                                                  </svg>
                                                             </div>
                                                             <div class="cont_bx">
                                                                 <h3>Margin</h3>
                                                             </div>
                                                            </div>
                                                             <div class="revenue_ratio">
                                                                 <h4>{{ $total_sess }}</h4>
                                                             </div>

                                                         </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6">

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="grap_list_admin">
                                                    <div class="crd_grap">
                                                        <p>Total Subscriptions</p>
                                                        <h3>{{ $total_sub }}</h3>
                                                        <h4>By
                                                            Employer</h4>
                                                            <!-- <p><span>+25%</span><span>This Month</span></p> -->

                                                    </div>
                                                    <div class="crd_grap">
                                                        <p>Total Credits</p>
                                                        <h3>{{ $total_tok }}</h3>
                                                        <h4>By
                                                            Employer</h4>
                                                            <!-- <p><span>+35%</span><span>This Month</span></p> -->

                                                    </div>
                                                    <div class="crd_grap">
                                                        <p>Total Sessions</p>
                                                        <h3>{{ $total_sess }}</h3>
                                                        <h4>Conducted by
                                                            Professionals</h4>
                                                            <!-- <p><span>+15%</span><span>This Month</span></p> -->

                                                    </div>
                                                    <div class="crd_grap">
                                                        <p>Total Bronze Plans</p>
                                                        <h3>{{ $total_sub_b }}</h3>
                                                        <h4>Amount: $ {{ number_format(7500*$total_sub_b) }}</h4>
                                                            <p><span></span><span>Credits: {{ 100*$total_sub_b }}</span></p>

                                                    </div>
                                                    <div class="crd_grap">
                                                        <p>Total Silver Plans</p>
                                                        <h3>{{ $total_sub_s }}</h3>
                                                        <h4>Amount: $ {{ number_format(15000*$total_sub_s) }}</h4>
                                                            <p><span></span><span>Credits: {{ 500*$total_sub_s }}</span></p>

                                                    </div>
                                                    <div class="crd_grap">
                                                        <p>Total Gold Plans</p>
                                                        <h3>{{ $total_sub_g }}</h3>
                                                        <h4>Amount: $ {{ number_format(37500*$total_sub_g) }}</h4>
                                                            <p><span></span><span>Credits: {{ 750*$total_sub_g}}</span></p>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="grp_prog">
                                                   <div>
                                                    <h3>Revenue by Subscriptions</h3>
                                                    <h4>{{ number_format($plan_amt_sub) }}</h4>
                                                    <p>CAD Dollars</p>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;background-color: rgba(11, 183, 131, 1);">
                                                        </div>
                                                      </div>
                                                   </div>
                                                   <!-- <div class="cir_bx">
                                                    <img src="{{asset('assets/images/cir2.png')}}" alt="">

                                                   </div> -->
                                                   <div class="cir_bx chart1 stdsize" data-percent="80">
                                                        <span class="percent" style="color:#F64E60;">80%</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="grp_prog">
                                                   <div>
                                                    <h3>Margin Earned</h3>
                                                    <h4>{{ $commission }}</h4>
                                                    <p>CAD Dollars</p>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%; ">
                                                        </div>
                                                      </div>
                                                   </div>
                                                   <!-- <div class="cir_bx">
                                                    <img src="{{asset('assets/images/cir1.png')}}" alt="">

                                                   </div> -->
                                                   <div class="cir_bx chart stdsize" data-percent="20">
                                                        <span class="percent" style="color: #0BB783;">20%</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="Mapping_sect">
                                                    <h3>Mapping by Province</h3>
                                                    <img src="{{asset('assets/images/mapping.png')}}" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="dasp_grap super_grp_table">

                                    <div class="row">

                                         <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="head mt-3">
                                                <h3>Subscribers Details</h3>
                                            </div>

                                            <div class="table_data mt-3">
                                                <table class="table">
                                                    <thead>
                                                       <tr>
                                                        <th>S.no</th>
                                                        <th>Member Since</th>
                                                        <th>User name</th>
                                                        <th>User Type</th>
                                                        <th>Email ID</th>
                                                        <th>Plan</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($employers as $res)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ date("j M, Y", strtotime($res->created_at)) }}</td>
                                                            <td>{{ $res->name }}</td>
                                                            <td>{{ $res->role }}</td>
                                                            <td>{{ $res->email }}</td>
                                                            <td>{{ $res->plan_name }}</td>
                                                        </tr>

                                                        @endforeach


                                                    </tbody>
                                                </table>

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
@php
    $bronz=array();
    foreach ($result as $count){
        $bronz[]= $count;
    }
    $brd= implode(",", $bronz);
   //echo $bronz;
   $silver=array();
    foreach ($result1 as $count1){
        $silver[]= $count1;
    }
    $slv= implode(",", $silver);
   //echo $bronz;
   $gold=array();
    foreach ($result2 as $count2){
        $gold[]= $count2;
    }
    $gld= implode(",",$gold);
   //echo $bronz;
@endphp

@section('script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
	<script>
        $(document).ready(function () {
            $('.chart').easyPieChart({
                barColor: '#0BB783',
                trackColor: '#f2f2f2',
                scaleColor: false,
                lineWidth: 7,
                size: 62,
                animate: 1000,
                onStart: $.noop,
                onStop: $.noop
            });
            $('.chart1').easyPieChart({
                barColor: '#F64E60',
                trackColor: '#f2f2f2',
                scaleColor: false,
                lineWidth: 7,
                size: 62,
                animate: 1000,
                onStart: $.noop,
                onStop: $.noop
            });
        });

	</script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    // Get the canvas element
    const ctx = document.getElementById('revenueChart').getContext('2d');

    // Chart data
    const chartData = {
        labels: ['Professionals (in %)', 'Customers (in %)'],
        datasets: [{
            data: [15, 85], // Replace with your actual data percentages
            backgroundColor: ['#FFA800', '#F64E60'],
            borderWidth: 0
        }]
    };

    // Chart configuration
    const chartConfig = {
        type: 'doughnut',
        data: chartData,
        options: {
            cutout: '70%', // Adjust the cutout percentage as needed
            legend: {
                display: false
            },
            responsive: true,
            maintainAspectRatio: false
        }
    };

    // Create the chart
    const revenueChart = new Chart(ctx, chartConfig);
</script>
<script>
    // Get the canvas element
    const ctx1 = document.getElementById('revenueChart1').getContext('2d');

    // Chart data
    const chartData1 = {
        labels: ['Subscription (in %)', 'Margin (in %)'],
        datasets: [{
            data: [15, 85], // Replace with your actual data percentages
            backgroundColor: ['#FFA800', '#F64E60'],
            borderWidth: 0
        }]
    };

    // Chart configuration
    const chartConfig1 = {
        type: 'doughnut',
        data: chartData1,
        options: {
            cutout: '70%', // Adjust the cutout percentage as needed
            legend: {
                display: false
            },
            responsive: true,
            maintainAspectRatio: false
        }
    };

    // Create the chart
    const revenueChart1 = new Chart(ctx1, chartConfig1);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script>
                const xValues = ['JAN','FAB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];

                new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                    data: [<?=$brd;?>],
                    borderColor: "#0068A3",
                    fill: false
                    }, {
                    data: [<?=$slv;?>],
                    borderColor: "#54FF65",
                    fill: false
                    }, {
                    data: [<?=$gld;?>],
                    borderColor: "#FF54CF",
                    fill: false
                    }]
                },
                options: {
                    legend: {display: false}
                }
            });
        </script>
w
@endsection