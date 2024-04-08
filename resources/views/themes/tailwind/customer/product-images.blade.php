@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="manage-listing-saction">
            <div class="manage-listing-saction-inner">
               <div class="manage-listing-header">
                  <h2>Product Images</h2>
                  <span>26.06.2022 <em>16:35</em></span> 
               </div>
               <div class="product-image-boxx-all-one">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="product-image-boxx-all-one-left">
                           <div class="input-search">
                              <input type="search" placeholder="Sku, Product name, UPC">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/search.svg') }}" class="search-table" /> 
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="product-image-boxx-all-one-right">
                           <button class="download-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/Download.svg') }}" /> Download</button>
                           <button class="remove-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /> Remove</button>
                           <button class="use-btn">Use Image</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="product-image-paginaction-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="product-image-paginaction-left">
                           <p>Showing Result <span> 16 </span> of 1000</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="product-image-paginaction-right">
                           <div class="select">
                              <select name="format" id="format">
                                 <option selected="" disabled="">All</option>
                                 <option value="pdf">1</option>
                                 <option value="txt">2</option>
                                 <option value="epub">3</option>
                                 <option value="fb2">4</option>
                                 <option value="mobi">5</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="product-image-all-box">
                  <div class="row">
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html">
                                 <label for="html"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html2">
                                 <label for="html2"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html3">
                                 <label for="html3"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html4">
                                 <label for="html4"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html5">
                                 <label for="html5"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html6">
                                 <label for="html6"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html7">
                                 <label for="html7"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html8">
                                 <label for="html8"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html9">
                                 <label for="html9"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html10">
                                 <label for="html10"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html11">
                                 <label for="html11"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="col-md-3">
                        <a href="#">
                           <div class="product-image-inner-box">
                              <div class="image-pro-box"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-demo.jpg') }}" /> </div>
                              <div class="porduct-content">
                                 <h3>File: Name</h3>
                                 <span>Sku: #1324689471</span> 
                              </div>
                              <div class="product-check">
                                 <input type="checkbox" id="html12">
                                 <label for="html12"></label>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="product-image-paginaction-bottom">
                     <div class="paginaction-row-right">
                        <ul>
                           <li><a href="#" class="pagi-tabe pagi-tabe-pre"><img src="{{ asset('themes/tailwind/customer/assets/images/previous.svg') }}" /> Previous</a></li>
                           <li><a href="#" class="active">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#" class="pagi-tabe pagi-tabe-next">Next <img src="{{ asset('themes/tailwind/customer/assets/images/next.svg') }}" /></a></li>
                        </ul>
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