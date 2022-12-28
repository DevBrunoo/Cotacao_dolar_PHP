# Converta o seu dinheiro para moedas estrangeiras 
## O que e 

Esse e um repositorio criado em PHP que busca fazer conversao de dinheiro para outras moedas internacionais atraves da API AWERSOME, 


## Como usar 

- Para usá-lo, é necessário ter o PHP instalado em sua máquina e baixar as dependências (bibliotecas externas) listadas no arquivo autoload.php, que podem ser instaladas através do Composer (um gerenciador de dependências para PHP).

- O script pode ser executado a partir da linha de comando, passando dois argumentos que representam as moedas que deseja consultar. Por exemplo:
- 

```yerm
php script.php USD BRL
```

O script irá realizar a consulta na API e exibir os resultados de cotação das moedas para os últimos 15 dias. Cada linha representa um dia, com as informações de data, cotação de compra (bid) e cotação de venda (ask).


Exemplo de saída:


```yerm
Moedas: USD -> BRL
2022-01-01 | 3.9200 | 3.9600
2022-01-02 | 3.9300 | 3.9700
2022-01-03 | 3.9400 | 3.9800
2022-01-04 | 3.9500 | 3.9900
2022-01-05 | 3.9600 | 4.0000
```
## Mais sobre como utilizar

Para utilizar o script, é necessário passar dois argumentos na linha de comando, representando as moedas que deseja consultar. Por exemplo:

```yerm
php consultar-cotacao.php USD BRL
```

O script irá exibir a cotação das moedas USD (dólar americano) para BRL (real brasileiro) nos últimos 15 dias.

Para funcionar corretamente, o script precisa de algumas dependências externas, que devem ser instaladas antes de utilizá-lo. Para instalar essas dependências, basta executar o seguinte comando na raiz do projeto:

```yerm
composer install
```

O script também faz uso de uma classe Economia, que deve ser implementada por você. Essa classe deve ter uma função consultarUltimosFechamentos, que deve realizar a consulta na API de cotação de moedas e retornar os resultados em um array.

```yerm
$obEconomia = new Economia;
$dadosFechamento = $obEconomia->consultarUltimosFechamentos('USD', 'BRL', 15);
```

O script exibirá a cotação das moedas consultadas, formatando os valores com a função number_format e exibindo-os na tela.

Espero que esse script seja útil para você! Qualquer dúvida ou sugestão, sinta-se à vontade para entrar em contato.
