<head>



</head>

<?php include('main_header/header.php');?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
         <?php include('left_sidebar/sidebar.php');?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
               <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                             <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i> Add Request </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Request</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card influencer-profile-data">
                                        <div class="card-body">
                                             <div class="" id="message"></div>
                                            <form id="validationform" name="docu_forms" data-parsley-validate="" novalidate="" method="POST">
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"><i class="fa fa-file"></i> Request Info</label>
                                                </div>
                                                <?php 

                                                  function createRandomcnumber() {
                                                      $chars = "003232303232023232023456789";
                                                      srand((double)microtime()*1000000);
                                                      $i = 0;
                                                      $control = '' ;
                                                      while ($i <= 3) {

                                                        $num = rand() % 33;

                                                        $tmp = substr($chars, $num, 1);

                                                        $control = $control . $tmp;

                                                        $i++;

                                                      }
                                                      return $control;
                                                     }
                                                     $cNumber ='CTRL-'.createRandomcnumber();


                                                ?>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Control No.</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum" type="text" value="<?= $cNumber.''.$_SESSION['student_id']; ?>" name="control_no" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                 <?php
                                                      $conn = new class_model();
                                                      $getstudno = $conn->student_profile($student_id);
                                                   ?>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Student ID</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  name="studentID_no" value="<?= $getstudno['studentID_no']; ?>" type="text" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                     
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Email Address</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  name="email_address" value="<?= $getstudno['email_address']; ?>" type="text" required="" placeholder="" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Document Name</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <select data-parsley-type="alphanum" type="text" name="document_name" id="document_name" required="" placeholder="" class="form-control">
                                                        
                                                        <option value="">&larr;Select Document &rarr;</option>
                                                        <option value="Certified True Copy of Certificate of Registration">CTC of Certificate of Registration</option>
                                                        <option value="Certified True Copy of Certificate of Registration">CTC of Grades</option>
                                                        <option value="Certified True Copy of Certificate of Registration">Transcript of Records</option>
                                                        <option value="Certificate of Registration">Certificate of Registration</option>
                                                        <option value="Certificate of Registration">Certificate of Grades</option>
                                                        <option value="Certificate of Enrollment">Honorable Dismissal</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">No. of Copies</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="number" name="no_ofcopies" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>

                                                 <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Request</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="text" name="date_request" required="" placeholder="" class="form-control" value="<?php echo date('M d Y');?>" readonly>
                                                    </div>
                                                </div>

<!--                                                  <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Releasing</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                        <input data-parsley-type="alphanum"  type="date" name="date_releasing" required="" placeholder="" class="form-control">
                                                    </div>
                                                </div>
 -->
                                                </div>
                                                <div class="form-group row text-right">
                                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                        <input type="text" name="student_id" value="<?= $_SESSION['student_id'];?>" class="form-control" hidden>
                                                        <button type="button" class="btn btn-space btn-primary" id="add-request"style="background-color:#1269AF !important; color:white">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
           
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          var firstName = $('#firstName').text();
          var lastName = $('#lastName').text();
          var intials = $('#firstName').text().charAt(0) + $('#lastName').text().charAt(0);
          var profileImage = $('#profileImage').text(intials);
        });
    </script>
    <!-- Modal Structure -->
<div class="modal fade" id="requestDetailsModal" tabindex="-1" role="dialog" aria-labelledby="requestDetailsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requestDetailsLabel">Request Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Control No:</strong> <span id="modalControlNo"></span></p>
        <p><strong>Student ID:</strong> <span id="modalStudentID"></span></p>
        <p><strong>Email Address:</strong> <span id="modalEmail"></span></p>
        <p><strong>Document Name:</strong> <span id="modalDocumentName"></span></p>
        <p><strong>Number of Copies:</strong> <span id="modalCopies"></span></p>
        <p><strong>Date Requested:</strong> <span id="modalDateRequested"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="printRequest">Print</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript for Print functionality -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    let btn = document.querySelector('#add-request');
    btn.addEventListener('click', () => {

        const control_no = document.querySelector('input[name=control_no]').value;
        const studentID_no = document.querySelector('input[name=studentID_no]').value;
        const email_address = document.querySelector('input[name=email_address]').value;
        const document_name = $('#document_name option:selected').val();
        const no_ofcopies = document.querySelector('input[name=no_ofcopies]').value;
        const date_request = document.querySelector('input[name=date_request]').value;
        const student_id = document.querySelector('input[name=student_id]').value;

        var data = new FormData(this.form);

        data.append('control_no', control_no);
        data.append('studentID_no', studentID_no);
        data.append('email_address', email_address);
        data.append('document_name', document_name);
        data.append('no_ofcopies', no_ofcopies);
        data.append('date_request', date_request);
        data.append('student_id', student_id);

        if (control_no === '' || studentID_no ==='' || email_address ==='' || document_name ==='' || no_ofcopies ==='' || date_request ===''){
            $('#message').html('<div class="alert alert-danger"> Required All Fields!</div>');
        } else {
            $.ajax({
                url: '../init/controllers/add_request.php',
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                async: false,
                cache: false,
                success: function(response) {
                    $("#message").html(response);
                    window.scrollTo(0, 0);
                    $("#modalControlNo").text(control_no);
                    $("#modalStudentID").text(studentID_no);
                    $("#modalEmail").text(email_address);
                    $("#modalDocumentName").text(document_name);
                    $("#modalCopies").text(no_ofcopies);
                    $("#modalDateRequested").text(date_request);  
                    $("#requestDetailsModal").modal("show");

                    $('#requestDetailsModal').on('hidden.bs.modal', function () {
                    window.location.href = "/drms/student/request-list.php";
        });
                },
                error: function(response) {
                    console.log("Failed");
                }
            });
        }
    });

    const printBtn = document.getElementById('printRequest');

    printBtn.addEventListener('click', () => {
        // Get the modal content to print
        var printContent = document.querySelector('.modal-body').innerHTML;
        
        // Add the "Thank you" message with a line break
        printContent += "<br><p style='text-align: center;'>Thank you for using PTC Registrar Kiosk!!!</p>";

        // Open a new print window
        var printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Print Request Details</title></head><body>');
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Trigger the print dialog
        printWindow.print();
    });
});
</script>




<div class="modal fade" id="requestDetailsModal" tabindex="-1" role="dialog" aria-labelledby="requestDetailsLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="requestDetailsLabel">Request Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>Control No:</strong> <span id="modalControlNo"></span></p>
        <p><strong>Student ID:</strong> <span id="modalStudentID"></span></p>
        <p><strong>Email Address:</strong> <span id="modalEmail"></span></p>
        <p><strong>Document Name:</strong> <span id="modalDocumentName"></span></p>
        <p><strong>Number of Copies:</strong> <span id="modalCopies"></span></p>
        <p><strong>Date Requested:</strong> <span id="modalDateRequested"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="printRequest">Print</button>
      </div>
    </div>
  </div>
</div>

</body>
 
</html>