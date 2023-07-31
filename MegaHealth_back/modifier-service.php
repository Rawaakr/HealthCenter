<?php 
include('includes/connect_db.php');
$id = $_GET['id'];
/*echo $id;
exit;*/
$req = $bdd->query(" SELECT * FROM services WHERE id = $id ");
$donnees = $req->fetch();
?>
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 21:48:21 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>modifier services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Nazox - MVC5 & ASP.Net Core Admin & Dashboard Template, Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
        <?php include "includes/header.php"; ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "includes/menu.php"; ?>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h1 class="card-title" style=" color: gray;font-weight: bold; font-size: 30px">modifier service</h1>
                                        <br>
                                        <form action="controller/modifService.php?id=<?php echo $donnees['id'];?>" method="post">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Titre</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="titre" value="<?php echo $donnees['titre']?>" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description"><?php echo $donnees['description']?>"</textarea>
                                            </div>
                                        </div>	
                                        <div>
                                        <button type="submit" class="btn btn-secondary">modifier</button>
                                   		</div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                
                        <?php include "includes/footer.php"; ?>

    </body>

<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 21:48:21 GMT -->
</html>
