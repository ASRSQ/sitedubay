<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dubai Barbearia</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .carousel-inner img {
        object-fit: cover;
    }

    /* Ajuste no tamanho do carrossel para telas maiores */
    @media (min-width: 992px) { /* A partir de telas grandes */
        .carousel-inner img {
            height: 300px; /* Altura menor para telas maiores */
            max-width: 80%; /* Limitar a largura do carrossel */
            margin: 0 auto; /* Centralizar no computador */
        }
    }
    /* Ajuste específico para telas maiores */
    @media (min-width: 992px) {
            .carousel-inner img {
                height: 400px; /* Ajusta altura para telas grandes */
            }
        }
</style>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dubai Barbearia</a>
        </div>
    </nav>

    <!-- Carrossel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-item active">
            <img src="{{ asset('image/Carrossel 3.jpg') }}" class="d-block w-100" alt="Promoção 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/Carrossel 1.jpg') }}" class="d-block w-100" alt="Promoção 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('image/Carrossel 2.jpg') }}" class="d-block w-100" alt="Promoção 3">
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

    <!-- Nossa Equipe -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Nossa Equipe</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <img src="equipe1.jpg" class="rounded-circle img-fluid" alt="Equipe 1">
                    <p>João Silva</p>
                </div>
                <div class="col-md-3">
                    <img src="equipe2.jpg" class="rounded-circle img-fluid" alt="Equipe 2">
                    <p>Maria Oliveira</p>
                </div>
                <div class="col-md-3">
                    <img src="equipe3.jpg" class="rounded-circle img-fluid" alt="Equipe 3">
                    <p>Carlos Santos</p>
                </div>
                <div class="col-md-3">
                    <img src="equipe4.jpg" class="rounded-circle img-fluid" alt="Equipe 4">
                    <p>Ana Lima</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Nossos Serviços -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>Barbas</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Aparar - R$ 25</li>
                        <li class="list-group-item">Desenho - R$ 30</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Cortes</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Corte Social - R$ 40</li>
                        <li class="list-group-item">Corte Degradê - R$ 50</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Combos</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Barba + Corte Social - R$ 60</li>
                        <li class="list-group-item">Barba + Corte Degradê - R$ 70</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Galeria</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="galeria1.jpg" class="img-fluid" alt="Foto 1">
                </div>
                <div class="col-md-4">
                    <img src="galeria2.jpg" class="img-fluid" alt="Foto 2">
                </div>
                <div class="col-md-4">
                    <img src="galeria3.jpg" class="img-fluid" alt="Foto 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Cadastre-se -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Cadastre-se</h2>
            <form>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Contatos e Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>Horários de Funcionamento: Seg-Sáb: 08:00 - 18:00</p>
            <p>Formas de Pagamento: Dinheiro, Cartão</p>
            <p>Contatos: (xx) xxxx-xxxx</p>
            <p>Endereço: Rua Exemplo, 123 - Cidade</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
