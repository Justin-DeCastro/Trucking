
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

@include('Components.Admin.Header')

<body>

        
    <div class="page-wrapper default-version">

   
@include('Components.Admin.Sidebar')
<!-- sidebar end -->

        <!-- navbar-wrapper start -->
<nav class="navbar-wrapper bg--dark d-flex flex-wrap">
    <div class="navbar__left">
        <button type="button" class="res-sidebar-open-btn me-3"><i class="las la-bars"></i></button>
        <form class="navbar-search">
            <input type="search" name="#0" class="navbar-search-field" id="searchInput" autocomplete="off"
                placeholder="Search here...">
            <i class="las la-search"></i>
            <ul class="search-list"></ul>
        </form>
    </div>
    <div class="navbar__right">
        <ul class="navbar__action-list">
                        <li>
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visit Website">
                    <a href="https://script.viserlab.com/courierlab/demo" target="_blank"><i class="las la-globe"></i></a>
                </button>
            </li>
            <li class="dropdown">
                <button type="button" class="primary--layer notification-bell" data-bs-toggle="dropdown" data-display="static"
                    aria-haspopup="true" aria-expanded="false">
                    <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Unread Notifications">
                        <i class="las la-bell "></i>
                    </span>
                                    </button>
                <div class="dropdown-menu dropdown-menu--md p-0 border-0 box--shadow1 dropdown-menu-right">
                    <div class="dropdown-menu__header">
                        <span class="caption">Notification</span>
                                            </div>
                    <div class="dropdown-menu__body  d-flex justify-content-center align-items-center ">
                                                <div class="empty-notification text-center">
                            <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
                            <p class="mt-3">No unread notification found</p>
                        </div>
                                            </div>
                    <div class="dropdown-menu__footer">
                        <a href="https://script.viserlab.com/courierlab/demo/admin/notifications"
                            class="view-all-message">View all notifications</a>
                    </div>
                </div>
            </li>
            <li>
                <button type="button" class="primary--layer" data-bs-toggle="tooltip" data-bs-placement="bottom" title="System Setting">
                    <a href="https://script.viserlab.com/courierlab/demo/admin/system-setting"><i class="las la-wrench"></i></a>
                </button>
            </li>
            <li class="dropdown d-flex profile-dropdown">
                <button type="button" data-bs-toggle="dropdown" data-display="static" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="navbar-user">
                        <span class="navbar-user__thumb"><img src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/images/profile/667c14b5145fd1719407797.png" alt="image"></span>
                        <span class="navbar-user__info">
                            <span class="navbar-user__name">admin</span>
                        </span>
                        <span class="icon"><i class="las la-chevron-circle-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu--sm p-0 border-0 box--shadow1 dropdown-menu-right">
                    <a href="https://script.viserlab.com/courierlab/demo/admin/profile"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-user-circle"></i>
                        <span class="dropdown-menu__caption">Profile</span>
                    </a>

                    <a href="https://script.viserlab.com/courierlab/demo/admin/password"
                        class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-key"></i>
                        <span class="dropdown-menu__caption">Password</span>
                    </a>

                    <a href="https://script.viserlab.com/courierlab/demo/admin/logout" class="dropdown-menu__item d-flex align-items-center px-3 py-2">
                        <i class="dropdown-menu__icon las la-sign-out-alt"></i>
                        <span class="dropdown-menu__caption">Logout</span>
                    </a>
                </div>
                <button type="button" class="breadcrumb-nav-open ms-2 d-none">
                    <i class="las la-sliders-h"></i>
                </button>
            </li>
        </ul>
    </div>
</nav>
<!-- navbar-wrapper end -->


        <div class="container-fluid px-3 px-sm-0">
            <div class="body-wrapper">
                <div class="bodywrapper__inner">

                                        <div class="d-flex mb-30 flex-wrap gap-3 justify-content-between align-items-center">
    <h6 class="page-title">General Setting</h6>
    <div class="d-flex flex-wrap justify-content-end gap-2 align-items-center breadcrumb-plugins">
            </div>
