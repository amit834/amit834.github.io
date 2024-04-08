@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="manage-listing-saction">
            <div class="manage-listing-saction-inner">
               <div class="manage-listing-header">
                  <div class="row">
                     <div class="col-md-6">
                        <h2>Product Data</h2>
                        <span>26.06.2022 <em>16:35</em></span> 
                     </div>
                     <div class="col-md-6">
                        <div class="product-image-boxx-all-one-right">
                           <button class="download-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/Download.svg') }}" /> Download</button>
                           <button class="remove-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /> Remove</button>
                           <button class="use-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="product-date-tab-row">
                  <div class="product-data-tabe-inner">
                     <div class="tabs">
                        <nav class="tab-nav">
                           <ul class="mane-tab">
                              <li class="active"><span data-href="#tab-1">General</span></li>
                              <li><span data-href="#tab-2">Inventory</span></li>
                              <li><span data-href="#tab-3">Average Sales price</span></li>
                              <li><span data-href="#tab-4">Average sales number</span></li>
                              <li><span data-href="#tab-5">Profit</span></li>
                           </ul>
                        </nav>
                        <div class="product-tab-inner-body">
                           <div class="tab active tab-body" id="tab-1">
                              <div class="tabs">
                                 <div class="product-inner-content">
                                    <h3>Navy Blue Smart Watch</h3>
                                    <p><span>SKU</span> 203879740757</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab tab-body" id="tab-2">
                              <div class="tabs">
                                 <div class="product-inner-content">
                                    <h3>Navy Blue Smart Watch</h3>
                                    <p><span>SKU</span> 203879740757</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab tab-body" id="tab-3">
                              <div class="tabs">
                                 <div class="product-inner-content">
                                    <h3>Navy Blue Smart Watch</h3>
                                    <p><span>SKU</span> 203879740757</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab tab-body" id="tab-4">
                              <div class="tabs">
                                 <div class="product-inner-content">
                                    <h3>Navy Blue Smart Watch</h3>
                                    <p><span>SKU</span> 203879740757</p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab tab-body" id="tab-5">
                              <div class="tabs">
                                 <div class="product-inner-content">
                                    <h3>Navy Blue Smart Watch</h3>
                                    <p><span>SKU</span> 203879740757</p>
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
</div>
</div>
@endsection