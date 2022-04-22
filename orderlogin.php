<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Online Sapling Sales</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="Ağaç,Fidan,Online ağaç,Ağaç türleri,oksijen,toprak,online fidan bağış">
    <meta name="description" content="Ağaç Türlerimiz ve Online Satış">
    <meta name="author" content="Fevzi Kaya">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="order.css">
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link rel="icon" href="foto/tree_icon.png">


</head>
<body>

                <nav class="navbar navbar-expand-lg navbar-dark gezinti">
                    <div class="container">
                        <a class="navbar-brand logo" href="https://web.itu.edu.tr/kayafe18/php/main.php">
                            <b>FutureIsOurs</b>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            
                            <ul class="navbar-nav mx-auto">
                                
                                <li class="nav-item me-5">
                                <a class="nav-link" style="color: white;" aria-current="page" href="https://web.itu.edu.tr/kayafe18/php/main.php">HOME</a>
                                </li>
                                <li class="nav-item me-5">
                                <a class="nav-link" style="color: white;" href="https://web.itu.edu.tr/kayafe18/php/orderlogin.php">ORDER</a>
                                </li>
                                
                                <li class="nav-item me-5 dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    COMMUNICATION
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="https://www.instagram.com/misterkayaa" target="_blank"><i class="bi bi-instagram"></i> Instagram</a></li>
                                    <li><a class="dropdown-item" href="https://www.linkedin.com/in/fevzi-kaya-344a92211" target="_blank"><i class="bi bi-linkedin"></i> LinkedIn</a></li>
                                    
                                </ul>
                                </li>
                                
                            </ul>
                            <?php
                            echo '
                            <div class="d-flex" style="justify-content:flex-end !important">

                                <button class="btn btn-warning" type="submit"><i class="bi bi-person-square"></i> '.$_COOKIE['username'].'</button>
                                <div style="width: 5px;"></div>
                                <form action="out.php">
                                    <button class="btn btn-danger" type="submit"><i class="bi bi-box-arrow-right"></i> Sign Out</button>
                                </form>
                            '
                            ?>    
                            </div>
                        </div>
                    </div>
                </nav>
                <br>
                <h5>Welcome to the Order Screen</h5>
    <br>
    <div class="container border border-4 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row justify-content-center">
            <br>
                <?php 
                    extract($_POST);
                    $name = $_POST['name'];
                    $surname = $_POST['surname'];
                    $address1 = $_POST['address1'];
                    $address2 = $_POST['address2'];
                    $cityy = $_POST['cityy'];
                    $postcode = $_POST['postcode'];
                    $tree = $_POST['tree'];
                    $piece = $_POST['piece'];

                    function money($piece) {
                        $price = 35*$piece;
                        return $price;
                    };

                    $price = money($piece);
                    $cname = $_POST['cname'];
                    $ctype = $_POST['ctype'];
                    $cnumber = $_POST['cnumber'];
                    $mounth = $_POST['mounth'];
                    $year = $_POST['year'];
                    if(!empty($_POST)){
                        include 'connect.php';
                        $idd = mysqli_query($c , "SELECT id FROM Orders ORDER BY id DESC LIMIT 1;");
                        $iddd = mysqli_fetch_row($idd);
                        $iddd[0] = $iddd[0] + 1 ;
                        mysqli_query($c, "INSERT INTO Orders (name,surname,address1,address2,cityy,postcode,tree,piece,price,cname,ctype,cnumber,mounth,year) VALUES ('$name','$surname','$address1','$address2','$cityy','$postcode','$tree','$piece','$price','$cname','$ctype','$cnumber','$mounth','$year');");
                        echo '<br><table class="table">
                        <thead>
                          <h5>Your order has been saved in our system. You can check your information.</h5>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Address1</th>
                            <th scope="col">City</th>
                            <th scope="col">Postcode</th>
                            <th scope="col">Tree Type</th>
                            <th scope="col">Number</th>
                            <th scope="col">Price</th>
                          </tr>
                          <tr>
                            <td>'.$iddd[0].'</td>
                            <td>'.$name.'</td>
                            <td>'.$surname.'</td>
                            <td>'.$address1.'</td>
                            <td>'.$cityy.'</td>
                            <td>'.$postcode.'</td>
                            <td>'.$tree.'</td>
                            <td>'.$piece.'</td>
                            <td>'.$price.'</td>
                          </tr>
                        </thead>
                      </table>';
                    }; 
                ?>
            <div class="col-sm-10 col-lg-8 gy-3">
                <br>
                <h5>Address Information</h5>
                <br>
                <form method="post" class="row g-3">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="name" class="form-control" placeholder="First name" aria-label="First name" required>
                        </div>
                        <div class="col">
                            <input type="text" name="surname" class="form-control" placeholder="Last name" aria-label="Last name" required>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address1" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <div class="col-md-10">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" name="address2" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                    </div>
                    
                    <?php 
                        $platenumber=array( "Adana"=>1, "Adıyaman"=>2, "Afyonkarahisar"=>3,
                        "Ağrı"=>4, "Amasya"=>5, "Ankara"=>6, "Antalya"=>7, "Artvin"=>8, "Aydın"=>9,
                        "Balıkesir"=>10, "Bilecik"=>11, "Bingöl"=>12, "Bitlis"=>13, "Bolu"=>14,
                        "Burdur"=>15, "Bursa"=>16, "Çanakkale"=>17, "Çankırı"=>18, "Çorum"=>19,
                        "Denizli"=>20, "Diyarbakır"=>21, "Edirne"=>22, "Elazığ"=>23, "Erzincan"=>24,
                        "Erzurum"=>25, "Eskişehir"=>26, "Gaziantep"=>27, "Giresun"=>28,
                        "Gümüşhane"=>29, "Hakkari"=>30, "Hatay"=>31, "Isparta"=>32, "Mersin"=>33,
                        "İstanbul"=>34, "İzmir"=>35, "Kars"=>36, "Kastamonu"=>37, "Kayseri"=>38,
                        "Kırklareli"=>39, "Kırşehir"=>40, "Kocaeli"=>41, "Konya"=>42, "Kütahya"=>43,
                        "Malatya"=>44, "Manisa"=>45, "Kahramanmaraş"=>46, "Mardin"=>47,
                        "Muğla"=>48, "Muş"=>49, "Nevşehir"=>50, "Niğde"=>51, "Ordu"=>52,
                        "Rize"=>53, "Sakarya"=>54, "Samsun"=>55, "Siirt"=>56, "Sinop"=>57,
                        "Sivas"=>58, "Tekirdağ"=>59, "Tokat"=>60, "Trabzon"=>61, "Tunceli"=>62,
                        "Şanlıurfa"=>63, "Uşak"=>64, "Van"=>65, "Yozgat"=>66, "Zonguldak"=>67,
                        "Aksaray"=>68, "Bayburt"=>69, "Karaman"=>70, "Kırıkkale"=>71, "Batman"=>72,
                        "Şırnak"=>73, "Bartın"=>74, "Ardahan"=>75, "Iğdır"=>76, "Yalova"=>77,
                        "Karabük"=>78, "Kilis"=>79, "Osmaniye"=>80, "Düzce"=>81 );

                        $p=1;
                        foreach($platenumber as $city => $number)
                        {  
                            if($city[0]=="A" && $city[strlen($city)-1]=="a")
                                $p*=$number;
                        };
                        setlocale(LC_ALL,'tr_TR.UTF-8');
                        ksort($platenumber,SORT_LOCALE_STRING);
                        
                    ?>

                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">City</label>
                        <select id="plate" name="cityy" class="form-select">
                        
                        <?php foreach($platenumber as $city=>$plate){ ?>
                
                            <option value="<?php echo $plate; ?>"><?php echo $city ; ?></option>
                        <?php
                        } ?>

                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Post Code</label>
                        <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Ex: 00000" required>
                    </div>

                    <h5 class="gy-5">Product Information</h5>
                    <div class="col-lg-6 gy-2">
                        <select id="inputState" name="tree" class="form-select" required>
                            <option>..Select Tree Type..</option>
                            <option value="Cedar">Cedar</option>
                            <option value="Rhododendron">Rhododendron</option>
                            <option value="Sweetgum">Sweetgum</option>
                            <option value="Oak">Oak</option>
                            <option value="Almond">Almond</option>
                            <option value="Hackberry">Hackberry</option>
                            <option value="Weeping Willow">Weeping Willow</option>
                            <option value="Sakura">Sakura</option>
                            <option value="Lemon Cypress">Lemon Cypress</option>
                            <option value="Lemon">Lemon</option>
                            <option value="Orange">Orange</option>
                            <option value="Olive">Olive</option>
                        </select>
                    </div>
                    <div class="col-lg-8">
                        <input type="number" name="piece" min="1" placeholder="Number" required>
                    </div>
                    <div class="col-lg-8">
                        Do you want to donate?<br>
                        Yes <input class="form-check-input" type="radio" name="flexRadioDefault" id="q11" onchange='sa(this.value);'value="1">&emsp;
                        No <input class="form-check-input" type="radio" name="flexRadioDefault" id="q12" onchange='sa(this.value);' value="0"><br>
                        <input type="Number" placeholder="How much (₺)?" name="q1t" id="input1" style='display:none;'/>
                    </div>
                    <h5 class="gy-4">Credit Card Information</h5>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="cname" id="card-name" placeholder="Name on the card" required>
                    </div>
                    <br>
                    <div class="col-lg-3">
                        <select id="inputState" name="ctype" class="form-select">
                            <option selected>...Choose Card Type...</option>
                            <option value="Visa">Visa</option>
                            <option value="Master">Master Card</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="cnumber" id="card-number" placeholder="Card Number - Ex: 0000 0000 0000 0000" required>
                    </div>
                    <div class="col-lg-2">
                        <select class="form-select" name="mounth" required>
                            <option>..Mounth..</option>
                            <option value="Ocak">1</option>
                            <option value="Şubat">2</option>
                            <option value="Mart">3</option>
                            <option value="Nisan">4</option>
                            <option value="Mayıs">5</option>
                            <option value="Haziran">6</option>
                            <option value="Temmuz">7</option>
                            <option value="Ağustos">8</option>
                            <option value="Eylül">9</option>
                            <option value="Ekim">10</option>
                            <option value="Kasım">11</option>
                            <option value="Aralık">12</option>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" class="form-control" id="year" name="year" placeholder="..Year.." required>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto gy-5">
                        <button class="btn btn-primary" type="submit">Finish the Order</button>
                    </div>
                
                </form>
                <br>
                <br>
            </div>
            
        </div>
        
    </div>
    <br><br><br><br>
        <section>
            <footer class="text-center text-white" style="background-color: #0a4275;">
            <div class="container p-4 pb-0">
            <section>
                <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">ITU Ayazaga Campus, Rectorate Building, 34469 Maslak-ISTANBUL-TURKEY</span>
                </p>
            </section>
            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <i class="bi bi-envelope"></i> kayafe18@itu.edu.tr  &emsp; <i class="bi bi-telephone"></i> +90 212 285 29 10
            </div>
        </footer>
        </section>              
    <script src="bootstrap.js"></script>
</body>
</html>