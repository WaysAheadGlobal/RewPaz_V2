<div wire:ignore.self class="modal fade cust_popup" id="feedback_popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <div class="pop_feedback">
            <div class="head">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.707 6.70697L17.293 5.29297L12 10.586L6.70697 5.29297L5.29297 6.70697L10.586 12L5.29297 17.293L6.70697 18.707L12 13.414L17.293 18.707L18.707 17.293L13.414 12L18.707 6.70697Z" fill="#636D79"/>
                      </svg>
                    </span>
                  </button>
                <h3>Your opinion matters to us!</h3>

            </div>
            <div class="cont_rating">
                <form wire:submit="submitFeedback()">
                
@if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width:500px; margin:25px auto;">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
                <h4>Don’t forget to share your valuable feedback</h4>
                <ul class="stars">
                    <li class="{{($rating >= 1) ? 'active' : ''}}">
                        <a href="#" wire:click='setRating(1)'><i class="fa fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="{{($rating >= 2) ? 'active' : ''}}">
                        <a href="#" wire:click='setRating(2)'><i class="fa fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="{{($rating >= 3) ? 'active' : ''}}">
                        <a href="#" wire:click='setRating(3)'><i class="fa fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="{{($rating >= 4) ? 'active' : ''}}">
                        <a href="#" wire:click='setRating(4)'><i class="fa fa-star" aria-hidden="true"></i></a>
                    </li>
                    <li class="{{($rating >= 5) ? 'active' : ''}}">
                        <a href="#" wire:click='setRating(5)'><i class="fa fa-star" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <div class="tex_area">
                    <textarea class="form-control" wire:model.defer='feedbackDescription' type="text" placeholder="Leave a review"></textarea>

                    @error('feedbackDescription') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
                 @if (session()->has('ratingError'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="max-width:500px; margin:25px auto;">
                <strong>Failed!</strong> {{ session('ratingError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
                <button class="btn" wire:click.prevent='submitFeedback()'>Submit feedback</button>
                <div class="may_later_txt"><a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">May be later</a></div>
                
                </form>


            </div>
            </div>
        </div>
       </div>
    </div>
</div>