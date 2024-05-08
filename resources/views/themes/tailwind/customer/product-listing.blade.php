@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer..header')
         <div class="product-listing-saction">
            <div class="product-listing-saction-inner">
               <form id="msform">
                  <div class="row">
                     <div class="col-md-8">
                        <fieldset>
                           <div class="tab-product-box-inner">
                              <h2>Product Listing</h2>
                              <span>26.06.2022 <em>16:35</em></span>
                              <div class="choose-countery-box">
                                 <h4>Select channel & Product</h4>
                                 <div class="dropdown-wrapper">
                                    <div class="icon-wrapper">
                                       <div class="box-drop-countery"><span>Country or location</span><i class="toggle fa fa-chevron-down"></i></div>
                                       <div class="dropdown-content">
                                          <ul>
                                             <li>
                                                <input type="radio" name="test" id="2">
                                                <label for="2"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/germany.svg') }}" /> Germany</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="3">
                                                <label for="3"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/america.svg') }}" /> America</strong></label>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="choose-countery-box-tow">
                                 <div class="dropdown-wrapper-two">
                                    <div class="icon-wrapper">
                                       <div class="box-drop-countery-tow"><span>Choose Channel</span><i class="toggle2 fa fa-chevron-down"></i></div>
                                       <div class="dropdown-content">
                                          <ul>
                                             <li>
                                                <input type="radio" name="test" id="4">
                                                <label for="4"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> eBay</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="5">
                                                <label for="5"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/ammazon.svg') }}" /> Amazon</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="6">
                                                <label for="6"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/google.svg') }}" /> Google</strong></label>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="sku-input">
                                 <input type="text" placeholder="Sku, Product name, UPC" />
                              </div>
                              <div class="darft-product-box">
                                 <h3 class="drafts-text">Drafts:</h3>
                                 <a href="#" class="view-all">View All</a>
                                 <div class="product-darft">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="product-darft-inner">
                                             <div class="product-image"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-1.png') }}" /> </div>
                                             <P>adidas Tiro 21 Men's Athletic Training Pants</P>
                                             <span>Clr: <em>Black</em>,</span><span> Size: <em>M</em></span>
                                             <div class="delet-edit">
                                                <div class="left-btn-del">
                                                   <button>Delete</button>
                                                </div>
                                                <div class="right-btn-edit">
                                                   <button>Edit</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="product-darft-inner">
                                             <div class="product-image"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-2.png') }}" /> </div>
                                             <P>adidas Tiro 21 Men's Athletic Training Pants</P>
                                             <span>Clr: <em>Black</em>,</span><span> Size: <em>M</em></span>
                                             <div class="delet-edit">
                                                <div class="left-btn-del">
                                                   <button>Delete</button>
                                                </div>
                                                <div class="right-btn-edit">
                                                   <button>Edit</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="product-darft-inner">
                                             <div class="product-image"> <img src="{{ asset('themes/tailwind/customer/assets/images/product-3.png') }}" /> </div>
                                             <P>adidas Tiro 21 Men's Athletic Training Pants</P>
                                             <span>Clr: <em>Black</em>,</span><span> Size: <em>M</em></span>
                                             <div class="delet-edit">
                                                <div class="left-btn-del">
                                                   <button>Delet</button>
                                                </div>
                                                <div class="right-btn-edit">
                                                   <button>Edit</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <input type="button" name="next" class="next action-button" value="Get Started" />
                           <a href="{{ url('customer/add-new-product') }}" class="create-new">Create New Product</a>
                        </fieldset>
                        <fieldset>
                           <div class="tab-product-box-inner">
                              <h2>Product Description</h2>
                              <span>26.06.2022 <em>16:35</em></span>
                              <div class="Catgory-drop-down-all">
                                 <div class="Catgory-drop-down-box">
                                    <div class="cetagoury-box-iiner">
                                       <div class="select">
                                          <div class="selectBtn" data-type="firstOption">Catgory</div>
                                          <div class="selectDropdown">
                                             <div class="option" data-type="firstOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="secondOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="thirdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="fourdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="fivedOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="sixdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="savendOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="cetagoery-tag">
                                       <h3>Product details</h3>
                                    </div>
                                    <div class="cetagoury-box-iiner">
                                       <div class="select">
                                          <div class="selectBtn" data-type="firstOption">Product Name</div>
                                          <div class="selectDropdown">
                                             <div class="option" data-type="firstOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="secondOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="thirdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="fourdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="fivedOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="sixdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="savendOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="cetagoery-tag">
                                       <h3>Condition</h3>
                                    </div>
                                    <div class="radieo-check-btn">
                                       <p class="one-radieo">
                                          <input type="radio" id="test1" name="radio-group" checked>
                                          <label for="test1">New</label>
                                       </p>
                                       <p class="one-radieo">
                                          <input type="radio" id="test2" name="radio-group">
                                          <label for="test2">Used</label>
                                       </p>
                                    </div>
                                    <div class="cetagoury-box-iiner">
                                       <div class="select">
                                          <div class="selectBtn" data-type="firstOption">Brand New</div>
                                          <div class="selectDropdown">
                                             <div class="option" data-type="firstOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="secondOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="thirdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="fourdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="fivedOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="sixdOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                             <div class="option" data-type="savendOption"><span>1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="additional-details-saction">
                                    <h2>Additional Details <span> (Optional)</span></h2>
                                    <button class="add-new-data"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Add New data.</button>
                                 </div>
                                 <div class="add-image-box">
                                    <h5>Images</h5>
                                    <div class="multi-pal-image">
                                       <div class="upload__box">
                                          <div class="upload__img-wrap"></div>
                                          <div class="upload__btn-box">
                                             <label class="upload__btn">
                                                <img src="{{ asset('themes/tailwind/customer/assets/images/image-icon-upload.svg') }}" />
                                                <p><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Add Image</p>
                                                <input type="file" multiple data-max_length="20" class="upload__inputfile">
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="Description-box">
                                    <h3>Description</h3>
                                    <div class="pergraph-hader">
                                       <button class="add-media-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Add Media</button>
                                       <button class="add-form-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Add Form</button>
                                       <button class="save-btn"><img src="{{ asset('themes/tailwind/customer/assets/images/save-image.svg') }}" /> Save </button>
                                    </div>
                                    <div class="description-inner">
                                       <div class="row">
                                          <div id="app">
                                             <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <input type="button" name="next" class="next action-button width-btn" value="Save & Continue" />
                        </fieldset>
                        <fieldset>
                           <div class="tab-product-box-inner">
                              <h2>Listing details</h2>
                              <span>26.06.2022 <em>16:35</em></span>
                              <div class="choose-countery-box">
                                 <div class="dropdown-wrapper-three">
                                    <div class="icon-wrapper">
                                       <div class="box-drop-countery-three"><span>Rules</span><i class="fa fa-chevron-down"></i></div>
                                       <div class="dropdown-content rool-drop">
                                          <ul>
                                             <li>
                                                <input type="radio" name="test" id="9">
                                                <label for="9"><strong class="rool-text">1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="10">
                                                <label for="10"><strong class="rool-text">1.2 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</strong></label>
                                             </li>
                                          </ul>
                                          <div class="rual-dos-not">
                                             <p>If these rules doesn’t meet you then</p>
                                             <a href="#" class="custom-rol"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Custom Rules</a> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="price-satrt-input">
                                    <input type="text" placeholder="Price/Start Price" />
                                    <span class="euro">/€</span> 
                                 </div>
                                 <div class="radieo-check-btn listing-type-btn">
                                    <h3>Listing Type</h3>
                                    <p class="one-radieo">
                                       <input type="radio" id="test3" name="radio-group" checked="">
                                       <label for="test3">Fixed Price</label>
                                    </p>
                                    <p class="one-radieo">
                                       <input type="radio" id="test4" name="radio-group">
                                       <label for="test4">Auction</label>
                                    </p>
                                 </div>
                                 <div class="dropdown-wrapper-four">
                                    <div class="icon-wrapper">
                                       <div class="box-drop-countery-four"><span>Listing Duration</span><i class="fa fa-chevron-down"></i></div>
                                       <div class="dropdown-content rool-drop">
                                          <ul>
                                             <li>
                                                <input type="radio" name="test" id="11">
                                                <label for="11"><strong class="rool-text">1.1 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="12">
                                                <label for="12"><strong class="rool-text">1.2 dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</strong></label>
                                             </li>
                                          </ul>
                                          <div class="rual-dos-not">
                                             <p>If these rules doesn’t meet you then</p>
                                             <a href="#" class="custom-rol"><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Custom Rules</a> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="advanced-options-row">
                                    <h3>Advanced Options</h3>
                                    <div class="price-satrt-input">
                                       <input type="text" placeholder="Buy Now Price" />
                                       <span class="euro">/€</span> <a href="#" class="advanced-info"><img src="{{ asset('themes/tailwind/customer/assets/images/info-circle.svg') }}" /></a> 
                                    </div>
                                    <div class="price-satrt-input">
                                       <input type="text" placeholder="Reserve Price" />
                                       <span class="euro">/€</span> <a href="#" class="advanced-info"><img src="{{ asset('themes/tailwind/customer/assets/images/info-circle.svg') }}" /></a> 
                                    </div>
                                    <div class="price-satrt-input">
                                       <input type="text" placeholder="Image Galley URL" />
                                       <span class="euro">/€</span>
                                       <p class="gallery-info"># If you want to add a custom image galley, you can do it by Enter the Gallery URL.</p>
                                    </div>
                                 </div>
                                 <div class="radieo-check-btn listing-type-btn">
                                    <h3>Best Offer</h3>
                                    <p class="one-radieo">
                                       <input type="radio" id="test5" name="radio-group" checked="">
                                       <label for="test5">Yes</label>
                                    </p>
                                    <p class="one-radieo">
                                       <input type="radio" id="test6" name="radio-group">
                                       <label for="test6">No</label>
                                    </p>
                                 </div>
                                 <div class="advanced-options-row advanced-options-row-tow">
                                    <div class="price-satrt-input">
                                       <input type="text" placeholder="auto accept price" />
                                       <span class="euro">/€</span> <a href="#" class="advanced-info"><img src="{{ asset('themes/tailwind/customer/assets/images/info-circle.svg') }}" /></a> 
                                    </div>
                                    <div class="price-satrt-input">
                                       <input type="text" placeholder="Minimum price" />
                                       <span class="euro">/€</span> <a href="#" class="advanced-info"><img src="{{ asset('themes/tailwind/customer/assets/images/info-circle.svg') }}" /></a> 
                                    </div>
                                    <div class="text-area-payment">
                                       <textarea placeholder="Payment Instructions "></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <input type="button" name="next" class="next action-button width-btn" value="Save & Continue" />
                        </fieldset>
                        <fieldset>
                           <div class="tab-product-box-inner">
                              <h2>Shipping details</h2>
                              <span>26.06.2022 <em>16:35</em></span>
                              <div class="shipping-details-all">
                                 <div class="shipping-details-all-inner">
                                    <div class="shipping-details-all-title">
                                       <h3>Domestic shipping</h3>
                                       <div class="off-on-radio">
                                          <input type="checkbox" value="1" class="switch">
                                       </div>
                                    </div>
                                    <div class="shipping-details-all-inner-text">
                                       <h4>Deutsche Post letter large (recommended)</h4>
                                       <ul>
                                          <li>1-2 Werktage</li>
                                          <li>Max 500g</li>
                                          <li>Max 35,3 x 25 x 2 cm</li>
                                          <li>Ohne Sendungsverfolgung</li>
                                          <li>Keine Haftung</li>
                                       </ul>
                                       <div class="chnage-button">
                                          <button>Change</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="shipping-details-all-inner">
                                    <div class="shipping-details-all-inner-text">
                                       <h4>Shipping cost</h4>
                                       <ul>
                                          <li>Buyer have to pay <span>160€</span></li>
                                          <li>Determined by seller</li>
                                       </ul>
                                       <div class="chnage-button">
                                          <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit.svg') }}" /> Edite</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="shipping-details-all-inner">
                                    <div class="shipping-details-all-title">
                                       <h3>International shipping</h3>
                                       <div class="off-on-radio">
                                          <input type="checkbox" value="1" class="switch">
                                       </div>
                                    </div>
                                    <div class="shipping-details-all-inner-text">
                                       <h4>Deutsche Post letter large (recommended)</h4>
                                       <ul>
                                          <li>1-2 Werktage</li>
                                          <li>Max 500g</li>
                                          <li>Max 35,3 x 25 x 2 cm</li>
                                          <li>Ohne Sendungsverfolgung</li>
                                          <li>Keine Haftung</li>
                                       </ul>
                                       <div class="chnage-button">
                                          <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit.svg') }}" /> Edite</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="shipping-details-all-inner">
                                    <div class="shipping-details-all-title">
                                       <h3>Collection</h3>
                                       <div class="off-on-radio">
                                          <input type="checkbox" value="1" class="switch">
                                       </div>
                                       <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                    </div>
                                 </div>
                                 <div class="shipping-location">
                                    <h3>Shipping Location</h3>
                                    <div class="exclude">
                                       <button><img src="{{ asset('themes/tailwind/customer/assets/images/add-new.svg') }}" /> Exclude</button>
                                    </div>
                                    <textarea placeholder="Payment Instructions "></textarea>
                                 </div>
                              </div>
                           </div>
                           <input type="button" name="next" class="next action-button width-btn" value="Continue" />
                        </fieldset>
                        <fieldset>
                           <div class="tab-product-box-inner">
                              <h2>Finishing details</h2>
                              <span>26.06.2022 <em>16:35</em></span>
                              <div class="choose-countery-box">
                                 <h4>Payment methods</h4>
                                 <div class="dropdown-wrapper-five">
                                    <div class="icon-wrapper">
                                       <div class="box-drop-countery-five"><span>eBay</span><i class="toggle fa fa-chevron-down"></i></div>
                                       <div class="dropdown-content">
                                          <ul>
                                             <li>
                                                <input type="radio" name="test" id="13">
                                                <label for="13"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/germany.svg') }}" /> visa card</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="14">
                                                <label for="14"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/america.svg') }}" /> Master card</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="15">
                                                <label for="15"><strong><img src="{{ asset('themes/tailwind/customer/assets/images/america.svg') }}" /> Paypal</strong></label>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="choose-countery-box">
                                 <h4>Processing time</h4>
                                 <div class="dropdown-wrapper-six">
                                    <div class="icon-wrapper">
                                       <div class="box-drop-countery-six"><span>1 workday</span><i class="toggle fa fa-chevron-down"></i></div>
                                       <div class="dropdown-content">
                                          <ul>
                                             <li>
                                                <input type="radio" name="test" id="16">
                                                <label for="16"><strong>1 workday</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="17">
                                                <label for="17"><strong>2 workday</strong></label>
                                             </li>
                                             <li>
                                                <input type="radio" name="test" id="18">
                                                <label for="18"><strong>3 workday</strong></label>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item-location">
                                 <div class="item-location-left">
                                    <h3>Item location</h3>
                                    <p>Germany, 67067 Ludwigshafen</p>
                                 </div>
                                 <div class="item-location-right">
                                    <button><img src="{{ asset('themes/tailwind/customer/assets/images/edit.svg') }}" /> Edite</button>
                                 </div>
                              </div>
                              <div class="return-policy-box">
                                 <h3>Return Policy</h3>
                                 <p>If the item does not match the description, the seller must<br>
                                    accept the return
                                 </p>
                                 <div class="return-policy-box-inner">
                                    <h4>Domestic Redemptions</h4>
                                    <div class="off-on-radio">
                                       <input type="checkbox" value="1" class="switch">
                                    </div>
                                    <p>Allow return of items purchased domestically.</p>
                                    <div class="return-policy-from">
               <form>
               <div class="from-input">
               <label>Allowed within</label>
               <input type="text" placeholder="14 Roofs" />
               </div>
               <div class="from-input">
               <label>Bears the shipping costs for the return</label>
               <input type="text" placeholder="Buyer" />
               </div>
               </form>
               </div>
               <h3 class="extra-magrin">International returns</h3>
               <p class="extra-magrin-p">If the item does not match the description, the seller must<br>
               accept the return</p>
               <h4>Domestic Redemptions</h4>
               <div class="off-on-radio">
               <input type="checkbox" value="1" class="switch">
               </div>
               <div class="return-policy-from">
               <form>
               <div class="from-input">
               <label>Allowed within</label>
               <input type="text" placeholder="14 Roofs" />
               </div>
               <div class="from-input">
               <label>Bears the shipping costs for the return</label>
               <input type="text" placeholder="Buyer" />
               </div>
               <div class="from-input">
               <label>additional details</label>
               <input type="text" placeholder="Buyer" />
               </div>
               </form>
               </div>
               </div>
               <div class="save-fnish-button">
               <button>Save</button>
               </div>
               </div>
               </div>
               <input type="button" name="next" class="next action-button width-btn" value="Finish" />
               </fieldset>
               <fieldset>
               <div class="form-card">
               <div class="row">
               <div class="col-7">
               <h2 class="fs-title">Finish:</h2>
               </div>
               <div class="col-5">
               <h2 class="steps">Step 5 - 5</h2>
               </div>
               </div> <br><br>
               <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
               <div class="row justify-content-center">
               <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
               </div> <br><br>
               <div class="row justify-content-center">
               <div class="col-7 text-center">
               <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
               </div>
               </div>
               </div>
               </fieldset>
               </div>
               <div class="col-md-4">
               <ul id="progressbar">
               <li class="active" id="account">
               <div class="tab-icon">
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-1-gray.svg') }}" class="gray-icon" />
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-1-blue.svg') }}" class="blue-icon" />
               <h6>Step 01</h6>
               </div>
               <strong>Basecamp</strong></li>
               <li id="personal">
               <div class="tab-icon"> 
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-2-gray.svg') }}" class="gray-icon" />
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-2-blue.svg') }}" class="blue-icon" />
               <h6>Step 02</h6>
               </div>
               <strong>Product</strong></li>
               <li id="payment">
               <div class="tab-icon"> 
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-3-gray.svg') }}" class="gray-icon" />
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-3-blue.svg') }}" class="blue-icon" />
               <h6>Step 03</h6>
               </div>
               <strong>Listing</strong></li>
               <li id="shipping">
               <div class="tab-icon"> 
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-4-gray.svg') }}" class="gray-icon" />
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-4-blue.svg') }}" class="blue-icon" />
               <h6>Step 04</h6>
               </div>
               <strong>Shipping</strong></li>
               <li id="confirm">
               <div class="tab-icon"> 
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-5-gray.svg') }}" class="gray-icon" />
               <img src="{{ asset('themes/tailwind/customer/assets/images/tab-icon-5-blue.svg') }}" class="blue-icon" />
               <h6>Step 05</h6>
               </div>
               <strong>Finish</strong></li>
               </ul>
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