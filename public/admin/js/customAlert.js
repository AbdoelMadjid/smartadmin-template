document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll("#eksekusi").forEach(function(elem) {
        elem.addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah perilaku default

            initApp.playSound('/admin/media/sound', 'voice_on')

            var title = this.getAttribute("data-title");
            var message = this.getAttribute("data-message");
            var redirectUrl = this.getAttribute("data-redirect-url");
            var secondsLeft = 10; // Waktu dalam detik

            // Fungsi untuk memperbarui tampilan timer
            function updateTimerDisplay() {
                document.getElementById("timer-display").innerText = "Otomatis selama "+secondsLeft + " detik";
                secondsLeft--;

                if (secondsLeft < 0) {
                    clearTimeout(autoRedirectTimer);
                    window.location.href = redirectUrl; // Lakukan perpindahan otomatis
                }
            }

            // Timer untuk update timer display
            var timerInterval = setInterval(updateTimerDisplay, 1000); // Update setiap detik

            // Konfigurasi untuk bootbox
            bootbox.alert({
                title: "<i class='fal fa-check-circle text-success mr-2'></i> <span class='text-success fw-500'>"+title+"</span>",
                message: "<span class='text-success fw-900 font-italic'>"+message+"</span> <br><br><span class='text-primary font-italic fs-nano' id='timer-display'></span>",
                centerVertical: true,
                className: "modal-alert",
                closeButton: false,
                callback: function () {
                    clearInterval(timerInterval); // Hentikan update timer saat "OK" diklik
                    // Perpindahan halaman setelah pengguna mengklik "OK"
                    window.location.href = redirectUrl;
                }
            });
            // Timer untuk redirect otomatis
            var autoRedirectTimer = setTimeout(function() {
                clearInterval(timerInterval); // Hentikan update timer
                window.location.href = redirectUrl; // Lakukan perpindahan otomatis setelah 10 detik
            }, secondsLeft * 1000); // Convert detik menjadi milidetik
        });
    });
});
