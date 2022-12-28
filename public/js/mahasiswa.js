$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#uploadBerkasBtn").on('click', function(){
        const id = $(this).data('id');

        $.ajax({
            url: 'http://stars.test/home/mahasiswa/beasiswa',
            data : {id: id},
            method : 'post',
            dataType : 'json',
            success: function(data){
                console.log(data);
                $('#uploadBerkasTitle').html('Berkas '+data.beasiswa);
                $('#detailBerkasTitle').html('Detail '+data.beasiswa);
                $('#detailBerkasParagraph').html(data.beasiswa);
                $('#uploadBerkasLink').val(data.link);
                if(data.status == 1){
                    $('#detailBerkasStatus').html('Diterima');
                }else{
                    $('#detailBerkasStatus').html('Menunggu');
                }
            }
        });
    });
});