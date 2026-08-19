// PROJETO USANDO JQUERY

$(document).ready(function () {
  // Configura a validação e o envio
  validarFormulario();
});
function validarFormulario() {

  // Seleciona a div responsável pelas mensagens
  const mensagem = document.getElementById("mensagem");

  // Impede o formulário de recarregar a página
  $("#formEvento").on("submit", function (evento) {
    evento.preventDefault();
  });

  // Configura o jQuery Validation
  $("#formEvento").validate({
    // Regras de validação
    rules: {
      // titulo: {
      //   required: true,
      //   minlength: 3,
      // },
      // categoria: {
      //   required: true,
      // },
      // descricao: {
      //   required: true,
      //   minlength: 3,
      // },
      // imagem: {
      //   required: true,
      // },
      // data: {
      //   required: true,
      // },
      // horario: {
      //   required: true,
      // },
      // local: {
      //   required: true,
      //   minlength: 3,
      // },
      // telefone: {
      //   required: true,
      // },
      // email: {
      //   required: true,
      // },
    },

    // Mensagens em português
    messages: {
      titulo: {
        required: "Campo invalido.",
      },
      categoria: {
        required: "Campo invalido.",
      },
      descricao: {
        required: "Campo invalido.",
      },
      imagem: {
        required: "Campo invalido.",
      },
      data: {
        required: "Campo invalido.",
      },
      horario: {
        required: "Campo invalido.",
      },
      local: {
        required: "Campo invalido.",
      },
      telefone: {
        required: "Campo invalido.",
      },
      email: {
        required: "Campo invalido.",
      },
    },

    // Mensagens de erro
    errorPlacement: function (error, element) {
      element.closest(".mb-3").find(".invalid-feedback").text(error.text());
    },

    // Executado quando o campo está inválido
    highlight: function (element) {
      $(element).removeClass("is-valid").addClass("is-invalid");
    },

    // Executado quando o campo está válido
    unhighlight: function (element) {
      $(element).removeClass("is-invalid").addClass("is-valid");
    },

    // Executado somente quando todos os campos forem válidos
    submitHandler: async function (formulario) {
      
      const dados = new FormData(formulario);

      //Mostra os dados no console
      console.table(Object.fromEntries(dados.entries()));

      // Exibe mensagem enquanto envia
      mensagem.className = "alert alert-info mt-3";
      mensagem.textContent = "Enviando dados...";

      try {
       const resposta = await fetch("../controllers/cdstEventosController.php", {
    method: "POST",
    body: dados,
});

        // Converte a resposta JSON
        const resultado = await resposta.json();

        //console.log(resultado);

        // Verifica se ocorreu erro HTTP
        if (!resposta.ok) {
          mensagem.className = "alert alert-danger mt-3";
          let conteudo = `<strong>${resultado.mensagem}</strong>`;
          if (resultado.erros) {
            conteudo += "<ul class='mb-0 mt-2'>";
            Object.entries(resultado.erros).forEach(function ([campo, erros]) {
              erros.forEach(function (erro) {
                conteudo += `<li>${erro}</li>`;
              });
            });
            conteudo += "</ul>";
          }

          mensagem.innerHTML = conteudo;

          return;
        }

        // Exibe mensagem de sucesso
        mensagem.className = "alert alert-success mt-3";
        mensagem.textContent = resultado.mensagem;

        // Limpa os campos
        formulario.reset();

      } catch (erro) {
        mensagem.className = "alert alert-danger mt-3";
        mensagem.textContent =
          "Erro ao enviar os dados para o controller de produto."; //Uso da constante: MSG_ERRO

        console.error(erro);
      }
    },
  });

  // Quando o formulário for limpo
  $("#formProduto").on("reset", function () {
    // Remove as classes de validação
    $(this).find(".form-control").removeClass("is-valid is-invalid");
  });
}