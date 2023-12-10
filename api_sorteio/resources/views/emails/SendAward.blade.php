<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cupom de Vale Compra - Parabéns pelo Sorteio!</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333333;
    }

    p {
      color: #666666;
    }

    .coupon {
      background-color: #4CAF50;
      color: white;
      padding: 15px;
      text-align: center;
      font-size: 18px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Parabéns! Você Ganhou um Cupom de Vale Compra</h2>
    <p>Prezado(a) {{$client->name}},</p>
    <p>É com grande alegria que informamos que você foi o(a) ganhador(a) do nosso sorteio! Como forma de agradecimento, gostaríamos de oferecer um cupom de vale compra exclusivo para você:</p>

    <div class="coupon">
      <strong>Código do Cupom:</strong> <span style="font-weight: bold; font-size: 24px;">SEU-CODIGO-DO-SORTEIO com valor de: {{$award->value }} e local {{$award->local}} </span>
    </div>

    <p>Agradecemos por participar do nosso sorteio e parabéns novamente!</p>

    <p>Atenciosamente,<br>Equipe da [Sua Empresa]</p>
  </div>
</body>
</html>

