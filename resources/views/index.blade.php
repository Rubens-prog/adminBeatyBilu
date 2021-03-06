<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!----swiper-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!----fonts-->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!----css-->
    <link rel="stylesheet" href="css/style.css" />

    <title>BeutyBilu</title>
  </head>

  <body>
    <header id="header" class="scroll">
      <nav class="container show">
        <a class="logo" href="#">Beauty<span>Bilu</span>.</a>
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#testimonials">Depoimentos</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
          </ul>
        </div>
        <div class="toggle open"><i class="fas fa-bars"></i></div>
        <div class="toggle close"><i class="fas fa-times"></i></div>
      </nav>
    </header>
    <!-------------------------------------home---------------------------------------------->
    <main>
      <section class="section" id="home">
        <div class="container grid">
          <div class="image">
          @foreach($inicios as $inicio)
            <img
              src="{{$inicio->img}}"
            />
          </div>
          <div class="text">
            <h2 class="title">{{$inicio->title}}</h2>
            <p>
            {{$inicio->text}}
            </p>
            @endforeach
            <a href="#" class="button">Agendar um horário</a>
          </div>
        </div>
      </section>
      <div class="divider-1"></div>
      <!-------------------------------------About---------------------------------------------->

      <section class="section" id="about">
        <div class="container grid">
          <div class="image">
            @foreach($dados as $dado)

            <img
              src="{{$dado->img}}"
              alt=""
            />
          </div>
          <div class="text">
            <h2 class="title">{{$dado->title}}</h2>
          
            <p>
             {{$dado->text}}
            </p>

            @endforeach

            
          </div>
        </div>
      </section>

      <div class="divider-2"></div>
      <!-------------------------------------Services---------------------------------------------->

      <section class="section" id="services">
        <div class="container grid">
            <header>
              <h2 class="title">Serviços</h2>
              <p>
                Com mais de 10 anos no mercado, o Beauty<strong>Bilu</strong>. já
                conquistou clientes de inúmeros países com seus tratamentos
                exclusivos e totalmente naturais.
              </p>
            </header>
            <div class="grid cards">
              @foreach($servicos as $servico)
              <div class="card">
                <i class="{{$servico->icon}}"></i>
                <h3 class="title">{{$servico->title}}</h3>
                <p>
                {{$servico->text}}
                </p>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <div class="divider-1"></div>

      <!-------------------------------------Testimonials---------------------------------------------->
      <section class="section" id="testimonials">
        <div class="container">
          <header>
            <h2 class="title">Depoimentos de quem já passou por aqui</h2>
          </header>
          <div class="testimonials swiper-container">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                  <div class="testimonial swiper-slide">
                    <blockquote>
                      <p>
                        <span>&ldquo;</span>
                      {{$testimonial->text}}
                      </p>
                      <cite>
                        <img
                          src="{{$testimonial->img}}"
                          alt=""
                        />
                        {{$testimonial->name}}
                      </cite>
                    </blockquote>
                  </div>
                @endforeach             
                </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <div class="divider-2"></div>
      <!-------------------------------------Contact---------------------------------------------->
      <section class="section" id="contact">
        <div class="container grid">
          <div class="text">
            <h2 class="title">Entre em contato com a gente</h2>
            @foreach($contatos as $contato)
            <p>
            {{$contato->text}}
            </p>
            @endforeach
            <a
              href=" https://api.whatsapp.com/send?phone=+5599999999999&text=HelloWorld!"
              class="button"
              target="_blank"
              ><i class="fab fa-whatsapp"></i>Entrar em contato</a
            >
          </div>

          <div class="links">
            <ul class="grid">
            @foreach($contatos as $contato)
              <li><i class="fas fa-phone-alt"></i>{{$contato->phone}}</li>
              <li>
                <i class="fas fa-map-marker-alt"></i>{{$contato->adress}}
              </li>
              <li><i class="fas fa-envelope"></i>{{$contato->email}}</li>
            @endforeach
            </ul>
          </div>
        </div>
      </section>

      <div class="divider-1"></div>
    </main>

    <footer class="section">
      <div class="container grid">
        <div class="brand">
          <a class="logo logo-alt" href="#home">Beauty<span>Bilu</span>.</a>
          <p>©2021 BeautyBilu.</p>
          <p>Todos os direitos reservados</p>
        </div>

        <div class="social">
          <a href="https://instagram.com" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
          <a href="https://facebook.com" target="_blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://youtube.com" target="_blank"
            ><i class="fab fa-youtube"></i
          ></a>
        </div>
      </div>
    </footer>

    <a href="#home" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!----swiper-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!----scrollreveal-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!----main.js-->
    <script src="main.js"></script>
  </body>
</html>
