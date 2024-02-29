<div class="psha">
<style>
              .recvMsgs.d-flex .cntnt {
              background: #f5f5f5;
              font-size: 14px;
              line-height: 18px;
              padding: 5px 15px 5px 10px;
              border-radius: 0 10px 10px 10px;
              text-align: left;
              min-width: 182px;
              max-width: 100%;
              position: relative;
              margin-left: 5px;
              }
              .recvMsgs.d-flex .cntnt .time {
              font-size: 10px;
              display: block;
              margin-top: 3px;
              text-align: right;
              }
              .tail {
              width: 0;
              height: 0;
              border-top: 5px solid transparent;
              border-bottom: 5px solid transparent;
              border-right: 10px solid whitesmoke;
              position: absolute;
              left: -10px;
              top: 1px;
              z-index: 0;
              }
              .chat-mss.sentMsgs {
              /* background: #ddd; */
              display: flex;
              justify-content: flex-end;
              }
              .chat-mss.sentMsgs .recvMsgs.sentmsgbey{flex-direction: row-reverse;}
              .chat-mss.sentMsgs .recvMsgs .cntnt {
              text-align: right;
              margin-left: 0px;
              margin-right: 5px;
              padding: 5px 15px 5px 10px;
              border-radius: 10px 0px 10px 10px;
              background: #008ec6;
              color: #fff;
              }
              .chat-mss.sentMsgs .recvMsgs .cntnt .tail {
              right: -10px;
              transform: rotate(180deg);
              left: initial;
              border-right-color: #0090c7;
              }
              .chat-mss.sentMsgs .recvMsgs.sentmsgbey.d-flex .cntnt.sentMsgs .time{
              text-align: left;
              }
            </style>
  <div class="chat_sect_bx">
    <div class="chat_sect_left">
      <div class="chat_destop_view">        
        <div class="chat_user_list_tab position-relative">
          <div class="chat_nav">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="All-Chats" role="tabpanel" aria-labelledby="All-Chats-tab">
                <div class="scroll_mbl_view">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                  
                    @forelse ($chatUsers as $chatUser)
                      <li class="nav-item">
                      <button wire:click = "openUser('{{$chatUser->id}}', '{{$chatUser->name}}')" class="nav-link" type="button">
                        <div class="user_prof">
                          <div class="icon_img">
                            R
                          </div>
                          <div class="cont_uerr">
                            <h3><span>{{$chatUser->name}}</span>
                            </h3>
                          </div>
                        </div>
                      </button>
                    </li>
                    @empty
                      <li class="nav-item" role="presentation">
                      <button class="nav-link" type="button" role="tab" aria-controls="user2" aria-selected="false" tabindex="-1">
                        <div class="user_prof">
                          <div class="icon_img">
                            
                          </div>
                          <div class="cont_uerr">
                            <h3><span>No Appointments are booked yet</span>
                            </h3>
                          </div>
                        </div>
                      </button>
                    </li>
                    @endforelse
                    
                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="chat_sect_right">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="user1" role="tabpanel" aria-labelledby="user1-tab">
          
        @php
          $decryptClass = \App\CustomStuffs\EncryptionClass::class;
          $decryptionObj = new $decryptClass;
        @endphp

         <div class="chat_msg_cont">
          <div>
            <div class="chat_prof_head">
              <div class="gp-list-name">
                <div class="user-avatar">
                  <img src="{{asset('assets/images/user_chat.png')}}">
                </div>
                <div class="user-info">
                  <h3>@if ($senderName)
                    {{$senderName}}
                    @else
                    <span style="opacity:0.5; font-size:16px">Please select a Person</span>
                  @endif</h3>
                  <p>Care Seeker</p>
                </div>
              </div>
            </div>
            
            <div wire:poll wire:loading.class="bg-gray">
              <div class="chat-body">
                <div class="chat-inner">
                  <div id="chat">
                    @forelse ($messages as $message)
                    @if ($message->user->name == auth()->user()->name)
                    <div class="chat-mss sentMsgs">
                      <ul>
                        <li>
                          <div class="recvMsgs sentmsgbey d-flex">
                            <div class="cntnt sentMsgs">
                              <span class="tail"></span>
                              <div class="msgcntnt">{{ $decryptionObj->decryptString($message->message) }}</div>
                              <div class="time text-left" style="text-align: left;">{{ $message->created_at->diffForHumans(null, false, false) }}</div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    @else
                    <div class="chat-mss" id="-MhYBs-pe99TWI1cC9Ig">
                      <ul>
                        <li>
                          <div class="recvMsgs d-flex">
                            <div class="picusr">
                              <img src="{{asset('assets/images/user_chat.png')}}" alt="">
                            </div>
                            <div class="cntnt">
                              <span class="tail"></span>
                              <div class="msgcntnt">{{ $decryptionObj->decryptString($message->message) }}</div>
                              <div class="time">{{ $message->created_at->diffForHumans(null, false, false) }}</div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    @endif
                    @empty
                    @if ($activeChatUser)
                    <h5 style="text-align: center; margin-top:55px">No Message Available</h5>
                    @else
                    <h5 style="text-align: center; font-size:14px; opacity:.5;margin-top:105px">Please select a Person to chat with</h5>
                    @endif
                    @endforelse
                  </div>
                </div>
              </div>
            </div>
            @if ($activeChatUser)       
            <div class="chat_footer">
              <div class="chat-foot" id="chat_footer_box">
                <div class="att_plane">
                  <!-- <label for="BannerUpload" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="20" viewBox="0 0 14 20" fill="none">
                      <path d="M1.82865 10.4857L7.48551 4.82888C8.65708 3.6573 10.5566 3.6573 11.7281 4.82888C12.8997 6.00045 12.8997 7.89994 11.7281 9.07152L5.01063 15.789C4.42485 16.3748 3.4751 16.3748 2.88931 15.789C2.30352 15.2032 2.30352 14.2535 2.88931 13.6677L8.89972 7.6573C9.09498 7.46204 9.09498 7.14546 8.89972 6.9502C8.70446 6.75493 8.38787 6.75493 8.19261 6.9502L2.1822 12.9606C1.20589 13.9369 1.20589 15.5198 2.1822 16.4961C3.15852 17.4724 4.74143 17.4724 5.71774 16.4961L12.4353 9.77862C13.9974 8.21653 13.9974 5.68387 12.4353 4.12177C10.8732 2.55967 8.3405 2.55967 6.7784 4.12177L1.12154 9.77862C0.926282 9.97388 0.926282 10.2905 1.12154 10.4857C1.31681 10.681 1.63339 10.681 1.82865 10.4857Z" fill="#212121"></path>
                    </svg>
                    <input type="file" id="BannerUpload">
                    </label> -->
                </div>
                <div class="chat-box">
                  <form name="chatform" onkeydown="scrollDown()" id="send-message" wire:submit.prevent="sendMessage">
                    <input type="text" required placeholder="Write a message..." onkeydown='scrollDown()' wire:model.defer="message"  class="msg_int_style" id="message" style="height: 32px;" />
                    <button type="submit">
                      <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                        <g clip-path="url(#clip0_688_13983)">
                          <path d="M29.3909 16.9708C29.3906 16.828 29.3495 16.6883 29.2724 16.568C29.1954 16.4477 29.0856 16.352 28.956 16.292L13.0461 8.86737C12.9074 8.80491 12.7529 8.78616 12.6032 8.81359C12.4535 8.84103 12.3156 8.91336 12.208 9.02097C12.1004 9.12859 12.0281 9.2664 12.0006 9.4161C11.9732 9.56579 11.992 9.7203 12.0544 9.85908L14.7909 16.2336L21.5261 16.223L21.5261 17.7186L14.7697 17.7186L12.0385 24.0984C11.9791 24.2364 11.9626 24.389 11.9909 24.5366C12.0193 24.6841 12.0913 24.8196 12.1976 24.9258C12.307 25.0307 12.4456 25.1001 12.5952 25.1247C12.7448 25.1493 12.8983 25.128 13.0355 25.0636L28.9454 17.639C29.0754 17.5813 29.1863 17.4879 29.2651 17.3696C29.344 17.2513 29.3876 17.113 29.3909 16.9708Z" fill="black"></path>
                        </g>
                        <defs>
                          <clipPath id="clip0_688_13983">
                            <rect width="24" height="24" fill="white" transform="translate(16.9707) rotate(45)"></rect>
                          </clipPath>
                        </defs>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
        </div>        
      </div>
    </div>
  </div>
</div>