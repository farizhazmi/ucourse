<?php 
  include_once 'header.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Courses
        <small>Courses List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Courses </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <table class="table table-border">
            <thead>
              <tr>
                <th width="15px">No.</th>
                <th>Course Name</th>
                <th>Ratings</th>
                <th>Students</th>
                <th>Total Materi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><a href="coursedetail.php">Programming Fundamental with Python</a></td>
                <td>4.7</td>
                <td>120</td>
                <td>30</td>
                <td><a href=""><i class="ion ion-ios-trash"></i></a></td>
              </tr>
              <tr>
                <td>2</td>
                <td><a href="">Programming Fundamental with PHP</a></td>
                <td>4.7</td>
                <td>120</td>
                <td>30</td>
                <td><a href=""><i class="ion ion-ios-trash"></i></a></td>
              </tr>
              <tr>
                <td>3</td>
                <td><a href="">Programming Fundamental with Java</a></td>
                <td>4.7</td>
                <td>120</td>
                <td>30</td>
                <td><a href=""><i class="ion ion-ios-trash"></i></a></td>
              </tr>
            </tbody>
          </table>
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