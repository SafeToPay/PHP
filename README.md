
# Safe2Pay PHP SDK

![Safe2Pay](https://safe2pay.com.br/static/img/banner-github.png)


## Principais recursos

* [x] Consulta de transações.
* [x] Tokenização de cartão.
* [x] Pagamentos.
    * [x] Boleto bancário.
    * [x] Cartão de crédito.
    * [x] Bitcoin.
    * [x] Cartão de débito.
    * [x] Carnê.
* [x] Gerenciamento de subcontas para Marketplace.
* [x] Venda simples.
* [x] Recorrência.


## Utilização

composer config minimum-stability dev

composer require safe2pay/sdk


## Utilização

A integração com a API do Safe2Pay se dá pelo modelo RESTful, de forma a realizar a transferência segura e simplificada dos dados pelo formato JSON. Para facilitar o envio dos dados, deve-se montar um objeto para envio baseado nos modelos disponíveis, com exemplos abaixo, e a própria chamada do método desejado realizará o tratamento e conversão deste objeto para JSON. 


### Tratamento das respostas da API

Após o envio, a própria chamada devolverá a resposta em um objeto completo com as propriedades desta, onde um cast das classes de resposta permitirá o tratamento das propriedades do objeto de retorno de forma simplificada, sem a necessidade de criar os mesmos modelos em seu projeto. Utilize a `CheckoutResponse` para transações ou `InvoiceResponse` para solicitações de cobrança.

## Dependências

* PHP >= 5.6

## Pagamentos / Transações

A informação da forma de pagamento é dada por meio da propriedade `PaymentMethod`, onde deve ser informado o código correspondente ao método desejado:

1. Boleto Bancário;
2. Cartão de Crédito;
3. Bitcoin;
4. Cartão de Débito

O retorno do envio da transação trará um status para esta, que pode ser igual a:

```
1 = PENDENTE
2 = PROCESSAMENTO
3 = AUTORIZADO
4 = DISPONÍVEL
5 = EM DISPUTA
6 = DEVOLVIDO
7 = BAIXADO
8 = RECUSADO
11 = LIBERADO
12 = EM CANCELAMENTO
```

### Criando uma venda com Boleto

```php
<?php

require_once 'vendor/autoload.php';

use API\PaymentRequest;
use Models\Payment\BankSlip;
use Models\Transactions\Transaction;
use Models\General\Customer;
use Models\General\Product;
use Models\General\Address;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');


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

$response = PaymentRequest::BankSlip($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Criando uma venda com cartão de crédito

```php
<?php

require_once 'vendor/autoload.php';

use API\PaymentRequest;
use Models\Payment\CreditCard;
use Models\Transactions\Transaction;
use Models\General\Customer;
use Models\General\Product;
use Models\General\Address;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

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
//$payload->setPaymentObject(CreditCard::__Tokenized("841541584185418514851414965941851"));


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

require_once 'vendor/autoload.php';

use API\PaymentRequest;
use Models\Transactions\Transaction;
use Models\General\Customer;
use Models\General\Product;
use Models\General\Address;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

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

//Insere os produtos referente a cobrança
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

$response = PaymentRequest::CryptoCurrency($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Criando uma venda com cartão de débito

```php
<?php

require_once 'vendor/autoload.php';

use API\PaymentRequest;
use Models\Payment\DebitCard;
use Models\Transactions\Transaction;
use Models\General\Customer;
use Models\General\Product;
use Models\General\Address;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

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

//Informa método de pagamento 4 para cartão de débito
$payload->setPaymentMethod("4");

//Inicializa o objeto de pagamento com uma instância de DebitCard(cartão de débito)

//Exemplo de pagamento com cartão não tokenizado
 $payload->setPaymentObject(
    new DebitCard(
        "João da Silva",  // Nome
        "4024007153763191", // Número 
        "12/2019", // Data de vencimento
        "241" //Código de segurança
    ));

//Insere os produtos referente a cobrança
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

$response = PaymentRequest::DebitCard($payload);

} catch(Exception $e) {

    echo  $e->getMessage();
}

// ...
```

### Tokenizando um cartão

```php
<?php

namespace Test;

require_once 'vendor/autoload.php';

use Models\Payment\CreditCard;
use API\TokenizationRequest;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');


/**
 * Class TokenizationTest
 *
 * @package Safe2Pay\Test
 */
class TokenizationTest
{

    public static function Create()
    {
        //Cria uma instância do objeto do cartão para realizar a tokenização
        $CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2019", "241");
        //Realiza a tokenização e traz o retorno

        try {

            $response  = TokenizationRequest::Create($CreditCard);

        } catch (Exception $e) {

            echo  $e->getMessage();
        }
   
    }
}

// ...
```

### Consultar transação

```php
<?php

require_once 'vendor/autoload.php';

use API\TransactionRequest;

use Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');
/**
 * Class TransactionTest
 *
 * @package Safe2Pay\Test
 */
class TransactionTest
{

    public static function Get()
    { 
        $Id=535489;
        $response = TransactionRequest::Get($Id);

    }
}

// ...
```

## Informações adicionais / Contato

A orientação sobre a utilização da API também está disponível na documentação de referência da API, disponível aqui, porém salientamos que ela se encontra em atualização para a nova versão da API.

Em caso de dúvidas, ficamos à disposição em nossos canais ou diretamente pelo e-mail integracao@safe2pay.com.br.
