@extends('layout.main')

@section('page-content')
	<div class="imgsub">
		{!! HTML::image('slideshow/1413603891-booking.jpg', 'BOOKING TOUR', ['class' => 'img-responsive']) !!}
		@include('module.findyourstrip')
	</div>
	<div class="container">
		<h1 class="page-title">NORTH VIETNAM TOURS</h1>
		<div class="breadcrumbs clearfix">
			<div class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="#" class="active" itemprop="url"><span itemprop="title">Home</span></a>
				<span>› </span>
				<a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active">
				<span itemprop="title">Vietnam tours</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active">
				<span itemprop="title">Northern</span>
				</a>
				<span>› </span>
				<a title="Visa Fees" href="https://www.vietnam-evisa.org/visa-fee.html" class="active">
				<span itemprop="title">Explore the Wonders of Sapa 4 Days/ 3 Nights</span>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="tour-thumbnail">
					<div class="row">
						<div class="col-sm-5">
							<img src="http://www.palmvietnamtravel.com/data/upload/1427341738-sapa-vietnam.jpg" alt="Explore the Wonders of Sapa" class="img-responsive">
						</div>
						<div class="col-sm-7">
							<h2>Explore the Wonders of Sapa</h2>
							<p class="duration"><strong>Duration:</strong> 4 Days/ 3 Nights</p>
							<span class="price">From: $169</span>
							<span>(Per person)</span>
							<p  class="introdesc">Let us know your travel plan by simply filling in the form below. We will contact you within 8 - 24 hours with a suggested itinerary and price.</p>
							<div style="margin-top: 40px">
								<a href="#" class="btn btn-summary">BACK TO DETAILS</a>
								<a href="#" class="btn btn-summary">DESIGN YOUR OWN TOUR</a>
							</div>
						</div>
					</div>
				</div><!-- tour-thumbnail -->
				@include('module.contact')
				<!-- .notice -->
				<div class="payment-note">
					<p>We make your online reservation extremely satisfying, comfortable and without apprehension over your security, privacy and concern about online reservations. All Tour Packages on this website operate on a Pre-Payment Basis.<br> We would require $ 100 USD per person upon confirmation and full payment must be made at least 15-30 days prior to your departure date.</p>
					<p>We accept your PayPal account, Credits Cards (Visa, Mastercard, American Express, Discover) or Debit Cards.</p>
				</div>
				{{-- step --}}
				<div class="step col-sm-12">
					<div class="col-sm-4">
						<span class="list">01</span>Choose the packages
					</div>
					<div class="col-sm-4 active">
						<span class="list">02</span>Your booking
					</div>
					<div class="col-sm-4">
						<span class="list">03</span>Secure Checkout <span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="booking">
				   <form accept-charset="utf-8" class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ URL::to('booking/store') }}" id="frmBooking" name="frmBooking">
				      	<fieldset>
				         	<legend>Your Information</legend>
				         	<div class="form-group">
				         		<div class="col-md-2">
				         			<label for="txtCountry">Nationality <i>*</i></label>
				         		</div>
				         		<div class="col-md-5">
					               	<select id="txtCountry" name="txtCountry" class="form-control">
										<option value="-1">-- [Select] --</option>
										<option value="Abkhazia">Abkhazia</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Akrotiri and Dhekelia">Akrotiri and Dhekelia</option>
										<option value="Åland">Åland</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Ascension Island">Ascension Island</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas, The">Bahamas, The</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Brazil">Brazil</option>
										<option value="Brunei">Brunei</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burma">Burma</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Congo, Democratic Rep. of the">Congo, Democratic Rep. of the</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Côte d'Ivoire">Côte d'Ivoire</option>
										<option value="Croatia">Croatia</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador ">El Salvador </option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands">Falkland Islands</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia, The">Gambia, The</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guernsey">Guernsey</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran">Iran</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland ">Ireland </option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Israel ">Israel </option>
										<option value="Italy">Italy</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jersey">Jersey</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea, North">Korea, North</option>
										<option value="Korea, South">Korea, South</option>
										<option value="Kosovo">Kosovo</option>
										<option value="Kuwait ">Kuwait </option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Laos">Laos</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon ">Lebanon </option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libya ">Libya </option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macao">Macao</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia">Micronesia</option>
										<option value="Moldova">Moldova</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Nagorno-Karabakh">Nagorno-Karabakh</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua ">Nicaragua </option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Cyprus">Northern Cyprus</option>
										<option value="Northern Mariana Islands ">Northern Mariana Islands </option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestine ">Palestine </option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea ">Papua New Guinea </option>
										<option value="Paraguay ">Paraguay </option>
										<option value="Peru ">Peru </option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn Islands">Pitcairn Islands</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Romania">Romania</option>
										<option value="Russia">Russia</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Barthélemy">Saint Barthélemy</option>
										<option value="Saint Helena">Saint Helena</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Martin ">Saint Martin </option>
										<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
										<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
										<option value="Samoa ">Samoa </option>
										<option value="San Marino">San Marino</option>
										<option value="São Tomé and Príncipe">São Tomé and Príncipe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia ">Serbia </option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore ">Singapore </option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="Somaliland">Somaliland</option>
										<option value="South Africa ">South Africa </option>
										<option value="South Ossetia ">South Ossetia </option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka ">Sri Lanka </option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard">Svalbard</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland ">Switzerland </option>
										<option value="Syria">Syria</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania">Tanzania</option>
										<option value="Thailand">Thailand</option>
										<option value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau ">Tokelau </option>
										<option value="Tonga">Tonga</option>
										<option value="Transnistria">Transnistria</option>
										<option value="Trinidad and Tobago ">Trinidad and Tobago </option>
										<option value="Tristan da Cunha ">Tristan da Cunha </option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom ">United Kingdom </option>
										<option value="United States">United States</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City">Vatican City</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands, British ">Virgin Islands, British </option>
										<option value="Virgin Islands, United States">Virgin Islands, United States</option>
										<option value="Wallis and Futuna">Wallis and Futuna</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen ">Yemen </option>
										<option value="Zambia ">Zambia </option>
										<option value="Zimbabwe ">Zimbabwe </option>
					               	</select>
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtSex">Gender <i>*</i></label>
				         		</div>
				         		<div class="col-md-5">
				         			<select class="gen form-control" id="txtSex" name="txtSex">
										<option value="-1">-----</option>
										<option value="Mr.">Mr.</option>
										<option value="Ms.">Ms.</option>
										<option value="Mrs.">Mrs.</option>
										<option value="Miss.">Miss.</option>
										<option value="Dr.">Dr.</option>
										<option value="Prof.">Prof.</option>
										<option value="Mstr.">Mstr.</option>
					               	</select>
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtFirstName">First name <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			<input type="text" id="txtFirstName" name="txtFirstName" class="form-control">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtLastName">Last name <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			<input type="text" id="txtLastName" name="txtLastName" class="form-control">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtEmail">Email Address <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			<input type="text" id="txtEmail" name="txtEmail" class="form-control">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtComfirmEmail">Confirm Email <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			<input type="text" id="txtComfirmEmail" name="txtComfirmEmail" class="form-control">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtPhone">Cell/ Mobile</label>
				         		</div>
				         		<div class="col-md-3 pd-rg">
				         			<select class="cgen form-control" id="phoneCode" name="phoneCode">
										<option selected="selected" value="">Select a country</option>
										<option value="+61">Australia&nbsp;+61</option>
										<option value="+1">Canada&nbsp;+1</option>
										<option value="+33">France&nbsp;+33</option>
										<option value="+49">Germany&nbsp;+49</option>
										<option value="+353">Ireland&nbsp;+353</option>
										<option value="+39">Italy&nbsp;+39</option>
										<option value="+31">Netherlands&nbsp;+31</option>
										<option value="+64">New Zealand&nbsp;+64</option>
										<option value="+44">United Kingdom&nbsp;+44</option>
										<option value="+1">United States of America&nbsp;+1</option>
										<option disabled="disabled" class="separator" value="-">----------</option>
										<option value="+93">Afghanistan&nbsp;+93</option>
										<option value="+355">Albania&nbsp;+355</option>
										<option value="+213">Algeria&nbsp;+213</option>
										<option value="+684">American Samoa&nbsp;+684</option>
										<option value="+376">Andorra&nbsp;+376</option>
										<option value="+244">Angola&nbsp;+244</option>
										<option value="+1-264">Anguilla&nbsp;+1-264</option>
										<option value="+672">Antarctica&nbsp;+672</option>
										<option value="+1-268">Antigua and Barbuda&nbsp;+1-268</option>
										<option value="+54">Argentina&nbsp;+54</option>
										<option value="+374">Armenia&nbsp;+374</option>
										<option value="+297">Aruba&nbsp;+297</option>
										<option value="+61">Australia&nbsp;+61</option>
										<option value="+43">Austria&nbsp;+43</option>
										<option value="+994">Azerbaijan&nbsp;+994</option>
										<option value="+1-242">Bahamas&nbsp;+1-242</option>
										<option value="+973">Bahrain&nbsp;+973</option>
										<option value="+880">Bangladesh&nbsp;+880</option>
										<option value="+1-246">Barbados&nbsp;+1-246</option>
										<option value="+375">Belarus&nbsp;+375</option>
										<option value="+32">Belgium&nbsp;+32</option>
										<option value="+501">Belize&nbsp;+501</option>
										<option value="+229">Benin&nbsp;+229</option>
										<option value="+1-441">Bermuda&nbsp;+1-441</option>
										<option value="+975">Bhutan&nbsp;+975</option>
										<option value="+591">Bolivia&nbsp;+591</option>
										<option value="+387">Bosnia Herzegovina&nbsp;+387</option>
										<option value="+267">Botswana&nbsp;+267</option>
										<option value="+55">Brazil&nbsp;+55</option>
										<option value="+673">Brunei&nbsp;+673</option>
										<option value="+359">Bulgaria&nbsp;+359</option>
										<option value="+226">Burkina Faso&nbsp;+226</option>
										<option value="+257">Burundi&nbsp;+257</option>
										<option value="+855">Cambodia&nbsp;+855</option>
										<option value="+237">Cameroon&nbsp;+237</option>
										<option value="+1">Canada&nbsp;+1</option>
										<option value="+238">Cape Verde&nbsp;+238</option>
										<option value="+1-345">Cayman Islands&nbsp;+1-345</option>
										<option value="+236">Central Africa&nbsp;+236</option>
										<option value="+235">Chad&nbsp;+235</option>
										<option value="+56">Chile&nbsp;+56</option>
										<option value="+86">China&nbsp;+86</option>
										<option value="+61">Christmas Island&nbsp;+61</option>
										<option value="+61">Cocos (Keeling) Islands&nbsp;+61</option>
										<option value="+57">Colombia&nbsp;+57</option>
										<option value="+269">Comoros&nbsp;+269</option>
										<option value="+682">Cook Islands&nbsp;+682</option>
										<option value="+506">Costa Rica&nbsp;+506</option>
										<option value="+225">Cote D'Ivoire&nbsp;+225</option>
										<option value="+385">Croatia&nbsp;+385</option>
										<option value="+357">Cyprus&nbsp;+357</option>
										<option value="+420">Czech Republic&nbsp;+420</option>
										<option value="+45">Denmark&nbsp;+45</option>
										<option value="+253">Djibouti&nbsp;+253</option>
										<option value="+1-767">Dominica&nbsp;+1-767</option>
										<option value="+809">Dominican Republic&nbsp;+809</option>
										<option value="+593">Ecuador&nbsp;+593</option>
										<option value="+20">Egypt&nbsp;+20</option>
										<option value="+503">El Salvador&nbsp;+503</option>
										<option value="+240">Equatorial Guinea&nbsp;+240</option>
										<option value="+291">Eritrea&nbsp;+291</option>
										<option value="+372">Estonia&nbsp;+372</option>
										<option value="+251">Ethiopia&nbsp;+251</option>
										<option value="+500">Falkland Island&nbsp;+500</option>
										<option value="+298">Faroe Islands&nbsp;+298</option>
										<option value="+679">Fiji&nbsp;+679</option>
										<option value="+358">Finland&nbsp;+358</option>
										<option value="+33">France&nbsp;+33</option>
										<option value="+594">French Guiana&nbsp;+594</option>
										<option value="+689">French Polynesia&nbsp;+689</option>
										<option value="+241">Gabon&nbsp;+241</option>
										<option value="+220">Gambia&nbsp;+220</option>
										<option value="+995">Georgia&nbsp;+995</option>
										<option value="+49">Germany&nbsp;+49</option>
										<option value="+233">Ghana&nbsp;+233</option>
										<option value="+350">Gibraltar&nbsp;+350</option>
										<option value="+30">Greece&nbsp;+30</option>
										<option value="+299">Greenland&nbsp;+299</option>
										<option value="+1-473">Grenada&nbsp;+1-473</option>
										<option value="+590">Guadeloupe&nbsp;+590</option>
										<option value="+1-671">Guam&nbsp;+1-671</option>
										<option value="+502">Guatemala&nbsp;+502</option>
										<option value="+224">Guinea&nbsp;+224</option>
										<option value="+245">Guinea Bissau&nbsp;+245</option>
										<option value="+592">Guyana&nbsp;+592</option>
										<option value="+509">Haiti&nbsp;+509</option>
										<option value="+504">Honduras&nbsp;+504</option>
										<option value="+852">Hong Kong&nbsp;+852</option>
										<option value="+36">Hungary&nbsp;+36</option>
										<option value="+354">Iceland&nbsp;+354</option>
										<option value="+91">India&nbsp;+91</option>
										<option value="+62">Indonesia&nbsp;+62</option>
										<option value="+964">Iraq&nbsp;+964</option>
										<option value="+353">Ireland&nbsp;+353</option>
										<option value="+972">Israel&nbsp;+972</option>
										<option value="+39">Italy&nbsp;+39</option>
										<option value="+1-876">Jamaica&nbsp;+1-876</option>
										<option value="+81">Japan&nbsp;+81</option>
										<option value="+962">Jordan&nbsp;+962</option>
										<option value="+7">Kazakhstan&nbsp;+7</option>
										<option value="+254">Kenya&nbsp;+254</option>
										<option value="+686">Kiribati&nbsp;+686</option>
										<option value="+965">Kuwait&nbsp;+965</option>
										<option value="+996">Kyrgyzstan&nbsp;+996</option>
										<option value="+856">Lao People's Democratic Republic&nbsp;+856</option>
										<option value="+371">Latvia&nbsp;+371</option>
										<option value="+961">Lebanon&nbsp;+961</option>
										<option value="+266">Lesotho&nbsp;+266</option>
										<option value="+231">Liberia&nbsp;+231</option>
										<option value="+218">Libyan Arab Jamahiriya&nbsp;+218</option>
										<option value="+423">Liechtenstein&nbsp;+423</option>
										<option value="+370">Lithuania&nbsp;+370</option>
										<option value="+352">Luxembourg&nbsp;+352</option>
										<option value="+853">Macau&nbsp;+853</option>
										<option value="+389">Macedonia&nbsp;+389</option>
										<option value="+261">Madagascar&nbsp;+261</option>
										<option value="+265">Malawi&nbsp;+265</option>
										<option value="+60">Malaysia&nbsp;+60</option>
										<option value="+960">Maldives&nbsp;+960</option>
										<option value="+223">Mali&nbsp;+223</option>
										<option value="+356">Malta&nbsp;+356</option>
										<option value="+596">Martinique&nbsp;+596</option>
										<option value="+222">Mauritania&nbsp;+222</option>
										<option value="+230">Mauritius&nbsp;+230</option>
										<option value="+269">Mayotte&nbsp;+269</option>
										<option value="+52">Mexico&nbsp;+52</option>
										<option value="+691">Micronesia&nbsp;+691</option>
										<option value="+373">Moldova&nbsp;+373</option>
										<option value="+377">Monaco&nbsp;+377</option>
										<option value="+976">Mongolia&nbsp;+976</option>
										<option value="+1-664">Monserrat&nbsp;+1-664</option>
										<option value="+212">Morocco&nbsp;+212</option>
										<option value="+258">Mozambique&nbsp;+258</option>
										<option value="+95">Myanmar&nbsp;+95</option>
										<option value="+264">Namibia&nbsp;+264</option>
										<option value="+674">Nauru&nbsp;+674</option>
										<option value="+977">Nepal&nbsp;+977</option>
										<option value="+31">Netherlands&nbsp;+31</option>
										<option value="+599">Netherlands Antilles&nbsp;+599</option>
										<option value="+1-869">Nevis- St Kitts&nbsp;+1-869</option>
										<option value="+687">New Caledonia&nbsp;+687</option>
										<option value="+64">New Zealand&nbsp;+64</option>
										<option value="+505">Nicaragua&nbsp;+505</option>
										<option value="+227">Niger&nbsp;+227</option>
										<option value="+234">Nigeria&nbsp;+234</option>
										<option value="+683">Niue&nbsp;+683</option>
										<option value="+672">Norfolk Island&nbsp;+672</option>
										<option value="+850">North Korea&nbsp;+850</option>
										<option value="+670">Northern Mariana Islands&nbsp;+670</option>
										<option value="+47">Norway&nbsp;+47</option>
										<option value="+968">Oman&nbsp;+968</option>
										<option value="+92">Pakistan&nbsp;+92</option>
										<option value="+680">Palau&nbsp;+680</option>
										<option value="+970">Palestinian Territory, Occupied&nbsp;+970</option>
										<option value="+507">Panama&nbsp;+507</option>
										<option value="+675">Papua New Guinea&nbsp;+675</option>
										<option value="+595">Paraguay&nbsp;+595</option>
										<option value="+51">Peru&nbsp;+51</option>
										<option value="+63">Philippines&nbsp;+63</option>
										<option value="+64">Pitcairn&nbsp;+64</option>
										<option value="+48">Poland&nbsp;+48</option>
										<option value="+351">Portugal&nbsp;+351</option>
										<option value="+1">Puerto Rico&nbsp;+1</option>
										<option value="+974">Qatar&nbsp;+974</option>
										<option value="+262">Reunion&nbsp;+262</option>
										<option value="+40">Romania&nbsp;+40</option>
										<option value="+7">Russian Federation&nbsp;+7</option>
										<option value="+250">Rwanda&nbsp;+250</option>
										<option value="+290">Saint Helena&nbsp;+290</option>
										<option value="+1-758">Saint Lucia&nbsp;+1-758</option>
										<option value="+378">San Marino&nbsp;+378</option>
										<option value="+239">Sao Tome and Principe&nbsp;+239</option>
										<option value="+966">Saudi Arabia&nbsp;+966</option>
										<option value="+221">Senegal&nbsp;+221</option>
										<option value="+381">Serbia and Montenegro&nbsp;+381</option>
										<option value="+248">Seychelles&nbsp;+248</option>
										<option value="+232">Sierra Leone&nbsp;+232</option>
										<option value="+65">Singapore&nbsp;+65</option>
										<option value="+421">Slovakia&nbsp;+421</option>
										<option value="+386">Slovenia&nbsp;+386</option>
										<option value="+677">Solomon Islands&nbsp;+677</option>
										<option value="+252">Somalia&nbsp;+252</option>
										<option value="+27">South Africa&nbsp;+27</option>
										<option value="+82">South Korea&nbsp;+82</option>
										<option value="+34">Spain&nbsp;+34</option>
										<option value="+94">Sri Lanka&nbsp;+94</option>
										<option value="+508">St Pierre Miquelon&nbsp;+508</option>
										<option value="+1-784">St Vincent and Grenadines&nbsp;+1-784</option>
										<option value="+597">Suriname&nbsp;+597</option>
										<option value="+268">Swaziland&nbsp;+268</option>
										<option value="+46">Sweden&nbsp;+46</option>
										<option value="+41">Switzerland&nbsp;+41</option>
										<option value="+963">Syria&nbsp;+963</option>
										<option value="+886">Taiwan&nbsp;+886</option>
										<option value="+992">Tajikistan&nbsp;+992</option>
										<option value="+255">Tanzania&nbsp;+255</option>
										<option value="+66">Thailand&nbsp;+66</option>
										<option value="+670">Timor-Leste&nbsp;+670</option>
										<option value="+228">Togo&nbsp;+228</option>
										<option value="+690">Tokelau&nbsp;+690</option>
										<option value="+676">Tonga&nbsp;+676</option>
										<option value="+1-868">Trinidad and Tobago&nbsp;+1-868</option>
										<option value="+216">Tunisia&nbsp;+216</option>
										<option value="+90">Turkey&nbsp;+90</option>
										<option value="+993">Turkmenistan&nbsp;+993</option>
										<option value="+1-649">Turks and Caicos Islands&nbsp;+1-649</option>
										<option value="+688">Tuvalu&nbsp;+688</option>
										<option value="+256">Uganda&nbsp;+256</option>
										<option value="+380">Ukraine&nbsp;+380</option>
										<option value="+971">United Arab Emirates&nbsp;+971</option>
										<option value="+44">United Kingdom&nbsp;+44</option>
										<option value="+1">United States of America&nbsp;+1</option>
										<option value="+598">Uruguay&nbsp;+598</option>
										<option value="+699">US Minor Outlying Islands&nbsp;+699</option>
										<option value="+998">Uzbekistan&nbsp;+998</option>
										<option value="+678">Vanuatu&nbsp;+678</option>
										<option value="+58">Venezuela&nbsp;+58</option>
										<option value="+84">Vietnam&nbsp;+84</option>
										<option value="+1-284">Virgin Islands-British&nbsp;+1-284</option>
										<option value="+1-340">Virgin Islands-US&nbsp;+1-340</option>
										<option value="+681">Wallis and Futuna Islands&nbsp;+681</option>
										<option value="+685">Western Samoa&nbsp;+685</option>
										<option value="+967">Yemen Republic&nbsp;+967</option>
										<option value="+260">Zambia&nbsp;+260</option>
										<option value="+263">Zimbabwe&nbsp;+263</option>
					               	</select>
				         		</div>
				         		<div class="col-sm-7 pd-lf">
				         			<input type="tel" id="txtPhone" placeholder="E.g: +84988167702" maxlength="20" name="txtPhone" class="form-control">
				         		</div>
				         	</div>
				      	</fieldset>
				      	<fieldset>
				         	<legend>Reservation Trip Details</legend>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label>Date of arrival <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			<input type="text" readonly="readonly" class="txtArrival form-control" id="inputField2" name="txtArrival" globalnumber="532">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label>Date of departure <i>*</i></label>
				         		</div>
				         		<div class="col-md-10">
				         			<input type="text" readonly="readonly" class="txtStartDate form-control" id="inputField1" name="txtStartDate" globalnumber="850">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtAdults">Adults (&gt; 11 Age) <i>*</i></label>
				         		</div>
				         		<div class="col-md-3">
				         			<select class="cgen form-control" id="txtAdults" name="txtAdults">
										<option value="-1">-----</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20+">20+</option>
					               	</select>
				         		</div>
				         	</div>
				            <div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtChildren">Children (2-11 Age)</label>
				         		</div>
				         		<div class="col-md-3">
				         			<select class="cgen form-control" id="txtChildren" name="txtChildren">
										<option value="0">-----</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20+">20+</option>
					               	</select>
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtBabies">Babies &lt; 2 Age</label>
				         		</div>
				         		<div class="col-md-3">
				         			<select class="cgen form-control" id="txtBabies" name="txtBabies">
										<option value="0">-----</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20+">20+</option>
					               	</select>
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtHotel">Hotel Class <i>*</i></label>
				         		</div>
				         		<div class="col-md-3">
				         			<select class="cgen form-control" id="txtHotel" name="txtHotel">
										<option value="-1">--- [Select] ---</option>
										<option value="3 Stars">3 Stars</option>
										<option value="4 Stars">4 Stars</option>
										<option value="5 Stars">5 Stars</option>
										<option value="Book By Myself">Book By Myself</option>
					               	</select>
				         		</div>
				         	</div>
				           	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			<label for="txtHotelName">Hotel name</label>
				         		</div>
				         		<div class="col-md-3">
				         			<input type="text" id="txtHotelName" name="txtHotelName" class="form-control">
				         		</div>
				         	</div>
				         	<div class="form-group">
				         		<div class="col-md-2 pd-rg">
				         			 <label for="txtRoom1">Room preference:</label>
				         		</div>
				         		<div class="col-md-10">
				         			<div class="row">
				         				<div class="col-md-2 pd-rg">
					         				<select class="shotel form-control" name="txtRoom1" id="txtRoom1">
												<option selected="selected" value="0">-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
							               	</select>
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Single</label>
						         		</div>
						         		<div class="col-md-2 pd-rg">
						         			<select class="shotel form-control" name="txtRoom2" id="txtRoom2">
												<option selected="selected" value="0">-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
							               	</select>
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Double</label>
						         		</div>
						         		<div class="col-md-2 pd-rg">
						         			<select class="shotel form-control" name="txtRoom3" id="txtRoom3">
												<option selected="selected" value="0">-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
							               	</select>
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Twin</label>
						         		</div>
						         		<div class="col-md-2 pd-rg">
						         			<select class="shotel form-control" name="txtRoom4" id="txtRoom4">
												<option selected="selected" value="0">-----</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
												<option value="10">10</option>
												<option value="11">11</option>
												<option value="12">12</option>
												<option value="13">13</option>
												<option value="14">14</option>
												<option value="15">15</option>
												<option value="16">16</option>
												<option value="17">17</option>
												<option value="18">18</option>
												<option value="19">19</option>
												<option value="20">20</option>
							               	</select>
						         		</div>
						         		<div class="col-md-1 pd-lf">
						         			<label class="sp control-label">Triple</label>
						         		</div>
				         			</div>
				         		</div>

				         	</div>
				            <div class="form-group">
				            	<div class="col-md-12">
					            	<label class="labelcmt" for="txtMassage">Any additional requests or comments</label>
				            	</div>
				            	<div class="col-md-12">
				            		<textarea id="txtMassage" name="txtMassage" class="form-control"></textarea>
				            	</div>
				            </div>
				            <div class="form-group">
				            	<div class="col-md-12">
				            		<input type="checkbox" checked="checked" id="copyemail" name="copyemail">
				            		<label class="copy-email" for="copyemail"> Send copy to yourself</label>
				            	</div>
				            </div>
				      </fieldset>
				      <input type="submit" onclick="return checkBooking();" value="BOOK NOW" id="btnBooking" name="btnBooking"><input type="hidden" value="http://www.palmvietnamtravel.com/tour-to-sapa-from-hanoi" id="txtLink" name="txtLink"><input type="hidden" value="Explore the Wonders of Sapa - 4 Days/ 3 Nights" id="txtTourName" name="txtTourName"><input type="hidden" value="116.106.67.47" id="txtIP" name="txtIP"><input type="hidden" id="txtEmailClient" name="txtEmailClient"><input type="hidden" id="TotalDeposit" name="TotalDeposit">
				   </form>
				</div>
				<div class="social">
					@include('module.social')
				</div><!-- .social -->
			</div>

			<div class="col-md-3 col-sm-4 hidden-xs">
				@include('module.widget.support')

				@include('module.widget.tour_booking_guide')

				@include('module.widget.why_us')
			</div>
		</div>
	</div>
@stop