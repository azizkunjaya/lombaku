<?php
if (_SERVER["REQUEST_METHOD"] == "POST") 
    // Ambil data dari formfullName = _POST['fullName'];age = _POST['age'];gender = _POST['gender'];email = _POST['email'];phone = _POST['phone'];competition = _POST['competition'];address = _POST['address'];

    // Email penerima (alamat email Anda)to = "azizkunbaru@gmail.com";  // Ganti dengan email yang Anda inginkan

    // Subjek email
    subject = "Pendaftaran Lomba Ngiclik 2025";

    // Isi emailmessage = "
    <html>
    <head>
        <title>Pendaftaran Lomba Ngiclik 2025</title>
    </head>
    <body>
        <h2>Detail Pendaftaran Lomba Ngiclik 2025</h2>
        <p><strong>Nama Lengkap:</strong> fullName</p>
        <p><strong>Usia:</strong>age</p>
        <p><strong>Jenis Kelamin:</strong> gender</p>
        <p><strong>Email:</strong>email</p>
        <p><strong>Nomor Telepon:</strong> $phone</p>
 <p><strong>Pilihan Lomba:</strong>competition</p>
        <p><strong>Alamat:</strong> address</p>
    </body>
    </html>
    ";

    // Set headers untuk email HTMLheaders = "MIME-Version: 1.0" . "\r\n";
    headers .= "Content-Type:text/html;charset=UTF-8" . "";

    // Headers lainnyaheaders .= "From: email" . ""; // Pengirim email

    // Kirim email
    if (mail(to, subject,message, headers)) 
        echo "Pendaftaran berhasil! Terima kasih telah mendaftar.";
     else 
        echo "Terjadi kesalahan, silakan coba lagi.";
    
?>
“`
