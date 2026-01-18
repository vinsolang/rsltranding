  <style>
  .required-label::before {
    content: "* ";
    color: red;
    font-weight: bold;
  }
</style>

  <form action="{{ route('contact.send') }}" method="POST" class="wrapper-contact container">
            <p>{{ app()->getLocale() === 'en' ? 'Contact Form' : (app()->getLocale() === 'km' ? 'ទម្រង់បែបបទបំពេញពត៌មាន' : '联系表格') }}</p>
            <div class="row">
                @csrf
                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="name" required placeholder="{{ app()->getLocale() === 'en' ? 'Name' : (app()->getLocale() === 'km' ? 'ឈ្មោះ' : '姓名') }}">
                </div>
                <!-- <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="phone" placeholder="{{ app()->getLocale() === 'en' ? 'Mobile Phone' : (app()->getLocale() === 'km' ? 'ទូរសព្ទ' : '手机号码') }}">
                </div> -->
                <div class="col-lg-6 col-md-6 col-12 input-field">
                    <div class="d-flex gap-2 flex-nowrap">
                        <select
                        id="country_code"
                        name="country_code"
                        class="form-select sm:w-[]"
                        style="max-width:170px;"
                        required
                        >
                            <option value="">
                                {{ app()->getLocale() === 'en'
                                    ? 'Country Code'
                                    : (app()->getLocale() === 'km'
                                        ? 'កូដប្រទេស'
                                        : '国家代码') }}
                            </option>
                            <option value="+93">(+93)</option>
                            <option value="+355">(+355)</option>
                            <option value="+213">(+213)</option>
                            <option value="+376">(+376)</option>
                            <option value="+244">(+244)</option>
                            <option value="+54">(+54)</option>
                            <option value="+374">(+374)</option>
                            <option value="+61">(+61)</option>
                            <option value="+43">(+43)</option>
                            <option value="+994">(+994)</option>
                            <option value="+973">(+973)</option>
                            <option value="+880">(+880)</option>
                            <option value="+375">(+375)</option>
                            <option value="+32">(+32)</option>
                            <option value="+501">(+501)</option>
                            <option value="+229">(+229)</option>
                            <option value="+975">(+975)</option>
                            <option value="+591">(+591)</option>
                            <option value="+387">(+387)</option>
                            <option value="+267">(+267)</option>
                            <option value="+55">(+55)</option>
                            <option value="+673">(+673)</option>
                            <option value="+359">(+359)</option>
                            <option value="+226">(+226)</option>
                            <option value="+257">(+257)</option>
                            <option value="+855">(+855)</option>
                            <option value="+237">(+237)</option>
                            <option value="+1">(+1)</option>
                            <option value="+238">(+238)</option>
                            <option value="+236">(+236)</option>
                            <option value="+235">(+235)</option>
                            <option value="+56">(+56)</option>
                            <option value="+86">(+86)</option>
                            <option value="+57">(+57)</option>
                            <option value="+269">(+269)</option>
                            <option value="+242">(+242)</option>
                            <option value="+506">(+506)</option>
                            <option value="+385">(+385)</option>
                            <option value="+53">(+53)</option>
                            <option value="+357">(+357)</option>
                            <option value="+420">(+420)</option>
                            <option value="+45">(+45)</option>
                            <option value="+253">(+253)</option>
                            <option value="+593">(+593)</option>
                            <option value="+20">(+20)</option>
                            <option value="+503">(+503)</option>
                            <option value="+240">(+240)</option>
                            <option value="+291">(+291)</option>
                            <option value="+372">(+372)</option>
                            <option value="+251">(+251)</option>
                            <option value="+358">(+358)</option>
                            <option value="+33">(+33)</option>
                            <option value="+995">(+995)</option>
                            <option value="+49">(+49)</option>
                            <option value="+233">(+233)</option>
                            <option value="+30">(+30)</option>
                            <option value="+502">(+502)</option>
                            <option value="+852">(+852)</option>
                            <option value="+36">(+36)</option>
                            <option value="+354">(+354)</option>
                            <option value="+91">(+91)</option>
                            <option value="+62">(+62)</option>
                            <option value="+98">(+98)</option>
                            <option value="+964">(+964)</option>
                            <option value="+353">(+353)</option>
                            <option value="+972">(+972)</option>
                            <option value="+39">(+39)</option>
                            <option value="+81">(+81)</option>
                            <option value="+962">(+962)</option>
                            <option value="+7">(+7)</option>
                            <option value="+254">(+254)</option>
                            <option value="+82">(+82)</option>
                            <option value="+965">(+965)</option>
                            <option value="+856">(+856)</option>
                            <option value="+371">(+371)</option>
                            <option value="+961">(+961)</option>
                            <option value="+370">(+370)</option>
                            <option value="+60">(+60)</option>
                            <option value="+960">(+960)</option>
                            <option value="+52">(+52)</option>
                            <option value="+95">(+95)</option>
                            <option value="+31">(+31)</option>
                            <option value="+64">(+64)</option>
                            <option value="+234">(+234)</option>
                            <option value="+47">(+47)</option>
                            <option value="+92">(+92)</option>
                            <option value="+63">(+63)</option>
                            <option value="+48">(+48)</option>
                            <option value="+351">(+351)</option>
                            <option value="+974">(+974)</option>
                            <option value="+40">(+40)</option>
                            <option value="+7">(+7)</option>
                            <option value="+966">(+966)</option>
                            <option value="+65">(+65)</option>
                            <option value="+421">(+421)</option>
                            <option value="+386">(+386)</option>
                            <option value="+27">(+27)</option>
                            <option value="+34">(+34)</option>
                            <option value="+94">(+94)</option>
                            <option value="+46">(+46)</option>
                            <option value="+41">(+41)</option>
                            <option value="+66">(+66)</option>
                            <option value="+90">(+90)</option>
                            <option value="+380">(+380)</option>
                            <option value="+971">(+971)</option>
                            <option value="+44">(+44)</option>
                            <option value="+1">(+1)</option>
                            <option value="+598">(+598)</option>
                            <option value="+998">(+998)</option>
                            <option value="+84">(+84)</option>
                            <option value="+263">(+263)</option>
                    </select>
                        <input
                            id="phone"
                            type="tel"
                            name="phone"
                            class="form-control"
                            placeholder="{{ app()->getLocale() === 'en' ? 'Mobile Phone' : (app()->getLocale() === 'km' ? 'ទូរសព្ទ' : '手机号码') }}"
                            required
                            autocomplete="tel"
                            />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="company" required  placeholder="{{ app()->getLocale() === 'en' ? 'Company Name' : (app()->getLocale() === 'km' ? 'ឈ្មោះក្រុមហ៊ុន' : '公司名称') }}">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <select name="trade_type" id="tradeType" class="form-select" required>
                        <option value="">{{ app()->getLocale() === 'en' ? 'Select Import/Export' : (app()->getLocale() === 'km' ? 'ជ្រើសរើសទំនិញ នាំចូល/នាំចេញ ' : '选择进出口') }}</option>
                        <option value="import">{{ app()->getLocale() === 'en' ? 'Import' : (app()->getLocale() === 'km' ? 'នាំចូល (ជ្រើសរើសទំនិញ)' : '进口 - Import') }}</option>
                        <option value="export">{{ app()->getLocale() === 'en' ? 'Export' : (app()->getLocale() === 'km' ? 'នាំចេញ (ជ្រើសរើសទំនិញ)' : '出口 - Export') }}</option>
                        <option value="local_buying">{{ app()->getLocale() === 'en' ? 'Local Buying' : (app()->getLocale() === 'km' ? 'ការទិញក្នុងប្រទេស' : '本地采购') }}</option>
                    </select>
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <select name="country" class="form-select" aria-label="Default select example" required>
                        <option selected disabled>{{ app()->getLocale() === 'en' ? 'Country' : (app()->getLocale() === 'km' ? 'ប្រទេស (ជ្រើសរើសប្រទេស)' : '选择国家/地区') }}</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="North Korea">North Korea</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="USA">USA</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>

                </div>


                <div class="col-lg-6 col-md-6">
                    <label class="choose-field">{{ app()->getLocale() === 'en' ? 'Commodities' : (app()->getLocale() === 'km' ? 'ទំនិញ' : '商品种类') }}</label>
                    <div id="commodityList" class="showcommoditylist"></div>
                    <div id="otherWrapper" style="display:none; margin-top:10px;">
                        <input type="text"
                            name="commodity_other"
                            id="commodityOtherInput"
                            class="form-control form-control-sm"
                            placeholder="{{ app()->getLocale() === 'en' ? 'Please specify other commodity' : (app()->getLocale() === 'km' ? 'សូមបញ្ជាក់ផលិតផលផ្សេងៗ' : '请注明其他商品') }}">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="address" required placeholder="{{ app()->getLocale() === 'en' ? 'Address' : (app()->getLocale() === 'km' ? 'អាសយដ្ឋាន' : '地址') }}">
                </div>

                <div class="col-lg-6 col-md-6 input-field">
                    <input class="col-12" name="email" required placeholder="{{ app()->getLocale() === 'en' ? 'Email' : (app()->getLocale() === 'km' ? 'សារអេឡិចត្រូនិក (អ៉ីម៉ែល)' : '电子邮件') }}">
                </div>

                <div class="col-12 input-field">
                    <textarea class="col-12" name="message" placeholder="{{ app()->getLocale() === 'en' ? 'Messages' : (app()->getLocale() === 'km' ? 'សារ' : '留言') }}"></textarea>
                </div>
            </div>

            <div class="confirm-policy">
                <input type="checkbox" name="policy" required>
                <div class="confrim-policy-text">
                    <p>{{ app()->getLocale() === 'en' ? 'I consent to having this website store my submitted information so they can respond to my enquiry.' 
                    : (app()->getLocale() === 'km' ? 'ខ្ញុំយល់ព្រមឱ្យស្ថាប័ននេះរក្សាទុកព័ត៌មានដែលខ្ញុំបានដាក់ស្នើសួរដើម្បីអាចឆ្លើយតបទៅនឹងសំណួររបស់ខ្ញុំ។' 
                    : '我同意該機構可以儲存我提交的信息，以便回复我的問題。') }}
                    </p>
                </div>
            </div>


            <div class="d-flex justify-content-center">
                <button class="btn-Submit">
                    <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
                    <p>{{ app()->getLocale() === 'en' ? 'Submit' : (app()->getLocale() === 'km' ? 'ដាក់បញ្ជូន' : '提交') }}</p>
                </button>
            </div>
        </form>