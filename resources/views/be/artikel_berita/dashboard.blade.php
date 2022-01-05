@extends('layouts.be.sidebar')
@section('head')
<link rel="stylesheet" href="{{asset('be/assets/plugins/morrisjs/morris.css')}}" />
@endsection

@section('content')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    
                    <div class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </div>
                </div>            
                <div class="col-lg-7 col-md-7 col-sm-12" style="text-align: right">
                    <h2>Pusat Data</h2>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-eye zmdi-hc-3x col-amber"></i></p>
                        <span>Total Pembaca Halaman Muka</span>
                        <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="2078" data-speed="2000" data-fresh-interval="700">2078</span></h3>
                        <small class="text-muted">100% total pembaca</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x col-blue"></i></p>
                        <span>Total Artikel & Berita</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="865" data-speed="2000" data-fresh-interval="700">865</h3>
                        <small class="text-muted">15 % Artikel 85% Berita</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi  zmdi-balance zmdi-hc-3x col-purple"></i></p>
                        <span>Bidang</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="3502" data-speed="2000" data-fresh-interval="700">3502</h3>
                        <small class="text-muted">100% bidang NF</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x col-green"></i></p>
                        <span>Total Pembaca Artikel & Berita</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="78" data-speed="2000" data-fresh-interval="700">78</h3>
                        <small class="text-muted">78% Artikel 12% Berita</small>
                    </div>
                </div>
            </div>
        </div>        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Visit</strong> & Sales Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                    <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body m-b-10">
                        <div id="m_area_chart"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Campaign</strong> Performance</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                    <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body m-b-10">
                        <div class="progress-container l-black">
                            <span class="progress-badge">Facebook Campaign</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                    <span class="progress-value">68%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body m-b-10">
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Google AdSense</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 91%;">
                                    <span class="progress-value">91%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body m-b-20">
                        <div class="progress-container progress-warning">
                            <span class="progress-badge">LinkedIn Campaign</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                    <span class="progress-value">35%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body align-center">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="margin-0">60%</h4>
                                <p>Monthly</p>
                            </div>
                            <div class="col-4">
                                <h4 class="margin-0">20%</h4>
                                <p>Weekly</p>
                            </div>
                            <div class="col-4">
                                <h4 class="margin-0">30%</h4>
                                <p>Daily</p>
                            </div>
                        </div>
                        <div class="sparkline-pie">6,1,3</div>
                    </div>                    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Site</strong> Traffic</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                    <li><a role="button" class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body m-b-10">
                        <h5 class="m-b-0 number count-to" data-from="0" data-to="2651" data-speed="2000" data-fresh-interval="700">2651</h5>
                        <p class="text-muted">Direct <span class="float-right">48%</span></p>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                        </div>

                        <h5 class="m-b-0 number count-to" data-from="0" data-to="251" data-speed="2000" data-fresh-interval="700">251</h5>
                        <p class="text-muted">Referrals <span class="float-right">18%</span></p>
                        <div class="progress m-b-20">
                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                        </div>
                        
                        <h5 class="m-b-0 number count-to" data-from="0" data-to="941" data-speed="2000" data-fresh-interval="700">941</h5>
                        <p class="text-muted">Search Engines <span class="float-right">67%</span></p>
                        <div class="progress">
                            <div class="progress-bar l-green" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                        </div>
                    </div>
                    <div class="body">
                        <p class="m-b-10">Page View <small class="float-right">3,665</small></p>
                        <div id="sparkline14"></div>                        
                        <p class="m-b-10 m-t-30">Bounce Rate <small class="float-right">2,925</small></p>
                        <div id="sparkline15"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2><strong>Traffic</strong> this month <small>7% higher than last Month</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                    <li><a class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body m-b-10">
                        <div class="row">
                            <div class="col-5 col-md-5 text-center">
                                <input type="text" class="knob" value="86" data-width="50" data-height="50" data-thickness="0.2" data-fgColor="#e5678f">
                            </div>
                            <div class="col-7 col-md-7">
                                <h3 class="m-b-0">78.02 Gb</h3>                                
                            </div>
                        </div>
                    </div>
                    <div class="body l-coral overflowhidden">
                        <p class="m-b-0">Outbound Bandwidth</p>
                        <h3>340</h3>                        
                        <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="#fff" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="#fff" data-max-Spot-Color="#fff" data-spot-Color="#fff"
                            data-offset="90" data-width="100%" data-height="135px" data-line-Width="2" data-line-Color="#fff"
                            data-fill-Color="transparent">2,3,5,6,4,5,1,2,3,2,5</div>
                    </div>
                </div>
            </div>
        </div>             
    </div>
</section>
@endsection
<!-- Main Content -->
@section('script')
<script src="{{asset('be/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js --> 
<script src="{{asset('be/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js --> 
<script src="{{asset('be/assets/js/pages/index.js')}}"></script>
@endsection
<!-- Jquery Core Js -->
