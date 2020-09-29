
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
  <style type="text/css">
    .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

  </style>
</head>
<body>
 
<div class="jumbotron-small text-center" style="margin-bottom:0">
  <h1>  Attendance System</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav"> 
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">Teacher</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="student.php">Student</a>
      </li>
      <li class="nav-item">
      </li> 
    </ul>
  </div>  
</nav>
       
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
       <form method="post"   action="<?php echo base_url()?>auth/add_stu_attendence">

          <div class="form-group">
            <div class="row">
              <label class="col-md-4 text-right">Grade <span class="grade text-danger">*</span></label>
                <input type="text" name="grade" id="grade" class="form-control"   />

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
                     <input type="text" name="student_id" value=" " />
                  </td> 
                  <td>
                    <input type="text" name="student_name" value=" " />
                  </td>
                  <td align="center">
                    <input type="radio" name="attendance_status" value="Present" />
                  </td>
                  <td align="center">
                    <input type="radio" name="attendance_status" checked value="Absent" />
                  </td>
                  <button  class="btn btn-info btn-sm">Add attendence</button>
                      <!-- <input type="submit" name="button_action" id="button_action" class="btn btn-success btn-sm" value="Add" /> -->
                </form>
                </tr>
              </table>
            </div>
          </div>
        </div>
</form>
  
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>
 <div class="container">
   <div class="row">
         <div class="col-12">
          <div class="card mt-5">             
           <div class="card-body"> 
            <form method="post"   action="<?php echo base_url()?>auth/add_stu_attendence">
              <div class="form-group" id="student_details">
              <label >Attendance Date <span class="text-danger">*</span></label>
             
                <input type="date" name="attendance_date" id="attendance_date" class="form-control"   />
                  <span><?php echo form_error('attendance_date') ?></span>
             
             <label >Grade <span class="grade text-danger">*</span></label>

                <input type="text" name="grade" id="grade" class="form-control"   />
                  <span><?php echo form_error('grade') ?></span>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Roll No.</th>
                    <th>Student Name</th>
                    <th>Present</th>
                    <th>Absent</th>
                    <th>submit</th>
                  </tr>
                </thead>
                <tr>
                   <td>
                     <input type="text"  class="form-control" name="student_id" value=" " />
                         <span><?php echo form_error('student_id') ?></span>
                  </td> 
                  <td>
                    <input type="text" class="form-control"  name="student_name" value=" " />
                      <span><?php echo form_error('student_name') ?></span>
                  </td>
                  <td align="center">
                    <input type="radio" name="attendance_status" value="Present" />
                  </td>
                  <td align="center">
                    <input type="radio" name="attendance_status" checked value="Absent" />
                  </td>
                  <td>
                  <button  class="btn btn-info btn-sm">Add attendence</button>
                     
                  <td>
                    
                  </td>
                </tr>
              </table>
                </form>
              
            </div>
          </div>
        </div>
      </div>
</div>
      
<div class="container" style="margin-top:30px">
  <div class="row">
  <div class="col-12">   
  <div class="card">
   <div class="card-header">
      <div class="row">
        <div class="col-md-9">Attendance List
           <span><?php if($this->uri->segment(2) == "inserted"){
            echo '<div class="alert alert-success" id="success-alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success! </strong>Data has been inserted .
</div>';
          }
          if($this->uri->segment(2) == "deleted"){
            echo '<div class="alert alert-success" id="success-alert">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Success! </strong>  Data has been deleted .
</div>';
          }?></span>
        </div>
        <div class="col-md-3" align="right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

        </div>
      </div>
    </div>
   <div class="card-body">
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="attendance_table"> 
      <thead>
       <tr>
        <th>Stuadent Name</th>
        <th>Roll Number</th>
        <th>Grade</th>
        <th>Attendance Status</th>
        <th>Attendance Date</th>
        <th>delete</th>

       </tr>
      </thead>
      <tbody><?php
        if($fetch_data->num_rows()>0){
         foreach ($fetch_data->result() as $row)  {?>
           <tr>  
            <td><?php echo $row->student_name;?> </td>  
            <td><?php echo $row->student_id;?></td>
            <td><?php echo $row->attendance_status;?></td>  
            <td><?php echo $row->attendance_date;?></td> 
            <td><?php echo $row->grade;?></td>  
            <td>
                  <a href="#" class="delete_data btn btn-info btn-xs" id="<?php echo $row->student_id; ?>">delete</button>
              
            </td>
            </tr>  
         <?php
           }
         }           
            else{?>

            <!-- <th scope="row"></th> -->
            <tr>
            <td>no data found</td>
            <td>no data found</td>
            <td>no data found</td>
            <td>no data found</td>
            <td>no data found</td>
            </tr>
          <?php
        }
          ?> 
      </tbody>
     </table>
    </div>
   </div>
  </div>
</div>
</div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {

   $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
    $('.delete_data').click(function() {
        var id = $(this).attr("id");
        if (confirm("are you sure")) {
          window.location="<?php echo base_url();?>auth/delete/"+id;
        }
        else{
          return false;
        }
    });

     });
</script>
  
 </body>
</html>
 