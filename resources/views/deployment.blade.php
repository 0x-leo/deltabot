@extends('layouts.dash')

@section('content')

        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/console') }}">Console</a></li>
            <li class="breadcrumb-item active">Deployment</li>
          </ol>
        </nav>
        <form class="mb-9">
        @csrf
          <div class="row justify-content-between align-items-end g-3 mb-5">
            <div class="col-12 col-sm-auto col-xl-8">
              <h2>Deploy a bot</h2>
            </div>
            <div class="alert alert-outline-warning d-flex align-items-center" role="alert">
              <span class="fas fa-info-circle text-warning fs-3 me-3"></span>
              <p class="mb-0 flex-1">Your bot will be connected exclusively to BSC due to the limitations on your account!</p>
              <button class="btn-close btn-close-white" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-xl-8">
              <h4 class="fs-1 mb-4">Transaction propagation</h4>
              <div class="row g-3">
                <div class="col-sm-6 col-md-12">
                  <div class="form-floating"><input class="form-control" id="floatingEventInput" type="text" value="https://bsc-dataseed1.binance.org" disabled="disabled"><label for="floatingEventInput">Network Provider</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                <div class="form-floating"><input class="form-control" id="floatingEventInput" type="text" value="mongodb://localhost:27017/" disabled="disabled"><label for="floatingEventInput">Database</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                <div class="form-floating"><input class="form-control" id="floatingEventInput" type="text" value="https://bscscan.com/tx" disabled="disabled"><label for="floatingEventInput">Explorer</label></div>
                </div>

                
                <div class="col-12 mt-4">
                <label for="floatingEventInput">Gas limit</label>
                <br />
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio1" type="radio" name="inlineRadioOptions" value="option1" checked="checked"><label class="form-check-label" for="inlineRadio1">3000000</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio2" type="radio" name="inlineRadioOptions" value="option2"><label class="form-check-label" for="inlineRadio2">1000000</label></div>
                  <div class="form-check form-check-inline"><input class="form-check-input" id="inlineRadio3" type="radio" name="inlineRadioOptions" value="option3"><label class="form-check-label" for="inlineRadio3">1700000</label></div>
                </div>
                <div class="col-sm-6 col-md-12 mt-md-0 mt-lg-1">
                  <div class="form-floating"><input class="form-control" id="floatingVenueInput" type="text" placeholder="Venue"><label for="floatingVenueInput">Bundle executor address</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectCountry">
                      <option selected="selected">Select</option>
                      <option value="1">0.3%</option>
                      <option value="2">0.8%</option>
                      <option value="3">0.10%</option>
                      <option value="3">2 %</option>
                    </select><label for="floatingSelectCountry">Minimun slippage threshold</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectState" disabled="disabled">
                      <option selected="selected">3.9</option>
                      <option value="1">2.4</option>
                      <option value="2">0.5</option>
                      <option value="3">5.5</option>
                    </select><label for="floatingSelectState">Gas factor</label></div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                      <option selected="selected">UniswapV2Oracle</option>
                      <option value="1">SushiswapV2Oracle</option>
                    </select><label for="floatingSelectCity">Oracle</label></div>
                </div>
                <h4 class="fs-1 mt-7">Schedule <span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Optional</span><span class="ms-1" data-feather="info"></span></span>
                </h4>
                <div class="col-sm-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="startDatepicker" type="text" placeholder="start date" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><span class="uil uil-calendar-alt flatpickr-icon text-700"></span><label class="ps-6" for="startDatepicker">Start date</label></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="timepickerEvent" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly"><label for="timepickerEvent">Start Time</label></div>
                </div>
                <div class="col-sm-6">
                  <div class="flatpickr-input-container">
                    <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="endDatepicker" type="text" placeholder="end date" data-options="{&quot;disableMobile&quot;:true}" readonly="readonly"><span class="uil uil-calendar-alt flatpickr-icon text-700"></span><label class="ps-6" for="endDatepicker">End date</label></div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating"><input class="form-control datetimepicker flatpickr-input" id="timepickerEvent" type="text" placeholder="H:i" data-options="{&quot;enableTime&quot;:true,&quot;noCalendar&quot;:true,&quot;dateFormat&quot;:&quot;H:i&quot;,&quot;disableMobile&quot;:true}" readonly="readonly"><label for="timepickerEvent">End Time</label></div>
                </div>

                <h4 class="fs-1 mt-7">Core</h4>
                <div class="col-12 gy-6">
                  <div class="form-floating"><textarea class="form-control" id="floatingProjectDescription" style="height: 128px"></textarea><label for="floatingProjectDescription">ABI</label></div>
                </div>
                <div class="col-sm-6 gy-6">
                  <div class="form-floating"><input class="form-control" id="floatingOrganizersInput" type="text" value="0x10ED43C718714eb63d5aA57B78B54704E256024E"><label for="floatingOrganizersInput">ROUTER_ADDRESS</label></div>
                </div>
                <div class="col-sm-6 gy-6">
                  <div class="form-floating"><input class="form-control" id="floatingSponsorsInput" type="text" value="0xbb4CdB9CBd36B01bD1cBaEBF2De08d9173bc095c"><label for="floatingSponsorsInput">WBNB_ADDRESS</label></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <h4 class="fs-1 mb-4">Private miner</h4>
              <div class="form-check mb-4"><input class="form-check-input" id="exampleRadios1" type="radio" name="exampleRadios" value="option1" checked="checked"><label class="form-check-label fw-normal" for="exampleRadios1">Flashbots (Relay)</label></div>
              <div class="form-check mb-8"><input class="form-check-input" id="exampleRadios2" type="radio" name="exampleRadios" value="option2"><label class="form-check-label fw-normal" for="exampleRadios2">Eden Network</label></div>
              <div class="form-check"><input class="form-check-input" id="flexChecked" type="checkbox" checked="checked"><label class="form-check-label fw-bold fs-0 mb-6" for="flexChecked">Show the number of available tickets</label></div>
              <h4 class="fs-1 mb-4">Mempool Stream</h4>
              <label class="form-check-label fw-normal" for="exampleRadios2">Monitor pending transactions
              for upcoming block, to simulate and execute FR/BR transactions, by choosing a node service.</label>
              <br>
              <br>
              <div class="row g-2 mb-4">
                <div class="col-sm-4 col-lg-12 col-xl-6 col-xxl-4"><button class="btn btn-phoenix-secondary me-1 mb-1 w-100" type="button">GETH</button></div>
                <div class="col-sm-4 col-lg-12 col-xl-6 col-xxl-4"><button class="btn btn-phoenix-secondary me-1 mb-1 w-100" type="button">Nethermind</button></div>
                <div class="col-sm-4 col-lg-12 col-xl-6 col-xxl-4"><button class="btn btn-phoenix-secondary me-1 mb-1 w-100" type="button">Besu</button></div>
              </div>
              <div class="row g-3 mb-7">
                <div class="col-6 col col-xl-7">
                  <h4 class="fs--1">DEX aggregators</h4>
                </div>
                <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                      <option selected="selected">Select</option>
                      <option value="1">ParaSwap</option>
                      <option value="2">1inch</option>
                      <option value="3">Kyber</option>
                    </select><label for="floatingSelectCity">Multichain Aggregator</label></div>
                    <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                      <option selected="selected">Select</option>
                      <option value="1">Alpaca Finance</option>
                      <option value="2">Beefy</option>
                      <option value="3">PancakeBunny</option>
                    </select><label for="floatingSelectCity">Aggregator 1</label></div>
                    <div class="form-floating"><select class="form-select" id="floatingSelectCity">
                      <option selected="selected">Select</option>
                      <option value="1">Autofarm</option>
                      <option value="2">Harvest finance</option>
                      <option value="3">Akropolis</option>
                    </select><label for="floatingSelectCity">Aggregator 2</label></div>
              </div>
              <h4 class="fs-1 mb-">Trade Configuration</h4>
              <br>
              <div class="row g-3 mb-3">
              
              
              <div class="form-floating"><input class="form-control" id="floatingVenueInput" type="text" placeholder="  Address"><label for="floatingVenueInput">Your wallet address</label></div>
              <h4 class="fs--1">Select pairs</h4>
                <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputState1">Type</label><select class="form-select" id="inputState1">
                      <option value="">Choose...</option>
                      <option value="">WBNB</option>
                      <option value="">USDT</option>
                    </select>
                  </div>
                <div class="col-md-6 col-lg-12 col-xl-6"><label class="form-label" for="inputState1">Type</label><select class="form-select" id="inputState1">
                    <option value="">Choose...</option>
                    <option value="">BUSD</option>
                    <option value="">WBNB</option>
                  </select>
                </div>
              </div>
              <div class="row g-3 mb-3">
                <div class="col-md-6 col-lg-12 col-xl-6"><select class="form-select" id="inputState1">
                      <option value="">Choose...</option>
                      <option value="">USDC</option>
                      <option value="">BNBx</option>
                    </select>
                  </div>
                <div class="col-md-6 col-lg-12 col-xl-6"><select class="form-select" id="inputState1">
                    <option value="">Choose...</option>
                    <option value="">CAKE</option>
                    <option value="">TIME</option>
                  </select>
                </div>
              </div>
              <div class="row g-3">
              <div class="col-md-6 col-lg-12 col-xl-6"><select class="form-select" id="inputState1">
                    <option value="">Choose...</option>
                    <option value="">SHIB</option>
                    <option value="">BANANA</option>
                  </select>
                </div>
                <div class="col-md-6 col-lg-12 col-xl-6"><select class="form-select" id="inputState1">
                    <option value="">Choose...</option>
                    <option value="">WBNB</option>
                    <option value="">CAKE</option>
                  </select>
                </div>
                <div class="col-12"><button class="btn btn-link p-0" type="button"><svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <span class="fa-solid fa-plus me-2"></span> Font Awesome fontawesome.com -->Add pair</button></div>

                <div class="col-12 col-sm-auto col-xl-4">
                  <div class="d-flex"><button class="btn btn-phoenix-primary px-5 me-2">Save</button><button class="btn btn-primary me-1 mb-1" type="submit">Deploy</button></div>
                </div>
              </div>
            </div>
          </div>
        </form>

@endsection