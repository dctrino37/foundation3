@extends('layouts.frontlayout')

@section('title')
    Home
@endsection

@section('content')
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container" data-aos="zoom-out">
            <div class="row ">
                <div class="col-lg-4">
                    <a class="red" href="/projects/food-aid/">
                        <figure>
                            <img src="{{ url('https://syriarelief.org.uk/media/_cache/718970e638af.jpg', []) }}"
                                width="100%">
                            <figcaption>{{trans('middle_east_office.providing_food_and_clothings')}}</figcaption>
                        </figure>
                    </a>
                    <a class="red" href="/projects/food-aid/">
                        <figure>
                            <img src="https://syriarelief.org.uk/media/_cache/191410da0e0e.jpg" width="100%">
                            <figcaption>{{trans('middle_east_office.water_and_sanitation')}}</figcaption>
                        </figure>
                    </a>



                    <div class="social-links order-first order-lg-last mb-3 mb-lg-0 text-center">
                        <h6 style="font-weight: 600">{{trans('middle_east_office.you_can_also_add_a_share_to_social_media_button')}}</h6>
                        <a href="#" class="twitter" onclick="return tbs_click()" target="_blank"><i
                                class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook" onclick="return fbs_click()" target="_blank"><i
                                class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram" onclick="return rbs_click()" target="_blank"><i
                                class="bi bi-reddit"></i></a>
                        <a href="#" class="google-plus" onclick="return pbs_click()" target="_blank"><i
                                class="bi bi-pinterest"></i></a>
                        <a href="#" class="linkedin" onclick="return lbs_click()" target="_blank"><i
                                class="bi bi-linkedin"></i></a>
                    </div>


                </div>

                <div class="col-lg-4 pb-3">
                    <div class="card">
                        {{-- <img src="https://ucarecdn.com/35fbd10f-80ca-4f0f-ab9d-20f75c6b4947/-/resize/470x/-/format/auto/" alt="..."
                    width="100%" height="auto"> --}}
                        <a class="red" href="/projects/food-aid/">
                            <figure>
                                <img src="{{ url('frontassets/img/foodaid.jpg', []) }}" width="100%">
                                <figcaption>{{trans('middle_east_office.providing_relief_for_blind_children')}}</figcaption>
                            </figure>
                        </a>
                        <div class="card-body px-3">
                            <p class="campaign-text">{{trans('middle_east_office.some_babies_are_born_blind,_yet_poor,_some_do_not_have_access_to_basic_education,_others_cannot_afford_a_pair_of_shoes,_some_drink_contaminated_water,')}} <br>
                                {{trans('middle_east_office.others_are_born_with_malformation_and_yet_cannot_access_health_care.')}} <br>
                                {{trans("middle_east_office.in_a_world_where_others_throw_enough_food_into_the_dustbin_others_can't_just_afford_a_single_meal_per_day._remember_to_who_tries_to_give_happiness_to_others_hapiness_is_also_added_to_his_life._join_our_community_of_monthly_donators_today._make_a_change_today")}}</p>
                            <div>

                                <a class="btn btn-primary d-inline" href="https://wa.me/+919815830553"><img
                                        src="{{ url('frontassets/img/whatsapp.png') }}" alt="" height="20px">
                                    {{trans('middle_east_office.whatsapp_us')}}</a>
                                <a class="btn btn-primary d-inline mx-2" href="#contact">{{trans('middle_east_office.contact_us')}}</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 pb-3">
                    <div class="card">
                        <div class="header-center-hero text-center text-middle mt-3">
                            <img src="https://p.kindpng.com/picc/s/140-1407494_security-shield-lock-hd-png-download.png"
                                alt="" height="40px">
                            <p class="secure"> {{trans('middle_east_office.secure_donation')}} </p>
                        </div>
                        <div class="card-body" id="donation">
                            <div role="group" class="d-table w-100 table-layout-fixed mb-2">
                                <div class="d-table-cell text-top w-50"><button type="button"
                                        data-tracker-ignore-autotrack="" qa="give-once" aria-current="true"
                                        aria-disabled="true" class="btn-tab p-rel btn-tab-left active z-index-3">
                                        <div class="btn-tab-grad-bg p-abs top-left bottom-right"></div>
                                        <div class="p-rel z-index-2">
                                            <div class="btn-tab-text text-truncate px-1">{{trans('middle_east_office.give_once')}}</div>
                                        </div>
                                    </button></div>
                                <div class="d-table-cell text-top w-50">
                                    <div class="p-rel"><button type="button" data-tracker-ignore-autotrack=""
                                            qa="give-monthly" aria-current="false" aria-disabled="false"
                                            class="btn-tab p-rel btn-tab-right">
                                            <div class="btn-tab-grad-bg p-abs top-left bottom-right"></div>
                                            <div class="p-rel z-index-2">
                                                <div
                                                    class="btn-tab-text d-flex align-items-center justify-content-center px-1">
                                                    <div class="flex-shrink-0 mr-1">
                                                        <div class="p-rel">
                                                            <div class="p-rel z-index-1"><svg svg-inline=""
                                                                    focusable="false" role="presentation" width="18"
                                                                    height="18" viewBox="0 0 18 18" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg" class="d-block">
                                                                    <path
                                                                        d="M9 14.154c11.106-6.118 4.174-13.12 0-8.833-4.174-4.288-11.106 2.715 0 8.833z"
                                                                        fill="url(#paint0_radial_4312_76)"></path>
                                                                    <defs>
                                                                        <radialGradient id="paint0_radial_4312_76"
                                                                            cx="0" cy="0" r="1"
                                                                            gradientUnits="userSpaceOnUse"
                                                                            gradientTransform="matrix(0 8.9911 -10.6258 0 9 5.163)">
                                                                            <stop stop-color="#F45D5A"></stop>
                                                                            <stop offset=".466" stop-color="#F55E5B">
                                                                            </stop>
                                                                            <stop offset=".808" stop-color="#F21814">
                                                                            </stop>
                                                                            <stop offset="1" stop-color="#F00905">
                                                                            </stop>
                                                                        </radialGradient>
                                                                    </defs>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="min-w-0 text-truncate">{{trans('middle_east_office.monthly')}}</div>
                                                </div>
                                            </div>
                                        </button></div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div role="group" class="amount-options">
                                    <div class="option"><button title="₹9,000" qa="suggested-amount-button"
                                            aria-current="false" aria-disabled="false" class="btn-amount"><span
                                                class="text-truncate">
                                                ₹9,000
                                            </span></button>
                                    </div>
                                    <div class="option"><button title="₹5,000" qa="suggested-amount-button"
                                            aria-current="false" aria-disabled="false" class="btn-amount"><span
                                                class="text-truncate">
                                                ₹5,000
                                            </span></button>
                                    </div>
                                    <div class="option"><button title="₹2,500" qa="suggested-amount-button"
                                            aria-current="false" aria-disabled="false" class="btn-amount"><span
                                                class="text-truncate">
                                                ₹2,500
                                            </span></button>
                                    </div>
                                    <div class="option"><button title="₹1,500" qa="suggested-amount-button"
                                            aria-current="false" aria-disabled="false" class="btn-amount"><span
                                                class="text-truncate">
                                                ₹1,500
                                            </span></button>
                                    </div>
                                    <div class="option"><button title="₹1,200" qa="suggested-amount-button"
                                            aria-current="false" aria-disabled="false" class="btn-amount"><span
                                                class="text-truncate">
                                                ₹1,200
                                            </span></button>
                                    </div>
                                    <div class="option"><button title="₹600" qa="suggested-amount-button"
                                            aria-current="false" aria-disabled="false" class="btn-amount"><span
                                                class="text-truncate">
                                                ₹600
                                            </span></button>
                                    </div>
                                </div>
                            </div>

                            <div id="amount-element" class="group-shadow mb-2">
                                <div class="group-price-control">
                                    <div class="d-table w-100 p-rel z-index-2">
                                        <label for="v-1646253094115-amount" class="d-table-cell text-middle">
                                            <div class="price-symbol"><span class="sr-only">{{trans('middle_east_office.donation_amount')}}</span> <span
                                                    qa="currency-symbol">₹</span></div>
                                        </label>
                                        <div class="d-table-cell text-middle w-100">
                                            <!----> <input autocomplete="off"
                                                class="price-control control-price with-currency-symbol" type="text"
                                                pattern="[\d,]*" inputmode="numeric" id="v-1646253094115-amount"
                                                qa="amount" data-tracker-ignore-autotrack="" data-vv-name="amount"
                                                placeholder="Other">
                                        </div>
                                        <div class="d-table-cell text-middle p-rel currency-select">
                                            <div class="currency-select-label with-currency-symbol">
                                                <div class="d-table">
                                                    <div qa="selected-currency" class="d-table-cell text-middle">
                                                        INR
                                                    </div>
                                                    <div class="d-table-cell text-middle">
                                                        <svg svg-inline="" focusable="false" role="presentation"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg"
                                                            class="d-block">
                                                            <path d="M4 6l4 4 4-4" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>


                                            <label for="v-1646253094115-currency" class="sr-only">{{trans('middle_east_office.donation_currency')}}</label>
                                            <select qa="currency-selector" id="v-1646253094115-currency"
                                                class="currency-select-control">
                                                <optgroup label="">
                                                    <option value="USD">
                                                        USD | {{trans('middle_east_office.us_dollar')}}
                                                    </option>
                                                    <option value="INR">
                                                        INR | {{trans('middle_east_office.indian_rupee')}}
                                                    </option>
                                                </optgroup>
                                                <optgroup label="">
                                                    <option value="AED">
                                                        AED | {{trans('middle_east_office.united_arab_emirates_dirham')}}
                                                    </option>
                                                    <option value="AFN">
                                                        AFN | {{trans('middle_east_office.afghan_afghani')}}
                                                    </option>
                                                    <option value="ALL">
                                                        ALL | {{trans('middle_east_office.albanian_lek')}}
                                                    </option>
                                                    <option value="AMD">
                                                        AMD | {{trans('middle_east_office.armenian_dram')}}
                                                    </option>
                                                    <option value="ANG">
                                                        ANG | {{trans('middle_east_office.netherlands_antillean_guilder')}}
                                                    </option>
                                                    <option value="AOA">
                                                        AOA | {{trans('middle_east_office.angolan_kwanza')}}
                                                    </option>
                                                    <option value="ARS">
                                                        ARS | {{trans('middle_east_office.argentine_peso')}}
                                                    </option>
                                                    <option value="AUD">
                                                        AUD | {{trans('middle_east_office.australian_dollar')}}
                                                    </option>
                                                    <option value="AWG">
                                                        AWG | {{trans('middle_east_office.aruban_florin')}}
                                                    </option>
                                                    <option value="AZN">
                                                        AZN | {{trans('middle_east_office.azerbaijani_manat')}}
                                                    </option>
                                                    <option value="BAM">
                                                        BAM | {{trans('middle_east_office.bosnia-herzegovina_convertible_mark')}}
                                                    </option>
                                                    <option value="BBD">
                                                        BBD | {{trans('middle_east_office.barbadian_dollar')}}
                                                    </option>
                                                    <option value="BDT">
                                                        BDT | {{trans('middle_east_office.bangladeshi_taka')}}
                                                    </option>
                                                    <option value="BGN">
                                                        BGN | {{trans('middle_east_office.bulgarian_lev')}}
                                                    </option>
                                                    <option value="BIF">
                                                        BIF | {{trans('middle_east_office.burundian_franc')}}
                                                    </option>
                                                    <option value="BMD">
                                                        BMD | {{trans('middle_east_office.bermudan_dollar')}}
                                                    </option>
                                                    <option value="BND">
                                                        BND | {{trans('middle_east_office.brunei_dollar')}}
                                                    </option>
                                                    <option value="BOB">
                                                        BOB | {{trans('middle_east_office.bolivian_boliviano')}}
                                                    </option>
                                                    <option value="BRL">
                                                        BRL | {{trans('middle_east_office.brazilian_real')}}
                                                    </option>
                                                    <option value="BSD">
                                                        BSD | {{trans('middle_east_office.bahamian_dollar')}}
                                                    </option>
                                                    <option value="BWP">
                                                        BWP | {{trans('middle_east_office.botswanan_pula')}}
                                                    </option>
                                                    <option value="BZD">
                                                        BZD | {{trans('middle_east_office.belize_dollar')}}
                                                    </option>
                                                    <option value="CAD">
                                                        CAD | {{trans('middle_east_office.canadian_dollar')}}
                                                    </option>
                                                    <option value="CDF">
                                                        CDF | {{trans('middle_east_office.congolese_franc')}}
                                                    </option>
                                                    <option value="CHF">
                                                        CHF | {{trans('middle_east_office.swiss_franc')}}
                                                    </option>
                                                    <option value="CLP">
                                                        CLP | {{trans('middle_east_office.chilean_peso')}}
                                                    </option>
                                                    <option value="CNY">
                                                        CNY | {{trans('middle_east_office.chinese_yuan')}}
                                                    </option>
                                                    <option value="COP">
                                                        COP | {{trans('middle_east_office.colombian_peso')}}
                                                    </option>
                                                    <option value="CRC">
                                                        CRC | {{trans('middle_east_office.costa_rican_colón')}}
                                                    </option>
                                                    <option value="CVE">
                                                        CVE | {{trans('middle_east_office.cape_verdean_escudo')}}
                                                    </option>
                                                    <option value="CZK">
                                                        CZK | {{trans('middle_east_office.czech_koruna')}}
                                                    </option>
                                                    <option value="DJF">
                                                        DJF | {{trans('middle_east_office.djiboutian_franc')}}
                                                    </option>
                                                    <option value="DKK">
                                                        DKK | {{trans('middle_east_office.danish_krone')}}
                                                    </option>
                                                    <option value="DOP">
                                                        DOP | {{trans('middle_east_office.dominican_peso')}}
                                                    </option>
                                                    <option value="DZD">
                                                        DZD | {{trans('middle_east_office.algerian_dinar')}}
                                                    </option>
                                                    <option value="EGP">
                                                        EGP | {{trans('middle_east_office.egyptian_pound')}}
                                                    </option>
                                                    <option value="ETB">
                                                        ETB | {{trans('middle_east_office.ethiopian_birr')}}
                                                    </option>
                                                    <option value="EUR">
                                                        EUR | {{trans('middle_east_office.euro')}}
                                                    </option>
                                                    <option value="FJD">
                                                        FJD | {{trans('middle_east_office.fijian_dollar')}}
                                                    </option>
                                                    <option value="FKP">
                                                        FKP | {{trans('middle_east_office.falkland_islands_pound')}}
                                                    </option>
                                                    <option value="GBP">
                                                        GBP | {{trans('middle_east_office.british_pound')}}
                                                    </option>
                                                    <option value="GEL">
                                                        GEL | {{trans('middle_east_office.georgian_lari')}}
                                                    </option>
                                                    <option value="GIP">
                                                        GIP | {{trans('middle_east_office.gibraltar_pound')}}
                                                    </option>
                                                    <option value="GMD">
                                                        GMD | {{trans('middle_east_office.gambian_dalasi')}}
                                                    </option>
                                                    <option value="GNF">
                                                        GNF | {{trans('middle_east_office.guinean_franc')}}
                                                    </option>
                                                    <option value="GTQ">
                                                        GTQ | {{trans('middle_east_office.guatemalan_quetzal')}}
                                                    </option>
                                                    <option value="GYD">
                                                        GYD | {{trans('middle_east_office.guyanaese_dollar')}}
                                                    </option>
                                                    <option value="HKD">
                                                        HKD | {{trans('middle_east_office.hong_kong_dollar')}}
                                                    </option>
                                                    <option value="HNL">
                                                        HNL | {{trans('middle_east_office.honduran_lempira')}}
                                                    </option>
                                                    <option value="HRK">
                                                        HRK | {{trans('middle_east_office.croatian_kuna')}}
                                                    </option>
                                                    <option value="HTG">
                                                        HTG | {{trans('middle_east_office.haitian_gourde')}}
                                                    </option>
                                                    <option value="HUF">
                                                        HUF | {{trans('middle_east_office.hungarian_forint')}}
                                                    </option>
                                                    <option value="IDR">
                                                        IDR | {{trans('middle_east_office.indonesian_rupiah')}}
                                                    </option>
                                                    <option value="ILS">
                                                        ILS | {{trans('middle_east_office.israeli_new_shekel')}}
                                                    </option>
                                                    <option value="INR">
                                                        INR | {{trans('middle_east_office.indian_rupee')}}
                                                    </option>
                                                    <option value="ISK">
                                                        ISK | {{trans('middle_east_office.icelandic_króna')}}
                                                    </option>
                                                    <option value="JMD">
                                                        JMD | {{trans('middle_east_office.jamaican_dollar')}}
                                                    </option>
                                                    <option value="JPY">
                                                        JPY | {{trans('middle_east_office.japanese_yen')}}
                                                    </option>
                                                    <option value="KES">
                                                        KES | {{trans('middle_east_office.kenyan_shilling')}}
                                                    </option>
                                                    <option value="KGS">
                                                        KGS | {{trans('middle_east_office.kyrgystani_som')}}
                                                    </option>
                                                    <option value="KHR">
                                                        KHR | {{trans('middle_east_office.cambodian_riel')}}
                                                    </option>
                                                    <option value="KMF">
                                                        KMF | {{trans('middle_east_office.comorian_franc')}}
                                                    </option>
                                                    <option value="KRW">
                                                        KRW | {{trans('middle_east_office.south_korean_won')}}
                                                    </option>
                                                    <option value="KYD">
                                                        KYD | {{trans('middle_east_office.cayman_islands_dollar')}}
                                                    </option>
                                                    <option value="KZT">
                                                        KZT | {{trans('middle_east_office.kazakhstani_tenge')}}
                                                    </option>
                                                    <option value="LAK">
                                                        LAK | {{trans('middle_east_office.laotian_kip')}}
                                                    </option>
                                                    <option value="LBP">
                                                        LBP | {{trans('middle_east_office.lebanese_pound')}}
                                                    </option>
                                                    <option value="LKR">
                                                        LKR | {{trans('middle_east_office.sri_lankan_rupee')}}
                                                    </option>
                                                    <option value="LRD">
                                                        LRD | {{trans('middle_east_office.liberian_dollar')}}
                                                    </option>
                                                    <option value="LSL">
                                                        LSL | {{trans('middle_east_office.lesotho_loti')}}
                                                    </option>
                                                    <option value="MAD">
                                                        MAD | {{trans('middle_east_office.moroccan_dirham')}}
                                                    </option>
                                                    <option value="MDL">
                                                        MDL | {{trans('middle_east_office.moldovan_leu')}}
                                                    </option>
                                                    <option value="MGA">
                                                        MGA | {{trans('middle_east_office.malagasy_ariary')}}
                                                    </option>
                                                    <option value="MKD">
                                                        MKD | {{trans('middle_east_office.macedonian_denar')}}
                                                    </option>
                                                    <option value="MMK">
                                                        MMK | {{trans('middle_east_office.myanmar_kyat')}}
                                                    </option>
                                                    <option value="MNT">
                                                        MNT | {{trans('middle_east_office.mongolian_tugrik')}}
                                                    </option>
                                                    <option value="MOP">
                                                        MOP | {{trans('middle_east_office.macanese_pataca')}}
                                                    </option>
                                                    <option value="MRO">
                                                        MRO | {{trans('middle_east_office.mauritanian_ouguiya_(1973–2017)')}}
                                                    </option>
                                                    <option value="MUR">
                                                        MUR | {{trans('middle_east_office.mauritian_rupee')}}
                                                    </option>
                                                    <option value="MVR">
                                                        MVR | {{trans('middle_east_office.maldivian_rufiyaa')}}
                                                    </option>
                                                    <option value="MWK">
                                                        MWK | {{trans('middle_east_office.malawian_kwacha')}}
                                                    </option>
                                                    <option value="MXN">
                                                        MXN | {{trans('middle_east_office.mexican_peso')}}
                                                    </option>
                                                    <option value="MYR">
                                                        MYR | {{trans('middle_east_office.malaysian_ringgit')}}
                                                    </option>
                                                    <option value="MZN">
                                                        MZN | {{trans('middle_east_office.mozambican_metical')}}
                                                    </option>
                                                    <option value="NAD">
                                                        NAD | {{trans('middle_east_office.namibian_dollar')}}
                                                    </option>
                                                    <option value="NGN">
                                                        NGN | {{trans('middle_east_office.nigerian_naira')}}
                                                    </option>
                                                    <option value="NIO">
                                                        NIO | {{trans('middle_east_office.nicaraguan_córdoba')}}
                                                    </option>
                                                    <option value="NOK">
                                                        NOK | {{trans('middle_east_office.norwegian_krone')}}
                                                    </option>
                                                    <option value="NPR">
                                                        NPR | {{trans('middle_east_office.nepalese_rupee')}}
                                                    </option>
                                                    <option value="NZD">
                                                        NZD | {{trans('middle_east_office.new_zealand_dollar')}}
                                                    </option>
                                                    <option value="PAB">
                                                        PAB | {{trans('middle_east_office.panamanian_balboa')}}
                                                    </option>
                                                    <option value="PEN">
                                                        PEN | {{trans('middle_east_office.peruvian_sol')}}
                                                    </option>
                                                    <option value="PGK">
                                                        PGK | {{trans('middle_east_office.papua_new_guinean_kina')}}
                                                    </option>
                                                    <option value="PHP">
                                                        PHP | {{trans('middle_east_office.philippine_piso')}}
                                                    </option>
                                                    <option value="PKR">
                                                        PKR | {{trans('middle_east_office.pakistani_rupee')}}
                                                    </option>
                                                    <option value="PLN">
                                                        PLN | {{trans('middle_east_office.polish_zloty')}}
                                                    </option>
                                                    <option value="PYG">
                                                        PYG | {{trans('middle_east_office.paraguayan_guarani')}}
                                                    </option>
                                                    <option value="QAR">
                                                        QAR | {{trans('middle_east_office.qatari_rial')}}
                                                    </option>
                                                    <option value="RON">
                                                        RON | {{trans('middle_east_office.romanian_leu')}}
                                                    </option>
                                                    <option value="RSD">
                                                        RSD | {{trans('middle_east_office.serbian_dinar')}}
                                                    </option>
                                                    <option value="RUB">
                                                        RUB | {{trans('middle_east_office.russian_ruble')}}
                                                    </option>
                                                    <option value="RWF">
                                                        RWF | {{trans('middle_east_office.rwandan_franc')}}
                                                    </option>
                                                    <option value="SAR">
                                                        SAR | {{trans('middle_east_office.saudi_riyal')}}
                                                    </option>
                                                    <option value="SBD">
                                                        SBD | {{trans('middle_east_office.solomon_islands_dollar')}}
                                                    </option>
                                                    <option value="SCR">
                                                        SCR | {{trans('middle_east_office.seychellois_rupee')}}
                                                    </option>
                                                    <option value="SEK">
                                                        SEK | {{trans('middle_east_office.swedish_krona')}}
                                                    </option>
                                                    <option value="SGD">
                                                        SGD | {{trans('middle_east_office.singapore_dollar')}}
                                                    </option>
                                                    <option value="SHP">
                                                        SHP | {{trans('middle_east_office.st._helena_pound')}}
                                                    </option>
                                                    <option value="SLL">
                                                        SLL | {{trans('middle_east_office.sierra_leonean_leone')}}
                                                    </option>
                                                    <option value="SOS">
                                                        SOS | {{trans('middle_east_office.somali_shilling')}}
                                                    </option>
                                                    <option value="SRD">
                                                        SRD | {{trans('middle_east_office.surinamese_dollar')}}
                                                    </option>
                                                    <option value="STD">
                                                        STD | {{trans('middle_east_office.são_tomé_&amp;amp;_príncipe_dobra_(1977–2017)')}}
                                                    </option>
                                                    <option value="SZL">
                                                        SZL | {{trans('middle_east_office.swazi_lilangeni')}}
                                                    </option>
                                                    <option value="THB">
                                                        THB | {{trans('middle_east_office.thai_baht')}}
                                                    </option>
                                                    <option value="TJS">
                                                        TJS | {{trans('middle_east_office.tajikistani_somoni')}}
                                                    </option>
                                                    <option value="TOP">
                                                        TOP | {{trans('middle_east_office.tongan_paʻanga')}}
                                                    </option>
                                                    <option value="TRY">
                                                        TRY | {{trans('middle_east_office.turkish_lira')}}
                                                    </option>
                                                    <option value="TTD">
                                                        TTD | {{trans('middle_east_office.trinidad_&amp;amp;_tobago_dollar')}}
                                                    </option>
                                                    <option value="TWD">
                                                        TWD | {{trans('middle_east_office.new_taiwan_dollar')}}
                                                    </option>
                                                    <option value="TZS">
                                                        TZS | {{trans('middle_east_office.tanzanian_shilling')}}
                                                    </option>
                                                    <option value="UAH">
                                                        UAH | {{trans('middle_east_office.ukrainian_hryvnia')}}
                                                    </option>
                                                    <option value="USD">
                                                        USD | {{trans('middle_east_office.us_dollar')}}
                                                    </option>
                                                    <option value="UYU">
                                                        UYU | {{trans('middle_east_office.uruguayan_peso')}}
                                                    </option>
                                                    <option value="UZS">
                                                        UZS | {{trans('middle_east_office.uzbekistani_som')}}
                                                    </option>
                                                    <option value="VND">
                                                        VND | {{trans('middle_east_office.vietnamese_dong')}}
                                                    </option>
                                                    <option value="VUV">
                                                        VUV | {{trans('middle_east_office.vanuatu_vatu')}}
                                                    </option>
                                                    <option value="WST">
                                                        WST | {{trans('middle_east_office.samoan_tala')}}
                                                    </option>
                                                    <option value="XAF">
                                                        XAF | {{trans('middle_east_office.central_african_cfa_franc')}}
                                                    </option>
                                                    <option value="XCD">
                                                        XCD | {{trans('middle_east_office.east_caribbean_dollar')}}
                                                    </option>
                                                    <option value="XOF">
                                                        XOF | {{trans('middle_east_office.west_african_cfa_franc')}}
                                                    </option>
                                                    <option value="XPF">
                                                        XPF | {{trans('middle_east_office.cfp_franc')}}
                                                    </option>
                                                    <option value="YER">
                                                        YER | {{trans('middle_east_office.yemeni_rial')}}
                                                    </option>
                                                    <option value="ZAR">
                                                        ZAR | {{trans('middle_east_office.south_african_rand')}}
                                                    </option>
                                                    <option value="ZMW">
                                                        ZMW | Zambian Kwacha
                                                    </option>
                                                </optgroup>
                                            </select>
                                            <div class="p-abs top-left bottom-right currency-select-control-focus"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-table-cell text-top px-body pt-1"><label data-tracker-ignore-autotrack=""
                                    class="d-flex cursor-pointer pl-2">
                                    <div class="flex-shrink-0 mr-2">
                                        <div class="custom-checkbox">
                                            <div class=""><input type="checkbox" qa="tribute-give-checkbox"
                                                    class="" style="opacity: 0.0001;">
                                                <div class="custom-checkbox-icon">
                                                    <!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div qa="tribute-label" class="flex-grow-1 min-w-0 text-truncate">
                                        {{trans('middle_east_office.dedicate_this_donation')}}
                                    </div>
                                </label>
                                <div id="tributeeNameBlock" class="mt-3" style="display: none;"><input
                                        id="v-1646253094115-inHonorOf" maxlength="100" qa="tribute-name" class="control"
                                        placeholder="Name of someone special to me"></div>
                            </div>

                            <div class="p-rel px-body pb-7 mt-5">
                                <button type="button" qa="next-screen-active-button mt-5"
                                    data-tracker-ignore-autotrack="" class="btn btn-primary">
                                    <div class="d-table table-layout-fixed w-100">
                                        <div class="d-table-cell text-middle text-center btn-cell px-2">
                                            <div class="text-truncate kkiapay-button">{{trans('middle_east_office.donate')}}</div>
                                            {{-- <button class="kkiapay-button"></button> --}}
                                        </div>
                                    </div>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        </div>
    </section>

    <section id="features" class="d-flex align-items-center py-3">
        <div class="container" data-aos="zoom-out">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card d-block text-center">
                        <div class="borderImage"
                            style="
                    background-image: url('https://t4.ftcdn.net/jpg/01/11/97/27/360_F_111972750_JWDtEKMw6JMlEFzBuODQzeOH1FnbyOB8.jpg');height:200px;
                    background-position: center;background-repeat: no-repeat;background-size: cover;
                    ">
                            {{-- <img class="el-image" alt=""
                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/GiveShoes-Circle-CutOut-Website-03-d7c9acf9.png"> --}}
                        </div>
                        <h5 class="my-4"> {{trans('middle_east_office.providing_relief')}} </h5>
                        <p style="text-align: center;"><span style="font-weight: 400;">{{trans('middle_east_office.whether_it’s_disaster_relief_or_supporting_homeless_kids,_we_distribute_new_shoes_and_clothing_in_the_u.s._and_around_the_world.')}}</span></p>
                    </div>
                </div>


                <div class="col-lg-4 pb-3">

                    <div class="card d-block text-center">
                        <div class="borderImage"                             style="
                        background-image: url('https://t4.ftcdn.net/jpg/01/11/97/27/360_F_111972750_JWDtEKMw6JMlEFzBuODQzeOH1FnbyOB8.jpg');height:200px;
                        background-position: center;background-repeat: no-repeat;background-size: cover;
                        ">
                            {{-- <img class="el-image" alt=""
                                src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/circle-3-74374c6d.png"> --}}
                        </div>
                        <h5 class="my-4"> {{trans('middle_east_office.fighting_poverty')}} </h5>
                        <p style="text-align: center;"><span style="font-weight: 400;">{{trans('middle_east_office.we_help_people_in_developing_countries_launch_and_sustain_their_own_small_businesses_selling_donated_shoes_and_clothing.')}}</span></p>
                    </div>

                </div>

                <div class="col-lg-4 pb-3">
                    <div class="card d-block text-center">
                        <div                             style="
                        background-image: url('https://t4.ftcdn.net/jpg/01/11/97/27/360_F_111972750_JWDtEKMw6JMlEFzBuODQzeOH1FnbyOB8.jpg');height:200px;
                        background-position: center;background-repeat: no-repeat;background-size: cover;
                        " class="borderImage">
                            {{-- <img class="el-image" alt=""
                                src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/MicrosoftTeams-image-16-b1fc4f66.png"> --}}
                        </div>
                        <h5 class="my-4">{{trans('middle_east_office.protecting_the_planet')}}</h5>
                        <p style="text-align: center;"><span style="font-weight: 400;">{{trans('middle_east_office.by_repurposing_unwanted_items_and_putting_them_to_good_use,_we_keep_them_out_of_landfills_and_extend_their_lifespan.')}}</span>
                        </p>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="section-header">
                <h2>{{trans('middle_east_office.join_our_community')}}</h2>
                <p>{{trans('middle_east_office.nothing_to_give_?_no_problem_?_you_can_still_join_our_newsletter_and_feel_your_self_part_of_the_world_growing_community,_intended_to_make_life_better_for_the_kids_and_needed.')}}</p>
            </div>
        </div>

        <div class="container">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-6">
                    <img
                        src="https://media.istockphoto.com/photos/group-of-friends-huddle-in-rear-view-together-picture-id668218790?b=1&amp;k=20&amp;m=668218790&amp;s=170667a&amp;w=0&amp;h=J3G9l1SxjurFMUExIH0tLiHLI2LSKy8COYgSwOe0DEc=">
                </div>

                <div class="col-lg-6">
                    <form action="{{ url('contact', []) }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="{{trans('middle_east_office.your_email')}}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="number" class="form-control" name="age" id="age"
                                    placeholder="{{trans('middle_east_office.your_age')}}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="location" id="location"
                                    placeholder="{{trans('middle_east_office.your_location')}}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <textarea style="height: 100px!important;" class="form-control" rows="2" name="message"
                                    placeholder="{{trans('middle_east_office.your_name_and_message')}}" required></textarea>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="loading">{{trans('middle_east_office.loading')}}</div>
                            <div class="error-message"></div>
                            <div class="sent-message">{{trans('middle_east_office.you_have_been_successfully_registered._thank_you!')}}</div>
                        </div>
                        <div class="text-center"><button type="submit">{{trans('middle_east_office.sign_up')}}</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>
        </div>
    </section>

    <main id="">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>{{trans('middle_east_office.our_mission')}}</h2>
                    <p>
                        {{trans('middle_east_office.our_goal_is_to_build_a_family_to_serve_orphans,_malformed_babies_worldwide,_fighting_child_trafficking,_child_labor,_generational_poverty_and_disease._our_first_goal_is_the_creation_of_food_bank_for_the_blind_and_opharn_children.')}}<br>{{trans('middle_east_office.aside_we_work_hard_to_provide_water_satination_and_education_to_children_who_do_not_have_access_to_clean_water._as_part_to_make_you_closer_to_the_kids,_we_would_organize_yearly_visit_and_choose_random_members_to_participate_in_yearly_entertainment_occassions_which_we_would_organize_to_bring_joy_to_the_kids.')}}
                    </p>
                </div>

                <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-5">
                        <div class="about-img">
                            <img src="{{ url('frontassets/img/about.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <h3 class="pt-0 pt-lg-5">{{trans('middle_east_office.have_nothing_to_offer_or_give_at_them_moment_and_yet_want_to_feel_part_of_this_caring_growing_community?')}}
                        </h3>

                        <!-- Tabs -->
                        <ul class="nav nav-pills mb-3">
                            <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">{{trans('middle_east_office.share_the_word_!!')}}</a>
                            </li>
                        </ul><!-- End Tabs -->

                        <!-- Tab Content -->
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">

                                <p class="fst-italic">{{trans('middle_east_office.yes,_we_know_life_might_not_be_all_that_"rose"._if_you_are_having_this_great_feeling_to_contribute_but_cannot_due_to_present_circumtances._you_should_know_can_simply_share_us_on_your_social_media_page_and_help_us_get_known...')}}</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>{{trans('middle_east_office.you_can_donate_old_shoes,_clothing_or_others.')}}</h4>
                                </div>
                                <p>{{trans('middle_east_office.you_can_help_prevent_waste_of_resources._we_do_accept_all_times_that_you_feel_may_help_us_carry_on_our_work.1_in_7_children_in_some_countries_some_kids_do_not_even_have_access_to_basic_necessities,_such_as_shoes,_cloths_etc_your_donation_of_any_item_that_you_judge_can_help_an_orphan_kid_is_most_welcomed.')}}</p>

                                <div class="d-flex align-items-center mt-4">
                                    <i class="bi bi-check2"></i>
                                    <h4>{{trans('middle_east_office.do_you_have_questions_or_feel_to_leave_down_a_word.')}}</h4>
                                </div>
                                <p>{{trans('middle_east_office.sure,_you_are_most_welcomes,_you_can_contact_us_by_clicking_on_the_whatsapp_button_up_the_page_or_by_the_contact_us_menu.')}}</p>

                            </div><!-- End Tab 1 Content -->
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <section id="tiles" class="d-flex align-items-center py-3">
            <div class="container" data-aos="zoom-out">
                <div class="row">
                    <div class="col-lg-6 left-div mb-2">
                        <div class="card d-block text-center">
                            <h5 class="mb-3"> {{trans('middle_east_office.helping_babies_born_with_congenital_anomalies_and_deformations')}} </h5>

                            <img class="el-image" alt=""
                                src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/October-Letter_Header-1-8aed097c.jpeg">

                            <p style="text-align: center" class="mt-3"><span
                                    style="font-weight: 400;font-size:1rem">{{trans('middle_east_office.every_day_a_lot_of_babies_are_born_with_congenital_anomalies_and_deformation&_usually_it_happens_the_the_are_born_into_poverty_with_little_or_no_means_to_afford_urgent_health_or_surgical_emergencies.')}}</span></p>
                        </div>
                    </div>


                    <div class="col-lg-3 pb-3">

                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-margin uk-text-center"
                                href="/give-shoes" id="page#8-0-1-1">

                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S_Box-White-1-059a728d.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> {{trans('middle_east_office.donate')}} <br
                                        class="uk-visible@s"> {{trans('middle_east_office.shoes')}} </h3>
                            </a>
                        </div>

                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-text-center"
                                href="/give-shoes" id="page#8-0-1-2">

                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S-HelpingHands-White-fe7d70ed.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> {{trans('middle_east_office.volunteer')}} </h3>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 pb-3">

                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-margin uk-text-center"
                                href="/give-shoes" id="thirdcolordiv">

                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S_Star-White-3e0ee185.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> {{trans('middle_east_office.partner')}} <br
                                        class="uk-visible@s"> {{trans('middle_east_office.with_us')}} </h3>
                            </a>
                        </div>

                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-text-center"
                                href="/give-shoes" id="fourthcolordiv">

                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S_FallingStars-White-ca22dcfb.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom"> {{trans('middle_east_office.fundraise')}} </h3>
                            </a>
                        </div>
                    </div>

                </div>
        </section>

        <section id="banners" class="d-flex align-items-center py-3">
            <div class="container" data-aos="zoom-out">
                <div class="row">

                    <div class="col-lg-3 pb-3">
                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-margin uk-text-center"
                                href="/free-distribution" id="page#3-1-0-0">
                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/Shoe-1-Rev@4x-ee71a04a.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                                    {{trans('middle_east_office.providing')}}
                                    <p> {{trans('middle_east_office.relief')}} </p>
                                </h3>
                                <div class="el-content uk-panel uk-margin-top">
                                    <p><strong>{{trans('middle_east_office.we_collect_new_shoes_and_clothing_to_distribute_to_people_in_need_across_the_u.s._and_around_the_world.')}}</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 pb-3">
                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-margin uk-text-center"
                                href="/free-distribution" id="page#3-1-0-1">
                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S-HelpingHands-White-fe7d70ed.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                                    {{trans('middle_east_office.fighting')}}
                                    <p> {{trans('middle_east_office.poverty')}} </p>
                                </h3>
                                <div class="el-content uk-panel uk-margin-top">
                                    <p><strong>{{trans('middle_east_office.we_help_people_launch_and_sustain_their_own_small_business_selling_donated_shoes_and_clothing.')}}</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 pb-3">
                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-margin uk-text-center"
                                href="/free-distribution" id="thirdbanner">
                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S_Globe-White-4dc5bdae.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                                    {{trans('middle_east_office.the')}}
                                    <p> {{trans('middle_east_office.planet')}} </p>
                                </h3>
                                <div class="el-content uk-panel uk-margin-top">
                                    <p><strong>{{trans('middle_east_office.we’re_protecting_the_environment_by_putting_used_goods_to_good_use,_instead_of_wasting_away_in_a_landfill.')}}</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 pb-3">
                        <div class="d-block text-center color-div">
                            <a class="uk-card uk-card-primary uk-card-hover uk-card-body uk-margin-remove-first-child uk-display-block uk-link-toggle uk-margin uk-text-center"
                                href="/free-distribution" id="fourthbanner">
                                <img class="el-image" alt=""
                                    src="https://www.soles4souls.org/wp-content/themes/yootheme/cache/S4S_FallingStars-White-ca22dcfb.png">
                                <h3 class="el-title uk-card-title uk-margin-top uk-margin-remove-bottom">
                                    {{trans('middle_east_office.empowering')}}
                                    <p> {{trans('middle_east_office.women')}} </p>
                                </h3>
                                <div class="el-content uk-panel uk-margin-top">
                                    <p><strong>{{trans('middle_east_office.we_aim_to_empower_women,_ensuring_they_have_the_opportunity_and_recognition_they_deserve.')}}</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-header">
                    <h2>{{trans('middle_east_office.contact_us')}}</h2>
                    <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad
                        dolores
                        adipisci aliquam.</p>
                </div>

            </div>

            <div class="container">

                <div class="row gy-5 gx-lg-5">

                    <div class="col-lg-4">

                        <div class="info">
                            <h3>{{trans('middle_east_office.get_in_touch')}}</h3>
                            <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi
                                minus.</p>

                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>{{trans('middle_east_office.location:')}}</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>{{trans('middle_east_office.email:')}}</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>{{trans('middle_east_office.call:')}}</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-8">
                        @include ('front.contact_form')
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
