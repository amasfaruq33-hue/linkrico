<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gtps = htmlspecialchars($_POST["link_gtps"]);
  $vhost = htmlspecialchars($_POST["link_vhost"]);
  $discord = htmlspecialchars($_POST["link_discord"]);

  $to = "yourgmail@gmail.com"; // Ganti dengan Gmail kamu
  $subject = "Form Promote GTPS Baru";
  $message = "📌 Link GTPS: $gtps\n🌐 Link VHost: $vhost\n💬 Link Discord: $discord";
  $headers = "From: promote@gtps.com";

  if (mail($to, $subject, $message, $headers)) {
    echo "<h2>✅ Data berhasil dikirim ke admin!</h2>";
  } else {
    echo "<h2>❌ Gagal mengirim email. Coba lagi nanti.</h2>";
  }
} else {
  echo "<h2>❌ Akses tidak valid.</h2>";
}
?>
