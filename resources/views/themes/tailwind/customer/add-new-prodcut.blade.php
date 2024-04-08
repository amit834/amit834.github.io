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
                     <h2>Add New Prodcut</h2>
                     <p>26.06.2022 <span>16:35</span></p>
                  </div>
                  <div class="right-productspage">
                     <button class="filter-btn">Save and Continue</button>
                  </div>
               </div>
               <div class="add-new-prodcut-ineer-one">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="add-new-prodcut-ineer-one-left">
                           <div class="dropdown-row">
                              <input type="text" placeholder="Product name..." />
                           </div>
                           <div class="dropdown-row">
                              <div class="select">
                                 <div class="selectBtn" data-type="firstOption">Brand</div>
                                 <div class="selectDropdown">
                                    <div class="option" data-type="secondOption">Brand 1</div>
                                    <div class="option" data-type="thirdOption">Brand 2</div>
                                    <div class="option" data-type="secondOption2">Brand 3</div>
                                    <div class="option" data-type="thirdOption3">Brand 4</div>
                                 </div>
                              </div>
                           </div>
                           <div class="dropdown-row">
                              <div class="select">
                                 <div class="selectBtn" data-type="firstOption">UPC</div>
                                 <div class="selectDropdown">
                                    <div class="option" data-type="secondOption">UPC 1</div>
                                    <div class="option" data-type="thirdOption">UPC 2</div>
                                    <div class="option" data-type="secondOption2">UPC 3</div>
                                    <div class="option" data-type="thirdOption3">UPC 4</div>
                                 </div>
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
                                       <input type="file" multiple data-max_length="20" class="upload__inputfile">
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
                        <button class="save-form"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                     </div>
                     <textarea placeholder="Type here..."></textarea>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection