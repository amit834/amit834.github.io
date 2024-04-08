@extends('theme::customer.layouts.master') 
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="dashboard-inner-saction">
            <div class="heading-text">
               <h2>Welcome Name of the seller</h2>
               <p>26.06.2022 <em>16:35</em></p>
            </div>
            <div class="dashboard-saction-one">
               <div class="row">
                  <div class="col-md-8">
                     <div class="order-box-left">
                        <h3>Orders <span>2000</span> <em><img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" /> 0.06%</em></h3>
                        <div class="filer-box-right">
                           <div class="select">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/fi-sr-filter.svg') }}" class="filer-icon" />
                              <select name="format" id="format">
                                 <option selected disabled>Filter</option>
                                 <option value="pdf">Yearly</option>
                                 <option value="txt">Monthly</option>
                                 <option value="epub">Weekly</option>
                                 <option value="fb2">Daily</option>
                              </select>
                              <img src="{{ asset('themes/tailwind/customer/assets/images/arrow-down.svg') }}" class="drop-icon" />
                           </div>
                        </div>
                        <div class="tab-chart-row">
                           <div class="tabs">
                              <ul id="tabs-nav">
                                 <li><a href="#tab1"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /> eBay</a></li>
                                 <li><a href="#tab2"><img src="{{ asset('themes/tailwind/customer/assets/images/ammazon.svg') }}" /> Amazon</a></li>
                                 <li><a href="#tab3"><img src="{{ asset('themes/tailwind/customer/assets/images/google.svg') }}" /> Google</a></li>
                              </ul>
                              <div id="tabs-content">
                                 <div id="tab1" class="tab-content">
                                    <canvas id="myChart"></canvas>
                                 </div>
                                 <div id="tab2" class="tab-content">
                                    <canvas id="myChart-tow"></canvas>
                                 </div>
                                 <div id="tab3" class="tab-content">
                                    <canvas id="myChart-three"></canvas>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="turnover-box-right">
                        <div class="turnover-text-left">
                           <h4>Turnover</h4>
                           <span>Yearly</span>
                           <p><span>32.5K</span> <em> Average</em> <i>99.9%</i></p>
                        </div>
                        <div class="turnover-button-right">
                           <div class="select">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/fi-sr-filter.svg') }}" class="filer-icon" />
                              <select name="format" id="format">
                                 <option selected disabled>Filter</option>
                                 <option value="pdf">Yearly</option>
                                 <option value="txt">Monthly</option>
                                 <option value="epub">Weekly</option>
                                 <option value="fb2">Daily</option>
                              </select>
                              <img src="{{ asset('themes/tailwind/customer/assets/images/arrow-down.svg') }}" class="drop-icon" />
                           </div>
                        </div>
                        <div class="list-turnover">
                           <ul>
                              <li>
                                 <div class="left-list-box">
                                    <img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" />
                                    <h4><span>32.5K</span> <em>Ebay</em> <i>99.7%</i></h4>
                                 </div>
                                 <div class="right-list-box">
                                    <div id="container" class="chart-right" style="width: 100%; height: 91px;"></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="left-list-box">
                                    <img src="{{ asset('themes/tailwind/customer/assets/images/ammazon.svg') }}" />
                                    <h4><span>32.5K</span> <em>Amazon</em> <i>99.7%</i></h4>
                                 </div>
                                 <div class="right-list-box">
                                    <div id="container-tow" class="chart-right" style="width: 100%; height: 91px;"></div>
                                 </div>
                              </li>
                              <li>
                                 <div class="left-list-box">
                                    <img src="{{ asset('themes/tailwind/customer/assets/images/google.svg') }}" />
                                    <h4><span>32.5K</span> <em>Google</em> <i>99.7%</i></h4>
                                 </div>
                                 <div class="right-list-box">
                                    <div id="container-three" class="chart-right" style="width: 100%; height: 91px;"></div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="dashboard-saction-two">
               <div class="row">
                  <div class="col-md-4">
                     <div class="box-saction-two">
                        <h2>Order Status</h2>
                        <div class="drop-buton-right">
                           <ul class="my-nav">
                              <li>
                                 <div class="dropdown">
                                    <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></div>
                                    <ul class="dropdown-content">
                                       <li><a href="#">View Declaration</a></li>
                                       <li><a href="#">Download</a></li>
                                       <li><a href="#">Upload Docs</a></li>
                                       <li><a href="#">Edit</a></li>
                                       <li><a href="#">Delete</a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="order-chart">
                           <section>
                              <div class="pieID pie">
                              </div>
                              <ul class="pieID legend">
                                 <li>
                                    <em>9.7K</em>
                                    <span>718</span>
                                    <h6>Ready to Ship <i>59.9%</i></h6>
                                 </li>
                                 <li>
                                    <em>7.1K</em>
                                    <span>531</span>
                                    <h6>Paid <i>59.9%</i></h6>
                                 </li>
                                 <li>
                                    <em>7.7K</em>
                                    <span>868</span>
                                    <h6>Unpaid <i>59.9%</i></h6>
                                 </li>
                                 <li>
                                    <em>2K</em>
                                    <span>344</span>
                                    <h6>Disputed <i>59.9%</i></h6>
                                 </li>
                              </ul>
                           </section>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="box-saction-two">
                        <h2>Inventory Status</h2>
                        <div class="drop-buton-right">
                           <ul class="my-nav">
                              <li>
                                 <div class="dropdown">
                                    <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></div>
                                    <ul class="dropdown-content">
                                       <li><a href="#">View Declaration</a></li>
                                       <li><a href="#">Download</a></li>
                                       <li><a href="#">Upload Docs</a></li>
                                       <li><a href="#">Edit</a></li>
                                       <li><a href="#">Delete</a></li>
                                    </ul>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <p>Product which are running low on stock.</p>
                        <div class="inventory-tab">
                           <div class="tab_block_main">
                              <ul class="tab_options" id="content_res_menu">
                                 <li>
                                    <a href="#first" class="active">
                                       Critical 
                                       <div class="critical-btn"></div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#sec">
                                       Low 
                                       <div class="low-btn"></div>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#third">
                                       Normal 
                                       <div class="normal-btn"></div>
                                    </a>
                                 </li>
                                 <li><a href="#four">Out of Stock</a></li>
                              </ul>
                              <!-- tab_options- END -->
                              <div class="tab_content">
                                 <div class="tab_block active" id="first">
                                    <div class="box-tab-inner">
                                       <h4>24</h4>
                                       <p>products with <br>critical stock level</p>
                                       <a href="#">view products</a>
                                    </div>
                                 </div>
                                 <div class="tab_block" id="sec">
                                    <div class="box-tab-inner">
                                       <h4>25</h4>
                                       <p>products with <br>critical stock level</p>
                                       <a href="#">view products</a>
                                    </div>
                                 </div>
                                 <div class="tab_block" id="third">
                                    <div class="box-tab-inner">
                                       <h4>26</h4>
                                       <p>products with <br>critical stock level</p>
                                       <a href="#">view products</a>
                                    </div>
                                 </div>
                                 <div class="tab_block" id="four">
                                    <div class="box-tab-inner">
                                       <h4>27</h4>
                                       <p>products with <br>critical stock level</p>
                                       <a href="#">view products</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="box-saction-two">
                        <h2>Product Analysis</h2>
                        <div class="drop-buton-right">
                           <div class="select">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/fi-sr-filter.svg') }}" class="filer-icon" />
                              <select name="format" id="format">
                                 <option selected disabled>Filter</option>
                                 <option value="pdf">Yearly</option>
                                 <option value="txt">Monthly</option>
                                 <option value="epub">Weekly</option>
                                 <option value="fb2">Daily</option>
                              </select>
                              <img src="{{ asset('themes/tailwind/customer/assets/images/arrow-down.svg') }}" class="drop-icon" />
                           </div>
                        </div>
                        <div class="product-tab">
                           <div class="tab_block_main">
                              <ul class="tab_options" id="content_res_menu">
                                 <li><a href="#five" class="active">best performing</a></li>
                                 <li><a href="#six">worst performing</a></li>
                              </ul>
                              <!-- tab_options- END -->
                              <div class="tab_content">
                                 <div class="tab_block active" id="five">
                                    <div class="box-tab-inner">
                                       <ul>
                                          <li>
                                             <div class="analysisicon-box-left">
                                                <div class="analysisicon-eby"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /></div>
                                                <div class="analysisicon-eby">
                                                   <span>Name of the Product</span>
                                                   <h6>SKU: 203879740757 <i><img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" /> 59.9%</i></h6>
                                                </div>
                                             </div>
                                             <div class="analysisicon-box-right">
                                                <ul class="my-nav">
                                                   <li>
                                                      <div class="dropdown">
                                                         <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></div>
                                                         <ul class="dropdown-content">
                                                            <li><a href="#">View Declaration</a></li>
                                                            <li><a href="#">Download</a></li>
                                                            <li><a href="#">Upload Docs</a></li>
                                                            <li><a href="#">Edit</a></li>
                                                            <li><a href="#">Delete</a></li>
                                                         </ul>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="analysisicon-box-left">
                                                <div class="analysisicon-eby"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /></div>
                                                <div class="analysisicon-eby">
                                                   <span>Name of the Product</span>
                                                   <h6>SKU: 203879740757 <i><img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" /> 59.9%</i></h6>
                                                </div>
                                             </div>
                                             <div class="analysisicon-box-right">
                                                <ul class="my-nav">
                                                   <li>
                                                      <div class="dropdown">
                                                         <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></div>
                                                         <ul class="dropdown-content">
                                                            <li><a href="#">View Declaration</a></li>
                                                            <li><a href="#">Download</a></li>
                                                            <li><a href="#">Upload Docs</a></li>
                                                            <li><a href="#">Edit</a></li>
                                                            <li><a href="#">Delete</a></li>
                                                         </ul>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="analysisicon-box-left">
                                                <div class="analysisicon-eby"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /></div>
                                                <div class="analysisicon-eby">
                                                   <span>Name of the Product</span>
                                                   <h6>SKU: 203879740757 <i><img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" /> 59.9%</i></h6>
                                                </div>
                                             </div>
                                             <div class="analysisicon-box-right">
                                                <ul class="my-nav">
                                                   <li>
                                                      <div class="dropdown">
                                                         <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></div>
                                                         <ul class="dropdown-content">
                                                            <li><a href="#">View Declaration</a></li>
                                                            <li><a href="#">Download</a></li>
                                                            <li><a href="#">Upload Docs</a></li>
                                                            <li><a href="#">Edit</a></li>
                                                            <li><a href="#">Delete</a></li>
                                                         </ul>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="tab_block" id="six">
                                    <div class="box-tab-inner">
                                       <ul>
                                          <li>
                                             <div class="analysisicon-box-left">
                                                <div class="analysisicon-eby"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /></div>
                                                <div class="analysisicon-eby">
                                                   <span>Name of the Product</span>
                                                   <h6>SKU: 203879740757 <i><img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" /> 59.9%</i></h6>
                                                </div>
                                             </div>
                                             <div class="analysisicon-box-right">
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></button>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="analysisicon-box-left">
                                                <div class="analysisicon-eby"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /></div>
                                                <div class="analysisicon-eby">
                                                   <span>Name of the Product</span>
                                                   <h6>SKU: 203879740757 <i><img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" /> 59.9%</i></h6>
                                                </div>
                                             </div>
                                             <div class="analysisicon-box-right">
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></button>
                                             </div>
                                          </li>
                                          <li>
                                             <div class="analysisicon-box-left">
                                                <div class="analysisicon-eby"><img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" /></div>
                                                <div class="analysisicon-eby">
                                                   <span>Name of the Product</span>
                                                   <h6>SKU: 203879740757 <i> <img src="{{ asset('themes/tailwind/customer/assets/images/green-arrow.svg') }}" class="green-arrow" />59.9%</i></h6>
                                                </div>
                                             </div>
                                             <div class="analysisicon-box-right">
                                                <button><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></button>
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
            <div class="dashboard-saction-three">
               <h2>Recent sales list</h2>
               <div class="analysisicon-box-right">
                  <ul class="my-nav">
                     <li>
                        <div class="dropdown">
                           <div class="open-imeg"><img src="{{ asset('themes/tailwind/customer/assets/images/3-dot.svg') }}" /></div>
                           <ul class="dropdown-content">
                              <li><a href="#">View Declaration</a></li>
                              <li><a href="#">Download</a></li>
                              <li><a href="#">Upload Docs</a></li>
                              <li><a href="#">Edit</a></li>
                              <li><a href="#">Delete</a></li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="table-recent-sales-list">
                  <table>
                     <tbody>
                        <tr>
                           <th style="width: auto;"></th>
                           <th style="width: 18%;">Product details</th>
                           <th>Customer Details</th>
                           <th class="center">Auction End &<br> Sell date</th>
                           <th class="center">Pay method</th>
                           <th class="right">Amount</th>
                           <th>Shipping panel</th>
                           <th>Feedback</th>
                           <th>Action</th>
                        </tr>
                        <tr>
                           <td style="width: auto;" class="check-one">
                              <div class="form-group">
                                 <input type="checkbox" id="html">
                                 <label for="html"></label>
                              </div>
                           </td>
                           <td style="width: 198px;">
                              <img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" />
                              <span class="quanity">Quanity: <em>01</em></span>
                              <p class="text-long">LEGO 7168 Hero Factory...</p>
                              <span class="sku">SKU: <em>203879740757</em></span>
                           </td>
                           <td>
                              <p>Mariya Hornig</p>
                              <span class="list-horning">eBay name: <em>mia.mama</em></span>
                              <span class="list-horning">Country Zip: <em>D-33181</em></span>
                              <span class="list-horning">ebay feedback: <em>h</em></span>
                              <span class="list-horning">Customer No: <em>482</em></span>
                           </td>
                           <td class="center">
                              <p>21 Mar, 2022</p>
                              <span class="sale">(03:25:54 PM)</span>
                           </td>
                           <td class="center">
                              <p>Paypal</p>
                              <span class="paid">Paid</span>
                           </td>
                           <td class="right">
                              <span class="amount">$15.00</span>
                              <span class="h-total">Total: <em class="total">$15.00</em></span>
                           </td>
                           <td>
                              <p>DE_DHL package</p>
                              <span class="panel">Tracking ID: <em>671052857</em></span>
                              <span class="panel">Dispatch time: <em>671052857</em></span>
                           </td>
                           <td>
                              <span class="feadback">
                                 Recived: 
                                 <div class="form-group">
                                    <input type="checkbox" id="recived">
                                    <label for="recived"></label>
                                 </div>
                              </span>
                              <span class="feadback">
                                 Given: 
                                 <div class="form-group">
                                    <input type="checkbox" id="given">
                                    <label for="given"></label>
                                 </div>
                              </span>
                           </td>
                           <td class="action">
                              <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/edit-square.svg') }}" /></a>
                              <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/pdf-download.svg') }}" /></a>
                              <a href="#"><img src="{{ asset('themes/tailwind/customer/assets/images/fi-rr-trash.svg') }}" /></a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="show-more-details"><a href="#">Show More Details</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   // Tab Chart-one
   var ctx = document.getElementById('myChart').getContext('2d');
   var gradient = ctx.createLinearGradient(0, 0, 0, 400);
   gradient.addColorStop(0, 'rgba(0, 172, 255, 0.20)'); // Start color
   gradient.addColorStop(0.95, 'rgba(0, 172, 255, 0.00)'); // End color
   
   var myChart = new Chart(ctx, {
     type: 'line',
     data: {
       labels: ['12.00', '01.00', '02.00', '03.00', '04.00', '05.00', '06.00', '07.00', '08.00'],
       datasets: [{
         data: [12, 19, 3, 17, 6, 3, 7, 20, 30], // Adjusted data array
         backgroundColor: gradient, // Set the gradient as the background color
         borderColor: 'rgba(0, 172, 255, 1)', // Border color
         borderWidth: 2 // Border width
       }]
     },
     options: {
       title: {
         display: false // Hide the title
       },
       scales: {
         xAxes: [{
           gridLines: {
             borderDash: [5, 5] // Set the X-axis grid lines to dotted with 5px dashes and 5px gaps
           }
         }],
         yAxes: [{
           gridLines: {
             borderDash: [5, 5] // Set the Y-axis grid lines to dotted with 5px dashes and 5px gaps
           }
         }]
       },
       legend: {
         display: false // Hide the legend
       }
     }
   });
