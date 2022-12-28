$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#liveToastClose").on('click', function () {
        console.log('test');
        $('#liveToast').hide();
    });

    $("#imageFile").on('change', function () {
        const imageFile = document.querySelector('#imageFile');
        const imagePreview = document.querySelector('#imagePreview');
        const oFReader = new FileReader();
        oFReader.readAsDataURL(imageFile.files[0]);

        oFReader.onload = (oFREvent) => {
            imagePreview.src = oFREvent.target.result;
        }
    });

    $('.profileDetail').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
            url : 'http://stars.test/admin/dashboard/mahasiswa/detail',
            data : {id : id},
            method : 'POST',
            dataType : 'json',
            success: (data) => {
                $('.modal-footer-mahasiswa').hide();
                $('#profileDetailName').val(data.name);
                $('#profileDetailEmail').val(data.email);
                $('#profileDetailNIM').val(data.nim);
                $('#profileDetailTelp').val(data.telp);
                $('#profileDetailBank').val(data.bank);
                $('#profileDetailNorek').val(data.norek);
                $('#profileDetailPemilik').val(data.pemilik);
                $('#profileDetailProgdi').val(data.progdi);
            }
        });
    });

    

});

// function loadImage() {
//     const imageFile = document.querySelector('#imageFile');
//     const imagePreview = document.querySelector('#imagePreview');
//     console.log('load image done');
//     const oFReader = new FileReader();
//     oFReader.readAsDataURL(imageFile.files[0]);

//     oFReader.onload = (oFREvent) => {
//         imagePreview.src = oFREvent.target.result;
//     }
// }
