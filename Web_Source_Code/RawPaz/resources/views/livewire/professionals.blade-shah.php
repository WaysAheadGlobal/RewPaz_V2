
<div class="row">
  <div class="col-lg-3 col-md-12 col-sm-12">
    <div class="box_card_left">
      <div class="filter_bx">
        <p>
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M20 3H4C3.73478 3 3.48043 3.10536 3.29289 3.29289C3.10536 3.48043 3 3.73478 3 4V6.59C3 7.113 3.213 7.627 3.583 7.997L9 13.414V21C9.0002 21.1704 9.04387 21.3379 9.1269 21.4867C9.20992 21.6354 9.32955 21.7605 9.47444 21.8502C9.61934 21.9398 9.78471 21.9909 9.9549 21.9988C10.1251 22.0066 10.2945 21.9709 10.447 21.895L14.447 19.895C14.786 19.725 15 19.379 15 19V13.414L20.417 7.997C20.787 7.627 21 7.113 21 6.59V4C21 3.73478 20.8946 3.48043 20.7071 3.29289C20.5196 3.10536 20.2652 3 20 3ZM13.293 12.293C13.2 12.3857 13.1262 12.4959 13.0759 12.6172C13.0256 12.7386 12.9998 12.8687 13 13V18.382L11 19.382V13C11.0002 12.8687 10.9744 12.7386 10.9241 12.6172C10.8738 12.4959 10.8 12.3857 10.707 12.293L5 6.59V5H19.001L19.003 6.583L13.293 12.293Z" fill="#515151"/>
            </svg>
          </span>
          <span>FILTER</span>
        </p>
        <p>Reset Filter</p>
      </div>
      <div class="fil_bx">
        <h3>
          <span>Filter Search</span><span> (0 Profiles)</span>
        </h3>
        <label for="">Experience</label>
      </div>
      <div class="frm_grp select_icon">
        <label for="">Experience</label>
        <select class="form-control" wire:model='filteration.experience'>
          <option value="">--please select--</option>
          <option value="1 years">1+ Years</option>
          <option value="2 years">2+ Years</option>
          <option value="3 years">3+ Years</option>
          <option value="4 years">4+ Years</option>
          <option value="5 years">5+ Years</option>
        </select>
      </div>
      <div class="frm_grp select_icon">
        <label for="">Avaiability</label>
        <select class="form-control" wire:model='filteration.availabilityDays'>
          <option value="">--please select--</option>
          <option value="Sunday">Sunday
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
        </select>
        <select class="form-control">
          <option value="">--please select--</option>
          <option value="">
            8:00 AM to 9:00 AM
          </option>
          <option value="">9:00 AM to 10:00 AM </option>
          <option value="">10:00 AM to 11:00 AM </option>
          <option value="">11:00 AM to 12:00 PM </option>
          <option value="">12:00 PM to 1:00 PM </option>
          <option value="">1:00 PM to 2:00 PM </option>
          <option value="">2:00 PM to 3:00 PM </option>
          <option value="">3:00 PM to 4:00 PM </option>
          <option value="">4:00 PM to 5:00 PM </option>
          <option value="">5:00 PM to 6:00 PM </option>
          <option value="">6:00 PM to 7:00 PM </option>
          <option value="">7:00 PM to 8:00 PM
          </option>
        </select>
      </div>
      <div class="frm_grp">
        <label for="">Gender</label>
        <div class="frm_gen">
          <div class="cstm_chbx">
            <label class="cstmcntr">Male
            <input type="radio" value="Male" wire:model="filteration.gender">
            <span class="cstmchkmrk"></span>
            </label>
          </div>
          <div class="cstm_chbx">
            <label class="cstmcntr">Female
            <input type="radio" value="Female" wire:model="filteration.gender">
            <span class="cstmchkmrk"></span>
            </label>
          </div>
          <div class="cstm_chbx">
            <label class="cstmcntr">Both
            <input type="radio" value="" wire:model="filteration.gender">
            <span class="cstmchkmrk"></span>
            </label>
          </div>
        </div>
        <div class="frm_grp select_icon">
          <label for="">Rating</label>
          <select class="form-control">
            <option value="">--please select--</option>
            <option value="">1+</option>
            <option value="">1.5+</option>
            <option value="">2+</option>
            <option value="">2.5+</option>
            <option value="">3+</option>
            <option value="">3.5+</option>
            <option value="">4+</option>
            <option value="">4.5+</option>
            <option value="">5</option>
          </select>
        </div>
        <div class="frm_grp select_icon">
          <label for="">Within</label>
          <select class="form-control">
            <option value="">--please select--</option>
            <option value="">1 Kms</option>
            <option value="">2 Kms</option>
            <option value="">3 Kms</option>
            <option value="">4 Kms</option>
            <option value="">5 Kms</option>
          </select>
        </div>
        <div class="frm_grp select_icon">
          <label for="">Language</label>
          <select class="form-control" wire:model='filteration.language'>
            <option value="">--please select--</option>
            <option>English </option>
            <option>Spanish</option>
            <option>French</option>
            <option>German</option>
            <option>Italian</option>
            <option>Portuguese</option>
            <option>Dutch</option>
            <option>Russian</option>
            <option>Chinese</option>
            <option>Japanese</option>
            <option>Korean
            <option>Arabic</option>
            <option>Hindi</option>
            <option>Swedish</option>
            <option>Norwegian</option>
            <option>Danish</option>
            <option>Finnish</option>
            <option>Polish</option>
            <option>Turkish</option>
            <option>Greek</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-12">
    <div class="box_card_rgt">
    <div class="head_search">
        <div class="resul_txt">
            <h3>Search results</h3>
            <h4>{{ $professionals->total() }} profiles based on your search criteria</h4>
            <p>1 Service = 1 Token</p>
        </div>
        <div class="search_bar">
            <label for="Search">Search</label>
            <input type="text" wire:model.debounce.500ms='searchTerm' class="form-control" placeholder="Search">
            <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                <path d="M14.994 14.1715L19 18.1765L17.6765 19.5L13.6715 15.494C12.1813 16.6887 10.3278 17.3384 8.41784 17.3357C3.77119 17.3357 0 13.5645 0 8.91784C0 4.27119 3.77119 0.5 8.41784 0.5C13.0645 0.5 16.8357 4.27119 16.8357 8.91784C16.8384 10.8278 16.1887 12.6813 14.994 14.1715ZM13.1178 13.4775C14.3048 12.2568 14.9677 10.6205 14.965 8.91784C14.965 5.30004 12.0347 2.37063 8.41784 2.37063C4.80004 2.37063 1.87063 5.30004 1.87063 8.91784C1.87063 12.5347 4.80004 15.465 8.41784 15.465C10.1205 15.4677 11.7568 14.8048 12.9775 13.6178L13.1178 13.4775Z" fill="#828282"></path>
            </svg>
            </span>
        </div>
    </div>
    <div class="prof_list">
    <div class="col-md-12">
      <div class="row">
        @forelse ($professionals as $pro)

        <div class="card_bx" wire:loading.class.delay='loading111'>
                     <div class="img_bx">
                        <img src="{{asset('assets/images/unsplash.png')}}" alt="">
                     </div>
                     <div class="cont_bx">
                        <div class="head">
                           <h3>
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <path d="M8.39756 1.08789C4.34043 1.08789 1.05078 4.37754 1.05078 8.43467C1.05078 12.4918 4.34043 15.7815 8.39756 15.7815C12.4547 15.7815 15.7443 12.4918 15.7443 8.43467C15.7443 4.37754 12.4547 1.08789 8.39756 1.08789ZM11.5708 6.03549L8.11714 10.824C8.06887 10.8914 8.00523 10.9463 7.93151 10.9842C7.85779 11.022 7.7761 11.0418 7.69322 11.0418C7.61034 11.0418 7.52866 11.022 7.45493 10.9842C7.38121 10.9463 7.31758 10.8914 7.26931 10.824L5.22434 7.99026C5.16203 7.90334 5.22434 7.78199 5.33094 7.78199H6.10005C6.26732 7.78199 6.4264 7.86235 6.52479 8.0001L7.6924 9.62033L10.2703 6.04533C10.3687 5.90922 10.5262 5.82722 10.6951 5.82722H11.4642C11.5708 5.82722 11.6331 5.94857 11.5708 6.03549Z" fill="#1BA261"/>
                                 </svg>
                              </span>
                              <span>{{ $pro->name }}</span>
                           </h3>
                           <div class="cstm_chbx">
                              <label class="cstmcntr">
                              <input type="checkbox" checked="checked">
                              <span class="cstmchkmrk"></span>
                              </label>
                           </div>
                        </div>
                        <div class="rating_bx">
                           <ul>
                              <li>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                       <path d="M14.6249 5.96955L10.0942 5.31834L8.06886 1.2575C8.01354 1.14632 7.92254 1.05631 7.81012 1.0016C7.52818 0.863949 7.18556 0.978662 7.04459 1.2575L5.01925 5.31834L0.488552 5.96955C0.363641 5.9872 0.249437 6.04544 0.161999 6.13368C0.0562922 6.24113 -0.00195737 6.3857 5.02248e-05 6.5356C0.00205782 6.68551 0.0641583 6.82849 0.172706 6.93314L3.45073 10.0939L2.67628 14.5571C2.65812 14.661 2.66973 14.7677 2.70981 14.8654C2.74989 14.963 2.81682 15.0476 2.90302 15.1095C2.98923 15.1714 3.09124 15.2082 3.19751 15.2157C3.30378 15.2232 3.41005 15.2011 3.50426 15.1519L7.55673 13.0447L11.6092 15.1519C11.7198 15.2101 11.8483 15.2295 11.9714 15.2083C12.2819 15.1554 12.4907 14.8642 12.4372 14.5571L11.6627 10.0939L14.9407 6.93314C15.03 6.84666 15.0889 6.73372 15.1067 6.61018C15.1549 6.30134 14.9372 6.01544 14.6249 5.96955Z" fill="#EB3333"/>
                                    </svg>
                                 </span>
                                 <span>4.5</span>
                              </li>
                              <li>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="25" viewBox="0 0 21 25" fill="none">
                                       <path d="M10.4625 24.719C8.6938 23.2398 7.05436 21.6181 5.56134 19.8709C3.3208 17.2471 0.660157 13.3395 0.660157 9.61591C0.659186 7.71423 1.23361 5.85501 2.31072 4.27355C3.38784 2.69209 4.91924 1.45947 6.71111 0.731689C8.50297 0.00390858 10.4748 -0.186318 12.3769 0.185084C14.2791 0.556486 16.0262 1.47282 17.397 2.81812C18.3097 3.70901 19.0331 4.76854 19.5253 5.93537C20.0176 7.10221 20.269 8.35319 20.2649 9.61591C20.2649 13.3395 17.6042 17.2471 15.3637 19.8709C13.8707 21.6181 12.2312 23.2398 10.4625 24.719ZM10.4625 5.49687C9.34834 5.49687 8.27979 5.93084 7.49195 6.70331C6.70411 7.47578 6.2615 8.52347 6.2615 9.61591C6.2615 10.7083 6.70411 11.756 7.49195 12.5285C8.27979 13.301 9.34834 13.7349 10.4625 13.7349C11.5767 13.7349 12.6452 13.301 13.4331 12.5285C14.2209 11.756 14.6635 10.7083 14.6635 9.61591C14.6635 8.52347 14.2209 7.47578 13.4331 6.70331C12.6452 5.93084 11.5767 5.49687 10.4625 5.49687Z" fill="#515151"/>
                                    </svg>
                                 </span>
                                 <span>5 Kms</span>
                              </li>
                              <li>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                       <path d="M20.5484 1.98926H4.63733C3.54344 1.98926 2.64844 2.88426 2.64844 3.97815V21.8781L6.62622 17.9004H20.5484C21.6423 17.9004 22.5373 17.0054 22.5373 15.9115V3.97815C22.5373 2.88426 21.6423 1.98926 20.5484 1.98926ZM20.5484 15.9115H5.80083L4.63733 17.075V3.97815H20.5484V15.9115Z" fill="#515151"/>
                                       <path d="M12.5933 14.9171L14.1546 11.5062L17.5655 9.94488L14.1546 8.3836L12.5933 4.97266L11.032 8.3836L7.62109 9.94488L11.032 11.5062L12.5933 14.9171Z" fill="#515151"/>
                                    </svg>
                                 </span>
                                 <span>56 Reviews</span>
                              </li>
                              <li>
                                 <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                                       <path d="M16.9102 1.71875H1.47266V17.1562H10.4102V25.6875H25.8477V10.25H16.9102V1.71875ZM8.19127 5.375L5.64144 12.652H7.36328L7.77796 11.4688H10.4102V15.5312H3.09766V3.34375H15.2852V10.25H11.8997L10.1918 5.375H8.19127ZM10.0355 9.84375H8.34732L9.19141 7.43479L10.0355 9.84375ZM24.2227 11.875V24.0625H12.0352V11.875H24.2227Z" fill="#515151"/>
                                       <path d="M16.7798 19.2119C16.9352 19.4615 17.1063 19.701 17.2921 19.9289C16.703 20.2466 16.034 20.4057 15.2852 20.4062V22.0312C16.5111 22.0312 17.6064 21.7058 18.5352 21.0753C19.4639 21.7058 20.5592 22.0312 21.7852 22.0312V20.4062C21.0378 20.4062 20.3689 20.247 19.7783 19.9286C19.9641 19.7008 20.1352 19.4614 20.2906 19.2119C20.7589 18.4505 21.1033 17.6195 21.311 16.75H22.1914V15.125H19.3477V13.9062H17.7227V15.125H14.8789V16.75H15.7594C15.967 17.6195 16.3114 18.4505 16.7798 19.2119ZM19.6285 16.75C19.4604 17.3124 19.2197 17.8505 18.9125 18.3506C18.7977 18.535 18.6717 18.7122 18.5352 18.8812C18.4086 18.7247 18.2911 18.5611 18.1832 18.3911C17.8636 17.8798 17.6141 17.3278 17.4416 16.75H19.6285Z" fill="#515151"/>
                                    </svg>
                                 </span>
                                 @php
                                    $lang=EXPLODE(',  ',$pro->language);
                                 @endphp
                                    @foreach ($lang as $lan)
                                    <span>{{ $lan }}</span>
                                    @endforeach

                              </li>
                           </ul>
                           <button class="btn_appoin">SOS Appointment</button>
                        </div>
                        <div class="Speci_sect">
                           <p>
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M13.6365 23.867C14.9797 23.867 16.3098 23.6024 17.5508 23.0884C18.7917 22.5743 19.9193 21.8209 20.8692 20.8711C21.819 19.9213 22.5724 18.7937 23.0864 17.5527C23.6005 16.3117 23.865 14.9816 23.865 13.6384C23.865 12.2952 23.6005 10.9651 23.0864 9.72411C22.5724 8.48312 21.819 7.35553 20.8692 6.40572C19.9193 5.45591 18.7917 4.70248 17.5508 4.18844C16.3098 3.67441 14.9797 3.40984 13.6365 3.40984C10.9237 3.40984 8.322 4.48749 6.40377 6.40572C4.48554 8.32395 3.40789 10.9256 3.40789 13.6384C3.40789 16.3512 4.48554 18.9529 6.40377 20.8711C8.322 22.7893 10.9237 23.867 13.6365 23.867ZM13.6365 25.5717C10.4715 25.5717 7.43625 24.3145 5.19832 22.0766C2.96038 19.8386 1.70313 16.8033 1.70312 13.6384C1.70312 10.4735 2.96038 7.4382 5.19832 5.20027C7.43625 2.96234 10.4715 1.70508 13.6365 1.70508C16.8014 1.70508 19.8367 2.96234 22.0746 5.20027C24.3125 7.4382 25.5698 10.4735 25.5698 13.6384C25.5698 16.8033 24.3125 19.8386 22.0746 22.0766C19.8367 24.3145 16.8014 25.5717 13.6365 25.5717Z" fill="#515151"/>
                                    <path d="M13.6395 2.55664C13.8656 2.55664 14.0824 2.64644 14.2423 2.8063C14.4021 2.96615 14.4919 3.18296 14.4919 3.40902V8.52331C14.4919 8.74937 14.4021 8.96618 14.2423 9.12603C14.0824 9.28588 13.8656 9.37569 13.6395 9.37569C13.4135 9.37569 13.1967 9.28588 13.0368 9.12603C12.877 8.96618 12.7872 8.74937 12.7872 8.52331V3.40902C12.7872 3.18296 12.877 2.96615 13.0368 2.8063C13.1967 2.64644 13.4135 2.55664 13.6395 2.55664ZM13.6395 17.8995C13.8656 17.8995 14.0824 17.9893 14.2423 18.1492C14.4021 18.309 14.4919 18.5258 14.4919 18.7519V23.8662C14.4919 24.0922 14.4021 24.309 14.2423 24.4689C14.0824 24.6287 13.8656 24.7185 13.6395 24.7185C13.4135 24.7185 13.1967 24.6287 13.0368 24.4689C12.877 24.309 12.7872 24.0922 12.7872 23.8662V18.7519C12.7872 18.5258 12.877 18.309 13.0368 18.1492C13.1967 17.9893 13.4135 17.8995 13.6395 17.8995ZM2.55859 13.6376C2.55859 13.4115 2.6484 13.1947 2.80825 13.0349C2.9681 12.875 3.18491 12.7852 3.41097 12.7852H8.52526C8.75133 12.7852 8.96813 12.875 9.12799 13.0349C9.28784 13.1947 9.37764 13.4115 9.37764 13.6376C9.37764 13.8637 9.28784 14.0805 9.12799 14.2403C8.96813 14.4002 8.75133 14.49 8.52526 14.49H3.41097C3.18491 14.49 2.9681 14.4002 2.80825 14.2403C2.6484 14.0805 2.55859 13.8637 2.55859 13.6376ZM17.9015 13.6376C17.9015 13.4115 17.9913 13.1947 18.1511 13.0349C18.311 12.875 18.5278 12.7852 18.7538 12.7852H23.8681C24.0942 12.7852 24.311 12.875 24.4708 13.0349C24.6307 13.1947 24.7205 13.4115 24.7205 13.6376C24.7205 13.8637 24.6307 14.0805 24.4708 14.2403C24.311 14.4002 24.0942 14.49 23.8681 14.49H18.7538C18.5278 14.49 18.311 14.4002 18.1511 14.2403C17.9913 14.0805 17.9015 13.8637 17.9015 13.6376Z" fill="#515151"/>
                                 </svg>
                              </span>
                              <span>Specialty: {{ $pro->expertise }} </span>
                           </p>
                           <p>
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M13.6394 0.545898C10.1671 0.545898 6.83693 1.92529 4.3816 4.38062C1.92627 6.83596 0.546875 10.1661 0.546875 13.6385C0.546965 15.3578 0.885703 17.0603 1.54375 18.6487C2.20179 20.2372 3.16626 21.6804 4.38208 22.8961C5.5979 24.1118 7.04127 25.0761 8.62977 25.734C10.2183 26.3919 11.9208 26.7305 13.6401 26.7304C15.3595 26.7303 17.062 26.3915 18.6504 25.7335C20.2388 25.0754 21.6821 24.111 22.8978 22.8952C24.1135 21.6793 25.0778 20.236 25.7357 18.6475C26.3935 17.059 26.7321 15.3564 26.732 13.6371C26.732 6.40755 20.869 0.545898 13.6394 0.545898ZM13.6394 24.0021C12.2783 24.0021 10.9305 23.734 9.67295 23.2131C8.41542 22.6922 7.27279 21.9287 6.31032 20.9662C5.34784 20.0038 4.58437 18.8611 4.06348 17.6036C3.54259 16.3461 3.27449 14.9983 3.27449 13.6371C3.27449 12.276 3.54259 10.9281 4.06348 9.67061C4.58437 8.41308 5.34784 7.27045 6.31032 6.30798C7.27279 5.3455 8.41542 4.58203 9.67295 4.06114C10.9305 3.54025 12.2783 3.27215 13.6394 3.27215V13.6385L22.9024 9.00697C23.6266 10.4435 24.004 12.0297 24.0044 13.6385C24.004 16.3872 22.9119 19.0232 20.9681 20.9667C19.0243 22.9102 16.3882 24.0021 13.6394 24.0021Z" fill="#515151"/>
                                 </svg>
                              </span>
                              <span>Experience ({{ $pro->experience_year }}) +</span>
                           </p>
                           <a class="btn_more" href="professional/{{$pro->uid}}">Know more</a>
                        </div>
                     </div>
                  </div>



        @empty
        <h6 class='loading111'>No record found</h6>
        @endforelse
      </div>
      <div class="row">
        <div class="pagenation_bx" style="padding: 0;">
                  <div class="frm_grp select_icon">
                     <select class="form-control" wire:model='pagination'>
                        <option value="">Select Records Per Page</option>
                        <option value="5">5 Per Page</option>
                        <option value="10">10 Per Page</option>
                        <option value="20">20 Per Page</option>
                        <option value="30">30 Per Page</option>
                        <option value="40">40 Per Page</option>
                        <option value="50">50 Per Page</option>
                     </select>
                  </div>

                  <div class="pagena_no">
                    @if ($professionals->links()->paginator->hasPages())
                        {{ $professionals->links() }}
                    @endif
                  </div>
        </div>
        <style>
            .pagenation_bx .pagena_no ul li {
                position: relative;
            }
            ul.pagination li.page-item.disabled:after{
                background: none;
                border: none;
                box-shadow: none;
            }
            ul.pagination li span {
                border: none;
                background: none;
                position: relative;
            }
            ul.pagination li button {
                border: none;
                color: inherit;
                padding: 0 5px;
                transition: .3s ease-in-out;
            }
            ul.pagination li button:hover {
                background: none;
                font-size: 24px;
                font-weight: 700;
                transition: .1s ease-in-out;
            }
            ul.pagination li.page-item.active span {
                border: none;
                background: none;
                color: #03a4e9;
                font-size: 32px;
                font-weight: 700;
                padding: 0;
            }
    </style>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>