#########################################################################################
Exception Handling merupakan mekanisme yang paling diperlukan dalam menangani error yang 
terjadi pada saat runtime (program berjalan) atau yang lebih dikenal dengan 
sebutan runtime error.

Secara umum, adanya kesalahan / error yang terjadi pada program pada saat runtime 
dapat menyebabkan program berhenti atau hang. Untuk itulah diperlukan mekanisme untuk 
memastikan bahwa program tetap dapat berjalan meskipun terdapat kesalahan yang terjadi.
#########################################################################################

<?php

try {
  # perintah ini tidak menimbulkan error
  echo "2 + 3 = " . (2 + 3) . "<br>";
} catch (Exception $error) {
  echo "Oops, sepertinya sistem kami sedang error <br>";
} finally {
  echo "Aku akan senantiasa dieksekusi <br>";
}
