@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="add-new-prodcut-saction">
            <div class="add-new-prodcut-ineer">
               <div class="products-all-title">
                  <div class="left-productspage">
                     <h2>Add New Product</h2>
                     <p>{{ now()->format('Y-m-d') }}<span>{{ now()->format('H:i') }}</span></p>
                  </div>
                  @if (Session::has('success')) 
                     <div class="notifaction-green">
                        <p>{{ Session::get('success') }}</p>
                     </div>
                  @endif 
                  @if (Session::has('unsuccess')) 
                     <div class="notifaction-red">
                        <p> {{ Session::get('unsuccess') }}</p>
                     </div>
                  @endif  
                  <div class="right-productspage">
                     <button class="filter-btn">Save and Continue</button>
                  </div>
               </div>
               <form action="{{ route('customer.submit.product') }}" method="POST" enctype="multipart/form-data" id="submit_product">
                @csrf
                  <div class="add-new-prodcut-ineer-one">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="add-new-prodcut-ineer-one-left">
                              <div class="dropdown-row">
                                 <input type="text" name="product_name" value="" placeholder="Product Name..." required />
                              </div>
                              <div class="dropdown-row">
                                 <div class="select">
                                    <select name="brand_name" required>
                                       <option value="">Please Select Brands</option>
                                       <option value="Brand 1">Brand 1</option>
                                       <option value="Brand 2">Brand 2</option>
                                       <option value="Brand 3">Brand 3</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="dropdown-row">
                                 <div class="select">
                                    <select name="upc_name" required>
                                       <option value="">Please Select UPC</option>
                                       <option value="UPC 1">UPC 1</option>
                                       <option value="UPC 2">UPC 2</option>
                                       <option value="UPC 3">UPC 3</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="dropdown-row">
                                 <div class="select">
                                    <select name="listing_id" required>
                                       <option value="">Please Select Listing</option>
                                       @foreach($all_listing as $listing)
                                          <option value="{{ $listing['listing_id']; }}">{{ $listing['listing_id']; }}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="add-new-prodcut-ineer-one-right">
                              <div class="multi-pal-image">
                                 <div class="upload__box">
                                    <div class="upload__btn-box">
                                       <label class="upload__btn">
                                          <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                          <p>Add Image by<span> Browse</span> or  <span>Drag and <br>Drop</span> to Upload</p>
                                          <input type="file" name="images" multiple data-max_length="20" class="upload__inputfile">
                                       </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="add-product-description">
                        <h4>Description</h4>
                        <div class="right-add-from-save">
                           <button class="add-media"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Add Media</button>
                           <button class="add-form"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Add Form</button>
                           <button type="submit" class="save-form"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                        </div>
                        <textarea placeholder="Type Here..." name="description" required></textarea>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection