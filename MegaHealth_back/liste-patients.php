<?php include('includes/connect_db.php');
$req=$bdd->query ("SELECT * FROM user");
?>
<!doctype html>
<html lang="en">
DATA TABLES

<head>
        
        <meta charset="utf-8" />
        <title>Liste des patients</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Nazox - MVC5 & ASP.Net Core Admin & Dashboard Template, Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     

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

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Liste des patients</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
        
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Email</th>
                                                <th>Date naissance</th>
                                                <th>Numéro téléphone</th>
                                                <th>Nom médecin</th>
                                                <th>Département</th>
                                                <th>Rôle</th>
                                                <th>action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php 

                                                while ($donnees = $req->fetch()) {
                                                    if($donnees['role']==='Patient'){
                                                ?>
                                            <tr>
                                                <td><?php echo $donnees['nom'] ?></td>
                                                <td><?php echo $donnees['prenom'] ?></td>
                                                <td><?php echo $donnees['email'] ?></td>
                                                <td><?php echo $donnees['dateNaiss'] ?></td>
                                                <td><?php echo $donnees['telephone'] ?></td>
                                                <td><?php echo $donnees['nomMedecin'] ?></td>
                                                <td><?php echo $donnees['departement'] ?></td>
                                                <td><?php echo $donnees['role'] ?></td>
                                                <td>
                                                    <a href="modifier-patient.php?id=<?php echo $donnees['id']; ?>"><button type="button" class="btn btn-primary">Modifier</button></a>
                                                    <a href="controller/SuppPatient.php?id=<?php echo $donnees['id']; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
                                                </td>
                                            </tr>
                                            <?php }} ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <?php include "includes/footer.php"; ?>

    </body>

<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 21:48:32 GMT -->
</html>
