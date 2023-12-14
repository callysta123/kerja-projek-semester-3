<?php 
include 'config.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span> 
                        </a>
                    </li>
                    
                    
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle"> -->
                        
                        <span class="d-none d-sm-inline mx-1">User</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li> -->
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li> -->
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <table border="3" class="table table-striped table-hover" >
        <thead>
            <tr>
                <th>no</th>
                <th>tanggal</th>
                <th>name</th>
                <th>email</th>
                <th>message</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>


            <?php
    $sql = "SELECT * FROM db_contact";
    $no = 1;
    $query = mysqli_query($db, $sql);
    while($feedback = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$feedback['tanggal']."</td>";
            echo "<td>".$feedback['name']."</td>";
            echo "<td>".$feedback['email']."</td>";
            echo "<td>".$feedback['message']."</td>";
            echo "<td><a href='hapus.php?email=$feedback[email]' class='btn btn-primary'>delete</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
        </div>
    </div>
</div>

</body>
<script>
    let button = document.querySelector(".btn");

    button.addEventListener("click", (event)=>{
       
            var result = confirm("Yakin untuk menghapus data?");
            if (result == true) {
                 return;
            } else {
                button.removeAttribute("href");
            }
    })
</script>
</html>