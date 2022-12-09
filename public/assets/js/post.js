$(document).ready(function () {
     $('.deleteBtn').click(function (e) { 
          e.preventDefault();

          var post_id = $(this).val();
          $('#post_id').val(post_id);

          $('#deleteModel').modal('show');
          
     });
});