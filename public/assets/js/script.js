// function showAlert(mensagem, targetElementId, timeout = 3000) {
//     var messageDiv = document.getElementById(targetElementId);
//     messageDiv.innerHTML = mensagem;
//     messageDiv.classList.remove("msgContato");

//     setTimeout(function () {
//         messageDiv.classList.add("msgContato");
//     }, timeout);
// }

// function displayError(erros) {
//     let todosErros = "";

//     for (const [key, value] of Object.entries(erros)) {
//         todosErros += `<div class="alert alert-danger">${value.join(
//             ", "
//         )}</div>`;
//     }

//     if (todosErros) {
//         showAlert(todosErros, "contatoMensagem");
//     }
// }


// function formContato (e) {

//     e.preventDefault();
//     e.stopPropagation();

//         var data = {
//             nomeContato : document.getElementById('nomeContato').value,
//             emailContato : document.getElementById('emailContato').value,
//             assuntoContato : document.getElementById('assuntoContato').value,
//             mensContato : document.getElementById('mensContato').value,
//         }

//         fetch('/contato/enviar', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify(data)
//         })



//         .then(response => {
//             if(!response.ok){
//                return response.json().then(errorData => {
//                 throw errorData;
//                });
//             }
//             return response.json();
//         })



//         .then((data) => {
//             // echo ("Email enviado com sucesso!");

//             if (data.sucess) {
//                 showAlert(
//                     `<div class="alert-sucess">${data.sucess}</div>`,
//                     'contatoMensagem'
//                     );
//                     document.getElementById('formContato').reset();
//             } else{
//                 showAlert(
//                     `<div class="alert alert-danger">Erro ao enviar o email.</div>`,
//                     'contatoMensagem'
//                 );

//             }

//         })


//         .catch(error => {
//             if (error.errors) {
//                 displayError(error.errors);
//             } else{
//                 console.log("Erro desconhecido", error);
//             }

//         });
//     };


//----------------
//new letter
//----------------

function new_letters(e) {

    e.preventDefault();
    e.stopPropagation();

    var data = {
        emailNews: document.getElementById("emailNews").value,
    };

    fetch("/contato/enviarNew", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify(data),
    })
    .then((response) => {
        if (!response.ok) {
            return response.json().then((errorData) => {
                throw errorData;
            });
        }
        return response.json();
    })
    .then((data) => {
        if (!data.ok) {
            showAlert(
                `<div class="alert alert-success">${data.success}</div>`,
                "newsMensagem"
            );
            document.getElementById("new_letters").reset();
        } else {
            showAlert(
                `<div class="alert alert-danger">Erro ao enviar email.</div>`,
                "newsMensagem"
            );
        }
    })
    .catch((error) => {
        if (error.errors) {
            displayError(error.erros);
        } else {
            console.log("Erro desconhecido", error);
        }
    });
};



// formulario



    $(document).ready(function () {
        $('#btnSend').click(function () {
            var errors = '';

            // Validar Nome
            if ($('#nomeContato').val() == '') {
                errors += '<p>O campo Nome é obrigatório.</p>';
                $('#nomeContato').addClass('is-invalid');
            } else {
                $('#nomeContato').removeClass('is-invalid');
            }

            // Validar Email
            if ($('#emailContato').val() == '') {
                errors += '<p>O campo Email é obrigatório.</p>';
                $('#emailContato').addClass('is-invalid');
            } else {
                $('#emailContato').removeClass('is-invalid');
            }

            // Validar Assunto
            if ($('#assuntoContato').val() == '') {
                errors += '<p>O campo Assunto é obrigatório.</p>';
                $('#assuntoContato').addClass('is-invalid');
            } else {
                $('#assuntoContato').removeClass('is-invalid');
            }

            // Validar Mensagem
            if ($('#mensContato').val() == '') {
                errors += '<p>O campo Mensagem é obrigatório.</p>';
                $('#mensContato').addClass('is-invalid');
            } else {
                $('#mensContato').removeClass('is-invalid');
            }

            // Exibir mensagens de erro
            if (errors !== '') {
                $('#contatoMensagem').html('<div class="alert alert-danger">' + errors + '</div>');
            } else {
                $('#contatoMensagem').empty(); // Limpar mensagens de erro anteriores
            }

            // Impedir envio do formulário se houver erros
            if (errors !== '') {
                return false;
            }
        });
    });

