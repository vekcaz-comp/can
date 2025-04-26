
  const form = document.getElementById("contact-form");
  const loading = document.getElementById("loading");

  form.addEventListener("submit", function(e) {
    // Loading animasyonunu göster
    loading.style.display = "flex";
    
    // Yavaşça formu gönder
    setTimeout(function() {
      form.submit();
    }, 1000); // 1 saniye bekletiyoruz, böylece kullanıcı "yüklendi" hissiyatını alır
  });

