<style>
  /* ====== Validation UI ====== */
  .field-wrap {
    position: relative;
  }

  /* red border */
  .is-invalid {
    border: 1px solid #dc3545 !important;
    outline: none !important;
    box-shadow: none !important;
  }

  /* red star inside input box */
  .star-inside {
    position: absolute;
    right: 8px;
    top: 48%;
    transform: translateY(-50%);
    color: #dc3545;
    font-weight: 900;
    font-size: 18px;
    /* display: none; */
    pointer-events: none;
  }

  .field-wrap.invalid .star-inside {
    display: block;
  }

  /* for textarea star position */
  .field-wrap.textarea .star-inside {
    top: 18px;
    transform: none;
  }

  /* commodity list invalid box */
  .invalid-box {
    border: 1px solid #dc3545;
    padding: 10px;
    border-radius: 6px;
  }
</style>

<style>
  .required-label::before {
    content: "* ";
    color: red;
    font-weight: bold;
  }
</style>

<form id="contactForm" action="{{ route('application.send') }}" method="POST" class="wrapper-contact container" novalidate>
  <p>{{ app()->getLocale() === 'en' ? 'Contact Form' : (app()->getLocale() === 'km' ? 'ទម្រង់បែបបទបំពេញពត៌មាន' : '联系表格') }}</p>

  <div class="row md:text-lg text-sm">
    @csrf

    <!-- Name -->
    <div class="col-lg-6 col-md-6 input-field">
      <div class="field-wrap">
        <input class="col-12" name="name" required
          placeholder="{{ app()->getLocale() === 'en' ? 'Name' : (app()->getLocale() === 'km' ? 'ឈ្មោះ' : '姓名') }}">
        <span class="star-inside">*</span>
      </div>
    </div>
    <!-- Phone -->
    <div class="col-lg-6 col-md-6 col-12 input-field">
      <div class="d-flex gap-2 flex-nowrap">
        <div class="field-wrap" style="max-width:170px; width:100%;">
          <select
            id="country_code"
            name="country_code"
            class="form-select sm:w-[]"
            style="max-width:180px;"
            required>
            <option value="">
              {{ app()->getLocale() === 'en'
          ? 'Country Code'
          : (app()->getLocale() === 'km'
            ? 'កូដប្រទេស'
            : '国家代码') }}

            </option>
            <option value="+93">Afghanistan (+93)</option>
            <option value="+355">Albania (+355)</option>
            <option value="+213">Algeria (+213)</option>
            <option value="+376">Andorra (+376)</option>
            <option value="+244">Angola (+244)</option>
            <option value="+54">Argentina (+54)</option>
            <option value="+374">Armenia (+374)</option>
            <option value="+61">Australia (+61)</option>
            <option value="+43">Austria (+43)</option>
            <option value="+994">Azerbaijan (+994)</option>
            <option value="+973">Bahrain (+973)</option>
            <option value="+880">Bangladesh (+880)</option>
            <option value="+375">Belarus (+375)</option>
            <option value="+32">Belgium (+32)</option>
            <option value="+501">Belize (+501)</option>
            <option value="+229">Benin (+229)</option>
            <option value="+975">Bhutan (+975)</option>
            <option value="+591">Bolivia (+591)</option>
            <option value="+387">Bosnia and Herzegovina (+387)</option>
            <option value="+267">Botswana (+267)</option>
            <option value="+55">Brazil (+55)</option>
            <option value="+673">Brunei (+673)</option>
            <option value="+359">Bulgaria (+359)</option>
            <option value="+226">Burkina Faso (+226)</option>
            <option value="+257">Burundi (+257)</option>
            <option value="+855">Cambodia (+855)</option>
            <option value="+237">Cameroon (+237)</option>
            <option value="+1">Canada (+1)</option>
            <option value="+238">Cape Verde (+238)</option>
            <option value="+236">Central African Republic (+236)</option>
            <option value="+235">Chad (+235)</option>
            <option value="+56">Chile (+56)</option>
            <option value="+86">China (+86)</option>
            <option value="+57">Colombia (+57)</option>
            <option value="+269">Comoros (+269)</option>
            <option value="+242">Congo (+242)</option>
            <option value="+506">Costa Rica (+506)</option>
            <option value="+385">Croatia (+385)</option>
            <option value="+53">Cuba (+53)</option>
            <option value="+357">Cyprus (+357)</option>
            <option value="+420">Czech Republic (+420)</option>
            <option value="+45">Denmark (+45)</option>
            <option value="+253">Djibouti (+253)</option>
            <option value="+593">Ecuador (+593)</option>
            <option value="+20">Egypt (+20)</option>
            <option value="+503">El Salvador (+503)</option>
            <option value="+240">Equatorial Guinea (+240)</option>
            <option value="+291">Eritrea (+291)</option>
            <option value="+372">Estonia (+372)</option>
            <option value="+251">Ethiopia (+251)</option>
            <option value="+358">Finland (+358)</option>
            <option value="+33">France (+33)</option>
            <option value="+995">Georgia (+995)</option>
            <option value="+49">Germany (+49)</option>
            <option value="+233">Ghana (+233)</option>
            <option value="+30">Greece (+30)</option>
            <option value="+502">Guatemala (+502)</option>
            <option value="+852">Hong Kong (+852)</option>
            <option value="+36">Hungary (+36)</option>
            <option value="+354">Iceland (+354)</option>
            <option value="+91">India (+91)</option>
            <option value="+62">Indonesia (+62)</option>
            <option value="+98">Iran (+98)</option>
            <option value="+964">Iraq (+964)</option>
            <option value="+353">Ireland (+353)</option>
            <option value="+972">Israel (+972)</option>
            <option value="+39">Italy (+39)</option>
            <option value="+81">Japan (+81)</option>
            <option value="+962">Jordan (+962)</option>
            <option value="+7">Kazakhstan (+7)</option>
            <option value="+254">Kenya (+254)</option>
            <option value="+82">Korea, South (+82)</option>
            <option value="+965">Kuwait (+965)</option>
            <option value="+856">Laos (+856)</option>
            <option value="+371">Latvia (+371)</option>
            <option value="+961">Lebanon (+961)</option>
            <option value="+370">Lithuania (+370)</option>
            <option value="+60">Malaysia (+60)</option>
            <option value="+960">Maldives (+960)</option>
            <option value="+52">Mexico (+52)</option>
            <option value="+95">Myanmar (+95)</option>
            <option value="+31">Netherlands (+31)</option>
            <option value="+64">New Zealand (+64)</option>
            <option value="+234">Nigeria (+234)</option>
            <option value="+47">Norway (+47)</option>
            <option value="+92">Pakistan (+92)</option>
            <option value="+63">Philippines (+63)</option>
            <option value="+48">Poland (+48)</option>
            <option value="+351">Portugal (+351)</option>
            <option value="+974">Qatar (+974)</option>
            <option value="+40">Romania (+40)</option>
            <option value="+7">Russia (+7)</option>
            <option value="+966">Saudi Arabia (+966)</option>
            <option value="+65">Singapore (+65)</option>
            <option value="+421">Slovakia (+421)</option>
            <option value="+386">Slovenia (+386)</option>
            <option value="+27">South Africa (+27)</option>
            <option value="+34">Spain (+34)</option>
            <option value="+94">Sri Lanka (+94)</option>
            <option value="+46">Sweden (+46)</option>
            <option value="+41">Switzerland (+41)</option>
            <option value="+66">Thailand (+66)</option>
            <option value="+90">Turkey (+90)</option>
            <option value="+380">Ukraine (+380)</option>
            <option value="+971">United Arab Emirates (+971)</option>
            <option value="+44">United Kingdom (+44)</option>
            <option value="+1">United States (+1)</option>
            <option value="+598">Uruguay (+598)</option>
            <option value="+998">Uzbekistan (+998)</option>
            <option value="+84">Vietnam (+84)</option>
            <option value="+263">Zimbabwe (+263)</option>

          </select>
          <span class="star-inside" style="margin-right: -3px;">*</span>
        </div>

        <div class="field-wrap" style="flex:1;">
          <input
            id="phone"
            type="tel"
            name="phone"
            placeholder="{{ app()->getLocale() === 'en' ? 'Mobile Phone' : (app()->getLocale() === 'km' ? 'ទូរសព្ទ' : '手机号码') }}"
            required
            autocomplete="tel" />
        </div>
      </div>
    </div>

    <!-- Company -->
    <div class="col-lg-6 col-md-6 input-field">
      <div class="field-wrap">
        <input class="col-12" name="company" required
          placeholder="{{ app()->getLocale() === 'en' ? 'Company Name' : (app()->getLocale() === 'km' ? 'ឈ្មោះក្រុមហ៊ុន' : '公司名称') }}">
        <span class="star-inside">*</span>
      </div>
    </div>

    <!-- Trade type -->
    <div class="col-lg-6 col-md-6 input-field">
      <div class="field-wrap">
        <span class="star-inside" style="margin-right: -3px; margin-top: 4px;">*</span>
        <select name="trade_type" id="tradeType" class="form-select" required>
          <option value="">{{ app()->getLocale() === 'en' ? 'Select Import/Export' : (app()->getLocale() === 'km' ? 'ជ្រើសរើសទំនិញ នាំចូល/នាំចេញ ' : '选择进出口') }}</option>
          <option value="import">{{ app()->getLocale() === 'en' ? 'Import' : (app()->getLocale() === 'km' ? 'នាំចូល (ជ្រើសរើសទំនិញ)' : '进口 - Import') }}</option>
          <option value="export">{{ app()->getLocale() === 'en' ? 'Export' : (app()->getLocale() === 'km' ? 'នាំចេញ (ជ្រើសរើសទំនិញ)' : '出口 - Export') }}</option>
          <option value="local_buying">{{ app()->getLocale() === 'en' ? 'Local Buying' : (app()->getLocale() === 'km' ? 'ការទិញក្នុងប្រទេស' : '本地采购') }}</option>
        </select>
        <!-- <span class="star-inside">*</span> -->
      </div>
    </div>

    <!-- Country -->
    <div class="col-lg-6 col-md-6 input-field">
      <div class="field-wrap">
         <span class="star-inside" style="margin-right: -3px; margin-top: 4px;">*</span>
        <select name="country" class="form-select" aria-label="Default select example" required>
          <option value="" selected disabled>{{ app()->getLocale() === 'en' ? 'Country' : (app()->getLocale() === 'km' ? 'ប្រទេស (ជ្រើសរើសប្រទេស)' : '选择国家/地区') }}</option>
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
        <!-- <span class="star-inside">*</span> -->
      </div>
    </div>

    <!-- Commodities (required: at least 1 checkbox) -->
    <div class="col-lg-6 col-md-6">
      {{-- <label class="choose-field">
        {{ app()->getLocale() === 'en'
      ? 'Commodities (Please select Import or Export first)'
      : (app()->getLocale() === 'km'
        ? 'ទំនិញ'
        : '商品种类') }}
      </label> --}}

      <div id="commodityListWrap">
        <div id="commodityList" class="showcommoditylist w-full bg-[#059848] text-white rounded-[24.5px] pl-4"></div>

        <div id="otherWrapper" class="hidden lg:ml-24 ml-24 lg:mt-[-30px] lg:w-[450px] w-[400px] lg:h-11">
          <div class="w-full">
            <input
              type="text"
              name="commodity_other"
              id="commodityOtherInput"
              class="relative lg:top-[0px] md:top-[-30px] sm:top-[-30px] top-[-30px] lg:w-[450px]  h-7 rounded-md border border-gray-300 lg:px-7 px-4 py-2 text-sm md:w-[270px] sm:w-[370px] w-[350px]
                 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
              placeholder="{{ app()->getLocale() === 'en'
            ? 'Please specify other commodity'
            : (app()->getLocale() === 'km'
              ? 'សូមបញ្ជាក់ផលិតផលផ្សេងៗ'
              : '请注明其他商品') }}">
          </div>
        </div>
      </div>
    </div>

    <!-- Address -->
    <div class="col-lg-6 col-md-6 input-field">
      <div class="field-wrap">
        <input class="col-12" name="address" required
          placeholder="{{ app()->getLocale() === 'en' ? 'Address' : (app()->getLocale() === 'km' ? 'អាសយដ្ឋាន' : '地址') }}">
        <span class="star-inside">*</span>
      </div>
    </div>

    <!-- Email -->
    <div class="col-lg-6 col-md-6 input-field">
      <div class="field-wrap">
        <input class="col-12" name="email" required
          placeholder="{{ app()->getLocale() === 'en' ? 'Email' : (app()->getLocale() === 'km' ? 'សារអេឡិចត្រូនិក (អ៉ីម៉ែល)' : '电子邮件') }}">
        <span class="star-inside">*</span>
      </div>
    </div>

    <!-- Message (optional) -->
    <div class="col-12 input-field">
      <div class="field-wrap textarea">
        <textarea class="col-12" name="message"
          placeholder="{{ app()->getLocale() === 'en' ? 'Messages' : (app()->getLocale() === 'km' ? 'សារ' : '留言') }}"></textarea>
      </div>
    </div>
  </div>

  <!-- Policy -->
  <div class="confirm-policy">
    <div class="nowrap d-flex align-items-top">
      <input type="checkbox" name="policy" required>
      <div class="confrim-policy-text">
        <p>{{ app()->getLocale() === 'en' ? 'I consent to having this website store my submitted information so they can respond to my enquiry.'
          : (app()->getLocale() === 'km' ? 'ខ្ញុំយល់ព្រមឱ្យស្ថាប័ននេះរក្សាទុកព័ត៌មានដែលខ្ញុំបានដាក់ស្នើសួរដើម្បីអាចឆ្លើយតបទៅនឹងសំណួររបស់ខ្ញុំ។'
          : '我同意該機構可以儲存我提交的信息，以便回复我的問題。') }}</p>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center">
    <button class="btn-Submit" type="submit">
      <img src="{{ asset('assets/images/btn-submit-bg.png') }}">
      <p>{{ app()->getLocale() === 'en' ? 'Submit' : (app()->getLocale() === 'km' ? 'ដាក់បញ្ជូន' : '提交') }}</p>
    </button>
  </div>
</form>