</script>
<script>
   // Tab Chart-tow
   var ctx = document.getElementById('myChart-tow').getContext('2d');
   var gradient = ctx.createLinearGradient(0, 0, 0, 400);
   gradient.addColorStop(0, 'rgba(0, 172, 255, 0.20)'); // Start color
   gradient.addColorStop(0.95, 'rgba(0, 172, 255, 0.00)'); // End color
   
   var myChart = new Chart(ctx, {
     type: 'line',
     data: {
       labels: ['12.00', '01.00', '02.00', '03.00', '04.00', '05.00', '06.00', '07.00', '08.00'],
       datasets: [{
         data: [12, 19, 3, 17, 6, 3, 7, 20, 30], // Adjusted data array
         backgroundColor: gradient, // Set the gradient as the background color
         borderColor: 'rgba(0, 172, 255, 1)', // Border color
         borderWidth: 2 // Border width
       }]
     },
     options: {
       title: {
         display: false // Hide the title
       },
       scales: {
         xAxes: [{
           gridLines: {
             borderDash: [5, 5] // Set the X-axis grid lines to dotted with 5px dashes and 5px gaps
           }
         }],
         yAxes: [{
           gridLines: {
             borderDash: [5, 5] // Set the Y-axis grid lines to dotted with 5px dashes and 5px gaps
           }
         }]
       },
       legend: {
         display: false // Hide the legend
       }
     }
   });
