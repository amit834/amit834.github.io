<div id="header" class="header-nav-baar">
   <div class="logo-mobile">
      <a href="{{ url('customer/dashboard') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/logo.svg') }}" alt="LOGO" /></a>
   </div>
   <div class="serch-bar-box">
      <form class="from-serch">
         <input type="text" placeholder="Search" name="q">
         <button type="submit" class="serch-button"><img src="{{ asset('themes/tailwind/customer/assets/images/search.svg') }}" /></button>
      </form>
   </div>
   <div class="right-header">
      <ul>
         <li>
            <a href="{{ url('customer/my-account') }}">
               <div class="profile-imge"><img src="{{ asset('storage/'.Auth::user()->avatar) }}" /></div>
            </a>
         </li>
         <li>
            <ul class="notification-drop">
               <li class="item">
                  <span class="btn__badge pulse-button ">
                     <div class="notifaction-imge"><img src="{{ asset('themes/tailwind/customer/assets/images/notification.svg') }}" /></div>
                  </span>
                  <ul>
                     <li>
                        <a href="#">
                           <div class="notifaction-image"><img src="{{ asset('themes/tailwind/customer/assets/images/profile.png') }}" /></div>
                           <div class="notifaction-text"><span>John Doe reacted to your post</span> <em>10 mins ago</em></div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="notifaction-image"><img src="{{ asset('themes/tailwind/customer/assets/images/profile.png') }}" /></div>
                           <div class="notifaction-text"><span>John Doe reacted to your post</span> <em>10 mins ago</em></div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="notifaction-image"><img src="{{ asset('themes/tailwind/customer/assets/images/profile.png') }}" /></div>
                           <div class="notifaction-text"><span>John Doe reacted to your post</span> <em>10 mins ago</em></div>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <div class="notifaction-image"><img src="{{ asset('themes/tailwind/customer/assets/images/profile.png') }}" /></div>
                           <div class="notifaction-text"><span>John Doe reacted to your post</span> <em>10 mins ago</em></div>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </li>
      </ul>
   </div>
   <div class="toggale-butn">
      <button class="button-click"><img src="{{ asset('themes/tailwind/customer/assets/images/menu.png') }}" /></button>
   </div>
</div>