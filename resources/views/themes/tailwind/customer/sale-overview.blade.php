@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
       @include('theme::customer..header')
      <div class="sales-overview-saction">
        <h2>Sales Overview</h2>
        <div class="filter-manage">
          <button><img src="{{ asset('themes/tailwind/customer/assets/images/mange-filter.svg') }}" /> Manage Filter</button>
        </div>
        <div class="sales-overview-from-one">
          <form>
            <div class="show-buton">
              <div class="row">
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <input type="text" placeholder="eBay / customer name or customer number" />
                    </div>
                    <div class="from-row margin-12">
                      <input type="text" placeholder="Bill Number" />
                    </div>
                    <div class="from-row">
                      <p>Do you have any question?</p>
                      <a href="#" class="question-mark"><img src="{{ asset('themes/tailwind/customer/assets/images/question-mark-circle.svg') }}" /></a> </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <label>Date</label>
                    <div class="from-row">
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Choose a book format</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                    <div date-rangepicker class="items-center">
                      <div class="start-date">
                        <div class="relative">
                          <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"> <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg> </div>
                        </div>
                      </div>
                      <div class="end-date">
                        <div class="relative">
                          <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"> <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="left-box-input">
                      <label>Filter</label>
                      <div class="from-row">
                        <div class="select">
                          <select name="format" id="format">
                            <option selected disabled>Please Choose</option>
                            <option value="pdf">PDF</option>
                            <option value="txt">txt</option>
                            <option value="epub">ePub</option>
                            <option value="fb2">fb2</option>
                            <option value="mobi">mobi</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="right-box-input">
                      <label>And</label>
                      <div class="from-row">
                        <div class="select">
                          <select name="format" id="format">
                            <option selected disabled>Please Choose</option>
                            <option value="pdf">PDF</option>
                            <option value="txt">txt</option>
                            <option value="epub">ePub</option>
                            <option value="fb2">fb2</option>
                            <option value="mobi">mobi</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="left-box-input margin-0">
                      <div class="from-row">
                        <input type="text" placeholder="Country Code" />
                        <a href="#" class="question-mark-input"><img src="{{ asset('themes/tailwind/customer/assets/images/question-mark-circle.svg') }}" /></a> </div>
                    </div>
                    <div class="right-box-input margin-0">
                      <div class="from-row">
                        <div class="select">
                          <select name="format" id="format">
                            <option selected disabled>Billin Address</option>
                            <option value="pdf">PDF</option>
                            <option value="txt">txt</option>
                            <option value="epub">ePub</option>
                            <option value="fb2">fb2</option>
                            <option value="mobi">mobi</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="show-buton">
              <div class="row">
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <label>Fill up Search box</label>
                      <input type="email" placeholder="examplemail@gmail.com" />
                    </div>
                    <div class="from-row margin-12">
                      <input type="text" placeholder="Priduct Id" />
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <label>Fill up a Amount</label>
                      <input type="email" placeholder="$Amount" />
                    </div>
                    <div class="from-row">
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Selling Price</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <label>Separate sorting</label>
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Action End</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                    <div class="from-row">
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Tags</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="show-buton last-row">
              <div class="row">
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Shipping Address</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                    <div class="from-row">
                      <input type="text" placeholder="Type down the value here..." />
                      <a href="#" class="question-mark-input"><img src="{{ asset('themes/tailwind/customer/assets/images/question-mark-circle.svg') }}" /></a> </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Payment Status</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                    <div class="from-row">
                      <input type="text" placeholder="Type down the value here..." />
                      <a href="#" class="question-mark-input"><img src="{{ asset('themes/tailwind/customer/assets/images/question-mark-circle.svg') }}" /></a> </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="sales-box-from">
                    <div class="from-row">
                      <div class="select">
                        <select name="format" id="format">
                          <option selected disabled>Payment / Shipping</option>
                          <option value="pdf">PDF</option>
                          <option value="txt">txt</option>
                          <option value="epub">ePub</option>
                          <option value="fb2">fb2</option>
                          <option value="mobi">mobi</option>
                        </select>
                      </div>
                    </div>
                    <div class="from-row">
                      <input type="text" placeholder="Type down the value here..." />
                      <a href="#" class="question-mark-input"><img src="{{ asset('themes/tailwind/customer/assets/images/question-mark-circle.svg') }}" /></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="load-more-button"><a href="#" id="loadMore">Show more</a></div>
            <div class="apply-button">
              <button>Apply</button>
            </div>
          </form>
        </div>
        <div class="sales-overview-table">
          <div class="table-header">
            <div class="table-header-left">
              <div class="choose-plasce">
                <div class="select">
                  <select name="format" id="format">
                    <option selected disabled>Payment / Shipping</option>
                    <option value="pdf">PDF</option>
                    <option value="txt">txt</option>
                    <option value="epub">ePub</option>
                    <option value="fb2">fb2</option>
                    <option value="mobi">mobi</option>
                  </select>
                </div>
              </div>
              <div class="apply-table-btn">
                <button>Apply</button>
              </div>
              <div class="synchronise-manually">
                <button type="button" class="synchronise_order_manually">Synchronise manually</button>
                <div class="synchronise_order_manually_res"></div>
              </div>
            </div>
            <div class="table-header-right">
              <div class="paginaction">
                <p>Showing the result : <span>1 to 10</span> of 16</p>
              </div>
            </div>
          </div>
          @if(count($all_orders) >= 1)
          <div class="table-recent-sales-list">
            <div class="all-check-order">
                <div class="form-group">
                  <input type="checkbox"  id="all" onclick="javascript:checkAll(this)"/>
                  <label for="all"></label>
                  <span>All Order</span> </div>
              </div>
            <table class="tbl">
              <thead>
                <tr>
                  <th style="width: auto;"></th>
                  <th style="width: 18%;">Product details</th>
                  <th>Customer Details</th>
                  <th class="center">Auction End &<br>
                    Sell date</th>
                  <th class="center">Pay method</th>
                  <th class="right">Amount</th>
                  <th>Shipping panel</th>
                  <th>Feedback</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($all_orders as $key => $order_detail)
                <tr class="main-row">
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;">
                    @if($order_detail['connection_type'] == 'Ebay')
                      <img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" />
                    @endif
                    @php $item_count = 1; @endphp
                    @foreach($order_detail['order_items'] as $key2 => $item_detail) 
                      @if($item_count <= 1)
                        <span class="quanity">Quantity: <em>{{ $item_detail['quantity']; }}</em></span>
                        <p class="text-long">{{ $item_detail['title']; }}</p>
                        <span class="sku">SKU: <em>{{ $item_detail['legacy_item_id']; }}</em></span>
                      @endif
                      @php $item_count++; @endphp
                    @endforeach
                    <a href="javascript:avoid();" class="show-more-td more_order_item" data-order_table_id="{{ $order_detail['id']; }}">Show More Details</a>
                  </td>
                  <td><p>{{ $order_detail['buyer_detail']['full_name'] ?? "" }}</p>
                    <span class="list-horning">eBay name: <em>{{ $order_detail['buyer_detail']['user_name'] ?? "" }}</em></span>
                    <span class="list-horning">Email: <em>{{ $order_detail['buyer_detail']['email'] ?? "" }}</em></span>
                    <span class="list-horning">Country Zip: <em>{{ $order_detail['buyer_detail']['registration_address_postal_code'] ?? "" }}</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>{{ $order_detail['buyer_detail']['phone_number'] ?? "" }}</em></span></td>
                  <td class="center">
                    @if(isset($order_detail['creation_date']))
                      <p>{{ \Carbon\Carbon::parse($order_detail['creation_date'])->format('d M, Y') }}</p>
                    @endif 
                    @if(isset($order_detail['creation_date']))
                      <span class="sale">({{ \Carbon\Carbon::parse($order_detail['creation_date'])->format('h:i:s A') }})</span>
                    @endif 
                  </td>
                  <td class="center"><p>Ebay</p>
                    <span class="paid">{{ $order_detail['order_payment_status']; }}</span></td>
                  <td class="right"><span class="amount">{{ $order_detail['total_fee_basis_amount_value_currency']; }} {{ $order_detail['total_fee_basis_amount_value']; }}</span> <span class="h-total">Total: <em class="total">{{ $order_detail['total_fee_basis_amount_value_currency']; }} {{ $order_detail['total_fee_basis_amount_value']; }}</em></span></td>
                  <td><p>{{ $order_detail['shipping_detail']['carrier_code']; }}</p>
                    <span class="panel">Tracking ID: <em>{{ $order_detail['shipping_detail']['service_code']; }}</em></span> 
                    @if(isset($order_detail['shipping_detail']['min_estimated_delivery_date']))
                      <span class="panel">Dispatch time: <em>{{ \Carbon\Carbon::parse($order_detail['shipping_detail']['min_estimated_delivery_date'])->format('d M, Y, h:i A') }}</em></span>
                    @endif 
                  </td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action">
                    <a href="javascript:avoid();"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> 
                    <a href="javascript:avoid();"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="javascript:avoid();"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr class="show_order_item_list{{ $order_detail['id']; }} inner-td-text" style="display:none;">
                  <td colspan="9">
                    <div class="row">
                    <div class="col-md-4">
                    <h6>Additional details</h6>
                    <span class="d-block"><span class="gray-1">Phone:</span> <span class="gray-3">+91-491593830</span></span>
                    <span class="d-block"><span class="gray-1">mail:</span> <span class="gray-3">277b71df6e77dd28665@m3mbers.ebay.com</span></span>
                    <span class="d-block"><span class="gray-1">Optional delivery address:</span> <span class="gray-3">2C/503 Natures Glory, Parsiknagar, kalwa, Thane, Kalwa, Thane</span></span>
                    </div>
                    <div class="col-md-4">
                    <h6>Channel specific:</h6>
                    <span class="d-block"><span class="gray-1">Channel order number:</span> <span class="gray-3">203879740757</span></span>
                    <span class="d-block"><span class="gray-1">Customer response time stamp:</span> <span class="gray-3">21 Mar, 2022 (03:35:04 PM)</span></span> 
                    </div>
                    <div class="col-md-4">
                    <h6>Payment specific:</h6>
                    <span class="d-block"><span class="gray-1">Payment channel:</span> <span class="gray-3">?</span></span>
                    <span class="d-block"><span class="gray-1">payment transaction id:</span><span class="gray-3">#3879740757</span></span>
                    </div>
                  </td>
                </tr>
                @endforeach
                <!--<tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>
                <tr>
                  <td style="width: auto;" class="check-one"><div class="form-group">
                      <input type="checkbox" id="html">
                      <label for="html"></label>
                    </div></td>
                  <td style="width: 18%;"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> <span class="quanity">Quanity: <em>01</em></span>
                    <p class="text-long">LEGO 7168 Hero Factory...</p>
                    <span class="sku">SKU: <em>203879740757</em></span> <a href="#" class="show-more-td">Show More Details</a></td>
                  <td><p>Mariya Hornig</p>
                    <span class="list-horning">eBay name: <em>mia.mama</em></span> <span class="list-horning">Country Zip: <em>D-33181</em></span> <span class="list-horning">ebay feedback: <em>h</em></span> <span class="list-horning">Customer No: <em>482</em></span></td>
                  <td class="center"><p>21 Mar, 2022</p>
                    <span class="sale">(03:25:54 PM)</span></td>
                  <td class="center"><p>Paypal</p>
                    <span class="paid">Paid</span></td>
                  <td class="right"><span class="amount">$15.00</span> <span class="h-total">Total: <em class="total">$15.00</em></span></td>
                  <td><p>DE_DHL package</p>
                    <span class="panel">Tracking ID: <em>671052857</em></span> <span class="panel">Dispatch time: <em>671052857</em></span></td>
                  <td><span class="feadback">Recived:
                    <div class="form-group">
                      <input type="checkbox" id="recived">
                      <label for="recived"></label>
                    </div>
                    </span> <span class="feadback">Given:
                    <div class="form-group">
                      <input type="checkbox" id="given">
                      <label for="given"></label>
                    </div>
                    </span></td>
                  <td class="action"><a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a> <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a></td>
                </tr>-->
              </tbody>
              <!--<tbody class="show-more-table">
                <tr>
                  <td colspan="9"><span id="btn">Show more</span></td>
                </tr>
              </tbody>-->
            </table>
            {{ $all_orders->links() }}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection