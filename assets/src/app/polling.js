$(document).ready(function() {
    $("#btn_ok").click(function() {
        var $this = $(this);
        var loadingText = '<i class="fas fa-circle-notch fa-spin"></i> Loading...';
        if ($(this).html() !== loadingText) {
            $this.data('original-text', $(this).html());
            $this.html(loadingText);
        }
        
        var nama_lengkap   = $("#nama_lengkap").val();
        var alamat_lengkap = $("#alamat_lengkap").val();
        var asal_instansi  = $("#asal_instansi").val();
        var keperluan      = $("#keperluan").val();

        $.ajax({
            url: app_url +"buku_tamu/simpan_pengunjung",
            method: "POST",
            data: {
                nama_lengkap: nama_lengkap,
                alamat_lengkap: alamat_lengkap,
                asal_instansi: asal_instansi,
                keperluan: keperluan,
                api_key : api_key ,
            },
            dataType: "JSON",
            beforeSend: function() {
                $this.html(loadingText);
            },
            success: function(response) {
                if(response.success === true) {
                    $("#form-pengunjung")[0].reset();
                    $('#success').trigger("play");   
                    alert_success(response.message);
                    $('#view_tamu').modal('show', {
                        backdrop: 'static'
                    });
                    
                    $('#nama_pengunjung').html('<b>Hai, '+response.data.nama_lengkap+'</b>');
                    setTimeout(function () {
                        window.location = app_url+'/buku_tamu';
                    }, 15000);
                } else {
                    $('#error').trigger("play");
                    alert_error(response.message);
                    $this.html($this.data('original-text'));
                }
                $this.html($this.data('original-text'));
            },
            error: function(response) {
                $('#error').trigger("play");
                alert_error('Aplikasi sedang gangguan.');
                $this.html($this.data('original-text'));
            }
        });
    });

    //Polling Pengunjung
	$.ajax({
		url: app_url +"buku_tamu/statistik_polling",
        type: "POST",
        data: {api_key: api_key},
        beforeSend: function() {
            $("#loading-kategori").show();
        },
		success : function(result){
			
			var persen_sangat_puas = result.persen_sangat_puas;
			var persen_puas = result.persen_puas;
			var persen_cukup_puas = result.persen_cukup_puas;
			var persen_tidak_puas = result.persen_tidak_puas;
            var ket_1 = result.ket_1;
            var ket_2 = result.ket_2;
            var ket_3 = result.ket_3;
            var ket_4 = result.ket_4;
			
			Highcharts.setOptions({
				colors: ['#4caf50','#2196f3','#ffa000','#e91e63']
			});
			Highcharts.chart('grafik_polling', {
				chart: {
					type: 'pie',
                    // options3d: {
                    //     enabled: false,
                    //     alpha: 45
                    // }
				},
				title: {
					text: 'Prosentase Polling Kepuasan Pengunjung JDIH Kab. Batang',
					style: {
						fontSize: '15px' 
				}},
				tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
					pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '<span style="font-size:15px">{point.name}: {point.y:.1f}% </span>'
                        }
                    }
				},
				accessibility: {
                    announceNewData: {
                        enabled: true
                    },
					point: {
						valueSuffix: '%'
					}
				},
				credits: {
					enabled: false
				},
				series: [{
					name: 'Prosentase Kepuasan Pengunjung JDIH Kab. Batang ',
					colorByPoint: true,
					data:[{
                        name:ket_1,
                        y:persen_sangat_puas,
                        drilldown:ket_1,
                        color: '#4CAF50'
                    },{
                        name:ket_2,
                        y:persen_puas,
                        drilldown:ket_2,
                        color: '#2196f3'
                    },{
                        name:ket_3,
                        y:persen_cukup_puas,
                        drilldown:ket_3,
                        color: '#ffa000'
                    },{
                        name:ket_4,
                        y:persen_tidak_puas,
                        drilldown:ket_4,
                        color: '#e91e63'
                    }]
				},]
			});

            $("#loading-kategori").hide();
		},
		error : function(data) {
			console.log(data);
		}
	});

    statistik_tamu();
});

function polling(id){
    var nilai_polling = id;
    
    $.ajax({
        url: app_url +"buku_tamu/simpan_polling",
        method: "POST",
        data: {
            nilai_polling: nilai_polling,
            api_key : api_key ,
        },
        dataType: "JSON",
        success: function(response) {
            if(response.success === true) {
                $('#success').trigger("play");   
                alert_success(response.message);
                $('#view_polling').modal('show', {
                    backdrop: 'static'
                });
                
                setTimeout(function () {
                    $('#view_polling').modal('hide');
                }, 4000); //4 detik

                $('#value_sangat_puas').html('<h1>'+response.data.nilai_1+'%</h1>');
                $('#value_puas').html('<h1>'+response.data.nilai_2+'%</h1>');
                $('#value_cukup_puas').html('<h1>'+response.data.nilai_3+'%</h1>');
                $('#value_tidak_puas').html('<h1>'+response.data.nilai_4+'%</h1>');

                setTimeout(function () {
                    $('#value_sangat_puas').html('');
                    $('#value_puas').html('');
                    $('#value_cukup_puas').html('');
                    $('#value_tidak_puas').html('');
                    window.location = app_url+'/buku_tamu/polling';
                }, 17000); //17 detik
            } else {
                $('#error').trigger("play");
                alert_error(response.message);
            }
        },
        error: function(response) {
            $('#error').trigger("play");
            alert_error('Aplikasi sedang gangguan.');
        }
    });
}

function statistik_tamu(){
    var tahun = $('#tahun').val();
    if (tahun == null){
        const d = new Date();
        tahun = d.getFullYear();
    }else{
        tahun = tahun;
    }
    $.ajax({
        url : app_url +"buku_tamu/get_rekap_tamu",
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
                    text: 'Grafik Rekap Buku Tamu JDIH Kabupaten Batang Tahun '+tahun,
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
                        text: 'Total Buku Tamu Tahun '+tahun
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
                    name: 'Total Buku Tamu Tahun '+tahun,
                    data: total_data.totalData
                }]
            });
        },
        error : function(data) {
            console.log(data);
        }
    });
}