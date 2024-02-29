
  <div wire:ignore.self class="modal fade custom_modal" id="modalAddNote" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="modalAddNoteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          @if (session()->has('message'))
          <div class="alert alert-success">
            {{ session('message') }}
          </div>
          @endif
          <div class="anything" wire:ignore.self>
          <form wire:submit.prevent="submit('s')">
            <div class="Consultation_modal Vett_admin">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <h3>Consultation</h3>
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="frm_grp">
                    <label for="">Consultant Name</label>
                    <input type="text" readonly value="{{$customerName}}" class="form-control" wire:model="customerName" placeholder="Client Name">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="frm_grp">
                    <label for="">Date</label>
                    <input type="text" readonly value="{{$dateSelected}}" class="form-control" wire:model="dateSelected" placeholder="07/07/2023">
                    <span class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                        viewBox="0 0 25 24" fill="none">
                        <path
                          d="M21.5552 4H19.3829V5.33333H21.3881V20H2.67291V5.33333H4.6781V4H2.50581C2.34956 4.0026 2.19536 4.03588 2.05201 4.09794C1.90866 4.15999 1.77897 4.24961 1.67035 4.36166C1.56173 4.47371 1.4763 4.60601 1.41895 4.751C1.3616 4.89599 1.33345 5.05083 1.33611 5.20667V20.1267C1.33345 20.2825 1.3616 20.4373 1.41895 20.5823C1.4763 20.7273 1.56173 20.8596 1.67035 20.9717C1.77897 21.0837 1.90866 21.1733 2.05201 21.2354C2.19536 21.2974 2.34956 21.3307 2.50581 21.3333H21.5552C21.7114 21.3307 21.8656 21.2974 22.009 21.2354C22.1523 21.1733 22.282 21.0837 22.3906 20.9717C22.4992 20.8596 22.5847 20.7273 22.642 20.5823C22.6994 20.4373 22.7275 20.2825 22.7249 20.1267V5.20667C22.7275 5.05083 22.6994 4.89599 22.642 4.751C22.5847 4.60601 22.4992 4.47371 22.3906 4.36166C22.282 4.24961 22.1523 4.15999 22.009 4.09794C21.8656 4.03588 21.7114 4.0026 21.5552 4Z"
                          fill="#515151" />
                        <path d="M5.34766 9.33203H6.68445V10.6654H5.34766V9.33203Z"
                          fill="#515151" />
                        <path d="M9.35742 9.33203H10.6942V10.6654H9.35742V9.33203Z"
                          fill="#515151" />
                        <path d="M13.3672 9.33203H14.704V10.6654H13.3672V9.33203Z" fill="#515151" />
                        <path d="M17.3789 9.33203H18.7157V10.6654H17.3789V9.33203Z"
                          fill="#515151" />
                        <path d="M5.34766 12.668H6.68445V14.0013H5.34766V12.668Z" fill="#515151" />
                        <path d="M9.35742 12.668H10.6942V14.0013H9.35742V12.668Z" fill="#515151" />
                        <path d="M13.3672 12.668H14.704V14.0013H13.3672V12.668Z" fill="#515151" />
                        <path d="M17.3789 12.668H18.7157V14.0013H17.3789V12.668Z" fill="#515151" />
                        <path d="M5.34766 16H6.68445V17.3333H5.34766V16Z" fill="#515151" />
                        <path d="M9.35742 16H10.6942V17.3333H9.35742V16Z" fill="#515151" />
                        <path d="M13.3672 16H14.704V17.3333H13.3672V16Z" fill="#515151" />
                        <path d="M17.3789 16H18.7157V17.3333H17.3789V16Z" fill="#515151" />
                        <path
                          d="M6.68402 6.66536C6.86129 6.66536 7.0313 6.59513 7.15665 6.4701C7.282 6.34508 7.35242 6.17551 7.35242 5.9987V1.9987C7.35242 1.82189 7.282 1.65232 7.15665 1.52729C7.0313 1.40227 6.86129 1.33203 6.68402 1.33203C6.50675 1.33203 6.33674 1.40227 6.21139 1.52729C6.08605 1.65232 6.01562 1.82189 6.01562 1.9987V5.9987C6.01562 6.17551 6.08605 6.34508 6.21139 6.4701C6.33674 6.59513 6.50675 6.66536 6.68402 6.66536Z"
                          fill="#515151" />
                        <path
                          d="M17.3774 6.66536C17.5547 6.66536 17.7247 6.59513 17.85 6.4701C17.9754 6.34508 18.0458 6.17551 18.0458 5.9987V1.9987C18.0458 1.82189 17.9754 1.65232 17.85 1.52729C17.7247 1.40227 17.5547 1.33203 17.3774 1.33203C17.2001 1.33203 17.0301 1.40227 16.9048 1.52729C16.7794 1.65232 16.709 1.82189 16.709 1.9987V5.9987C16.709 6.17551 16.7794 6.34508 16.9048 6.4701C17.0301 6.59513 17.2001 6.66536 17.3774 6.66536Z"
                          fill="#515151" />
                        <path d="M8.68945 4H15.3734V5.33333H8.68945V4Z" fill="#515151" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="frm_grp">
                        <label for="">Time</label>
                        <input type="text" readonly value="{{date('h:i a', strtotime($timeSelected))}}" class="form-control" placeholder="1">
                        <span class="icon"></span>
                        @error('timeSelected') <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3>Summary</h3>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="frm_grp">
                    <input type="text" wire:model="summary" class="form-control"
                      placeholder="Share your daily activities as per doctor consultation regarding to your consultaions">
                    @error('summary') <span class="text-danger error">{{ $message }}</span>@enderror
                  </div>
                </div>
              </div>
            
              <div class="row">
                <div class="loonApplt_btn" >
                  <div class="iagt" style="justify-content: end;">
                    <div><label for="plan" class="agrtrms">
                    <input type="checkbox" id="plan" wire:model="termsAccepted" required="" class="chki">
                    <span class="agrchckmrk"></span>I agree to share the consultation notes with the Consultant</label></div>
                  </div>
                    <div style="text-align:right">@error('termsAccepted') <span class="text-danger error">{{ $message }}</span>@enderror</div>
                </div>
                <div class="btn_grp_dash">
                  <a class="btn" wire:click.prevent data-bs-dismiss="modal" aria-label="Close">Back</a>
                  <button class="btn" style="background:linear-gradient(160deg, #0068C4 0%, #00A7C5 100%); color:#fff" wire:model="actiononsave" value="save" wire:click.prevent="submit('save')">Save</button>
                </div>
              </div>
          </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>