</script>
<script>
   // Tab Chart-three
   var ctx = document.getElementById('myChart-three').getContext('2d');
   var gradient = ctx.createLinearGradient(0, 0, 0, 400);
   gradient.addColorStop(0, 'rgba(0, 172, 255, 0.20)'); // Start color
   gradient.addColorStop(0.95, 'rgba(0, 172, 255, 0.00)'); // End color
   
   var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['12.00', '01.00', '02.00', '03.00', '04.00', '05.00', '06.00', '07.00', '08.00'],
      datasets: [{
        data: [12, 19, 3, 17, 6, 3, 7, 20, 30], // Adjusted data array
        backgroundColor: gradient, // Set the gradient as the background color
        borderColor: 'rgba(0, 172, 255, 1)', // Border color
        borderWidth: 2 // Border width
      }]
    },
    options: {
      title: {
        display: false // Hide the title
      },
      scales: {
        xAxes: [{
          gridLines: {
            borderDash: [5, 5] // Set the X-axis grid lines to dotted with 5px dashes and 5px gaps
          }
        }],
        yAxes: [{
          gridLines: {
            borderDash: [5, 5] // Set the Y-axis grid lines to dotted with 5px dashes and 5px gaps
          }
        }]
      },
      legend: {
        display: false // Hide the legend
      }
    }
   });   
