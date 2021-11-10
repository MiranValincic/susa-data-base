<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    

    <link rel="stylesheet" href="style.css?v=123">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Susa S. Sauer GmbH & Co. KG</title>
</head>
<body>

    <header>
        <div class="slika my-5 d-flex justify-content-center">
            <img src="slike/logo.png" alt="Logo">
        </div>

        <h1 class="text-center"> DATA-BASE</h1>
        
    </header>
    
 <section>
    <div class="container">
        <form id="forma" name="form1"  method="post">
           <div class="mr-3">
              <input id="artikl" type="text" class="form-control" name="artikl" placeholder="ID">
            </div>
           <div class="mr-3" >
             <input id="io" type="text" class="form-control " name="io" placeholder="IO">
            </div>
            <div class="mr-3">
             <input id="nio" type="text" class="form-control" name="nio" placeholder="NiO">
            </div>
            <div class="mr-3">
               <input id="name" type="text" class="form-control " name="name" placeholder="Name">
            </div>
          <button id="submit" type="submit" value="Save to database"  name="submit" class="btn">Save</button>
        </form>

        <div class="alert alert-success alert-dismissible mt-3" id="success" style="display:none;">
	       <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	    </div>
    </div>
    
 </section>

   <div class="container my-5">
      <table class="table">
         <thead>
            <tr>
              <th>Artikl-nr</th>
              <th>IO</th>
              <th>NiO</th>
              <th>Name</th>
              <th>Date</th>
            </tr>
         </thead>

         <tbody>
           <?php
     
             $conn = mysqli_connect("localhost", "root", "mysql123", "data");

             $result = mysqli_query($conn, "SELECT * FROM parts");

             while ($row = mysqli_fetch_assoc($result)):

            ?>

           <tr>
             <td><?php echo $row['ID']; ?></td>
             <td><?php echo $row['IO']; ?></td>
             <td><?php echo $row['NiO']; ?></td>
             <td><?php echo $row['Name']; ?></td>
             <td><?php echo $row['Date']; ?></td>
           </tr>
     
          <?php endwhile; ?>

         </tbody>

        </table>
    </div>

</body>

<script src="jquery-3.3.1.min.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
<script>
    $(".table") .DataTable();
</script>

</html>