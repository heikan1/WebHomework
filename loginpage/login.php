    <html>
    <body>
        
    <?php 
    $correctEmail = 'b221210075@sakarya.edu.tr';
    $correctPassword = 'b221210075';
    
    if($_POST["email"] == $correctEmail && $_POST["password"] == $correctPassword ){
            echo 'HOŞ GELDİNİZ <br>';
            echo 'mail adresiniz: ' . $_POST["email"] . '<br>';        
            echo 'şifreniz: ' . $_POST["password"] . '<br>';
            echo '5 saniye sonra hakkında sayfasına yönlendirileceksiniz';
            header('Refresh: 5; URL=http://metinhakanyilmaz.great-site.net/hakkindapage/index.html'); 
    }
    else if($_POST["email"] ==""){
            echo 'maili boş geçemezsiniz'. '<br>';
            echo '5 saniye sonra login sayfasına yönlendirileceksiniz';
            header('Refresh: 5; URL=http://metinhakanyilmaz.great-site.net/loginpage/index.html'); 
    }
    else if($_POST["password"] == ""){
        echo 'şifreyi boş geçemezsiniz'. '<br>';
        echo '5 saniye sonra login sayfasına yönlendirileceksiniz';
        header('Refresh: 5; URL=http://metinhakanyilmaz.great-site.net/loginpage/index.html');
    }
    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

        echo 'geçersiz bir email girdiniz <br>';
        echo '5 saniye sonra login sayfasına yönlendirileceksiniz';
        header('Refresh: 5; URL=http://metinhakanyilmaz.great-site.net/loginpage/index.html');

    }
    
    else{
        echo 'yanlış şifre veya email girdiniz lütfen tekrar deneyiniz <br>';
        echo '5 saniye sonra login sayfasına yönlendirileceksiniz';
        header('Refresh: 5; URL=http://metinhakanyilmaz.great-site.net/loginpage/index.html'); 

    }


    ?>



    </body>
    </html>