</script>
<script>
   // Ebay Chart........................
   var chart = new Highcharts.Chart({
     chart: {
       renderTo: "container",
       marginBottom: 0
     },
     title: {
       text: null // Set the title to null or an empty string
     },
     credits: {
       enabled: false // Disable Highcharts branding
     },
     xAxis: {
       categories: [
         "Jan",
         "Feb",
         "Mar",
         "Apr",
         "May"
       ],
       labels: {
         rotation: 90,
         enabled: false // Disable x-axis labels
       },
       labels: {
         rotation: 90,
         enabled: false // Disable x-axis labels
       },
       lineColor: 'transparent', // Hide x-axis line
       tickLength: 0 // Hide x-axis ticks
     },
     yAxis: {
       visible: false // Hide y-axis completely
     },
     series: [
       {
         name: "", // Empty series name
         data: [
           10,
           20,
           60,
           50,
           90
         ],
         showInLegend: false,
         color: '#0046FE', // Change the color of the line
         marker: {
           fillColor: 'white', // Color of the dots
           lineWidth: 2, // Border width of the dots
           lineColor: '#0046FE' // Border color of the dots
         }
       }
     ]
   });    
</script> 
<script>
   // Amazon Chart........................
   var chart = new Highcharts.Chart({
     chart: {
       renderTo: "container-tow",
       marginBottom: 0
     },
     title: {
       text: null // Set the title to null or an empty string
     },
     credits: {
       enabled: false // Disable Highcharts branding
     },
     xAxis: {
       categories: [
         "Jan",
         "Feb",
         "Mar",
         "Apr",
         "May"
       ],
       labels: {
         rotation: 90,
         enabled: false // Disable x-axis labels
       },
       lineColor: 'transparent', // Hide x-axis line
       tickLength: 0 // Hide x-axis ticks
     },
     yAxis: {
       visible: false // Hide y-axis completely
     },
     series: [
       {
         name: "", // Empty series name
         data: [
           10,
           35,
           20,
           60,
           90
         ],
         showInLegend: false,
         color: '#35363C', // Change the color of the line
         marker: {
           fillColor: 'white', // Color of the dots
           lineWidth: 2, // Border width of the dots
           lineColor: '#35363C' // Border color of the dots
         }
       }
     ]
   });    
</script> 
<script>
   // Google Chart........................
   var chart = new Highcharts.Chart({
     chart: {
       renderTo: "container-three",
       marginBottom: 0
     },
     title: {
       text: null // Set the title to null or an empty string
     },
     credits: {
       enabled: false // Disable Highcharts branding
     },
     xAxis: {
       categories: [
         "Jan",
         "Feb",
         "Mar",
         "Apr",
         "May"
       ],
       labels: {
         rotation: 90,
         enabled: false // Disable x-axis labels
       },
       lineColor: 'transparent', // Hide x-axis line
       tickLength: 0 // Hide x-axis ticks
     },
     yAxis: {
       visible: false // Hide y-axis completely
     },
     series: [
       {
         name: "", // Empty series name
         data: [
           10,
           30,
           70,
           50,
           90
         ],
         showInLegend: false,
         color: '#EE4C4C', // Change the color of the line
         marker: {
           fillColor: 'white', // Color of the dots
           lineWidth: 2, // Border width of the dots
           lineColor: '#EE4C4C' // Border color of the dots
         }
       }
     ]
   });    
</script>   
@endsection