@extends('theme::customer.layouts.master')
@section('content')
<div class="container-fluid page-body-wrapper">
   <div class="main-panel">
      <div class="content-wrapper">
         @include('theme::customer.header')
         <div class="dashboard-inner-saction">
            <div class="overview-saction">
               <div class="overview-header">
                  <h2>Overview</h2>
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
               </div>
               <div class="overview-profile">
                  <div class="overview-profile-img">
                     <img src="{{ asset('storage/'. $user_details->avatar) }}" />
                  </div>
                  <div class="overview-profile-text">
                     <h4>{{ $user_details->name }}</h4>
                     {{ $user_details->email }}
                     <span>Free User</span>
                  </div>
               </div>
            </div>
            <div class="overview-saction">
               <div class="overview-header">
                  <h2>Sign-in Method</h2>
               </div>
               <div class="overview-profile-method">
                  <ul class="method-row">
                     <li>
                        <div class="method-row-left">
                           <label>Email Address</label>
                           {{ $user_details->email }}
                        </div>
                        <div class="method-row-right">
                           <div class="popup-box">
                              <a href="#update_profile_email" class="link"> Change Email</a>
                              <div data-ml-modal id="update_profile_email">
                                 <a href="#!" class="modal-overlay"></a>
                                 <div class="modal-dialog modal-dialog-lg">
                                    <a href="#!" class="modal-close">&times;</a>
                                    <div class="header-modal">
                                       <h2>Change Email</h2>
                                    </div>
                                    <div class="modal-content newspaper">
                                       <form class="form-popup" id="chanage_email_address" enctype="multipart/form-data">
                                          <div class="input-popup-row">
                                             <label>Email Adress</label>
                                             <input type="email" name="email" id="email"
                                                value="{{$user_details->email}}" required />
                                          </div>
                                          <div class="from-button">
                                             <button class="close-btn" type="button">Close</button>
                                             <button class="save-btn disable-submit" type="submit"
                                                >Submit</button>                                                            
                                          </div>
                                       </form>
                                       <div class="chanage_email_address_res"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="method-row-left">
                           <label>Password</label>
                           <em>**********</em>
                        </div>
                        <div class="method-row-right">
                           <div class="popup-box">
                              <a href="#update_profile_password" class="link"> Change Password</a>
                              <div data-ml-modal id="update_profile_password">
                                 <a href="#!" class="modal-overlay"></a>
                                 <div class="modal-dialog modal-dialog-lg">
                                    <a href="#!" class="modal-close">&times;</a>
                                    <div class="header-modal">
                                       <h2>Change Password</h2>
                                    </div>
                                    <div class="modal-content newspaper">
                                       <form class="form-popup" id="submit_change_password" enctype="multipart/form-data">
                                          <div class="input-popup-row">
                                             <label>Old Password</label>
                                             <input type="password" name="old_password" id="old_password" value="" />
                                          </div>
                                          <div class="input-popup-row">
                                             <label>New Password</label>
                                             <input type="password" name="new_password" id="new_password" value="" />
                                          </div>
                                          <div class="input-popup-row">
                                             <label>Confirm Password</label>
                                             <input type="password" name="confirm_password" id="confirm_password" value="" />
                                          </div>
                                          <div class="from-button">
                                             <button class="close-btn" type="button">Close</button>
                                             <button class="save-btn disable-submit"
                                                type="submit">Submit</button>
                                          </div>
                                       </form>
                                       <div class="submit_change_password_res"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="overview-saction">
               <div class="overview-header">
                  <h2>Profile Details</h2>
               </div>
               <div class="profile-details-box">
                  <form class="form-popup" id="submit_profile_details" action="#" method="POST" enctype="multipart/form-data">
                     <div class="edit-profile">
                        <img src="{{ asset('storage/'. $user_details->avatar) }}" />
                        <button type="button" class="edite-profile"><img
                           src="{{ asset('themes/tailwind/customer/assets/images/edit.png') }}" /></button>
                        <button type="button" class="close-profile"><img
                           src="{{ asset('themes/tailwind/customer/assets/images/close-image.png') }}" /></button>
                     </div>
                     <div class="from-input-row">
                        <div class="from-input">
                           <label>Name</label>
                           <input type="text" name="name" id="name" value="{{ $user_details->name }}" placeholder="" />
                        </div>
                        <div class="from-input">
                           <label>Country</label>
                           <div class="select">
                              <select name="country" id="country">
                                 <option value="">Select a Country...</option>
                                 <option value="Afghanistan" <?php if($user_details->country == 'Afghanistan') echo "selected";?>>Afghanistan</option>
                                 <option value="Albania" <?php if($user_details->country == 'Albania') echo "selected";?>>Albania</option>
                                 <option value="Algeria" <?php if($user_details->country == 'Algeria') echo "selected";?>>Algeria</option>
                                 <option value="4" <?php if($user_details->country == '4') echo"selected";?>>Andorra</option>
                                 <option value="5" <?php if($user_details->country == '5') echo"selected";?>>Angola</option>
                                 <option value="6" <?php if($user_details->country == '6') echo"selected";?>>Antigua and Barbuda</option>
                                 <option value="7" <?php if($user_details->country == '7') echo"selected";?>>Argentina</option>
                                 <option value="8" <?php if($user_details->country == '8') echo"selected";?>>Armenia</option>
                                 <option value="9" <?php if($user_details->country == '9') echo"selected";?>>Australia</option>
                                 <option value="10" <?php if($user_details->country == '10') echo"selected";?>>Austria</option>
                                 <option value="11" <?php if($user_details->country == '11') echo"selected";?>>Azerbaijan</option>
                                 <option value="12" <?php if($user_details->country == '12') echo"selected";?>>Bahamas</option>
                                 <option value="13" <?php if($user_details->country == '13') echo"selected";?>>Bahrain</option>
                                 <option value="14" <?php if($user_details->country == '14') echo"selected";?>>Bangladesh</option>
                                 <option value="15" <?php if($user_details->country == '15') echo"selected";?>>Barbados</option>
                                 <option value="16" <?php if($user_details->country == '16') echo"selected";?>>Belarus</option>
                                 <option value="17" <?php if($user_details->country == '17') echo"selected";?>>Belgium</option>
                                 <option value="18" <?php if($user_details->country == '18') echo"selected";?>>Belize</option>
                                 <option value="19" <?php if($user_details->country == '19') echo"selected";?>>Benin</option>
                                 <option value="20" <?php if($user_details->country == '20') echo"selected";?>>Bhutan</option>
                                 <option value="21" <?php if($user_details->country == '21') echo"selected";?>>Bolivia (Plurinational State of)</option>
                                 <option value="22" <?php if($user_details->country == '22') echo"selected";?>>Bosnia and Herzegovina</option>
                                 <option value="23" <?php if($user_details->country == '23') echo"selected";?>>Botswana</option>
                                 <option value="24" <?php if($user_details->country == '24') echo"selected";?>>Brazil</option>
                                 <option value="25" <?php if($user_details->country == '25') echo"selected";?>>Brunei Darussalam</option>
                                 <option value="26" <?php if($user_details->country == '26') echo"selected";?>>Bulgaria</option>
                                 <option value="27" <?php if($user_details->country == '27') echo"selected";?>>Burkina Faso</option>
                                 <option value="28" <?php if($user_details->country == '28') echo"selected";?>>Burundi</option>
                                 <option value="29" <?php if($user_details->country == '29') echo"selected";?>>Cabo Verde</option>
                                 <option value="30" <?php if($user_details->country == '30') echo"selected";?>>Cambodia</option>
                                 <option value="31" <?php if($user_details->country == '31') echo"selected";?>>Cameroon</option>
                                 <option value="32" <?php if($user_details->country == '32') echo"selected";?>>Canada</option>
                                 <option value="33" <?php if($user_details->country == '33') echo"selected";?>>Central African Republic</option>
                                 <option value="34" <?php if($user_details->country == '34') echo"selected";?>>Chad</option>
                                 <option value="35" <?php if($user_details->country == '35') echo"selected";?>>Chile</option>
                                 <option value="36" <?php if($user_details->country == '36') echo"selected";?>>China</option>
                                 <option value="37" <?php if($user_details->country == '37') echo"selected";?>>Colombia</option>
                                 <option value="38" <?php if($user_details->country == '38') echo"selected";?>>Comoros</option>
                                 <option value="39" <?php if($user_details->country == '39') echo"selected";?>>Congo</option>
                                 <option value="40" <?php if($user_details->country == '40') echo"selected";?>>Congo, Democratic Republic of the</option>
                                 <option value="41" <?php if($user_details->country == '41') echo"selected";?>>Costa Rica</option>
                                 <option value="42" <?php if($user_details->country == '42') echo"selected";?>>Côte d'Ivoire</option>
                                 <option value="43" <?php if($user_details->country == '43') echo"selected";?>>Croatia</option>
                                 <option value="44" <?php if($user_details->country == '44') echo"selected";?>>Cuba</option>
                                 <option value="45" <?php if($user_details->country == '45') echo"selected";?>>Cyprus</option>
                                 <option value="46" <?php if($user_details->country == '46') echo"selected";?>>Czechia</option>
                                 <option value="47" <?php if($user_details->country == '47') echo"selected";?>>Denmark</option>
                                 <option value="48" <?php if($user_details->country == '48') echo"selected";?>>Djibouti</option>
                                 <option value="49" <?php if($user_details->country == '49') echo"selected";?>>Dominica</option>
                                 <option value="50" <?php if($user_details->country == '50') echo"selected";?>>Dominican Republic</option>
                                 <option value="51" <?php if($user_details->country == '51') echo"selected";?>>Ecuador</option>
                                 <option value="52" <?php if($user_details->country == '52') echo"selected";?>>Egypt</option>
                                 <option value="53" <?php if($user_details->country == '53') echo"selected";?>>El Salvador</option>
                                 <option value="54" <?php if($user_details->country == '54') echo"selected";?>>Equatorial Guinea</option>
                                 <option value="55" <?php if($user_details->country == '55') echo"selected";?>>Eritrea</option>
                                 <option value="56" <?php if($user_details->country == '56') echo"selected";?>>Estonia</option>
                                 <option value="57" <?php if($user_details->country == '57') echo"selected";?>>Eswatini</option>
                                 <option value="58" <?php if($user_details->country == '58') echo"selected";?>>Ethiopia</option>
                                 <option value="59" <?php if($user_details->country == '59') echo"selected";?>>Fiji</option>
                                 <option value="60" <?php if($user_details->country == '60') echo"selected";?>>Finland</option>
                                 <option value="61" <?php if($user_details->country == '61') echo"selected";?>>France</option>
                                 <option value="62" <?php if($user_details->country == '62') echo"selected";?>>Gabon</option>
                                 <option value="63" <?php if($user_details->country == '63') echo"selected";?>>Gambia</option>
                                 <option value="64" <?php if($user_details->country == '64') echo"selected";?>>Georgia</option>
                                 <option value="65" <?php if($user_details->country == '65') echo"selected";?>>Germany</option>
                                 <option value="66" <?php if($user_details->country == '66') echo"selected";?>>Ghana</option>
                                 <option value="67" <?php if($user_details->country == '67') echo"selected";?>>Greece</option>
                                 <option value="68" <?php if($user_details->country == '68') echo"selected";?>>Grenada</option>
                                 <option value="69" <?php if($user_details->country == '69') echo"selected";?>>Guatemala</option>
                                 <option value="70" <?php if($user_details->country == '70') echo"selected";?>>Guinea</option>
                                 <option value="71" <?php if($user_details->country == '71') echo"selected";?>>Guinea-Bissau</option>
                                 <option value="72" <?php if($user_details->country == '72') echo"selected";?>>Guyana</option>
                                 <option value="73" <?php if($user_details->country == '73') echo"selected";?>>Haiti</option>
                                 <option value="74" <?php if($user_details->country == '74') echo"selected";?>>Honduras</option>
                                 <option value="75" <?php if($user_details->country == '75') echo"selected";?>>Hungary</option>
                                 <option value="76" <?php if($user_details->country == '76') echo"selected";?>>Iceland</option>
                                 <option value="77" <?php if($user_details->country == '77') echo"selected";?>>India</option>
                                 <option value="78" <?php if($user_details->country == '78') echo"selected";?>>Indonesia</option>
                                 <option value="79" <?php if($user_details->country == '79') echo"selected";?>>Iran (Islamic Republic of)</option>
                                 <option value="80" <?php if($user_details->country == '80') echo"selected";?>>Iraq</option>
                                 <option value="81" <?php if($user_details->country == '81') echo"selected";?>>Ireland</option>
                                 <option value="82" <?php if($user_details->country == '82') echo"selected";?>>Israel</option>
                                 <option value="83" <?php if($user_details->country == '83') echo"selected";?>>Italy</option>
                                 <option value="84" <?php if($user_details->country == '84') echo"selected";?>>Jamaica</option>
                                 <option value="85" <?php if($user_details->country == '85') echo"selected";?>>Japan</option>
                                 <option value="86" <?php if($user_details->country == '86') echo"selected";?>>Jordan</option>
                                 <option value="87" <?php if($user_details->country == '87') echo"selected";?>>Kazakhstan</option>
                                 <option value="88" <?php if($user_details->country == '88') echo"selected";?>>Kenya</option>
                                 <option value="89" <?php if($user_details->country == '89') echo"selected";?>>Kiribati</option>
                                 <option value="90" <?php if($user_details->country == '90') echo"selected";?>>Korea (Democratic People's Republic of)</option>
                                 <option value="91" <?php if($user_details->country == '91') echo"selected";?>>Korea, Republic of</option>
                                 <option value="92" <?php if($user_details->country == '92') echo"selected";?>>Kuwait</option>
                                 <option value="93" <?php if($user_details->country == '93') echo"selected";?>>Kyrgyzstan</option>
                                 <option value="94" <?php if($user_details->country == '94') echo"selected";?>>Lao People's Democratic Republic</option>
                                 <option value="95" <?php if($user_details->country == '95') echo"selected";?>>Latvia</option>
                                 <option value="96" <?php if($user_details->country == '96') echo"selected";?>>Lebanon</option>
                                 <option value="97" <?php if($user_details->country == '97') echo"selected";?>>Lesotho</option>
                                 <option value="98" <?php if($user_details->country == '98') echo"selected";?>>Liberia</option>
                                 <option value="99" <?php if($user_details->country == '99') echo"selected";?>>Libya</option>
                                 <option value="100" <?php if($user_details->country == '100') echo"selected";?>>Liechtenstein</option>
                                 <option value="101" <?php if($user_details->country == '101') echo"selected";?>>Lithuania</option>
                                 <option value="102" <?php if($user_details->country == '102') echo"selected";?>>Luxembourg</option>
                                 <option value="103" <?php if($user_details->country == '103') echo"selected";?>>Madagascar</option>
                                 <option value="104">Malawi</option>
                                 <option value="105">Malaysia</option>
                                 <option value="106">Maldives</option>
                                 <option value="107">Mali</option>
                                 <option value="108">Malta</option>
                                 <option value="109">Marshall Islands</option>
                                 <option value="110">Mauritania</option>
                                 <option value="111">Mauritius</option>
                                 <option value="112">Mexico</option>
                                 <option value="113">Micronesia (Federated States of)</option>
                                 <option value="114">Moldova, Republic of</option>
                                 <option value="115">Monaco</option>
                                 <option value="116">Mongolia</option>
                                 <option value="117">Montenegro</option>
                                 <option value="118">Morocco</option>
                                 <option value="119">Mozambique</option>
                                 <option value="120">Myanmar</option>
                                 <option value="121">Namibia</option>
                                 <option value="122">Nauru</option>
                                 <option value="123">Nepal</option>
                                 <option value="124">Netherlands</option>
                                 <option value="125">New Zealand</option>
                                 <option value="126">Nicaragua</option>
                                 <option value="127">Niger</option>
                                 <option value="128">Nigeria</option>
                                 <option value="129">North Macedonia</option>
                                 <option value="130">Norway</option>
                                 <option value="131">Oman</option>
                                 <option value="132">Pakistan</option>
                                 <option value="133">Palau</option>
                                 <option value="134">Panama</option>
                                 <option value="135">Papua New Guinea</option>
                                 <option value="136">Paraguay</option>
                                 <option value="137">Peru</option>
                                 <option value="138">Philippines</option>
                                 <option value="139">Poland</option>
                                 <option value="140">Portugal</option>
                                 <option value="141">Qatar</option>
                                 <option value="142">Romania</option>
                                 <option value="143">Russian Federation</option>
                                 <option value="144">Rwanda</option>
                                 <option value="145">Saint Kitts and Nevis</option>
                                 <option value="146">Saint Lucia</option>
                                 <option value="147">Saint Vincent and the Grenadines</option>
                                 <option value="148">Samoa</option>
                                 <option value="149">San Marino</option>
                                 <option value="150">Sao Tome and Principe</option>
                                 <option value="151">Saudi Arabia</option>
                                 <option value="152">Senegal</option>
                                 <option value="153">Serbia</option>
                                 <option value="154">Seychelles</option>
                                 <option value="155">Sierra Leone</option>
                                 <option value="156">Singapore</option>
                                 <option value="157">Slovakia</option>
                                 <option value="158">Slovenia</option>
                                 <option value="159">Solomon Islands</option>
                                 <option value="160">Somalia</option>
                                 <option value="161">South Africa</option>
                                 <option value="162">South Sudan</option>
                                 <option value="163">Spain</option>
                                 <option value="164">Sri Lanka</option>
                                 <option value="165">Sudan</option>
                                 <option value="166">Suriname</option>
                                 <option value="167">Sweden</option>
                                 <option value="168">Switzerland</option>
                                 <option value="169">Syrian Arab Republic</option>
                                 <option value="170">Tajikistan</option>
                                 <option value="171">Tanzania, United Republic of</option>
                                 <option value="172">Thailand</option>
                                 <option value="173">Timor-Leste</option>
                                 <option value="174">Togo</option>
                                 <option value="175">Tonga</option>
                                 <option value="176">Trinidad and Tobago</option>
                                 <option value="177">Tunisia</option>
                                 <option value="178">Turkey</option>
                                 <option value="179">Turkmenistan</option>
                                 <option value="180">Tuvalu</option>
                                 <option value="181">Uganda</option>
                                 <option value="182">Ukraine</option>
                                 <option value="183">United Arab Emirates</option>
                                 <option value="184">United Kingdom of Great Britain and Northern Ireland
                                 </option>
                                 <option value="185">United States of America</option>
                                 <option value="186">Uruguay</option>
                                 <option value="187">Uzbekistan</option>
                                 <option value="188">Vanuatu</option>
                                 <option value="189">Venezuela (Bolivarian Republic of)</option>
                                 <option value="190">Viet Nam</option>
                                 <option value="191">Yemen</option>
                                 <option value="192">Zambia</option>
                                 <option value="193">Zimbabwe</option>
                              </select>
                           </div>
                        </div>
                        <div class="from-input">
                           <label>Language</label>
                           <div class="select">
                              <select name="language" id="language">
                                 <option value="">Select a Language...</option>
                                 <option value="Albanian (Shqip)" <?php if($user_details->language == 'Albanian (Shqip)') echo "selected"; ?>>Albanian (Shqip)</option>
                                 <option value="Arabic (اَلْعَرَبِيَّةُ)" <?php if($user_details->language == 'Arabic (اَلْعَرَبِيَّةُ)') echo "selected"; ?>>Arabic (اَلْعَرَبِيَّةُ) </option>
                                 <option value="3">Portuguese (Português)</option>
                                 <option value="4">English (USA) </option>
                                 <option value="5">English (British English)</option>
                                 <option value="6">Spanish (Español)</option>
                                 <option value="7">Armenian (հայերէն/հայերեն)</option>
                                 <option value="8">Russian (Русский)</option>
                                 <option value="9">German (Deutsch)</option>
                                 <option value="10">Azerbaijani (Azeri) </option>
                                 <option value="11">Bengali (Bangla)</option>
                                 <option value="12">Dutch (Nederlands)</option>
                                 <option value="13">French (Français)</option>
                                 <option value="14">Bosnian (Bosanski)</option>
                                 <option value="15">Croatian (Hrvatski)</option>
                                 <option value="16">Serbian (српски)</option>
                                 <option value="17">Bulgarian (български)</option>
                                 <option value="18">Mandarin Chinese (官話 / 官话) </option>
                                 <option value="19">Greek (ελληνικά)</option>
                                 <option value="20">Turkish (Türkçe)</option>
                                 <option value="21">Czech (čeština) </option>
                                 <option value="22">Slovak (slovenčina)</option>
                                 <option value="23">Danish (dansk)</option>
                                 <option value="24">Estonian (eesti keel)</option>
                                 <option value="25">Amharic (አማርኛ)</option>
                                 <option value="26">Finnish (suomen kieli)</option>
                                 <option value="27">Swedish (svenska)</option>
                                 <option value="28">Georgian (ქართული ენა)</option>
                                 <option value="29">Portuguese (português do Brasil)</option>
                                 <option value="30">Hungarian (magyar nyelv)</option>
                                 <option value="31">Icelandic (íslenska)</option>
                                 <option value="32">Hindi (हिन्दी)</option>
                                 <option value="33">Indonesian (bahasa Indonesia)</option>
                                 <option value="34">Persian (فارسی)</option>
                                 <option value="35">Hebrew (עברית חדשה)</option>
                                 <option value="36">Japanese (日本語)</option>
                                 <option value="37">Kazakh (қазақ тілі)</option>
                                 <option value="38">Korean (한국어)</option>
                                 <option value="39">Latvian (latviešu valoda)</option>
                                 <option value="40">Lithuanian (lietuvių kalba)</option>
                                 <option value="41">Malay (Bahasa Melayu)</option>
                                 <option value="42">Romanian (românește)</option>
                                 <option value="43">Norwegian (norsk)</option>
                                 <option value="44">Urdu (اُردُو)</option>
                                 <option value="45">Punjabi (ਪੰਜਾਬੀپن٘جابی)</option>
                                 <option value="46">Filipino (Wikang Filipino)</option>
                                 <option value="47">Polish (polski)</option>
                                 <option value="48">Slovene (slovenščina)</option>
                                 <option value="49">Sinhala (සිංහල)</option>
                                 <option value="50">Tamil (தமிழ்)</option>
                                 <option value="51">Thai (ภาษาไทย)</option>
                                 <option value="52">Ukrainian (украї́нська мо́ва)</option>
                                 <option value="53">Uzbek (oʻzbek tili)</option>
                                 <option value="54">Vietnamese (Tiếng Việt)</option>
                                 <option value="55">English (Australia)</option>
                                 <option value="56">Deutsch (Austria)</option>
                                 <option value="57">Dutch (Belgium)</option>
                                 <option value="58">Français (Belgium)</option>
                                 <option value="59">English (Canada)</option>
                                 <option value="60">Française (Canada)</option>
                                 <option value="61">English (India)</option>
                                 <option value="62">English (Ireland)</option>
                                 <option value="63">English (Philippines)</option>
                                 <option value="64">Dutch (Switzerland)</option>
                              </select>
                           </div>
                        </div>
                        <div class="from-input">
                           <label>Time Zone</label>
                           <div class="select">
                              <select name="time_zone" id="time_zone">
                                 <option value="">Select a Timezone...</option>
                                 <option value="(GMT-11:00) Midway Island" <?php if($user_details->time_zone == '(GMT-11:00) Midway Island') echo "selected"; ?>>(GMT-11:00) Midway Island</option>
                                 <option value="2">(GMT-11:00) Samoa</option>
                                 <option value="3">(GMT-10:00) Hawaii</option>
                                 <option value="4">(GMT-09:00) Alaska</option>
                                 <option value="5">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                 <option value="6">(GMT-07:00) Tijuana</option>
                                 <option value="7">(GMT-07:00) Arizona</option>
                                 <option value="8">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                 <option value="9">(GMT-07:00) Chihuahua</option>
                                 <option value="10">(GMT-07:00) Mazatlan</option>
                                 <option value="11">(GMT-06:00) Mexico City</option>
                                 <option value="12">(GMT-06:00) Monterrey</option>
                                 <option value="13">(GMT-06:00) Saskatchewan</option>
                                 <option value="14">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                 <option value="15">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                 <option value="16">(GMT-05:00) Indiana (East)</option>
                                 <option value="17">(GMT-05:00) Bogota</option>
                                 <option value="18">(GMT-05:00) Lima</option>
                                 <option value="19">(GMT-04:00) Caracas</option>
                                 <option value="20">(GMT-04:00) Atlantic Time (Canada)</option>
                                 <option value="21">(GMT-04:00) La Paz</option>
                                 <option value="22">(GMT-04:00) Santiago</option>
                                 <option value="23">(GMT-03:00) Newfoundland</option>
                                 <option value="24">(GMT-03:00) Buenos Aires</option>
                                 <option value="25">(GMT-03:00) Greenland</option>
                                 <option value="26">(GMT-02:00) Stanley</option>
                                 <option value="27">(GMT-01:00) Azores</option>
                                 <option value="28">(GMT-01:00) Cape Verde Is.</option>
                                 <option value="29">(GMT) Casablanca</option>
                                 <option value="30">(GMT) Dublin</option>
                                 <option value="31">(GMT) Lisbon</option>
                                 <option value="32">(GMT) London</option>
                                 <option value="33">(GMT) Monrovia</option>
                                 <option value="34">(GMT+01:00) Amsterdam</option>
                                 <option value="35">(GMT+01:00) Belgrade</option>
                                 <option value="36">(GMT+01:00) Berlin</option>
                                 <option value="37">(GMT+01:00) Bratislava</option>
                                 <option value="38">(GMT+01:00) Brussels</option>
                                 <option value="39">(GMT+01:00) Budapest</option>
                                 <option value="40">(GMT+01:00) Copenhagen</option>
                                 <option value="41">(GMT+01:00) Ljubljana</option>
                                 <option value="42">(GMT+01:00) Madrid</option>
                                 <option value="43">(GMT+01:00) Paris</option>
                                 <option value="44">(GMT+01:00) Prague</option>
                                 <option value="45">(GMT+01:00) Rome</option>
                                 <option value="46">(GMT+01:00) Sarajevo</option>
                                 <option value="47">(GMT+01:00) Skopje</option>
                                 <option value="48">(GMT+01:00) Stockholm</option>
                                 <option value="49">(GMT+01:00) Vienna</option>
                                 <option value="50">(GMT+01:00) Warsaw</option>
                                 <option value="51">(GMT+01:00) Zagreb</option>
                                 <option value="52">(GMT+02:00) Athens</option>
                                 <option value="53">(GMT+02:00) Bucharest</option>
                                 <option value="54">(GMT+02:00) Cairo</option>
                                 <option value="55">(GMT+02:00) Harare</option>
                                 <option value="56">(GMT+02:00) Helsinki</option>
                                 <option value="57">(GMT+02:00) Istanbul</option>
                                 <option value="58">(GMT+02:00) Jerusalem</option>
                                 <option value="59">(GMT+02:00) Kyiv</option>
                                 <option value="60">(GMT+02:00) Minsk</option>
                                 <option value="61">(GMT+02:00) Riga</option>
                                 <option value="62">(GMT+02:00) Sofia</option>
                                 <option value="63">(GMT+02:00) Tallinn</option>
                                 <option value="64">(GMT+02:00) Vilnius</option>
                                 <option value="65">(GMT+03:00) Baghdad</option>
                                 <option value="66">(GMT+03:00) Kuwait</option>
                                 <option value="67">(GMT+03:00) Nairobi</option>
                                 <option value="68">(GMT+03:00) Riyadh</option>
                                 <option value="69">(GMT+03:00) Moscow</option>
                                 <option value="70">(GMT+03:30) Tehran</option>
                                 <option value="71">(GMT+04:00) Baku</option>
                                 <option value="72">(GMT+04:00) Volgograd</option>
                                 <option value="73">(GMT+04:00) Muscat</option>
                                 <option value="74">(GMT+04:00) Tbilisi</option>
                                 <option value="75">(GMT+04:00) Yerevan</option>
                                 <option value="76">(GMT+04:30) Kabul</option>
                                 <option value="77">(GMT+05:00) Karachi</option>
                                 <option value="78">(GMT+05:00) Tashkent</option>
                                 <option value="79">(GMT+05:30) Kolkata</option>
                                 <option value="80">(GMT+05:45) Kathmandu</option>
                                 <option value="81">(GMT+06:00) Ekaterinburg</option>
                                 <option value="82">(GMT+06:00) Almaty</option>
                                 <option value="83">(GMT+06:00) Dhaka</option>
                                 <option value="84">(GMT+07:00) Novosibirsk</option>
                                 <option value="85">(GMT+07:00) Bangkok</option>
                                 <option value="86">(GMT+07:00) Jakarta</option>
                                 <option value="87">(GMT+08:00) Krasnoyarsk</option>
                                 <option value="88">(GMT+08:00) Chongqing</option>
                                 <option value="89">(GMT+08:00) Hong Kong</option>
                                 <option value="90">(GMT+08:00) Kuala Lumpur</option>
                                 <option value="91">(GMT+08:00) Perth</option>
                                 <option value="92">(GMT+08:00) Singapore</option>
                                 <option value="93">(GMT+08:00) Taipei</option>
                                 <option value="94">(GMT+08:00) Ulaan Bataar</option>
                                 <option value="95">(GMT+08:00) Urumqi</option>
                                 <option value="96">(GMT+09:00) Irkutsk</option>
                                 <option value="97">(GMT+09:00) Seoul</option>
                                 <option value="98">(GMT+09:00) Tokyo</option>
                                 <option value="99">(GMT+09:30) Adelaide</option>
                                 <option value="100">(GMT+09:30) Darwin</option>
                                 <option value="101">(GMT+10:00) Yakutsk</option>
                                 <option value="102">(GMT+10:00) Brisbane</option>
                                 <option value="103">(GMT+10:00) Canberra</option>
                                 <option value="104">(GMT+10:00) Guam</option>
                                 <option value="105">(GMT+10:00) Hobart</option>
                                 <option value="106">(GMT+10:00) Melbourne</option>
                                 <option value="107">(GMT+10:00) Port Moresby</option>
                                 <option value="108">(GMT+10:00) Sydney</option>
                                 <option value="109">(GMT+11:00) Vladivostok</option>
                                 <option value="110">(GMT+12:00) Magadan</option>
                                 <option value="111">(GMT+12:00) Auckland</option>
                                 <option value="112">(GMT+12:00) Fiji</option>
                              </select>
                           </div>
                        </div>
                        <div class="from-input">
                           <label>Currency</label>
                           <div class="select">
                              <select name="currency" id="currency">
                                 <option value="">Select a Currency</option>
                                 <option value="US Dollar" <?php if($user_details->currency == 'US Dollar') echo "selected"; ?>>US Dollar [$]</option>
                                 <option value="2">Canadian Dollar [$]</option>
                                 <option value="3">British Pound [£]</option>
                                 <option value="4">Australian Dollar [£]</option>
                                 <option value="5">Euro [€]</option>
                                 <option value="6">Swiss Franc [₣]</option>
                                 <option value="7">Chinese Renminbi [元]</option>
                                 <option value="8">Hong Kong Dollar [元]</option>
                                 <option value="9">Philippines Peso [₱]</option>
                                 <option value="10">Polish Zloty [zł]</option>
                                 <option value="11">Sweden Krona [kr]</option>
                                 <option value="12">Singapore Dollar [$]</option>
                                 <option value="13">Taiwanese Dollar [NT$]</option>
                                 <option value="14">Malaysian Ringgit [RM]</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="save-profile-button">
                        <button type="submit" class="disable-submit">Save</button>
                     </div>
                  </form>
                  <div class="submit_profile_details_res"></div>
               </div>
            </div>
            <div class="overview-saction">
               <div class="overview-header">
                  <h2>Connected Accounts</h2>
               </div>
               <div class="ebay-account-box">
                  <div class="ebay-account-box-left">
                     <img src="{{ asset('themes/tailwind/customer/assets/images/ebay.svg') }}" />
                     <div class="abay-contnent">
                        <span>eBay</span>
                        <p>Buy, sell, and browse millions of items on the go</p>
                     </div>
                  </div>
                  <div class="ebay-account-box-right">
                     <div class="radio-box">
                        <label class="switch" for="ebay_checkbox">
                           <input type="checkbox" id="ebay_checkbox" name="ebay_checkbox" class="ebay_checkbox" <?php if($user_details->is_ebay_connection == "enable"){ echo 'checked="checked"'; } ?>>
                           <div class="slider round"></div>
                        </label>
                     </div>
                     <div class="popup-box is_ebay_connection" <?php if($user_details->is_ebay_connection != "enable"){ echo 'style="display:none;"'; } ?>>
                        <a href="#modal-10" class="link"><span>+</span> New Connection</a>
                        <div data-ml-modal id="modal-10">
                           <a href="#!" class="modal-overlay"></a>
                           <div class="modal-dialog modal-dialog-lg">
                              <a href="#!" class="modal-close">&times;</a>
                              <div class="header-modal">
                                 <h2>Add new eBay Connection</h2>
                              </div>
                              <div class="modal-content newspaper">
                                 <form class="form-popup" id="submit_ebay_connetion" action="#" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-popup-row">
                                       <label>User Name</label>
                                       <input type="text" name="ebay_user_name" id="ebay_user_name"
                                          placeholder="" required />
                                    </div>
                                    <div class="input-popup-row">
                                       <label>Marketplace</label>
                                       <div class="select">
                                          <select name="ebay_user_marketplace" id="ebay_user_marketplace"
                                             required>
                                             <option value="Australia -- ebay.com.au">Australia --
                                                ebay.com.au
                                             </option>
                                             <option value="Austria -- ebay.at">Austria -- ebay.at
                                             </option>
                                             <option value="Belgium (Française) -- befr.ebay.be">Belgium
                                                (Française) -- befr.ebay.be
                                             </option>
                                             <option value="Belgium (Nederlandse) -- benl.ebay.be">
                                                Belgium (Nederlandse) -- benl.ebay.be
                                             </option>
                                             <option value="Canada (Française) -- cafr.ebay.ca">Canada
                                                (Française) -- cafr.ebay.ca
                                             </option>
                                             <option value="Canada -- ebay.ca">Canada -- ebay.ca</option>
                                             <option value="France -- ebay.fr">France -- ebay.fr</option>
                                             <option value="Germany -- ebay.de">Germany -- ebay.de
                                             </option>
                                             <option value="Great Britain -- ebay.co.uk">Great Britain --
                                                ebay.co.uk
                                             </option>
                                             <option value="Hong Kong -- ebay.com.hk">Hong Kong --
                                                ebay.com.hk
                                             </option>
                                             <option value="India -- ebay.in">India -- ebay.in</option>
                                             <option value="Ireland -- ebay.ie">Ireland -- ebay.ie
                                             </option>
                                             <option value="Italy -- ebay.it">Italy -- ebay.it</option>
                                             <option value="Malaysia -- ebay.com.my">Malaysia --
                                                ebay.com.my
                                             </option>
                                             <option value="Netherlands -- ebay.nl">Netherlands --
                                                ebay.nl
                                             </option>
                                             <option value="Philippines -- ebay.ph">Philippines --
                                                ebay.ph
                                             </option>
                                             <option value="Poland -- ebay.pl">Poland -- ebay.pl</option>
                                             <option value="Singapore -- ebay.com.sg">Singapore --
                                                ebay.com.sg
                                             </option>
                                             <option value="Spain -- ebay.es">Spain -- ebay.es</option>
                                             <option value="Switzerland -- ebay.ch">Switzerland --
                                                ebay.ch
                                             </option>
                                             <option value="United States -- ebay.com">United States --
                                                ebay.com
                                             </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="text-popup">
                                       <span>Redirect to eBay</span>
                                       <p>You will be redirected to eBay. Please verify</p>
                                    </div>
                                    <div class="from-button">
                                       <button class="close-btn" type="button">Close</button>
                                       <button class="save-btn disable-submit"
                                          type="submit">Submit</button>
                                       <div class="submit_ebay_connetion_res"></div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="overview-saction">
               <div class="overview-header">
                  <h2>Delete Account</h2>
               </div>
               <div class="delete-account-box">
                  <div class="delete-account-box-inner">
                     <img src="{{ asset('themes/tailwind/customer/assets/images/alert-icon.svg') }}" />
                     <div class="you-are-text">
                        <span>You Are Deactivating Your Account</span>
                        <p>For extra security, this requires you to confirm deletion with deactivation code,</p>
                     </div>
                  </div>
                  <div class="delete-check-box">
                     <div class="form-group">
                        <input type="checkbox" id="html">
                        <label for="html">I confirm my account deactivation</label>
                     </div>
                  </div>
                  <div class="delete-button-box">
                     <button>Delete Account</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection