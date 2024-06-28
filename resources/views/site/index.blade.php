@extends('layout.layout')

@section('tile', 'home')

@section('conteudo')

    <div class="ftco-blocks-cover-1">

        <div class="site-section-cover overlay"
            style="background-image: url('{{ asset('assets/images/banner/bannerFundo1.jpeg') }}');">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-5 mt-5 pt-5">
                        <span class="text-cursive h5 text-red">Bem vindo a nossa escola!</span>
                        {{-- <h1 class="mb-3 font-weight-bold text-teal">About Us</h1> --}}
                        <p><a href="index.html" class="text-white">Home</a></p>
                      </div>
                    {{-- <div class="col-md-6 ml-auto align-self-end">
            <img src="{{ asset('assets/images/banner/banner1.png') }}" alt="Image" class="img-fluid">

          </div> --}}
                </div>
            </div>
        </div>
    </div>




    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="block-2 red">
                        <span class="wrap-icon">
                            <span class="icon-home"></span>
                        </span>
                        <h2>Atividades internas</h2>
                        <p>Nosso campos conta com atividades internas para que as crianças possam estar sempre em contato
                            uma com
                            as outras.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-2 yellow">
                        <span class="wrap-icon">
                            <span class="icon-person"></span>
                        </span>
                        <h2>Outdoor Game And Event</h2>
                        <p>Indo além dos muros da escola, nossos alunos tem a oportunidade de realizar atividades externas,
                            para
                            aflorar a criatividade.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-2 teal">
                        <span class="wrap-icon">
                            <span class="icon-cog"></span>
                        </span>
                        <h2>Camping for Kids</h2>
                        <p>Para alunos desbravadores, é possivel participar do CAMP KIDS, em que os alunos paraticiparam de
                            atividades desafiadoras.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <img src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto pl-md-5">
                    <span class="text-cursive h5 text-red">Sobre bós</span>
                    <h3 class="text-black">Construindo momentos felizes</h3>
                    <p><span>Na nossa escola, cada dia é uma aventura encantada! estamos aqui para criar momentos mágicos
                            para a
                            sua criança. Nossos educadores dedicados e nossas atividades garantem um ambiente onde a
                            imaginação
                            floresce e cada descoberta é uma nova fonte de encanto. Venha fazer parte dessa jornada de
                            aprendizado e
                            diversão, onde cada momento é uma oportunidade para o seu filho(a) brilhar!</span></p>

                    <p class="mt-5"><a href={{ url('/sobre') }} class="btn btn-warning py-4 btn-custom-1">Descubra
                            mais</a></p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <span class="text-cursive h5 text-red d-block">Nossa galeria</span>
                    <h2 class="text-black">Por dentro da escola</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_1.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_1.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 50px 0px 0px"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_2.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_3.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_3.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_4.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_4.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 0px 50px 0px 0px "></a>
                </div>

                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_5.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_5.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 0px 0px 0px 50px;"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_2.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_3.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_2.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_2.jpg') }}" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="{{ asset('assets/images/img_5.jpg') }}" data-fancybox="gal"><img
                            src="{{ asset('assets/images/img_5.jpg') }}" alt="Image" class="img-fluid"
                            style="border-radius: 0px 0px 50px 0px;"></a>
                </div>
            </div>
        </div>
        {{-- <p class="mt-5 text-center"><a href={{ url('/galeria') }} class="btn btn-warning py-4 btn-custom-1">Veja mais</a>
        </p> --}}
    </div>

    {{--  --}}



    {{--  --}}


    <div class="site-section bg-light">

        <style>
            .blog-container {
                max-width: 1200px;
                margin: 20px auto;
                padding: 0 20px;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: flex-start;
                /* Adicionado */
            }

            .blog-card {
                width: calc(25% - 20px);
                margin-bottom: 20px;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                background-color: #fff;
                transition: transform 0.3s ease;
            }

            .blog-card:hover {
                transform: translateY(-5px);
            }

            .blog-card img {
                width: 100%;
                height: auto;
                border-bottom: 1px solid #ddd;
            }

            .blog-card-content {
                padding: 20px;
            }

            .blog-card-title {
                font-size: 18px;
                margin: 0 0 10px;
                color: #333;
                font-weight: bold;
            }

            .blog-card-text {
                font-size: 14px;
                margin: 0 0 15px;
                color: #666;
                font: inherit;
                /* font-family: "Poppins", sans-serif; */
                font-family: emoji;
            }

            .blog-card-link {
                display: inline-block;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                padding: 8px 16px;
                   border-radius: 18px;
    /* border-top-right-radius: 0; */
    border-bottom-left-radius: 0;
    transition: background-color 0.3s ease;
}



            .blog-card-link:hover {
                background-color: #0056b3;
            }

            @media (max-width: 768px) {
                .blog-container {
                    flex-direction: column;
                    /* Alterado */
                    align-items: stretch;
                    /* Adicionado */
                }

                .blog-card {
                    width: 100%;
                    /* Alterado */
                }
            }
        </style>

        <div class="blog-container">
            <div class="blog-card">
                <img src="{{ asset('assets/images/paiEfilho.png') }}" alt="Blog Post 1">
                <div class="blog-card-content">
                    <h2 class="blog-card-title">Laços Inquebráveis: A Importância da Participação dos Pais na Educação
                        Infantil</h2>
                    <p class="blog-card-text">Descubra como o envolvimento ativo dos pais na vida escolar de seus filhos na
                        educação infantil fortalece os laços familiares e promove um ambiente de aprendizado positivo.</p>
                    <a href="{{ url('/blog') }}" class="blog-card-link">Leia mais</a>

                </div>
            </div>
            <div class="blog-card">
                <img src="{{ asset('assets/images/maoComBrinquedos.jpeg') }}" alt="Blog Post 2">
                <div class="blog-card-content">
                    <h2 class="blog-card-title">Dicas para estimular a criatividade das crianças em casa</h2>
                    <p class="blog-card-text"> Descubra maneiras de promover a criatividade das crianças em casa, desde
                        atividades artísticas até exploração ao ar livre, inspirando uma jornada emocionante de descobertas
                        para o desenvolvimento de seus filhos.</p>
                    <a href="{{ url('/blog2') }}" class="blog-card-link">Leia mais</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="{{ asset('assets/images/lendo.png') }}" alt="Blog Post 3">
                <div class="blog-card-content">
                    <h2 class="blog-card-title">Navegando nas Ondas da Imaginação: Explorando a Leitura Criativa</h2>
                    <p class="blog-card-text"> Explore como transformamos as histórias em experiências sensoriais e promovemos
                        a expressão criativa das crianças através da leitura, cultivando assimuma paixão pelos livros e pela
                        imaginação desde cedo.</p>
                    <a href="{{ url('/blog3') }}" class="blog-card-link">Leia mais</a>
                </div>
            </div>
            <div class="blog-card">
                <img src="{{ asset('assets/images/bolhaDeSabao.jpeg') }}" alt="Blog Post 4">
                <div class="blog-card-content">
                    <h2 class="blog-card-title">Brincar é Aprender: A Importância do Brincar na Educação Infantil</h2>
                    <p class="blog-card-text">Descubra como a brincadeira ativa é fundamental para impulsionar o desenvolvimento físico, cognitivo e social das crianças na primeira infância, estabelecendo as bases sólidas e duradouras para um bom aprendizado ao longo da vida.</p>
                    <a href="{{ url('/blog4') }}" class="blog-card-link">Leia mais</a>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row mb-5">
              <div class="col-12 text-center">
                <span class="text-cursive h5 text-red d-block">Comentarios</span>
                <h2 class="text-black">Comentarios sobre nossa escola</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="testimonial-3-wrap">


                  <div class="owl-carousel nonloop-block-13">
                    <div class="testimonial-3 d-flex">
                      <div class="vcard-wrap mr-5">
                        <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" class="vcard img-fluid">
                      </div>
                      <div class="text">
                        <h3>Henrique Oliveira</h3>
                        <p class="position">Pai de Arthur</p>
                        <p>Estamos encantados com a escola! É maravilhoso ver o desenvolver do meu filho enquanto ele se
                          diverte
                          todos os dias. Recomendamos de olhos fechados!</p>
                      </div>
                    </div>

                    <div class="testimonial-3 d-flex">
                      <div class="vcard-wrap mr-5">
                        <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="vcard img-fluid">
                      </div>
                      <div class="text">
                        <h3>Julia Medeiros</h3>
                        <p class="position">Ex professora de artes</p>
                        <p>A experiência de lecionar na escola foi incrível! Fui inspirada pela dedicação da equipe e pela
                          energia criativa dos alunos. Uma experiência que guardarei
                          para sempre com carinho.</p>
                      </div>
                    </div>

                    <div class="testimonial-3 d-flex">
                      <div class="vcard-wrap mr-5">
                        <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="vcard img-fluid">
                      </div>
                      <div class="text">
                        <h3>Maiara Alves</h3>
                        <p class="position">Mae de Giulia</p>
                        <p>Como mãe, encontrei na escola um verdadeiro lar para minha filha. A equipe é incrível, sempre
                          atenta e carinhosa. Sinto-me tranquila sabendo que ele está em um ambiente seguro, onde é
                          estimulado a aprender e crescer a cada dia. </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="row mt-5 justify-content-center">

              <div class="col-md-8">


                <div class="row">
                  <div class="col-lg-3 text-center">
                    <span class="text-teal h2 d-block">3423</span>
                    <span>Pais satisfeitos</span>
                  </div>
                  <div class="col-lg-3 text-center">
                    <span class="text-yellow h2 d-block">530</span>
                    <span>Membros</span>
                  </div>
                  <div class="col-lg-3 text-center">
                    <span class="text-success h2 d-block">50+</span>
                    <span>Colaboradores</span>
                  </div>
                  <div class="col-lg-3 text-center">
                    <span class="text-danger h2 d-block">2000+</span>
                    <span>Seguidores</span>
                  </div>
                </div>

              </div>
            </div>
          </div>

    </div>

    <div class="site-section py-5 bg-warning">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex">
                    <h2 class="text-white m-0">Faça parte do crecimento da sua criança</h2>
                    <a href={{ url('/contato') }} class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Comece agora!</a>
                </div>
            </div>
        </div>
    </div>

@endsection
