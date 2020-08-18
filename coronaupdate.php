<?php  include "logicCorona.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COVID-19 tracker</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" i></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500;600;700;800&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/85f3aaa0a1.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">
    
</head>
<body>
   <div class="container-fluid bg-light p-5 text-center my-3">
    <h1>Covid-19 Tracker</h1>
    <h5 class="text-muted">All the Covid-19 cases around the world!!</h5> 
    </div>
     
     <div class="container my-5">
         <div class="row text-center">
             <div class="col-xl text-white bg-primary">
                 <h5>Confirmed Worldwide Cases</h5>
                 <?php echo $total_confirmed;?>
                 
                 <div class="col-xl text-white ">
                 <h5> Bangladesh Confirmed Cases</h5>
                 <?php echo $ban_conf;?>
             </div>
             </div>
             
             <div class="col-xl text-white bg-success">
                 <h5>Recovered Worldwide Cases</h5>
                  <?php echo $total_recovered;?>
                  
                  <div class="col-xl text-white">
                 <h5> Bangladesh Recovered Cases</h5>
                  <?php echo $ban_rec;?>
             </div>
             </div>
             
             
             <div class="col-xl text-white bg-danger ">
                 <h5>Deaths Worldwide Cases</h5>
                  <?php echo $total_deaths;?>
                  
                  
             <div class="col-xl text-white">
                 <h5> Bangladesh Deaths Cases</h5>
                  <?php echo $ban_deaths;?>
             </div>
             
             </div>
             
         </div>
     </div>
     
      
     
     
      <div class="container-fluid">
          <table class="table">
              
              <thead class="thead-dark">
                  <tr>
                     <th scope="col">Countries</th>
                       <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                         <th scope="col">Deceased</th>
                      
                  </tr>
                  
              </thead>
              <tbody>
                  <?php
    
                      foreach($data as $key=> $value)
                          
                      {
                          $increase=$value[$days_count]['confirmed']- $value[$days_count_prev]['confirmed'];
                       ?>
                       <tr>
                           <th><?php echo $key;?></th>
                           <td><?php echo $value[$days_count]['confirmed'];?>
                                    
                                       
                            <?php if($increase != 0){ ?> 
                                           
                           <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
                               <?php }?>
                                
                                   </td>
                            <td><?php echo $value[$days_count]['recovered'];?></td>
                             <td><?php echo $value[$days_count]['deaths'];?></td>
                       </tr>
                       
                       <?php }?>
                  
                  
              </tbody>
              
          </table>
          
          
      </div>
</body>
</html>