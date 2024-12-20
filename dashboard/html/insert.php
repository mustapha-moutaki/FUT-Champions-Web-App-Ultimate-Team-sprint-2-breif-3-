<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players_db";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  echo "not connected";
}

if (isset($_POST["create"])) {
  $name = $_POST['name'];
  $sql = "INSERT INTO players (name) values('$name')";
  $conn->query($sql);

}

// GETINF ALL DATA
$sql = 'SELECT name, position, player_id FROM players';

if ($conn->query($sql) === TRUE) {
  // 
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// got result
$result = mysqli_query($conn, $sql);

//fetch the resulting rowa as an array
$players = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory some we don't need conexion
mysqli_free_result($result);

// Close the connection


print_r($players);
  // $conn->close();
  // $stmt->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-container hide-scrollbar w-30 mx-auto  p-8 rounded shadow-lg">
<!-- <form id="playerForm" class="w-full" action="insert.php" method="POST"> -->
<form id="playerForm" class="w-full" action="insert.php" method="POST">
  <i class="fa-solid fa-xmark"></i>
  <div class="mb-4">
    <label for="name" class="block text-white font-medium">Name</label>
    <input
      type="text"
      id="name"
      name="name"
      class="name w-full p-2 border border-gray-300 rounded bg-black"
      placeholder="player name"
      required
    />
    <span class="error" id="nameError"></span>
  </div>

  <label class="block text-white font-medium">player photo</label>
  <div class="flex items-center space-x-6 h-20">
    <div class="shrink-0">
      <img
        id="preview_img"
        class="h-16 w-16 object-cover rounded-full"
        src="https://i.pinimg.com/originals/fc/2b/fb/fc2bfb60aa2686eb7304dfb3f60b976a.gif"
      />
    </div>
    <label class="block">
      <span class="sr-only">Choose player photo</span>
      <input
        type="file"
        id="photo"
        onchange="loadFile(event)"
        class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"
      />
    </label>
  </div>
  <span class="error" id="photoError" style="color: red"></span>

  <div class="mb-4">
    <label for="position" class="block text-white font-medium"
      >Position</label
    >
    <select
      id="position"
      name="position"
      class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
      required
    >
      <option value="selected" selected>choose a position</option>
      <option name="position" value="GK">GK</option>
      <option name="position" value="CBl">CBl</option>
      <option name="position" value="CBR">CBR</option>
      <option name="position" value="LB">LB</option>
      <option name="position" value="RB">RB</option>
      <option name="position" value="CML">CMl</option>
      <option name="position" value="CMR">CMR</option>
      <option name="position" value="LM">LM</option>
      <option name="position" value="RM">RM</option>
      <!-- <option value="LW">LW</option>
                    <option value="RW">RW</option> -->
      <option name="position" value="STL">STL</option>
      <option name="position" value="STR">STR</option>
    </select>
    <span
      class="error"
      id="positionError"
      style="color: red"
    ></span>
  </div>

  <div class="mb-4">
    <label for="nationality" class="block text-white font-medium"
      >Nationality</label
    >
    <select
      name="country"
      class="countryselect w-full p-2 border border-gray-300 rounded bg-black text-white p-6 required"
      id="nationality"
    >
      <option
        value="0"
        label="Select a country ... "
        selected="selected"
      >
        Select a country ...
      </option>
      <optgroup id="country-optgroup-Africa" label="Africa">
        <option name="country" value="DZ" label="Algeria">Algeria</option>
        <option name="country" value="AO" label="Angola">Angola</option>
        <option name="country" value="BJ" label="Benin">Benin</option>
        <option name="country" value="BW" label="Botswana">Botswana</option>
        <option name="country" value="BF" label="Burkina Faso">
          Burkina Faso
        </option>
        <option name="country" value="BI" label="Burundi">Burundi</option>
        <option name="country" value="CM" label="Cameroon">Cameroon</option>
        <option name="country" value="CV" label="Cape Verde">Cape Verde</option>
        <option name="country" value="CF" label="Central African Republic">
          Central African Republic
        </option>
        <option name="country" value="TD" label="Chad">Chad</option>
        <option name="country" value="KM" label="Comoros">Comoros</option>
        <option name="country" value="CG" label="Congo - Brazzaville">
          Congo - Brazzaville
        </option>
        <option name="country" value="CD" label="Congo - Kinshasa">
          Congo - Kinshasa
        </option>
        <option name="country" value="CI" label="Côte d’Ivoire">
          Côte d’Ivoire
        </option>
        <option name="country" value="DJ" label="Djibouti">Djibouti</option>
        <option name="country" value="EG" label="Egypt">Egypt</option>
        <option name="country" value="GQ" label="Equatorial Guinea">
          Equatorial Guinea
        </option>
        <option name="country" value="ER" label="Eritrea">Eritrea</option>
        <option name="country" value="ET" label="Ethiopia">Ethiopia</option>
        <option name="country" value="GA" label="Gabon">Gabon</option>
        <option name="country" value="GM" label="Gambia">Gambia</option>
        <option name="country" value="GH" label="Ghana">Ghana</option>
        <option name="country" value="GN" label="Guinea">Guinea</option>
        <option name="country" value="GW" label="Guinea-Bissau">
          Guinea-Bissau
        </option>
        <option name="country" value="KE" label="Kenya">Kenya</option>
        <option name="country" value="LS" label="Lesotho">Lesotho</option>
        <option name="country" value="LR" label="Liberia">Liberia</option>
        <option name="country" value="LY" label="Libya">Libya</option>
        <option name="country" value="MG" label="Madagascar">Madagascar</option>
        <option name="country" value="MW" label="Malawi">Malawi</option>
        <option name="country" value="ML" label="Mali">Mali</option>
        <option name="country" value="MR" label="Mauritania">Mauritania</option>
        <option name="country" value="MU" label="Mauritius">Mauritius</option>
        <option name="country" value="YT" label="Mayotte">Mayotte</option>
        <option name="country" value="MA" label="Morocco">Morocco</option>
        <option name="country" value="MZ" label="Mozambique">Mozambique</option>
        <option name="country" value="NA" label="Namibia">Namibia</option>
        <option name="country" value="NE" label="Niger">Niger</option>
        <option name="country" value="NG" label="Nigeria">Nigeria</option>
        <option name="country" value="RW" label="Rwanda">Rwanda</option>
        <option name="country" value="RE" label="Réunion">Réunion</option>
        <option name="country" value="SH" label="Saint Helena">
          Saint Helena
        </option>
        <option name="country" value="SN" label="Senegal">Senegal</option>
        <option name="country" value="SC" label="Seychelles">Seychelles</option>
        <option name="country" value="SL" label="Sierra Leone">
          Sierra Leone
        </option>
        <option name="country" value="SO" label="Somalia">Somalia</option>
        <option name="country" value="ZA" label="South Africa">
          South Africa
        </option>
        <option name="country" value="SD" label="Sudan">Sudan</option>
        <option name="country" value="SZ" label="Swaziland">Swaziland</option>
        <option name="country" value="ST" label="São Tomé and Príncipe">
          São Tomé and Príncipe
        </option>
        <option name="country" value="TZ" label="Tanzania">Tanzania</option>
        <option name="country" value="TG" label="Togo">Togo</option>
        <option name="country" value="TN" label="Tunisia">Tunisia</option>
        <option name="country" value="UG" label="Uganda">Uganda</option>
        <option name="country" value="EH" label="Western Sahara">
          Western Sahara
        </option>
        <option name="country" value="ZM" label="Zambia">Zambia</option>
        <option name="country" value="ZW" label="Zimbabwe">Zimbabwe</option>
      </optgroup>
      <optgroup id="country-optgroup-Americas" label="Americas">
        <option value="AI" label="Anguilla">Anguilla</option>
        <option value="AG" label="Antigua and Barbuda">
          Antigua and Barbuda
        </option>
        <option value="AR" label="Argentina">Argentina</option>
        <option value="AW" label="Aruba">Aruba</option>
        <option value="BS" label="Bahamas">Bahamas</option>
        <option value="BB" label="Barbados">Barbados</option>
        <option value="BZ" label="Belize">Belize</option>
        <option value="BM" label="Bermuda">Bermuda</option>
        <option value="BO" label="Bolivia">Bolivia</option>
        <option value="BR" label="Brazil">Brazil</option>
        <option value="VG" label="British Virgin Islands">
          British Virgin Islands
        </option>
        <option value="CA" label="Canada">Canada</option>
        <option value="KY" label="Cayman Islands">
          Cayman Islands
        </option>
        <option value="CL" label="Chile">Chile</option>
        <option value="CO" label="Colombia">Colombia</option>
        <option value="CR" label="Costa Rica">Costa Rica</option>
        <option value="CU" label="Cuba">Cuba</option>
        <option value="DM" label="Dominica">Dominica</option>
        <option value="DO" label="Dominican Republic">
          Dominican Republic
        </option>
        <option value="EC" label="Ecuador">Ecuador</option>
        <option value="SV" label="El Salvador">El Salvador</option>
        <option value="FK" label="Falkland Islands">
          Falkland Islands
        </option>
        <option value="GF" label="French Guiana">
          French Guiana
        </option>
        <option value="GL" label="Greenland">Greenland</option>
        <option value="GD" label="Grenada">Grenada</option>
        <option value="GP" label="Guadeloupe">Guadeloupe</option>
        <option value="GT" label="Guatemala">Guatemala</option>
        <option value="GY" label="Guyana">Guyana</option>
        <option value="HT" label="Haiti">Haiti</option>
        <option value="HN" label="Honduras">Honduras</option>
        <option value="JM" label="Jamaica">Jamaica</option>
        <option value="MQ" label="Martinique">Martinique</option>
        <option value="MX" label="Mexico">Mexico</option>
        <option value="MS" label="Montserrat">Montserrat</option>
        <option value="AN" label="Netherlands Antilles">
          Netherlands Antilles
        </option>
        <option value="NI" label="Nicaragua">Nicaragua</option>
        <option value="PA" label="Panama">Panama</option>
        <option value="PY" label="Paraguay">Paraguay</option>
        <option value="PE" label="Peru">Peru</option>
        <option value="PR" label="Puerto Rico">Puerto Rico</option>
        <option value="BL" label="Saint Barthélemy">
          Saint Barthélemy
        </option>
        <option value="KN" label="Saint Kitts and Nevis">
          Saint Kitts and Nevis
        </option>
        <option value="LC" label="Saint Lucia">Saint Lucia</option>
        <option value="MF" label="Saint Martin">
          Saint Martin
        </option>
        <option value="PM" label="Saint Pierre and Miquelon">
          Saint Pierre and Miquelon
        </option>
        <option value="VC" label="Saint Vincent and the Grenadines">
          Saint Vincent and the Grenadines
        </option>
        <option value="SR" label="Suriname">Suriname</option>
        <option value="TT" label="Trinidad and Tobago">
          Trinidad and Tobago
        </option>
        <option value="TC" label="Turks and Caicos Islands">
          Turks and Caicos Islands
        </option>
        <option value="VI" label="U.S. Virgin Islands">
          U.S. Virgin Islands
        </option>
        <option value="US" label="United States">
          United States
        </option>
        <option value="UY" label="Uruguay">Uruguay</option>
        <option value="VE" label="Venezuela">Venezuela</option>
      </optgroup>
      <optgroup id="country-optgroup-Asia" label="Asia">
        <option value="AF" label="Afghanistan">Afghanistan</option>
        <option value="AM" label="Armenia">Armenia</option>
        <option value="AZ" label="Azerbaijan">Azerbaijan</option>
        <option value="BH" label="Bahrain">Bahrain</option>
        <option value="BD" label="Bangladesh">Bangladesh</option>
        <option value="BT" label="Bhutan">Bhutan</option>
        <option value="BN" label="Brunei">Brunei</option>
        <option value="KH" label="Cambodia">Cambodia</option>
        <option value="CN" label="China">China</option>
        <option value="GE" label="Georgia">Georgia</option>
        <option value="HK" label="Hong Kong SAR China">
          Hong Kong SAR China
        </option>
        <option value="IN" label="India">India</option>
        <option value="ID" label="Indonesia">Indonesia</option>
        <option value="IR" label="Iran">Iran</option>
        <option value="IQ" label="Iraq">Iraq</option>
        <option value="IL" label="Israel">Israel</option>
        <option value="JP" label="Japan">Japan</option>
        <option value="JO" label="Jordan">Jordan</option>
        <option value="KZ" label="Kazakhstan">Kazakhstan</option>
        <option value="KW" label="Kuwait">Kuwait</option>
        <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
        <option value="LA" label="Laos">Laos</option>
        <option value="LB" label="Lebanon">Lebanon</option>
        <option value="MO" label="Macau SAR China">
          Macau SAR China
        </option>
        <option value="MY" label="Malaysia">Malaysia</option>
        <option value="MV" label="Maldives">Maldives</option>
        <option value="MN" label="Mongolia">Mongolia</option>
        <option value="MM" label="Myanmar [Burma]">
          Myanmar [Burma]
        </option>
        <option value="NP" label="Nepal">Nepal</option>
        <option value="NT" label="Neutral Zone">
          Neutral Zone
        </option>
        <option value="KP" label="North Korea">North Korea</option>
        <option value="OM" label="Oman">Oman</option>
        <option value="PK" label="Pakistan">Pakistan</option>
        <option value="PS" label="Palestinian Territories">
          Palestinian Territories
        </option>
        <option
          value="YD"
          label="People's Democratic Republic of Yemen"
        >
          People's Democratic Republic of Yemen
        </option>
        <option value="PH" label="Philippines">Philippines</option>
        <option value="QA" label="Qatar">Qatar</option>
        <option value="SA" label="Saudi Arabia">
          Saudi Arabia
        </option>
        <option value="SG" label="Singapore">Singapore</option>
        <option value="KR" label="South Korea">South Korea</option>
        <option value="LK" label="Sri Lanka">Sri Lanka</option>
        <option value="SY" label="Syria">Syria</option>
        <option value="TW" label="Taiwan">Taiwan</option>
        <option value="TJ" label="Tajikistan">Tajikistan</option>
        <option value="TH" label="Thailand">Thailand</option>
        <option value="TL" label="Timor-Leste">Timor-Leste</option>
        <option value="TR" label="Turkey">Turkey</option>
        <option value="TM" label="Turkmenistan">
          Turkmenistan
        </option>
        <option value="AE" label="United Arab Emirates">
          United Arab Emirates
        </option>
        <option value="UZ" label="Uzbekistan">Uzbekistan</option>
        <option value="VN" label="Vietnam">Vietnam</option>
        <option value="YE" label="Yemen">Yemen</option>
      </optgroup>
      <optgroup id="country-optgroup-Europe" label="Europe">
        <option value="AL" label="Albania">Albania</option>
        <option value="AD" label="Andorra">Andorra</option>
        <option value="AT" label="Austria">Austria</option>
        <option value="BY" label="Belarus">Belarus</option>
        <option value="BE" label="Belgium">Belgium</option>
        <option value="BA" label="Bosnia and Herzegovina">
          Bosnia and Herzegovina
        </option>
        <option value="BG" label="Bulgaria">Bulgaria</option>
        <option value="HR" label="Croatia">Croatia</option>
        <option value="CY" label="Cyprus">Cyprus</option>
        <option value="CZ" label="Czech Republic">
          Czech Republic
        </option>
        <option value="DK" label="Denmark">Denmark</option>
        <option value="DD" label="East Germany">
          East Germany
        </option>
        <option value="EE" label="Estonia">Estonia</option>
        <option value="FO" label="Faroe Islands">
          Faroe Islands
        </option>
        <option value="FI" label="Finland">Finland</option>
        <option value="FR" label="France">France</option>
        <option value="DE" label="Germany">Germany</option>
        <option value="GI" label="Gibraltar">Gibraltar</option>
        <option value="GR" label="Greece">Greece</option>
        <option value="GG" label="Guernsey">Guernsey</option>
        <option value="HU" label="Hungary">Hungary</option>
        <option value="IS" label="Iceland">Iceland</option>
        <option value="IE" label="Ireland">Ireland</option>
        <option value="IM" label="Isle of Man">Isle of Man</option>
        <option value="IT" label="Italy">Italy</option>
        <option value="JE" label="Jersey">Jersey</option>
        <option value="LV" label="Latvia">Latvia</option>
        <option value="LI" label="Liechtenstein">
          Liechtenstein
        </option>
        <option value="LT" label="Lithuania">Lithuania</option>
        <option value="LU" label="Luxembourg">Luxembourg</option>
        <option value="MK" label="Macedonia">Macedonia</option>
        <option value="MT" label="Malta">Malta</option>
        <option value="FX" label="Metropolitan France">
          Metropolitan France
        </option>
        <option value="MD" label="Moldova">Moldova</option>
        <option value="MC" label="Monaco">Monaco</option>
        <option value="ME" label="Montenegro">Montenegro</option>
        <option value="NL" label="Netherlands">Netherlands</option>
        <option value="NO" label="Norway">Norway</option>
        <option value="PL" label="Poland">Poland</option>
        <option value="PT" label="Portugal">Portugal</option>
        <option value="RO" label="Romania">Romania</option>
        <option value="RU" label="Russia">Russia</option>
        <option value="SM" label="San Marino">San Marino</option>
        <option value="RS" label="Serbia">Serbia</option>
        <option value="CS" label="Serbia and Montenegro">
          Serbia and Montenegro
        </option>
        <option value="SK" label="Slovakia">Slovakia</option>
        <option value="SI" label="Slovenia">Slovenia</option>
        <option value="ES" label="Spain">Spain</option>
        <option value="SJ" label="Svalbard and Jan Mayen">
          Svalbard and Jan Mayen
        </option>
        <option value="SE" label="Sweden">Sweden</option>
        <option value="CH" label="Switzerland">Switzerland</option>
        <option value="UA" label="Ukraine">Ukraine</option>
        <option
          value="SU"
          label="Union of Soviet Socialist Republics"
        >
          Union of Soviet Socialist Republics
        </option>
        <option value="GB" label="United Kingdom">
          United Kingdom
        </option>
        <option value="VA" label="Vatican City">
          Vatican City
        </option>
        <option value="AX" label="Åland Islands">
          Åland Islands
        </option>
      </optgroup>
      <optgroup id="country-optgroup-Oceania" label="Oceania">
        <option value="AS" label="American Samoa">
          American Samoa
        </option>
        <option value="AQ" label="Antarctica">Antarctica</option>
        <option value="AU" label="Australia">Australia</option>
        <option value="BV" label="Bouvet Island">
          Bouvet Island
        </option>
        <option value="IO" label="British Indian Ocean Territory">
          British Indian Ocean Territory
        </option>
        <option value="CX" label="Christmas Island">
          Christmas Island
        </option>
        <option value="CC" label="Cocos [Keeling] Islands">
          Cocos [Keeling] Islands
        </option>
        <option value="CK" label="Cook Islands">
          Cook Islands
        </option>
        <option value="FJ" label="Fiji">Fiji</option>
        <option value="PF" label="French Polynesia">
          French Polynesia
        </option>
        <option value="TF" label="French Southern Territories">
          French Southern Territories
        </option>
        <option value="GU" label="Guam">Guam</option>
        <option
          value="HM"
          label="Heard Island and McDonald Islands"
        >
          Heard Island and McDonald Islands
        </option>
        <option value="KI" label="Kiribati">Kiribati</option>
        <option value="MH" label="Marshall Islands">
          Marshall Islands
        </option>
        <option value="FM" label="Micronesia">Micronesia</option>
        <option value="NR" label="Nauru">Nauru</option>
        <option value="NC" label="New Caledonia">
          New Caledonia
        </option>
        <option value="NZ" label="New Zealand">New Zealand</option>
        <option value="NU" label="Niue">Niue</option>
        <option value="NF" label="Norfolk Island">
          Norfolk Island
        </option>
        <option value="MP" label="Northern Mariana Islands">
          Northern Mariana Islands
        </option>
        <option value="PW" label="Palau">Palau</option>
        <option value="PG" label="Papua New Guinea">
          Papua New Guinea
        </option>
        <option value="PN" label="Pitcairn Islands">
          Pitcairn Islands
        </option>
        <option value="WS" label="Samoa">Samoa</option>
        <option value="SB" label="Solomon Islands">
          Solomon Islands
        </option>
        <option
          value="GS"
          label="South Georgia and the South Sandwich Islands"
        >
          South Georgia and the South Sandwich Islands
        </option>
        <option value="TK" label="Tokelau">Tokelau</option>
        <option value="TO" label="Tonga">Tonga</option>
        <option value="TV" label="Tuvalu">Tuvalu</option>
        <option value="UM" label="U.S. Minor Outlying Islands">
          U.S. Minor Outlying Islands
        </option>
        <option value="VU" label="Vanuatu">Vanuatu</option>
        <option value="WF" label="Wallis and Futuna">
          Wallis and Futuna
        </option>
      </optgroup>
    </select>
    <span
      class="error"
      id="nationalityError"
      style="color: red"
    ></span>
  </div>

  <div class="mb-4">
    <label class="block text-white font-medium"
      >nationality photo</label
    >
    <div class="flex items-center space-x-6 h-20">
      <div class="shrink-0">
        <img
          id="flag_preview"
          class="h-16 w-16 object-cover rounded-full"
          src="https://i.pinimg.com/736x/5f/be/c6/5fbec6cfd1ff4f046e6d9de4e78ebc58.jpg"
        />
      </div>
      <label class="block">
        <span class="sr-only">Choose nationality photo</span>
        <input
          type="file"
          id="flag"
          onchange="loadFile(event, 'flag_preview')"
          class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" name ='flag'
        />
      </label>
    </div>
    <span class="error" id="flagError" style="color: red"></span>
  </div>

  <div class="mb-4">
    <label for="club" class="block text-white font-medium"
      >Club</label
    >
    <input
      type="text"
      id="club"
      name="club"
      class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
      placeholder="Enter Club"
      required
    />
    <span class="error" id="clubError"></span>
  </div>

  <div class="mb-4">
    <label class="block text-white font-medium">Club photo</label>
    <div class="flex items-center space-x-6 h-20">
      <div class="shrink-0">
        <img
          id="club_preview"
          class="h-16 w-16 object-cover rounded-full"
          src="https://i.pinimg.com/736x/59/54/29/5954296a5007cc5a0858de17ad8efbce.jpg"
        />
      </div>
      <label class="block">
        <span class="sr-only">Choose club photo</span>
        <input
          type="file"
          id="logo"
          onchange="loadFile(event, 'club_preview')"
          class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" name='clubphoto'
        />
      </label>
    </div>
    <span
      class="error"
      id="clublogoError"
      style="color: red"
    ></span>

    <div class="mb-4">
      <label for="rating" class="block text-white font-medium"
        >Rating</label
      >
      <input
        type="number"
        id="rating"
        name="rating"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Rating"
        required
      />
      <span
        class="error"
        id="ratingError"
        style="color: red"
      ></span>
    </div>
  </div>

  <div class="player-caracteristic" id="player-caracteristic">
    <div class="mb-4">
      <label for="pace" class="block text-white font-medium"
        >Pace</label
      >
      <input
        type="number"
        id="pace"
        name="pace"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Pace"
        required
      />
      <span class="error" id="paceError" style="color: red"></span>
    </div>

    <div class="mb-4">
      <label for="shooting" class="block text-white font-medium"
        >Shooting</label
      >
      <input
        type="number"
        id="shooting"
        name="shooting"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Shooting"
        required
      />
      <span
        class="error"
        id="shotingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="passing" class="block text-white font-medium"
        >Passing</label
      >
      <input
        type="number"
        id="passing"
        name="passing"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Passing"
        required
      />
      <span
        class="error"
        id="passingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="dribbling" class="block text-white font-medium"
        >Dribbling</label
      >
      <input
        type="number"
        id="dribbling"
        name="dribbling"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Dribbling"
        required
      />
      <span
        class="error"
        id="dribblingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="defending" class="block text-white font-medium"
        >Defending</label
      >
      <input
        type="number"
        id="defending"
        name="defending"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Defending"
        required
      />
      <span
        class="error"
        id="defendingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="physical" class="block text-white font-medium"
        >Physical</label
      >
      <input
        type="number"
        id="physical"
        name="physical"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter Physical"
        required
      />
      <span
        class="error"
        id="PhysicalError"
        style="color: red"
      ></span>
    </div>
  </div>

  <div class="goolKeper-caracteristic" id="goolKeper-caracteristic">
    <div class="mb-4">
      <label for="diving" class="block text-white font-medium"
        >diving</label
      >
      <input
        type="number"
        id="diving"
        name="diving"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter diving"
        required
      />
      <span
        class="error"
        id="divingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="shooting" class="block text-white font-medium"
        >handling</label
      >
      <input
        type="number"
        id="handling"
        name="handling"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter handling"
        required
      />
      <span
        class="error"
        id="handlingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="passing" class="block text-white font-medium"
        >kicking</label
      >
      <input
        type="number"
        id="kicking"
        name="kicking"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter kicking"
        required
      />
      <span
        class="error"
        id="kickingError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="dribbling" class="block text-white font-medium"
        >reflexes</label
      >
      <input
        type="number"
        id="reflexes"
        name="reflexes"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter reflexes"
        required
      />
      <span
        class="error"
        id="reflexesError"
        style="color: red"
      ></span>
    </div>

    <div class="mb-4">
      <label for="defending" class="block text-white font-medium"
        >speed</label
      >
      <input
        type="number"
        id="speed"
        name="speed"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter speed"
        required
      />
      <span class="error" id="speedError" style="color: red"></span>
    </div>

    <div class="mb-4">
      <label for="physical" class="block text-white font-medium"
        >positioning</label
      >
      <input
        type="number"
        id="positioning"
        name="physical"
        min="0"
        max="100"
        class="w-full p-2 border border-gray-300 rounded bg-black text-white p-6"
        placeholder="Enter positioning"
        required
      />
      <span
        class="error"
        id="positioningError"
        style="color: red"
      ></span>
    </div>
  </div>

  <!-- shoosing place  -->
  <div class="radio-input">
    <label class="label">
      <input value="op1" name="option" id="value-1" type="radio" />
      <span class="text active">Player</span>
    </label>
    <label class="label">
      <input value="op2" name="option" id="value-1" type="radio" />
      <span class="text">substitute</span>
    </label>
  </div>
  <span class="error" id="optionError" style="color: red"></span>

  <!-- shoosing place  -->

  <div class="mb-6 text-center w-30">
    <!-- <button type="submit" class="bg-sky-500 text-white p-2 rounded hover:bg-gray-400 border-white addplayerBtn" id="submitbtn" name="create">
      Add Player 
    </button> -->

    
  </div>
  
</form>
<button type="submit" class="bg-sky-500 text-white p-2 rounded hover:bg-gray-400 border-white" name="create">
      Add Player 
    </button>
</div>
</body>
</html>