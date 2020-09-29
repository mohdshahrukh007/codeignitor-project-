<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Student Attendance System in PHP using Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  
</head>
<body>
<section>
  
<div class="jumbotron-small text-center" style="margin-bottom:0">
  <h1>Student Attendance System</h1>
</div>

</section>
<div class="container" style="margin-top:30px">
  <div class="card">
   <div class="card-header">
      <div class="row">
        <div class="col-md-9">Attendance List</div>
        <div class="col-md-3" align="right">
          <button type="button" id="report_button" class="btn btn-danger btn-sm">Report</button>
          <button type="button" id="add_button" class="btn btn-info btn-sm">Add</button>
        </div>
      </div>
    </div>
   <div class="card-body">
    <div class="table-responsive">
        <span id="message_operation"></span>
     <table class="table table-striped table-bordered" id="attendance_table">
      <thead>
       <tr>
        <th>Stuadent Name</th>
        <th>Roll Number</th>
        <th>Grade</th>
              <th>Attendance Status</th>
              <th>Attendance Date</th>
       </tr>
      </thead>
      <tbody>
             <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>

    </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>
</div>
<div class="modal" id="formModal">
  <div class="modal-dialog">
    <form method="post" id="attendance_form">
      <div class="modal-content" id="attcontent">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
     
          
          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Grade <span class="grade text-danger">*</span></label>
              <div class="col-md-8">
              
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Attendance Date <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input type="text" name="attendance_date" id="attendance_date" class="form-control"   />
                <span id="error_attendance_date" class="text-danger"></span>
              </div>
            </div>
          </div>
          <div class="form-group" id="student_details">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Roll No.</th>
                    <th>Student Name</th>
                    <th>Present</th>
                    <th>Absent</th>
                  </tr>
                </thead>
                <tr>
                  <form method="post" name="add">
                   <td>
                     <input type="text" name="student_id[]" value=" " />
                  </td> 
                  <td>
                    <input type="text" name="student_name[]" value=" " />
                  </td>
                  <td align="center">
                    <input type="radio" name="attendance_status " value="Present" />
                  </td>
                  <td align="center">
                    <input type="radio" name="attendance_status " checked value="Absent" />
                  </td>
                </form>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <input type="hidden" name="attendance_id" id="attendance_id" />
          <input type="hidden" name="action" id="action" value="Add" />
          <input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Add" />
          <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        </div>

      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
    $('#add_button').click(function(){
    $('#modal_title').text("Add Student");
    $('#attcontent').width('40rem');

    $('#button_action').val('Add');
    $('#action').val('Add');
    $('#formModal').modal('show');
    clear_field();
  });
      $('#add_button').click(function(){
    $('#modal_title').text("Add teacher");

    $('.grade').val("profession");
    $('#button_action').val('Add');
    $('#action').val('Add');
    $('#formModal').modal('show');
    clear_field();
  });
</script>
  
 </body>
</html>
