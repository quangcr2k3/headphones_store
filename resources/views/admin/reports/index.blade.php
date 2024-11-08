@extends('admin.layouts.app')

@section('title', 'Báo cáo')

@section('content_admin')
    <div class="container">
        <h1>THỐNG KÊ BÁO CÁO DOANH THU</h1>

        <div class="mt-4">
            <h4>Tổng số đơn hàng: <strong>{{ $totalOrders }}</strong></h4>
            <h4>Tổng số khách hàng: <strong>{{ $totalCustomers }}</strong></h4>
        </div>

        <h3>Doanh thu theo từng danh mục:</h3>
        <div class="chart-container">
            <canvas id="categoryRevenueChart"></canvas>
        </div>

        <h3>Doanh thu theo ngày:</h3>
        <div class="chart-container">
            <canvas id="revenueByDateChart"></canvas>
        </div>

        <h3>Doanh thu theo tháng:</h3>
        <div class="chart-container">
            <canvas id="revenueByMonthChart"></canvas>
        </div>

        <h3>Doanh thu theo năm:</h3>
        <div class="chart-container">
            <canvas id="revenueByYearChart"></canvas>
        </div>

        <h3>Doanh thu theo phương thức thanh toán:</h3>
        <div class="chart-container">
            <canvas id="revenueByPaymentMethodChart"></canvas>
        </div>
    </div>

    <style>
        .chart-container {
            position: relative;
            height: 80vh;
            width: 100%;
            margin: 20px 0;
            background-color: #f9f9f9;
            /* Màu nền nhạt */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Hiệu ứng đổ bóng */
            border-radius: 10px;
            /* Bo tròn góc */
            padding: 20px;
            /* Thêm khoảng cách bên trong */
            display: flex;
            /* Sử dụng flexbox */
            justify-content: center;
            /* Căn giữa theo chiều ngang */
            align-items: center;
            /* Căn giữa theo chiều dọc */
        }

        canvas {
            background-color: #ffffff;
            /* Màu nền cho biểu đồ */
            border-radius: 5px;
            /* Bo tròn nhẹ cho biểu đồ */
            max-width: 100%;
            /* Đảm bảo canvas không vượt quá kích thước container */
            height: auto;
            /* Giữ nguyên tỷ lệ khi thu phóng */
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Biểu đồ doanh thu theo từng danh mục (Bar chart)
            var categoryLabels = @json($categoryRevenue->pluck('category_id'));
            var categoryData = @json($categoryRevenue->pluck('total_revenue'));
            var ctx1 = document.getElementById('categoryRevenueChart').getContext('2d');
            var categoryRevenueChart = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: categoryLabels,
                    datasets: [{
                        label: 'Doanh thu',
                        data: categoryData,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // 2. Biểu đồ doanh thu theo ngày (Line chart)
            var dateLabels = @json($revenueByDate->pluck('date'));
            var dateData = @json($revenueByDate->pluck('total_revenue'));
            var ctx2 = document.getElementById('revenueByDateChart').getContext('2d');
            var revenueByDateChart = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: dateLabels,
                    datasets: [{
                        label: 'Doanh thu theo ngày',
                        data: dateData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // 3. Biểu đồ doanh thu theo tháng (Bar chart)
            var monthLabels = @json($revenueByMonth->pluck('month'));
            var monthData = @json($revenueByMonth->pluck('total_revenue'));
            var ctx3 = document.getElementById('revenueByMonthChart').getContext('2d');
            var revenueByMonthChart = new Chart(ctx3, {
                type: 'bar',
                data: {
                    labels: monthLabels,
                    datasets: [{
                        label: 'Doanh thu theo tháng',
                        data: monthData,
                        backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        borderColor: 'rgba(153, 102, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // 4. Biểu đồ doanh thu theo năm (Bar chart)
            var yearLabels = @json($revenueByYear->pluck('year'));
            var yearData = @json($revenueByYear->pluck('total_revenue'));
            var ctx4 = document.getElementById('revenueByYearChart').getContext('2d');
            var revenueByYearChart = new Chart(ctx4, {
                type: 'bar',
                data: {
                    labels: yearLabels,
                    datasets: [{
                        label: 'Doanh thu theo năm',
                        data: yearData,
                        backgroundColor: 'rgba(255, 159, 64, 0.5)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // 5. Biểu đồ doanh thu theo phương thức thanh toán (Pie chart)
            var paymentMethodLabels = @json($revenueByPaymentMethod->pluck('payment_method'));
            var paymentMethodData = @json($revenueByPaymentMethod->pluck('total_revenue'));
            var ctx5 = document.getElementById('revenueByPaymentMethodChart').getContext('2d');
            var revenueByPaymentMethodChart = new Chart(ctx5, {
                type: 'pie',
                data: {
                    labels: paymentMethodLabels,
                    datasets: [{
                        data: paymentMethodData,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ' + new Intl.NumberFormat().format(context
                                        .raw) + ' VND';
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
