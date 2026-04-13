'use strict';
// $('.dropify').dropify();

// $('.fc-datepicker').datepicker({
//     showOtherMonths: true,
//     selectOtherMonths: true
// });
// $('.cari').select2({
//     minimumResultsForSearch: ''
// });

//Alert
function alert_message(pesan){
    alertify.message(pesan)
}
function alert_success(message){
    alertify.success(message)
}
function alert_error(message){
    alertify.error(message)
}
function alert_warning(message){
    alertify.warning(message)
}

$(document).on('click','.del', function(){
    var href = $(this).attr('rel');
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: 'Hapus Data ?',
        text: 'Data yang telah dihapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batalkan',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                icon: 'success',
                title: 'Terhapus',
                text: 'Data berhasil dihapus',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                window.location = href;
            })
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                icon: 'error',
                title: 'Dibatalkan',
                text: 'Proses hapus data dibatalkan!',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
    return false;
});

//Sweatalert Batal
$(document).on('click','.batal', function(){
    var href = $(this).attr('rel');
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
        title: 'Batalkan Permohonan ?',
        text: 'Data yang dibatalkan tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Batalkan',
        cancelButtonText: 'Tidak',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                icon: 'success',
                title: 'Dibatalkan',
                text: 'Permohonan berhasil dibatalkan',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                window.location = href;
            })
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                icon: 'error',
                title: 'Tutup Pembatalan',
                text: 'Permohonan tidak dibatalkan!',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
    return false;
});