</div>

                        <div class="row mb-none-30">
        <div class="col-lg-12 col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                        <input type="hidden" name="_token" value="Rpu75LKLzzQp9rOJGk64ktuEb6Xif8pTDhlhn5o1" autocomplete="off">                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label> Site Title</label>
                                    <input class="form-control" type="text" name="site_name" required value="CourierLab">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="required"> Timezone</label>
                                <select class="select2 form-control" name="timezone">
                                                                            <option value="0" >Africa/Abidjan</option>
                                                                            <option value="1" >Africa/Accra</option>
                                                                            <option value="2" >Africa/Addis_Ababa</option>
                                                                            <option value="3" >Africa/Algiers</option>
                                                                            <option value="4" >Africa/Asmara</option>
                                                                            <option value="5" >Africa/Bamako</option>
                                                                            <option value="6" >Africa/Bangui</option>
                                                                            <option value="7" >Africa/Banjul</option>
                                                                            <option value="8" >Africa/Bissau</option>
                                                                            <option value="9" >Africa/Blantyre</option>
                                                                            <option value="10" >Africa/Brazzaville</option>
                                                                            <option value="11" >Africa/Bujumbura</option>
                                                                            <option value="12" >Africa/Cairo</option>
                                                                            <option value="13" >Africa/Casablanca</option>
                                                                            <option value="14" >Africa/Ceuta</option>
                                                                            <option value="15" >Africa/Conakry</option>
                                                                            <option value="16" >Africa/Dakar</option>
                                                                            <option value="17" >Africa/Dar_es_Salaam</option>
                                                                            <option value="18" >Africa/Djibouti</option>
                                                                            <option value="19" >Africa/Douala</option>
                                                                            <option value="20" >Africa/El_Aaiun</option>
                                                                            <option value="21" >Africa/Freetown</option>
                                                                            <option value="22" >Africa/Gaborone</option>
                                                                            <option value="23" >Africa/Harare</option>
                                                                            <option value="24" >Africa/Johannesburg</option>
                                                                            <option value="25" >Africa/Juba</option>
                                                                            <option value="26" >Africa/Kampala</option>
                                                                            <option value="27" >Africa/Khartoum</option>
                                                                            <option value="28" >Africa/Kigali</option>
                                                                            <option value="29" >Africa/Kinshasa</option>
                                                                            <option value="30" >Africa/Lagos</option>
                                                                            <option value="31" >Africa/Libreville</option>
                                                                            <option value="32" >Africa/Lome</option>
                                                                            <option value="33" >Africa/Luanda</option>
                                                                            <option value="34" >Africa/Lubumbashi</option>
                                                                            <option value="35" >Africa/Lusaka</option>
                                                                            <option value="36" >Africa/Malabo</option>
                                                                            <option value="37" >Africa/Maputo</option>
                                                                            <option value="38" >Africa/Maseru</option>
                                                                            <option value="39" >Africa/Mbabane</option>
                                                                            <option value="40" >Africa/Mogadishu</option>
                                                                            <option value="41" >Africa/Monrovia</option>
                                                                            <option value="42" >Africa/Nairobi</option>
                                                                            <option value="43" >Africa/Ndjamena</option>
                                                                            <option value="44" >Africa/Niamey</option>
                                                                            <option value="45" >Africa/Nouakchott</option>
                                                                            <option value="46" >Africa/Ouagadougou</option>
                                                                            <option value="47" >Africa/Porto-Novo</option>
                                                                            <option value="48" >Africa/Sao_Tome</option>
                                                                            <option value="49" >Africa/Tripoli</option>
                                                                            <option value="50" >Africa/Tunis</option>
                                                                            <option value="51" >Africa/Windhoek</option>
                                                                            <option value="52" >America/Adak</option>
                                                                            <option value="53" >America/Anchorage</option>
                                                                            <option value="54" >America/Anguilla</option>
                                                                            <option value="55" >America/Antigua</option>
                                                                            <option value="56" >America/Araguaina</option>
                                                                            <option value="57" >America/Argentina/Buenos_Aires</option>
                                                                            <option value="58" >America/Argentina/Catamarca</option>
                                                                            <option value="59" >America/Argentina/Cordoba</option>
                                                                            <option value="60" >America/Argentina/Jujuy</option>
                                                                            <option value="61" >America/Argentina/La_Rioja</option>
                                                                            <option value="62" >America/Argentina/Mendoza</option>
                                                                            <option value="63" >America/Argentina/Rio_Gallegos</option>
                                                                            <option value="64" >America/Argentina/Salta</option>
                                                                            <option value="65" >America/Argentina/San_Juan</option>
                                                                            <option value="66" >America/Argentina/San_Luis</option>
                                                                            <option value="67" >America/Argentina/Tucuman</option>
                                                                            <option value="68" >America/Argentina/Ushuaia</option>
                                                                            <option value="69" >America/Aruba</option>
                                                                            <option value="70" >America/Asuncion</option>
                                                                            <option value="71" >America/Atikokan</option>
                                                                            <option value="72" >America/Bahia</option>
                                                                            <option value="73" >America/Bahia_Banderas</option>
                                                                            <option value="74" >America/Barbados</option>
                                                                            <option value="75" >America/Belem</option>
                                                                            <option value="76" >America/Belize</option>
                                                                            <option value="77" >America/Blanc-Sablon</option>
                                                                            <option value="78" >America/Boa_Vista</option>
                                                                            <option value="79" >America/Bogota</option>
                                                                            <option value="80" >America/Boise</option>
                                                                            <option value="81" >America/Cambridge_Bay</option>
                                                                            <option value="82" >America/Campo_Grande</option>
                                                                            <option value="83" >America/Cancun</option>
                                                                            <option value="84" >America/Caracas</option>
                                                                            <option value="85" >America/Cayenne</option>
                                                                            <option value="86" >America/Cayman</option>
                                                                            <option value="87" >America/Chicago</option>
                                                                            <option value="88" >America/Chihuahua</option>
                                                                            <option value="89" >America/Ciudad_Juarez</option>
                                                                            <option value="90" >America/Costa_Rica</option>
                                                                            <option value="91" >America/Creston</option>
                                                                            <option value="92" >America/Cuiaba</option>
                                                                            <option value="93" >America/Curacao</option>
                                                                            <option value="94" >America/Danmarkshavn</option>
                                                                            <option value="95" >America/Dawson</option>
                                                                            <option value="96" >America/Dawson_Creek</option>
                                                                            <option value="97" >America/Denver</option>
                                                                            <option value="98" >America/Detroit</option>
                                                                            <option value="99" >America/Dominica</option>
                                                                            <option value="100" >America/Edmonton</option>
                                                                            <option value="101" >America/Eirunepe</option>
                                                                            <option value="102" >America/El_Salvador</option>
                                                                            <option value="103" >America/Fort_Nelson</option>
                                                                            <option value="104" >America/Fortaleza</option>
                                                                            <option value="105" >America/Glace_Bay</option>
                                                                            <option value="106" >America/Goose_Bay</option>
                                                                            <option value="107" >America/Grand_Turk</option>
                                                                            <option value="108" >America/Grenada</option>
                                                                            <option value="109" >America/Guadeloupe</option>
                                                                            <option value="110" >America/Guatemala</option>
                                                                            <option value="111" >America/Guayaquil</option>
                                                                            <option value="112" >America/Guyana</option>
                                                                            <option value="113" >America/Halifax</option>
                                                                            <option value="114" >America/Havana</option>
                                                                            <option value="115" >America/Hermosillo</option>
                                                                            <option value="116" >America/Indiana/Indianapolis</option>
                                                                            <option value="117" >America/Indiana/Knox</option>
                                                                            <option value="118" >America/Indiana/Marengo</option>
                                                                            <option value="119" >America/Indiana/Petersburg</option>
                                                                            <option value="120" >America/Indiana/Tell_City</option>
                                                                            <option value="121" >America/Indiana/Vevay</option>
                                                                            <option value="122" >America/Indiana/Vincennes</option>
                                                                            <option value="123" >America/Indiana/Winamac</option>
                                                                            <option value="124" >America/Inuvik</option>
                                                                            <option value="125" >America/Iqaluit</option>
                                                                            <option value="126" >America/Jamaica</option>
                                                                            <option value="127" >America/Juneau</option>
                                                                            <option value="128" >America/Kentucky/Louisville</option>
                                                                            <option value="129" >America/Kentucky/Monticello</option>
                                                                            <option value="130" >America/Kralendijk</option>
                                                                            <option value="131" >America/La_Paz</option>
                                                                            <option value="132" >America/Lima</option>
                                                                            <option value="133" >America/Los_Angeles</option>
                                                                            <option value="134" >America/Lower_Princes</option>
                                                                            <option value="135" >America/Maceio</option>
                                                                            <option value="136" >America/Managua</option>
                                                                            <option value="137" >America/Manaus</option>
                                                                            <option value="138" >America/Marigot</option>
                                                                            <option value="139" >America/Martinique</option>
                                                                            <option value="140" >America/Matamoros</option>
                                                                            <option value="141" >America/Mazatlan</option>
                                                                            <option value="142" >America/Menominee</option>
                                                                            <option value="143" >America/Merida</option>
                                                                            <option value="144" >America/Metlakatla</option>
                                                                            <option value="145" >America/Mexico_City</option>
                                                                            <option value="146" >America/Miquelon</option>
                                                                            <option value="147" >America/Moncton</option>
                                                                            <option value="148" >America/Monterrey</option>
                                                                            <option value="149" >America/Montevideo</option>
                                                                            <option value="150" >America/Montserrat</option>
                                                                            <option value="151" >America/Nassau</option>
                                                                            <option value="152" >America/New_York</option>
                                                                            <option value="153" >America/Nome</option>
                                                                            <option value="154" >America/Noronha</option>
                                                                            <option value="155" >America/North_Dakota/Beulah</option>
                                                                            <option value="156" >America/North_Dakota/Center</option>
                                                                            <option value="157" >America/North_Dakota/New_Salem</option>
                                                                            <option value="158" >America/Nuuk</option>
                                                                            <option value="159" >America/Ojinaga</option>
                                                                            <option value="160" >America/Panama</option>
                                                                            <option value="161" >America/Paramaribo</option>
                                                                            <option value="162" >America/Phoenix</option>
                                                                            <option value="163" >America/Port-au-Prince</option>
                                                                            <option value="164" >America/Port_of_Spain</option>
                                                                            <option value="165" >America/Porto_Velho</option>
                                                                            <option value="166" >America/Puerto_Rico</option>
                                                                            <option value="167" >America/Punta_Arenas</option>
                                                                            <option value="168" >America/Rankin_Inlet</option>
                                                                            <option value="169" >America/Recife</option>
                                                                            <option value="170" >America/Regina</option>
                                                                            <option value="171" >America/Resolute</option>
                                                                            <option value="172" >America/Rio_Branco</option>
                                                                            <option value="173" >America/Santarem</option>
                                                                            <option value="174" >America/Santiago</option>
                                                                            <option value="175" >America/Santo_Domingo</option>
                                                                            <option value="176" >America/Sao_Paulo</option>
                                                                            <option value="177" >America/Scoresbysund</option>
                                                                            <option value="178" >America/Sitka</option>
                                                                            <option value="179" >America/St_Barthelemy</option>
                                                                            <option value="180" >America/St_Johns</option>
                                                                            <option value="181" >America/St_Kitts</option>
                                                                            <option value="182" >America/St_Lucia</option>
                                                                            <option value="183" >America/St_Thomas</option>
                                                                            <option value="184" >America/St_Vincent</option>
                                                                            <option value="185" >America/Swift_Current</option>
                                                                            <option value="186" >America/Tegucigalpa</option>
                                                                            <option value="187" >America/Thule</option>
                                                                            <option value="188" >America/Tijuana</option>
                                                                            <option value="189" >America/Toronto</option>
                                                                            <option value="190" >America/Tortola</option>
                                                                            <option value="191" >America/Vancouver</option>
                                                                            <option value="192" >America/Whitehorse</option>
                                                                            <option value="193" >America/Winnipeg</option>
                                                                            <option value="194" >America/Yakutat</option>
                                                                            <option value="195" >Antarctica/Casey</option>
                                                                            <option value="196" >Antarctica/Davis</option>
                                                                            <option value="197" >Antarctica/DumontDUrville</option>
                                                                            <option value="198" >Antarctica/Macquarie</option>
                                                                            <option value="199" >Antarctica/Mawson</option>
                                                                            <option value="200" >Antarctica/McMurdo</option>
                                                                            <option value="201" >Antarctica/Palmer</option>
                                                                            <option value="202" >Antarctica/Rothera</option>
                                                                            <option value="203" >Antarctica/Syowa</option>
                                                                            <option value="204" >Antarctica/Troll</option>
                                                                            <option value="205" >Antarctica/Vostok</option>
                                                                            <option value="206" >Arctic/Longyearbyen</option>
                                                                            <option value="207" >Asia/Aden</option>
                                                                            <option value="208" >Asia/Almaty</option>
                                                                            <option value="209" >Asia/Amman</option>
                                                                            <option value="210" >Asia/Anadyr</option>
                                                                            <option value="211" >Asia/Aqtau</option>
                                                                            <option value="212" >Asia/Aqtobe</option>
                                                                            <option value="213" >Asia/Ashgabat</option>
                                                                            <option value="214" >Asia/Atyrau</option>
                                                                            <option value="215" >Asia/Baghdad</option>
                                                                            <option value="216" >Asia/Bahrain</option>
                                                                            <option value="217" >Asia/Baku</option>
                                                                            <option value="218" >Asia/Bangkok</option>
                                                                            <option value="219" >Asia/Barnaul</option>
                                                                            <option value="220" >Asia/Beirut</option>
                                                                            <option value="221" >Asia/Bishkek</option>
                                                                            <option value="222" >Asia/Brunei</option>
                                                                            <option value="223" >Asia/Chita</option>
                                                                            <option value="224" >Asia/Choibalsan</option>
                                                                            <option value="225" >Asia/Colombo</option>
                                                                            <option value="226" >Asia/Damascus</option>
                                                                            <option value="227" >Asia/Dhaka</option>
                                                                            <option value="228" >Asia/Dili</option>
                                                                            <option value="229" >Asia/Dubai</option>
                                                                            <option value="230" >Asia/Dushanbe</option>
                                                                            <option value="231" >Asia/Famagusta</option>
                                                                            <option value="232" >Asia/Gaza</option>
                                                                            <option value="233" >Asia/Hebron</option>
                                                                            <option value="234" >Asia/Ho_Chi_Minh</option>
                                                                            <option value="235" >Asia/Hong_Kong</option>
                                                                            <option value="236" >Asia/Hovd</option>
                                                                            <option value="237" >Asia/Irkutsk</option>
                                                                            <option value="238" >Asia/Jakarta</option>
                                                                            <option value="239" >Asia/Jayapura</option>
                                                                            <option value="240" >Asia/Jerusalem</option>
                                                                            <option value="241" >Asia/Kabul</option>
                                                                            <option value="242" >Asia/Kamchatka</option>
                                                                            <option value="243" >Asia/Karachi</option>
                                                                            <option value="244" >Asia/Kathmandu</option>
                                                                            <option value="245" >Asia/Khandyga</option>
                                                                            <option value="246" >Asia/Kolkata</option>
                                                                            <option value="247" >Asia/Krasnoyarsk</option>
                                                                            <option value="248" >Asia/Kuala_Lumpur</option>
                                                                            <option value="249" >Asia/Kuching</option>
                                                                            <option value="250" >Asia/Kuwait</option>
                                                                            <option value="251" >Asia/Macau</option>
                                                                            <option value="252" >Asia/Magadan</option>
                                                                            <option value="253" >Asia/Makassar</option>
                                                                            <option value="254" >Asia/Manila</option>
                                                                            <option value="255" >Asia/Muscat</option>
                                                                            <option value="256" >Asia/Nicosia</option>
                                                                            <option value="257" >Asia/Novokuznetsk</option>
                                                                            <option value="258" >Asia/Novosibirsk</option>
                                                                            <option value="259" >Asia/Omsk</option>
                                                                            <option value="260" >Asia/Oral</option>
                                                                            <option value="261" >Asia/Phnom_Penh</option>
                                                                            <option value="262" >Asia/Pontianak</option>
                                                                            <option value="263" >Asia/Pyongyang</option>
                                                                            <option value="264" >Asia/Qatar</option>
                                                                            <option value="265" >Asia/Qostanay</option>
                                                                            <option value="266" >Asia/Qyzylorda</option>
                                                                            <option value="267" >Asia/Riyadh</option>
                                                                            <option value="268" >Asia/Sakhalin</option>
                                                                            <option value="269" >Asia/Samarkand</option>
                                                                            <option value="270" >Asia/Seoul</option>
                                                                            <option value="271" >Asia/Shanghai</option>
                                                                            <option value="272" >Asia/Singapore</option>
                                                                            <option value="273" >Asia/Srednekolymsk</option>
                                                                            <option value="274" >Asia/Taipei</option>
                                                                            <option value="275" >Asia/Tashkent</option>
                                                                            <option value="276" >Asia/Tbilisi</option>
                                                                            <option value="277" >Asia/Tehran</option>
                                                                            <option value="278" >Asia/Thimphu</option>
                                                                            <option value="279" >Asia/Tokyo</option>
                                                                            <option value="280" >Asia/Tomsk</option>
                                                                            <option value="281" >Asia/Ulaanbaatar</option>
                                                                            <option value="282" >Asia/Urumqi</option>
                                                                            <option value="283" >Asia/Ust-Nera</option>
                                                                            <option value="284" >Asia/Vientiane</option>
                                                                            <option value="285" >Asia/Vladivostok</option>
                                                                            <option value="286" >Asia/Yakutsk</option>
                                                                            <option value="287" >Asia/Yangon</option>
                                                                            <option value="288" >Asia/Yekaterinburg</option>
                                                                            <option value="289" >Asia/Yerevan</option>
                                                                            <option value="290" >Atlantic/Azores</option>
                                                                            <option value="291" >Atlantic/Bermuda</option>
                                                                            <option value="292" >Atlantic/Canary</option>
                                                                            <option value="293" >Atlantic/Cape_Verde</option>
                                                                            <option value="294" >Atlantic/Faroe</option>
                                                                            <option value="295" >Atlantic/Madeira</option>
                                                                            <option value="296" >Atlantic/Reykjavik</option>
                                                                            <option value="297" >Atlantic/South_Georgia</option>
                                                                            <option value="298" >Atlantic/St_Helena</option>
                                                                            <option value="299" >Atlantic/Stanley</option>
                                                                            <option value="300" >Australia/Adelaide</option>
                                                                            <option value="301" >Australia/Brisbane</option>
                                                                            <option value="302" >Australia/Broken_Hill</option>
                                                                            <option value="303" >Australia/Darwin</option>
                                                                            <option value="304" >Australia/Eucla</option>
                                                                            <option value="305" >Australia/Hobart</option>
                                                                            <option value="306" >Australia/Lindeman</option>
                                                                            <option value="307" >Australia/Lord_Howe</option>
                                                                            <option value="308" >Australia/Melbourne</option>
                                                                            <option value="309" >Australia/Perth</option>
                                                                            <option value="310" >Australia/Sydney</option>
                                                                            <option value="311" >Europe/Amsterdam</option>
                                                                            <option value="312" >Europe/Andorra</option>
                                                                            <option value="313" >Europe/Astrakhan</option>
                                                                            <option value="314" >Europe/Athens</option>
                                                                            <option value="315" >Europe/Belgrade</option>
                                                                            <option value="316" >Europe/Berlin</option>
                                                                            <option value="317" >Europe/Bratislava</option>
                                                                            <option value="318" >Europe/Brussels</option>
                                                                            <option value="319" >Europe/Bucharest</option>
                                                                            <option value="320" >Europe/Budapest</option>
                                                                            <option value="321" >Europe/Busingen</option>
                                                                            <option value="322" >Europe/Chisinau</option>
                                                                            <option value="323" >Europe/Copenhagen</option>
                                                                            <option value="324" >Europe/Dublin</option>
                                                                            <option value="325" >Europe/Gibraltar</option>
                                                                            <option value="326" >Europe/Guernsey</option>
                                                                            <option value="327" >Europe/Helsinki</option>
                                                                            <option value="328" >Europe/Isle_of_Man</option>
                                                                            <option value="329" >Europe/Istanbul</option>
                                                                            <option value="330" >Europe/Jersey</option>
                                                                            <option value="331" >Europe/Kaliningrad</option>
                                                                            <option value="332" >Europe/Kirov</option>
                                                                            <option value="333" >Europe/Kyiv</option>
                                                                            <option value="334" >Europe/Lisbon</option>
                                                                            <option value="335" >Europe/Ljubljana</option>
                                                                            <option value="336" >Europe/London</option>
                                                                            <option value="337" >Europe/Luxembourg</option>
                                                                            <option value="338" >Europe/Madrid</option>
                                                                            <option value="339" >Europe/Malta</option>
                                                                            <option value="340" >Europe/Mariehamn</option>
                                                                            <option value="341" >Europe/Minsk</option>
                                                                            <option value="342" >Europe/Monaco</option>
                                                                            <option value="343" >Europe/Moscow</option>
                                                                            <option value="344" >Europe/Oslo</option>
                                                                            <option value="345" >Europe/Paris</option>
                                                                            <option value="346" >Europe/Podgorica</option>
                                                                            <option value="347" >Europe/Prague</option>
                                                                            <option value="348" >Europe/Riga</option>
                                                                            <option value="349" >Europe/Rome</option>
                                                                            <option value="350" >Europe/Samara</option>
                                                                            <option value="351" >Europe/San_Marino</option>
                                                                            <option value="352" >Europe/Sarajevo</option>
                                                                            <option value="353" >Europe/Saratov</option>
                                                                            <option value="354" >Europe/Simferopol</option>
                                                                            <option value="355" >Europe/Skopje</option>
                                                                            <option value="356" >Europe/Sofia</option>
                                                                            <option value="357" >Europe/Stockholm</option>
                                                                            <option value="358" >Europe/Tallinn</option>
                                                                            <option value="359" >Europe/Tirane</option>
                                                                            <option value="360" >Europe/Ulyanovsk</option>
                                                                            <option value="361" >Europe/Vaduz</option>
                                                                            <option value="362" >Europe/Vatican</option>
                                                                            <option value="363" >Europe/Vienna</option>
                                                                            <option value="364" >Europe/Vilnius</option>
                                                                            <option value="365" >Europe/Volgograd</option>
                                                                            <option value="366" >Europe/Warsaw</option>
                                                                            <option value="367" >Europe/Zagreb</option>
                                                                            <option value="368" >Europe/Zurich</option>
                                                                            <option value="369" >Indian/Antananarivo</option>
                                                                            <option value="370" >Indian/Chagos</option>
                                                                            <option value="371" >Indian/Christmas</option>
                                                                            <option value="372" >Indian/Cocos</option>
                                                                            <option value="373" >Indian/Comoro</option>
                                                                            <option value="374" >Indian/Kerguelen</option>
                                                                            <option value="375" >Indian/Mahe</option>
                                                                            <option value="376" >Indian/Maldives</option>
                                                                            <option value="377" >Indian/Mauritius</option>
                                                                            <option value="378" >Indian/Mayotte</option>
                                                                            <option value="379" >Indian/Reunion</option>
                                                                            <option value="380" >Pacific/Apia</option>
                                                                            <option value="381" >Pacific/Auckland</option>
                                                                            <option value="382" >Pacific/Bougainville</option>
                                                                            <option value="383" >Pacific/Chatham</option>
                                                                            <option value="384" >Pacific/Chuuk</option>
                                                                            <option value="385" >Pacific/Easter</option>
                                                                            <option value="386" >Pacific/Efate</option>
                                                                            <option value="387" >Pacific/Fakaofo</option>
                                                                            <option value="388" >Pacific/Fiji</option>
                                                                            <option value="389" >Pacific/Funafuti</option>
                                                                            <option value="390" >Pacific/Galapagos</option>
                                                                            <option value="391" >Pacific/Gambier</option>
                                                                            <option value="392" >Pacific/Guadalcanal</option>
                                                                            <option value="393" >Pacific/Guam</option>
                                                                            <option value="394" >Pacific/Honolulu</option>
                                                                            <option value="395" >Pacific/Kanton</option>
                                                                            <option value="396" >Pacific/Kiritimati</option>
                                                                            <option value="397" >Pacific/Kosrae</option>
                                                                            <option value="398" >Pacific/Kwajalein</option>
                                                                            <option value="399" >Pacific/Majuro</option>
                                                                            <option value="400" >Pacific/Marquesas</option>
                                                                            <option value="401" >Pacific/Midway</option>
                                                                            <option value="402" >Pacific/Nauru</option>
                                                                            <option value="403" >Pacific/Niue</option>
                                                                            <option value="404" >Pacific/Norfolk</option>
                                                                            <option value="405" >Pacific/Noumea</option>
                                                                            <option value="406" >Pacific/Pago_Pago</option>
                                                                            <option value="407" >Pacific/Palau</option>
                                                                            <option value="408" >Pacific/Pitcairn</option>
                                                                            <option value="409" >Pacific/Pohnpei</option>
                                                                            <option value="410" >Pacific/Port_Moresby</option>
                                                                            <option value="411" >Pacific/Rarotonga</option>
                                                                            <option value="412" >Pacific/Saipan</option>
                                                                            <option value="413" >Pacific/Tahiti</option>
                                                                            <option value="414" >Pacific/Tarawa</option>
                                                                            <option value="415" >Pacific/Tongatapu</option>
                                                                            <option value="416" >Pacific/Wake</option>
                                                                            <option value="417" >Pacific/Wallis</option>
                                                                            <option value="418" selected>UTC</option>
                                                                    </select>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label>Currency</label>
                                    <input class="form-control" type="text" name="cur_text" required value="USD">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group ">
                                    <label>Currency Symbol</label>
                                    <input class="form-control" type="text" name="cur_sym" required value="$">
                                </div>
                            </div>
                          

                            <div class="form-group col-sm-6">
                                <label> Record to Display Per page</label>
                                <select class="select2 form-control" name="paginate_number" data-minimum-results-for-search="-1">
                                    <option value="20" >20 items per page</option>
                                    <option value="50" >50 items per page</option>
                                    <option value="100" >100 items per page</option>
                                </select>
                            </div>

                            <div class="form-group col-sm-6 ">
                                <label class="required"> Currency Showing Format</label>
                                <select class="select2 form-control" name="currency_format" data-minimum-results-for-search="-1">
                                    <option value="1" >Show Currency Text and Symbol Both</option>
                                    <option value="2" >Show Currency Text Only</option>
                                    <option value="3" >Show Currency Symbol Only</option>
                                </select>
                            </div>

                            <div class="form-group col-12">
                                <label class="required"> Site Base Color</label>
                                <div class="input-group">
                                    <span class="input-group-text p-0 border-0">
                                        <input type='text' class="form-control colorPicker" value="1e90ff">
                                    </span>
                                    <input type="text" class="form-control colorCode" name="base_color" value="1e90ff">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn--primary w-100 h-45">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/jquery-3.7.1.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/vendor/bootstrap-toggle.min.js"></script>

    <link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast.min.css" rel="stylesheet">
