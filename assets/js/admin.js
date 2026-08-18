// PROJETO USANDO JQUERY

$(document).ready(function () {
    // Configura a validação e o envio
    validarFormulario();
});


function validarFormulario() {

    // Seleciona a div responsável pelas mensagens
    const mensagem = document.getElementById("mensagem");


    // Regra personalizada para telefone brasileiro
    $.validator.addMethod(
        "telefoneBR",
        function (value, element) {

            return this.optional(element) ||
                /^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/.test(value);

        },
        "Digite um telefone válido."
    );


    // Configura o jQuery Validation
    $("#formEvento").validate({

        // Regras de validação
        rules: {

            titulo: {
                required: true,
                minlength: 3,
                maxlength: 100
            },

            categoria: {
                required: true
            },

            descricao: {
                required: true,
                minlength: 10,
                maxlength: 1000
            },

            imagem: {
                required: true
            },

            data: {
                required: true
            },

            horario: {
                required: true
            },

            local: {
                required: true,
                minlength: 3,
                maxlength: 150
            },

            endereco: {
                required: true,
                minlength: 5,
                maxlength: 200
            },

            telefone: {
                required: true,
                telefoneBR: true
            },

            email: {
                required: true,
                email: true
            },

            site: {
                url: true
            }
        },


        // Mensagens em português
        messages: {

            titulo: {
                required: "Digite o título do evento.",
                minlength: "Digite pelo menos 3 caracteres.",
                maxlength: "Digite no máximo 100 caracteres."
            },

            categoria: {
                required: "Selecione uma categoria."
            },

            descricao: {
                required: "Digite uma descrição.",
                minlength: "Digite pelo menos 10 caracteres.",
                maxlength: "Digite no máximo 1000 caracteres."
            },

            imagem: {
                required: "Selecione uma imagem de capa."
            },

            data: {
                required: "Informe a data do evento."
            },

            horario: {
                required: "Informe o horário."
            },

            local: {
                required: "Informe o local do evento.",
                minlength: "Digite pelo menos 3 caracteres.",
                maxlength: "Digite no máximo 150 caracteres."
            },

            endereco: {
                required: "Informe o endereço.",
                minlength: "Digite pelo menos 5 caracteres.",
                maxlength: "Digite no máximo 200 caracteres."
            },

            telefone: {
                required: "Informe o telefone.",
                telefoneBR: "Digite um telefone válido."
            },

            email: {
                required: "Informe o e-mail.",
                email: "Digite um e-mail válido."
            },

            site: {
                url: "Digite um site válido."
            }
        },


        // Coloca a mensagem dentro do invalid-feedback
        errorPlacement: function (error, element) {

            element
                .closest(".input-group")
                .find(".invalid-feedback")
                .text(error.text());

        },


        // Campo inválido
        highlight: function (element) {

            $(element)
                .removeClass("is-valid")
                .addClass("is-invalid");

        },


        // Campo válido
        unhighlight: function (element) {

            $(element)
                .removeClass("is-invalid")
                .addClass("is-valid");

        },


        // Executado somente quando todos os campos forem válidos
        submitHandler: async function (formulario) {

            // Captura os dados do formulário
            const dados = new FormData(formulario);


            // Mostra mensagem enquanto envia
            mensagem.className = "alert alert-info mt-3";
            mensagem.textContent = "Enviando dados...";


            try {

                // Envia os dados para o Controller
                const resposta = await fetch(
                    ".../controlles/adminController.php",
                    {
                        method: "POST",
                        body: dados
                    }
                );


                // Converte a resposta para JSON
                const resultado = await resposta.json();


                // Verifica se ocorreu erro HTTP
                if (!resposta.ok) {

                    mensagem.className = "alert alert-danger mt-3";

                    mensagem.textContent =
                        resultado.mensagem ??
                        "Erro ao cadastrar evento.";

                    return;
                }


                // Exibe mensagem de sucesso
                mensagem.className = "alert alert-success mt-3";

                mensagem.textContent = resultado.mensagem;


                // Limpa o formulário
                formulario.reset();


                // Remove as classes de validação
                $(formulario)
                    .find(".form-control")
                    .removeClass("is-valid is-invalid");

            } catch (erro) {

                mensagem.className = "alert alert-danger mt-3";

                mensagem.textContent =
                    "Erro ao enviar os dados para o controller de evento.";

                console.error(erro);
            }
        }
    });


    // Quando o formulário for resetado
    $("#formEvento").on("reset", function () {

        // Remove as classes de validação
        $(this)
            .find(".form-control")
            .removeClass("is-valid is-invalid");

    });
}