$(function() {
    
    $('#tombolTambah').on('click', function(){
        $('#judulModalLabel').html('Tambah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
    })


    $('.tampilModal',).on('click', function(){

        $('#judulModalLabel').html('Ubah Data Karyawan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/karyawan/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: "http://localhost/phpmvc/public/karyawan/getUbah",
            data: {id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#nrp').val(data.nrp);
                $('#email').val(data.email);
                $('#foto').val(data.foto);
                $('#jabatan').val(data.jabatan);
                console.log(data);
            }
        })

    })

})