<link href="https://script.viserlab.com/courierlab/demo/assets/global/css/iziToast_custom.css" rel="stylesheet">
<script src="https://script.viserlab.com/courierlab/demo/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";
    const colors = {
        success: '#28c76f',
        error: '#eb2222',
        warning: '#ff9f43',
        info: '#1e9ff2',
    }

    const icons = {
        success: 'fas fa-check-circle',
        error: 'fas fa-times-circle',
        warning: 'fas fa-exclamation-triangle',
        info: 'fas fa-exclamation-circle',
    }

    const notifications = [];
    const errors = [];


    const triggerToaster = (status, message) => {
        iziToast[status]({
            title: status.charAt(0).toUpperCase() + status.slice(1),
            message: message,
            position: "topRight",
            backgroundColor: '#fff',
            icon: icons[status],
            iconColor: colors[status],
            progressBarColor: colors[status],
            titleSize: '1rem',
            messageSize: '1rem',
            titleColor: '#474747',
            messageColor: '#a2a2a2',
            transitionIn: 'obunceInLeft'
        });
    }

    if (notifications.length) {
        notifications.forEach(element => {
            triggerToaster(element[0], element[1]);
        });
    }

    if (errors.length) {
        errors.forEach(error => {
            triggerToaster('error', error);
        });
    }

    function notify(status, message) {
        if (typeof message == 'string') {
            triggerToaster(status, message);
        } else {
            $.each(message, (i, val) => triggerToaster(status, val));
        }
    }
