<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ url('/dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Tableau de bord </span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('pos') }}">
                        <span class="badge bg-pink float-end">ici</span>
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Facturation </span>
                    </a>
                </li>





                <li class="menu-title mt-2">Apps</li>



                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Gérer les employés  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.employee') }}">Tous les employés</a>
                            </li>
                            <li>
                                <a href="{{ route('add.employee') }}">Ajouter un employé </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#salary" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Salaire de l'employé </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="salary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.advance.salary') }}">Ajouter un salaire anticipé</a>
                            </li>
                            <li>
                                <a href="{{ route('all.advance.salary') }}">Tous les salaires anticipés</a>
                            </li>

                            <li>
                                <a href="{{ route('pay.salary') }}">Payer un salaire</a>
                            </li>

                            <li>
                                <a href="{{ route('month.salary') }}">Salaire du mois dernier</a>
                            </li>

                        </ul>
                    </div>
                </li>




                <li>
                    <a href="#attendence" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span>Présence des employés </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="attendence">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.attend.list') }}">Liste de présence des employés </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Gestion des clients   </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}">Tous les clients</a>
                            </li>
                            <li>
                                <a href="{{ route('add.customer') }}">Ajouter un client</a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Gestion des fournisseurs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}">Tous les fournisseurs</a>
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}">Ajouter un fournisseur</a>
                            </li>

                        </ul>
                    </div>
                </li>






                <li>
                    <a href="#category" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Catégorie </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="category">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">Toutes les catégories </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#product" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span>Les articles </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.product') }}">Tous les articles </a>
                            </li>

                            <li>
                                <a href="{{ route('add.product') }}">Ajouter un article </a>
                            </li>
                            <li>
                                <a href="{{ route('import.product') }}">Importer un article </a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li>
                    <a href="#orders" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Les commandes  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="orders">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('pending.order') }}">Les commandes en attente </a>
                            </li>

                            <li>
                                <a href="{{ route('complete.order') }}">Les commandes complétes </a>
                            </li>
                            <li>
                                <a href="{{ route('pending.due') }}">les commandes inachevés </a>
                            </li>


                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#stock" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Gérer les stocks  </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="stock">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('stock.manage') }}">Les réserves </a>
                            </li>


                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#admin" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Réglages Admin et User    </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="admin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.admin') }}">Tous les administrateurs </a>
                            </li>

                            <li>
                                <a href="{{ route('add.admin') }}">Ajouter un administrateur </a>
                            </li>

                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#permission" data-bs-toggle="collapse">
                        <i class="mdi mdi-email-multiple-outline"></i>
                        <span> Rôles et autorisations   </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="permission">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.permission') }}">Toutes les autorisations </a>
                            </li>

                            <li>
                                <a href="{{ route('all.roles') }}">Tous les rôles </a>
                            </li>

                            <li>
                                <a href="{{ route('add.roles.permission') }}">Rôles dans l'autorisation </a>
                            </li>

                            <li>
                                <a href="{{ route('all.roles.permission') }}">Tous les rôles avec autorisation </a>
                            </li>


                        </ul>
                    </div>
                </li>




                <li class="menu-title mt-2">Objectif</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Les dépenses </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.expense') }}">Ajouter une dépense</a>
                            </li>
                            <li>
                                <a href="{{ route('today.expense') }}">Dépense d'aujourd'hui</a>
                            </li>
                            <li>
                                <a href="{{ route('month.expense') }}">Dépense mensuelle</a>
                            </li>
                            <li>
                                <a href="{{ route('year.expense') }}">Dépense annuelle</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#backup" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span>Sauvegarde de base de données </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="backup">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('database.backup') }}">Sauvegarde de base de données</a>
                            </li>


                        </ul>
                    </div>
                </li>






            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>