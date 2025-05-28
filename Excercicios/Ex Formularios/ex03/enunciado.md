💪 Exercício 3 – Nível Avançado: Simulador de IMC (Índice de Massa Corporal)

🧠 Crie uma aplicação composta por dois arquivos:

1. `imc.html`
Formulário com os seguintes campos:
    * `peso` (input `type="number"` com casas decimais);
    * `altura` (input `type="number"` com casas decimais);
    * `submit`.

Esse formulário deve enviar os dados para o arquivo `resultado.php` via `GET`.

2. resultado.php
Este script deve:
    1. Capturar peso e altura com $_GET;
    2. Calcular o IMC com a fórmula:

```ini
    IMC = peso / (altura * altura)
```
3. Exibir o resultado do IMC com 2 casas decimais;
4. Classificar o IMC com base nas faixas:

| Faixa de IMC         | Resultado                    |
|----------------------|------------------------------|
| Menor que 18.5       | Abaixo do peso               |
| Entre 18.5 e 24.9    | Peso ideal                   |
| Entre 25.0 e 29.9    | Sobrepeso                    |
| Entre 30.0 e 34.9    | Obesidade grau 1             |
| Entre 35.0 e 39.9    | Obesidade grau 2             |
| 40.0 ou mais         | Obesidade grau 3 (mórbida)   |

