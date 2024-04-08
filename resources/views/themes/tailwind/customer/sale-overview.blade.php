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
                <button>Synchronise manually</button>
              </div>
            </div>
            <div class="table-header-right">
              <div class="paginaction">
                <p>Showing the result : <span>1 to 10</span> of 16</p>
              </div>
            </div>
          </div>
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
              </tbody>
              <tbody class="show-more-table">
                <tr>
                  <td colspan="9"><span id="btn">Show more</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection