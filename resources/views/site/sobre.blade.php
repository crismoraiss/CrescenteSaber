@extends('layout.layout')

@section('tile', 'galeria')

@section('conteudo')

<div class="ftco-blocks-cover-1">
    <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
    <div class="site-section-cover overlay"
      style="background-image: url('{{ asset('assets/images/banner/banner3.png') }}')">
      <div class="container">
        <div class="row align-items-center ">

          <div class="col-md-5 mt-5 pt-5">
            <span class="text-cursive h5 text-red">Sobre</span>
            {{-- <h1 class="mb-3 font-weight-bold text-teal">About Us</h1> --}}
            <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Sobre</strong></p>
          </div>

        </div>
      </div>
    </div>
  </div>



  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('assets/images/img/sobre1.png') }}" alt="Image" class="img-fluid" style="border-radius: 50px 0px 0px 50px; width: 86%;">
        </div>
        <div class="col-md-5 ml-auto pl-md-5 sobre1">
          <span class="text-cursive h5 text-red">Sobre nós</span>
          <h3 class="text-black">Criando lembranças magicas para sua criança</h3>
          <p><span>Bem-vindo à nossa escola, onde cada dia é uma jornada repleta de magia e aventura! Estamos comprometidos em criar lembranças inesquecíveis para o seu filho ou filha. Nossos educadores apaixonados e uma variedade de atividades cuidadosamente planejadas proporcionam um ambiente onde a imaginação pode florescer e cada descoberta se torna uma fonte de encanto. Junte-se a nós nesta emocionante jornada de aprendizado e diversão, onde cada momento é uma oportunidade para a sua criança brilhar!</span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="col-md-5 ml-auto pl-md-5 sobre2">
          <span class="text-cursive h5 text-red">Por dentro da escola</span>
          <h3 class="text-black">Veja como a gente trabalha!</h3>
          <p><span>Em nossa escola infantil, cultivamos um ambiente acolhedor e estimulante para que cada criança floresça. Com salas de aula vibrantes e uma abordagem centrada na criança, incentivamos a curiosidade natural, a criatividade e a expressão individual. Oferecemos uma variedade de atividades extracurriculares, desde artes e música até esportes e ciências, que enriquecem a experiência educacional e promovem um desenvolvimento integral. Acreditamos que cada dia é uma oportunidade para aprender, crescer e criar memórias preciosas. Estamos animados para fazer parte da jornada educacional do seu filho ou filha e ajudá-los a alcançar seu pleno potencial.</span></p>
        </div>
        <div class="col-md-6">
          <img src="{{ asset('assets/images/img/sobre2.png') }}" alt="Image" class="img-fluid" style="border-radius: 0px 50px 50px 0px; width: 86%;">
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-teal">
    <div class="container">
      <div class="row justify-content-center text-center mb-5 section-2-title">
        <div class="col-md-6">
          <span class="text-cursive h5 text-red">Nosso time</span>
          <h3 class="text-white text-center">Conheça a nossa equipe de magos educadores!</h3>

        </div>
      </div>
      <div class="row align-items-stretch">

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1 teal">

            <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Fundador</span>
              <h2>Henrique Alves</h2>
              <p>Responsável pela visão e liderança estratégica da escola.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1 yellow">

            <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Coordenadora</span>
              <h2>Cristiane Santos</h2>
              <p>Profissional com experiência em Educação Infantil e Primária.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1 red">

            <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image" class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Secretária</span>
              <h2>Julia Medeiros</h2>
              <p>Responsável por manter a organização e eficiência administrativa.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1 green">

            <img src="{{ asset('assets/images/person_4.jpg') }}" alt="Image" class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Educador Físico Infantil</span>
              <h2>Gabriel Silva</h2>
              <p>Educador físico infantil apaixonado por promover um estilo de vida ativo e saudável desde a infância.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1 blue">

            <img src="{{ asset('assets/images/person_5.jpg') }}" alt="Image" class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Psicóloga Infantil</span>
              <h2>Camila Oliveira</h2>
              <p>Psicóloga infantil, especializada no desenvolvimento emocional e comportamental de crianças.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1 red">

            <img src="{{ asset('assets/images/professora.png') }}" alt="Image" class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Educadora Especializada em Maternal</span>
              <h2> Ana Torres</h2>
              <p>Educadora apaixonada e altamente especializada em cuidados e educação infantil na fase maternal. </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>


  <div class="site-section bg-info">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <span class="text-cursive h5 text-red d-block">Atividades</span>
          <h2 class="text-white">Por dentro das atividades escolares</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="package text-center bg-white">
            <span class="img-wrap"><img src="{{ asset('assets/images/flaticon/svg/001-jigsaw.svg') }}" alt="Image" class="img-fluid"></span>
            <h3 class="text-teal">Atividades Internos</h3>
            <p>No campos, os alunos estarão expostos a diversas atividades, para ajudar no seu desenvolvimento
              cirativo, sendo alguma das atividades, Oficina de Artes, Jogos Educativos, Brincadeiras no Parque entre
              outras.</p>
            <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Ler mais</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="package text-center bg-white">
            <span class="img-wrap"><img src="{{ asset('assets/images/flaticon/svg/002-target.svg') }}" alt="Image" class="img-fluid"></span>
            <h3 class="text-success">Atividades Externas</h3>
            <p>Explorando o mundo além dos muros da escola, nossos alunos participam de emocionantes
              excursões, visitas a museus e desfrutam de atividades ao ar livre, desfrutando novas
              experiências fora do ambiente escolar.
            </p>
            <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Ler mais</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="package text-center bg-white">
            <span class="img-wrap"><img src="{{ asset('assets/images/flaticon/svg/003-mission.svg') }}" alt="Image"
                class="img-fluid"></span>
            <h3 class="text-danger">Acampamento</h3>
            <p>Além des atividades escolares, oferecemos o CAMP KIDS, para alunos que buscam uma aventura emocionante em
              meio à natureza, onde podem explorar, aprender e criar laços
              desfrutando de atividades ao ar livre.</p>
            <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Ler mais</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
