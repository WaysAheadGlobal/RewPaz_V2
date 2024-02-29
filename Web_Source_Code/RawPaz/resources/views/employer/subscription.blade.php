@extends('employer.main')
@section('main')
<!-- ***** Paln start ***** -->
<section class="plan_tab_sect bg_inner_mark">
    <div class="container">
      <div class="row">
         </div>
          <div class="plan_card">
            <div class="top_heading">
                <h3> Choose best plan</h3>
                <p>Unlock a premium experience with our subscription service.</p>

            <div class="plan__navbar">
              <div class="pln_mode">
                <p><span><svg xmlns="http://www.w3.org/2000/svg" width="58" height="64" viewBox="0 0 58 64" fill="none">
                    <path d="M57.4746 3.54684C57.4746 3.54684 55.5786 30.3792 50.3451 41.2624C40.5459 61.6549 28.738 63.6114 28.738 63.6114C28.738 63.6114 16.9315 61.6549 7.12954 41.2624C1.9002 30.3792 0 3.54684 0 3.54684L28.7366 0.408691L57.4746 3.54684Z" fill="#52A2E9"/>
                    <path d="M40.3368 19.9341L42.722 22.3193L25.8318 39.2095L17.4189 30.7926L19.8042 28.4087L25.8359 34.4405L40.3368 19.9341Z" fill="white"/>
                  </svg></span>
                    <span>Features</span></p>
              </div>

              <div class="plan_tab">
                <ul>
                  @if(!empty($Plans))
                  @foreach($Plans as $p)
                  <li class="item-tab active">
                    <a class="nav-link active" data-toggle="tab" href="#FreemiumPlan" data-id="FreemiumPlan" role="tab" >
                      <div class="tab_desp">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                <circle cx="32" cy="32" r="32" fill="#DEEBF6"/>
                                <path d="M23.8477 18.3128V22.3887H27.1088V18.3128H36.8914V22.3887H40.1525V18.3128C40.1525 17.448 39.8089 16.6186 39.1973 16.0071C38.5857 15.3957 37.7562 15.0523 36.8914 15.0525H27.1088C26.244 15.0523 25.4145 15.3957 24.8029 16.0071C24.1913 16.6186 23.8477 17.448 23.8477 18.3128Z" fill="#52A2E9"/>
                                <path d="M47.5122 48H16.5334C15.6342 47.9974 14.9058 47.269 14.9033 46.3698L14.8799 29.7263H49.119L49.1424 46.3698C49.1398 47.269 48.4115 47.9974 47.5122 48Z" fill="#B1D2EF"/>
                                <path d="M48.3038 31.3566H15.6956C14.7964 31.354 14.068 30.6257 14.0654 29.7264V23.2041C14.068 22.3049 14.7964 21.5766 15.6956 21.574H48.3038C49.203 21.5766 49.9314 22.3049 49.934 23.2041V29.7256C49.9318 30.6252 49.2033 31.354 48.3038 31.3566Z" fill="#52A2E9"/>
                                <path d="M21.4017 33.8022H19.7715C19.3217 33.8009 18.9573 33.4366 18.9561 32.9867V29.7264C18.9573 29.2765 19.3217 28.9122 19.7715 28.9109H21.4017C21.8515 28.9122 22.2159 29.2765 22.2172 29.7264V32.9875C22.2155 33.437 21.8512 33.8009 21.4017 33.8022Z" fill="#FFD76B"/>
                                <path d="M44.2279 33.8022H42.5977C42.1479 33.8009 41.7835 33.4366 41.7822 32.9867V29.7264C41.7835 29.2765 42.1479 28.9122 42.5977 28.9109H44.2279C44.6777 28.9122 45.0421 29.2765 45.0434 29.7264V32.9875C45.0416 33.437 44.6774 33.8009 44.2279 33.8022Z" fill="#FFD76B"/>
                              </svg>
                        </div>

                        <h3>{{ $p->name }} Package</h3>
                        <h4>${{ $p->price }} </h4>
                        <p>{{ $p->token }}  Tokens (${{ $p->price/$p->token }}/Token)</p>
                        @php
                        $slug1= $p->slug;
                        @endphp
                        <a class="btn" href="{{ url('transcation/plan/'.$slug1.'/'.$result->uid)}}">Select Plan</a>
                      </div>
                    </a>
                  </li>
                  @endforeach
                  @endif

                </ul>

              </div>

            </div>
            <div class="tab-cont">
              <div data-value="FreemiumPlan" class="tab-pane show">
               <div class="plan_desp_d">
                <ul>
                  <li>
                    <div class="point_bx">
                        Access to services through our affiliate service providers
                    </div>
                  </li>
                  <li>
                    <div class="point_bx">
                        No contract and minimums
                    </div>
                  </li>
                  <li>
                    <div class="point_bx">
                        Flexible coverage and pay for actual usage
                    </div>
                  </li>
                  <li>
                    <div class="point_bx">
                        Employees get access to all online services
                    </div>
                  </li>

                </ul>


               </div>
              </div>
              <div data-value="SilverPlan" class="tab-pane">
                <div class="plan_desp_d">
                    <ul>
                      <li>
                        <div class="point_bx">
                            Access to services through our affiliate service providers
                        </div>
                      </li>
                      <li>
                        <div class="point_bx">
                            No contract and minimums
                        </div>
                      </li>
                      <li>
                        <div class="point_bx">
                            Flexible coverage and pay for actual usage
                        </div>
                      </li>
                      <li>
                        <div class="point_bx">
                            Employees get access to all online services
                        </div>
                      </li>

                    </ul>


                   </div>
              </div>
              <div data-value="GoldPlan" class="tab-pane">
                <div class="plan_desp_d">
                    <ul>
                      <li>
                        <div class="point_bx">
                            Access to services through our affiliate service providers
                        </div>
                      </li>
                      <li>
                        <div class="point_bx">
                            No contract and minimums
                        </div>
                      </li>
                      <li>
                        <div class="point_bx">
                            Flexible coverage and pay for actual usage
                        </div>
                      </li>
                      <li>
                        <div class="point_bx">
                            Employees get access to all online services
                        </div>
                      </li>

                    </ul>


                   </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

   </section>
  <!-- ***** Paln End ***** -->
@endsection