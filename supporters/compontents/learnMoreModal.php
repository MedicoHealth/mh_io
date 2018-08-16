<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Download whitepaper</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="modalForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputFirstName">First name</label>
                <input class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First name">
              </div>
              <div class="form-group col-md-6">
                <label for="inputLastName">Last name</label>
                <input class="form-control" id="inputLastName" name="inputLastName" placeholder="Last name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" required>
                <div class="invalid-feedback"> Please provide a valid email. </div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputCountry">Country</label>
                <input class="form-control" id="inputCountry" name="inputCountry" placeholder="Country" >
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="modalFormButton" value="Submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
</div>
<script>
$(document).ready(function () {
  $('#modalFormButton').click(function(e){
    if($('#modalForm')[0].checkValidity()) {
      $( "#loader" ).addClass( "displayNow" );
      $.ajax({
          url:"<?php echo $root ?>/supporters/sendMail.php",
          type:'post',
          data:$('#modalForm').serialize(),
          success:function(){
              $( "#loader" ).removeClass( "displayNow" );
              alert("The email was sent successfully");
          },
          error: function(xhr, status, error) {
              $( "#loader" ).removeClass( "displayNow" );
              alert("There was an error, please check the email again.");
          }
      });
    } else {
      $(".invalid-feedback").css("display","block");
    }
  });
});
</script>
