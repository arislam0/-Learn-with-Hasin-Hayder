<?php
session_start();

require_once "inc/function.php";
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';
if ( 'edit' == $task ) {
    if ( !hasPrivilege() ) {
        header( 'location: index.php?task=report' );
    }
}
if ( 'add' == $task ) {
    if ( !hasPrivilege() ) {
        header( 'location: index.php?task=report' );
    }
}
if ( 'delete' == $task ) {
    if ( !isAdmin() ) {
        header( 'location: index.php?task=report' );
        return;
    }
    $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
    if ( $id > 0 ) {
        deleteStudent( $id );
        header( 'location: index.php?task=report' );
    }
}

if ( 'seed' == $task ) {
    if ( !isAdmin() ) {
        header( 'location: index.php?task=report' );
        return;
    }
    seed();
    $info = "Seeding is completed";
}

$fname = '';
$lname = '';
$roll = '';

if ( isset( $_POST['submit'] ) ) {
    $fname = filter_input( INPUT_POST, 'fname', FILTER_SANITIZE_STRING );
    $lname = filter_input( INPUT_POST, 'lname', FILTER_SANITIZE_STRING );
    $roll = filter_input( INPUT_POST, 'roll', FILTER_SANITIZE_STRING );
    $id = filter_input( INPUT_POST, 'id', FILTER_SANITIZE_STRING );

    if ( $id ) {
        //update the existing student
        if ( $fname != '' && $lname != '' && $roll != '' ) {
            $result = updateStudent( $id, $fname, $lname, $roll );
            if ( $result ) {
                header( 'location: index.php?task=report' );
            } else {
                $error = 1;
            }
        }
    } else {
        if ( $fname != '' && $lname != '' && $roll != '' ) {

            $result = addStudent( $fname, $lname, $roll );

            if ( $result ) {
                header( 'location: index.php?task=report' );
            } else {
                $error = 1;
            }
        }

    }

}

?>

<!doctype html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <title>Form Example</title>
	  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">

	   <style>

	     body{ margin-top:30px

      };

	   </style>

</head>

<body>

   <div class="container">
      <div class="row">

          <div class="column column-60 column-offset-20">
                <h2>Project 2 - CRUD</h2>
                 <p>A sample project to perform CRUD operations using files and PHP</p>
                 <?php include_once 'inc/templates/nav.php';?>
               <hr/>
               <?php
if ( $info != '' ) {
    echo "<p>{$info}</p>";
}
?>
          </div>
       </div>

       <?php if ( '1' == $error ): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <blockquote>
                    Duplicate Roll Number
                </blockquote>
            </div>
        </div>
    <?php endif;?>

    <?php if ( 'report' == $task ): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport();?>
                <div>
                    <pre>
                        <?php printRaw();?>
                    </pre>
                </div>
            </div>
        </div>
    <?php endif;?>

       <?php if ( 'add' == $task ): ?>
          <div class="row">
           <div class="column column-60 column-offset-20">
              <form action="index.php?task=add" method="post">
                 <label for="fname">First Name</label>
                 <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>" >

                 <label for="lname">Last Name</label>
                 <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

                 <label for="roll">Roll</label>
                 <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

                 <button type="submit" class="button-primary" name="submit">Save</button>

              </form>
           </div>
        </div>
        <?php endif;?>

        <?php
if ( 'edit' == $task ):
    $id = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_STRING );
    $student = getStudent( $id );
    if ( $student ):
    ?>
														          <div class="row">
														           <div class="column column-60 column-offset-20">
														              <form  method="post">
														                <input type="hidden" value="<?php echo $id ?>" name="id">

														                 <label for="fname">First Name</label>
														                 <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>" >

														                 <label for="lname">Last Name</label>
														                 <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">

														                 <label for="roll">Roll</label>
														                 <input type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?>">

														                 <button type="submit" class="button-primary" name="submit">Update</button>

														              </form>
														           </div>
														        </div>
														        <?php
endif;
endif;?>

      </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
 </body>
</html>