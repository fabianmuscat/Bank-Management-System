<link rel="stylesheet" href="../styles/actions.css">
<?php include "../includes/header.inc.php"; ?>

<body style="background: none;">
    <?php
        session_start();
        include "../includes/navbar.inc.php";
    ?>

    <section id="actions">
            <div class="d-flex justify-content-center bg-white p-3 h-100">
                <div class="col-2">
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-3 p-3 shadow active bg-danger text-light" id="v-pills-amounts-tab" data-bs-toggle="pill" data-bs-target="#v-pills-amounts">
                            <span class="font-weight-bold small text-uppercase">My Amounts</span>
                        </a>

                        <a class="nav-link p-3 shadow bg-danger text-light" id="v-pills-deposit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-deposit">
                            <span class="font-weight-bold small text-uppercase">Deposit</span>
                        </a>

                       <hr class="my-3">

                        <a class="nav-link mb-3 p-3 shadow bg-dark text-light" id="v-pills-add-transaction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-transaction">
                            <span class="font-weight-bold small text-uppercase">Add Transaction</span>
                        </a>

                        <a class="nav-link mb-3 p-3 shadow bg-dark text-light" id="v-pills-view-transaction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view-transaction">
                            <span class="font-weight-bold small text-uppercase">View Transactions</span>
                        </a>

                        <a class="nav-link mb-3 p-3 shadow bg-dark text-light" id="v-pills-delete-transaction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-delete-transaction">
                            <span class="font-weight-bold small text-uppercase">Delete Transaction</span>
                        </a>

                        <a class="nav-link mb-3 p-3 shadow bg-dark text-light" id="v-pills-add-category-tab" data-bs-toggle="pill" data-bs-target="#v-pills-add-category">
                            <span class="font-weight-bold small text-uppercase">Add Category</span>
                        </a>
                    </div>
                </div>
                
                <div class="vr ms-3"></div>

                <div class="col">
                    <!-- Tabs content -->
                    <div class="tab-content mx-5 mt-2" id="v-pills-tabContent">
                        <div class="tab-pane fade rounded bg-secondary bg-white show active" id="v-pills-amounts">
                            <h4 class="font-italic mb-4">Amounts</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>

                        <div class="tab-pane fade rounded bg-secondary bg-white" id="v-pills-deposit">
                            <h4 class="font-italic mb-4">Deposit</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        
                        <div class="tab-pane fade rounded bg-secondary bg-white" id="v-pills-add-transaction">
                            <h4 class="font-italic mb-4">Add Transaction</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>

                        <div class="tab-pane fade rounded bg-white" id="v-pills-view-transaction">
                            <h4 class="font-italic mb-4">Transactions</h4>
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Paid By</th>
                                        <th scope="col">Amount</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Groceries</td>
                                        <td>Convenience Shop Safi</td>
                                        <td>Nov 17, 2021</td>
                                        <td>Revolut</td>
                                        <td>&euro;5.37</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Shopping</td>
                                        <td>The Stone Market Valletta</td>
                                        <td>Sep 23, 2021</td>
                                        <td>Revolut</td>
                                        <td>&euro;9.50</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Services</td>
                                        <td>Melita Ltd.</td>
                                        <td>Nov 4, 2021</td>
                                        <td>BOV</td>
                                        <td>&euro;10.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane fade rounded bg-white" id="v-pills-delete-transaction">
                            <h4 class="font-italic mb-4">Delete Transactions</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>

                        <div class="tab-pane fade rounded bg-white" id="v-pills-add-category">
                            <h4 class="font-italic mb-4">Categories</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <?php include "../includes/footer.inc.php"; ?>
</body>

