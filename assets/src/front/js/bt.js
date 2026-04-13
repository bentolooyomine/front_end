// ==========================
// GLOBAL CONFIG
// ==========================
const APP_URL = window.location.origin + "/";

// shortcut API
const API = {
    dashboard: window.APP_URL + "dashboard"
};

// ==========================
// MODAL SURVEI
// ==========================
function modal_survei() {
    $('#formSurvei').modal('show', { backdrop: 'static' });
}


// ==========================
// SEARCH
// ==========================
function klik_cari() {
    let pencarian = $('#pencarian').val();
    window.location.href = APP_URL + 'search?q=' + pencarian;
}

function klik_cari_detail() {
    let url = APP_URL + 'search?';

    url += 'kategori=' + ($('#kategori').val() || '');
    url += '&bidang=' + ($('#bidang').val() || '');
    url += '&nomor=' + ($('#nomor').val() || '');
    url += '&tahun=' + ($('#tahun').val() || '');
    url += '&dokumen=' + ($('#nama_dokumen').val() || '');

    window.location.href = url;
}


// ==========================
// HIGHCHART 3D
// ==========================
function loadChart() {

    fetch(API.dashboard + "/get_detail_")
        .then(res => res.json())
        .then(data => {

            let categories = [];
            let seriesData = [];

            data.forEach(item => {
                categories.push(item.nama_kategori);
                seriesData.push(parseInt(item.jumlah));
            });

            Highcharts.chart('get_status_produk_hukum', {
                chart: {
                    type: 'column',
                    options3d: {
                        enabled: true,
                        alpha: 15,
                        beta: 15,
                        depth: 50,
                        viewDistance: 25
                    }
                },

                title: {
                    text: 'Statistik Produk Hukum 3D'
                },

                xAxis: {
                    categories: categories,
                    labels: {
                        rotation: -45,
                        style: { fontSize: '11px' }
                    }
                },

                yAxis: {
                    min: 0,
                    title: { text: 'Jumlah' }
                },

                plotOptions: {
                    column: {
                        depth: 25,
                        colorByPoint: true
                    }
                },

                colors: [
                    '#FF5733', '#33FF57', '#3357FF', '#F1C40F',
                    '#9B59B6', '#1ABC9C', '#E67E22', '#2ECC71',
                    '#3498DB', '#E74C3C'
                ],

                series: [{
                    name: 'Jumlah',
                    data: seriesData
                }],

                credits: { enabled: false },
                legend: { enabled: false },

                tooltip: {
                    pointFormat: '<b>{point.y}</b> data'
                }
            });

        });
}


// ==========================
// SUBMIT SURVEI
// ==========================
function submitSurvei() {

    $("#form_rating").on("submit", function (e) {
        e.preventDefault();

        $.ajax({
            url: API.dashboard + "/submit",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",

            beforeSend: function () {
                $(".btn-success").text("Mengirim...");
            },

            success: function (res) {

                $(".btn-success").text("Kirim");

                if (res.status) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Terima Kasih!',
                        text: res.message,
                        confirmButtonColor: '#28a745'
                    });

                    $("#form_rating")[0].reset();
                    $("#formSurvei").modal('hide');

                    loadSurvei();
                    loadSummary();

                } else {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops!',
                        text: res.message
                    });

                }
            },

            error: function () {

                $(".btn-success").text("Kirim");

                Swal.fire({
                    icon: 'error',
                    title: 'Server Error',
                    text: 'Coba lagi nanti'
                });
            }
        });

    });
}


// ==========================
// HASIL SURVEI (PROGRESS BAR)
// ==========================
function loadSurvei() {

    $.ajax({
        url: API.dashboard + "/hasil_survei",
        type: "GET",
        dataType: "json",

        success: function (res) {

            let html = '';

            let colors = {
                5: 'bg-success',
                4: 'bg-info',
                3: 'bg-warning',
                2: 'bg-danger',
                1: 'bg-dark'
            };

            for (let i = 5; i >= 1; i--) {

                let val = res.data[i] || 0;
                let percent = res.total > 0 ? ((val / res.total) * 100).toFixed(1) : 0;

                html += `
                <div class="row mb-2">
                    <div class="col-md-1">
                        <div class="badge badge-default mb-2">${i} <i class="fa fa-star"></i></div>
                    </div>
                    <div class="col-md-10">
                        <div class="progress progress-md mb-2">
                            <div class="progress-bar ${colors[i]}" style="width:${percent}%">
                                ${percent}%
                            </div>
                        </div>
                    </div>
                </div>`;
            }

            $("#hasilSurvei").html(html);
        }
    });
}


// ==========================
// SUMMARY SURVEI (RATA2 STAR)
// ==========================
function loadSummary() {

    $.ajax({
        url: API.dashboard + "/summary_survei",
        type: "GET",
        dataType: "json",

        success: function (res) {

            let avg = Math.round(res.avg);
            let total = res.total;

            let stars = '';

            for (let i = 1; i <= 5; i++) {

                if (i <= avg) {
                    stars += `<li><img src="${window.APP_URL}assets/src/front/images/svg/icon-star-color.png" class="icon-star"></li>`;
                } else {
                    stars += `<li><img src="${window.APP_URL}assets/src/front/images/svg/icon-star-disable.png" class="icon-star"></li>`;
                }
            }

            let html = `
            <div class="column column-55">
                <div class="circle-survey text-center">

                    <h2><span class="count-number">${avg}</span></h2>

                    <ul class="stars">
                        ${stars}
                    </ul>

                    <p><span class="count-number">${total}</span> Penilaian</p>

                </div>
            </div>`;

            $("#surveySummary").html(html);
        }
    });
}


// ==========================
// VISITOR TRACK (ANTI DUPLIKAT)
// ==========================
function trackVisitor() {

    if (sessionStorage.getItem("visitor_tracked")) return;

    $.ajax({
        url: API.dashboard + "/track",
        type: "POST",
        success: function () {
            sessionStorage.setItem("visitor_tracked", "1");
        }
    });
}


// ==========================
// VISITOR STATS
// ==========================
function loadStats() {

    $.ajax({
        url: API.dashboard + "/stats",
        type: "GET",
        dataType: "json",

        success: function (res) {

            $("#today").text(res.today);
            $("#yesterday").text(res.yesterday);
            $("#month").text(res.month);
            $("#year").text(res.year);
            $("#total").text(res.total);
        }
    });
}


// ==========================
// INIT ALL
// ==========================
document.addEventListener("DOMContentLoaded", function () {

    loadChart();
    loadSurvei();
    loadSummary();
    loadStats();
    submitSurvei();
    trackVisitor();

});