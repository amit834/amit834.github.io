@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="manage-listing-saction">
            <div class="manage-listing-saction-inner">
               <div class="manage-listing-header">
                  <h2>Manage Rules</h2>
                  <span>26.06.2022 <em>16:35</em></span> 
               </div>
               <div class="manage-listing-tab-all">
                  <div class="tabs">
                     <nav class="tab-nav">
                        <ul class="mane-tab">
                           <li class="active"><span data-href="#tab-1">Shipping </span></li>
                           <li><span data-href="#tab-2">Payment</span></li>
                           <li><span data-href="#tab-3">Finish </span></li>
                        </ul>
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
                           <div class="inner-tow-body shiping-rules">
                              <div class="tab active" id="sub-tab-1">
                                 <div class="table-inner-tab manage-rules-bx">
                                    <div class="shipping-rules-box">
                                       <h2>Shipping Rules</h2>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>01</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>02</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>03</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>04</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>5</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>06</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab" id="sub-tab-2">
                                 <div class="table-inner-tab">
                                    <div class="shipping-rules-box">
                                       <h2>Shipping Rules</h2>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>01</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>02</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>03</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>04</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>5</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>06</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
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
                                    <div class="shipping-rules-box">
                                       <h2>Shipping Rules</h2>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>01</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>02</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>03</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>04</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>5</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>06</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab" id="sub-tab-19">
                                 <div class="table-inner-tab">
                                    <div class="shipping-rules-box">
                                       <h2>Shipping Rules</h2>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>01</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>02</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>03</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>04</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>5</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>06</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
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
                                    <div class="shipping-rules-box">
                                       <h2>Shipping Rules</h2>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>01</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>02</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>03</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>04</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>5</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>06</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab" id="sub-tab-37">
                                 <div class="table-inner-tab">
                                    <div class="shipping-rules-box">
                                       <h2>Shipping Rules</h2>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>01</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>02</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>03</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="shipping-rules-box-inner">
                                                <ul>
                                                   <li>
                                                      <div class="icon-rules"><span>04</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. </p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>5</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="icon-rules"><span>06</span></div>
                                                      <div class="content-rules">
                                                         <span>Amet minim</span>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                         <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                      </div>
                                                   </li>
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
         </div>
      </div>
   </div>
</div>
</div>
@endsection