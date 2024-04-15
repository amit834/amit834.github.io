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
                                             <a href="#!" class="modal-close close-a-tage">Close</a>
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
                                             <a href="#!" class="modal-close close-a-tage">Close</a>
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
                     <div class="upload-profile">
                        <div class="avatar-upload">
                           <div class="avatar-edit">
                              <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                              <label for="imageUpload"></label>
                           </div>
                           <div class="avatar-preview">
                              @if($user_details->avatar)
                              <div id="imagePreview" style="background-image: url(<?php echo asset('storage/'. $user_details->avatar); ?>);"></div>
                              @else
                              <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);"></div>
                              @endif
                           </div>
                        </div>
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
                                 <option value="Andorra" <?php if($user_details->country == 'Andorra') echo"selected";?>>Andorra</option>
                                 <option value="Angola" <?php if($user_details->country == 'Angola') echo"selected";?>>Angola</option>
                                 <option value="Antigua and Barbuda" <?php if($user_details->country == 'Antigua and Barbuda') echo"selected";?>>Antigua and Barbuda</option>
                                 <option value="Argentina" <?php if($user_details->country == 'Argentina') echo"selected";?>>Argentina</option>
                                 <option value="Armenia" <?php if($user_details->country == 'Armenia') echo"selected";?>>Armenia</option>
                                 <option value="Australia" <?php if($user_details->country == 'Australia') echo"selected";?>>Australia</option>
                                 <option value="Austria" <?php if($user_details->country == 'Austria') echo"selected";?>>Austria</option>
                                 <option value="Azerbaijan" <?php if($user_details->country == 'Azerbaijan') echo"selected";?>>Azerbaijan</option>
                                 <option value="Bahamas" <?php if($user_details->country == 'Bahamas') echo"selected";?>>Bahamas</option>
                                 <option value="Bahrain" <?php if($user_details->country == 'Bahrain') echo"selected";?>>Bahrain</option>
                                 <option value="Bangladesh" <?php if($user_details->country == 'Bangladesh') echo"selected";?>>Bangladesh</option>
                                 <option value="Barbados" <?php if($user_details->country == 'Barbados') echo"selected";?>>Barbados</option>
                                 <option value="Belarus" <?php if($user_details->country == 'Belarus') echo"selected";?>>Belarus</option>
                                 <option value="Belgium" <?php if($user_details->country == 'Belgium') echo"selected";?>>Belgium</option>
                                 <option value="Belize" <?php if($user_details->country == 'Belize') echo"selected";?>>Belize</option>
                                 <option value="Benin" <?php if($user_details->country == 'Benin') echo"selected";?>>Benin</option>
                                 <option value="Bhutan" <?php if($user_details->country == 'Bhutan') echo"selected";?>>Bhutan</option>
                                 <option value="Bolivia (Plurinational State of)" <?php if($user_details->country == 'Bolivia (Plurinational State of)') echo"selected";?>>Bolivia (Plurinational State of)</option>
                                 <option value="Bosnia and Herzegovina" <?php if($user_details->country == 'Bosnia and Herzegovina') echo"selected";?>>Bosnia and Herzegovina</option>
                                 <option value="Botswana" <?php if($user_details->country == 'Botswana') echo"selected";?>>Botswana</option>
                                 <option value="Brazil" <?php if($user_details->country == 'Brazil') echo"selected";?>>Brazil</option>
                                 <option value="Brunei Darussalam" <?php if($user_details->country == 'Brunei Darussalam') echo"selected";?>>Brunei Darussalam</option>
                                 <option value="Bulgaria" <?php if($user_details->country == 'Bulgaria') echo"selected";?>>Bulgaria</option>
                                 <option value="Burkina Faso" <?php if($user_details->country == 'Burkina Faso') echo"selected";?>>Burkina Faso</option>
                                 <option value="Burundi" <?php if($user_details->country == 'Burundi') echo"selected";?>>Burundi</option>
                                 <option value="Cabo Verde" <?php if($user_details->country == 'Cabo Verde') echo"selected";?>>Cabo Verde</option>
                                 <option value="Cambodia" <?php if($user_details->country == 'Cambodia') echo"selected";?>>Cambodia</option>
                                 <option value="Cameroon" <?php if($user_details->country == 'Cameroon') echo"selected";?>>Cameroon</option>
                                 <option value="Canada" <?php if($user_details->country == 'Canada') echo"selected";?>>Canada</option>
                                 <option value="Central African Republic" <?php if($user_details->country == 'Central African Republic') echo"selected";?>>Central African Republic</option>
                                 <option value="Chad" <?php if($user_details->country == 'Chad') echo"selected";?>>Chad</option>
                                 <option value="Chile" <?php if($user_details->country == 'Chile') echo"selected";?>>Chile</option>
                                 <option value="China" <?php if($user_details->country == 'China') echo"selected";?>>China</option>
                                 <option value="Colombia" <?php if($user_details->country == 'Colombia') echo"selected";?>>Colombia</option>
                                 <option value="Comoros" <?php if($user_details->country == 'Comoros') echo"selected";?>>Comoros</option>
                                 <option value="Congo" <?php if($user_details->country == 'Congo') echo"selected";?>>Congo</option>
                                 <option value="Congo Democratic Republic of the" <?php if($user_details->country == 'Congo Democratic Republic of the') echo"selected";?>>Congo Democratic Republic of the</option>
                                 <option value="Costa Rica" <?php if($user_details->country == 'Costa Rica') echo"selected";?>>Costa Rica</option>
                                 <option value="Côte d Ivoire" <?php if($user_details->country == 'Côte d Ivoire') echo"selected";?>>Côte d'Ivoire</option>
                                 <option value="Croatia" <?php if($user_details->country == 'Croatia') echo"selected";?>>Croatia</option>
                                 <option value="Cuba" <?php if($user_details->country == 'Cuba') echo"selected";?>>Cuba</option>
                                 <option value="Cyprus" <?php if($user_details->country == 'Cyprus') echo"selected";?>>Cyprus</option>
                                 <option value="Czechia" <?php if($user_details->country == 'Czechia') echo"selected";?>>Czechia</option>
                                 <option value="Denmark" <?php if($user_details->country == 'Denmark') echo"selected";?>>Denmark</option>
                                 <option value="Djibouti" <?php if($user_details->country == 'Djibouti') echo"selected";?>>Djibouti</option>
                                 <option value="Dominica" <?php if($user_details->country == 'Dominica') echo"selected";?>>Dominica</option>
                                 <option value="Dominican Republic" <?php if($user_details->country == 'Dominican Republic') echo"selected";?>>Dominican Republic</option>
                                 <option value="Ecuador" <?php if($user_details->country == 'Ecuador') echo"selected";?>>Ecuador</option>
                                 <option value="Egypt" <?php if($user_details->country == 'Egypt') echo"selected";?>>Egypt</option>
                                 <option value="El Salvador" <?php if($user_details->country == 'El Salvador') echo"selected";?>>El Salvador</option>
                                 <option value="Equatorial Guinea" <?php if($user_details->country == 'Equatorial Guinea') echo"selected";?>>Equatorial Guinea</option>
                                 <option value="Eritrea" <?php if($user_details->country == 'Eritrea') echo"selected";?>>Eritrea</option>
                                 <option value="Estonia" <?php if($user_details->country == 'Estonia') echo"selected";?>>Estonia</option>
                                 <option value="Eswatini" <?php if($user_details->country == 'Eswatini') echo"selected";?>>Eswatini</option>
                                 <option value="Ethiopia" <?php if($user_details->country == 'Ethiopia') echo"selected";?>>Ethiopia</option>
                                 <option value="Fiji" <?php if($user_details->country == 'Fiji') echo"selected";?>>Fiji</option>
                                 <option value="Finland" <?php if($user_details->country == 'Finland') echo"selected";?>>Finland</option>
                                 <option value="France" <?php if($user_details->country == 'France') echo"selected";?>>France</option>
                                 <option value="Gabon" <?php if($user_details->country == 'Gabon') echo"selected";?>>Gabon</option>
                                 <option value="Gambia" <?php if($user_details->country == 'Gambia') echo"selected";?>>Gambia</option>
                                 <option value="Georgia" <?php if($user_details->country == 'Georgia') echo"selected";?>>Georgia</option>
                                 <option value="Germany" <?php if($user_details->country == 'Germany') echo"selected";?>>Germany</option>
                                 <option value="Ghana" <?php if($user_details->country == 'Ghana') echo"selected";?>>Ghana</option>
                                 <option value="Greece" <?php if($user_details->country == 'Greece') echo"selected";?>>Greece</option>
                                 <option value="Grenada" <?php if($user_details->country == 'Grenada') echo"selected";?>>Grenada</option>
                                 <option value="Guatemala" <?php if($user_details->country == 'Guatemala') echo"selected";?>>Guatemala</option>
                                 <option value="Guinea" <?php if($user_details->country == 'Guinea') echo"selected";?>>Guinea</option>
                                 <option value="Guinea-Bissau" <?php if($user_details->country == 'Guinea-Bissau') echo"selected";?>>Guinea-Bissau</option>
                                 <option value="Guyana" <?php if($user_details->country == 'Guyana') echo"selected";?>>Guyana</option>
                                 <option value="Haiti" <?php if($user_details->country == 'Haiti') echo"selected";?>>Haiti</option>
                                 <option value="Honduras" <?php if($user_details->country == 'Honduras') echo"selected";?>>Honduras</option>
                                 <option value="Hungary" <?php if($user_details->country == 'Hungary') echo"selected";?>>Hungary</option>
                                 <option value="Iceland" <?php if($user_details->country == 'Iceland') echo"selected";?>>Iceland</option>
                                 <option value="India" <?php if($user_details->country == 'India') echo"selected";?>>India</option>
                                 <option value="Indonesia" <?php if($user_details->country == 'Indonesia') echo"selected";?>>Indonesia</option>
                                 <option value="Iran (Islamic Republic of" <?php if($user_details->country == 'Iran (Islamic Republic of') echo"selected";?>>Iran (Islamic Republic of)</option>
                                 <option value="Iraq" <?php if($user_details->country == 'Iraq') echo"selected";?>>Iraq</option>
                                 <option value="Ireland" <?php if($user_details->country == 'Ireland') echo"selected";?>>Ireland</option>
                                 <option value="Israel" <?php if($user_details->country == 'Israel') echo"selected";?>>Israel</option>
                                 <option value="Italy" <?php if($user_details->country == 'Italy') echo"selected";?>>Italy</option>
                                 <option value="Jamaica" <?php if($user_details->country == 'Jamaica') echo"selected";?>>Jamaica</option>
                                 <option value="Japan" <?php if($user_details->country == 'Japan') echo"selected";?>>Japan</option>
                                 <option value="Jordan" <?php if($user_details->country == 'Jordan') echo"selected";?>>Jordan</option>
                                 <option value="Kazakhstan" <?php if($user_details->country == 'Kazakhstan') echo"selected";?>>Kazakhstan</option>
                                 <option value="Kenya" <?php if($user_details->country == 'Kenya') echo"selected";?>>Kenya</option>
                                 <option value="Kiribati" <?php if($user_details->country == 'Kiribati') echo"selected";?>>Kiribati</option>
                                 <option value="Korea (Democratic People s Republic of)" <?php if($user_details->country == 'Korea (Democratic People s Republic of)') echo"selected";?>>Korea (Democratic People's Republic of)</option>
                                 <option value="Korea Republic of" <?php if($user_details->country == 'Korea Republic of') echo"selected";?>>Korea Republic of</option>
                                 <option value="Kuwait" <?php if($user_details->country == 'Kuwait') echo"selected";?>>Kuwait</option>
                                 <option value="Kyrgyzstan" <?php if($user_details->country == 'Kyrgyzstan') echo"selected";?>>Kyrgyzstan</option>
                                 <option value="Lao People s Democratic Republic" <?php if($user_details->country == 'Lao People s Democratic Republic') echo"selected";?>>Lao People's Democratic Republic</option>
                                 <option value="Latvia" <?php if($user_details->country == 'Latvia') echo"selected";?>>Latvia</option>
                                 <option value="Lebanon" <?php if($user_details->country == 'Lebanon') echo"selected";?>>Lebanon</option>
                                 <option value="Lesotho" <?php if($user_details->country == 'Lesotho') echo"selected";?>>Lesotho</option>
                                 <option value="Liberia" <?php if($user_details->country == 'Liberia') echo"selected";?>>Liberia</option>
                                 <option value="Libya" <?php if($user_details->country == 'Libya') echo"selected";?>>Libya</option>
                                 <option value="Liechtenstein" <?php if($user_details->country == 'Liechtenstein') echo"selected";?>>Liechtenstein</option>
                                 <option value="Lithuania" <?php if($user_details->country == 'Lithuania') echo"selected";?>>Lithuania</option>
                                 <option value="Luxembourg" <?php if($user_details->country == 'Luxembourg') echo"selected";?>>Luxembourg</option>
                                 <option value="Madagascar" <?php if($user_details->country == 'Madagascar') echo"selected";?>>Madagascar</option>
                                 <option value="Malawi" <?php if($user_details->country == 'Malawi') echo"selected";?>>Malawi</option>
                                 <option value="Malaysia" <?php if($user_details->country == 'Malaysia') echo"selected";?>>Malaysia</option>
                                 <option value="Maldives" <?php if($user_details->country == 'Maldives') echo"selected";?>>Maldives</option>
                                 <option value="Mali" <?php if($user_details->country == 'Mali') echo"selected";?>>Mali</option>
                                 <option value="Malta" <?php if($user_details->country == 'Malta') echo"selected";?>>Malta</option>
                                 <option value="Marshall Islands" <?php if($user_details->country == 'Marshall Islands') echo"selected";?>>Marshall Islands</option>
                                 <option value="Mauritania" <?php if($user_details->country == 'Mauritania') echo"selected";?>>Mauritania</option>
                                 <option value="Mauritius" <?php if($user_details->country == 'Mauritius') echo"selected";?>>Mauritius</option>
                                 <option value="Mexico" <?php if($user_details->country == 'Mexico') echo"selected";?>>Mexico</option>
                                 <option value="Micronesia (Federated States of)" <?php if($user_details->country == 'Micronesia (Federated States of)') echo"selected";?>>Micronesia (Federated States of)</option>
                                 <option value="Moldova Republic of" <?php if($user_details->country == 'Moldova Republic of') echo"selected";?>>Moldova Republic of</option>
                                 <option value="Monaco" <?php if($user_details->country == 'Monaco') echo"selected";?>>Monaco</option>
                                 <option value="Mongolia" <?php if($user_details->country == 'Mongolia') echo"selected";?>>Mongolia</option>
                                 <option value="Montenegro" <?php if($user_details->country == 'Montenegro') echo"selected";?>>Montenegro</option>
                                 <option value="Morocco" <?php if($user_details->country == 'Morocco') echo"selected";?>>Morocco</option>
                                 <option value="Mozambique" <?php if($user_details->country == 'Mozambique') echo"selected";?>>Mozambique</option>
                                 <option value="Myanmar" <?php if($user_details->country == 'Myanmar') echo"selected";?>>Myanmar</option>
                                 <option value="Namibia" <?php if($user_details->country == 'Namibia') echo"selected";?>>Namibia</option>
                                 <option value="Nauru" <?php if($user_details->country == 'Nauru') echo"selected";?>>Nauru</option>
                                 <option value="Nepal" <?php if($user_details->country == 'Nepal') echo"selected";?>>Nepal</option>
                                 <option value="Netherlands" <?php if($user_details->country == 'Netherlands') echo"selected";?>>Netherlands</option>
                                 <option value="New Zealand" <?php if($user_details->country == 'New Zealand') echo"selected";?>>New Zealand</option>
                                 <option value="Nicaragua" <?php if($user_details->country == 'Nicaragua') echo"selected";?>>Nicaragua</option>
                                 <option value="Niger" <?php if($user_details->country == 'Niger') echo"selected";?>>Niger</option>
                                 <option value="Nigeria" <?php if($user_details->country == 'Nigeria') echo"selected";?>>Nigeria</option>
                                 <option value="North Macedonia" <?php if($user_details->country == 'North Macedonia') echo"selected";?>>North Macedonia</option>
                                 <option value="Norway" <?php if($user_details->country == 'Norway') echo"selected";?>>Norway</option>
                                 <option value="Oman" <?php if($user_details->country == 'Oman') echo"selected";?>>Oman</option>
                                 <option value="Pakistan" <?php if($user_details->country == 'Pakistan') echo"selected";?>>Pakistan</option>
                                 <option value="Palau" <?php if($user_details->country == 'Palau') echo"selected";?>>Palau</option>
                                 <option value="Panama" <?php if($user_details->country == 'Panama') echo"selected";?>>Panama</option>
                                 <option value="Papua New Guinea" <?php if($user_details->country == 'Papua New Guinea') echo"selected";?>>Papua New Guinea</option>
                                 <option value="Paraguay" <?php if($user_details->country == 'Paraguay') echo"selected";?>>Paraguay</option>
                                 <option value="Peru" <?php if($user_details->country == 'Peru') echo"selected";?>>Peru</option>
                                 <option value="Philippines" <?php if($user_details->country == 'Philippines') echo"selected";?>>Philippines</option>
                                 <option value="Poland" <?php if($user_details->country == 'Poland') echo"selected";?>>Poland</option>
                                 <option value="Portugal" <?php if($user_details->country == 'Portugal') echo"selected";?>>Portugal</option>
                                 <option value="Qatar" <?php if($user_details->country == 'Qatar') echo"selected";?>>Qatar</option>
                                 <option value="Romania" <?php if($user_details->country == 'Romania') echo"selected";?>>Romania</option>
                                 <option value="Russian Federation" <?php if($user_details->country == 'Russian Federation') echo"selected";?>>Russian Federation</option>
                                 <option value="Rwanda" <?php if($user_details->country == 'Rwanda') echo"selected";?>>Rwanda</option>
                                 <option value="Saint Kitts and Nevis" <?php if($user_details->country == 'Saint Kitts and Nevis') echo"selected";?>>Saint Kitts and Nevis</option>
                                 <option value="Saint Lucia" <?php if($user_details->country == 'Saint Lucia') echo"selected";?>>Saint Lucia</option>
                                 <option value="Saint Vincent and the Grenadines" <?php if($user_details->country == 'Saint Vincent and the Grenadines') echo"selected";?>>Saint Vincent and the Grenadines</option>
                                 <option value="Samoa" <?php if($user_details->country == 'Samoa') echo"selected";?>>Samoa</option>
                                 <option value="San Marino" <?php if($user_details->country == 'San Marino') echo"selected";?>>San Marino</option>
                                 <option value="Sao Tome and Principe" <?php if($user_details->country == 'Sao Tome and Principe') echo"selected";?>>Sao Tome and Principe</option>
                                 <option value="Saudi Arabia" <?php if($user_details->country == 'Saudi Arabia') echo"selected";?>>Saudi Arabia</option>
                                 <option value="Senegal" <?php if($user_details->country == 'Senegal') echo"selected";?>>Senegal</option>
                                 <option value="Serbia" <?php if($user_details->country == 'Serbia') echo"selected";?>>Serbia</option>
                                 <option value="Seychelles" <?php if($user_details->country == 'Seychelles') echo"selected";?>>Seychelles</option>
                                 <option value="Sierra Leone" <?php if($user_details->country == 'Sierra Leone') echo"selected";?>>Sierra Leone</option>
                                 <option value="Singapore" <?php if($user_details->country == 'Singapore') echo"selected";?>>Singapore</option>
                                 <option value="Slovakia" <?php if($user_details->country == 'Slovakia') echo"selected";?>>Slovakia</option>
                                 <option value="Slovenia" <?php if($user_details->country == 'Slovenia') echo"selected";?>>Slovenia</option>
                                 <option value="Solomon Islands" <?php if($user_details->country == 'Solomon Islands') echo"selected";?>>Solomon Islands</option>
                                 <option value="Somalia" <?php if($user_details->country == 'Somalia') echo"selected";?>>Somalia</option>
                                 <option value="South Africa" <?php if($user_details->country == 'South Africa') echo"selected";?>>South Africa</option>
                                 <option value="South Sudan" <?php if($user_details->country == 'South Sudan') echo"selected";?>>South Sudan</option>
                                 <option value="Spain" <?php if($user_details->country == 'Spain') echo"selected";?>>Spain</option>
                                 <option value="Sri Lanka" <?php if($user_details->country == 'Sri Lanka') echo"selected";?>>Sri Lanka</option>
                                 <option value="Sudan" <?php if($user_details->country == 'Sudan') echo"selected";?>>Sudan</option>
                                 <option value="Suriname" <?php if($user_details->country == 'Suriname') echo"selected";?>>Suriname</option>
                                 <option value="Sweden" <?php if($user_details->country == 'Sweden') echo"selected";?>>Sweden</option>
                                 <option value="Switzerland" <?php if($user_details->country == 'Switzerland') echo"selected";?>>>Switzerland</option>
                                 <option value="Syrian Arab Republic" <?php if($user_details->country == 'Syrian Arab Republic') echo"selected";?>>Syrian Arab Republic</option>
                                 <option value="Tajikistan" <?php if($user_details->country == 'Tajikistan') echo"selected";?>>Tajikistan</option>
                                 <option value="Tanzania United Republic of" <?php if($user_details->country == 'Tanzania United Republic of') echo"selected";?>>Tanzania United Republic of</option>
                                 <option value="Thailand" <?php if($user_details->country == 'Thailand') echo"selected";?>>Thailand</option>
                                 <option value="Timor-Leste" <?php if($user_details->country == 'Timor-Leste') echo"selected";?>>Timor-Leste</option>
                                 <option value="Togo" <?php if($user_details->country == 'Togo') echo"selected";?>>Togo</option>
                                 <option value="Tonga" <?php if($user_details->country == 'Tonga') echo"selected";?>>Tonga</option>
                                 <option value="Trinidad and Tobago" <?php if($user_details->country == 'Trinidad and Tobago') echo"selected";?>>Trinidad and Tobago</option>
                                 <option value="Tunisia" <?php if($user_details->country == 'Tunisia') echo"selected";?>>Tunisia</option>
                                 <option value="Turkey" <?php if($user_details->country == 'Turkey') echo"selected";?>>Turkey</option>
                                 <option value="Turkmenistan" <?php if($user_details->country == 'Turkmenistan') echo"selected";?>>Turkmenistan</option>
                                 <option value="Tuvalu" <?php if($user_details->country == 'Tuvalu') echo"selected";?>>Tuvalu</option>
                                 <option value="Uganda" <?php if($user_details->country == 'Uganda') echo"selected";?>>Uganda</option>
                                 <option value="Ukraine" <?php if($user_details->country == 'Ukraine') echo"selected";?>>Ukraine</option>
                                 <option value="United Arab Emirates" <?php if($user_details->country == 'United Arab Emirates') echo"selected";?>>United Arab Emirates</option>
                                 <option value="United Kingdom of Great Britain and Northern Ireland" <?php if($user_details->country == 'United Kingdom of Great Britain and Northern Ireland') echo"selected";?>>United Kingdom of Great Britain and Northern Ireland</option>
                                 <option value="United States of America" <?php if($user_details->country == 'United States of America') echo"selected";?>>United States of America</option>
                                 <option value="Uruguay" <?php if($user_details->country == 'Uruguay') echo"selected";?>>Uruguay</option>
                                 <option value="Uzbekistan" <?php if($user_details->country == 'Uzbekistan') echo"selected";?>>Uzbekistan</option>
                                 <option value="Vanuatu" <?php if($user_details->country == 'Vanuatu') echo"selected";?>>Vanuatu</option>
                                 <option value="Venezuela (Bolivarian Republic of)" <?php if($user_details->country == 'Venezuela (Bolivarian Republic of)') echo"selected";?>>Venezuela (Bolivarian Republic of)</option>
                                 <option value="Viet Nam" <?php if($user_details->country == 'Viet Nam') echo"selected";?>>Viet Nam</option>
                                 <option value="Yemen" <?php if($user_details->country == 'Yemen') echo"selected";?>>Yemen</option>
                                 <option value="Zambia" <?php if($user_details->country == 'Zambia') echo"selected";?>>Zambia</option>
                                 <option value="Zimbabwe" <?php if($user_details->country == 'Zimbabwe') echo"selected";?>>Zimbabwe</option>
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
                                 <option value="Portuguese (Português)" <?php if($user_details->language == 'Portuguese (Português)') echo "selected"; ?>>Portuguese (Português)</option>
                                 <option value="English (USA)" <?php if($user_details->language == 'English (USA)') echo "selected"; ?>>English (USA) </option>
                                 <option value="English (British English)" <?php if($user_details->language == 'English (British English)') echo "selected"; ?>>English (British English)</option>
                                 <option value="Spanish (Español)" <?php if($user_details->language == 'Spanish (Español)') echo "selected"; ?>>Spanish (Español)</option>
                                 <option value="Armenian (հայերէն/հայերեն)" <?php if($user_details->language == 'Armenian (հայերէն/հայերեն)') echo "selected"; ?>>Armenian (հայերէն/հայերեն)</option>
                                 <option value="Russian (Русский)" <?php if($user_details->language == 'Russian (Русский)') echo "selected"; ?>>Russian (Русский)</option>
                                 <option value="German (Deutsch)" <?php if($user_details->language == 'German (Deutsch))') echo "selected"; ?>>German (Deutsch)</option>
                                 <option value="Azerbaijani (Azeri)" <?php if($user_details->language == 'Azerbaijani (Azeri)') echo "selected"; ?>>Azerbaijani (Azeri)</option>
                                 <option value="Bengali (Bangla)" <?php if($user_details->language == 'Bengali (Bangla)') echo "selected"; ?>>Bengali (Bangla)</option>
                                 <option value="Dutch (Nederlands)" <?php if($user_details->language == 'Dutch (Nederlands)') echo "selected"; ?>>Dutch (Nederlands)</option>
                                 <option value="French (Français)" <?php if($user_details->language == 'French (Français)') echo "selected"; ?>>French (Français)</option>
                                 <option value="Bosnian (Bosanski)" <?php if($user_details->language == 'Bosnian (Bosanski)') echo "selected"; ?>>Bosnian (Bosanski)</option>
                                 <option value="Croatian (Hrvatski)" <?php if($user_details->language == 'Croatian (Hrvatski)') echo "selected"; ?>>Croatian (Hrvatski)</option>
                                 <option value="Serbian (српски)" <?php if($user_details->language == 'Serbian (српски)') echo "selected"; ?>>Serbian (српски)</option>
                                 <option value="Bulgarian (български)" <?php if($user_details->language == 'Bulgarian (български)') echo "selected"; ?>>Bulgarian (български)</option>
                                 <option value="Mandarin Chinese (官話 / 官话)" <?php if($user_details->language == 'Mandarin Chinese (官話 / 官话)') echo "selected"; ?>>Mandarin Chinese (官話 / 官话)</option>
                                 <option value="Greek (ελληνικά)" <?php if($user_details->language == 'Greek (ελληνικά)') echo "selected"; ?>>Greek (ελληνικά)</option>
                                 <option value="Turkish (Türkçe)" <?php if($user_details->language == 'Turkish (Türkçe)') echo "selected"; ?>>Turkish (Türkçe)</option>
                                 <option value="Czech (čeština)" <?php if($user_details->language == 'Czech (čeština)') echo "selected"; ?>>Czech (čeština) </option>
                                 <option value="Slovak (slovenčina)" <?php if($user_details->language == 'Slovak (slovenčina)') echo "selected"; ?>>Slovak (slovenčina)</option>
                                 <option value="Danish (dansk)" <?php if($user_details->language == 'Danish (dansk)') echo "selected"; ?>>Danish (dansk)</option>
                                 <option value="Estonian (eesti keel)" <?php if($user_details->language == 'Estonian (eesti keel)') echo "selected"; ?>>Estonian (eesti keel)</option>
                                 <option value="Amharic (አማርኛ)" <?php if($user_details->language == 'Amharic (አማርኛ)') echo "selected"; ?>>Amharic (አማርኛ)</option>
                                 <option value="Finnish (suomen kieli" <?php if($user_details->language == 'Finnish (suomen kieli)') echo "selected"; ?>>Finnish (suomen kieli)</option>
                                 <option value="Swedish (svenska)" <?php if($user_details->language == 'Swedish (svenska)') echo "selected"; ?>>Swedish (svenska)</option>
                                 <option value="Georgian (ქართული ენა)" <?php if($user_details->language == 'Georgian (ქართული ენა)') echo "selected"; ?>>Georgian (ქართული ენა)</option>
                                 <option value="Portuguese (português do Brasil)" <?php if($user_details->language == 'Portuguese (português do Brasil)') echo "selected"; ?>>Portuguese (português do Brasil)</option>
                                 <option value="Hungarian (magyar nyelv)" <?php if($user_details->language == 'Hungarian (magyar nyelv)') echo "selected"; ?>>Hungarian (magyar nyelv)</option>
                                 <option value="Icelandic (íslenska)" <?php if($user_details->language == 'Icelandic (íslenska)') echo "selected"; ?>>Icelandic (íslenska)</option>
                                 <option value="Hindi (हिन्दी)" <?php if($user_details->language == 'Hindi (हिन्दी)') echo "selected"; ?>>Hindi (हिन्दी)</option>
                                 <option value="Indonesian (bahasa Indonesia)" <?php if($user_details->language == 'Indonesian (bahasa Indonesia)') echo "selected"; ?>>Indonesian (bahasa Indonesia)</option>
                                 <option value="Persian (فارسی)" <?php if($user_details->language == 'Persian (فارسی)') echo "selected"; ?>>Persian (فارسی)</option>
                                 <option value="Hebrew (עברית חדשה)" <?php if($user_details->language == 'Hebrew (עברית חדשה)') echo "selected"; ?>>Hebrew (עברית חדשה)</option>
                                 <option value="Japanese (日本語)" <?php if($user_details->language == 'Japanese (日本語)') echo "selected"; ?>>Japanese (日本語)</option>
                                 <option value="Kazakh (қазақ тілі)" <?php if($user_details->language == 'Kazakh (қазақ тілі)') echo "selected"; ?>>Kazakh (қазақ тілі)</option>
                                 <option value="Korean (한국어)" <?php if($user_details->language == 'Korean (한국어)') echo "selected"; ?>>Korean (한국어)</option>
                                 <option value="Latvian (latviešu valoda)" <?php if($user_details->language == 'Latvian (latviešu valoda)') echo "selected"; ?>>Latvian (latviešu valoda)</option>
                                 <option value="Lithuanian (lietuvių kalba)" <?php if($user_details->language == 'Lithuanian (lietuvių kalba)') echo "selected"; ?>>Lithuanian (lietuvių kalba)</option>
                                 <option value="Malay (Bahasa Melayu)" <?php if($user_details->language == 'Malay (Bahasa Melayu)') echo "selected"; ?>>Malay (Bahasa Melayu)</option>
                                 <option value="Romanian (românește)" <?php if($user_details->language == 'Romanian (românește)') echo "selected"; ?>>Romanian (românește)</option>
                                 <option value="Norwegian (norsk)" <?php if($user_details->language == 'Norwegian (norsk)') echo "selected"; ?>>Norwegian (norsk)</option>
                                 <option value="Urdu (اُردُو)" <?php if($user_details->language == 'Urdu (اُردُو)') echo "selected"; ?>>Urdu (اُردُو)</option>
                                 <option value="Punjabi (ਪੰਜਾਬੀپن٘جابی)" <?php if($user_details->language == 'Punjabi (ਪੰਜਾਬੀپن٘جابی)') echo "selected"; ?>>Punjabi (ਪੰਜਾਬੀپن٘جابی)</option>
                                 <option value="Filipino (Wikang Filipino)" <?php if($user_details->language == 'Filipino (Wikang Filipino)') echo "selected"; ?>>Filipino (Wikang Filipino)</option>
                                 <option value="Polish (polski" <?php if($user_details->language == 'Polish (polski') echo "selected"; ?>>Polish (polski)</option>
                                 <option value="Slovene (slovenščina)" <?php if($user_details->language == 'Slovene (slovenščina)') echo "selected"; ?>>Slovene (slovenščina)</option>
                                 <option value="Sinhala (සිංහල)" <?php if($user_details->language == 'Sinhala (සිංහල)') echo "selected"; ?>>Sinhala (සිංහල)</option>
                                 <option value="Tamil (தமிழ்" <?php if($user_details->language == '>Tamil (தமிழ்') echo "selected"; ?>>Tamil (தமிழ்)</option>
                                 <option value="Thai (ภาษาไทย)" <?php if($user_details->language == 'Thai (ภาษาไทย)') echo "selected"; ?>>Thai (ภาษาไทย)</option>
                                 <option value="Ukrainian (украї́нська мо́ва)" <?php if($user_details->language == 'Ukrainian (украї́нська мо́ва)') echo "selected"; ?>>Ukrainian (украї́нська мо́ва)</option>
                                 <option value="Uzbek (oʻzbek tili)" <?php if($user_details->language == 'Uzbek (oʻzbek tili)') echo "selected"; ?>>Uzbek (oʻzbek tili)</option>
                                 <option value="Vietnamese (Tiếng Việt)" <?php if($user_details->language == 'Vietnamese (Tiếng Việt)') echo "selected"; ?>>Vietnamese (Tiếng Việt)</option>
                                 <option value="English (Australia)" <?php if($user_details->language == 'English (Australia)') echo "selected"; ?>>English (Australia)</option>
                                 <option value="Deutsch (Austria)" <?php if($user_details->language == 'Deutsch (Austria)') echo "selected"; ?>>Deutsch (Austria)</option>
                                 <option value="Dutch (Belgium)" <?php if($user_details->language == 'Dutch (Belgium)') echo "selected"; ?>>Dutch (Belgium)</option>
                                 <option value="Français (Belgium)" <?php if($user_details->language == 'Français (Belgium)') echo "selected"; ?>>Français (Belgium)</option>
                                 <option value="English (Canada)" <?php if($user_details->language == 'English (Canada)') echo "selected"; ?>>English (Canada)</option>
                                 <option value="Française (Canada)" <?php if($user_details->language == 'Française (Canada)') echo "selected"; ?>>Française (Canada)</option>
                                 <option value="English (India)" <?php if($user_details->language == 'English (India)') echo "selected"; ?>>English (India)</option>
                                 <option value="English (Ireland)" <?php if($user_details->language == 'English (Ireland)') echo "selected"; ?>>English (Ireland)</option>
                                 <option value="English (Philippines)" <?php if($user_details->language == 'English (Philippines)') echo "selected"; ?>>English (Philippines)</option>
                                 <option value="Dutch (Switzerland)" <?php if($user_details->language == 'Dutch (Switzerland)') echo "selected"; ?>>Dutch (Switzerland)</option>
                              </select>
                           </div>
                        </div>
                        <div class="from-input">
                           <label>Time Zone</label>
                           <div class="select">
                              <select name="time_zone" id="time_zone">
                                 <option value="">Select a Timezone...</option>
                                 <option value="(GMT-11:00) Midway Island" <?php if($user_details->time_zone == '(GMT-11:00) Midway Island') echo "selected"; ?>>(GMT-11:00) Midway Island</option>
                                 <option value="(GMT-11:00) Samoa" <?php if($user_details->time_zone == '(GMT-11:00) Samoa') echo "selected"; ?>>(GMT-11:00) Samoa</option>
                                 <option value="(GMT-10:00) Hawaii" <?php if($user_details->time_zone == '(GMT-10:00) Hawaii') echo "selected"; ?>>(GMT-10:00) Hawaii</option>
                                 <option value="(GMT-09:00) Alaska" <?php if($user_details->time_zone == '((GMT-09:00) Alaska') echo "selected"; ?>>(GMT-09:00) Alaska</option>
                                 <option value="(GMT-08:00) Pacific Time (US &amp; Canada)" <?php if($user_details->time_zone == '((GMT-08:00) Pacific Time (US &amp; Canada)') echo "selected"; ?>>(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                 <option value="(GMT-07:00) Tijuana" <?php if($user_details->time_zone == '((GMT-07:00) Tijuana') echo "selected"; ?>>(GMT-07:00) Tijuana</option>
                                 <option value="(GMT-07:00) Arizona" <?php if($user_details->time_zone == '(GMT-07:00) Arizona') echo "selected"; ?>>(GMT-07:00) Arizona</option>
                                 <option value="(GMT-07:00) Mountain Time (US &amp; Canada)" <?php if($user_details->time_zone == '(GMT-07:00) Mountain Time (US &amp; Canada)') echo "selected"; ?>>(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                 <option value="(GMT-07:00) Chihuahua" <?php if($user_details->time_zone == '(GMT-07:00) Chihuahua') echo "selected"; ?>>(GMT-07:00) Chihuahua</option>
                                 <option value="(GMT-07:00) Mazatlan" <?php if($user_details->time_zone == '(GMT-07:00) Mazatlan') echo "selected"; ?>>(GMT-07:00) Mazatlan</option>
                                 <option value="(GMT-06:00) Mexico City" <?php if($user_details->time_zone == '(GMT-06:00) Mexico City') echo "selected"; ?>>(GMT-06:00) Mexico City</option>
                                 <option value="(GMT-06:00) Monterrey" <?php if($user_details->time_zone == '(GMT-06:00) Monterrey') echo "selected"; ?>>(GMT-06:00) Monterrey</option>
                                 <option value="(GMT-06:00) Saskatchewan" <?php if($user_details->time_zone == '(GMT-06:00) Saskatchewan') echo "selected"; ?>>(GMT-06:00) Saskatchewan</option>
                                 <option value="(GMT-06:00) Central Time (US &amp; Canada)" <?php if($user_details->time_zone == '(GMT-06:00) Central Time (US &amp; Canada)') echo "selected"; ?>>(GMT-06:00) Central Time (US &amp; Canada)</option>
                                 <option value="(GMT-05:00) Eastern Time (US &amp; Canada)" <?php if($user_details->time_zone == '(GMT-05:00) Eastern Time (US &amp; Canada)') echo "selected"; ?>>(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                 <option value="(GMT-05:00) Indiana (East)" <?php if($user_details->time_zone == '(GMT-05:00) Indiana (East)') echo "selected"; ?>>(GMT-05:00) Indiana (East)</option>
                                 <option value="(GMT-05:00) Bogota" <?php if($user_details->time_zone == '(GMT-05:00) Bogota') echo "selected"; ?>>(GMT-05:00) Bogota</option>
                                 <option value="(GMT-05:00) Lima" <?php if($user_details->time_zone == '(GMT-05:00) Lima') echo "selected"; ?>>(GMT-05:00) Lima</option>
                                 <option value="(GMT-04:00) Caracas" <?php if($user_details->time_zone == '(GMT-04:00) Caracas') echo "selected"; ?>>(GMT-04:00) Caracas</option>
                                 <option value="(GMT-04:00) Atlantic Time (Canada)" <?php if($user_details->time_zone == '(GMT-04:00) Atlantic Time (Canada)') echo "selected"; ?>>(GMT-04:00) Atlantic Time (Canada)</option>
                                 <option value="(GMT-04:00) La Paz" <?php if($user_details->time_zone == '(GMT-04:00) La Paz') echo "selected"; ?>>(GMT-04:00) La Paz</option>
                                 <option value="(GMT-04:00) Santiago" <?php if($user_details->time_zone == '(GMT-04:00) Santiago') echo "selected"; ?>>(GMT-04:00) Santiago</option>
                                 <option value="(GMT-03:00) Newfoundland" <?php if($user_details->time_zone == '(GMT-03:00) Newfoundland') echo "selected"; ?>>(GMT-03:00) Newfoundland</option>
                                 <option value="(GMT-03:00) Buenos Aires" <?php if($user_details->time_zone == '(GMT-03:00) Buenos Aires') echo "selected"; ?>>(GMT-03:00) Buenos Aires</option>
                                 <option value="(GMT-03:00) Greenland" <?php if($user_details->time_zone == '(GMT-03:00) Greenland') echo "selected"; ?>>(GMT-03:00) Greenland</option>
                                 <option value="(GMT-02:00) Stanley" <?php if($user_details->time_zone == '(GMT-02:00) Stanley') echo "selected"; ?>>(GMT-02:00) Stanley</option>
                                 <option value="(GMT-01:00) Azores" <?php if($user_details->time_zone == '(GMT-01:00) Azores') echo "selected"; ?>>(GMT-01:00) Azores</option>
                                 <option value="(GMT-01:00) Cape Verde Is" <?php if($user_details->time_zone == '(GMT-01:00) Cape Verde Is') echo "selected"; ?>>(GMT-01:00) Cape Verde Is</option>
                                 <option value="(GMT) Casablanca" <?php if($user_details->time_zone == '(GMT) Casablanca') echo "selected"; ?>>(GMT) Casablanca</option>
                                 <option value="(GMT) Dublin" <?php if($user_details->time_zone == '(GMT) Dublin') echo "selected"; ?>>(GMT) Dublin</option>
                                 <option value="(GMT) Lisbon" <?php if($user_details->time_zone == '(GMT) Lisbon') echo "selected"; ?>>(GMT) Lisbon</option>
                                 <option value="(GMT) London" <?php if($user_details->time_zone == '(GMT) London') echo "selected"; ?>>(GMT) London</option>
                                 <option value="(GMT) Monrovia" <?php if($user_details->time_zone == '(GMT) Monrovia') echo "selected"; ?>>(GMT) Monrovia</option>
                                 <option value="(GMT+01:00) Amsterdam" <?php if($user_details->time_zone == '(GMT+01:00) Amsterdam') echo "selected"; ?>>(GMT+01:00) Amsterdam</option>
                                 <option value="(GMT+01:00) Belgrade" <?php if($user_details->time_zone == '(GMT+01:00) Belgrade') echo "selected"; ?>>(GMT+01:00) Belgrade</option>
                                 <option value="(GMT+01:00) Berlin" <?php if($user_details->time_zone == '(GMT+01:00) Berlin') echo "selected"; ?>>(GMT+01:00) Berlin</option>
                                 <option value="(GMT+01:00) Bratislava" <?php if($user_details->time_zone == '(GMT+01:00) Bratislava') echo "selected"; ?>>(GMT+01:00) Bratislava</option>
                                 <option value="(GMT+01:00) Brussels" <?php if($user_details->time_zone == '(GMT+01:00) Brussels') echo "selected"; ?>>(GMT+01:00) Brussels</option>
                                 <option value="(GMT+01:00) Budapest" <?php if($user_details->time_zone == '(GMT+01:00) Budapest') echo "selected"; ?>>(GMT+01:00) Budapest</option>
                                 <option value="(GMT+01:00) Copenhagen" <?php if($user_details->time_zone == '(GMT+01:00) Copenhagen') echo "selected"; ?>>(GMT+01:00) Copenhagen</option>
                                 <option value="(GMT+01:00) Ljubljana" <?php if($user_details->time_zone == '(GMT+01:00) Ljubljana') echo "selected"; ?>>(GMT+01:00) Ljubljana</option>
                                 <option value="(GMT+01:00) Madrid" <?php if($user_details->time_zone == '(GMT+01:00) Madrid') echo "selected"; ?>>(GMT+01:00) Madrid</option>
                                 <option value="(GMT+01:00) Paris" <?php if($user_details->time_zone == '(GMT+01:00) Paris') echo "selected"; ?>>(GMT+01:00) Paris</option>
                                 <option value="(GMT+01:00) Prague" <?php if($user_details->time_zone == '(GMT+01:00) Prague') echo "selected"; ?>>(GMT+01:00) Prague</option>
                                 <option value="(GMT+01:00) Rome" <?php if($user_details->time_zone == '(GMT+01:00) Rome') echo "selected"; ?>>(GMT+01:00) Rome</option>
                                 <option value="(GMT+01:00) Sarajevo" <?php if($user_details->time_zone == '(GMT+01:00) Sarajevo') echo "selected"; ?>>(GMT+01:00) Sarajevo</option>
                                 <option value="(GMT+01:00) Skopje" <?php if($user_details->time_zone == '(GMT+01:00) Skopje') echo "selected"; ?>>(GMT+01:00) Skopje</option>
                                 <option value="(GMT+01:00) Stockholm" <?php if($user_details->time_zone == '(GMT+01:00) Stockholm') echo "selected"; ?>>(GMT+01:00) Stockholm</option>
                                 <option value="(GMT+01:00) Vienna" <?php if($user_details->time_zone == '(GMT+01:00) Vienna') echo "selected"; ?>>(GMT+01:00) Vienna</option>
                                 <option value="(GMT+01:00) Warsaw" <?php if($user_details->time_zone == '(GMT+01:00) Warsaw') echo "selected"; ?>>(GMT+01:00) Warsaw</option>
                                 <option value="(GMT+01:00) Zagreb" <?php if($user_details->time_zone == '(GMT+01:00) Zagreb') echo "selected"; ?>>(GMT+01:00) Zagreb</option>
                                 <option value="(GMT+02:00) Athens" <?php if($user_details->time_zone == '(GMT+02:00) Athens') echo "selected"; ?>>(GMT+02:00) Athens</option>
                                 <option value="(GMT+02:00) Bucharest" <?php if($user_details->time_zone == '(GMT+02:00) Bucharest') echo "selected"; ?>>(GMT+02:00) Bucharest</option>
                                 <option value="(GMT+02:00) Cairo" <?php if($user_details->time_zone == '(GMT+02:00) Cairo') echo "selected"; ?>>(GMT+02:00) Cairo</option>
                                 <option value="(GMT+02:00) Harare" <?php if($user_details->time_zone == '(GMT+02:00) Harare') echo "selected"; ?>>(GMT+02:00) Harare</option>
                                 <option value="(GMT+02:00) Helsinki" <?php if($user_details->time_zone == '(GMT+02:00) Helsinki') echo "selected"; ?>>(GMT+02:00) Helsinki</option>
                                 <option value="(GMT+02:00) Istanbul" <?php if($user_details->time_zone == '(GMT+02:00) Istanbul') echo "selected"; ?>>(GMT+02:00) Istanbul</option>
                                 <option value="(GMT+02:00) Jerusalem" <?php if($user_details->time_zone == '(GMT+02:00) Jerusalem') echo "selected"; ?>>(GMT+02:00) Jerusalem</option>
                                 <option value="(GMT+02:00) Kyiv" <?php if($user_details->time_zone == '(GMT+02:00) Kyiv') echo "selected"; ?>>(GMT+02:00) Kyiv</option>
                                 <option value="(GMT+02:00) Minsk" <?php if($user_details->time_zone == '(GMT+02:00) Minsk') echo "selected"; ?>>(GMT+02:00) Minsk</option>
                                 <option value="(GMT+02:00) Riga" <?php if($user_details->time_zone == '(GMT+02:00) Riga') echo "selected"; ?>>(GMT+02:00) Riga</option>
                                 <option value="(GMT+02:00) Sofia" <?php if($user_details->time_zone == '(GMT+02:00) Sofia') echo "selected"; ?>>(GMT+02:00) Sofia</option>
                                 <option value="(GMT+02:00) Tallinn" <?php if($user_details->time_zone == '(GMT+02:00) Tallinn') echo "selected"; ?>>(GMT+02:00) Tallinn</option>
                                 <option value="(GMT+02:00) Vilnius" <?php if($user_details->time_zone == '(GMT+02:00) Vilnius') echo "selected"; ?>>(GMT+02:00) Vilnius</option>
                                 <option value="(GMT+03:00) Baghdad" <?php if($user_details->time_zone == '(GMT+03:00) Baghdad') echo "selected"; ?>>(GMT+03:00) Baghdad</option>
                                 <option value="(GMT+03:00) Kuwait" <?php if($user_details->time_zone == '(GMT+03:00) Kuwait') echo "selected"; ?>>(GMT+03:00) Kuwait</option>
                                 <option value="(GMT+03:00) Nairobi" <?php if($user_details->time_zone == '((GMT+03:00) Nairobi') echo "selected"; ?>>(GMT+03:00) Nairobi</option>
                                 <option value="(GMT+03:00) Riyadh" <?php if($user_details->time_zone == '(GMT+03:00) Riyadh') echo "selected"; ?>>(GMT+03:00) Riyadh</option>
                                 <option value="(GMT+03:00) Moscow" <?php if($user_details->time_zone == '(GMT+03:00) Moscow') echo "selected"; ?>>(GMT+03:00) Moscow</option>
                                 <option value="(GMT+03:30) Tehran" <?php if($user_details->time_zone == '(GMT+03:30) Tehran') echo "selected"; ?>>(GMT+03:30) Tehran</option>
                                 <option value="(GMT+04:00) Baku" <?php if($user_details->time_zone == '(GMT+04:00) Baku') echo "selected"; ?>>(GMT+04:00) Baku</option>
                                 <option value="(GMT+04:00) Volgograd" <?php if($user_details->time_zone == '(GMT+04:00) Volgograd') echo "selected"; ?>>(GMT+04:00) Volgograd</option>
                                 <option value="(GMT+04:00) Muscat" <?php if($user_details->time_zone == '(GMT+04:00) Muscat') echo "selected"; ?>>(GMT+04:00) Muscat</option>
                                 <option value="(GMT+04:00) Tbilisi" <?php if($user_details->time_zone == '(GMT+04:00) Tbilisi') echo "selected"; ?>>(GMT+04:00) Tbilisi</option>
                                 <option value="(GMT+04:00) Yerevan" <?php if($user_details->time_zone == '(GMT+04:00) Yerevan') echo "selected"; ?>>(GMT+04:00) Yerevan</option>
                                 <option value="(GMT+04:30) Kabul" <?php if($user_details->time_zone == '(GMT+04:30) Kabul') echo "selected"; ?>>(GMT+04:30) Kabul</option>
                                 <option value="(GMT+05:00) Karachi" <?php if($user_details->time_zone == '(GMT+05:00) Karachi') echo "selected"; ?>>(GMT+05:00) Karachi</option>
                                 <option value="(GMT+05:00) Tashkent" <?php if($user_details->time_zone == '(GMT+05:00) Tashkent') echo "selected"; ?>>(GMT+05:00) Tashkent</option>
                                 <option value="(GMT+05:30) Kolkata" <?php if($user_details->time_zone == '(GMT+05:30) Kolkata') echo "selected"; ?>>(GMT+05:30) Kolkata</option>
                                 <option value="(GMT+05:45) Kathmandu" <?php if($user_details->time_zone == '(GMT+05:45) Kathmandu') echo "selected"; ?>>(GMT+05:45) Kathmandu</option>
                                 <option value="(GMT+06:00) Ekaterinburg" <?php if($user_details->time_zone == '(GMT+06:00) Ekaterinburg') echo "selected"; ?>>(GMT+06:00) Ekaterinburg</option>
                                 <option value="(GMT+06:00) Almaty" <?php if($user_details->time_zone == '(GMT+06:00) Almaty') echo "selected"; ?>>(GMT+06:00) Almaty</option>
                                 <option value="(GMT+06:00) Dhaka" <?php if($user_details->time_zone == '(GMT+06:00) Dhaka') echo "selected"; ?>>(GMT+06:00) Dhaka</option>
                                 <option value="(GMT+07:00) Novosibirsk" <?php if($user_details->time_zone == '(GMT+07:00) Novosibirsk') echo "selected"; ?>>(GMT+07:00) Novosibirsk</option>
                                 <option value="(GMT+07:00) Bangkok" <?php if($user_details->time_zone == '(GMT+07:00) Bangkok') echo "selected"; ?>>(GMT+07:00) Bangkok</option>
                                 <option value="(GMT+07:00) Jakarta" <?php if($user_details->time_zone == '(GMT+07:00) Jakarta') echo "selected"; ?>>(GMT+07:00) Jakarta</option>
                                 <option value="(GMT+08:00) Krasnoyarsk" <?php if($user_details->time_zone == '(GMT+08:00) Krasnoyarsk') echo "selected"; ?>>(GMT+08:00) Krasnoyarsk</option>
                                 <option value="(GMT+08:00) Chongqing" <?php if($user_details->time_zone == '(GMT+08:00) Chongqing') echo "selected"; ?>>(GMT+08:00) Chongqing</option>
                                 <option value="(GMT+08:00) Hong Kong" <?php if($user_details->time_zone == '(GMT+08:00) Hong Kong') echo "selected"; ?>>(GMT+08:00) Hong Kong</option>
                                 <option value="(GMT+08:00) Kuala Lumpur" <?php if($user_details->time_zone == '(GMT+08:00) Kuala Lumpur') echo "selected"; ?>>(GMT+08:00) Kuala Lumpur</option>
                                 <option value="(GMT+08:00) Perth" <?php if($user_details->time_zone == '(GMT+08:00) Perth') echo "selected"; ?>>(GMT+08:00) Perth</option>
                                 <option value="(GMT+08:00) Singapore" <?php if($user_details->time_zone == '(GMT+08:00) Singapore') echo "selected"; ?>>(GMT+08:00) Singapore</option>
                                 <option value="(GMT+08:00) Taipei" <?php if($user_details->time_zone == '(GMT+08:00) Taipei') echo "selected"; ?>>(GMT+08:00) Taipei</option>
                                 <option value="(GMT+08:00) Ulaan Bataar" <?php if($user_details->time_zone == '(GMT+08:00) Ulaan Bataar') echo "selected"; ?>>(GMT+08:00) Ulaan Bataar</option>
                                 <option value="(GMT+08:00) Urumqi" <?php if($user_details->time_zone == '(GMT+08:00) Urumqi') echo "selected"; ?>>(GMT+08:00) Urumqi</option>
                                 <option value="(GMT+09:00) Irkutsk" <?php if($user_details->time_zone == '(GMT+09:00) Irkutsk') echo "selected"; ?>>(GMT+09:00) Irkutsk</option>
                                 <option value="(GMT+09:00) Seoul" <?php if($user_details->time_zone == '(GMT+09:00) Seoul') echo "selected"; ?>>(GMT+09:00) Seoul</option>
                                 <option value="(GMT+09:00) Tokyo" <?php if($user_details->time_zone == '(GMT+09:00) Tokyo') echo "selected"; ?>>(GMT+09:00) Tokyo</option>
                                 <option value="(GMT+09:30) Adelaide" <?php if($user_details->time_zone == '(GMT+09:30) Adelaide') echo "selected"; ?>>(GMT+09:30) Adelaide</option>
                                 <option value="(GMT+09:30) Darwin" <?php if($user_details->time_zone == '(GMT+09:30) Darwin') echo "selected"; ?>>(GMT+09:30) Darwin</option>
                                 <option value="(GMT+10:00) Yakutsk" <?php if($user_details->time_zone == '(GMT+10:00) Yakutsk') echo "selected"; ?>>(GMT+10:00) Yakutsk</option>
                                 <option value="(GMT+10:00) Brisbane" <?php if($user_details->time_zone == '(GMT+10:00) Brisbane') echo "selected"; ?>>(GMT+10:00) Brisbane</option>
                                 <option value="(GMT+10:00) Canberra" <?php if($user_details->time_zone == '(GMT+10:00) Canberra') echo "selected"; ?>>(GMT+10:00) Canberra</option>
                                 <option value="(GMT+10:00) Guam" <?php if($user_details->time_zone == '(GMT+10:00) Guam') echo "selected"; ?>>(GMT+10:00) Guam</option>
                                 <option value="(GMT+10:00) Hobart" <?php if($user_details->time_zone == '(GMT+10:00) Hobart') echo "selected"; ?>>(GMT+10:00) Hobart</option>
                                 <option value="(GMT+10:00) Melbourne" <?php if($user_details->time_zone == '(GMT+10:00) Melbourne') echo "selected"; ?>>(GMT+10:00) Melbourne</option>
                                 <option value="(GMT+10:00) Port Moresby" <?php if($user_details->time_zone == '(GMT+10:00) Port Moresby') echo "selected"; ?>>(GMT+10:00) Port Moresby</option>
                                 <option value="(GMT+10:00) Sydney" <?php if($user_details->time_zone == '(GMT+10:00) Sydney') echo "selected"; ?>>(GMT+10:00) Sydney</option>
                                 <option value="(GMT+11:00) Vladivostok" <?php if($user_details->time_zone == '(GMT+11:00) Vladivostok') echo "selected"; ?>>(GMT+11:00) Vladivostok</option>
                                 <option value="(GMT+12:00) Magadan" <?php if($user_details->time_zone == '(GMT+12:00) Magadan') echo "selected"; ?>>(GMT+12:00) Magadan</option>
                                 <option value="(GMT+12:00) Auckland" <?php if($user_details->time_zone == '(GMT+12:00) Auckland') echo "selected"; ?>>(GMT+12:00) Auckland</option>
                                 <option value="(GMT+12:00) Fiji" <?php if($user_details->time_zone == '(GMT+12:00) Fiji') echo "selected"; ?>>(GMT+12:00) Fiji</option>
                              </select>
                           </div>
                        </div>
                        <div class="from-input">
                           <label>Currency</label>
                           <div class="select">
                              <select name="currency" id="currency">
                                 <option value="">Select a Currency</option>
                                 <option value="US Dollar" <?php if($user_details->currency == 'US Dollar') echo "selected"; ?>>US Dollar [$]</option>
                                 <option value="Canadian Dollar" <?php if($user_details->currency == 'Canadian Dollar') echo "selected"; ?>>Canadian Dollar [$]</option>
                                 <option value="British Pound" <?php if($user_details->currency == 'British Pound') echo "selected"; ?>>British Pound [£]</option>
                                 <option value="Australian Dollar" <?php if($user_details->currency == 'Australian Dollar') echo "selected"; ?>>Australian Dollar [£]</option>
                                 <option value="Euro" <?php if($user_details->currency == 'Euro') echo "selected"; ?>>Euro [€]</option>
                                 <option value="Swiss Franc" <?php if($user_details->currency == 'Swiss Franc') echo "selected"; ?>>Swiss Franc [₣]</option>
                                 <option value="Chinese Renminbi" <?php if($user_details->currency == 'Chinese Renminbi') echo "selected"; ?>>Chinese Renminbi [元]</option>
                                 <option value="Hong Kong Dollar" <?php if($user_details->currency == 'Hong Kong Dollar') echo "selected"; ?>>Hong Kong Dollar [元]</option>
                                 <option value="Philippines Peso" <?php if($user_details->currency == 'Philippines Peso') echo "selected"; ?>>Philippines Peso [₱]</option>
                                 <option value="Polish Zloty " <?php if($user_details->currency == 'Polish Zloty ') echo "selected"; ?>>Polish Zloty [zł]</option>
                                 <option value="Sweden Krona" <?php if($user_details->currency == 'Sweden Krona') echo "selected"; ?>>Sweden Krona [kr]</option>
                                 <option value="Singapore Dollar" <?php if($user_details->currency == 'Singapore Dollar') echo "selected"; ?>>Singapore Dollar [$]</option>
                                 <option value="Taiwanese Dollar " <?php if($user_details->currency == 'Taiwanese Dollar ') echo "selected"; ?>>Taiwanese Dollar [NT$]</option>
                                 <option value="Malaysian Ringgit" <?php if($user_details->currency == 'Malaysian Ringgit') echo "selected"; ?>>Malaysian Ringgit [RM]</option>
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
                                    <div class="input-popup-row">
                                       <label>User Name</label>
                                       <input type="text" name="ebay_user_name" id="ebay_user_name" value="{{ $user_details->ebay_username }}"
                                          placeholder="" />
                                    </div>
                                    <div class="input-popup-row">
                                       <label>Marketplace</label>
                                       <div class="select">
                                          <select name="ebay_user_marketplace" id="ebay_user_marketplace">
                                             <option value="">Select a Marketplace...</option>
                                             <option value="EBAY_AU" <?php if($user_details->ebay_marketplace == 'EBAY_AU') echo "selected"; ?>>Australia -- ebay.com.au</option>
                                             <option value="EBAY_CA" <?php if($user_details->ebay_marketplace == 'EBAY_CA') echo "selected"; ?>>Canada(Française) -- cafr.ebay.ca</option>
                                             <option value="EBAY_IN" <?php if($user_details->ebay_marketplace == 'EBAY_IN') echo "selected"; ?>>India -- ebay.in</option>
                                             <option value="EBAY_SG" <?php if($user_details->ebay_marketplace == 'EBAY_SG') echo "selected"; ?>>Singapore -- ebay.com.sg</option>
                                             <option value="EBAY_CH" <?php if($user_details->ebay_marketplace == 'EBAY_CH') echo "selected"; ?>>Switzerland -- ebay.ch</option>
                                             <option value="EBAY_US" <?php if($user_details->ebay_marketplace == 'EBAY_US') echo "selected"; ?>>United States -- ebay.com</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="from-button">
                                       <a href="#!" class="modal-close close-a-tage">Close</a>
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
               <form id="submit_delete_my_account" action="#" method="POST" enctype="multipart/form-data">
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
                           <input type="checkbox" id="confirm_account" name="confirm_account" required>
                           <label for="confirm_account">I confirm my account deactivation</label>
                        </div>
                     </div>
                     <div class="delete-button-box">
                        <button type="submit" class="disable-submit">Delete Account</button>
                        <div class="submit_delete_my_account_res"></div>
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