<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Accounts and transaction</title>
    <link rel="stylesheet"
        href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="assets\css\customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">

</head>

<body>
    <!-- navbar starts here  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="BASIC BANKING SYSTEM\index.html">ABC Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="bank.php">HOME </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar ends here  -->

    <div class="my-info text-center">
        <h2>Name: Mythili Kumar</h2>
        <h4 style="text-align: center;">Net Bank Balance: <span id="myAccountBalance">10000</span></h4>

        <button class="btn btn-info" data-toggle="modal" data-target="#sendMoney">TRANSFER MONEY</button>
        <a class="btn btn-info" href="" data-toggle="modal" data-target="#transactionHistory">TRANSACTION HISTORY</a>
    </div>

    <!-- Modal send money -->
    <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <input type="text" id="enterName" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">???</span>
                            </div>
                            <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount"
                                aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal">TRANSFER MONEY</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal transaction History-->
    <div class="modal fade" id="transactionHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol id="transaction-history-body">

                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- table  -->
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-danger">
                        <th scope="col">SI.No</th>
                        <th scope="col">NAME</th>
                        <th scope="col">E-MAIL ADDRESS</th>
                        <th scope="col">BANK BALANCE(???)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td scope="row">1</td>
                        <td>Dora</td>
                        <td>dora@gmail.com</td>
                        <td>
                            <p id="doraBankBalance">2800</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">2</td>
                        <td>Ana</td>
                        <td>ana@gmail.com</td>
                        <td>
                            <p id="anaBankBalance">5000</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td scope="row">3</td>
                        <td>Madhu</td>
                        <td>madhu@gmail.com</td>
                        <td>
                            <p id="madhuBankBalance">8000</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">4</td>
                        <td>Janu</td>
                        <td>janu@gmail.com</td>
                        <td>
                            <p id="januBankBalance">2000</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td scope="row">5</td>
                        <td>Hari</td>
                        <td>hari@gmail.com</td>
                        <td>
                            <p id="hariBankBalance">9400</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">6</td>
                        <td>Kumar</td>
                        <td>kumar@gmail.com</td>
                        <td>
                            <p id="kumarBankBalance">4500</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td>7</td>
                        <td>Pragathi</td>
                        <td>pragathi@gmail.com</td>
                        <td>
                            <p id="pragathiBankBalance">5600</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">8</td>
                        <td>John</td>
                        <td>john@gmail.com</td>
                        <td>
                            <p id="johnBankBalance">4860</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td scope="row">9</td>
                        <td>Nithu</td>
                        <td>nithu@gmail.com</td>
                        <td>
                            <p id="nithuBankBalance">6800</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">10</td>
                        <td>Manu</td>
                        <td>manu@gmail.com</td>
                        <td>
                            <p id="manuBankBalance">4900</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="assets\js\script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
</body>
</html>

