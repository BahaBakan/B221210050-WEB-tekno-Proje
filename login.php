<?php
// Kullanıcıdan giriş bilgilerini al
$username = $_POST['username'];
$password = $_POST['password'];

// Burada giriş bilgilerinin doğruluğunu kontrol etmek için gerekli işlemleri yapabilirsiniz.
// Örneğin, bir veritabanına bağlanabilir ve kullanıcı bilgilerini kontrol edebilirsiniz.

// Kullanıcı adı ve parolayı kontrol etmek için basit bir örnek
if ($username == 'B221210050@sakarya.edu.tr' && $password == 'B221210050') {
    // Başarılı giriş durumunda bir mesaj ver
    header('Location: HAKKIMDA.html');
} else {
    // Hatalı giriş durumunda kullanıcıyı login.html sayfasına yönlendir
    header('Location: login.html');
    exit();
}
?>