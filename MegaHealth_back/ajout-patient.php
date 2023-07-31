<!doctype html>
<html lang="en">
  
<head>
        
        <meta charset="utf-8" />
        <title>Ajout utilisateur</title>
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

                                        <h1 class="card-title" style=" color: gray;font-weight: bold; font-size: 30px">Ajouter patient</h1>
                                        <br>
                                        <form action=" controller/ajoutPatient.php" method="post">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="nom" type="text" placeholder="nom" id="example-text-input">
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Prénom</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="prenom" type="text" placeholder="prénom" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Login</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" nom="login" type="text" placeholder="Login" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Adresse</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="adresse" type="text" placeholder="adresse" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Département</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="departement" type="text" placeholder="département" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">nom medecin</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="nomMedecin" type="text" placeholder="nomMedecin" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Numéro de téléphone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="telephone" type="text" placeholder="00 216 11 111 111" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Date naissance</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="dateNaiss" type="date" placeholder="jj/mm/yy" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" name="role" class="col-sm-2 col-form-label">Rôle</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="role">
                                                	<option name="role">Administrateur</option>
                                                	<option name="role">Médecin</option>
                                                    <option name="role">Patient</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="email" type="Email" placeholder="email@gmail.com" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Mot de passe</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" name="mdp" type="Password" placeholder="*****" id="example-text-input">
                                            </div>
                                        </div>

                                        
                                        <div>
                                        <button type="submit" class="btn btn-secondary">envoyer</button>
                                   		</div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                     
                <!-- End Page-content -->

                      

                        
                
                <?php include "includes/footer.php"; ?>

    </body>

<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Oct 2021 21:48:21 GMT -->
</html>
