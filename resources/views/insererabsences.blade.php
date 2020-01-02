<?php  if (!isset($_SESSION)){session_start();}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>SCHOOL ESI</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}} " rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3" style="color:white">
                    SCHOOL <sup>ESI</sup>
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider">
            <div class="sidebar-heading" data-intro="introduire les informations de la silmulations">
                Fonctionnalités
            </div>
            <li class="nav-item">
                <a aria-controls="collapseTwo" aria-expanded="true" class="nav-link collapsed" data-target="#collapseTwo" data-toggle="collapse" href="#"><img src="./svg/one.svg">
                    <span data-intro="choisir la taille de la mémoire" data-step="3">Liste des étudiants</span></a>
                <div aria-labelledby="headingTwo" class="collapse" data-parent="#accordionSidebar" id="collapseTwo">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Le groupe:</h6>
                        <form methode="post" action="{{action('etudiantsController@ab')}}">   
                            <input  type="text"  name ="gr" placeholder="groupe" required/>
                            <input  type="submit" id="affichetab" value="afficher"/>
                            </form>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a aria-controls="nbPartitons" aria-expanded="true" class="nav-link collapsed" data-target="#nbPartitons" data-toggle="collapse" href="#"><img src="./svg/two.svg">
                    <span data-intro="introduire les informations des partitons une par une" data-step="4">Saisie absences</span></a>
                <div aria-labelledby="headingUtilities" class="collapse" data-parent="#accordionSidebar" id="nbPartitons">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Le groupe:</h6>
                        <form methode="post" action="{{action('etudiantsController@abse')}}">   
                            <input  type="text"  name ="gr" placeholder="groupe" required/>
                            <input  type="submit" value="afficher"/>
                            </form>
                    </div>
                </div>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div class="d-flex flex-column bg-gray-400" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div id="appp">
                                <div class="container">
                                <tete>
                                    <!--component vue-->
                                </tete>
                            </div>
                    </div>
                </nav>
            </div>          
          <div class="container-fluid">
                <div id="card" class="card cardshadow-lg p-3 mb-5 bg-white rounded" style="top:-6px;">
                    <svg class="card-image" fill="none" id="svg2" style="position:relative;width:100%;height:550px;" viewbox="0 0 967 460" width="1000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">          
                        <div id="app">
                                <div class="container">    
                                <listeabsences>
                                         <!--component vue-->
                                </listeabsences>
                                </div>
                            </div>
                            <table border="1" style="margin-top:-980px;margin-left:51px; background-color:white;position:relative;width:1091px;height:100%;">          
                                <tbody>
                                   <?php $i=1;$etu = array();?>
                                    @foreach($fins as $fin)
                                    <tr>
                                    <td style="width:70px;"><?php echo $i ?></td>
                                    <td style="width:241px;"><?php echo $fin->matricule ?></td>
                                    <td style="width:385px;"><?php echo $fin->name ?></td>
                                    <td style="width:263px;">
                                    <form methode="post" action="{{action('absencesController@inserer')}}">       
                                    <input type="text"   name ="abs[]" placeholder="o/n" style="width:99%;" required/>
                                    </td></tr>
                                    <?php $n= array_push($etu,$fin->matricule);$i++; ?>
                                    @endforeach
                                    </tbody>
                                    </table>   
                                    <?php $_SESSION['etud']= $etu; ?>
                                    <input style="margin-top:30px;width:180px;text-align:center;border-width:3px;position: relative;right: -470px"  type="date"  name ="date" placeholder="Date d'absence" required/>
                                    <div id="app">
                                    <div class="container">
                                            <div v-on:mouseover="available=!available" v-bind:class="{available:available}">
                                         <input style="background-color:rgba(28, 200, 138, 0.9);color: #fff;;margin-top:15px;width:180px;text-align:center;border-width:3px;position: relative;right: -418px"type="submit" value="Valider"/>
                                            </div>
                                    </div></div>
                                </form>
                    </svg>
                </div>
            </div>
        </div>
        <script src= "{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>