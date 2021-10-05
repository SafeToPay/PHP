
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
    * [x] Pix.
* [x] Gerenciamento de subcontas para Marketplace.
* [x] Venda simples.

## Utilização

`composer require safe2pay/sdk:dev-master`

## Utilização

A integração com a API do Safe2Pay se dá pelo modelo RESTful, de forma a realizar a transferência segura e simplificada dos dados pelo formato JSON. Para facilitar o envio dos dados, deve-se montar um objeto para envio baseado nos modelos disponíveis, com exemplos abaixo, e a própria chamada do método desejado realizará o tratamento e conversão deste objeto para JSON. 


### Tratamento das respostas da API

Após o envio, a própria chamada devolverá a resposta em um objeto completo com as propriedades desta, onde um cast das classes de resposta permitirá o tratamento das propriedades do objeto de retorno de forma simplificada, sem a necessidade de criar os mesmos modelos em seu projeto.

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
13 = CHARGEBACK
```

### Criando uma venda com Boleto

```php
<?php

require_once 'vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\Models\Payment\BankSlip;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

//Inicializar método de pagamento
$payload  = new Transaction();
//Ambiente de homologação
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Url de callback
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Código da forma de pagamento
// 1 - Boleto bancário
// 2 - Cartão de crédito
// 3 - Criptomoeda
// 4 - Cartão de débito 
$payload->setPaymentMethod("1");

//Informa o objeto de pagamento
$BankSlip = new BankSlip();
//Data de vencimento
$BankSlip->setDueDate("16/10/2019");
//Instrução
$BankSlip->setInstruction("Instrução de Exemplo");
//Multa
$BankSlip->setPenaltyRate(2.00);
//Juros
$BankSlip->setInterestRate(4.00);
//Cancelar após o vencimento
$BankSlip->setCancelAfterDue(false);
//Pagamento parcial
$BankSlip->setIsEnablePartialPayment(false);
//Mensagens
$BankSlip->setMessage(array(
    "mensagem 1",
    "mensagem 2",
    "mensagem 3"
));

//Objeto de pagamento - para boleto bancário
$payload->setPaymentObject($BankSlip);

$Products = array();

 $payloadProduct = new Product();
 $payloadProduct->setCode(1);
 $payloadProduct->setDescription("Produto 1");
 $payloadProduct->setUnitPrice(2.50);
 $payloadProduct->setQuantity(2);

 array_push($Products, $payloadProduct);

$payload->setProducts($Products);

//Customer
$Customer =  new Customer();
$Customer->setName("Teste Cliente");
$Customer->setIdentity("01579286000174");
$Customer->setEmail("Teste@Teste.com.br");
$Customer->setPhone("51999999999");

$Customer->Address = new Address();
$Customer->Address->setZipCode("90620000");
$Customer->Address->setStreet("Avenida Princesa Isabel");
$Customer->Address->setNumber("828");
$Customer->Address->setComplement("Lado B");
$Customer->Address->setDistrict("Santana");
$Customer->Address->setStateInitials("RS");
$Customer->Address->setCityName("Porto Alegre");
$Customer->Address->setCountryName("Brasil");


$payload->setCustomer($Customer);

$response  = PaymentRequest::CreatePayment($payload);

// ...
```

### Criando uma venda com cartão de crédito

```php
<?php

require_once 'vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\Models\Payment\CreditCard;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

//Inicializar método de pagamento
$payload  = new Transaction();
//Ambiente de homologação
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Url de callback
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Código da forma de pagamento
// 1 - Boleto bancário
// 2 - Cartão de crédito
// 3 - Criptomoeda
// 4 - Cartão de débito 
$payload->setPaymentMethod("2");

$CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2019", "241", 2);

//Objeto de pagamento - para boleto bancário
$payload->setPaymentObject($CreditCard);

$Products = array();

 $payloadProduct = new Product();
 $payloadProduct->setCode(1);
 $payloadProduct->setDescription("Produto 1");
 $payloadProduct->setUnitPrice(2.50);
 $payloadProduct->setQuantity(2);

 array_push($Products, $payloadProduct);

$payload->setProducts($Products);

//Customer
$Customer =  new Customer();
$Customer->setName("Teste Cliente");
$Customer->setIdentity("01579286000174");
$Customer->setEmail("Teste@Teste.com.br");
$Customer->setPhone("51999999999");

$Customer->Address = new Address();
$Customer->Address->setZipCode("90620000");
$Customer->Address->setStreet("Avenida Princesa Isabel");
$Customer->Address->setNumber("828");
$Customer->Address->setComplement("Lado B");
$Customer->Address->setDistrict("Santana");
$Customer->Address->setStateInitials("RS");
$Customer->Address->setCityName("Porto Alegre");
$Customer->Address->setCountryName("Brasil");


$payload->setCustomer($Customer);

$response  = PaymentRequest::CreatePayment($payload);

// ...
```

### Criando uma venda com Criptomoedas

```php
<?php

require_once 'vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

