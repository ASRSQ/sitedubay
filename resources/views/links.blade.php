<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Dubay - Links</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/links.css') }}" rel="stylesheet">
</head>
<body>
<!-- Modal de Promoção -->
<div id="promoModal" class="modal">
        <div class="modal-content">
            <button id="closeModal" class="close">&times;</button>
            <img src="{{ asset('image/Carrossel1.jpg') }}" alt="Promoção">
        </div>
    </div>
    <div class="linktree-container">
        <!-- Header -->
        <div class="linktree-header">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo Barbearia Dubay" class="logo">
            <h1>@barbearia_dubay</h1>
            <p>muito mais que uma barbearia</p>
        </div>

        <!-- Links -->
        <div class="linktree-links">
            <a href="https://play.google.com" target="_blank" class="link">
                <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
                BAIXE APP - BARBEARIA DUBAY

            </a>
            <a href="https://agendamento.com" target="_blank" class="link">
                <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
                SITE DE AGENDAMENTOS

            </a>
            <a href="https://feedback.com" target="_blank" class="link">
                <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
                DEIXA SUA OPINIÃO
            </a>
            <a href="https://wa.me/5588998384312" target="_blank" class="link">
                <img src="{{ asset('image/whatsapp-icon.png') }}" alt="WhatsApp">
                FALE COM NOSSA RECEPÇÃO
            </a>
        </div>
    </div>
    <script>
        // Exibe o modal ao carregar a página
        window.onload = function () {
            const modal = document.getElementById("promoModal");
            const closeModal = document.getElementById("closeModal");

            if (modal && closeModal) {
                modal.style.display = "flex"; // Mostra o modal ao carregar

                closeModal.onclick = function () {
                    modal.style.display = "none"; // Esconde o modal ao clicar no botão de fechar
                };

                window.onclick = function (event) {
                    if (event.target === modal) {
                        modal.style.display = "none"; // Esconde o modal ao clicar fora dele
                    }
                };
            }
            

          // Detecta o sistema operacional do dispositivo
        const userAgent = navigator.userAgent || navigator.vendor || window.opera;
        let message = "Você está acessando via outro dispositivo.";

        if (/android/i.test(userAgent)) {
            message = "Você está acessando via Android.";
        } else if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            message = "Você está acessando via iOS.";
        }

        // Exibe o alert box com a mensagem
        alert(message);
        };
    </script>
</body>

</html>
