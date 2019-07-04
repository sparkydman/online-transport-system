

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    
$( document ).ready(function() {
$(function() {
    $('#show_vehicles').click(function() {
        $('#report').hide();
          $('#new_driver').hide();
           $('#ref_code_no').hide();
            $('#complain').hide();
           $('#readybus').hide();
            $('#settings1').hide();
        $('#available').show();
    });
    $('#show_reports').click(function() {
    $('#available').hide();
      
          $('#new_driver').hide();
           $('#ref_code_no').hide();
            $('#complain').hide();
            $('#readybus').hide();
         
            $('#settings1').hide();
        $('#report').show();
    });

    $('#show_drivers').click(function() {
        $('#available').hide();
         $('#report').hide();
         
           $('#ref_code_no').hide();
            $('#complain').hide();
           $('#readybus').hide();
            $('#settings1').hide();
        $('#driver_details').show();
    });

    $('#show_reg_driver').click(function() {
         $('#available').hide();
  
         $('#report').hide();
           $('#ref_code_no').hide();
            $('#complain').hide();
    $('#readybus').hide();
           $('#settings1').hide();
      
        $('#new_driver').show();
    });

     $('#show_ref_code').click(function() {
        $('#available').hide();
      
         $('#report').hide();
           $('#new_driver').hide();
            $('#complain').hide();
         $('#readybus').hide();
           $('#settings1').hide();
        $('#readybus').hide();
        $('#ref_code_no').show();
    });

    $('#show_complains').click(function() {
       $('#available').hide();
       
         $('#report').hide();
           $('#new_driver').hide();
            $('#ref_code_no').hide();
         $('#readybus').hide();
            $('#settings1').hide();
        $('#complain').show();
    });


$('#show_setting').click(function() {
       $('#available').hide();
       
         $('#report').hide();
          $('#complain').hide();
           $('#new_driver').hide();
            $('#ref_code_no').hide();
         $('#readybus').hide();
        $('#settings1').show();
    });
$('#show_readybus').click(function() {
       $('#available').hide();
        $('#settings1').hide();
         $('#report').hide();
          $('#complain').hide();
           $('#new_driver').hide();
            $('#ref_code_no').hide();
        
        $('#readybus').show();
    });
});
});

 // $(document).ready(function(){
 //      var date_input=$('input[name="date"]'); //our date input has the name "date"
 //      var container=$('.tabcontent form').length>0 ? $('.tabcontent form').parent() : "body";
 //      var options={
 //        format: 'mm/dd/yyyy',
 //        container: container,
 //        todayHighlight: true,
 //        autoclose: true,
 //      };
 //      date_input.datepicker(options);
 //    })