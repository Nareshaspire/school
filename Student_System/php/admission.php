<?php


// if(isset($_SESSION['username'])){
//     header("location:login.php");
// }

// elseif($_SESSION['usertype'] == 'admin'){
//     header('location:adminhome.php');
// }


$host="localhost";

$user="root";

$password="";

$db="schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * from admission";

$result = mysqli_query($data,$sql);

?>

<body> 

   <?php
    include 'admin_sidebar.php';
   ?> 

   <div class="content">
    <center>
    <h1 class="">applied for admisssion</h1>
    <table border = "1px">
        <tr class="table-success">
             <th style="padding: 20px; font-size:15px">Name</th>
             <th style="padding: 20px; font-size:15px">Email</th>
             <th style="padding: 20px; font-size:15px">Phone</th>
             <th style="padding: 20px; font-size:15px">Message</th>
        </tr> 
        
                <?php
            while($info = $result->fetch_assoc() )
            {
            ?>
        <tr>
               <td style = "padding:20px;">
<?php echo "{$info ['name']}" ?>

            </td>
               <td style = "padding:20px;">
               <?php echo "{$info ['email']}" ?>
            </td>
               <td style = "padding:20px;">
               <?php echo "{$info ['phone']}" ?>
            </td>
               <td style = "padding:20px;">
               <?php echo "{$info ['message']}" ?>
            </td>
      </tr>

      <?php
            }
      ?>
    </table>
        </center>
   </div>
</body>
