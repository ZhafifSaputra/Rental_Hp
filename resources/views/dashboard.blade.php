@extends('admin.app')
@section('konten')
    <div class="main-container">
        <div class="pd-ltr-20">
            @if (session('sukses'))
                <div id="flash-success" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ session('sukses') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="vendors/images/banner-img.png" alt="">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Selamat Datang <div class="weight-600 font-30 text-blue">{{ Auth::user()->nama_lengkap }}</div>
                        </h4>
                        <p class="text-muted">
                            Sistem sewa handphone ini membantu Anda mengatur peminjaman, pengembalian, serta memantau status
                            perangkat dengan praktis dan cepat.
                        </p>
                    </div>
                </div>
            </div>
            @if (Auth::user()->role == 'admin')
                <div class="row">
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">{{ $totalProduk }}</div>
                                    <div class="weight-600 font-14">Produk</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart2"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">{{ $totalMenunggu }}</div>
                                    <div class="weight-600 font-14">Menunggu</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart3"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">{{ $totalDikembalikan }}</div>
                                    <div class="weight-600 font-14">Dikembalikan</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data">
                                    <div id="chart4"></div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">Rp {{ number_format($totalPendapatan, 0, ',', '.') }}</div>
                                    <div class="weight-600 font-14">Penghasilan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-8 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Activity (Area Chart)</h2>
                            <div id="chartActivityArea"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Lead Target</h2>
                            <div id="chartLeadTarget"></div>
                            <p id="targetMessage" class="text-center mt-2 text-primary" style="font-weight: 500;"></p>

                        </div>
                    </div>
                </div>
            @else
                {{-- Dashboard untuk Customer --}}
                <div class="row">
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $totalDisewa }}</div>
                                <div class="weight-600 font-14">Sedang Disewa</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $totalMenunggu }}</div>
                                <div class="weight-600 font-14">Menunggu Konfirmasi</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="widget-data">
                                <div class="h4 mb-0">{{ $totalDikembalikan }}</div>
                                <div class="weight-600 font-14">Selesai</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="widget-data">
                                <div class="h4 mb-0">Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</div>
                                <div class="weight-600 font-14">Total Pengeluaran</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Chart Customer --}}
                <div class="row">
                    <div class="col-xl-8 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Aktivitas Sewa</h2>
                            <div id="chartCustomerActivity"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-30">
                        <div class="card-box height-100-p pd-20">
                            <h2 class="h4 mb-20">Pengeluaran Bulanan</h2>
                            <div id="chartCustomerPengeluaran"></div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'area',
                height: 400,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: true,
                    }
                }
            },
            colors: ['#1E90FF', '#28a745'],
            series: [{
                    name: 'Jumlah Sewa',
                    data: @json($jumlahSewa)
                },
                {
                    name: 'Pendapatan',
                    data: @json($pendapatan)
                }
            ],
            xaxis: {
                categories: @json($labels),
                title: {
                    text: 'Bulan'
                },
                labels: {
                    rotate: -45,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: [{
                    title: {
                        text: 'Jumlah Sewa'
                    },
                    labels: {
                        formatter: function(val) {
                            return val.toFixed(0);
                        }
                    }
                },
                {
                    opposite: true,
                    title: {
                        text: 'Pendapatan (Rp)'
                    },
                    labels: {
                        formatter: function(val) {
                            return 'Rp ' + val.toLocaleString();
                        }
                    }
                }
            ],
            dataLabels: {
                enabled: true,
                enabledOnSeries: [0]
            },
            legend: {
                position: 'top',
                horizontalAlign: 'center'
            },
            tooltip: {
                shared: true,
                intersect: false
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.9,
                    stops: [0, 90, 100]
                }
            },
            responsive: [{
                breakpoint: 768,
                options: {
                    chart: {
                        height: 300
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#chartActivityArea"), options);
        chart.render();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const nilaiAktual = {{ $totalPendapatan }}; // Pendapatan aktual dari controller
        const target = 10000000;
        const persentase = Math.round((nilaiAktual / target) * 100);

        // Tampilkan pesan jika target tercapai
        const messageEl = document.getElementById("targetMessage");
        if (persentase >= 100) {
            messageEl.innerText = "🎉 Target sudah tercapai!";
            messageEl.style.color = "#28a745";
        } else {
            messageEl.innerText = "Target: Rp10.000.000";
            messageEl.style.color = "#333";
        }

        var options = {
            chart: {
                type: 'radialBar',
                height: 300
            },
            series: [persentase],
            labels: ['Progress'],
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    hollow: {
                        size: '70%',
                        background: '#fff',
                        dropShadow: {
                            enabled: true,
                            top: 2,
                            blur: 4,
                            opacity: 0.24
                        }
                    },
                    track: {
                        background: '#e7e7e7',
                        strokeWidth: '100%',
                        dropShadow: {
                            enabled: true,
                            top: -3,
                            blur: 4,
                            opacity: 0.35
                        }
                    },
                    dataLabels: {
                        name: {
                            offsetY: -10,
                            color: '#888',
                            fontSize: '17px'
                        },
                        value: {
                            formatter: function(val) {
                                return val + '%';
                            },
                            color: '#111',
                            fontSize: '36px'
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'horizontal',
                    gradientToColors: ['#00b894'],
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                }
            },
            stroke: {
                lineCap: 'round'
            }
        };

        var chart = new ApexCharts(document.querySelector("#chartLeadTarget"), options);
        chart.render();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Chart aktivitas (jumlah sewa per bulan)
            var optionsActivity = {
                chart: {
                    type: 'area',
                    height: 300
                },
                series: [{
                    name: 'Jumlah Sewa',
                    data: @json($jumlahSewa)
                }],
                xaxis: {
                    categories: @json($labels)
                }
            };
            new ApexCharts(document.querySelector("#chartCustomerActivity"), optionsActivity).render();

            // Chart pengeluaran bulanan
            var optionsPengeluaran = {
                chart: {
                    type: 'bar',
                    height: 300
                },
                series: [{
                    name: 'Pengeluaran',
                    data: @json($pengeluaran) // <-- angka mentah dari controller
                }],
                xaxis: {
                    categories: @json($labels)
                },
                yaxis: {
                    labels: {
                        formatter: function(val) {
                            return "Rp " + val.toLocaleString("id-ID");
                            // contoh: Rp 1.500.000
                        }
                    }
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "Rp " + val.toLocaleString("id-ID");
                        }
                    }
                }
            };
            new ApexCharts(document.querySelector("#chartCustomerPengeluaran"), optionsPengeluaran).render();
        });
    </script>
@endsection
