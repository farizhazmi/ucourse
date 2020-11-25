<?php 
  include_once 'header.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Course Detail
        <small>Course Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Course Detail </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
            <form action="/" method="POST">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Course Code</label>
                    <input type="text" name="course_code" class="form-control" readonly="" />
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <textarea id="description" name="description" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>What You Get</label>
                    <textarea id="what_you_get" name="what_you_get" class="form-control"></textarea>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Course Name</label>
                    <input type="text" name="course_name" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Requirement</label>
                    <textarea id="requirement" name="requirement" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>This Course Included</label>
                    <textarea id="this_course_included" name="this_course_included" class="form-control"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h4>Curriculums <span><a id="btn-add-parent" onclick="addParent()">Add Parent</a></span></h4>
                  <div id="container-materi">
                    <div class="form-group">
                      <input type="text" name="parent[]" class="form-control" />
                      <div><a href="#" id="btn-add-child">Add Child</a></div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              
            </form>
        </div>
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

<?php 
  include_once 'footer.php';
?>