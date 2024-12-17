<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "players_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully helooooooooooooooooooooo77777777777777ooooooooooooo";

// Close the connection
$conn->close();
?>














<!doctype html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  >
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard -TEAM BUILDER</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
   <!-- <link rel="stylesheet" href="dashboard/dist/css/style_dashboard.css"> -->
    <link rel="stylesheet" href="http://localhost/FUT-Champions-Web-App-Ultimate-Team-sprint-2-breif-3-/dashboard/dist/css/style_dashboard.css"> 

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/remixicon/remixicon.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="../assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <script src="../assets/js/config.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

  </head>

  <->
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                  <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                      fill="currentColor" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z"
                      fill="black" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z"
                      fill="black" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                      fill="currentColor" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z"
                      fill="black" />
                    <path
                      opacity="0.077704"
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z"
                      fill="black" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                      fill="white"
                      fill-opacity="0.15" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                      fill="currentColor" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                      fill="white"
                      fill-opacity="0.3" />
                  </svg>
                </span>
              </span>
              <span class="app-brand-text demo menu-text fw-semibold ms-2">team builder</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="menu-toggle-icon d-xl-block align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
             
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="/index.html" class="menu-link">
                    <div data-i18n="Analytics">PREVIEW</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href=""
                    class="menu-link">
                    <div data-i18n="eCommerce">Players</div>
                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href=""
                    target="_blank"
                    class="menu-link">
                    <div data-i18n="Logistics">Analytics</div>
                    <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Layouts -->

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="ri-menu-fill ri-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="ri-search-line ri-22px me-2"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-4">
                  <a id="new_player_from_dashboard">add player</a>
                </li>
                <li class="nav-item lh-1 me-4">
                  <a
                    class="github-button" 
                    href="https://github.com/themeselection/materio-bootstrap-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/materio-bootstrap-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0 small">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="ri-user-3-line ri-22px me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="ri-settings-4-line ri-22px me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 ri-file-text-line ri-22px me-3"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span
                            class="flex-shrink-0 badge badge-center rounded-pill bg-danger h-px-20 d-flex align-items-center justify-content-center"
                            >4</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <div class="d-grid px-4 pt-2 pb-1">
                        <a class="btn btn-danger d-flex" href="javascript:void(0);">
                          <small class="align-middle">Logout</small>
                          <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper w-full">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y w-full ">
              <div class="row gy-6">
               

                <div class="order-xxl-1 order-2 w-full">
                  <div class="card overflow-hidden h-100 w-full">
                    <div class="table-responsive w-full">
                      <table class="table table-lg w-full">
                        <thead>
                          <tr>
                            <th class="text-truncate">player ID</th>
                            <th class="text-truncate">club</th>
                            <th class="text-truncate">full name</th>
                            <th class="text-truncate">position</th>
                            <th class="text-truncate">stats</th>
                            <th class="text-truncate">delete All(01)</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-primary"><a href="./app-invoice-preview.html">#1</a></td>
                            <td>
                              <div class="avatar avatar-sm">
                                <div class="avatar-initial bg-label-success rounded-circle">
                                  <i class="ri-check-line ri-16px"></i>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3">
                                  <img src="../../assets/img/avatars/1.png" alt="Avatar" class="rounded-circle">
                                </div>
                                <div>
                                  <h6 class="mb-0 text-truncate"><a href="pages-profile-user.html" class="text-heading">leon messi</a></h6>
                                  <small class="text-truncate">Layne_Kuvalis@gmail.com</small>
                                </div>
                              </div>
                            </td>
                            <td class="text-truncate">st</td>
                            <td><span class="badge bg-label-success rounded-pill fw-normal stats_player_span">
                              <div class="stats_of_player">
                                <ul>
                                  <li id="btn_player_stats_show">see stats</li>
                                  <div class="stats_of_player_details">
                                  <li>rating: 89</li>
                                  <li>pace: 89</li>
                                  <li>passing: 89</li>
                                  <li>physical: 80</li>
                                </div>
                                </ul>
                              </div>
                            </span></td>
                            <td>
                              <div class="crud_table">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-trash"></i>
                              </div>
                            </td>
                          </tr>
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>   
                         
               
              
               
              </div>
            </div>
           
              </div>







<footer>
  <div
  class="form-container hide-scrollbar w-30 mx-auto  p-8 rounded shadow-lg">
  <form id="playerForm" class="w-full" action="" method="post">
    <i class="fa-solid fa-xmark"></i>
    <div class="mb-4">
      <label for="name" class="block text-white font-medium"
        >Name</label
      >
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
            class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"
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
            class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"
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
      <button
        type="submit"
        class="bg-sky-500 text-white p-2 rounded hover:bg-gray-400 border-white addplayerBtn"
        id="submitbtn">
        Add Player
      </button>
    </div>
  </form>
</div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade">
            
            </div>
          </div>
          <!-- Content wrapper -->
        </div>
        
        <!-- / Layout page -->
      </div>
      <!-- Overlay -->
    <!-- / Layout wrapper -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--font awsome cdn-->>
    <script src="https://kit.fontawesome.com/8c368585c9.js" crossorigin="anonymous"></script>

    <script src="http://localhost/FUT-Champions-Web-App-Ultimate-Team-sprint-2-breif-3-/script.js"></script>
    
  </body>
</html>
