@extends('dashboard.layouts.master')
@section('active-dashboard', 'active')
@section('title', 'الصفحة الرئيسية')
@push('css')
@endpush
@section('content')

    @include('dashboard.layouts.message')
    <!-- Content Header (Page header) -->

    <div class="row">
        <!-- Customer Ratings -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Customer Ratings</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="customerRatings" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customerRatings">
                            <a class="dropdown-item" href="javascript:void(0);">Featured Ratings</a>
                            <a class="dropdown-item" href="javascript:void(0);">Based on Task</a>
                            <a class="dropdown-item" href="javascript:void(0);">See All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <h1 class="display-3 mb-0">4.0</h1>
                        <div class="ratings">
                            <i class="bx bxs-star bx-sm text-warning"></i>
                            <i class="bx bxs-star bx-sm text-warning"></i>
                            <i class="bx bxs-star bx-sm text-warning"></i>
                            <i class="bx bxs-star bx-sm text-warning"></i>
                            <i class="bx bxs-star bx-sm text-lighter"></i>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="badge bg-label-primary me-3">+5.0</span>
                        <span>Points from last month</span>
                    </div>
                </div>
                <div id="customerRatingsChart" style="min-height: 215px;">
                    <div id="apexchartsiiikwjtfi" class="apexcharts-canvas apexchartsiiikwjtfi apexcharts-theme-light"
                        style="width: 445px; height: 200px;"><svg id="SvgjsSvg1675" width="445" height="200"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1677" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)">
                                <defs id="SvgjsDefs1676">
                                    <clipPath id="gridRectMaskiiikwjtfi">
                                        <rect id="SvgjsRect1682" width="443" height="164.73" x="-4" y="-2" rx="0"
                                            ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskiiikwjtfi"></clipPath>
                                    <clipPath id="nonForecastMaskiiikwjtfi"></clipPath>
                                    <clipPath id="gridRectMarkerMaskiiikwjtfi">
                                        <rect id="SvgjsRect1683" width="463" height="188.73" x="-14" y="-14"
                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <filter id="SvgjsFilter1723" filterUnits="userSpaceOnUse" width="200%" height="200%"
                                        x="-50%" y="-50%">
                                        <feFlood id="SvgjsFeFlood1724" flood-color="#696cff" flood-opacity="0.09"
                                            result="SvgjsFeFlood1724Out" in="SourceGraphic"></feFlood>
                                        <feComposite id="SvgjsFeComposite1725" in="SvgjsFeFlood1724Out" in2="SourceAlpha"
                                            operator="in" result="SvgjsFeComposite1725Out"></feComposite>
                                        <feOffset id="SvgjsFeOffset1726" dx="4" dy="13"
                                            result="SvgjsFeOffset1726Out" in="SvgjsFeComposite1725Out"></feOffset>
                                        <feGaussianBlur id="SvgjsFeGaussianBlur1727" stdDeviation="3 "
                                            result="SvgjsFeGaussianBlur1727Out" in="SvgjsFeOffset1726Out"></feGaussianBlur>
                                        <feMerge id="SvgjsFeMerge1728" result="SvgjsFeMerge1728Out" in="SourceGraphic">
                                            <feMergeNode id="SvgjsFeMergeNode1729" in="SvgjsFeGaussianBlur1727Out">
                                            </feMergeNode>
                                            <feMergeNode id="SvgjsFeMergeNode1730" in="[object Arguments]"></feMergeNode>
                                        </feMerge>
                                        <feBlend id="SvgjsFeBlend1731" in="SourceGraphic" in2="SvgjsFeMerge1728Out"
                                            mode="normal" result="SvgjsFeBlend1731Out"></feBlend>
                                    </filter>
                                </defs>
                                <line id="SvgjsLine1681" x1="0" y1="0" x2="0" y2="160.73"
                                    stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="160.73"
                                    fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                <g id="SvgjsG1732" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1733" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text id="SvgjsText1735" font-family="Helvetica, Arial, sans-serif" x="0"
                                            y="189.73" text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1736"></tspan>
                                            <title></title>
                                        </text><text id="SvgjsText1738" font-family="Helvetica, Arial, sans-serif"
                                            x="62.14285714285715" y="189.73" text-anchor="middle" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1739">Jan</tspan>
                                            <title>Jan</title>
                                        </text><text id="SvgjsText1741" font-family="Helvetica, Arial, sans-serif"
                                            x="124.28571428571429" y="189.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1742">Feb</tspan>
                                            <title>Feb</title>
                                        </text><text id="SvgjsText1744" font-family="Helvetica, Arial, sans-serif"
                                            x="186.42857142857142" y="189.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1745">Mar</tspan>
                                            <title>Mar</title>
                                        </text><text id="SvgjsText1747" font-family="Helvetica, Arial, sans-serif"
                                            x="248.57142857142858" y="189.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1748">Apr</tspan>
                                            <title>Apr</title>
                                        </text><text id="SvgjsText1750" font-family="Helvetica, Arial, sans-serif"
                                            x="310.7142857142858" y="189.73" text-anchor="middle" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1751">May</tspan>
                                            <title>May</title>
                                        </text><text id="SvgjsText1753" font-family="Helvetica, Arial, sans-serif"
                                            x="372.85714285714295" y="189.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1754">Jun</tspan>
                                            <title>Jun</title>
                                        </text><text id="SvgjsText1756" font-family="Helvetica, Arial, sans-serif"
                                            x="435.0000000000001" y="189.73" text-anchor="middle" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1757">Jul</tspan>
                                            <title>Jul</title>
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG1759" class="apexcharts-grid">
                                    <g id="SvgjsG1760" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1762" x1="0" y1="0" x2="435"
                                            y2="0" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1763" x1="0" y1="22.96142857142857" x2="435"
                                            y2="22.96142857142857" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1764" x1="0" y1="45.92285714285714" x2="435"
                                            y2="45.92285714285714" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1765" x1="0" y1="68.88428571428571" x2="435"
                                            y2="68.88428571428571" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1766" x1="0" y1="91.84571428571428" x2="435"
                                            y2="91.84571428571428" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1767" x1="0" y1="114.80714285714285" x2="435"
                                            y2="114.80714285714285" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1768" x1="0" y1="137.76857142857142" x2="435"
                                            y2="137.76857142857142" stroke="#eceef1" stroke-dasharray="0"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1769" x1="0" y1="160.73" x2="435"
                                            y2="160.73" stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1761" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1771" x1="0" y1="160.73" x2="435"
                                        y2="160.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                    <line id="SvgjsLine1770" x1="0" y1="1" x2="0"
                                        y2="160.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                </g>
                                <g id="SvgjsG1684" class="apexcharts-line-series apexcharts-plot-series">
                                    <g id="SvgjsG1685" class="apexcharts-series" seriesName="LastxMonth"
                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                        <path id="SvgjsPath1703"
                                            d="M 0 137.76857142857142C 21.75 137.76857142857142 40.392857142857146 59.69971428571428 62.142857142857146 59.69971428571428C 83.89285714285714 59.69971428571428 102.53571428571429 137.76857142857142 124.28571428571429 137.76857142857142C 146.0357142857143 137.76857142857142 164.67857142857144 96.43799999999999 186.42857142857144 96.43799999999999C 208.17857142857144 96.43799999999999 226.82142857142858 133.1762857142857 248.57142857142858 133.1762857142857C 270.32142857142856 133.1762857142857 288.9642857142857 119.39942857142856 310.7142857142857 119.39942857142856C 332.4642857142857 119.39942857142856 351.1071428571429 146.95314285714284 372.8571428571429 146.95314285714284C 394.6071428571429 146.95314285714284 413.25 140.06471428571427 435 140.06471428571427"
                                            fill="none" fill-opacity="1" stroke="rgba(236,238,241,0.85)"
                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                            stroke-dasharray="8" class="apexcharts-line" index="0"
                                            clip-path="url(#gridRectMaskiiikwjtfi)"
                                            pathTo="M 0 137.76857142857142C 21.75 137.76857142857142 40.392857142857146 59.69971428571428 62.142857142857146 59.69971428571428C 83.89285714285714 59.69971428571428 102.53571428571429 137.76857142857142 124.28571428571429 137.76857142857142C 146.0357142857143 137.76857142857142 164.67857142857144 96.43799999999999 186.42857142857144 96.43799999999999C 208.17857142857144 96.43799999999999 226.82142857142858 133.1762857142857 248.57142857142858 133.1762857142857C 270.32142857142856 133.1762857142857 288.9642857142857 119.39942857142856 310.7142857142857 119.39942857142856C 332.4642857142857 119.39942857142856 351.1071428571429 146.95314285714284 372.8571428571429 146.95314285714284C 394.6071428571429 146.95314285714284 413.25 140.06471428571427 435 140.06471428571427"
                                            pathFrom="M -1 183.69142857142856L -1 183.69142857142856L 62.142857142857146 183.69142857142856L 124.28571428571429 183.69142857142856L 186.42857142857144 183.69142857142856L 248.57142857142858 183.69142857142856L 310.7142857142857 183.69142857142856L 372.8571428571429 183.69142857142856L 435 183.69142857142856">
                                        </path>
                                        <g id="SvgjsG1686" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                            <g id="SvgjsG1688" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1689" r="6" cx="0" cy="137.76857142857142"
                                                    class="apexcharts-marker no-pointer-events w0a18awgk"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="0" j="0"
                                                    index="0" default-marker-size="6"></circle>
                                                <circle id="SvgjsCircle1690" r="6" cx="62.142857142857146"
                                                    cy="59.69971428571428"
                                                    class="apexcharts-marker no-pointer-events wmj8z7elv"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="1" j="1"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1691" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1692" r="6" cx="124.28571428571429"
                                                    cy="137.76857142857142"
                                                    class="apexcharts-marker no-pointer-events w9ca8amgi"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="2" j="2"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1693" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1694" r="6" cx="186.42857142857144"
                                                    cy="96.43799999999999"
                                                    class="apexcharts-marker no-pointer-events wfvvi02w1f"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="3" j="3"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1695" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1696" r="6" cx="248.57142857142858"
                                                    cy="133.1762857142857"
                                                    class="apexcharts-marker no-pointer-events w0ugs4wj6"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="4" j="4"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1697" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1698" r="6" cx="310.7142857142857"
                                                    cy="119.39942857142856"
                                                    class="apexcharts-marker no-pointer-events wofpsl491j"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="5" j="5"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1699" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1700" r="6" cx="372.8571428571429"
                                                    cy="146.95314285714284"
                                                    class="apexcharts-marker no-pointer-events wcw79fad4"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="6" j="6"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1701" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1702" r="6" cx="435" cy="140.06471428571427"
                                                    class="apexcharts-marker no-pointer-events w67m9zses"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="7" j="7"
                                                    index="0" default-marker-size="6"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1704" class="apexcharts-series" seriesName="ThisxMonth"
                                        data:longestSeries="true" rel="2" data:realIndex="1">
                                        <path id="SvgjsPath1722"
                                            d="M 0 137.76857142857142C 21.75 137.76857142857142 40.392857142857146 110.21485714285713 62.142857142857146 110.21485714285713C 83.89285714285714 110.21485714285713 102.53571428571429 133.1762857142857 124.28571428571429 133.1762857142857C 146.0357142857143 133.1762857142857 164.67857142857144 34.44214285714284 186.42857142857144 34.44214285714284C 208.17857142857144 34.44214285714284 226.82142857142858 91.84571428571428 248.57142857142858 91.84571428571428C 270.32142857142856 91.84571428571428 288.9642857142857 78.06885714285713 310.7142857142857 78.06885714285713C 332.4642857142857 78.06885714285713 351.1071428571429 105.62257142857142 372.8571428571429 105.62257142857142C 394.6071428571429 105.62257142857142 413.25 22.96142857142857 435 22.96142857142857"
                                            fill="none" fill-opacity="1" stroke="rgba(105,108,255,0.85)"
                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="4"
                                            stroke-dasharray="0" class="apexcharts-line" index="1"
                                            clip-path="url(#gridRectMaskiiikwjtfi)" filter="url(#SvgjsFilter1723)"
                                            pathTo="M 0 137.76857142857142C 21.75 137.76857142857142 40.392857142857146 110.21485714285713 62.142857142857146 110.21485714285713C 83.89285714285714 110.21485714285713 102.53571428571429 133.1762857142857 124.28571428571429 133.1762857142857C 146.0357142857143 133.1762857142857 164.67857142857144 34.44214285714284 186.42857142857144 34.44214285714284C 208.17857142857144 34.44214285714284 226.82142857142858 91.84571428571428 248.57142857142858 91.84571428571428C 270.32142857142856 91.84571428571428 288.9642857142857 78.06885714285713 310.7142857142857 78.06885714285713C 332.4642857142857 78.06885714285713 351.1071428571429 105.62257142857142 372.8571428571429 105.62257142857142C 394.6071428571429 105.62257142857142 413.25 22.96142857142857 435 22.96142857142857"
                                            pathFrom="M -1 183.69142857142856L -1 183.69142857142856L 62.142857142857146 183.69142857142856L 124.28571428571429 183.69142857142856L 186.42857142857144 183.69142857142856L 248.57142857142858 183.69142857142856L 310.7142857142857 183.69142857142856L 372.8571428571429 183.69142857142856L 435 183.69142857142856">
                                        </path>
                                        <g id="SvgjsG1705" class="apexcharts-series-markers-wrap" data:realIndex="1">
                                            <g id="SvgjsG1707" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1708" r="6" cx="0" cy="137.76857142857142"
                                                    class="apexcharts-marker no-pointer-events wvopsdqm6"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="0" j="0"
                                                    index="1" default-marker-size="6"></circle>
                                                <circle id="SvgjsCircle1709" r="6" cx="62.142857142857146"
                                                    cy="110.21485714285713"
                                                    class="apexcharts-marker no-pointer-events w8b3dd7n3"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="1" j="1"
                                                    index="1" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1710" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1711" r="6" cx="124.28571428571429"
                                                    cy="133.1762857142857"
                                                    class="apexcharts-marker no-pointer-events wt0fkecd3"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="2" j="2"
                                                    index="1" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1712" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1713" r="6" cx="186.42857142857144"
                                                    cy="34.44214285714284"
                                                    class="apexcharts-marker no-pointer-events w4ymnaa01" stroke="#000000"
                                                    fill="#ffffff" fill-opacity="1" stroke-width="5"
                                                    stroke-opacity="0.9" rel="3" j="3" index="1"
                                                    default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1714" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1715" r="6" cx="248.57142857142858"
                                                    cy="91.84571428571428"
                                                    class="apexcharts-marker no-pointer-events w9x535a7q"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="4" j="4"
                                                    index="1" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1716" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1717" r="6" cx="310.7142857142857"
                                                    cy="78.06885714285713"
                                                    class="apexcharts-marker no-pointer-events wcxz0e0n"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="5" j="5"
                                                    index="1" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1718" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1719" r="6" cx="372.8571428571429"
                                                    cy="105.62257142857142"
                                                    class="apexcharts-marker no-pointer-events womn2eex3j"
                                                    stroke="transparent" fill="transparent" fill-opacity="1"
                                                    stroke-width="5" stroke-opacity="0.9" rel="6" j="6"
                                                    index="1" default-marker-size="6"></circle>
                                            </g>
                                            <g id="SvgjsG1720" class="apexcharts-series-markers"
                                                clip-path="url(#gridRectMarkerMaskiiikwjtfi)">
                                                <circle id="SvgjsCircle1721" r="6" cx="435" cy="22.96142857142857"
                                                    class="apexcharts-marker no-pointer-events wshgio5ar" stroke="#696cff"
                                                    fill="#ffffff" fill-opacity="1" stroke-width="5"
                                                    stroke-opacity="0.9" rel="7" j="7" index="1"
                                                    default-marker-size="6"></circle>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1687" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1706" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine1772" x1="0" y1="0" x2="435" y2="0"
                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1773" x1="0" y1="0" x2="435" y2="0"
                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1774" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1775" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1776" class="apexcharts-point-annotations"></g>
                            </g>
                            <rect id="SvgjsRect1680" width="0" height="0" x="0" y="0" rx="0"
                                ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                fill="#fefefe"></rect>
                            <g id="SvgjsG1758" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)">
                            </g>
                            <g id="SvgjsG1678" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 100px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(236, 238, 241);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(105, 108, 255);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                            <div class="apexcharts-xaxistooltip-text"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 446px; height: 388px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>
        <!--/ Customer Ratings -->
        <!-- Overview & Sales Activity -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">Overview &amp; Sales Activity</h5>
                    <small class="card-subtitle">Check out each column for more details</small>
                </div>
                <div id="salesActivityChart" style="min-height: 290px;">
                    <div id="apexchartseizqfjpb" class="apexcharts-canvas apexchartseizqfjpb apexcharts-theme-light"
                        style="width: 445px; height: 275px;"><svg id="SvgjsSvg1777" width="445" height="275"
                            xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                            transform="translate(0, 0)" style="background: transparent;">
                            <g id="SvgjsG1779" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 20)">
                                <defs id="SvgjsDefs1778">
                                    <linearGradient id="SvgjsLinearGradient1782" x1="0" y1="0"
                                        x2="0" y2="1">
                                        <stop id="SvgjsStop1783" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)"
                                            offset="0"></stop>
                                        <stop id="SvgjsStop1784" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                        <stop id="SvgjsStop1785" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)"
                                            offset="1"></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskeizqfjpb">
                                        <rect id="SvgjsRect1787" width="455" height="233.73" x="-5" y="-3"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskeizqfjpb"></clipPath>
                                    <clipPath id="nonForecastMaskeizqfjpb"></clipPath>
                                    <clipPath id="gridRectMarkerMaskeizqfjpb">
                                        <rect id="SvgjsRect1788" width="449" height="231.73" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <rect id="SvgjsRect1786" width="25.428571428571427" height="227.73" x="0" y="0"
                                    rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3"
                                    fill="url(#SvgjsLinearGradient1782)" class="apexcharts-xcrosshairs" y2="227.73"
                                    filter="none" fill-opacity="0.9"></rect>
                                <g id="SvgjsG1808" class="apexcharts-xaxis" transform="translate(0, 0)">
                                    <g id="SvgjsG1809" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                        <text id="SvgjsText1811" font-family="Helvetica, Arial, sans-serif"
                                            x="31.785714285714285" y="256.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1812">Mon</tspan>
                                            <title>Mon</title>
                                        </text><text id="SvgjsText1814" font-family="Helvetica, Arial, sans-serif"
                                            x="95.35714285714286" y="256.73" text-anchor="middle" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1815">Tue</tspan>
                                            <title>Tue</title>
                                        </text><text id="SvgjsText1817" font-family="Helvetica, Arial, sans-serif"
                                            x="158.92857142857144" y="256.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1818">Wed</tspan>
                                            <title>Wed</title>
                                        </text><text id="SvgjsText1820" font-family="Helvetica, Arial, sans-serif"
                                            x="222.5" y="256.73" text-anchor="middle" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1821">Thu</tspan>
                                            <title>Thu</title>
                                        </text><text id="SvgjsText1823" font-family="Helvetica, Arial, sans-serif"
                                            x="286.07142857142856" y="256.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1824">Fri</tspan>
                                            <title>Fri</title>
                                        </text><text id="SvgjsText1826" font-family="Helvetica, Arial, sans-serif"
                                            x="349.6428571428571" y="256.73" text-anchor="middle" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1827">Sat</tspan>
                                            <title>Sat</title>
                                        </text><text id="SvgjsText1829" font-family="Helvetica, Arial, sans-serif"
                                            x="413.21428571428567" y="256.73" text-anchor="middle"
                                            dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-xaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan1830">Sun</tspan>
                                            <title>Sun</title>
                                        </text>
                                    </g>
                                </g>
                                <g id="SvgjsG1832" class="apexcharts-grid">
                                    <g id="SvgjsG1833" class="apexcharts-gridlines-horizontal" style="display: none;">
                                        <line id="SvgjsLine1835" x1="0" y1="0" x2="445"
                                            y2="0" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1836" x1="0" y1="56.9325" x2="445"
                                            y2="56.9325" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1837" x1="0" y1="113.865" x2="445"
                                            y2="113.865" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1838" x1="0" y1="170.79749999999999" x2="445"
                                            y2="170.79749999999999" stroke="#e0e0e0" stroke-dasharray="7"
                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                        <line id="SvgjsLine1839" x1="0" y1="227.73" x2="445"
                                            y2="227.73" stroke="#e0e0e0" stroke-dasharray="7" stroke-linecap="butt"
                                            class="apexcharts-gridline"></line>
                                    </g>
                                    <g id="SvgjsG1834" class="apexcharts-gridlines-vertical" style="display: none;"></g>
                                    <line id="SvgjsLine1841" x1="0" y1="227.73" x2="445"
                                        y2="227.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                    <line id="SvgjsLine1840" x1="0" y1="1" x2="0"
                                        y2="227.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                    </line>
                                </g>
                                <g id="SvgjsG1789" class="apexcharts-bar-series apexcharts-plot-series">
                                    <g id="SvgjsG1790" class="apexcharts-series" seriesName="PRODUCTxA" rel="1"
                                        data:realIndex="0">
                                        <path id="SvgjsPath1792"
                                            d="M 19.07142857142857 217.73L 19.07142857142857 95.39875Q 19.07142857142857 85.39875 29.07142857142857 85.39875L 28.5 85.39875Q 38.5 85.39875 38.5 95.39875L 38.5 95.39875L 38.5 217.73Q 38.5 227.73 28.5 227.73L 29.07142857142857 227.73Q 19.07142857142857 227.73 19.07142857142857 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 19.07142857142857 217.73L 19.07142857142857 95.39875Q 19.07142857142857 85.39875 29.07142857142857 85.39875L 28.5 85.39875Q 38.5 85.39875 38.5 95.39875L 38.5 95.39875L 38.5 217.73Q 38.5 227.73 28.5 227.73L 29.07142857142857 227.73Q 19.07142857142857 227.73 19.07142857142857 217.73z"
                                            pathFrom="M 19.07142857142857 217.73L 19.07142857142857 217.73L 38.5 217.73L 38.5 217.73L 38.5 217.73L 38.5 217.73L 38.5 217.73L 19.07142857142857 217.73"
                                            cy="85.39875" cx="79.64285714285714" j="0" val="75"
                                            barHeight="142.33124999999998" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1793"
                                            d="M 82.64285714285714 217.73L 82.64285714285714 142.8425Q 82.64285714285714 132.8425 92.64285714285714 132.8425L 92.07142857142857 132.8425Q 102.07142857142857 132.8425 102.07142857142857 142.8425L 102.07142857142857 142.8425L 102.07142857142857 217.73Q 102.07142857142857 227.73 92.07142857142857 227.73L 92.64285714285714 227.73Q 82.64285714285714 227.73 82.64285714285714 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 82.64285714285714 217.73L 82.64285714285714 142.8425Q 82.64285714285714 132.8425 92.64285714285714 132.8425L 92.07142857142857 132.8425Q 102.07142857142857 132.8425 102.07142857142857 142.8425L 102.07142857142857 142.8425L 102.07142857142857 217.73Q 102.07142857142857 227.73 92.07142857142857 227.73L 92.64285714285714 227.73Q 82.64285714285714 227.73 82.64285714285714 217.73z"
                                            pathFrom="M 82.64285714285714 217.73L 82.64285714285714 217.73L 102.07142857142857 217.73L 102.07142857142857 217.73L 102.07142857142857 217.73L 102.07142857142857 217.73L 102.07142857142857 217.73L 82.64285714285714 217.73"
                                            cy="132.8425" cx="143.21428571428572" j="1" val="50"
                                            barHeight="94.88749999999999" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1794"
                                            d="M 146.21428571428572 217.73L 146.21428571428572 133.35375Q 146.21428571428572 123.35374999999999 156.21428571428572 123.35374999999999L 155.64285714285714 123.35374999999999Q 165.64285714285714 123.35374999999999 165.64285714285714 133.35375L 165.64285714285714 133.35375L 165.64285714285714 217.73Q 165.64285714285714 227.73 155.64285714285714 227.73L 156.21428571428572 227.73Q 146.21428571428572 227.73 146.21428571428572 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 146.21428571428572 217.73L 146.21428571428572 133.35375Q 146.21428571428572 123.35374999999999 156.21428571428572 123.35374999999999L 155.64285714285714 123.35374999999999Q 165.64285714285714 123.35374999999999 165.64285714285714 133.35375L 165.64285714285714 133.35375L 165.64285714285714 217.73Q 165.64285714285714 227.73 155.64285714285714 227.73L 156.21428571428572 227.73Q 146.21428571428572 227.73 146.21428571428572 217.73z"
                                            pathFrom="M 146.21428571428572 217.73L 146.21428571428572 217.73L 165.64285714285714 217.73L 165.64285714285714 217.73L 165.64285714285714 217.73L 165.64285714285714 217.73L 165.64285714285714 217.73L 146.21428571428572 217.73"
                                            cy="123.35375" cx="206.78571428571428" j="2" val="55"
                                            barHeight="104.37624999999998" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1795"
                                            d="M 209.78571428571428 217.73L 209.78571428571428 123.86500000000001Q 209.78571428571428 113.86500000000001 219.78571428571428 113.86500000000001L 219.2142857142857 113.86500000000001Q 229.2142857142857 113.86500000000001 229.2142857142857 123.86500000000001L 229.2142857142857 123.86500000000001L 229.2142857142857 217.73Q 229.2142857142857 227.73 219.2142857142857 227.73L 219.78571428571428 227.73Q 209.78571428571428 227.73 209.78571428571428 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 209.78571428571428 217.73L 209.78571428571428 123.86500000000001Q 209.78571428571428 113.86500000000001 219.78571428571428 113.86500000000001L 219.2142857142857 113.86500000000001Q 229.2142857142857 113.86500000000001 229.2142857142857 123.86500000000001L 229.2142857142857 123.86500000000001L 229.2142857142857 217.73Q 229.2142857142857 227.73 219.2142857142857 227.73L 219.78571428571428 227.73Q 209.78571428571428 227.73 209.78571428571428 217.73z"
                                            pathFrom="M 209.78571428571428 217.73L 209.78571428571428 217.73L 229.2142857142857 217.73L 229.2142857142857 217.73L 229.2142857142857 217.73L 229.2142857142857 217.73L 229.2142857142857 217.73L 209.78571428571428 217.73"
                                            cy="113.86500000000001" cx="270.35714285714283" j="3" val="60"
                                            barHeight="113.86499999999998" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1796"
                                            d="M 273.35714285714283 217.73L 273.35714285714283 146.638Q 273.35714285714283 136.638 283.35714285714283 136.638L 282.7857142857143 136.638Q 292.7857142857143 136.638 292.7857142857143 146.638L 292.7857142857143 146.638L 292.7857142857143 217.73Q 292.7857142857143 227.73 282.7857142857143 227.73L 283.35714285714283 227.73Q 273.35714285714283 227.73 273.35714285714283 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 273.35714285714283 217.73L 273.35714285714283 146.638Q 273.35714285714283 136.638 283.35714285714283 136.638L 282.7857142857143 136.638Q 292.7857142857143 136.638 292.7857142857143 146.638L 292.7857142857143 146.638L 292.7857142857143 217.73Q 292.7857142857143 227.73 282.7857142857143 227.73L 283.35714285714283 227.73Q 273.35714285714283 227.73 273.35714285714283 217.73z"
                                            pathFrom="M 273.35714285714283 217.73L 273.35714285714283 217.73L 292.7857142857143 217.73L 292.7857142857143 217.73L 292.7857142857143 217.73L 292.7857142857143 217.73L 292.7857142857143 217.73L 273.35714285714283 217.73"
                                            cy="136.638" cx="333.9285714285714" j="4" val="48"
                                            barHeight="91.09199999999998" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1797"
                                            d="M 336.9285714285714 217.73L 336.9285714285714 82.11450000000002Q 336.9285714285714 72.11450000000002 346.9285714285714 72.11450000000002L 346.35714285714283 72.11450000000002Q 356.35714285714283 72.11450000000002 356.35714285714283 82.11450000000002L 356.35714285714283 82.11450000000002L 356.35714285714283 217.73Q 356.35714285714283 227.73 346.35714285714283 227.73L 346.9285714285714 227.73Q 336.9285714285714 227.73 336.9285714285714 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 336.9285714285714 217.73L 336.9285714285714 82.11450000000002Q 336.9285714285714 72.11450000000002 346.9285714285714 72.11450000000002L 346.35714285714283 72.11450000000002Q 356.35714285714283 72.11450000000002 356.35714285714283 82.11450000000002L 356.35714285714283 82.11450000000002L 356.35714285714283 217.73Q 356.35714285714283 227.73 346.35714285714283 227.73L 346.9285714285714 227.73Q 336.9285714285714 227.73 336.9285714285714 217.73z"
                                            pathFrom="M 336.9285714285714 217.73L 336.9285714285714 217.73L 356.35714285714283 217.73L 356.35714285714283 217.73L 356.35714285714283 217.73L 356.35714285714283 217.73L 356.35714285714283 217.73L 336.9285714285714 217.73"
                                            cy="72.11450000000002" cx="397.49999999999994" j="5" val="82"
                                            barHeight="155.61549999999997" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1798"
                                            d="M 400.49999999999994 217.73L 400.49999999999994 125.76275000000001Q 400.49999999999994 115.76275000000001 410.49999999999994 115.76275000000001L 409.9285714285714 115.76275000000001Q 419.9285714285714 115.76275000000001 419.9285714285714 125.76275000000001L 419.9285714285714 125.76275000000001L 419.9285714285714 217.73Q 419.9285714285714 227.73 409.9285714285714 227.73L 410.49999999999994 227.73Q 400.49999999999994 227.73 400.49999999999994 217.73z"
                                            fill="rgba(255,62,29,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 400.49999999999994 217.73L 400.49999999999994 125.76275000000001Q 400.49999999999994 115.76275000000001 410.49999999999994 115.76275000000001L 409.9285714285714 115.76275000000001Q 419.9285714285714 115.76275000000001 419.9285714285714 125.76275000000001L 419.9285714285714 125.76275000000001L 419.9285714285714 217.73Q 419.9285714285714 227.73 409.9285714285714 227.73L 410.49999999999994 227.73Q 400.49999999999994 227.73 400.49999999999994 217.73z"
                                            pathFrom="M 400.49999999999994 217.73L 400.49999999999994 217.73L 419.9285714285714 217.73L 419.9285714285714 217.73L 419.9285714285714 217.73L 419.9285714285714 217.73L 419.9285714285714 217.73L 400.49999999999994 217.73"
                                            cy="115.76275000000001" cx="461.0714285714285" j="6" val="59"
                                            barHeight="111.96724999999998" barWidth="25.428571428571427"></path>
                                    </g>
                                    <g id="SvgjsG1799" class="apexcharts-series" seriesName="PRODUCTxB"
                                        rel="2" data:realIndex="1">
                                        <path id="SvgjsPath1801"
                                            d="M 19.07142857142857 75.39875L 19.07142857142857 47.95500000000001Q 19.07142857142857 37.95500000000001 29.07142857142857 37.95500000000001L 28.5 37.95500000000001Q 38.5 37.95500000000001 38.5 47.95500000000001L 38.5 47.95500000000001L 38.5 75.39875Q 38.5 85.39875 28.5 85.39875L 29.07142857142857 85.39875Q 19.07142857142857 85.39875 19.07142857142857 75.39875z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 19.07142857142857 75.39875L 19.07142857142857 47.95500000000001Q 19.07142857142857 37.95500000000001 29.07142857142857 37.95500000000001L 28.5 37.95500000000001Q 38.5 37.95500000000001 38.5 47.95500000000001L 38.5 47.95500000000001L 38.5 75.39875Q 38.5 85.39875 28.5 85.39875L 29.07142857142857 85.39875Q 19.07142857142857 85.39875 19.07142857142857 75.39875z"
                                            pathFrom="M 19.07142857142857 75.39875L 19.07142857142857 75.39875L 38.5 75.39875L 38.5 75.39875L 38.5 75.39875L 38.5 75.39875L 38.5 75.39875L 19.07142857142857 75.39875"
                                            cy="37.95500000000001" cx="79.64285714285714" j="0" val="25"
                                            barHeight="47.443749999999994" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1802"
                                            d="M 82.64285714285714 122.8425L 82.64285714285714 87.80775Q 82.64285714285714 77.80775 92.64285714285714 77.80775L 92.07142857142857 77.80775Q 102.07142857142857 77.80775 102.07142857142857 87.80775L 102.07142857142857 87.80775L 102.07142857142857 122.8425Q 102.07142857142857 132.8425 92.07142857142857 132.8425L 92.64285714285714 132.8425Q 82.64285714285714 132.8425 82.64285714285714 122.8425z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 82.64285714285714 122.8425L 82.64285714285714 87.80775Q 82.64285714285714 77.80775 92.64285714285714 77.80775L 92.07142857142857 77.80775Q 102.07142857142857 77.80775 102.07142857142857 87.80775L 102.07142857142857 87.80775L 102.07142857142857 122.8425Q 102.07142857142857 132.8425 92.07142857142857 132.8425L 92.64285714285714 132.8425Q 82.64285714285714 132.8425 82.64285714285714 122.8425z"
                                            pathFrom="M 82.64285714285714 122.8425L 82.64285714285714 122.8425L 102.07142857142857 122.8425L 102.07142857142857 122.8425L 102.07142857142857 122.8425L 102.07142857142857 122.8425L 102.07142857142857 122.8425L 82.64285714285714 122.8425"
                                            cy="77.80775" cx="143.21428571428572" j="1" val="29"
                                            barHeight="55.034749999999995" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1803"
                                            d="M 146.21428571428572 113.35374999999999L 146.21428571428572 72.62575Q 146.21428571428572 62.62575 156.21428571428572 62.62575L 155.64285714285714 62.62575Q 165.64285714285714 62.62575 165.64285714285714 72.62575L 165.64285714285714 72.62575L 165.64285714285714 113.35374999999999Q 165.64285714285714 123.35374999999999 155.64285714285714 123.35374999999999L 156.21428571428572 123.35374999999999Q 146.21428571428572 123.35374999999999 146.21428571428572 113.35374999999999z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 146.21428571428572 113.35374999999999L 146.21428571428572 72.62575Q 146.21428571428572 62.62575 156.21428571428572 62.62575L 155.64285714285714 62.62575Q 165.64285714285714 62.62575 165.64285714285714 72.62575L 165.64285714285714 72.62575L 165.64285714285714 113.35374999999999Q 165.64285714285714 123.35374999999999 155.64285714285714 123.35374999999999L 156.21428571428572 123.35374999999999Q 146.21428571428572 123.35374999999999 146.21428571428572 113.35374999999999z"
                                            pathFrom="M 146.21428571428572 113.35374999999999L 146.21428571428572 113.35374999999999L 165.64285714285714 113.35374999999999L 165.64285714285714 113.35374999999999L 165.64285714285714 113.35374999999999L 165.64285714285714 113.35374999999999L 165.64285714285714 113.35374999999999L 146.21428571428572 113.35374999999999"
                                            cy="62.62575" cx="206.78571428571428" j="2" val="32"
                                            barHeight="60.727999999999994" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1804"
                                            d="M 209.78571428571428 103.86500000000001L 209.78571428571428 57.44375000000002Q 209.78571428571428 47.44375000000002 219.78571428571428 47.44375000000002L 219.2142857142857 47.44375000000002Q 229.2142857142857 47.44375000000002 229.2142857142857 57.44375000000002L 229.2142857142857 57.44375000000002L 229.2142857142857 103.86500000000001Q 229.2142857142857 113.86500000000001 219.2142857142857 113.86500000000001L 219.78571428571428 113.86500000000001Q 209.78571428571428 113.86500000000001 209.78571428571428 103.86500000000001z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 209.78571428571428 103.86500000000001L 209.78571428571428 57.44375000000002Q 209.78571428571428 47.44375000000002 219.78571428571428 47.44375000000002L 219.2142857142857 47.44375000000002Q 229.2142857142857 47.44375000000002 229.2142857142857 57.44375000000002L 229.2142857142857 57.44375000000002L 229.2142857142857 103.86500000000001Q 229.2142857142857 113.86500000000001 219.2142857142857 113.86500000000001L 219.78571428571428 113.86500000000001Q 209.78571428571428 113.86500000000001 209.78571428571428 103.86500000000001z"
                                            pathFrom="M 209.78571428571428 103.86500000000001L 209.78571428571428 103.86500000000001L 229.2142857142857 103.86500000000001L 229.2142857142857 103.86500000000001L 229.2142857142857 103.86500000000001L 229.2142857142857 103.86500000000001L 229.2142857142857 103.86500000000001L 209.78571428571428 103.86500000000001"
                                            cy="47.44375000000002" cx="270.35714285714283" j="3" val="35"
                                            barHeight="66.42124999999999" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1805"
                                            d="M 273.35714285714283 126.638L 273.35714285714283 82.11450000000002Q 273.35714285714283 72.11450000000002 283.35714285714283 72.11450000000002L 282.7857142857143 72.11450000000002Q 292.7857142857143 72.11450000000002 292.7857142857143 82.11450000000002L 292.7857142857143 82.11450000000002L 292.7857142857143 126.638Q 292.7857142857143 136.638 282.7857142857143 136.638L 283.35714285714283 136.638Q 273.35714285714283 136.638 273.35714285714283 126.638z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 273.35714285714283 126.638L 273.35714285714283 82.11450000000002Q 273.35714285714283 72.11450000000002 283.35714285714283 72.11450000000002L 282.7857142857143 72.11450000000002Q 292.7857142857143 72.11450000000002 292.7857142857143 82.11450000000002L 292.7857142857143 82.11450000000002L 292.7857142857143 126.638Q 292.7857142857143 136.638 282.7857142857143 136.638L 283.35714285714283 136.638Q 273.35714285714283 136.638 273.35714285714283 126.638z"
                                            pathFrom="M 273.35714285714283 126.638L 273.35714285714283 126.638L 292.7857142857143 126.638L 292.7857142857143 126.638L 292.7857142857143 126.638L 292.7857142857143 126.638L 292.7857142857143 126.638L 273.35714285714283 126.638"
                                            cy="72.11450000000002" cx="333.9285714285714" j="4" val="34"
                                            barHeight="64.52349999999998" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1806"
                                            d="M 336.9285714285714 62.11450000000002L 336.9285714285714 47.95500000000003Q 336.9285714285714 37.95500000000003 346.9285714285714 37.95500000000003L 346.35714285714283 37.95500000000003Q 356.35714285714283 37.95500000000003 356.35714285714283 47.95500000000003L 356.35714285714283 47.95500000000003L 356.35714285714283 62.11450000000002Q 356.35714285714283 72.11450000000002 346.35714285714283 72.11450000000002L 346.9285714285714 72.11450000000002Q 336.9285714285714 72.11450000000002 336.9285714285714 62.11450000000002z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 336.9285714285714 62.11450000000002L 336.9285714285714 47.95500000000003Q 336.9285714285714 37.95500000000003 346.9285714285714 37.95500000000003L 346.35714285714283 37.95500000000003Q 356.35714285714283 37.95500000000003 356.35714285714283 47.95500000000003L 356.35714285714283 47.95500000000003L 356.35714285714283 62.11450000000002Q 356.35714285714283 72.11450000000002 346.35714285714283 72.11450000000002L 346.9285714285714 72.11450000000002Q 336.9285714285714 72.11450000000002 336.9285714285714 62.11450000000002z"
                                            pathFrom="M 336.9285714285714 62.11450000000002L 336.9285714285714 62.11450000000002L 356.35714285714283 62.11450000000002L 356.35714285714283 62.11450000000002L 356.35714285714283 62.11450000000002L 356.35714285714283 62.11450000000002L 356.35714285714283 62.11450000000002L 336.9285714285714 62.11450000000002"
                                            cy="37.95500000000003" cx="397.49999999999994" j="5" val="18"
                                            barHeight="34.159499999999994" barWidth="25.428571428571427"></path>
                                        <path id="SvgjsPath1807"
                                            d="M 400.49999999999994 105.76275000000001L 400.49999999999994 68.83025000000002Q 400.49999999999994 58.83025000000002 410.49999999999994 58.83025000000002L 409.9285714285714 58.83025000000002Q 419.9285714285714 58.83025000000002 419.9285714285714 68.83025000000002L 419.9285714285714 68.83025000000002L 419.9285714285714 105.76275000000001Q 419.9285714285714 115.76275000000001 409.9285714285714 115.76275000000001L 410.49999999999994 115.76275000000001Q 400.49999999999994 115.76275000000001 400.49999999999994 105.76275000000001z"
                                            fill="rgba(67,89,113,1)" fill-opacity="1" stroke="#ffffff"
                                            stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                            stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                            clip-path="url(#gridRectMaskeizqfjpb)"
                                            pathTo="M 400.49999999999994 105.76275000000001L 400.49999999999994 68.83025000000002Q 400.49999999999994 58.83025000000002 410.49999999999994 58.83025000000002L 409.9285714285714 58.83025000000002Q 419.9285714285714 58.83025000000002 419.9285714285714 68.83025000000002L 419.9285714285714 68.83025000000002L 419.9285714285714 105.76275000000001Q 419.9285714285714 115.76275000000001 409.9285714285714 115.76275000000001L 410.49999999999994 115.76275000000001Q 400.49999999999994 115.76275000000001 400.49999999999994 105.76275000000001z"
                                            pathFrom="M 400.49999999999994 105.76275000000001L 400.49999999999994 105.76275000000001L 419.9285714285714 105.76275000000001L 419.9285714285714 105.76275000000001L 419.9285714285714 105.76275000000001L 419.9285714285714 105.76275000000001L 419.9285714285714 105.76275000000001L 400.49999999999994 105.76275000000001"
                                            cy="58.83025000000002" cx="461.0714285714285" j="6" val="30"
                                            barHeight="56.93249999999999" barWidth="25.428571428571427"></path>
                                    </g>
                                    <g id="SvgjsG1791" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    <g id="SvgjsG1800" class="apexcharts-datalabels" data:realIndex="1"></g>
                                </g>
                                <line id="SvgjsLine1842" x1="0" y1="0" x2="445"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine1843" x1="0" y1="0" x2="445"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                                <g id="SvgjsG1844" class="apexcharts-yaxis-annotations"></g>
                                <g id="SvgjsG1845" class="apexcharts-xaxis-annotations"></g>
                                <g id="SvgjsG1846" class="apexcharts-point-annotations"></g>
                            </g>
                            <g id="SvgjsG1831" class="apexcharts-yaxis" rel="0"
                                transform="translate(-18, 0)"></g>
                            <g id="SvgjsG1780" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend" style="max-height: 137.5px;"></div>
                        <div class="apexcharts-tooltip apexcharts-theme-light">
                            <div class="apexcharts-tooltip-title"
                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(255, 62, 29);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(67, 89, 113);"></span>
                                <div class="apexcharts-tooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                    <div class="apexcharts-tooltip-y-group"><span
                                            class="apexcharts-tooltip-text-y-label"></span><span
                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                    <div class="apexcharts-tooltip-goals-group"><span
                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                    <div class="apexcharts-tooltip-z-group"><span
                                            class="apexcharts-tooltip-text-z-label"></span><span
                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                            <div class="apexcharts-yaxistooltip-text"></div>
                        </div>
                    </div>
                </div>
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 446px; height: 388px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>
        <!--/ Overview & Sales Activity -->
        <div class="col-12 col-md-12 col-lg-4">
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <span class="d-block fw-semibold mb-1">Sessions</span>
                            <h3 class="card-title mb-2">2,845</h3>
                        </div>
                        <div id="sessionsChart" class="mb-3" style="min-height: 90px;">
                            <div id="apexchartse20yksckf"
                                class="apexcharts-canvas apexchartse20yksckf apexcharts-theme-light"
                                style="width: 210px; height: 90px;"><svg id="SvgjsSvg1847" width="210"
                                    height="90" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1849" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)">
                                        <defs id="SvgjsDefs1848">
                                            <clipPath id="gridRectMaske20yksckf">
                                                <rect id="SvgjsRect1854" width="208" height="92" x="-3" y="-1"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaske20yksckf"></clipPath>
                                            <clipPath id="nonForecastMaske20yksckf"></clipPath>
                                            <clipPath id="gridRectMarkerMaske20yksckf">
                                                <rect id="SvgjsRect1855" width="230" height="118" x="-14" y="-14"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1877" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1878" stop-opacity="0.8"
                                                    stop-color="rgba(255,171,0,0.8)" offset="0"></stop>
                                                <stop id="SvgjsStop1879" stop-opacity="0.25"
                                                    stop-color="rgba(255,238,204,0.25)" offset="0.95"></stop>
                                                <stop id="SvgjsStop1880" stop-opacity="0.25"
                                                    stop-color="rgba(255,238,204,0.25)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1853" x1="0" y1="0" x2="0"
                                            y2="90" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                            width="1" height="90" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1883" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1884" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1895" class="apexcharts-grid">
                                            <g id="SvgjsG1896" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1898" x1="0" y1="0"
                                                    x2="202" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1899" x1="0" y1="18"
                                                    x2="202" y2="18" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1900" x1="0" y1="36"
                                                    x2="202" y2="36" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1901" x1="0" y1="54"
                                                    x2="202" y2="54" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1902" x1="0" y1="72"
                                                    x2="202" y2="72" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1903" x1="0" y1="90"
                                                    x2="202" y2="90" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1897" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1905" x1="0" y1="90" x2="202"
                                                y2="90" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1904" x1="0" y1="1" x2="0"
                                                y2="90" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1856" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1857" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1881"
                                                    d="M 0 90L 0 30L 25.25 30L 50.5 54L 75.75 54L 101 78L 126.25 78L 151.5 42L 176.75 42L 202 12L 202 90M 202 12z"
                                                    fill="url(#SvgjsLinearGradient1877)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaske20yksckf)"
                                                    pathTo="M 0 90L 0 30L 25.25 30L 50.5 54L 75.75 54L 101 78L 126.25 78L 151.5 42L 176.75 42L 202 12L 202 90M 202 12z"
                                                    pathFrom="M -1 198L -1 198L 25.25 198L 50.5 198L 75.75 198L 101 198L 126.25 198L 151.5 198L 176.75 198L 202 198">
                                                </path>
                                                <path id="SvgjsPath1882"
                                                    d="M 0 30L 25.25 30L 50.5 54L 75.75 54L 101 78L 126.25 78L 151.5 42L 176.75 42L 202 12"
                                                    fill="none" fill-opacity="1" stroke="#ffab00"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaske20yksckf)"
                                                    pathTo="M 0 30L 25.25 30L 50.5 54L 75.75 54L 101 78L 126.25 78L 151.5 42L 176.75 42L 202 12"
                                                    pathFrom="M -1 198L -1 198L 25.25 198L 50.5 198L 75.75 198L 101 198L 126.25 198L 151.5 198L 176.75 198L 202 198">
                                                </path>
                                                <g id="SvgjsG1858" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0">
                                                    <g id="SvgjsG1860" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1861" r="6" cx="0"
                                                            cy="30"
                                                            class="apexcharts-marker no-pointer-events wdur4krup"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="0" j="0"
                                                            index="0" default-marker-size="6"></circle>
                                                        <circle id="SvgjsCircle1862" r="6" cx="25.25"
                                                            cy="30"
                                                            class="apexcharts-marker no-pointer-events ws9lms8qii"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="1" j="1"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1863" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1864" r="6" cx="50.5"
                                                            cy="54"
                                                            class="apexcharts-marker no-pointer-events wpftdl02k"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="2" j="2"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1865" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1866" r="6" cx="75.75"
                                                            cy="54"
                                                            class="apexcharts-marker no-pointer-events wp2fz20jl"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="3" j="3"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1867" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1868" r="6" cx="101"
                                                            cy="78"
                                                            class="apexcharts-marker no-pointer-events wwl8yadcb"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="4" j="4"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1869" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1870" r="6" cx="126.25"
                                                            cy="78"
                                                            class="apexcharts-marker no-pointer-events ws6hizmze"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="5" j="5"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1871" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1872" r="6" cx="151.5"
                                                            cy="42"
                                                            class="apexcharts-marker no-pointer-events we4cxhkqv"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="6" j="6"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1873" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1874" r="6" cx="176.75"
                                                            cy="42"
                                                            class="apexcharts-marker no-pointer-events w7vl1qg66"
                                                            stroke="transparent" fill="transparent" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="7" j="7"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                    <g id="SvgjsG1875" class="apexcharts-series-markers"
                                                        clip-path="url(#gridRectMarkerMaske20yksckf)">
                                                        <circle id="SvgjsCircle1876" r="6" cx="202"
                                                            cy="12"
                                                            class="apexcharts-marker no-pointer-events wb3252wf8"
                                                            stroke="#ffab00" fill="#ffffff" fill-opacity="1"
                                                            stroke-width="4" stroke-opacity="0.9" rel="8" j="8"
                                                            index="0" default-marker-size="6"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1859" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1906" x1="0" y1="0" x2="202"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1907" x1="0" y1="0" x2="202"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1908" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1909" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1910" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <rect id="SvgjsRect1852" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1894" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-18, 0)"></g>
                                    <g id="SvgjsG1850" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 45px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 171, 0);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 211px; height: 195px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between mb-4">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('dashboard')}}/assets/img/icons/unicons/cube-secondary.png" alt="cube"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt2" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt2">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Order</span>
                            <h4 class="card-title mb-2">$1,286</h4>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -13.24%</small>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="position: relative;">
                                <div class="d-flex flex-column">
                                    <div class="card-title mb-auto">
                                        <h5 class="mb-0">Generated Leads</h5>
                                        <small>Monthly Report</small>
                                    </div>
                                    <div class="chart-statistics">
                                        <h3 class="card-title mb-1">4,230</h3>
                                        <small class="text-success text-nowrap fw-semibold"><i
                                                class="bx bx-up-arrow-alt"></i> +12.8%</small>
                                    </div>
                                </div>
                                <div id="leadsReportChart" style="min-height: 121.8px;">
                                    <div id="apexcharts3v1mh5ue"
                                        class="apexcharts-canvas apexcharts3v1mh5ue apexcharts-theme-light"
                                        style="width: 130px; height: 121.8px;"><svg id="SvgjsSvg1911" width="130"
                                            height="121.80000000000001" xmlns="http://www.w3.org/2000/svg"
                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <g id="SvgjsG1913" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(-0.5, -5)">
                                                <defs id="SvgjsDefs1912">
                                                    <clipPath id="gridRectMask3v1mh5ue">
                                                        <rect id="SvgjsRect1915" width="137" height="173" x="-2"
                                                            y="0" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask3v1mh5ue"></clipPath>
                                                    <clipPath id="nonForecastMask3v1mh5ue"></clipPath>
                                                    <clipPath id="gridRectMarkerMask3v1mh5ue">
                                                        <rect id="SvgjsRect1916" width="137" height="177" x="-2"
                                                            y="-2" rx="0" ry="0" opacity="1"
                                                            stroke-width="0" stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <g id="SvgjsG1917" class="apexcharts-pie">
                                                    <g id="SvgjsG1918" transform="translate(0, 0) scale(1)">
                                                        <circle id="SvgjsCircle1919" r="45.658536585365866"
                                                            cx="66.5" cy="66.5" fill="transparent"></circle>
                                                        <g id="SvgjsG1920" class="apexcharts-slices">
                                                            <g id="SvgjsG1921"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Electronic" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath1922"
                                                                    d="M 66.5 5.621951219512184 A 60.878048780487816 60.878048780487816 0 0 1 127.35786572965185 64.93251725651581 L 112.14339929723889 65.32438794238686 A 45.658536585365866 45.658536585365866 0 0 0 66.5 20.841463414634134 L 66.5 5.621951219512184 z"
                                                                    fill="rgba(113,221,55,1)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                    index="0" j="0" data:angle="88.52459016393442"
                                                                    data:startAngle="0" data:strokeWidth="0"
                                                                    data:value="45"
                                                                    data:pathOrig="M 66.5 5.621951219512184 A 60.878048780487816 60.878048780487816 0 0 1 127.35786572965185 64.93251725651581 L 112.14339929723889 65.32438794238686 A 45.658536585365866 45.658536585365866 0 0 0 66.5 20.841463414634134 L 66.5 5.621951219512184 z">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG1923"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Sports" rel="2" data:realIndex="1">
                                                                <path id="SvgjsPath1924"
                                                                    d="M 127.35786572965185 64.93251725651581 A 60.878048780487816 60.878048780487816 0 0 1 43.08233929588599 122.69386078982693 L 48.93675447191448 108.64539559237019 A 45.658536585365866 45.658536585365866 0 0 0 112.14339929723889 65.32438794238686 L 127.35786572965185 64.93251725651581 z"
                                                                    fill="rgba(113, 221, 55, 0.6)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                    index="0" j="1" data:angle="114.09836065573771"
                                                                    data:startAngle="88.52459016393442"
                                                                    data:strokeWidth="0" data:value="58"
                                                                    data:pathOrig="M 127.35786572965185 64.93251725651581 A 60.878048780487816 60.878048780487816 0 0 1 43.08233929588599 122.69386078982693 L 48.93675447191448 108.64539559237019 A 45.658536585365866 45.658536585365866 0 0 0 112.14339929723889 65.32438794238686 L 127.35786572965185 64.93251725651581 z">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG1925"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Decor" rel="3" data:realIndex="2">
                                                                <path id="SvgjsPath1926"
                                                                    d="M 43.08233929588599 122.69386078982693 A 60.878048780487816 60.878048780487816 0 0 1 6.268937978118807 75.35189194668317 L 21.3267034835891 73.13891896001238 A 45.658536585365866 45.658536585365866 0 0 0 48.93675447191448 108.64539559237019 L 43.08233929588599 122.69386078982693 z"
                                                                    fill="rgba(113, 221, 55, 0.4)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                    index="0" j="2" data:angle="59.016393442622956"
                                                                    data:startAngle="202.62295081967213"
                                                                    data:strokeWidth="0" data:value="30"
                                                                    data:pathOrig="M 43.08233929588599 122.69386078982693 A 60.878048780487816 60.878048780487816 0 0 1 6.268937978118807 75.35189194668317 L 21.3267034835891 73.13891896001238 A 45.658536585365866 45.658536585365866 0 0 0 48.93675447191448 108.64539559237019 L 43.08233929588599 122.69386078982693 z">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG1927"
                                                                class="apexcharts-series apexcharts-pie-series"
                                                                seriesName="Fashion" rel="4"
                                                                data:realIndex="3">
                                                                <path id="SvgjsPath1928"
                                                                    d="M 6.268937978118807 75.35189194668317 A 60.878048780487816 60.878048780487816 0 0 1 66.48937477611985 5.621952146737883 L 66.49203108208988 20.84146411005341 A 45.658536585365866 45.658536585365866 0 0 0 21.3267034835891 73.13891896001238 L 6.268937978118807 75.35189194668317 z"
                                                                    fill="rgba(113, 221, 55, 0.2)" fill-opacity="1"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="0" stroke-dasharray="0"
                                                                    class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                    index="0" j="3" data:angle="98.36065573770492"
                                                                    data:startAngle="261.6393442622951"
                                                                    data:strokeWidth="0" data:value="50"
                                                                    data:pathOrig="M 6.268937978118807 75.35189194668317 A 60.878048780487816 60.878048780487816 0 0 1 66.48937477611985 5.621952146737883 L 66.49203108208988 20.84146411005341 A 45.658536585365866 45.658536585365866 0 0 0 21.3267034835891 73.13891896001238 L 6.268937978118807 75.35189194668317 z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1929" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText1930"
                                                            font-family="Helvetica, Arial, sans-serif" x="66.5" y="86.5"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size=".7rem" font-weight="400" fill="#697a8d"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: Helvetica, Arial, sans-serif; fill: rgb(105, 122, 141);">1
                                                            Week</text><text id="SvgjsText1931"
                                                            font-family="Public Sans" x="66.5" y="67.5"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="1.5rem" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">32%</text></g>
                                                </g>
                                                <line id="SvgjsLine1932" x1="0" y1="0"
                                                    x2="133" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1933" x1="0" y1="0"
                                                    x2="133" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                            <g id="SvgjsG1914" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-false"
                                            style="left: 57.6406px; top: 44.1094px;">
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                style="order: 1; display: flex; background-color: rgba(113, 221, 55, 0.6);">
                                                <span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(113, 221, 55, 0.6); display: none;"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">Sports: </span><span
                                                            class="apexcharts-tooltip-text-y-value">58</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"
                                                style="order: 2; display: none; background-color: rgba(113, 221, 55, 0.6);">
                                                <span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(113, 221, 55, 0.6); display: none;"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">Sports: </span><span
                                                            class="apexcharts-tooltip-text-y-value">58</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"
                                                style="order: 3; display: none; background-color: rgba(113, 221, 55, 0.6);">
                                                <span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(113, 221, 55, 0.6); display: none;"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">Sports: </span><span
                                                            class="apexcharts-tooltip-text-y-value">58</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"
                                                style="order: 4; display: none; background-color: rgba(113, 221, 55, 0.6);">
                                                <span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgba(113, 221, 55, 0.6); display: none;"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label">Sports: </span><span
                                                            class="apexcharts-tooltip-text-y-value">58</span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 398px; height: 123px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Top Products by -->
        <div class="col-12 col-lg-8 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-6">
                        <div class="card-header d-flex align-items-center justify-content-between mb-4">
                            <h5 class="card-title m-0 me-2">Top Products by <span class="text-primary">Sales</span></h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="topSales" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topSales">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/oneplus.png" alt="oneplus">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Oneplus Nord</h6>
                                            <small class="text-muted d-block mb-1">Oneplus</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <span class="fw-bold">$98,348</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/watch-primary.png" alt="smart band">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Smart Band 4</h6>
                                            <small class="text-muted d-block mb-1">Xiaomi</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <span class="fw-bold">$15,459</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/surface.png" alt="Surface">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Surface Pro X</h6>
                                            <small class="text-muted d-block mb-1">Miscrosoft</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <span class="fw-bold">$4,589</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/iphone.png" alt="iphone">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">iphone 13</h6>
                                            <small class="text-muted d-block mb-1">Apple</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <span class="fw-bold">$84,345</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/earphone.png" alt="Bluetooth Earphone">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Bluetooth Earphone</h6>
                                            <small class="text-muted d-block mb-1">Beats</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-1">
                                            <span class="fw-bold">$10,374</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header d-flex align-items-center justify-content-between mb-4">
                            <h5 class="card-title m-0 me-2">Top Products by <span class="text-primary">Volume</span>
                            </h5>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="topVolume" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topVolume">
                                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/laptop-secondary.png" alt="ENVY Laptop"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">ENVY Laptop</h6>
                                            <small class="text-muted d-block mb-1">HP</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-3">
                                            <span class="fw-semibold">124k</span>
                                            <span class="badge bg-label-success">+12.4%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/computer.png" alt="Apple"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Apple</h6>
                                            <small class="text-muted d-block mb-1">iMac Pro</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-3">
                                            <span class="fw-semibold">74.9k</span>
                                            <span class="badge bg-label-danger">-8.5%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/watch.png" alt="Smart Watch"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Smart Watch</h6>
                                            <small class="text-muted d-block mb-1">Fitbit</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-3">
                                            <span class="fw-semibold">4.4k</span>
                                            <span class="badge bg-label-success">+62.6%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 pb-1">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/oneplus-success.png" alt="Oneplus RT"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Oneplus RT</h6>
                                            <small class="text-muted d-block mb-1">Oneplus</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-3">
                                            <span class="fw-semibold">12,3k.71</span>
                                            <span class="badge bg-label-success">+16.7%</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="avatar flex-shrink-0 me-3">
                                        <img src="{{asset('dashboard')}}/assets/img/icons/unicons/pixel.png" alt="Pixel 4a"
                                            class="rounded">
                                    </div>
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <h6 class="mb-0">Pixel 4a</h6>
                                            <small class="text-muted d-block mb-1">Google</small>
                                        </div>
                                        <div class="user-progress d-flex align-items-center gap-3">
                                            <span class="fw-semibold">834k</span>
                                            <span class="badge bg-label-danger">-12.9%</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Products by -->

        <!-- Earning Reports -->
        <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Earning Reports</h5>
                        <small class="text-muted">Weekly Earnings Overview</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="earningReports" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0" style="position: relative;">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-trending-up"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Net Profit</h6>
                                    <small class="text-muted">12.4k Sales</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">$1,619</small><i
                                        class="bx bx-chevron-up text-success ms-1"></i>
                                    <small class="text-muted">18.6%</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="bx bx-dollar"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Total Income</h6>
                                    <small class="text-muted">Sales, Affiliation</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">$3,571</small><i
                                        class="bx bx-chevron-up text-success ms-1"></i>
                                    <small class="text-muted">39.6%</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class="bx bx-credit-card"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Total Expenses</h6>
                                    <small class="text-muted">ADVT, Marketing</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">$430</small><i
                                        class="bx bx-chevron-up text-success ms-1"></i>
                                    <small class="text-muted">52.8%</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div id="reportBarChart" style="min-height: 135px;">
                        <div id="apexchartsqlp2pjeof"
                            class="apexcharts-canvas apexchartsqlp2pjeof apexcharts-theme-light"
                            style="width: 397px; height: 120px;"><svg id="SvgjsSvg1934" width="397"
                                height="120" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG1936" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(0, -5)">
                                    <defs id="SvgjsDefs1935">
                                        <linearGradient id="SvgjsLinearGradient1939" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1940" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1941" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1942" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMaskqlp2pjeof">
                                            <rect id="SvgjsRect1944" width="411" height="95.72999999999999" x="-2"
                                                y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskqlp2pjeof"></clipPath>
                                        <clipPath id="nonForecastMaskqlp2pjeof"></clipPath>
                                        <clipPath id="gridRectMarkerMaskqlp2pjeof">
                                            <rect id="SvgjsRect1945" width="411" height="99.72999999999999" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1943" width="29.071428571428573" height="95.72999999999999"
                                        x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient1939)"
                                        class="apexcharts-xcrosshairs" y2="95.72999999999999" filter="none"
                                        fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1964" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1965" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1967"
                                                font-family="Helvetica, Arial, sans-serif" x="29.071428571428573"
                                                y="124.72999999999999" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1968">Mo</tspan>
                                                <title>Mo</title>
                                            </text><text id="SvgjsText1970" font-family="Helvetica, Arial, sans-serif"
                                                x="87.21428571428572" y="124.72999999999999" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1971">Tu</tspan>
                                                <title>Tu</title>
                                            </text><text id="SvgjsText1973" font-family="Helvetica, Arial, sans-serif"
                                                x="145.35714285714286" y="124.72999999999999" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1974">We</tspan>
                                                <title>We</title>
                                            </text><text id="SvgjsText1976" font-family="Helvetica, Arial, sans-serif"
                                                x="203.5" y="124.72999999999999" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1977">Th</tspan>
                                                <title>Th</title>
                                            </text><text id="SvgjsText1979" font-family="Helvetica, Arial, sans-serif"
                                                x="261.64285714285717" y="124.72999999999999" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1980">Fr</tspan>
                                                <title>Fr</title>
                                            </text><text id="SvgjsText1982" font-family="Helvetica, Arial, sans-serif"
                                                x="319.78571428571433" y="124.72999999999999" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1983">Sa</tspan>
                                                <title>Sa</title>
                                            </text><text id="SvgjsText1985" font-family="Helvetica, Arial, sans-serif"
                                                x="377.9285714285715" y="124.72999999999999" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1986">Su</tspan>
                                                <title>Su</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1989" class="apexcharts-grid">
                                        <g id="SvgjsG1990" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine1992" x1="0" y1="0" x2="407"
                                                y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1993" x1="0" y1="19.145999999999997"
                                                x2="407" y2="19.145999999999997" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1994" x1="0" y1="38.291999999999994"
                                                x2="407" y2="38.291999999999994" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1995" x1="0" y1="57.43799999999999"
                                                x2="407" y2="57.43799999999999" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1996" x1="0" y1="76.58399999999999"
                                                x2="407" y2="76.58399999999999" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1997" x1="0" y1="95.72999999999999"
                                                x2="407" y2="95.72999999999999" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1991" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine1999" x1="0" y1="95.72999999999999"
                                            x2="407" y2="95.72999999999999" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                        <line id="SvgjsLine1998" x1="0" y1="1" x2="0"
                                            y2="95.72999999999999" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1946" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1947" class="apexcharts-series" rel="1"
                                            seriesName="seriesx1" data:realIndex="0">
                                            <path id="SvgjsPath1951"
                                                d="M 14.535714285714286 91.72999999999999L 14.535714285714286 61.437999999999995Q 14.535714285714286 57.437999999999995 18.535714285714285 57.437999999999995L 39.60714285714286 57.437999999999995Q 43.60714285714286 57.437999999999995 43.60714285714286 61.437999999999995L 43.60714285714286 61.437999999999995L 43.60714285714286 91.72999999999999Q 43.60714285714286 95.72999999999999 39.60714285714286 95.72999999999999L 18.535714285714285 95.72999999999999Q 14.535714285714286 95.72999999999999 14.535714285714286 91.72999999999999z"
                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 14.535714285714286 91.72999999999999L 14.535714285714286 61.437999999999995Q 14.535714285714286 57.437999999999995 18.535714285714285 57.437999999999995L 39.60714285714286 57.437999999999995Q 43.60714285714286 57.437999999999995 43.60714285714286 61.437999999999995L 43.60714285714286 61.437999999999995L 43.60714285714286 91.72999999999999Q 43.60714285714286 95.72999999999999 39.60714285714286 95.72999999999999L 18.535714285714285 95.72999999999999Q 14.535714285714286 95.72999999999999 14.535714285714286 91.72999999999999z"
                                                pathFrom="M 14.535714285714286 91.72999999999999L 14.535714285714286 91.72999999999999L 43.60714285714286 91.72999999999999L 43.60714285714286 91.72999999999999L 43.60714285714286 91.72999999999999L 43.60714285714286 91.72999999999999L 43.60714285714286 91.72999999999999L 14.535714285714286 91.72999999999999"
                                                cy="57.437999999999995" cx="72.67857142857143" j="0" val="40"
                                                barHeight="38.291999999999994" barWidth="29.071428571428573"></path>
                                            <path id="SvgjsPath1953"
                                                d="M 72.67857142857143 91.72999999999999L 72.67857142857143 8.786500000000004Q 72.67857142857143 4.786500000000004 76.67857142857143 4.786500000000004L 97.75 4.786500000000004Q 101.75 4.786500000000004 101.75 8.786500000000004L 101.75 8.786500000000004L 101.75 91.72999999999999Q 101.75 95.72999999999999 97.75 95.72999999999999L 76.67857142857143 95.72999999999999Q 72.67857142857143 95.72999999999999 72.67857142857143 91.72999999999999z"
                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 72.67857142857143 91.72999999999999L 72.67857142857143 8.786500000000004Q 72.67857142857143 4.786500000000004 76.67857142857143 4.786500000000004L 97.75 4.786500000000004Q 101.75 4.786500000000004 101.75 8.786500000000004L 101.75 8.786500000000004L 101.75 91.72999999999999Q 101.75 95.72999999999999 97.75 95.72999999999999L 76.67857142857143 95.72999999999999Q 72.67857142857143 95.72999999999999 72.67857142857143 91.72999999999999z"
                                                pathFrom="M 72.67857142857143 91.72999999999999L 72.67857142857143 91.72999999999999L 101.75 91.72999999999999L 101.75 91.72999999999999L 101.75 91.72999999999999L 101.75 91.72999999999999L 101.75 91.72999999999999L 72.67857142857143 91.72999999999999"
                                                cy="4.786500000000004" cx="130.82142857142858" j="1" val="95"
                                                barHeight="90.94349999999999" barWidth="29.071428571428573"></path>
                                            <path id="SvgjsPath1955"
                                                d="M 130.82142857142858 91.72999999999999L 130.82142857142858 42.291999999999994Q 130.82142857142858 38.291999999999994 134.82142857142858 38.291999999999994L 155.89285714285717 38.291999999999994Q 159.89285714285717 38.291999999999994 159.89285714285717 42.291999999999994L 159.89285714285717 42.291999999999994L 159.89285714285717 91.72999999999999Q 159.89285714285717 95.72999999999999 155.89285714285717 95.72999999999999L 134.82142857142858 95.72999999999999Q 130.82142857142858 95.72999999999999 130.82142857142858 91.72999999999999z"
                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 130.82142857142858 91.72999999999999L 130.82142857142858 42.291999999999994Q 130.82142857142858 38.291999999999994 134.82142857142858 38.291999999999994L 155.89285714285717 38.291999999999994Q 159.89285714285717 38.291999999999994 159.89285714285717 42.291999999999994L 159.89285714285717 42.291999999999994L 159.89285714285717 91.72999999999999Q 159.89285714285717 95.72999999999999 155.89285714285717 95.72999999999999L 134.82142857142858 95.72999999999999Q 130.82142857142858 95.72999999999999 130.82142857142858 91.72999999999999z"
                                                pathFrom="M 130.82142857142858 91.72999999999999L 130.82142857142858 91.72999999999999L 159.89285714285717 91.72999999999999L 159.89285714285717 91.72999999999999L 159.89285714285717 91.72999999999999L 159.89285714285717 91.72999999999999L 159.89285714285717 91.72999999999999L 130.82142857142858 91.72999999999999"
                                                cy="38.291999999999994" cx="188.96428571428572" j="2" val="60"
                                                barHeight="57.437999999999995" barWidth="29.071428571428573"></path>
                                            <path id="SvgjsPath1957"
                                                d="M 188.96428571428572 91.72999999999999L 188.96428571428572 56.65149999999999Q 188.96428571428572 52.65149999999999 192.96428571428572 52.65149999999999L 214.0357142857143 52.65149999999999Q 218.0357142857143 52.65149999999999 218.0357142857143 56.65149999999999L 218.0357142857143 56.65149999999999L 218.0357142857143 91.72999999999999Q 218.0357142857143 95.72999999999999 214.0357142857143 95.72999999999999L 192.96428571428572 95.72999999999999Q 188.96428571428572 95.72999999999999 188.96428571428572 91.72999999999999z"
                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 188.96428571428572 91.72999999999999L 188.96428571428572 56.65149999999999Q 188.96428571428572 52.65149999999999 192.96428571428572 52.65149999999999L 214.0357142857143 52.65149999999999Q 218.0357142857143 52.65149999999999 218.0357142857143 56.65149999999999L 218.0357142857143 56.65149999999999L 218.0357142857143 91.72999999999999Q 218.0357142857143 95.72999999999999 214.0357142857143 95.72999999999999L 192.96428571428572 95.72999999999999Q 188.96428571428572 95.72999999999999 188.96428571428572 91.72999999999999z"
                                                pathFrom="M 188.96428571428572 91.72999999999999L 188.96428571428572 91.72999999999999L 218.0357142857143 91.72999999999999L 218.0357142857143 91.72999999999999L 218.0357142857143 91.72999999999999L 218.0357142857143 91.72999999999999L 218.0357142857143 91.72999999999999L 188.96428571428572 91.72999999999999"
                                                cy="52.65149999999999" cx="247.10714285714286" j="3" val="45"
                                                barHeight="43.0785" barWidth="29.071428571428573"></path>
                                            <path id="SvgjsPath1959"
                                                d="M 247.10714285714286 91.72999999999999L 247.10714285714286 13.572999999999993Q 247.10714285714286 9.572999999999993 251.10714285714286 9.572999999999993L 272.17857142857144 9.572999999999993Q 276.17857142857144 9.572999999999993 276.17857142857144 13.572999999999993L 276.17857142857144 13.572999999999993L 276.17857142857144 91.72999999999999Q 276.17857142857144 95.72999999999999 272.17857142857144 95.72999999999999L 251.10714285714286 95.72999999999999Q 247.10714285714286 95.72999999999999 247.10714285714286 91.72999999999999z"
                                                fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 247.10714285714286 91.72999999999999L 247.10714285714286 13.572999999999993Q 247.10714285714286 9.572999999999993 251.10714285714286 9.572999999999993L 272.17857142857144 9.572999999999993Q 276.17857142857144 9.572999999999993 276.17857142857144 13.572999999999993L 276.17857142857144 13.572999999999993L 276.17857142857144 91.72999999999999Q 276.17857142857144 95.72999999999999 272.17857142857144 95.72999999999999L 251.10714285714286 95.72999999999999Q 247.10714285714286 95.72999999999999 247.10714285714286 91.72999999999999z"
                                                pathFrom="M 247.10714285714286 91.72999999999999L 247.10714285714286 91.72999999999999L 276.17857142857144 91.72999999999999L 276.17857142857144 91.72999999999999L 276.17857142857144 91.72999999999999L 276.17857142857144 91.72999999999999L 276.17857142857144 91.72999999999999L 247.10714285714286 91.72999999999999"
                                                cy="9.572999999999993" cx="305.25" j="4" val="90"
                                                barHeight="86.157" barWidth="29.071428571428573"></path>
                                            <path id="SvgjsPath1961"
                                                d="M 305.25 91.72999999999999L 305.25 51.864999999999995Q 305.25 47.864999999999995 309.25 47.864999999999995L 330.32142857142856 47.864999999999995Q 334.32142857142856 47.864999999999995 334.32142857142856 51.864999999999995L 334.32142857142856 51.864999999999995L 334.32142857142856 91.72999999999999Q 334.32142857142856 95.72999999999999 330.32142857142856 95.72999999999999L 309.25 95.72999999999999Q 305.25 95.72999999999999 305.25 91.72999999999999z"
                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 305.25 91.72999999999999L 305.25 51.864999999999995Q 305.25 47.864999999999995 309.25 47.864999999999995L 330.32142857142856 47.864999999999995Q 334.32142857142856 47.864999999999995 334.32142857142856 51.864999999999995L 334.32142857142856 51.864999999999995L 334.32142857142856 91.72999999999999Q 334.32142857142856 95.72999999999999 330.32142857142856 95.72999999999999L 309.25 95.72999999999999Q 305.25 95.72999999999999 305.25 91.72999999999999z"
                                                pathFrom="M 305.25 91.72999999999999L 305.25 91.72999999999999L 334.32142857142856 91.72999999999999L 334.32142857142856 91.72999999999999L 334.32142857142856 91.72999999999999L 334.32142857142856 91.72999999999999L 334.32142857142856 91.72999999999999L 305.25 91.72999999999999"
                                                cy="47.864999999999995" cx="363.39285714285717" j="5" val="50"
                                                barHeight="47.864999999999995" barWidth="29.071428571428573"></path>
                                            <path id="SvgjsPath1963"
                                                d="M 363.39285714285717 91.72999999999999L 363.39285714285717 27.932500000000005Q 363.39285714285717 23.932500000000005 367.39285714285717 23.932500000000005L 388.4642857142857 23.932500000000005Q 392.4642857142857 23.932500000000005 392.4642857142857 27.932500000000005L 392.4642857142857 27.932500000000005L 392.4642857142857 91.72999999999999Q 392.4642857142857 95.72999999999999 388.4642857142857 95.72999999999999L 367.39285714285717 95.72999999999999Q 363.39285714285717 95.72999999999999 363.39285714285717 91.72999999999999z"
                                                fill="#666ee81a" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMaskqlp2pjeof)"
                                                pathTo="M 363.39285714285717 91.72999999999999L 363.39285714285717 27.932500000000005Q 363.39285714285717 23.932500000000005 367.39285714285717 23.932500000000005L 388.4642857142857 23.932500000000005Q 392.4642857142857 23.932500000000005 392.4642857142857 27.932500000000005L 392.4642857142857 27.932500000000005L 392.4642857142857 91.72999999999999Q 392.4642857142857 95.72999999999999 388.4642857142857 95.72999999999999L 367.39285714285717 95.72999999999999Q 363.39285714285717 95.72999999999999 363.39285714285717 91.72999999999999z"
                                                pathFrom="M 363.39285714285717 91.72999999999999L 363.39285714285717 91.72999999999999L 392.4642857142857 91.72999999999999L 392.4642857142857 91.72999999999999L 392.4642857142857 91.72999999999999L 392.4642857142857 91.72999999999999L 392.4642857142857 91.72999999999999L 363.39285714285717 91.72999999999999"
                                                cy="23.932500000000005" cx="421.53571428571433" j="6" val="75"
                                                barHeight="71.79749999999999" barWidth="29.071428571428573"></path>
                                            <g id="SvgjsG1949" class="apexcharts-bar-goals-markers"
                                                style="pointer-events: none">
                                                <g id="SvgjsG1950" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1952" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1954" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1956" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1958" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1960" className="apexcharts-bar-goals-groups"></g>
                                                <g id="SvgjsG1962" className="apexcharts-bar-goals-groups"></g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1948" class="apexcharts-datalabels" data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine2000" x1="0" y1="0" x2="407"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2001" x1="0" y1="0" x2="407"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2002" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2003" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2004" class="apexcharts-point-annotations"></g>
                                </g>
                                <g id="SvgjsG1987" class="apexcharts-yaxis" rel="0"
                                    transform="translate(-8, 0)">
                                    <g id="SvgjsG1988" class="apexcharts-yaxis-texts-g"></g>
                                </g>
                                <g id="SvgjsG1937" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 60px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgba(102, 110, 232, 0.1);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 446px; height: 342px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Earning Reports -->

        <!-- Sales Analytics -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-start justify-content-between">
                    <div>
                        <h5 class="card-title m-0 me-2 mb-2">Sales Analytics</h5>
                        <span class="badge bg-label-success me-1">+42.6%</span> <span>Than last year</span>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button"
                            id="salesAnalyticsId" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            2022
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesAnalyticsId">
                            <a class="dropdown-item" href="javascript:void(0);">2021</a>
                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0" style="position: relative;">
                    <div id="salesAnalyticsChart" style="min-height: 350px;">
                        <div id="apexchartsbegyaiqt" class="apexcharts-canvas apexchartsbegyaiqt apexcharts-theme-light"
                            style="width: 397px; height: 350px;"><svg id="SvgjsSvg2005" width="397"
                                height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(-10, 0)"
                                style="background: transparent;">
                                <g id="SvgjsG2007" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(39.22998046875, 20)">
                                    <defs id="SvgjsDefs2006">
                                        <clipPath id="gridRectMaskbegyaiqt">
                                            <rect id="SvgjsRect2013" width="367.69970703125" height="294.73" x="-4"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskbegyaiqt"></clipPath>
                                        <clipPath id="nonForecastMaskbegyaiqt"></clipPath>
                                        <clipPath id="gridRectMarkerMaskbegyaiqt">
                                            <rect id="SvgjsRect2014" width="363.69970703125" height="294.73" x="-2"
                                                y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine2012" x1="0" y1="0" x2="0"
                                        y2="290.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="290.73"
                                        fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG2088" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG2089" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText2091"
                                                font-family="Helvetica, Arial, sans-serif" x="22.481231689453125"
                                                y="319.73" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2092">Jan</tspan>
                                                <title>Jan</title>
                                            </text><text id="SvgjsText2094" font-family="Helvetica, Arial, sans-serif"
                                                x="67.44369506835938" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2095">Feb</tspan>
                                                <title>Feb</title>
                                            </text><text id="SvgjsText2097" font-family="Helvetica, Arial, sans-serif"
                                                x="112.40615844726562" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2098">Mar</tspan>
                                                <title>Mar</title>
                                            </text><text id="SvgjsText2100" font-family="Helvetica, Arial, sans-serif"
                                                x="157.36862182617188" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2101">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText2103" font-family="Helvetica, Arial, sans-serif"
                                                x="202.33108520507812" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2104">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText2106" font-family="Helvetica, Arial, sans-serif"
                                                x="247.29354858398438" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2107">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText2109" font-family="Helvetica, Arial, sans-serif"
                                                x="292.2560119628906" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2110">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText2112" font-family="Helvetica, Arial, sans-serif"
                                                x="337.2184753417969" y="319.73" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan2113">Aug</tspan>
                                                <title>Aug</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2134" class="apexcharts-grid">
                                        <g id="SvgjsG2135" class="apexcharts-gridlines-horizontal"
                                            style="display: none;">
                                            <line id="SvgjsLine2137" x1="0" y1="0"
                                                x2="359.69970703125" y2="0" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2138" x1="0" y1="36.34125"
                                                x2="359.69970703125" y2="36.34125" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2139" x1="0" y1="72.6825"
                                                x2="359.69970703125" y2="72.6825" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2140" x1="0" y1="109.02375"
                                                x2="359.69970703125" y2="109.02375" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2141" x1="0" y1="145.365"
                                                x2="359.69970703125" y2="145.365" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2142" x1="0" y1="181.70625"
                                                x2="359.69970703125" y2="181.70625" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2143" x1="0" y1="218.0475"
                                                x2="359.69970703125" y2="218.0475" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2144" x1="0" y1="254.38875000000002"
                                                x2="359.69970703125" y2="254.38875000000002" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2145" x1="0" y1="290.73"
                                                x2="359.69970703125" y2="290.73" stroke="#e0e0e0"
                                                stroke-dasharray="0" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2136" class="apexcharts-gridlines-vertical"
                                            style="display: none;"></g>
                                        <line id="SvgjsLine2147" x1="0" y1="290.73" x2="359.69970703125"
                                            y2="290.73" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                        <line id="SvgjsLine2146" x1="0" y1="1" x2="0"
                                            y2="290.73" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG2015" class="apexcharts-heatmap"
                                        clip-path="url(#gridRectMaskbegyaiqt)">
                                        <g id="SvgjsG2016" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="8k" rel="8" data:realIndex="7">
                                            <rect id="SvgjsRect2017" width="44.96246337890625" height="36.34125" x="0"
                                                y="0" rx="6px" ry="6px" opacity="1" stroke-width="4"
                                                stroke="#ffffff" stroke-dasharray="0" fill="#e1e2ff" cx="0"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="0" val="575" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2018" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="44.96246337890625"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="1" val="350" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2019" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="89.9249267578125"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="2" val="220" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2020" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="134.88739013671875"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="3" val="290" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2021" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="179.849853515625"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="4" val="650" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2022" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="224.81231689453125"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="5" val="260" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2023" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="269.7747802734375"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="6" val="274" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2024" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="0" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="0" class="apexcharts-heatmap-rect" i="7" index="7"
                                                j="7" val="815" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2025" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="7k" rel="7" data:realIndex="6">
                                            <rect id="SvgjsRect2026" width="44.96246337890625" height="36.34125" x="0"
                                                y="36.34125" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="36.34125"
                                                class="apexcharts-heatmap-rect" i="6" index="6" j="0"
                                                val="575" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2027" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="44.96246337890625"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="1" val="1350" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2028" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="89.9249267578125"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="2" val="1220" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2029" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="134.88739013671875"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="3" val="1290" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2030" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="179.849853515625"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="4" val="1650" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2031" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="224.81231689453125"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="5" val="1260" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2032" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="269.7747802734375"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="6" val="3274" color="#696cff"></rect>
                                            <rect id="SvgjsRect2033" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="36.34125" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="36.34125" class="apexcharts-heatmap-rect" i="6" index="6"
                                                j="7" val="815" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2034" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="6k" rel="6" data:realIndex="5">
                                            <rect id="SvgjsRect2035" width="44.96246337890625" height="36.34125" x="0"
                                                y="72.6825" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="72.6825"
                                                class="apexcharts-heatmap-rect" i="5" index="5" j="0"
                                                val="575" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2036" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="44.96246337890625"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="1" val="1350" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2037" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="89.9249267578125"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="2" val="2220" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2038" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="134.88739013671875"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="3" val="2290" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2039" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="179.849853515625"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="4" val="2650" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2040" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="224.81231689453125"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="5" val="3260" color="#696cff"></rect>
                                            <rect id="SvgjsRect2041" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="269.7747802734375"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="6" val="1274" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2042" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="72.6825" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="72.6825" class="apexcharts-heatmap-rect" i="5" index="5"
                                                j="7" val="815" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2043" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="5k" rel="5" data:realIndex="4">
                                            <rect id="SvgjsRect2044" width="44.96246337890625" height="36.34125" x="0"
                                                y="109.02375" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="109.02375"
                                                class="apexcharts-heatmap-rect" i="4" index="4" j="0"
                                                val="875" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2045" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="44.96246337890625"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="1" val="1350" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2046" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="89.9249267578125"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="2" val="2220" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2047" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="134.88739013671875"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="3" val="3290" color="#696cff"></rect>
                                            <rect id="SvgjsRect2048" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="179.849853515625"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="4" val="3650" color="#696cff"></rect>
                                            <rect id="SvgjsRect2049" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="224.81231689453125"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="5" val="2260" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2050" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="269.7747802734375"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="6" val="1274" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2051" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="109.02375" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="109.02375" class="apexcharts-heatmap-rect" i="4" index="4"
                                                j="7" val="965" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2052" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="4k" rel="4" data:realIndex="3">
                                            <rect id="SvgjsRect2053" width="44.96246337890625" height="36.34125" x="0"
                                                y="145.365" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="145.365"
                                                class="apexcharts-heatmap-rect" i="3" index="3" j="0"
                                                val="575" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2054" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="44.96246337890625"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="1" val="1350" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2055" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="89.9249267578125"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="2" val="2220" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2056" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="134.88739013671875"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="3" val="3290" color="#696cff"></rect>
                                            <rect id="SvgjsRect2057" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="179.849853515625"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="4" val="3650" color="#696cff"></rect>
                                            <rect id="SvgjsRect2058" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="224.81231689453125"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="5" val="2260" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2059" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="269.7747802734375"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="6" val="1274" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2060" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="145.365" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="145.365" class="apexcharts-heatmap-rect" i="3" index="3"
                                                j="7" val="315" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2061" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="3k" rel="3" data:realIndex="2">
                                            <rect id="SvgjsRect2062" width="44.96246337890625" height="36.34125" x="0"
                                                y="181.70625" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="181.70625"
                                                class="apexcharts-heatmap-rect" i="2" index="2" j="0"
                                                val="375" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2063" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="44.96246337890625"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="1" val="1350" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2064" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="89.9249267578125"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="2" val="3220" color="#696cff"></rect>
                                            <rect id="SvgjsRect2065" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="134.88739013671875"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="3" val="2290" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2066" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="179.849853515625"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="4" val="2650" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2067" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#a5a7ff" cx="224.81231689453125"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="5" val="2260" color="#a5a7ff"></rect>
                                            <rect id="SvgjsRect2068" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="269.7747802734375"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="6" val="1274" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2069" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="181.70625" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="181.70625" class="apexcharts-heatmap-rect" i="2" index="2"
                                                j="7" val="815" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2070" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="2k" rel="2" data:realIndex="1">
                                            <rect id="SvgjsRect2071" width="44.96246337890625" height="36.34125" x="0"
                                                y="218.0475" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="218.0475"
                                                class="apexcharts-heatmap-rect" i="1" index="1" j="0"
                                                val="750" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2072" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#696cff" cx="44.96246337890625"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="1" val="3350" color="#696cff"></rect>
                                            <rect id="SvgjsRect2073" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="89.9249267578125"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="2" val="1220" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2074" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="134.88739013671875"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="3" val="1290" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2075" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="179.849853515625"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="4" val="1650" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2076" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="224.81231689453125"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="5" val="1260" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2077" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#c3c4ff" cx="269.7747802734375"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="6" val="1274" color="#c3c4ff"></rect>
                                            <rect id="SvgjsRect2078" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="218.0475" rx="6px" ry="6px"
                                                opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="218.0475" class="apexcharts-heatmap-rect" i="1" index="1"
                                                j="7" val="850" color="#e1e2ff"></rect>
                                        </g>
                                        <g id="SvgjsG2079" class="apexcharts-series apexcharts-heatmap-series"
                                            seriesName="1k" rel="1" data:realIndex="0">
                                            <rect id="SvgjsRect2080" width="44.96246337890625" height="36.34125" x="0"
                                                y="254.38875000000002" rx="6px" ry="6px" opacity="1"
                                                stroke-width="4" stroke="#ffffff" stroke-dasharray="0"
                                                fill="#e1e2ff" cx="0" cy="254.38875000000002"
                                                class="apexcharts-heatmap-rect" i="0" index="0" j="0"
                                                val="250" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2081" width="44.96246337890625" height="36.34125"
                                                x="44.96246337890625" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="44.96246337890625"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="1" val="350" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2082" width="44.96246337890625" height="36.34125"
                                                x="89.9249267578125" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="89.9249267578125"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="2" val="220" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2083" width="44.96246337890625" height="36.34125"
                                                x="134.88739013671875" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="134.88739013671875"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="3" val="290" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2084" width="44.96246337890625" height="36.34125"
                                                x="179.849853515625" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="179.849853515625"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="4" val="650" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2085" width="44.96246337890625" height="36.34125"
                                                x="224.81231689453125" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="224.81231689453125"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="5" val="260" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2086" width="44.96246337890625" height="36.34125"
                                                x="269.7747802734375" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="269.7747802734375"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="6" val="274" color="#e1e2ff"></rect>
                                            <rect id="SvgjsRect2087" width="44.96246337890625" height="36.34125"
                                                x="314.73724365234375" y="254.38875000000002" rx="6px"
                                                ry="6px" opacity="1" stroke-width="4" stroke="#ffffff"
                                                stroke-dasharray="0" fill="#e1e2ff" cx="314.73724365234375"
                                                cy="254.38875000000002" class="apexcharts-heatmap-rect" i="0"
                                                index="0" j="7" val="850" color="#e1e2ff"></rect>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine2148" x1="0" y1="0" x2="359.69970703125"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine2149" x1="0" y1="0" x2="359.69970703125"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG2150" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG2151" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG2152" class="apexcharts-point-annotations"></g>
                                </g>
                                <rect id="SvgjsRect2011" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG2114" class="apexcharts-yaxis" rel="0"
                                    transform="translate(11.22998046875, 0)">
                                    <g id="SvgjsG2115" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2116"
                                            font-family="Helvetica, Arial, sans-serif" x="20" y="3.6293749999999996"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2117"></tspan>
                                            <title></title>
                                        </text><text id="SvgjsText2118" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="39.970625" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2119">8k</tspan>
                                            <title>8k</title>
                                        </text><text id="SvgjsText2120" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="76.311875" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2121">7k</tspan>
                                            <title>7k</title>
                                        </text><text id="SvgjsText2122" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="112.65312500000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2123">6k</tspan>
                                            <title>6k</title>
                                        </text><text id="SvgjsText2124" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="148.99437500000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2125">5k</tspan>
                                            <title>5k</title>
                                        </text><text id="SvgjsText2126" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="185.33562500000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2127">4k</tspan>
                                            <title>4k</title>
                                        </text><text id="SvgjsText2128" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="221.67687500000002" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2129">3k</tspan>
                                            <title>3k</title>
                                        </text><text id="SvgjsText2130" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="258.01812500000005" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2131">2k</tspan>
                                            <title>2k</title>
                                        </text><text id="SvgjsText2132" font-family="Helvetica, Arial, sans-serif"
                                            x="20" y="294.359375" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="400" fill="#a1acb8"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: Helvetica, Arial, sans-serif;">
                                            <tspan id="SvgjsTspan2133">1k</tspan>
                                            <title>1k</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG2008" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend" style="max-height: 175px;"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 143, 251);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 227, 150);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(254, 176, 25);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(255, 69, 96);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 5;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(119, 93, 208);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 6;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 143, 251);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 7;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(0, 227, 150);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 8;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(254, 176, 25);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 446px; height: 359px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Sales Analytics -->

        <!-- Sales By Country -->
        <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between mb-3">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Sales by Countries</h5>
                        <small class="text-muted">Monthly Sales Overview</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesByCountry" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset('dashboard')}}/assets/svg/flags/us.svg" alt="User" class="rounded-circle">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$8,567k</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            25.8%
                                        </small>
                                    </div>
                                    <small class="text-muted">United states of america</small>
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">884k</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset('dashboard')}}/assets/svg/flags/br.svg" alt="User" class="rounded-circle">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$2,415k</h6>
                                        <small class="text-danger fw-semibold">
                                            <i class="bx bx-chevron-down"></i>
                                            6.2%
                                        </small>
                                    </div>
                                    <small class="text-muted">Brazil</small>
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">645k</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset('dashboard')}}/assets/svg/flags/in.svg" alt="User" class="rounded-circle">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$865k</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            12.4%
                                        </small>
                                    </div>
                                    <small class="text-muted">India</small>
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">148k</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset('dashboard')}}/assets/svg/flags/au.svg" alt="User" class="rounded-circle">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$745k</h6>
                                        <small class="text-danger fw-semibold">
                                            <i class="bx bx-chevron-down"></i>
                                            11.9%
                                        </small>
                                    </div>
                                    <small class="text-muted">Australia</small>
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">86k</h6>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset('dashboard')}}/assets/svg/flags/fr.svg" alt="User" class="rounded-circle">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$45</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            16.2%
                                        </small>
                                    </div>
                                    <small class="text-muted">France</small>
                                </div>
                                <div class="user-progress">
                                    <h6 class="mb-0">42k</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Sales By Country -->

        <!-- Sales Stats -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between mb-30">
                    <h5 class="card-title m-0 me-2">Sales Stats</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="salesStatsID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesStatsID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div id="salesStats" style="min-height: 318.7px;">
                    <div id="apexchartswehw1hd" class="apexcharts-canvas apexchartswehw1hd apexcharts-theme-light"
                        style="width: 445px; height: 318.7px;"><svg id="SvgjsSvg2153" width="445" height="318.7"
                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                            style="background: transparent;">
                            <g id="SvgjsG2155" class="apexcharts-inner apexcharts-graphical"
                                transform="translate(65.5, 0)">
                                <defs id="SvgjsDefs2154">
                                    <clipPath id="gridRectMaskwehw1hd">
                                        <rect id="SvgjsRect2157" width="322" height="340" x="-3" y="-1"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                    <clipPath id="forecastMaskwehw1hd"></clipPath>
                                    <clipPath id="nonForecastMaskwehw1hd"></clipPath>
                                    <clipPath id="gridRectMarkerMaskwehw1hd">
                                        <rect id="SvgjsRect2158" width="320" height="342" x="-2" y="-2"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                    </clipPath>
                                </defs>
                                <g id="SvgjsG2159" class="apexcharts-radialbar">
                                    <g id="SvgjsG2160">
                                        <g id="SvgjsG2161" class="apexcharts-tracks">
                                            <g id="SvgjsG2162" class="apexcharts-radialbar-track apexcharts-track"
                                                rel="1">
                                                <path id="apexcharts-radialbarTrack-0"
                                                    d="M 158 35.13109756097559 A 122.86890243902441 122.86890243902441 0 1 1 157.97855533115012 35.131099432375976"
                                                    fill="none" fill-opacity="1" stroke="rgba(236,238,241,0.85)"
                                                    stroke-opacity="1" stroke-linecap="round"
                                                    stroke-width="6.759146341463415" stroke-dasharray="0"
                                                    class="apexcharts-radialbar-area"
                                                    data:pathOrig="M 158 35.13109756097559 A 122.86890243902441 122.86890243902441 0 1 1 157.97855533115012 35.131099432375976">
                                                </path>
                                            </g>
                                        </g>
                                        <g id="SvgjsG2164">
                                            <image id="SvgjsImage2165"
                                                xlink:href="{{asset('dashboard')}}/assets/img/icons/misc/arrow-star.png" width="65"
                                                height="55" x="125.5" y="95.5"></image>
                                            <g id="SvgjsG2170" class="apexcharts-series apexcharts-radial-series"
                                                seriesName="Sales" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath2171"
                                                    d="M 158 35.13109756097559 A 122.86890243902441 122.86890243902441 0 1 1 35.13109756097559 158.00000000000003"
                                                    fill="none" fill-opacity="0.85" stroke="rgba(113,221,55,0.85)"
                                                    stroke-opacity="1" stroke-linecap="round"
                                                    stroke-width="13.51829268292683" stroke-dasharray="0"
                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                    data:angle="270" data:value="75" index="0" j="0"
                                                    data:pathOrig="M 158 35.13109756097559 A 122.86890243902441 122.86890243902441 0 1 1 35.13109756097559 158.00000000000003">
                                                </path>
                                            </g>
                                            <circle id="SvgjsCircle2166" r="69.4893292682927" cx="158"
                                                cy="158" class="apexcharts-radialbar-hollow" fill="transparent">
                                            </circle>
                                            <g id="SvgjsG2167" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                    id="SvgjsText2168" font-family="Helvetica, Arial, sans-serif"
                                                    x="158" y="218" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="15px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">Sales</text><text
                                                    id="SvgjsText2169" font-family="Helvetica, Arial, sans-serif"
                                                    x="158" y="194" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="32px" font-weight="400" fill="#566a7f"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: Helvetica, Arial, sans-serif;">75%</text></g>
                                        </g>
                                    </g>
                                </g>
                                <line id="SvgjsLine2172" x1="0" y1="0" x2="316"
                                    y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                <line id="SvgjsLine2173" x1="0" y1="0" x2="316"
                                    y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"></line>
                            </g>
                            <g id="SvgjsG2156" class="apexcharts-annotations"></g>
                        </svg>
                        <div class="apexcharts-legend"></div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-around">
                        <div class="d-flex align-items-center lh-1 mb-3 mb-sm-0">
                            <span class="badge badge-dot bg-success me-2"></span> Conversion Ratio
                        </div>
                        <div class="d-flex align-items-center lh-1 mb-3 mb-sm-0">
                            <span class="badge badge-dot bg-label-secondary me-2"></span> Total requirements
                        </div>
                    </div>
                </div>
                <div class="resize-triggers">
                    <div class="expand-trigger">
                        <div style="width: 446px; height: 458px;"></div>
                    </div>
                    <div class="contract-trigger"></div>
                </div>
            </div>
        </div>
        <!--/ Sales Stats -->

        <!-- Team Members -->
        <div class="col-md-6 col-lg-5 mb-md-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Team Members</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="teamMemberList" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="teamMemberList">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Project</th>
                                <th>Task</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar me-2">
                                            <img src="{{asset('dashboard')}}/assets/img/avatars/17.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-truncate">Nathan Wagner</h6>
                                            <small class="text-truncate text-muted">iOS Developer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-primary rounded-pill text-uppercase">Zipcar</span></td>
                                <td><small class="fw-semibold">87/135</small></td>
                                <td style="position: relative;">
                                    <div class="chart-progress" data-color="primary" data-series="65"
                                        style="min-height: 37.7px;">
                                        <div id="apexchartszf58l1mu"
                                            class="apexcharts-canvas apexchartszf58l1mu apexcharts-theme-light"
                                            style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg1590" width="45"
                                                height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1592" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-5, -15)">
                                                    <defs id="SvgjsDefs1591">
                                                        <clipPath id="gridRectMaskzf58l1mu">
                                                            <rect id="SvgjsRect1594" width="71" height="77"
                                                                x="-3" y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskzf58l1mu"></clipPath>
                                                        <clipPath id="nonForecastMaskzf58l1mu"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskzf58l1mu">
                                                            <rect id="SvgjsRect1595" width="69" height="79"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1596" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1597">
                                                            <g id="SvgjsG1598" class="apexcharts-tracks">
                                                                <g id="SvgjsG1599"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#8897aa1a" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.501036585365854"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1601">
                                                                <g id="SvgjsG1603"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1604"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 40.580255190813304"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(105,108,255,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="4.640243902439025"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="234" data:value="65"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 40.580255190813304">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1602" r="6.4964329268292715"
                                                                    cx="32.5" cy="32.5"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1605" x1="0" y1="0"
                                                        x2="65" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1606" x1="0" y1="0"
                                                        x2="65" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1593" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 126px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar me-2">
                                            <img src="{{asset('dashboard')}}/assets/img/avatars/8.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-truncate">Emma Bowen</h6>
                                            <small class="text-truncate text-muted">UI/UX Designer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-danger rounded-pill text-uppercase">Bitbank</span></td>
                                <td><small class="fw-semibold">320/440</small></td>
                                <td style="position: relative;">
                                    <div class="chart-progress" data-color="danger" data-series="85"
                                        style="min-height: 37.7px;">
                                        <div id="apexchartscukydzb3"
                                            class="apexcharts-canvas apexchartscukydzb3 apexcharts-theme-light"
                                            style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg1607" width="45"
                                                height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1609" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-5, -15)">
                                                    <defs id="SvgjsDefs1608">
                                                        <clipPath id="gridRectMaskcukydzb3">
                                                            <rect id="SvgjsRect1611" width="71" height="77"
                                                                x="-3" y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskcukydzb3"></clipPath>
                                                        <clipPath id="nonForecastMaskcukydzb3"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskcukydzb3">
                                                            <rect id="SvgjsRect1612" width="69" height="79"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1613" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1614">
                                                            <g id="SvgjsG1615" class="apexcharts-tracks">
                                                                <g id="SvgjsG1616"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#8897aa1a" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.501036585365854"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1618">
                                                                <g id="SvgjsG1620"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1621"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(255,62,29,0.85)" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.640243902439025"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="306" data:value="85"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 21.378482842571223 24.419744809186703">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1619" r="6.4964329268292715"
                                                                    cx="32.5" cy="32.5"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1622" x1="0" y1="0"
                                                        x2="65" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1623" x1="0" y1="0"
                                                        x2="65" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1610" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 126px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar me-2">
                                            <span class="avatar-initial rounded-circle bg-label-warning">AM</span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-truncate">Adrian McGuire</h6>
                                            <small class="text-truncate text-muted">PHP Developer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-warning rounded-pill text-uppercase">Payers</span></td>
                                <td><small class="fw-semibold">50/82</small></td>
                                <td style="position: relative;">
                                    <div class="chart-progress" data-color="warning" data-series="73"
                                        style="min-height: 37.7px;">
                                        <div id="apexchartst4wv1jybh"
                                            class="apexcharts-canvas apexchartst4wv1jybh apexcharts-theme-light"
                                            style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg1624" width="45"
                                                height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1626" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-5, -15)">
                                                    <defs id="SvgjsDefs1625">
                                                        <clipPath id="gridRectMaskt4wv1jybh">
                                                            <rect id="SvgjsRect1628" width="71" height="77"
                                                                x="-3" y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskt4wv1jybh"></clipPath>
                                                        <clipPath id="nonForecastMaskt4wv1jybh"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskt4wv1jybh">
                                                            <rect id="SvgjsRect1629" width="69" height="79"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1630" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1631">
                                                            <g id="SvgjsG1632" class="apexcharts-tracks">
                                                                <g id="SvgjsG1633"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#8897aa1a" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.501036585365854"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1635">
                                                                <g id="SvgjsG1637"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1638"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.855516470272192 34.17533191894454"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.640243902439025"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="263" data:value="73"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.855516470272192 34.17533191894454">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1636" r="6.4964329268292715"
                                                                    cx="32.5" cy="32.5"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1639" x1="0" y1="0"
                                                        x2="65" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1640" x1="0" y1="0"
                                                        x2="65" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1627" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 126px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar me-2">
                                            <img src="{{asset('dashboard')}}/assets/img/avatars/2.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-truncate">Alma Gonzalez</h6>
                                            <small class="text-truncate text-muted">Product Manager</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-info rounded-pill text-uppercase">Brandi</span></td>
                                <td><small class="fw-semibold">98/260</small></td>
                                <td style="position: relative;">
                                    <div class="chart-progress" data-color="info" data-series="61"
                                        style="min-height: 37.7px;">
                                        <div id="apexchartsplch07d8h"
                                            class="apexcharts-canvas apexchartsplch07d8h apexcharts-theme-light"
                                            style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg1641" width="45"
                                                height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1643" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-5, -15)">
                                                    <defs id="SvgjsDefs1642">
                                                        <clipPath id="gridRectMaskplch07d8h">
                                                            <rect id="SvgjsRect1645" width="71" height="77"
                                                                x="-3" y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskplch07d8h"></clipPath>
                                                        <clipPath id="nonForecastMaskplch07d8h"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskplch07d8h">
                                                            <rect id="SvgjsRect1646" width="69" height="79"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1647" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1648">
                                                            <g id="SvgjsG1649" class="apexcharts-tracks">
                                                                <g id="SvgjsG1650"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#8897aa1a" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.501036585365854"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1652">
                                                                <g id="SvgjsG1654"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1655"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 23.663630085132297 43.030775591534976"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(3,195,236,0.85)" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.640243902439025"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="220" data:value="61"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 23.663630085132297 43.030775591534976">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1653" r="6.4964329268292715"
                                                                    cx="32.5" cy="32.5"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1656" x1="0" y1="0"
                                                        x2="65" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1657" x1="0" y1="0"
                                                        x2="65" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1644" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 126px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar me-2">
                                            <img src="{{asset('dashboard')}}/assets/img/avatars/11.png" alt="Avatar"
                                                class="rounded-circle">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h6 class="mb-0 text-truncate">Allan kristian</h6>
                                            <small class="text-truncate text-muted">Frontend Designer</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-label-success rounded-pill text-uppercase">Crypter</span></td>
                                <td><small class="fw-semibold">690/760</small></td>
                                <td style="position: relative;">
                                    <div class="chart-progress" data-color="success" data-series="77"
                                        style="min-height: 37.7px;">
                                        <div id="apexcharts74yyxhlc"
                                            class="apexcharts-canvas apexcharts74yyxhlc apexcharts-theme-light"
                                            style="width: 45px; height: 37.7px;"><svg id="SvgjsSvg1658" width="45"
                                                height="37.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1660" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-5, -15)">
                                                    <defs id="SvgjsDefs1659">
                                                        <clipPath id="gridRectMask74yyxhlc">
                                                            <rect id="SvgjsRect1662" width="71" height="77"
                                                                x="-3" y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask74yyxhlc"></clipPath>
                                                        <clipPath id="nonForecastMask74yyxhlc"></clipPath>
                                                        <clipPath id="gridRectMarkerMask74yyxhlc">
                                                            <rect id="SvgjsRect1663" width="69" height="79"
                                                                x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1664" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1665">
                                                            <g id="SvgjsG1666" class="apexcharts-tracks">
                                                                <g id="SvgjsG1667"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="#8897aa1a" stroke-opacity="1"
                                                                        stroke-linecap="butt"
                                                                        stroke-width="4.501036585365854"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 32.49760070440326 18.75304898986584">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1669">
                                                                <g id="SvgjsG1671"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="Progress" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1672"
                                                                        d="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.855516470272192 30.824668081055453"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(113,221,55,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="butt"
                                                                        stroke-width="4.640243902439025"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="277" data:value="77"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 32.5 18.753048780487802 A 13.746951219512198 13.746951219512198 0 1 1 18.855516470272192 30.824668081055453">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1670" r="6.4964329268292715"
                                                                    cx="32.5" cy="32.5"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1673" x1="0" y1="0"
                                                        x2="65" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1674" x1="0" y1="0"
                                                        x2="65" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1661" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 126px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Team Members -->

        <!-- Customer Table -->
        <div class="col-md-6 col-lg-7 mb-0">
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="invoice-list-table table border-top">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th class="cell-fit">Paid By</th>
                                <th class="cell-fit">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <img src="{{asset('dashboard')}}/assets/img/avatars/7.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="pages-profile-user.html"
                                                class="text-body text-truncate fw-semibold">Henry Barnes</a>
                                            <small class="text-truncate text-muted">jok@puc.co.uk</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$459.65</td>
                                <td><span class="badge bg-label-success"> Paid </span></td>
                                <td>
                                    <img src="{{asset('dashboard')}}/assets/img/icons/payments/master-light.png" class="img-fluid"
                                        width="50" alt="masterCard"
                                        data-app-light-img="icons/payments/master-light.png"
                                        data-app-dark-img="icons/payments/master-dark.png">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:;"
                                                    class="dropdown-item delete-record text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <img src="{{asset('dashboard')}}/assets/img/avatars/20.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="pages-profile-user.html"
                                                class="text-body text-truncate fw-semibold">Hallie Warner</a>
                                            <small class="text-truncate text-muted">hellie@war.co.uk</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$93.81</td>
                                <td><span class="badge bg-label-warning"> Pending </span></td>
                                <td>
                                    <img src="{{asset('dashboard')}}/assets/img/icons/payments/visa-light.png" class="img-fluid"
                                        width="50" alt="visaCard"
                                        data-app-light-img="icons/payments/visa-light.png"
                                        data-app-dark-img="icons/payments/visa-dark.png">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:;"
                                                    class="dropdown-item delete-record text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <img src="{{asset('dashboard')}}/assets/img/avatars/9.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="pages-profile-user.html"
                                                class="text-body text-truncate fw-semibold">Gerald Flowers</a>
                                            <small class="text-truncate text-muted">initus@odemi.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$934.35</td>
                                <td><span class="badge bg-label-warning"> Pending </span></td>
                                <td>
                                    <img src="{{asset('dashboard')}}/assets/img/icons/payments/visa-light.png" class="img-fluid"
                                        width="50" alt="visaCard"
                                        data-app-light-img="icons/payments/visa-light.png"
                                        data-app-dark-img="icons/payments/visa-dark.png">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:;"
                                                    class="dropdown-item delete-record text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <img src="{{asset('dashboard')}}/assets/img/avatars/14.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="pages-profile-user.html"
                                                class="text-body text-truncate fw-semibold">John Davidson</a>
                                            <small class="text-truncate text-muted">jtum@upkesja.gov</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$794.97</td>
                                <td><span class="badge bg-label-success"> Paid </span></td>
                                <td>
                                    <img src="{{asset('dashboard')}}/assets/img/icons/payments/paypal-light.png" class="img-fluid"
                                        width="50" alt="paypalCard"
                                        data-app-light-img="icons/payments/paypal-light.png"
                                        data-app-dark-img="icons/payments/paypal-dark.png">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:;"
                                                    class="dropdown-item delete-record text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <span class="avatar-initial rounded-circle bg-label-warning">JH</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="pages-profile-user.html"
                                                class="text-body text-truncate fw-semibold">Jayden Harris</a>
                                            <small class="text-truncate text-muted">wipare@tin.com</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$19.49</td>
                                <td><span class="badge bg-label-success"> Paid </span></td>
                                <td>
                                    <img src="{{asset('dashboard')}}/assets/img/icons/payments/master-light.png" class="img-fluid"
                                        width="50" alt="masterCard"
                                        data-app-light-img="icons/payments/master-light.png"
                                        data-app-dark-img="icons/payments/master-dark.png">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:;"
                                                    class="dropdown-item delete-record text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="avatar-wrapper">
                                            <div class="avatar avatar-sm me-2">
                                                <img src="{{asset('dashboard')}}/assets/img/avatars/8.png" alt="Avatar"
                                                    class="rounded-circle">
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="pages-profile-user.html"
                                                class="text-body text-truncate fw-semibold">Rena Ferguson</a>
                                            <small class="text-truncate text-muted">nur@kaomor.edu</small>
                                        </div>
                                    </div>
                                </td>
                                <td>$636.27</td>
                                <td><span class="badge bg-label-danger"> Failed </span></td>
                                <td>
                                    <img src="{{asset('dashboard')}}/assets/img/icons/payments/paypal-light.png" class="img-fluid"
                                        width="50" alt="paypalCard"
                                        data-app-light-img="icons/payments/paypal-light.png"
                                        data-app-dark-img="icons/payments/paypal-dark.png">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="btn dropdown-toggle hide-arrow text-body p-0"
                                                data-bs-toggle="dropdown"><i
                                                    class="bx bx-dots-vertical-rounded"></i></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                                                <a href="javascript:;" class="dropdown-item">Duplicate</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:;"
                                                    class="dropdown-item delete-record text-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--/ Customer Table -->
    </div>

@endsection
@push('js')
@endpush
