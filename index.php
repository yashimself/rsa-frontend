<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RSA algorithm</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/demo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="/assets/js/three-dots-master/dist/three-dots.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/icons/site.webmanifest">
    
</head>

<body>
    <a id="top"></a>
    <div class="container-fluid">
        <header>
            <div class="limiter">
                <h3>Card payment using RSA algorithm</h3>
            </div>
        </header>
        <div class="creditCardForm">
            <div class="heading">
                <h1>Enter card details</h1>
            </div>
            <div class="payment">
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group name">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="number" class="form-control" id="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                            <option value="24"> 2024</option>
                            <option value="25"> 2025</option>
                            <option value="26"> 2026</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="/assets/images/visa.jpg" id="visa">
                        <img src="/assets/images/mastercard.jpg" id="mastercard">
                        <img src="/assets/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                        <div class="dot-falling" id="loading" style="display:none;"></div> 
                    </div>     
                               
                </form>
            </div>
        </div>

        <p class="examples-note">Here are some dummy credit card numbers and CVV codes for test</p>

        <div class="examples">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Card Number</th>
                            <th>Security Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Visa</td>
                            <td>4716108999716531</td>
                            <td>257</td>
                        </tr>
                        <tr>
                            <td>Master Card</td>
                            <td>5281037048916168</td>
                            <td>043</td>
                        </tr>
                        <tr>
                            <td>American Express</td>
                            <td>342498818630298</td>
                            <td>3156</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="mailto: yashshirbhate@pm.me"><ion-icon name="mail-sharp"></ion-icon></a><a href="https://www.linkedin.com/in/yashshirbhate/"><ion-icon name="logo-linkedin"></ion-icon></a><a href="https://github.com/yashimself"><ion-icon name="logo-github"></ion-icon></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#top">Home</a></li>
                <li class="list-inline-item"><a href="/views/team.php">Team</a></li>
                <li class="list-inline-item"><a href="https://github.com/yashimself/RSA">Code</a></li>
            </ul>
            <p class="copyright">Made with <ion-icon name="heart-sharp"></ion-icon> by Yash and team<br><br><span id="year"></span><script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>&copy;</p>
        </footer>
    </div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    <script src="https://peterolson.github.io/BigInteger.js/BigInteger.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="/assets/js/script.js"></script>
    <script src="/assets/js/bignumber.js"></script>
</body>

</html>
