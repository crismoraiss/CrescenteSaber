@extends('layout.layout')

@section('tile', 'home')

@section('conteudo')

    <style>
        @font-face {
            font-family: 'FontAwesome';
            src: url('../fonts/fontawesome-webfont.eot?v=4.7.0');
            src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :focus {
            outline: none;
        }

        body {
            background: #DBDBDB;
            font-family: 'Open sans';
        }

        /* FORMULARIO =================================== */

        .form_wrap {
            width: 1050px;
            height: 530px;
            margin: 50px auto;
            display: flex;

            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }

        /* Informacion de Contacto*/

        .cantact_info::before {
            content: '';
            width: 100%;
            height: 100%;

            position: absolute;
            top: 0;
            left: 0;

            background: #0000006e;
            opacity: 0.9;
        }

        .cantact_info {
            width: 38%;
            position: relative;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            background-image: url('assets/images/contato.png');
            background-size: cover;
            background-position: center center;

        }

        .info_title,
        .info_items {
            position: relative;
            z-index: 2;
            color: #fff;
        }

        .info_title {
            margin-bottom: 60px;
        }

        .info_title span {
            font-size: 100px;
            display: block;
            text-align: center;
            margin-bottom: 15px;
        }

        .info_title h2 {
            font-size: 35px;
            text-align: center;
            color: #fff
        }

        .info_items p {
            display: flex;
            align-items: center;

            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .info_items p:nth-child(1) span {
            font-size: 30px;
            margin-right: 10px;
        }

        .info_items p:nth-child(2) span {
            font-size: 50px;
            margin-right: 15px;
            margin-left: 4px;
        }


        /* Formulario de contacto*/
        form.form_contact {
            width: 62%;
            padding: 30px 40px;
        }

        form.form_contact h2 {
            font-size: 25px;
            font-weight: 600;
            color: #303030;
            margin-bottom: 30px;
        }

        form.form_contact .user_info {
            display: flex;
            flex-direction: column;
        }

        form.form_contact label {
            font-weight: 600;
        }

        form.form_contact input,
        form.form_contact textarea {
            width: 100%;
            /* padding: 8px 0px 5px; */
            margin-bottom: 7px;

            border: none;
            border-bottom: 2px solid #D1D1D1;

            font-family: 'Open sans';
            color: #5A5A5A;
            font-size: 14px;
            font-weight: 400;
        }

        form.form_contact textarea {
            max-width: 100%;
            min-width: 100%;
            max-height: 90px;
        }

        form.form_contact input[type="button"] {
            width: 180px;
            background: #060b11;
            /* padding: 10px; */
            padding-top: 3px;
            border: none;
            border-radius: 25px;

            align-self: flex-end;

            color: #fff;
            font-family: 'Open sans';
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
        }

        form.form_contact input[type="button"]:hover {
            background: #3371B6;
        }

        /* Ventana de errores*/
        .modal_wrap {
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);

            position: fixed;
            top: 0;
            left: 0;
            z-index: 3;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mensaje_modal {
            background: #fff;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            width: 400px;
            padding: 30px 20px 15px;
        }

        .mensaje_modal h3 {
            text-align: center;
            font-family: 'Ubuntu';
            font-size: 20px;
            font-weight: 400;
        }

        .mensaje_modal h3:after {
            content: '';
            display: block;
            width: 100%;
            height: 1px;
            background: #C5C5C5;
            margin: 10px 0px 15px;
        }

        .mensaje_modal p {
            font-size: 16px;
            color: #606060;
        }

        .mensaje_modal p:before {
            content: "\f00d";
            font-family: FontAwesome;
            display: inline-block;
            color: #E25151;
            margin-right: 8px;
        }

        #btnClose {
            display: inline-block;
            padding: 3px 10px;
            margin-top: 10px;

            background: #E25151;
            color: #fff;
            border: 2px solid #B14141;
            cursor: pointer;

            float: right;
        }

        /*  */
        /* Estilos para telas menores */
        @media only screen and (max-width: 767px) {
            .form_wrap {
                width: 100%;
                margin: 50px auto;
            }

            .cantact_info {
                display: none;
                /* Oculta a seção de informações de contato em telas menores */
            }

            form.form_contact {
                width: 100%;
                padding: 20px;
            }

            form.form_contact h2 {
                text-align: center;
                /* Centraliza o título do formulário em telas menores */
            }

            form.form_contact .user_info {
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Centraliza os elementos do formulário verticalmente */
            }

            form.form_contact label {
                width: 100%;
                text-align: left;
                /* Alinha os rótulos dos campos à esquerda */
            }

            form.form_contact input,
            form.form_contact textarea {
                width: 100%;
                margin-bottom: 10px;
            }

            form.form_contact input[type="submit"] {
                width: auto;
                /* Volta para a largura padrão para o botão de envio */
            }
        }
    </style>




    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay"
            style="background-image: url('{{ asset('assets/images/banner/banner2.png') }}');">
            <div class="container">
                <div class="row align-items-center ">

                    <div class="col-md-5 mt-5 pt-5">
                        <span class="text-cursive h5 text-red">Contato</span>
                        <h1 class="mb-3 font-weight-bold text-teal">Fale com a gente!</h1>
                        <p><a href="{{ route('/') }}" class="text-white">Home</a> <span class="mx-3">/</span>
                            <strong>Contato</strong>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-7 text-center mb-5">
                    <h2>Use o campo de formulario para nos enviar sua mensagem</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5">

                    <section class="form_wrap">
                        <section class="cantact_info">
                            <section class="info_title">
                                <span class="fa fa-user-circle"></span>
                                <h2>Informações <br>para contato:</h2>
                            </section>
                            <section class="info_items">
                                <p><span class="fa fa-envelope"></span>Av Marechal Tito, 1500 <br>- São Miguel Paulista, São
                                    Paulo</p>
                                <p><span class="fa fa-mobile"></span>(11) 99657-0965</p>
                            </section>
                        </section>

                        <form action="{{ route('contato.enviar') }}" method="POST" class="form_contact" id="formContato">
                            @csrf
                            <h2>Envie uma mensagem</h2>
                            <div class="user_info">
                                <label for="names">Nome: </label>
                                <input type="text" name="nomeContato" id="nomeContato" placeholder="Seu Nome" value="{{ old('nomeContato') }}">
                                <div id="nomeContato" class="erro-mensagem"></div>

                                <label for="email">Email: </label>
                                <input type="text" name="emailContato" id="emailContato" placeholder="Endereço de E-mail" value="{{ old('emailContato') }}">
                                <div id="emailContato" class="erro-mensagem"></div>

                                <label for="assuntoContato">Assunto: </label>
                                <textarea placeholder="Digite o assunto" name="assuntoContato" id="assuntoContato">{{old('assuntoContato')}}</textarea>
                                <div id="assuntoContato" class="erro-mensagem"></div>

                                <label for="mensagem">Mensagem: </label>
                                <textarea placeholder="Digite sua mensagem" name="mensContato" id="mensContato">{{old('mensContato')}}</textarea>
                                <div id="mensContato" class="erro-mensagem"></div>

                                <input type="submit" onclick="formContato(event)" id="btnSend">
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                        </form>
                    </section>

                </div>

            </div>
        </div>
    </div>

    <div class="site-section">
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
                                    <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image"
                                        class="vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3>Henrique Oliveira</h3>
                                    <p class="position">Pai de Arthur</p>
                                    <p>Estamos encantados com a escola! É maravilhoso ver o desenvolver do meu filho
                                        enquanto ele se
                                        diverte
                                        todos os dias. Recomendamos de olhos fechados!</p>
                                </div>
                            </div>

                            <div class="testimonial-3 d-flex">
                                <div class="vcard-wrap mr-5">
                                    <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Image"
                                        class="vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3>Julia Medeiros</h3>
                                    <p class="position">Ex professora de artes</p>
                                    <p>A experiência de lecionar na escola foi incrível! Fui inspirada pela dedicação da
                                        equipe e pela
                                        energia criativa dos alunos. Uma experiência que guardarei
                                        para sempre com carinho.</p>
                                </div>
                            </div>

                            <div class="testimonial-3 d-flex">
                                <div class="vcard-wrap mr-5">
                                    <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image"
                                        class="vcard img-fluid">
                                </div>
                                <div class="text">
                                    <h3>Maiara Alves</h3>
                                    <p class="position">Mae de Giulia</p>
                                    <p>Como mãe, encontrei na escola um verdadeiro lar para minha filha. A equipe é
                                        incrível, sempre
                                        atenta e carinhosa. Sinto-me tranquila sabendo que ele está em um ambiente seguro,
                                        onde é
                                        estimulado a aprender e crescer a cada dia. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $('#formContato').submit(function(event){
                        event.preventDefault(); // Impede o envio padrão do formulário

                        // Realiza uma requisição AJAX para enviar os dados do formulário
                        $.ajax({
                            url: $(this).attr('action'),
                            type: $(this).attr('method'),
                            data: $(this).serialize(),
                            success: function(response){
                                // Mostra a mensagem de sucesso estilizada
                                $('#contatoMensagem').html('<div class="alert alert-success">Email registrado com sucesso!</div>');
                                // Limpa os campos do formulário após o envio bem-sucedido
                                $('#nomeContato, #emailContato, #assuntoContato, #mensContato').val('');
                            },
                            error: function(xhr, status, error){
                                // Trata erros, se necessário
                                console.error(error);
                            }
                        });
                    });
                });
            </script>
        @endsection
