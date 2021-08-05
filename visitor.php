
<?php
include 'config.php';
if(isset($_POST['send'])){
    $t=$_POST['text'];
    $u=$_POST['mobile'];
    $p=$_POST['email'];
    $c=$_POST['employee'];
    $s=$_POST['purpose'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into visitor(name,mobile,email,employee,purpose,image,visiting_date)value('$t','$u','$p','$c','$s','$img',now())";
    mysqli_query($con, $i);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script>
        if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
</head>
<body>


            <form method="POST" enctype="multipart/form-data">
              
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="text-success">Visitor's Dashboard</h2>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                               <div class="form-group mb-2">
                               <label>Full Name</label>
                                <input type="text" class="form-control" name="text" />
                               </div>
                               <div class="form-group mb-2">
                               <label>Mobile No</label>
                               <input type="text" class="form-control" name="mobile" />
                               </div>
                               <div class="form-group mb-2">
                               <label>Email-ID</label>
                               <input type="text" class="form-control" name="email"  />
                               </div>
                               <div class="form-group mb-2">
                                   <label>Select Employee</label>
                                  <select name="employee" class="form-control">
                                  <option value="">Select</option>
                                  <option value="ahmed khan">Ahmed Khan</option>
                                  <option value="shaik rafiq">Shaik Rafiq</option>
                                  <option value="anjum">Anjum</option>
                                  <option value="sufiya">Sufiya</option>
                                  <option value="sufiya kouser">Sufiya Kouser</option>
                                  <option value="sidra">Sidra</option>
                                  <option value="farzana">Farzana</option>
                                  <option value="uzma">Uzma</option>
                                  <option value="tasmiya">Tasmiya</option>
                                 </select>
                               </div>
                               <div class="form-group mb-2">
                                <label>Purpose of visit</label>
                                <textarea class="form-control" name="purpose"></textarea>
                               </div>
                               <div class="form-group mb-3">
                                <input type="file"  name="f1"/>
                               </div>
                               <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="submit" name="send" />
                               </div>
                              
                               
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                
           </div>
            </form>

    
    
</body>
</html>

<!-- <div class="form-group mb-2">
    <label>Purpose of visit</label>
    <textarea class="form-control" name="purpose" />
    </div> -->

    <!-- <div class="form-group">
        
        </div> -->

<!-- 
        <div class="form-group">
          
           </div> -->
