@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer..header')
         <div class="manage-listing-saction">
            <div class="manage-listing-saction-inner">
               <div class="manage-listing-header">
                  <h2>Manage Listing</h2>
                  <span>26.06.2022 <em>16:35</em></span> 
               </div>
               <div class="manage-listing-tab-all">
                  <div class="tabs">
                     <nav class="tab-nav">
                        <ul class="mane-tab">
                           <li class="active"><span data-href="#tab-1">Live</span></li>
                           <li><span data-href="#tab-2">Schedule</span></li>
                           <li><span data-href="#tab-3">Draft</span></li>
                           <li><button type="button" class="synchronise_listing_manually">Synchronise Manually</button></li>
                        </ul>
                        <div class="synchronise_listing_manually_res"></div>
                        <div class="seacrh-filter-listing">
                           <div class="input-search">
                              <input type="search" placeholder="Sku, Product name, UPC">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/search.svg') }}" class="search-table" /> 
                           </div>
                           <div class="filter">
                              <button>Filter <img src="{{ asset('themes/tailwind/customer/assets/images/Filter-blue.svg') }}" /></button>
                           </div>
                        </div>
                     </nav>
                     <div class="tab active tab-body" id="tab-1">
                        <div class="tabs">
                           <nav class="tab-nav inner-tow">
                              <ul class="inner-tab">
                                 <li class="active"><span data-href="#sub-tab-1">eBay</span></li>
                                 <li><span data-href="#sub-tab-2">Amazon</span></li>
                              </ul>
                           </nav>
                           <div class="inner-tow-body">
                              <div class="tab active" id="sub-tab-1">
                                 <div class="table-inner-tab">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html">
                                                   <label for="html"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="tabs">
                                                            <nav class="tab-nav showmore-tab">
                                                               <ul class="showmore-ul-tab">
                                                                  <li class="active"><span data-href="#sub-tab-3">Picture</span></li>
                                                                  <li><span data-href="#sub-tab-4">Title</span></li>
                                                                  <li><span data-href="#sub-tab-5">Product Details</span></li>
                                                                  <li><span data-href="#sub-tab-6">Category</span></li>
                                                                  <li><span data-href="#sub-tab-7">Description</span></li>
                                                                  <li><span data-href="#sub-tab-8">Price</span></li>
                                                                  <li><span data-href="#sub-tab-9">Delivery</span></li>
                                                                  <li><span data-href="#sub-tab-10">Details/Setting</span></li>
                                                               </ul>
                                                            </nav>
                                                            <div class="showmore-tab-body">
                                                               <div class="tab active" id="sub-tab-3">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Picture Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                     <div class="show-more-image-upload">
                                                                        <div class="multi-pal-image">
                                                                           <div class="upload__box">
                                                                              <div class="upload__img-wrap"></div>
                                                                              <div class="upload__btn-box">
                                                                                 <label class="upload__btn">
                                                                                    <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                                                    <p>Add Image by<span> Browse</span> or <span>Drag and <br>
                                                                                       Drop</span> to Upload
                                                                                    </p>
                                                                                    <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                                                                 </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-4">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Title Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-5">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Product Details Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-6">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Category Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-7">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Description Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-8">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Price Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-9">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Delivery Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-10">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Details/Settinge</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab" id="sub-tab-2">
                                 <div class="table-inner-tab">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html">
                                                   <label for="html"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="tabs">
                                                            <nav class="tab-nav showmore-tab">
                                                               <ul class="showmore-ul-tab">
                                                                  <li class="active"><span data-href="#sub-tab-3">Picture</span></li>
                                                                  <li><span data-href="#sub-tab-11">Title</span></li>
                                                                  <li><span data-href="#sub-tab-12">Product Details</span></li>
                                                                  <li><span data-href="#sub-tab-13">Category</span></li>
                                                                  <li><span data-href="#sub-tab-14">Description</span></li>
                                                                  <li><span data-href="#sub-tab-15">Price</span></li>
                                                                  <li><span data-href="#sub-tab-16">Delivery</span></li>
                                                                  <li><span data-href="#sub-tab-17">Details/Setting</span></li>
                                                               </ul>
                                                            </nav>
                                                            <div class="showmore-tab-body">
                                                               <div class="tab active" id="sub-tab-11">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Picture Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                     <div class="show-more-image-upload">
                                                                        <div class="multi-pal-image">
                                                                           <div class="upload__box">
                                                                              <div class="upload__img-wrap"></div>
                                                                              <div class="upload__btn-box">
                                                                                 <label class="upload__btn">
                                                                                    <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                                                    <p>Add Image by<span> Browse</span> or <span>Drag and <br>
                                                                                       Drop</span> to Upload
                                                                                    </p>
                                                                                    <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                                                                 </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-12">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Title Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-13">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Product Details Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-14">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Category Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-15">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Description Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-16">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Price Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-17">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Delivery Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-18">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Details/Settinge</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab tab-body" id="tab-2">
                        <div class="tabs">
                           <nav class="tab-nav inner-tow">
                              <ul class="inner-tab">
                                 <li class="active"><span data-href="#sub-tab-18">eBay</span></li>
                                 <li><span data-href="#sub-tab-19">Amazon</span></li>
                              </ul>
                           </nav>
                           <div class="inner-tow-body">
                              <div class="tab active" id="sub-tab-18">
                                 <div class="table-inner-tab">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html">
                                                   <label for="html"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="tabs">
                                                            <nav class="tab-nav showmore-tab">
                                                               <ul class="showmore-ul-tab">
                                                                  <li class="active"><span data-href="#sub-tab-20">Picture</span></li>
                                                                  <li><span data-href="#sub-tab-21">Title</span></li>
                                                                  <li><span data-href="#sub-tab-2">Product Details</span></li>
                                                                  <li><span data-href="#sub-tab-23">Category</span></li>
                                                                  <li><span data-href="#sub-tab-24">Description</span></li>
                                                                  <li><span data-href="#sub-tab-25">Price</span></li>
                                                                  <li><span data-href="#sub-tab-26">Delivery</span></li>
                                                                  <li><span data-href="#sub-tab-27">Details/Setting</span></li>
                                                               </ul>
                                                            </nav>
                                                            <div class="showmore-tab-body">
                                                               <div class="tab active" id="sub-tab-20">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Picture Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                     <div class="show-more-image-upload">
                                                                        <div class="multi-pal-image">
                                                                           <div class="upload__box">
                                                                              <div class="upload__img-wrap"></div>
                                                                              <div class="upload__btn-box">
                                                                                 <label class="upload__btn">
                                                                                    <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                                                    <p>Add Image by<span> Browse</span> or <span>Drag and <br>
                                                                                       Drop</span> to Upload
                                                                                    </p>
                                                                                    <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                                                                 </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-21">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Title Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-22">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Product Details Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-23">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Category Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-24">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Description Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-25">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Price Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-26">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Delivery Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-27">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Details/Settinge</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab" id="sub-tab-19">
                                 <div class="table-inner-tab">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html">
                                                   <label for="html"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="tabs">
                                                            <nav class="tab-nav showmore-tab">
                                                               <ul class="showmore-ul-tab">
                                                                  <li class="active"><span data-href="#sub-tab-28">Picture</span></li>
                                                                  <li><span data-href="#sub-tab-29">Title</span></li>
                                                                  <li><span data-href="#sub-tab-30">Product Details</span></li>
                                                                  <li><span data-href="#sub-tab-31">Category</span></li>
                                                                  <li><span data-href="#sub-tab-32">Description</span></li>
                                                                  <li><span data-href="#sub-tab-33">Price</span></li>
                                                                  <li><span data-href="#sub-tab-34">Delivery</span></li>
                                                                  <li><span data-href="#sub-tab-35">Details/Setting</span></li>
                                                               </ul>
                                                            </nav>
                                                            <div class="showmore-tab-body">
                                                               <div class="tab active" id="sub-tab-28">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Picture Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                     <div class="show-more-image-upload">
                                                                        <div class="multi-pal-image">
                                                                           <div class="upload__box">
                                                                              <div class="upload__img-wrap"></div>
                                                                              <div class="upload__btn-box">
                                                                                 <label class="upload__btn">
                                                                                    <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                                                    <p>Add Image by<span> Browse</span> or <span>Drag and <br>
                                                                                       Drop</span> to Upload
                                                                                    </p>
                                                                                    <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                                                                 </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-29">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Title Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-30">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Product Details Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-31">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Category Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-32">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Description Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-33">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Price Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-34">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Delivery Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-35">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Details/Settinge</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab tab-body" id="tab-3">
                        <div class="tabs">
                           <nav class="tab-nav inner-tow">
                              <ul class="inner-tab">
                                 <li class="active"><span data-href="#sub-tab-36">eBay</span></li>
                                 <li><span data-href="#sub-tab-37">Amazon</span></li>
                              </ul>
                           </nav>
                           <div class="inner-tow-body">
                              <div class="tab active" id="sub-tab-36">
                                 <div class="table-inner-tab">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html">
                                                   <label for="html"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="tabs">
                                                            <nav class="tab-nav showmore-tab">
                                                               <ul class="showmore-ul-tab">
                                                                  <li class="active"><span data-href="#sub-tab-38">Picture</span></li>
                                                                  <li><span data-href="#sub-tab-39">Title</span></li>
                                                                  <li><span data-href="#sub-tab-40">Product Details</span></li>
                                                                  <li><span data-href="#sub-tab-41">Category</span></li>
                                                                  <li><span data-href="#sub-tab-42">Description</span></li>
                                                                  <li><span data-href="#sub-tab-43">Price</span></li>
                                                                  <li><span data-href="#sub-tab-44">Delivery</span></li>
                                                                  <li><span data-href="#sub-tab-45">Details/Setting</span></li>
                                                               </ul>
                                                            </nav>
                                                            <div class="showmore-tab-body">
                                                               <div class="tab active" id="sub-tab-38">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Picture Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                     <div class="show-more-image-upload">
                                                                        <div class="multi-pal-image">
                                                                           <div class="upload__box">
                                                                              <div class="upload__img-wrap"></div>
                                                                              <div class="upload__btn-box">
                                                                                 <label class="upload__btn">
                                                                                    <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                                                    <p>Add Image by<span> Browse</span> or <span>Drag and <br>
                                                                                       Drop</span> to Upload
                                                                                    </p>
                                                                                    <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                                                                 </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-39">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Title Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-40">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Product Details Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-41">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Category Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-42">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Description Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-43">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Price Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-44">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Delivery Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-45">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Details/Settinge</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="tab" id="sub-tab-37">
                                 <div class="table-inner-tab">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html">
                                                   <label for="html"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="tabs">
                                                            <nav class="tab-nav showmore-tab">
                                                               <ul class="showmore-ul-tab">
                                                                  <li class="active"><span data-href="#sub-tab-46">Picture</span></li>
                                                                  <li><span data-href="#sub-tab-47">Title</span></li>
                                                                  <li><span data-href="#sub-tab-48">Product Details</span></li>
                                                                  <li><span data-href="#sub-tab-49">Category</span></li>
                                                                  <li><span data-href="#sub-tab-50">Description</span></li>
                                                                  <li><span data-href="#sub-tab-51">Price</span></li>
                                                                  <li><span data-href="#sub-tab-52">Delivery</span></li>
                                                                  <li><span data-href="#sub-tab-53">Details/Setting</span></li>
                                                               </ul>
                                                            </nav>
                                                            <div class="showmore-tab-body">
                                                               <div class="tab active" id="sub-tab-46">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Picture Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                     <div class="show-more-image-upload">
                                                                        <div class="multi-pal-image">
                                                                           <div class="upload__box">
                                                                              <div class="upload__img-wrap"></div>
                                                                              <div class="upload__btn-box">
                                                                                 <label class="upload__btn">
                                                                                    <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                                                    <p>Add Image by<span> Browse</span> or <span>Drag and <br>
                                                                                       Drop</span> to Upload
                                                                                    </p>
                                                                                    <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                                                                 </label>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-47">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Title Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-48">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Product Details Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-49">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Category Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-50">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Description Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-51">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Price Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-52">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Delivery Here</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="tab" id="sub-tab-53">
                                                                  <div class="show-more-tab-body-box">
                                                                     <div class="title-tabe-show">
                                                                        <h4>Add Details/Settinge</h4>
                                                                        <button class="save-btn-tab-show-more"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save</button>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>
                                                <div class="form-group">
                                                   <input type="checkbox" id="html2">
                                                   <label for="html2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="pordct-tb"><img src="{{ asset('themes/tailwind/customer/assets/images/image-watch.png') }}" /></div>
                                                <p>LEGO 7168 Hero Factory...</p>
                                                <span>SKU: <em>203879740757</em></span> <span>ebay: <em>203879740757</em></span>
                                             </td>
                                             <td>
                                                <h4>Product Info</h4>
                                                <p class="name-product"><em>Name</em> Navy Blue Smart Watch</p>
                                                <span class="fixed-listing">Listing type <em>Fixed</em></span> <span class="price">Price <em>160€</em></span>
                                             </td>
                                             <td>
                                                <h4>Listing Duration</h4>
                                                <span class="date-end">End Date 20.09.22</span>
                                             </td>
                                             <td>
                                                <button class="edite-tble"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></button>
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></button>
                                             </td>
                                          </tr>
                                          <tr class="less-more-box">
                                             <td colspan="5">
                                                <div class="show-more-bx">
                                                   <div class="full-post">
                                                      <div class="hide-block">
                                                         <div class="all-additional">
                                                            <div class="title-additional">Additional details</div>
                                                            <div class="table-additional">
                                                               <table>
                                                                  <tbody>
                                                                     <tr>
                                                                        <th>Return Policy</th>
                                                                        <th>Finishing details</th>
                                                                        <th>Shipping details</th>
                                                                     </tr>
                                                                     <tr>
                                                                        <td>
                                                                           <p>Allow return of items purchased domestically.</p>
                                                                           <p>Bears the shipping costs for the return <span>Buyer</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Payment methods <span>eBay</span></p>
                                                                           <p>Processing Time <span>1 Workday</span></p>
                                                                           <p>Item Location <span>Germany, 67067 Ludwigshafen</span></p>
                                                                        </td>
                                                                        <td>
                                                                           <p>Deutsche Post letter large (recommended) <span>eBay</span></p>
                                                                           <p>Condition <a href="#">Brand New</a></p>
                                                                           <p>Shipping cost <span>160€</span></p>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="buton-edite-table">
                                                         <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit-wight.svg') }}" /> Edit</button>
                                                      </div>
                                                      <div class='dedcription-btn pop recrut act show-more' cat-posts='10' data-id='cat-01'> <span class='name-description '>Show More</span> </div>
                                                      <div class='dedcription-btn pop recrut act show-less '> <span class='name-description'>Show Less</span> </div>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="paginaction-row-manage-listing">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="paginaction-row-left">
                                 <p>Showing Result 16 out of 1000</p>
                              </div>
                           </div>
                           <div class="col-md-6">
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
   </div>
</div>
</div>
@endsection