

  	
$('.menu .item').tab();


$('.add-modal').on('click', function() {
            $('#classroom_add').val($(this).data('id'));
            $('#text_class_add').val($(this).data('name'));
            $('#addModal').modal('show');
        });

 $('#btn_add').on('click',function () {
        $.ajax({
            type: 'POST',
                url: 'assingcourses',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'subject_id': $('#subject_add').val(),
                    'day':$('#day_add').val(),
                    'inicio':$('#inicio_add').val(),
                    'inicio_time':$('#inicio_time_add').val(),
                    'fin':$('#fin_add').val(),
                    'fin_time':$('#fin_time_add').val(),
                    'user_id':$('#user_add').val(),
                    'classroom_id':$('#classroom_add').val()
                },success: function(data) {

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#addModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                       
                    } else {
                    $('#subject_add').select(0);
                    $('#day_add').select(0);
                    $('#inicio_add').val('');
                    $('#inicio_time_add').select(0);
                    $('#fin_add').val('');
                    $('#fin_time_add').select(0);
                    $('#user_add').select(0);
                    $.uiAlert({
                                textHead: 'Agregado Correctamente!!',
                                text: 'La materia ha sido asignada Correctamente',
                                bgcolor: '#19c3aa',
                                textcolor: '#fff',
                                position: 'top-right', // top And bottom ||  left / center / right
                                icon: 'checkmark box',
                                time: 3
                                });
                        
                       $('#contenedor'+data.classid).append('<tr class="item'+data.id+'"><td>'+data.nit+'</td><td>'+data.name_subject+'</td><td>'+data.name_profesor+'</td><td class="td">'+data.fecha+
        '<br>  '+'</td><td><div class="ui buttons"><button class="ui positive button edit-modal" data-id="'+data.id+'">Agregar Hora</button><div class="or" data-text="ó"></div><button class="ui negative button delete-modal" data-id="'+data.id+'">Eliminar</button>'+
'</div></td></tr>');
                                                            
                          
                                                                
                                                                }
                },
            });
        });

       
 $(document).on('click', '.delete-modal',function() {
            $('#id_delete').val($(this).data('id'));
            $('#id_contenedor').val($(this).data('contenedor'));
            $('#delete_Modal').modal('show');
        });
       $('#btn_delete').on('click',function() {
            $.ajax({
                type: 'POST',
                url: 'assingcourses/delete/' + $('#id_delete').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                },
                success: function(data) {
          $.uiAlert({
            textHead: 'Eliminado Correctamente!!',
            text: '',
            bgcolor: '#DB2828',
            textcolor: '#fff',
            position: 'top-right', // top And bottom ||  left / center / right
            icon: 'trash',
            time: 3
            });
                    $('.item' + data.id).remove();
                }
            });
        });

//editar un estudiante
       $(document).on('click','.edit-modal', function() {
            $('#id_edit').val($(this).data('id'));
            $('#editModal').modal('show');
           
        });

       $('#btn_edit').on('click',function () {
        $.ajax({
            type: 'POST',
                url: 'assingcourses/update/'+$('#id_edit').val(),
                data: {
                    '_token': $('input[name=_token]').val(),
                    'day':$('#day_edit').val(),
                    'inicio':$('#inicio_edit').val(),
                    'inicio_time':$('#inicio_time_edit').val(),
                    'fin':$('#fin_edit').val(),
                    'fin_time':$('#fin_time_edit').val(),
                },success: function(data) {

                    if ((data.errors)) {
                        setTimeout(function () {
                            $('#editModal').modal('show');
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                       
                    } else {
                    $('#day_edit').val('');
                    $('#inicio_edit').val('');
                    $('#fin_edit').val('');

                  
                              $.uiAlert({
                              textHead: 'Editado Correctamente!!',
                              text: '',
                              bgcolor: '#55a9ee',
                              textcolor: '#fff',
                              position: 'top-right', // top And bottom ||  left / center / right
                              icon: 'edit',
                              time: 3
                              });
                          $('.item'+data.id +' .td').append(data.fecha+'<br>');
                    
                    }
                },
            });
        });

 
       