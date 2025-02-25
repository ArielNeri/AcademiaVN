<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia VN Prado - Cadastro</title>
    <style>
        body {
            background-image: url('https://totalpass.com/_next/static/media/totalfit-benefit.a0775830.webp');
            background-size: cover;
            background-position: center;
            color: white;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.2);
        }

        h1, h2 {
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            text-align: left;
        }

        input, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        input {
            background: rgba(255, 255, 255, 0.9);
        }

        button {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        #imc_resultado, .mensagem-sucesso, .localizacao {
            font-size: 18px;
            margin-top: 15px;
            color: #4CAF50;
        }
    </style>
    <script>
        function calcularIMC() {
            var peso = parseFloat(document.getElementById("peso").value);
            var altura = parseFloat(document.getElementById("altura").value);
            if (!isNaN(peso) && !isNaN(altura) && altura > 0) {
                var imc = peso / (altura * altura);
                var categoria = imc < 18.5 ? 'Abaixo do peso' :
                    imc < 24.9 ? 'Peso normal' :
                        imc < 29.9 ? 'Sobrepeso' : 'Obesidade';
                document.getElementById("imc_resultado").innerHTML = `IMC: ${imc.toFixed(2)} – ${categoria}`;
            } else {
                document.getElementById("imc_resultado").innerHTML = "Por favor, insira dados válidos.";
            }
        }

        function mostrarMensagemSucesso(event) {
            event.preventDefault();
            var nomeAluno = document.getElementById("nome").value;
            document.getElementById("mensagem-sucesso").innerHTML = `Seu cadastro foi concluído com sucesso, ${nomeAluno}!`;
            document.getElementById("localizacao-academia").innerHTML = "<strong>Localização:</strong> Rua Exemplo, 123, Bairro, Cidade, Estado";
        }
    </script>
</head>
<body>
<h1>Academia VN Prado</h1>
<div class="container">
    <h2>Sobre Nós</h2>
    <p>A Academia VN Prado é um espaço dedicado ao bem-estar e qualidade de vida. Com equipamentos modernos e profissionais qualificados, proporcionamos um ambiente ideal para quem busca saúde e condicionamento físico.</p>

    <h2>Nossos Serviços</h2>
    <ul style="text-align: left; color: white;">
        <li>Musculação com equipamentos de última geração</li>
        <li>Aulas de funcional e HIIT</li>
        <li>Treinamento personalizado</li>
        <li>Nutricionista e acompanhamento especializado</li>
        <li>Ambiente climatizado e seguro</li>
    </ul>
</div>
<div class="container">
    <h2>Formulário de Cadastro</h2>
    <form id="formCadastro" onsubmit="mostrarMensagemSucesso(event)">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required>

        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*">

        <button type="button" onclick="calcularIMC()">Calcular IMC</button>
        <div id="imc_resultado"></div>

        <button type="submit">Cadastrar</button>
    </form>
    <div id="mensagem-sucesso" class="mensagem-sucesso"></div>
    <div id="localizacao-academia" class="localizacao"></div>
</div>
<footer>
    <p1>Localização: Rua Douglas de Albuquerque de Ferreira</p1>
</footer>
</body>
</html>