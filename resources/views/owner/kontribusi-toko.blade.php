@extends('layouts.owner')

@section('content')

<div class="kontribusi-main-content">
    <div class="kontribusi-section">

        <div class="kontribusi-sec-header">
            <div class="kontribusi-header-container">
                <div class="kontribusi-heading">
                    <div class="kontribusi-title">Kontribusi Penjualan Toko</div>
                </div>
                <p class="kontribusi-subtitle">Persentase kontribusi penjualan per cabang</p>
            </div>
        </div>

        <div class="kontribusi-container">

            <!-- Card utama -->
            <div class="kontribusi-card-wrapper">
                <div class="kontribusi-card-main">

                    <div class="kontribusi-card-header">
                        <div class="kontribusi-card-title-wrapper">
                            <div class="kontribusi-card-title">Kontribusi Penjualan per Toko</div>
                        </div>
                        <div class="kontribusi-card-subtitle-wrapper">
                            <div class="kontribusi-card-subtitle">Distribusi penjualan berdasarkan periode</div>
                        </div>
                    </div>

                    <!-- Dropdown periode -->
                    <div class="kontribusi-filter-frame">
                        <div class="kontribusi-filter-button">
                            <img class="kontribusi-filter-icon" src="{{ asset('img/toko.png') }}" />
                            <div class="kontribusi-filter-text">
                                <div class="kontribusi-filter-label">Periode Tahun</div>
                            </div>
                            <img class="kontribusi-filter-icon" src="{{ asset('img/dropdown.png') }}" />
                        </div>

                        <div class="kontribusi-dropdown">
                            <div class="kontribusi-dropdown-active">
                                <div class="kontribusi-dot-blue"></div>
                                <div class="kontribusi-dropdown-active-text">Semua Cabang</div>
                                <div class="kontribusi-check-wrapper">
                                    <img class="kontribusi-check-icon" src="{{ asset('img/vector-5.svg') }}" />
                                </div>
                            </div>

                            <div class="kontribusi-dropdown-item">
                                <div class="kontribusi-dot-blue"></div>
                                <div class="kontribusi-dropdown-text">Toko Jakarta Pusat</div>
                            </div>

                            <div class="kontribusi-dropdown-item">
                                <div class="kontribusi-dot-green"></div>
                                <div class="kontribusi-dropdown-text">Toko Bandung Kota</div>
                            </div>

                            <div class="kontribusi-dropdown-item">
                                <div class="kontribusi-dot-yellow"></div>
                                <div class="kontribusi-dropdown-text">Toko Surabaya</div>
                            </div>

                            <div class="kontribusi-dropdown-item">
                                <div class="kontribusi-dot-red"></div>
                                <div class="kontribusi-dropdown-text">Toko Yogyakarta</div>
                            </div>

                            <div class="kontribusi-dropdown-item">
                                <div class="kontribusi-dot-purple"></div>
                                <div class="kontribusi-dropdown-text">Toko Medan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Area chart placeholder -->
                    <div class="kontribusi-chart-placeholder"></div>

                    <!-- Legend -->
                    <div class="kontribusi-legend">

                        <div class="kontribusi-legend-row">
                            <div class="kontribusi-legend-color-blue"></div>
                            <div class="kontribusi-legend-name">Toko Jakarta Pusat</div>
                            <div class="kontribusi-legend-percent">29.7%</div>
                            <div class="kontribusi-legend-value">Rp654.400.000</div>
                        </div>

                        <div class="kontribusi-legend-row">
                            <div class="kontribusi-legend-color-green"></div>
                            <div class="kontribusi-legend-name">Toko Bandung Kota</div>
                            <div class="kontribusi-legend-percent">22.2%</div>
                            <div class="kontribusi-legend-value">Rp488.000.000</div>
                        </div>

                        <div class="kontribusi-legend-row">
                            <div class="kontribusi-legend-color-yellow"></div>
                            <div class="kontribusi-legend-name">Toko Surabaya</div>
                            <div class="kontribusi-legend-percent">25.2%</div>
                            <div class="kontribusi-legend-value">Rp555.000.000</div>
                        </div>

                        <div class="kontribusi-legend-row">
                            <div class="kontribusi-legend-color-red"></div>
                            <div class="kontribusi-legend-name">Toko Yogyakarta</div>
                            <div class="kontribusi-legend-percent">3.1%</div>
                            <div class="kontribusi-legend-value">Rp69.000.000</div>
                        </div>

                        <div class="kontribusi-legend-row">
                            <div class="kontribusi-legend-color-purple"></div>
                            <div class="kontribusi-legend-name">Toko Medan</div>
                            <div class="kontribusi-legend-percent">19.8%</div>
                            <div class="kontribusi-legend-value">Rp435.000.000</div>
                        </div>

                        <div class="kontribusi-legend-total">
                            <div class="kontribusi-legend-color-black"></div>
                            <div class="kontribusi-total-name">Total</div>
                            <div class="kontribusi-total-percent">100%</div>
                            <div class="kontribusi-total-value">Rp2.201.400.000</div>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Card Kontribusi Terbesar -->
            <div class="kontribusi-card-biggest">
                <div class="kontribusi-small-card-title-wrapper">
                    <div class="kontribusi-small-card-title">Kontribusi Terbesar</div>
                </div>

                <div class="kontribusi-biggest-content">
                    <div class="kontribusi-biggest-icon-wrapper">
                        <div class="kontribusi-icon-inner">
                            <img class="kontribusi-icon-chart-2" src="{{ asset('img/kontribusibesar.png') }}" />
                        </div>
                    </div>

                    <div class="kontribusi-biggest-text">
                        <div class="kontribusi-store-name">Toko Jakarta Pusat</div>
                        <div class="kontribusi-percent-wrapper">
                            <div class="kontribusi-percent-blue">29.7%</div>
                        </div>
                    </div>
                </div>

                <div class="kontribusi-amount-wrapper">
                    <div class="kontribusi-amount">Rp654.400.000</div>
                </div>

                <div class="kontribusi-progress-wrapper">
                    <div class="kontribusi-progress-blue"></div>
                </div>
            </div>

            <!-- Card Kontribusi Terkecil -->
            <div class="kontribusi-card-smallest">
                <div class="kontribusi-small-card-title-wrapper">
                    <div class="kontribusi-small-card-title">Kontribusi Terkecil</div>
                </div>

                <div class="kontribusi-smallest-content">
                    <div class="kontribusi-smallest-icon-wrapper">
                        <div class="kontribusi-icon-inner">
                            <img class="kontribusi-icon-gray-1" src="{{ asset('img/kontribusikecil.png') }}" />
                        </div>
                    </div>

                    <div class="kontribusi-smallest-text">
                        <div class="kontribusi-store-name-small">Toko Yogyakarta</div>
                        <div class="kontribusi-percent-wrapper">
                            <div class="kontribusi-percent-gray">3.1%</div>
                        </div>
                    </div>
                </div>

                <div class="kontribusi-amount-wrapper">
                    <div class="kontribusi-amount-small">Rp69.000.000</div>
                </div>

                <div class="kontribusi-progress-gray"></div>
            </div>

            <!-- Card Ringkasan -->
            <div class="kontribusi-card-summary">
                <div class="kontribusi-small-card-title-wrapper">
                    <div class="kontribusi-summary-title">Ringkasan</div>
                </div>

                <div class="kontribusi-summary-row kontribusi-summary-row-large">
                    <div class="kontribusi-summary-label-wrap">
                        <div class="kontribusi-summary-label">Total Penjualan</div>
                    </div>
                    <div class="kontribusi-summary-value-wrap">
                        <div class="kontribusi-summary-value">Rp2.201.400.000</div>
                    </div>
                </div>

                <div class="kontribusi-summary-row">
                    <div class="kontribusi-summary-label-wrap-2">
                        <div class="kontribusi-summary-label-single">Jumlah Cabang</div>
                    </div>
                    <div class="kontribusi-summary-value-wrap-2">
                        <div class="kontribusi-summary-value">5 cabang</div>
                    </div>
                </div>

                <div class="kontribusi-summary-row kontribusi-summary-row-mid">
                    <div class="kontribusi-summary-label-wrap-3">
                        <div class="kontribusi-summary-label-single">Cabang Aktif</div>
                    </div>
                    <div class="kontribusi-summary-value-wrap-3">
                        <div class="kontribusi-summary-value">4 cabang</div>
                    </div>
                </div>

                <div class="kontribusi-summary-row kontribusi-summary-row-large-no-border">
                    <div class="kontribusi-summary-label-wrap-4">
                        <div class="kontribusi-summary-label">Rata-rata per Cabang</div>
                    </div>
                    <div class="kontribusi-summary-value-wrap-4">
                        <div class="kontribusi-summary-value">Rp440.280.000</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection