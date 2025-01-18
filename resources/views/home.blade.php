<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubai Barbearia</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  
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

    <div class="service-section">
   <h2 class="text-center mb-5" style="font-family: 'Montserrat', sans-serif; font-weight: 800; line-height: 1.2;">
    <span style="display: block; font-size: 2rem; color: #fff;">Nossos</span>
    <span style="display: block; font-size: 2.5rem; color: #ffcc00;">Serviços</span>
</h2>


       <!-- Serviços -->
<div class="service-box">
    <div class="service-grid-container">

        <!-- Categoria: Barbas -->
        <h3 class="text-center mb-4">Barbas</h3>
        <div class="service-grid-barbas">
            
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
            <h3 class="text-center mb-4 mt-3">Cortes</h3>
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
            <h3 class="text-center mb-4 mt-3">Combos</h3>
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
    </div>


        <!-- Galeria -->
        <div class="gallery-container">
            <img src="{{ asset('image/galeria1.jpg') }}" alt="Galeria 1">
            <img src="{{ asset('image/galeria2.jpg') }}" alt="Galeria 2">
            <img src="{{ asset('image/galeria3.jpg') }}" alt="Galeria 3">
            <img src="{{ asset('image/galeria4.jpg') }}" alt="Galeria 4">
        </div>
    </div>

<!-- Seção Baixe Nosso Aplicativo -->
<section class="app-download-section py-5">
    <div class="container">
        <div class="app-grid-container">
            <!-- Texto -->
            <div class="app-text">
                <h2 class="title">
                    <span class="title-top">Baixe<br>nosso</span>
                    <span class="title-bottom">Apli<br>cati<br>vo!</span>
                </h2>
            </div>


            <!-- Imagens dos celulares -->
            <div class="app-phone">
                <img src="{{ asset('image/telefone.png') }}" alt="Aplicativo na App Store" >
            </div>

            <!-- QR Code -->
            <div class="app-qrcode">
                <img src="{{ asset('image/qrcode.png') }}" alt="QR Code" style="width: 150px;">
                <p class="mt-2">Aponte a câmera do celular e faça o download!</p>
            </div>

            <!-- Links das lojas -->
            <div class="app-links">
                <p class="app-text-link">Disponível</p>
                <a href="https://play.google.com" target="_blank" class="app-link">
                    <div class="app-box">
                        <img src="{{ asset('image/play.png') }}" alt="Google Play">
                    </div>
                </a>
                <a href="https://www.apple.com/app-store/" target="_blank" class="app-link">
                    <div class="app-box">
                        <img src="{{ asset('image/apple.png') }}" alt="App Store">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="app-gallery-section py-5">
    <div class="container">
        <div class="gallery-grid">
            <img src="{{ asset('image/gallery1.png') }}" alt="Galeria 1">
            <img src="{{ asset('image/gallery2.png') }}" alt="Galeria 2">
            <img src="{{ asset('image/gallery3.png') }}" alt="Galeria 3">
            <img src="{{ asset('image/gallery4.png') }}" alt="Galeria 4">
        </div>
    </div>
</section>

<section class="form-section py-5">
    <div class="container">
        <div class="form-wrapper">
            <!-- Título -->
            <div class="form-title">
                <h2 class="title">
                    <span class="title-top">Cadastre-se</span>
                </h2>
            </div>

            <!-- Formulário -->
            <div class="form-content">
                <form action="#" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Seu nome completo" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="date" placeholder="Data de nascimento" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="Número de telefone" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Endereço de email" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Escrever uma mensagem" class="form-input" rows="4"></textarea>
                    </div>
                    <button type="submit" class="form-button">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="schedule-section py-5">
    <div class="container">
        <h2 class="schedule-title">
            Horário de <span>Funcionamento</span>
        </h2>
        <div class="schedule-table">
            <!-- Segunda -->
            <div class="schedule-row">
                <div class="schedule-time">
                    <div class="schedule-day">Segunda-Feira</div>
                    <div class="schedule-time-content">08:30h - 19:00h</div>
                </div>
            </div>
            <!-- Terça -->
            <div class="schedule-row">
                <div class="schedule-time">
                    <div class="schedule-day">Terça-Feira</div>
                    <div class="schedule-time-content">08:30h - 19:00h</div>
                </div>
            </div>
            <!-- Quarta -->
            <div class="schedule-row">
                <div class="schedule-time">
                    <div class="schedule-day">Quarta-Feira</div>
                    <div class="schedule-time-content">08:30h - 19:00h</div>
                </div>
            </div>
            <!-- Quinta -->
            <div class="schedule-row">
                <div class="schedule-time">
                    <div class="schedule-day">Quinta-Feira</div>
                    <div class="schedule-time-content">08:30h - 19:00h</div>
                </div>
            </div>
            <!-- Sexta -->
            <div class="schedule-row">
                <div class="schedule-time">
                    <div class="schedule-day">Sexta-Feira</div>
                    <div class="schedule-time-content">08:30h - 19:00h</div>
                </div>
            </div>
            <!-- Sábado -->
            <div class="schedule-row">
                <div class="schedule-time">
                    <div class="schedule-day">Sábado</div>
                    <div class="schedule-time-content">08:30h - 19:00h</div>
                </div>
            </div>
            <!-- Domingo -->
            <div class="schedule-row">
                <div class="schedule-time closed">
                    <div class="schedule-day">Domingo</div>
                    <div class="schedule-time-content">Fechado</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="payment-section py-5">
    <div class="container text-center">
        <h2 class="payment-title">
            Formas de <span>Pagamento</span>
        </h2>
        <div class="payment-options">
            <div class="payment-method">Dinheiro</div>
            <div class="payment-method">Aceitamos Cartões</div>
            <div class="payment-method">Pix</div>
            <div class="payment-method">Débito</div>
            <div class="payment-method">Crédito</div>
        </div>
        <div class="payment-icons mt-4">
            <img src="{{ asset('image/form_pg.png') }}" alt="pg">
            
        </div>
    </div>
</section>






    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
