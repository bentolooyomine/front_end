$(document).ready(function() {
    $.ajax({
        url : app_url +"api/get_status_produk_hukum",
        type : "POST",
        data : {api_key:api_key},
        success : function(result){
            var tot_berlaku = {
                tot_berlakuData : []
            };
            var tot_tidak_berlaku = {
                tot_tidak_berlakuData : []
            };
            var tot_diubah = {
                tot_diubahData : []
            };
            var tot_mencabut = {
                tot_mencabutData : []
            };
            var tahun = {
                tahunData : []
            };

            var panjang = result.data.length;
            for (var i = 0; i < panjang; i++) {
                tot_berlaku.tot_berlakuData.push(parseInt(result.data[i].berlaku));
                tot_tidak_berlaku.tot_tidak_berlakuData.push(parseInt(result.data[i].tidak_berlaku));
                tot_diubah.tot_diubahData.push(parseInt(result.data[i].diubah));
                tot_mencabut.tot_mencabutData.push(parseInt(result.data[i].mencabut));
                tahun.tahunData.push(result.data[i].tahun);
            }
            
            Highcharts.chart('get_status_produk_hukum', {
                chart: {
                    type: 'column',
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 15,
                        viewDistance: 25,
                        depth: 40
                    }
                },
                title: {
                    text: 'Grafik Status Produk Hukum',
                    style: {
                        fontSize: '15px' 
                    }
                },
                xAxis: {
                    categories: tahun.tahunData
                },
                credits: {
                    enabled: false
                },
                yAxis: {
                    min: 0,
					tickInterval: 5,
                    title: {
                        text: 'Produk Hukum'
                    },
                    labels: {
                        formatter: function() {
                            return this.value;
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:15px;"><b>{point.key}</b></span><table width="100%;">',
                    pointFormat : '<tr><td style="color:{series.color};padding:0;font-size:8px">{series.name}: </td>' +
                    '<td style="padding:0;padding:0;font-size:8px"><b>{point.y:.1f} Produk Hukum</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [{
                    name: 'Berlaku',
                    data: tot_berlaku.tot_berlakuData,
                    color: '#4CAF50'
                },{
                    name: 'Tidak Berlaku',
                    data: tot_tidak_berlaku.tot_tidak_berlakuData,
                    color: '#ff382b'
                },{
                    name: 'Diubah',
                    data: tot_diubah.tot_diubahData,
                    color: '#03A9F4'
                },{
                    name: 'Mencabut Sebagian',
                    data: tot_mencabut.tot_mencabutData,
                    color: '#FFEB3B'
                }]
            });

        },
        error : function(data) {
            console.log(data);
        }
    });

    $.ajax({
        url : app_url +"api/get_kategori_produk_hukum",
        type : "POST",
        data : {api_key:api_key},
        success : function(result){
            var colors = ['#FFB64D', '#0E9E4A', '#E91E63', '#8BC34A', '#FF9800', '#673AB7', '#3F51B5', '#00BCD4', '#F44336', '#795548', '#FFC107', '#9E9E9E', '#03A9F4', '#9C27B0'];
            var keterangan = [];
            var series_array = [];

            var total_kategori = {
                total_kategoriData : []
            };
            var nama_kategori = {
                nama_kategoriData : []
            };

            var panjang = result.data.length;
            for (var i = 0; i < panjang; i++) {
                total_kategori.total_kategoriData.push(parseInt(result.data[i].total_kategori));
                nama_kategori.nama_kategoriData.push(result.data[i].nama_kategori);

                series_array.push({
					name: result.data[i].nama_kategori,
					data: [parseInt(result.data[i].total_kategori)],
					color: colors[i],
				});
            }

            Highcharts.chart('get_kategori_produk_hukum', {
                chart: {
                    type: 'column',
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 15,
                        viewDistance: 25,
                        depth: 40
                    }
                },
                title: {
                    text: 'Grafik Kategori Produk Hukum',
                    style: {
                        fontSize: '15px' 
                    }
                },
                xAxis: {
                    categories: nama_kategori.nama_kategoriData
                },
                credits: {
                    enabled: false
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Kategori Produk Hukum'
                    },
                    labels: {
                        formatter: function() {
                            return this.value;
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{point.key}</b><br>',
                    pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y}'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: series_array
            });

        },
        error : function(data) {
            console.log(data);
        }
    });

    statistik_pengunjung();
    statistik_desa();
    
});

function statistik_pengunjung(){
    var tahun = $('#tahun').val();
    if (tahun == null){
        const d = new Date();
        tahun = d.getFullYear();
    }else{
        tahun = tahun;
    }
    $.ajax({
        url : app_url +"api/get_rekap_pengunjung",
        type : "POST",
        data : {tahun:tahun,api_key:api_key},
        success : function(result){
            var total_data = {
                totalData : []
            };
            var tahun_data = {
                tahunData : []
            };
            var bulan_data = {
                bulanData : []
            };

            var panjang = result.data.length;
            for (var i = 0; i < panjang; i++) {
                total_data.totalData.push(parseInt(result.data[i].total));
                tahun_data.tahunData.push(result.data[i].tahun);
                bulan_data.bulanData.push(result.data[i].bulan);
            }

            Highcharts.setOptions({
                colors: ['#E91E63','#FFC107','#4CAF50']
            });

            Highcharts.chart('get_pengunjung', {
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Grafik Rekap Pengunjung Website JDIH Kabupaten Batang',
                    style: {
                        fontSize: '15px' 
                    }
                },
                xAxis: {
                    categories: bulan_data.bulanData
                },
                credits: {
                    enabled: false
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total Pengunjung Tahun '+tahun
                    },
                    labels: {
                        formatter: function() {
                            return this.value;
                        }
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                
                series: [{
                    name: 'Total Pengunjung Tahun '+tahun,
                    data: total_data.totalData
                }]
            });
        },
        error : function(data) {
            console.log(data);
        }
    });
}

function statistik_desa(){
    var kec = $('#kec').val();
    $.ajax({
        url : app_url +"api/get_produk_hukum_desa",
        type : "POST",
        data : {kec:kec,api_key:api_key},
        success : function(result){
            var colors = ['#8BC34A', '#FF9800', '#673AB7', '#3F51B5', '#00BCD4', '#F44336', '#795548', '#FFC107', '#9E9E9E', '#03A9F4', '#9C27B0', '#FFB64D', '#0E9E4A', '#E91E63', ];
            var series_desa_array = [];

            var total = {
                totalData : []
            };
            var desa = {
                desaData : []
            };

            var panjang = result.data.length;
            for (var i = 0; i < panjang; i++) {
                total.totalData.push(parseInt(result.data[i].total));
                desa.desaData.push(result.data[i].desa);

                series_desa_array.push({
					name: result.data[i].desa,
					data: [parseInt(result.data[i].total)],
					color: colors[i],
				});
            }

            Highcharts.chart('get_produk_hukum_desa', {
                chart: {
                    type: 'column',
                },
                title: {
                    text: 'Grafik Produk Hukum Desa',
                    style: {
                        fontSize: '15px' 
                    }
                },
                xAxis: {
                    categories: desa.desaData
                },
                credits: {
                    enabled: false
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Produk Hukum Desa'
                    },
                    labels: {
                        formatter: function() {
                            return this.value;
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y}'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    },
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: series_desa_array
            });

        },
        error : function(data) {
            console.log(data);
        }
    });
}