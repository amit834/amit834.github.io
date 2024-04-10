<div class="side-baar">
   <div class="logo">
      <a href="{{ url('customer/dashboard') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/logo.svg') }}" alt="LOGO" /></a>
   </div>
   <ul>
      <li class="active"><a href="{{ url('customer/dashboard') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-blue.svg') }}" class="blue-icon" /> Dashboard</a></li>
      <div class="sidebar-menu">
         <ul>
            <li class="sidebar-dropdown">
               <a href="#"><span>Salesmanger</span></a>
               <div class="sidebar-submenu">
                  <ul>
                     <li><a href="{{ url('customer/sale-overview') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Sale Overview</a></li>
                     <li><a href="{{ url('customer/product-listing') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Product Listing</a></li>
                     <li><a href="{{ url('customer/products') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> All Products</a></li>
                     <li><a href="{{ url('customer/product-images') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Product Images</a></li>
                     <li><a href="{{ url('customer/product-data') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Product Data</a></li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
      <div class="sidebar-menu">
         <ul>
            <li class="sidebar-dropdown">
               <a href="#"><span>Ebay</span></a>
               <div class="sidebar-submenu">
                  <ul>
                     <li><a href="{{ url('customer/manage-listing') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Manage Listing</a></li>
                     <li><a href="{{ url('customer/manage-rules') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Manage Rules</a></li>
                     <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Templates</a></li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
      <div class="sidebar-menu">
         <ul>
            <li class="sidebar-dropdown">
               <a href="#"><span>User</span></a>
               <div class="sidebar-submenu">
                  <ul>
                     <li><a href="{{ url('customer/my-account') }}"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-3-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-3-blue.svg') }}" class="blue-icon" /> Account</a></li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
      <div class="sidebar-menu">
         <ul>
            <li class="sidebar-dropdown">
               <a href="#"><span>Administration</span></a>
               <div class="sidebar-submenu">
                  <ul>
                     <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-gray.svg') }}" class="gray-icon" /> <img src="{{ asset('themes/tailwind/customer/assets/images/icon-2-blue.svg') }}" class="blue-icon" /> Logs</a></li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
      <li class="logout">
         <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
      </li>
   </ul>
   <div class="need-help-box">
      <div class="need-help-box-inner">
         <img src="{{ asset('themes/tailwind/customer/assets/images/help.svg') }}" />
         <h4>Need Help</h4>
         <p>Please check out docs</p>
         <button class="cocumentation">Documentation</button>
         <img src="{{ asset('themes/tailwind/customer/assets/images/image-traced.svg') }}" class="image-traced" />
      </div>
   </div>
   <div class="remove-toggale-butn">
      <button class="button-remove"><img src="{{ asset('themes/tailwind/customer/assets/images/close.png') }}" /></button>
   </div>
</div>