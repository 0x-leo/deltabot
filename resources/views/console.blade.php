@extends('layouts.dash')

@section('content')

<div class="row gy-3 mb-6 justify-content-between">
          <div class="col-md-9 col-auto">
            <h2 class="mb-2 text-1100">Dashboard</h2>
            <h5 class="text-700 fw-semi-bold">Here’s what’s going on right now</h5>
          </div>
          <div class="col-md-3 col-auto">
            <div class="flatpickr-input-container"><input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}'><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div>
          </div>
        </div>
        <div class="row mb-3 gy-6">
          <div class="col-12 col-xxl-2">
            <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Bots</span></h2>
                    <p class="text-800 fs--1 mb-0">Running</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Transactions</span></h2>
                    <p class="text-800 fs--1 mb-0">Successful</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Transactions</span></h2>
                    <p class="text-800 fs--1 mb-0">Failed</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-500"></span>
                  <div class="ms-2">
                    <h2 class="mb-0">0<span class="fs-1 fw-semi-bold text-900 ms-2">Transactions</span></h2>
                    <p class="text-800 fs--1 mb-0">Reverted</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
          <div class="card border border-300 h-100 w-100 overflow-hidden">
              <div class="card-body px-5 position-relative">
                <h3 class="mb-5">Deploy a bot</h3>
                <p class="text-700 fw-semi-bold">To get started, deploy an MEV bot, which runs on a virtual server in the cloud.</p>
              </div>
              <div class="card-footer border-0 py-0 px-5 z-index-1">
                  <a href="{{ url('/console/deployment') }}" class="btn btn-primary">Deploy a bot</a>
                  <a href="{{ url('/') }}" class="btn btn-phoenix-primary order-0">Mempool</a>
                  <br>
                  <br>
                    <p class="text-700 fw-semi-bold">Note: You bots will search on <a href="#">Binance Smart Chain (BSC)</a> by default</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 col-xxl-5">
            <div class="card border border-300 h-100 w-100 overflow-hidden">
              <div class="card-body px-5 position-relative">
                
                <h3 class="mb-5">Additional information</h3>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Getting started guide</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Documentation</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Forums</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Pricing</a></li>
                      <li class="list-group-item fw-semi-bold border-0"><a href="#">Contact us</a></li>
                    </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 pb-3 border-y border-300">
          <div class="row">
            <div class="col-12 col-xl-7 col-xxl-6">
              <div class="row g-3 mb-3">
                <div class="col-12 col-md-6">
                  <h3 class="text-1100 text-nowrap">Extracted MEV by Protocol</h3>
                  <p class="text-700 mb-md-7">Updated in real time</p>
                  <div class="d-flex align-items-center justify-content-between">

                  </div>
                  <hr class="bg-200 mb-2 mt-2">
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/green.png" alt="" height="8" width="16">Alpaca</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/blue.png" alt="" height="8" width="16">PancakeSwap V2</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/skyblue.png" alt="" height="8" width="16">Venus</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/red.png" alt="" height="8" width="16">BiSwap</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/yellow.png" alt="" height="8" width="16">Apeswap</p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/yellow.png" alt="" height="8" width="16">Coinwind</p>
                  </div>

                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-semi-bold text-900"><img class="me-2" src="../assets/img/icons/yellow.png" alt="" height="8" width="16">Wombat</p>
                  </div>
                  
                  <button class="btn btn-outline-primary mt-5">See Details<svg class="svg-inline--fa fa-angle-right ms-2 fs--2 text-center" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <span class="fas fa-angle-right ms-2 fs--2 text-center"></span> Font Awesome fontawesome.com --></button>
                </div>
                <div class="col-12 col-md-6">
                  <div class="position-relative mb-sm-4 mb-xl-0">
                    <div class="echart-issue-chart" style="min-height: 390px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1671278318193"><div style="position: relative; width: 339px; height: 390px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="339" height="390" style="position: absolute; left: 0px; top: 0px; width: 339px; height: 390px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; top: 0px; left: 0px; transform: translate3d(14px, 246px, 0px); border-color: rgb(255, 204, 133); pointer-events: none; visibility: hidden; opacity: 0;"><div style="margin: 0px 0 0;line-height:1;"><div style="font-size:14px;color:#666;font-weight:400;line-height:1;">Tasks assigned to me</div><div style="margin: 10px 0 0;line-height:1;"><div style="margin: 0px 0 0;line-height:1;"><span style="display:inline-block;margin-right:4px;border-radius:10px;width:10px;height:10px;background-color:#ffcc85;"></span><span style="font-size:14px;color:#666;font-weight:400;margin-left:2px">R &amp; D</span><span style="float:right;margin-left:20px;font-size:14px;color:#666;font-weight:900">24</span><div style="clear:both"></div></div><div style="clear:both"></div></div><div style="clear:both"></div></div></div></div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-12 col-xl-5 col-xxl-6">
                  <h3>Cumulative Extracted MEV - Gross Profit</h3>
                  <div class="echart-zero-burnout-chart" style="min-height: 320px; width: 100%; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" _echarts_instance_="ec_1671278318192"><div style="position: relative; width: 694px; height: 320px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;"><canvas data-zr-dom-id="zr_0" width="694" height="320" style="position: absolute; left: 0px; top: 0px; width: 694px; height: 320px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class="" style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(15, 17, 26); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; top: 0px; left: 0px; transform: translate3d(60px, 78px, 0px); border-color: rgb(49, 55, 74); pointer-events: none; visibility: hidden; opacity: 0;"><div>
                <p class="mb-2 text-600">
                  Dec 03, 2022
                </p>
            <div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #90d67f;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#90d67f"></span> Font Awesome fontawesome.com -->
                  Issues found : 3
                </h6>
              </div><div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #60c6ff;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#60c6ff"></span> Font Awesome fontawesome.com -->
                  Open : 6
                </h6>
              </div><div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #ffcc85;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#ffcc85"></span> Font Awesome fontawesome.com -->
                  In Progress : 11
                </h6>
              </div><div class="ms-1">
                <h6 class="text-700"><svg class="svg-inline--fa fa-circle me-1 fs--2" style="color: #3e465b;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z"></path></svg><!-- <span class="fas fa-circle me-1 fs--2" style="color:#3e465b"></span> Font Awesome fontawesome.com -->
                  Actual : 20
                </h6>
              </div>
                  </div></div></div>
            </div>
          </div>
        </div>
          
@endsection