</script>
        <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/spectrum.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/nicEdit.js"></script>

    <script src="https://script.viserlab.com/courierlab/demo/assets/global/js/select2.min.js"></script>
    <script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/app.js?v=3"></script>

    
    <script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });

        (function($) {
            $(document).on('mouseover ', '.nicEdit-main,.nicEdit-panelContain', function() {
                $('.nicEdit-main').focus();
            });

            $('.breadcrumb-nav-open').on('click', function() {
                $(this).toggleClass('active');
                $('.breadcrumb-nav').toggleClass('active');
            });

            $('.breadcrumb-nav-close').on('click', function() {
                $('.breadcrumb-nav').removeClass('active');
            });

            if ($('.topTap').length) {
                $('.breadcrumb-nav-open').removeClass('d-none');
            }

            $('.table-responsive').on('click', 'button[data-bs-toggle="dropdown"]', function(e) {
                const {
                    top,
                    left
                } = $(this).next(".dropdown-menu")[0].getBoundingClientRect();
                $(this).next(".dropdown-menu").css({
                    position: "fixed",
                    inset: "unset",
                    transform: "unset",
                    top: top + "px",
                    left: left + "px",
                });
            });
        })(jQuery);
    </script>

        <script>
        (function($) {
            "use strict";

            $('.colorPicker').spectrum({
                color: $(this).data('color'),
                change: function(color) {
                    $(this).parent().siblings('.colorCode').val(color.toHexString().replace(/^#?/, ''));
                }
            });

            $('.colorCode').on('input', function() {
                var clr = $(this).val();
                $(this).parents('.input-group').find('.colorPicker').spectrum({
                    color: clr,
                });
            });
        })(jQuery);
    </script>
<script>
    if ($('li').hasClass('active')) {
        $('.sidebar__menu-wrapper').animate({
            scrollTop: eval($(".active").offset().top - 320)
        }, 500);
    }
</script>
<script>
    "use strict";
    var routes = [{"admin.login":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin"},{"admin.login":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin"},{"admin.logout":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/logout"},{"admin.password.reset":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset"},{"admin.password.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset"},{"admin.password.code.verify":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/code-verify"},{"admin.password.verify.code":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/verify-code"},{"admin.password.reset.form":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset\/{token}"},{"admin.password.change":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password\/reset\/change"},{"admin.dashboard":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/dashboard"},{"admin.profile":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/profile"},{"admin.profile.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/profile"},{"admin.password":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password"},{"admin.password.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/password"},{"admin.all":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/all"},{"admin.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/store"},{"admin.remove":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/remove\/{id}"},{"admin.notifications":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications"},{"admin.notification.read":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/read\/{id}"},{"admin.notifications.read.all":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications\/read-all"},{"admin.notifications.delete.all":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications\/delete-all"},{"admin.notifications.delete.single":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notifications\/delete-single\/{id}"},{"admin.request.report":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/request-report"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/request-report"},{"admin.download.attachment":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/download-attachments\/{file_hash}"},{"admin.branch.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch"},{"admin.branch.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch\/store"},{"admin.branch.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch\/status\/{id}"},{"admin.branch.manager.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/list"},{"admin.branch.manager.create":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/create"},{"admin.branch.manager.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/store\/{id?}"},{"admin.branch.manager.edit":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/edit\/{id}"},{"admin.branch.manager.staff.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/{id}"},{"admin.branch.manager.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/status\/{id}"},{"admin.branch.manager.dashboard":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/dashboard\/{id}"},{"admin.branch.manager.staff":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/staff\/dashboard\/{id}"},{"admin.branch.manager.list":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/branch-manager\/manager\/{id}"},{"admin.courier.unit.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/unit"},{"admin.courier.unit.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/unit\/store"},{"admin.courier.unit.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/status\/{id}"},{"admin.courier.unit.type.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/type"},{"admin.courier.unit.type.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/type\/store"},{"admin.courier.unit.type.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/manage\/type\/status\/{id}"},{"admin.courier.branch.income":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/branch\/income"},{"admin.courier.info.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/list"},{"admin.courier.info.details":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/details\/{id}"},{"admin.courier.invoice":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/courier\/invoice\/{id}"},{"admin.staff.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/staff"},{"admin.customer.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/customer"},{"admin.customer.import":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/customer\/import\/customers"},{"admin.customer.export":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/customer\/export\/customers"},{"admin.report.login.history":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/login\/history"},{"admin.report.login.ipHistory":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/login\/ipHistory\/{ip}"},{"admin.report.notification.history":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/notification\/history"},{"admin.report.email.details":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/report\/email\/detail\/{id}"},{"admin.ticket.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket"},{"admin.ticket.pending":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/pending"},{"admin.ticket.closed":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/closed"},{"admin.ticket.answered":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/answered"},{"admin.ticket.view":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/view\/{id}"},{"admin.ticket.reply":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/reply\/{id}"},{"admin.ticket.close":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/close\/{id}"},{"admin.ticket.download":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/download\/{attachment_id}"},{"admin.ticket.delete":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/ticket\/delete\/{id}"},{"admin.language.manage":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language"},{"admin.language.manage.store":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language"},{"admin.language.manage.delete":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/delete\/{id}"},{"admin.language.manage.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/update\/{id}"},{"admin.language.key":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/edit\/{id}"},{"admin.language.import.lang":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/import"},{"admin.language.store.key":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/store\/key\/{id}"},{"admin.language.delete.key":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/delete\/key\/{id}"},{"admin.language.update.key":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/update\/key\/{id}"},{"admin.language.get.key":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/language\/get-keys"},{"admin.setting.system":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system-setting"},{"admin.setting.general":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/general-setting"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/general-setting"},{"admin.setting.system.configuration":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/system-configuration"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/system-configuration"},{"admin.setting.logo.icon":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/logo-icon"},{"admin.setting.logo.icon":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/setting\/logo-icon"},{"admin.setting.custom.css":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/custom-css"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/custom-css"},{"admin.setting.sitemap":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/sitemap"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/sitemap"},{"admin.setting.robot":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/robot"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/robot"},{"admin.setting.cookie":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/cookie"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/cookie"},{"admin.maintenance.mode":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/maintenance-mode"},{"admin.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/maintenance-mode"},{"admin.setting.notification.global.email":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/email"},{"admin.setting.notification.global.email.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/email\/update"},{"admin.setting.notification.global.sms":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/sms"},{"admin.setting.notification.global.sms.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/global\/sms\/update"},{"admin.setting.notification.templates":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/templates"},{"admin.setting.notification.template.edit":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/template\/edit\/{type}\/{id}"},{"admin.setting.notification.template.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/template\/update\/{type}\/{id}"},{"admin.setting.notification.email":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/email\/setting"},{"admin.setting.notification.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/email\/setting"},{"admin.setting.notification.email.test":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/email\/test"},{"admin.setting.notification.sms":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/sms\/setting"},{"admin.setting.notification.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/sms\/setting"},{"admin.setting.notification.sms.test":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/notification\/sms\/test"},{"admin.extensions.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/extensions"},{"admin.extensions.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/extensions\/update\/{id}"},{"admin.extensions.status":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/extensions\/status\/{id}"},{"admin.system.info":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/info"},{"admin.system.server.info":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/server-info"},{"admin.system.optimize":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/optimize"},{"admin.system.optimize.clear":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/optimize-clear"},{"admin.system.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/system-update"},{"admin.system.update.process":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/system-update"},{"admin.system.update.log":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/system\/system-update\/log"},{"admin.seo":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/seo"},{"admin.frontend.index":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/index"},{"admin.frontend.templates":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/templates"},{"admin.frontend.templates.active":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/templates"},{"admin.frontend.sections":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-sections\/{key?}"},{"admin.frontend.sections.content":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-content\/{key}"},{"admin.frontend.sections.element":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-element\/{key}\/{id?}"},{"admin.frontend.sections.element.slug.check":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-slug-check\/{key}\/{id?}"},{"admin.frontend.sections.element.seo":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-element-seo\/{key}\/{id}"},{"admin.frontend.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/frontend-element-seo\/{key}\/{id}"},{"admin.frontend.remove":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/remove\/{id}"},{"admin.frontend.import":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/import-content\/{key}"},{"admin.frontend.manage.pages":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages"},{"admin.frontend.manage.pages.check.slug":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages\/check-slug\/{id?}"},{"admin.frontend.manage.pages.save":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages"},{"admin.frontend.manage.pages.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages\/update"},{"admin.frontend.manage.pages.delete":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-pages\/delete\/{id}"},{"admin.frontend.manage.section":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-section\/{id}"},{"admin.frontend.manage.section.update":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-section\/{id}"},{"admin.frontend.manage.pages.seo":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-seo\/{id}"},{"admin.frontend.":"https:\/\/script.viserlab.com\/courierlab\/demo\/admin\/frontend\/manage-seo\/{id}"}];
    var settingsData = Object.assign({}, {"general_setting":{"keyword":["general","fundamental","site information","site","website settings","basic settings","global settings","site color","timezone","site currency","pagination","currency format","site title","base color","paginate"],"title":"General Setting","subtitle":"Configure the fundamental information of the site.","icon":"las la-cog","route_name":"admin.setting.general"},"logo_favicon":{"keyword":["branding","identity","logo upload","site branding","brand identity","favicon","website icon","website favicon","website logo"],"title":"Logo and Favicon","subtitle":"Upload your logo and favicon here.","icon":"las la-images","route_name":"admin.setting.logo.icon"},"system_configuration":{"keyword":["basic modules","control","modules","system","configuration settings","system control","email control","sms control","language control","email notification","sms notification"],"title":"System Configuration","subtitle":"Control all of the basic modules of the system.","icon":"las la-cogs","route_name":"admin.setting.system.configuration"},"notification_setting":{"keyword":["email configuration","sms configure","email setting","sms setting","email template","sms template","notification template","smtp","sendgrid","send grid","mailjet","mail jet","php","nexmo","clickatell","click a tell","infobip","info bip","message bird","sms broadcast","twilio","text magic","custom api","template setting","global template","global notification"],"title":"Notification Setting","subtitle":"Control and configure overall notification elements of the system.","icon":"las la-bell","route_name":"admin.setting.notification.global.email"},"seo_configuration":{"keyword":["SEO","meta title","meta description","meta keywords","optimization","meta tags","SEO configuration"],"title":"SEO Configuration","subtitle":"Configure proper meta title, meta description, meta keywords, etc to make the system SEO-friendly.","icon":"las la-globe","route_name":"admin.seo"},"manage_frontend":{"keyword":["about section","banner section","blog section","branch section","breadcrumb","client section","contact info","contact us","counter section","faq section","feature section","footer section","order tracking section","partner section","service section","social icons section","team section","frontend","template","manage frontend","frontend contents","frontend settings","about us","banner","contact","faq","social icons","section settings","subscribe"],"title":"Manage Frontend","subtitle":"Control all of the frontend contents of the system.","icon":"la la-html5","route_name":"admin.frontend.index"},"manage_pages":{"keyword":["pages","manage pages","home page","contact page","blog page"],"title":"Manage Pages","subtitle":"Control dynamic and static pages of the system.","icon":"las la-list","route_name":"admin.frontend.manage.pages"},"manage_templates":{"keyword":["Templates","Manage Templates"],"title":"Manage Templates","subtitle":"Control frontend template of the system.","icon":"la la-puzzle-piece","route_name":"admin.frontend.templates"},"language":{"keyword":["language","localize","translation","translate","internationalization","language settings","localization settings","translation settings","configure languages","configure localization"],"title":"Language","subtitle":"Configure your required languages and keywords to localize the system.","icon":"las la-language","route_name":"admin.language.manage"},"extensions":{"keyword":["extensions","plugins","addons","extension settings","plugin settings","addon settings","captcha","custom captcha","google captcha","recaptcha","re-captcha","re captcha","tawk","tawk.to","tawk to","analytics","google analytics","facebook comment"],"title":"Extensions","subtitle":"Manage extensions of the system here to extend some extra features of the system.","icon":"las la-puzzle-piece","route_name":"admin.extensions.index"},"policy_pages":{"keyword":["privacy and policy","terms and condition","terms of service"],"title":"Policy Pages","subtitle":"Configure your policy and terms of the system here.","icon":"las la-shield-alt","route_name":"admin.frontend.sections","params":{"key":"policy_pages"}},"maintenance_mode":{"keyword":["maintenance mode","system maintenance","system health","maintenance settings","system health settings","enable maintenance","disable maintenance","maintenance configuration"],"title":"Maintenance Mode","subtitle":"Enable or disable the maintenance mode of the system when required.","icon":"las la-robot","route_name":"admin.maintenance.mode"},"gdpr_cookie":{"keyword":["GDPR cookie","cookie policy","data privacy","GDPR settings","cookie policy settings","data privacy settings"],"title":"GDPR Cookie","subtitle":"Set GDPR Cookie policy if required. It will ask visitor of the system to accept if enabled.","icon":"las la-cookie-bite","route_name":"admin.setting.cookie"},"custom_css":{"keyword":["custom CSS","modify styles","frontend","styling","design customization","CSS settings","style settings","frontend customization","design settings","customize CSS"],"title":"Custom CSS","subtitle":"Write custom css here to modify some styles of frontend of the system if you need to.","icon":"lab la-css3-alt","route_name":"admin.setting.custom.css"},"sitemap":{"keyword":["Site map","sitemap","xml","sitemap.xml"],"title":"Sitemap XML","subtitle":"Insert the sitemap XML here to enhance SEO performance.","icon":"las la-sitemap","route_name":"admin.setting.sitemap"},"robots":{"keyword":["Robots","txt","robots.txt","robot.txt"],"title":"Robots txt","subtitle":"Insert the robots.txt content here to enhance bot web crawlers and instruct them on how to interact with certain areas of the website.","icon":"las la-robot","route_name":"admin.setting.robot"}}, {"dashboard":{"keyword":["Dashboard","Home","Panel","Admin","Control center","Overview","Main hub","Management hub","Administrative hub","Central hub","Command center","Administrator portal","Centralized interface","Admin console","Management dashboard","Main screen","Administrative dashboard","Command dashboard","Main control panel"],"title":"Dashboard","icon":"las la-home","route_name":"admin.dashboard","menu_active":"admin.dashboard"},"admin":{"keyword":["admin"],"title":"Admin","icon":"las la-users","route_name":"admin.all","menu_active":"admin.all"},"branch_control":{"title":"Branch Control","icon":"las la-code-branch","menu_active":["admin.branch*","admin.courier.branch.income"],"submenu":[{"keyword":["manage branch"],"title":"Manage Branch","route_name":"admin.branch.index","menu_active":"admin.branch.index"},{"keyword":["branch manager","manager","create manager"],"title":"Branch Manager","route_name":"admin.branch.manager.index","menu_active":"admin.branch.manager*"},{"keyword":["branch income","income","branch profit"],"title":"Branch Income","route_name":"admin.courier.branch.income","menu_active":"admin.courier.branch.income"}]},"manage_courier":{"keyword":["manage courier","courier"],"title":"Manage Courier","icon":"las la-fax","route_name":"admin.courier.info.index","menu_active":["admin.courier.info*","admin.courier.invoice"]},"staff_list":{"keyword":["staff info","staff","staff list"],"title":"Staff List","icon":"las la-users-cog","route_name":"admin.staff.index","menu_active":["admin.staff.index"]},"customer_list":{"keyword":["customer info","customer","customer list"],"title":"Customer List","icon":"las la-user-friends","route_name":"admin.customer.index","menu_active":["admin.customer.index"]},"courier_settings":{"title":"Unit \u0026 Type Settings","icon":"la la-tasks","menu_active":"admin.courier.unit*","submenu":[{"keyword":["manage unit","unit","create unit"],"title":"Manage Unit","route_name":"admin.courier.unit.index","menu_active":"admin.courier.unit.index"},{"keyword":["manage type","type","create type"],"title":"Manage Type","route_name":"admin.courier.unit.type.index","menu_active":"admin.courier.unit.type.index"}]},"support_ticket":{"title":"Support Ticket","icon":"la la-ticket","counters":["pendingTicketCount"],"menu_active":"admin.ticket*","submenu":[{"keyword":["Pending Ticket","Support Ticket","Ticket management","Ticket control","Ticket status","Ticket activity"],"title":"Pending Ticket","route_name":"admin.ticket.pending","menu_active":"admin.ticket.pending","counter":"pendingTicketCount"},{"keyword":["Closed Ticket","Support Ticket","Ticket management","Ticket activity"],"title":"Closed Ticket","route_name":"admin.ticket.closed","menu_active":"admin.ticket.closed"},{"keyword":["Answered Ticket","Support Ticket","Ticket management","Ticket activity"],"title":"Answered Ticket","route_name":"admin.ticket.answered","menu_active":"admin.ticket.answered"},{"keyword":["All Ticket","Support Ticket","Ticket management","Ticket control","Ticket activity"],"title":"All Ticket","route_name":"admin.ticket.index","menu_active":"admin.ticket.index"}]},"reports":{"title":"Report","icon":"la la-list","menu_active":"admin.report*","submenu":[{"keyword":["Login History","Report","Login report","Login history","Login activity"],"title":"Login History","route_name":"admin.report.login.history","menu_active":["admin.report.login.history","admin.report.login.ipHistory"]},{"keyword":["Notification History","Report","Notification report","Notification history","Notification activity","email log","email history","sms log","sms history"],"title":"Notification History","route_name":"admin.report.notification.history","menu_active":"admin.report.notification.history"}]},"system_setting":{"keyword":["System Setting","setting","System configuration","System preferences","Configuration management","System setup"],"title":"System Setting","icon":"las la-life-ring","route_name":"admin.setting.system","menu_active":["admin.setting.system","admin.setting.general","admin.setting.system.configuration","admin.setting.logo.icon","admin.extensions.index","admin.language.manage","admin.language.key","admin.seo","admin.frontend.templates","admin.frontend.manage.*","admin.maintenance.mode","admin.setting.cookie","admin.setting.custom.css","admin.setting.sitemap","admin.setting.robot","admin.setting.notification.global.email","admin.setting.notification.global.sms","admin.setting.notification.email","admin.setting.notification.sms","admin.setting.notification.templates","admin.setting.notification.template.edit","admin.frontend.index","admin.frontend.sections*"]},"extra":{"title":"Extra","icon":"la la-server","menu_active":"admin.system*","counters":["updateAvailable"],"submenu":[{"keyword":["Application","System","Application management","Application settings","System information","version","laravel","timezone"],"title":"Application","route_name":"admin.system.info","menu_active":"admin.system.info"},{"keyword":["Server","System","Server management","Server settings","System information","version","php version","software","ip address","server ip address","server port","http host"],"title":"Server","route_name":"admin.system.server.info","menu_active":"admin.system.server.info"},{"keyword":["Cache","System","Cache management","Cache optimization","System performance","clear cache"],"title":"Cache","route_name":"admin.system.optimize","menu_active":"admin.system.optimize"},{"keyword":["Update","System","Update management","System update","Software updates","version update","upgrade","latest version"],"title":"Update","route_name":"admin.system.update","menu_active":"admin.system.update*","counter":"updateAvailable"}]},"report_and_request":{"keyword":["Report \u0026 Request","Report and Request","Reports and Requests","Reporting and Requests","Report management","Request management","feature request","bug report"],"title":"Report \u0026 Request","icon":"las la-bug","route_name":"admin.request.report","menu_active":"admin.request.report"}});

    $('.navbar__action-list .dropdown-menu').on('click', function(event){
        event.stopPropagation();
    });
</script>
<script src="https://script.viserlab.com/courierlab/demo/assets/viseradmin/js/search.js"></script>
<script>
    "use strict";
    function getEmptyMessage(){
        return `<li class="text-muted">
                <div class="empty-search text-center">
                    <img src="https://script.viserlab.com/courierlab/demo/assets/images/empty_list.png" alt="empty">
                    <p class="text-muted">No search result found</p>
                </div>
            </li>`
    }
</script>
</body>

</html>
