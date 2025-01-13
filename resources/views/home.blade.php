<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubai Barbearia</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Configuração da fonte */
        body {
            font-family: 'Montserrat', sans-serif;
        }

        /* Configurações gerais do carrossel */
        .carousel {
            margin: 0 auto; /* Centraliza o carrossel */
            max-width: 100%; /* O carrossel ocupa 80% da largura da tela */
        }

        .carousel-inner {
            position: relative;
            overflow: hidden; /* Evita que imagens maiores ultrapassem o carrossel */
        }

        .carousel-inner img {
            width: 100%; /* Ajusta a imagem à largura do carrossel */
            height: auto; /* Mantém a proporção original da imagem */
            max-height: 80vh; /* Limita a altura da imagem a 80% da altura da tela */
        }

        /* Ajustes para telas grandes */
        @media (min-width: 992px) {
            .carousel {
                max-width: 70%; /* Ajusta o tamanho do carrossel em telas grandes */
            }
        }
    </style>
</head>
<body>
    <!-- Div principal para todo o layout -->
    <div class="main-layout">
        <!-- Navbar -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dubai Barbearia</a>
            </div>
        </nav>

        <!-- Carrossel -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/Carrossel3.jpg') }}" alt="Promoção 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/Carrossel1.jpg') }}" alt="Promoção 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/Carrossel2.jpg') }}" alt="Promoção 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Quem Somos -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center">Quem Somos</h2>
                <p class="text-center">
                    A Dubai Barbearia é um espaço dedicado ao cuidado masculino. 
                    Oferecemos serviços de alta qualidade para cortes de cabelo, barba e cuidados pessoais. 
                    Nossa missão é proporcionar bem-estar, estilo e confiança para cada cliente.
                </p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white py-4">
            <div class="container text-center">
                <p>Horários de Funcionamento: Seg-Sáb: 08:00 - 18:00</p>
                <p>Formas de Pagamento: Dinheiro, Cartão</p>
                <p>Contatos: (xx) xxxx-xxxx</p>
                <p>Endereço: Rua Exemplo, 123 - Cidade</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
