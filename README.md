# Safe2Pay

SDK API-3.0 PHP

## Principais recursos

* [x] Pagamentos por cartão de crédito.
* [x] Pagamentos recorrentes.
    * [x] Com autorização na primeira recorrência.
    * [x] Com autorização a partir da primeira recorrência.
* [x] Pagamentos por cartão de débito.
* [x] Pagamentos por boleto.
* [x] Pagamentos por transferência eletrônica.
* [x] Cancelamento de autorização.
* [x] Consulta de pagamentos.
* [x] Tokenização de cartão.

## Limitações

Por envolver a interface de usuário da aplicação, o SDK funciona apenas como um framework para criação das transações. Nos casos onde a autorização é direta, não há limitação; mas nos casos onde é necessário a autenticação ou qualquer tipo de redirecionamento do usuário, o desenvolvedor deverá utilizar o SDK para gerar o pagamento e, com o link retornado pela Cielo, providenciar o redirecionamento do usuário.

## Dependências

* PHP >= 5.6

## Instalando o SDK

Se já possui um arquivo `composer.json`, basta adicionar a seguinte dependência ao seu projeto:

```json
"require": {
    "developercielo/api-3.0-php": "^1.0"
}
```

Com a dependência adicionada ao `composer.json`, basta executar:

```
composer install
```

Alternativamente, você pode executar diretamente em seu terminal:

```
composer require "developercielo/api-3.0-php"
```

## Produtos e Bandeiras suportadas e suas constantes

```php
<?php
require 'vendor/autoload.php';

use Cielo\API30\Ecommerce\CreditCard;
```

| Bandeira         | Constante              | Crédito à vista | Crédito parcelado Loja | Débito | Voucher |
|------------------|------------------------|-----------------|------------------------|--------|---------|
| Visa             | CreditCard::VISA       | Sim             | Sim                    | Sim    | *Não*   |
| Master Card      | CreditCard::MASTERCARD | Sim             | Sim                    | Sim    | *Não*   |
| American Express | CreditCard::AMEX       | Sim             | Sim                    | *Não*  | *Não*   |
| Elo              | CreditCard::ELO        | Sim             | Sim                    | *Não*  | *Não*   |
| Diners Club      | CreditCard::DINERS     | Sim             | Sim                    | *Não*  | *Não*   |
| Discover         | CreditCard::DISCOVER   | Sim             | *Não*                  | *Não*  | *Não*   |
| JCB              | CreditCard::JCB        | Sim             | Sim                    | *Não*  | *Não*   |
| Aura             | CreditCard::AURA       | Sim             | Sim                    | *Não*  | *Não*   |

## Utilizando o SDK

Para criar um pagamento simples com cartão de crédito com o SDK, basta fazer:



### Criando uma venda com Boleto

```php
<?php

require 'Models/Payment/BankSlip.php';
require 'Models/Transactions/Transaction.php';

use Safe2Pay\Models\BankSlip;
use Safe2Pay\Models\Transaction;


//Inicializar método de pagamento
$payload  = new Transaction();
//Informa se será em ambiente de sandbox ou produção
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Informa Url de callback para receber notificações via Webhook
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Informa método de pagamento 1 para boleto
$payload->setPaymentMethod("1");

//Inicializa o objeto de pagamento com uma instância de Bankslip(Boleto)
$payload->setPaymentObject(
    new BankSlip(
        "16/07/2019",   //Data de vencimento
        false,          //Cancelar após a data de vencimento  
        false,          //Pagamento parcial
        2.00,           //Multa após o atraso
        0.40,           //Multa por dia de atraso
        "Instrução de Exemplo", //Instrução
        array("mensagem 1", "mensagem 2", "mensagem 3") //array de mensagens
    ));


//Insere os produtos referente a cobrança do boleto
//-Código
//-Descrição
//-Quantidade
//-Preço unitário
$payload->setProducts(array(
    new Product("001", "Teste 1", 10, 1.99),
    new Product("002", "Teste 2", 3, 2.50),
    new Product("003", "Teste 3", 7, 1)
));

//Inicializa o construtor com o Nome, documento e Email do cliente
$Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");

//Informa o endereço do cliente 
$Customer->setAddress(new Address(
    "90620000", //CEP
    "Avenida Princesa Isabel",  //Logradouro
    "828", // Número
    "Complemento", //Complemento
    "Santana",  // Bairro
    "RS",   // Estado
    "Porto Alegre", // Cidade
    "Brasil"    //País
));

//Insere o objeto do cliente na cobrança
$payload->setCustomer($Customer);

try {

$response  =  PaymentRequest::BankSlip($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Criando uma venda com cartão de crédito

```php
<?php

require 'Models/Payment/BankSlip.php';
require 'Models/Transactions/Transaction.php';

use Safe2Pay\Models\BankSlip;
use Safe2Pay\Models\Transaction;


//Inicializar método de pagamento
$payload  = new Transaction();
//Informa se será em ambiente de sandbox ou produção
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Informa Url de callback para receber notificações via Webhook
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Informa método de pagamento 2 para boleto
$payload->setPaymentMethod("2");

//Inicializa o objeto de pagamento com uma instância de CreditCard(Cartão de crédito)

//Exemplo de pagamento com cartão não tokenizado
 $payload->setPaymentObject(
    new CreditCard(
        "João da Silva",  // Nome
        "4024007153763191", // Número 
        "12/2019", // Data de vencimento
        "241" //Código de segurança
    ));
 //Exemplo com cartão tokenizado



