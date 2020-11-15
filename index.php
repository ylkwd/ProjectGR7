<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php
$dbhost = "mysql.auburn.edu";
$dbuser = "szl0181";
$dbpass = "Ls65920078";
$dbname = "szl0181db";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>
<div class="container">
	<div class="jumbotron">
		<h1>Database System term project</h1>
    <p>Graduate Group 7</p>
    <p>Shuo liang, Yaoxuan Luan, Zixin Lin</p>
    <p>2020 Fall</p>
	</div>
</div>  
<div class="container">
  <h2>Database tables</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#db_book">db_book</a></li>
    <li><a data-toggle="tab" href="#db_customer">db_customer</a></li>
    <li><a data-toggle="tab" href="#db_employee">db_employee</a></li>
    <li><a data-toggle="tab" href="#db_order">db_order</a></li>
    <li><a data-toggle="tab" href="#db_orderdetail">db_order_detail</a></li>
    <li><a data-toggle="tab" href="#db_shipper">db_shipper</a></li>
    <li><a data-toggle="tab" href="#db_subject">db_subject</a></li>
    <li><a data-toggle="tab" href="#db_supplier">db_supplier</a></li>
  </ul>

  <div class="tab-content">
    <div id="db_book" class="tab-pane fade in active">
      <h3>db_book</h3>
      <table class="table table-striped">
    	<thead>
     	<tr>
     		<?php
     			$query = "SHOW COLUMNS FROM db_book";
				$result = mysqli_query($con, $query);
				while($row = mysqli_fetch_row($result))
				{
					echo "<th>".$row[0]."</th>";
				}
     		?>
        	
     	</tr>
   		</thead>
    	<tbody>
      		<?php
      			$query = "select * from db_book";
				$result = mysqli_query($con, $query);
				while($row = mysqli_fetch_row($result))
				{
					echo "<tr>";
					$arrlength = count($row);
					for($i=0;$i<$arrlength;$i++)
					{
						echo "<td>".$row[$i]."</td>";
					}
					echo "</tr>";			
				}
      		?>
     	</tbody>
     </table>
 	</div>
    <div id="db_customer" class="tab-pane fade">
      <h3>db_customer</h3>
      <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_customer";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_customer";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
    <div id="db_employee" class="tab-pane fade">
      <h3>db_employee</h3>
      <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_employee";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_employee";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
    <div id="db_order" class="tab-pane fade">
      <h3>db_order</h3>
      <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_order";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_order";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
    <div id="db_orderdetail" class="tab-pane fade">
      <h3>db_order_detail</h3>
     <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_order_detail";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_order_detail";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
    <div id="db_shipper" class="tab-pane fade">
      <h3>db_shipper</h3>
      <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_shipper";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_shipper";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
    <div id="db_subject" class="tab-pane fade">
      <h3>db_subject</h3>
      <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_subject";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_subject";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
    <div id="db_supplier" class="tab-pane fade">
      <h3>db_supplier</h3>
      <table class="table table-striped">
      <thead>
      <tr>
        <?php
          $query = "SHOW COLUMNS FROM db_supplier";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<th>".$row[0]."</th>";
        }
        ?>
          
      </tr>
      </thead>
      <tbody>
          <?php
            $query = "select * from db_supplier";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_row($result))
        {
          echo "<tr>";
          $arrlength = count($row);
          for($i=0;$i<$arrlength;$i++)
          {
            echo "<td>".$row[$i]."</td>";
          }
          echo "</tr>";     
        }
          ?>
      </tbody>
     </table>
    </div>
  </div>
  	<div class = "tab-content">
  	<form method="post" action="index.php">
     <div class="form-group">
  		<label for="queries">query</label>
  		<textarea class="form-control" rows="5" id="queries" name="textarea"></textarea>
  		<button type="submit" class="btn btn-default" onclick="getResult()">submit</button>
	 </div>
	</form>
	 <div id = "result">
	 	 <table class="table table-striped">
    	<thead>
     	<tr>
     		<?php
     			if(isset($_POST["textarea"]) != NULL)
     			{	

     				$query = $_POST["textarea"];
				$query = str_replace('\\','',$query);
					$result = mysqli_query($con, $query);
					if($result)
					{
						$finfo = $result->fetch_fields();
        				foreach ($finfo as $val)
        			 	{
            				echo "<th>".$val->name."</th>";
        			 	}
        			 }
        			 else
        			 {
        			 	echo "<div class='alert alert-danger'>";
  						echo "<strong>Errorcode:".mysqli_errno($con)."</strong> "."!:".mysqli_error($con);
						echo "</div>";
        			 }
        		}
       			
     		?>
        	
     	</tr>
   		</thead>
    	<tbody>
      		<?php
      			if(isset($_POST["textarea"]) != NULL)
      			{
      				$query = $_POST["textarea"];
				$query = str_replace('\\','',$query);
					$result = mysqli_query($con, $query);
					if($result)
					{
						while($row = mysqli_fetch_row($result))
						{
							echo "<tr>";
							$arrlength = count($row);
							for($i=0;$i<$arrlength;$i++)
							{
								echo "<td>".$row[$i]."</td>";
							}
							echo "</tr>";			
						}
					}
					unset($_GET["textarea"]);
				}
      		?>
     	</tbody>
     	</table>
	 </div>
    </div>
</div>

</body>
</html>
