<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $telephone = $_POST['telephone'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`,`telephone`) VALUES (NULL,'$first_name','$last_name','$email','$telephone')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>  Application sur la Gestion des Participation a la Formation Cloud AWS Cote d'Ivoire</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: gray;">
   Application sur la Gestion des Participation a la Formation Cloud AWS Cote d'Ivoire
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Formulaire d'iscription</h3>
         <p class="text-muted">Veuillez remplire par vos informations de contacts</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Prénom du participant:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert">
               </div>

               <div class="col">
                  <label class="form-label">Nom du pparticipant:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Einstein">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Adresse email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="col">
                  <label class="form-label">Numéro de telephone:</label>
                  <input type="tel" class="form-control" name="telephone" id="telephone" 
                        pattern="[0-9]{10}" maxlength="10" placeholder="Entrer votre numéro de telephone">
            </div>

            <div style="padding: 15px">
               <button  type="submit" class="btn btn-success" name="submit">Validé</button>
               <a href="index.php" class="btn btn-danger">Annulé</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>