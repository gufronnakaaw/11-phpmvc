$('.btn-update').click(function(){
    $('#modal_update').modal('show');

    var id = $(this).data('id');
    var url = 'http://localhost/phpmvc/public/student/getDataById';

    $.ajax({
        url: url,
        method: 'post',
        data: {id},
        success: function(res){
            var data = JSON.parse(res); 

            $('#id').val(data.id);
            $('#update_name_maba').val(data.name);
            $('#update_nrp_maba').val(data.nrp);
            $('#update_email_maba').val(data.email);
            $('#update_majors_maba').val(data.majors);
        }
    });
});

// $('#keyword').on('keyup', function(){
//     var valKeyword = $(this).val();
//     var url = $('#form_keyword').attr('action');
//     var method = $('#form_keyword').attr('method');
//     $.ajax({
//         url: url,
//         method: method,
//         data: valKeyword,
//         success: function(res){
//             console.log(res);
//         }
//     });
// });


$('#modal_update').on('hide.bs.modal', function(){
    $('#update_name_maba').val('');
    $('#update_nrp_maba').val('');
    $('#update_email_maba').val('');
    // $('#update_majors_maba').val('');
});