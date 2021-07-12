@extends('layouts.master')

@section('content')
<div class="px-4 pt-32 pb-12 mx-auto text-center max-w-7xl sm:px-6 lg:pb-16 lg:px-8">
    <div class="text-2xl font-bold text-mark-default lg:text-4xl">
        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('financial-highlight.financial')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('financial-highlight.kinerja')
        </p>
    </div>
    <canvas id="chartKN" width="350" height="150"></canvas>
    @if(App::isLocale('id'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/financial-highlight-table.png') }}" alt="Mark Dynamics Financial Highlight">
    @elseif(App::isLocale('en'))
    <img class="pt-12 lg:pt-24" src="{{ asset('img/financial-highlight-table-eng.png') }}" alt="Mark Dynamics Financial Highlight">
    @endif

    <div class="pt-12 mb-5 text-2xl font-bold text-mark-default lg:pt-24 lg:text-4xl">
        <h2 class="text-base font-semibold tracking-wider uppercase text-mark-default">@lang('financial-highlight.financial')</h2>
        <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            @lang('financial-highlight.neraca')
        </p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <canvas id="chartNeraca" width="350" height="150"></canvas>
    <script>
        var ctx = document.getElementById('chartKN');
        var chartKN = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [
                    {
                        type: 'bar',
                        label: 'Penjualan',
                        data: [205, 248, 324, 258, 559 ],
                        backgroundColor: [
                            'rgba(72, 204, 78, 0.4)',
                            'rgba(72, 204, 78, 0.4)',
                            'rgba(72, 204, 78, 0.4)',
                            'rgba(72, 204, 78, 0.4)',
                            'rgba(72, 204, 78, 0.4)',

                        ],
                        borderColor: [
                            'rgb(72, 204, 78)',
                            'rgb(72, 204, 78)',
                            'rgb(72, 204, 78)',
                            'rgb(72, 204, 78)',
                            'rgb(72, 204, 78)',
                        ],
                        borderWidth: 1
                    }, {
                        type: 'bar',
                        label: 'Laba Kotor',
                        data: [49, 88, 97, 154, 241 ],
                        backgroundColor: [
                            'rgba(255, 100, 38, 0.4)',
                            'rgba(255, 100, 38, 0.4)',
                            'rgba(255, 100, 38, 0.4)',
                            'rgba(255, 100, 38, 0.4)',
                            'rgba(255, 100, 38, 0.4)',

                        ],
                        borderColor: [
                            'rgb(255, 100, 38)',
                            'rgb(255, 100, 38)',
                            'rgb(255, 100, 38)',
                            'rgb(255, 100, 38)',
                            'rgb(255, 100, 38)',
                        ],
                        borderWidth: 1
                    },
                    {
                        type: 'bar',
                        label: 'Laba Bersih',
                        data: [24, 50, 82, 90, 145 ],
                        backgroundColor: [
                            'rgba(24, 160, 251, 0.4)',
                            'rgba(24, 160, 251, 0.4)',
                            'rgba(24, 160, 251, 0.4)',
                            'rgba(24, 160, 251, 0.4)',
                            'rgba(24, 160, 251, 0.4)',

                        ],
                        borderColor: [
                            'rgb(224, 160, 251)',
                            'rgb(224, 160, 251)',
                            'rgb(224, 160, 251)',
                            'rgb(224, 160, 251)',
                            'rgb(224, 160, 251)',
                        ],
                        borderWidth: 1

                    }
                ],
                labels: ['2016', '2017', '2018', '2019', '2020']
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },


                title: {
                    position: 'left',
                    display: true,
                    text: 'Dalam Milliar Rupiah'
                }

            }
        });
        </script>

    <script>
    var ctx = document.getElementById('chartNeraca');
    var chartNeraca = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [
                {
                    type: 'bar',
                    label: 'Aset',
                    data: [170936, 227599, 318080, 441254, 719726],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.4)',
                        'rgba(54, 162, 235, 0.4)',
                        'rgba(54, 162, 235, 0.4)',
                        'rgba(54, 162, 235, 0.4)',
                        'rgba(54, 162, 235, 0.4)',

                    ],
                    borderColor: [
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                    ],
                    borderWidth: 1
                }, {
                    type: 'bar',
                    label: 'Liabilitas',
                    data: [90418, 60755, 80339, 142230, 310254],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.4)',
                        'rgba(255, 99, 132, 0.4)',
                        'rgba(255, 99, 132, 0.4)',
                        'rgba(255, 99, 132, 0.4)',
                        'rgba(255, 99, 132, 0.4)',

                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 99, 132)',
                        'rgb(255, 99, 132)',
                    ],
                    borderWidth: 1
                },
                {
                    type: 'bar',
                    label: 'Ekuitas',
                    data: [80620, 166844, 237737, 299023, 409472],
                    backgroundColor: [
                        'rgba(255, 205, 86, 0.4)',
                        'rgba(255, 205, 86, 0.4)',
                        'rgba(255, 205, 86, 0.4)',
                        'rgba(255, 205, 86, 0.4)',
                        'rgba(255, 205, 86, 0.4)',

                    ],
                    borderColor: [
                        'rgb(255, 205, 86)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 205, 86)',
                    ],
                    borderWidth: 1

                }
            ],
            labels: ['2016', '2017', '2018', '2019', '2020']
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },


            title: {
                position: 'left',
                display: true,
                text: 'Dalam Jutaan Rupiah'
            }

        }
    });
    </script>

</div>
@endsection