//Inicializar método de pagamento
$payload  = new Transaction();
//Ambiente de homologação
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Url de callback
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Código da forma de pagamento
// 1 - Boleto bancário
// 2 - Cartão de crédito
// 3 - Criptomoeda
// 4 - Cartão de débito 
$payload->setPaymentMethod("3");

$CryptoCoin = new Cryptocoin("LTC");

//Objeto de pagamento - para Criptomoedas
$payload->setPaymentObject($CryptoCoin);

$Products = array();

$Products = array();

 $payloadProduct = new Product();
 $payloadProduct->setCode(1);
 $payloadProduct->setDescription("Produto 1");
 $payloadProduct->setUnitPrice(2.50);
 $payloadProduct->setQuantity(2);

 array_push($Products, $payloadProduct);

$payload->setProducts($Products);

//Customer
$Customer =  new Customer();
$Customer->setName("Teste Cliente");
$Customer->setIdentity("01579286000174");
$Customer->setEmail("Teste@Teste.com.br");
$Customer->setPhone("51999999999");

$Customer->Address = new Address();
$Customer->Address->setZipCode("90620000");
$Customer->Address->setStreet("Avenida Princesa Isabel");
$Customer->Address->setNumber("828");
$Customer->Address->setComplement("Lado B");
$Customer->Address->setDistrict("Santana");
$Customer->Address->setStateInitials("RS");
$Customer->Address->setCityName("Porto Alegre");
$Customer->Address->setCountryName("Brasil");


$payload->setCustomer($Customer);

$response  = PaymentRequest::CreatePayment($payload);

// ...
```

### Criando uma venda com cartão de débito

```php
<?php

require_once 'vendor/autoload.php';

use Safe2Pay\API\PaymentRequest;
use Safe2Pay\Models\Payment\DebitCard;
use Safe2Pay\Models\Transactions\Transaction;
use Safe2Pay\Models\General\Customer;
use Safe2Pay\Models\General\Product;
use Safe2Pay\Models\General\Address;

use Safe2Pay\ Models\Core\Config as Enviroment;
$enviroment = new Enviroment();
$enviroment->setAPIKEY('x-api-key');

//Inicializar método de pagamento
$payload  = new Transaction();
//Ambiente de homologação
$payload->setIsSandbox(true);
//Descrição geral 
$payload->setApplication("Teste SDK PHP");
//Nome do vendedor
$payload->setVendor("João da Silva");
//Url de callback
$payload->setCallbackUrl("https://callbacks.exemplo.com.br/api/Notify");

//Código da forma de pagamento
// 1 - Boleto bancário
// 2 - Cartão de crédito
// 3 - Criptomoeda
// 4 - Cartão de débito 
$payload->setPaymentMethod("4");

$CreditCard = new DebitCard("João da Silva", "4024007153763191", "12/2019", "241");

//Objeto de pagamento - para boleto bancário
$payload->setPaymentObject($CreditCard);

$Products = array();

$Products = array();

 $payloadProduct = new Product();
 $payloadProduct->setCode(1);
 $payloadProduct->setDescription("Produto 1");
 $payloadProduct->setUnitPrice(2.50);
 $payloadProduct->setQuantity(2);

 array_push($Products, $payloadProduct);

$payload->setProducts($Products);

//Customer
$Customer =  new Customer();
$Customer->setName("Teste Cliente");
$Customer->setIdentity("01579286000174");
$Customer->setEmail("Teste@Teste.com.br");
$Customer->setPhone("51999999999");

$Customer->Address = new Address();
$Customer->Address->setZipCode("90620000");
$Customer->Address->setStreet("Avenida Princesa Isabel");
$Customer->Address->setNumber("828");
$Customer->Address->setComplement("Lado B");
$Customer->Address->setDistrict("Santana");
$Customer->Address->setStateInitials("RS");
$Customer->Address->setCityName("Porto Alegre");
$Customer->Address->setCountryName("Brasil");


$payload->setCustomer($Customer);

$response  = PaymentRequest::CreatePayment($payload);

// ...
```

### Tokenizando um cartão

```php
<?php

require_once 'vendor/autoload.php';

use Safe2Pay\Models\Payment\CreditCard;
use Safe2Pay\API\TokenizationRequest;

use Safe2Pay\Models\Core\Config as Enviroment;
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
        $CreditCard = new CreditCard("João da Silva", "4024007153763191", "12/2019", "241", null);
        //Realiza a tokenização e traz o retorno

        $response  = TokenizationRequest::Create($CreditCard);

        //...
   
    }
}

// ...
```

### Consultar transação

```php
<?php

require_once 'vendor/autoload.php';

use Safe2Pay\API\TransactionRequest;

use Safe2Pay\Models\Core\Config as Enviroment;
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
       
        $response =TransactionRequest::Get($Id);

        //...
    }
}

// ...
```

## Informações adicionais / Contato

Em caso de dúvidas, ficamos à disposição em nossos canais ou diretamente pelo e-mail integracao@safe2pay.com.br. 

Para mais informações acesse: https://safe2pay.com.br
