@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="products-all-saction">
            <div class="products-all-saction-inner">
               <div class="products-all-title">
                  <div class="left-productspage">
                     <h2>Products</h2>
                     <p>26.06.2022 <span>16:35</span></p>
                  </div>
               </div>
               <div class="product-image-boxx-all-one">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="product-image-boxx-all-one-left">
                           <div class="input-search">
                              <input type="search" placeholder="Sku, Product name">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/search.svg') }}" class="search-table" /> 
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right-productspage">
                           <div class="select">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/Filter-blue.svg') }}" />
                              <select name="format" id="format">
                                 <option selected disabled> Filter</option>
                                 <option value="pdf">Yearly</option>
                                 <option value="txt">Monthly</option>
                                 <option value="epub">Weekly</option>
                                 <option value="fb2">Daily</option>
                              </select>
                           </div>
                           <a href="{{ url('admin/add-new-prodcut') }}" class="add-product"><img src="{{ asset('themes/tailwind/customer/assets/images/wight-plus.svg') }}" />Add Product</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="products-all-saction-tabnle">
                  <table>
                     <thead>
                        <tr>
                           <th>Product Name</th>
                           <th>Sku</th>
                           <th>Price</th>
                           <th>Stock</th>
                           <th>Sold</th>
                           <th>Revenew</th>
                           <th>Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="img-box-t"><img src="{{ asset('themes/tailwind/customer/assets/images/table-image.png') }}" /></div>
                              <span>Blue Smart Watch</span>
                           </td>
                           <td>#1324689471</td>
                           <td>$230</td>
                           <td>500</td>
                           <td>65</td>
                           <td>$14,950</td>
                           <td class="dot open-child-row" data-row_id="1">
                              <ul class="my-nav">
                                 <li>
                                    <div class="dropdown">
                                       <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/mneu-dot.svg') }}" /></div>
                                       <ul class="dropdown-content">
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-table.svg') }}" />Edit</a></li>
                                          <li><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/table-trash.svg') }}" />Delet</a></li>
                                       </ul>
                                    </div>
                                 </li>
                              </ul>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="paginaction-row">
                  <div class="paginaction-row-left">
                     <div class="select-showing">
                        <select id="selectbox1">
                           <option value="">Showing: 10 </option>
                           <option value="aye">1</option>
                           <option value="eh">2</option>
                           <option value="ooh">3</option>
                           <option value="whoop">4</option>
                        </select>
                        <img src="{{ asset('themes/tailwind/customer/assets/images/arrow.png') }}" class="arrow" />
                     </div>
                  </div>
                  <div class="paginaction-row-right">
                     <div class="paginaction-ul-li">
                        <ul>
                           <li><a href="#" class="button-pagi previous-pagi"><img src="{{ asset('themes/tailwind/customer/assets/images/previous.svg') }}" /> Previous</a></li>
                           <li><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#" class="button-pagi next-pagi">Next <img src="{{ asset('themes/tailwind/customer/assets/images/next.svg') }}" /></a></li>
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