//Insere os produtos referente a cobrança do boleto
//-Código
//-Descrição
//-Quantidade
//-Preço unitário
$payload->setProducts(array(
    new Product("001", "Teste 1", 10, 1.99),
    new Product("002", "Teste 2", 3, 2.50),
    new Product("003", "Teste 3", 7, 1)
));

//Inicializa o construtor com o Nome, documento e Email do cliente
$Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");

//Informa o endereço do cliente 
$Customer->setAddress(new Address(
    "90620000", //CEP
    "Avenida Princesa Isabel",  //Logradouro
    "828", // Número
    "Complemento", //Complemento
    "Santana",  // Bairro
    "RS",   // Estado
    "Porto Alegre", // Cidade
    "Brasil"    //País
));

//Insere o objeto do cliente na cobrança
$payload->setCustomer($Customer);

try {

$response  =  PaymentRequest::CreditCard($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Criando uma venda com Bitcoin

```php
<?php

require 'Models/Payment/BankSlip.php';
require 'Models/Transactions/Transaction.php';

use Safe2Pay\Models\BankSlip;
use Safe2Pay\Models\Transaction;


//Inicializar método de pagamento
$payload  = new Transaction();
//Informa se será em ambiente de sandbox ou produção
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Informa Url de callback para receber notificações via Webhook
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Informa método de pagamento 3 para Bitcoin
$payload->setPaymentMethod("3");

//Insere os produtos referente a cobrança do boleto
//-Código
//-Descrição
//-Quantidade
//-Preço unitário
$payload->setProducts(array(
    new Product("001", "Teste 1", 10, 1.99),
    new Product("002", "Teste 2", 3, 2.50),
    new Product("003", "Teste 3", 7, 1)
));

//Inicializa o construtor com o Nome, documento e Email do cliente
$Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");

//Informa o endereço do cliente 
$Customer->setAddress(new Address(
    "90620000", //CEP
    "Avenida Princesa Isabel",  //Logradouro
    "828", // Número
    "Complemento", //Complemento
    "Santana",  // Bairro
    "RS",   // Estado
    "Porto Alegre", // Cidade
    "Brasil"    //País
));

//Insere o objeto do cliente na cobrança
$payload->setCustomer($Customer);

try {

$response  =  PaymentRequest::CryptoCurrency($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Criando uma venda com cartão de crédito

```php
<?php

require 'Models/Payment/BankSlip.php';
require 'Models/Transactions/Transaction.php';

use Safe2Pay\Models\BankSlip;
use Safe2Pay\Models\Transaction;


//Inicializar método de pagamento
$payload  = new Transaction();
//Informa se será em ambiente de sandbox ou produção
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Informa Url de callback para receber notificações via Webhook
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Informa método de pagamento 2 para cartão de débito
$payload->setPaymentMethod("4");

//Inicializa o objeto de pagamento com uma instância de CreditCard(cartão de crédito)

//Exemplo de pagamento com cartão não tokenizado
 $payload->setPaymentObject(
    new DebitCard(
        "João da Silva",  // Nome
        "4024007153763191", // Número 
        "12/2019", // Data de vencimento
        "241" //Código de segurança
    ));
 //Exemplo com cartão tokenizado



//Insere os produtos referente a cobrança do boleto
//-Código
//-Descrição
//-Quantidade
//-Preço unitário
$payload->setProducts(array(
    new Product("001", "Teste 1", 10, 1.99),
    new Product("002", "Teste 2", 3, 2.50),
    new Product("003", "Teste 3", 7, 1)
));

//Inicializa o construtor com o Nome, documento e Email do cliente
$Customer = new Customer("Teste Cliente", "01579286000174", "Teste@Teste.com.br");

//Informa o endereço do cliente 
$Customer->setAddress(new Address(
    "90620000", //CEP
    "Avenida Princesa Isabel",  //Logradouro
    "828", // Número
    "Complemento", //Complemento
    "Santana",  // Bairro
    "RS",   // Estado
    "Porto Alegre", // Cidade
    "Brasil"    //País
));

//Insere o objeto do cliente na cobrança
$payload->setCustomer($Customer);

try {

$response  =  PaymentRequest::CreditCard($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Tokenizando um cartão

```php
<?php

require '../Models/Payment/CreditCard.php';
require '../Request/TokenizationRequest.php';

use Safe2Pay\Api\TokenizationRequest;
use Safe2Pay\Models\CreditCard;

// ...
// ...
//Cria uma instância do objeto do cartão passando pelo construtor as informaçõespara realizar a tokenização:
//Nome, Número do cartão, Data de expiração e código de segurança 
$CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2019", "241");


try {
//Realiza a tokenização e traz o retorno 

    $response  =  TokenizationRequest::Create($CreditCard);

} catch (Exception $e) {

    echo  $e->getMessage();
}
// ...
```

## Informações adicionais / Contato

A orientação sobre a utilização da API também está disponível na documentação de referência da API, disponível aqui, porém salientamos que ela se encontra em atualização para a nova versão da API e, por isso, recomendamos a utilização do pacote da galeria do NuGet, para que você esteja sempre com a versão mais atualizada!

Em caso de dúvidas, ficamos à disposição em nossos canais ou diretamente pelo e-mail integracao@safe2pay.com.br.
