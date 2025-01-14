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
        h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Fundo amarelo para a seção */
        .team-section {
            background-color: #ffcc00;
            padding: 50px 20px;
        }

        .team-container {
            text-align: center;
        }

        .team-member {
            display: inline-block;
            margin: 15px;
        }

        .team-member img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 3px solid white;
        }

        .team-member p {
            margin-top: 10px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .images-container img {
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            object-fit: cover;
        }
           /* Seções de Serviços */
        /* Estilo geral para os itens de serviço */
        .service-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Cria duas colunas fixas */
    gap: 10px; /* Espaçamento entre os itens */
    justify-content: center; /* Centraliza os itens */
    margin-bottom: 30px;
}

.service-item {
    display: flex;
    align-items: center; /* Centraliza verticalmente o conteúdo */
    background-color: #ffcc00; /* Fundo amarelo */
    border-radius: 10px;
    padding: 5px 15px; /* Espaçamento interno do retângulo */
    color: #000;
    font-weight: bold;
    
    width: 87%; /* Ajusta para caber na coluna */
    height: 50px; /* Define uma altura fixa */
    position: relative; /* Permite posicionamento do círculo */
}

.service-item img {
    width: 50px;
    height: 50px;
    border-radius: 50%; /* Garante que o círculo seja perfeito */
    background-color: #000; /* Fundo preto */
    box-shadow: 0 0 0 5px #fff; /* Borda externa branca */
    position: absolute; /* Posiciona o círculo independentemente do layout */
    left: -10px; /* Move o círculo para a ponta esquerda */
    top: 50%; /* Centraliza verticalmente */
    transform: translateY(-50%); /* Ajusta para o centro exato */
}

.service-item .service-name {
    display: flex;
    align-items: center; /* Centraliza verticalmente o texto */
    margin-left: 35px; /* Espaçamento entre o texto e o círculo */
    font-size: 0.8rem;
    font-weight: bold;
    text-align: center;
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
        
        <!-- Seção de Equipe -->
    <section class="team-section">
        <div class="container">
            <!-- Título -->
            <h2>Nossa Equipe</h2>
            
            <!-- Equipe -->
            <div class="team-container">
                <div class="team-member">
                    <img src="{{ asset('image/equipe1.jpg') }}" alt="Genario">
                    <p>Genario</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/equipe2.jpg') }}" alt="Tom">
                    <p>Tom</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/equipe3.jpg') }}" alt="Márcio">
                    <p>Márcio</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/equipe4.jpg') }}" alt="Aécio">
                    <p>Aécio</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/equipe5.jpg') }}" alt="Gerardo">
                    <p>Gerardo</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('image/equipe5.jpg') }}" alt="Nome">
                    <p>Nome</p>
                </div>
            </div>
        </div>

    <!-- Seção com imagens da barbearia -->
        <div class="container images-container">
            <img src="{{ asset('image/dubayf1.jpg') }}" alt="Imagem da Barbearia">
            <img src="{{ asset('image/dubayf2.jpg') }}" alt="Imagem da Barbearia">
            <img src="{{ asset('image/dubayf3.jpg') }}" alt="Recepcionista">
        </div>
        </section>
    </div>
    <!-- Título -->
    <div class="container py-5">
    <h2 class="text-center mb-5">Nossos Serviços</h2>

    <!-- Categoria: Barbas -->
    <h3 class="text-center mb-4">Barbas</h3>
    <div class="service-grid">
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Barba Completa</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Barba Simples</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Barba Pigmentada</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Barba Terapia</div>
        </div>
    </div>

    <!-- Categoria: Cortes -->
    <h3 class="text-center mb-4">Cortes</h3>
    <div class="service-grid">
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Corte Degradê</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Corte Freestyle</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Corte Infantil</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Corte Social</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Degradê Pigmentado</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Corte na Tesoura</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Sobrancelhas</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Degradê Lateral</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Pezinho</div>
        </div>
    </div>

    <!-- Categoria: Combos -->
    <h3 class="text-center mb-4">Combos</h3>
    <div class="service-grid">
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Degradê + Barba</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Social + Barba Simples</div>
        </div>
        <div class="service-item">
            <img src="{{ asset('image/logo.jpg') }}" alt="Logo">
            <div class="service-name">Social + Barba</div>
        </div>
    </div>
</div>


        <!-- Galeria -->
        <div class="gallery-container">
            <img src="{{ asset('image/gallery1.jpg') }}" alt="Galeria 1">
            <img src="{{ asset('image/gallery2.jpg') }}" alt="Galeria 2">
            <img src="{{ asset('image/gallery3.jpg') }}" alt="Galeria 3">
            <img src="{{ asset('image/gallery4.jpg') }}" alt="Galeria 4">
        </div>
    </div>

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
