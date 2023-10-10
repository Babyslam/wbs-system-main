@extends('layouts.user_type.auth')

@section('content')
    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
        <div class="chart px-4 pe-6">
            <canvas id="chart-bars" class="chart-canvas" height="400"></canvas>
        </div>
    </div>
@endsection
@push('dashboard')
    <script>
        window.onload = function() {
            var ctx = document.getElementById("chart-bars").getContext("2d");

            const pengaduanMasuk = <?php echo json_encode($pengaduan_masuk); ?>;
            const pengaduanDitolak = <?php echo json_encode($pengaduan_ditolak); ?>;
            const pengaduanTercatat = <?php echo json_encode($pengaduan_tercatat); ?>;
            const pengaduanPenelahaan = <?php echo json_encode($pengaduan_penelahaan); ?>;
            const pengaduanAuditInvestigasi = <?php echo json_encode($pengaduan_audit_investigasi); ?>;
            const pengaduanPelimpahan = <?php echo json_encode($pengaduan_pelimpahan); ?>;

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Pengaduan Masuk",
                        "Pengaduan Ditolak", "Tercatat", "Penelahaan", "Audit Investigasi", "Pelimpahan",
                    ],
                    datasets: [{
                        label: "Jumlah",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "#fff",
                        data: [pengaduanMasuk, pengaduanDitolak, pengaduanTercatat, pengaduanPenelahaan,
                            pengaduanAuditInvestigasi, pengaduanPelimpahan
                        ],
                        maxBarThickness: 20
                    }],
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: 'y',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 15,
                                font: {
                                    size: 14,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false
                            },
                            ticks: {
                                display: false
                            },
                        },
                    },
                },
            });
        }
    </script>
@endpush
