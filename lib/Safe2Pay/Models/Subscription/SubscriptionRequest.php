
<?php
include_once(__DIR__.'/../../Core/Config.php');
include_once(__DIR__.'/../General/Customer.php');


class SubscriptionRequest 
{
    public $Plan;
    public $IsSandbox;
    public $Customer;
    public $SubscriptionObject;

    public function getPlan()
    {
        return $this->Plan;
    }
    

    public function setPlan($Plan)
    {
        $this->Plan = $Plan;
    }

    public function getCustomer()
    {
        return $this->Customer;
    }

    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
    }

    public function getSubscriptionObject()
    {
        return $this->SubscriptionObject;
    }

    public function setSubscriptionObject($SubscriptionObject)
    {
        $this->SubscriptionObject = $SubscriptionObject;
    }

    public function __construct()
    {
        $this->Customer = new Customer();  
        $this->IsSandbox = Config :: getIsSandBox();
    }

    // public function JsonSerialize()
    // {
    //     return [
    //         'Plan' => getPlan(),
    //         'IsSandbox' => Config :: getIsSandBox(),
    //         // 'SubscriptionObject' => [
    //         //     "Bank"=> "341",
    //         //     "BankAccount"=> "1234",
    //         //     "BankAccountDigit"=> "",
    //         //     "BankAgency"=> "7894567",
    //         //     "BankAgencyDigit"=> "8"
    //         // ],
    //         'SubscriptionObject' => [
    //             "TokenCard" => "4d8sa65d87sa8a87a5454d8911a"
    //         ],
    //         'Customer' => [
    //             "Name" => $this->Customer->Name,
    //             "Identity" => $this->Customer->Identity,
    //             "Email" => $this->Customer->Email,
    //             'Address' => [
    //                 "ZipCode" => $this->Customer->Address->ZipCode,
    //                 "Street" => $this->Customer->Address->Street,
    //                 "Number" => $this->Customer->Address->Number,
    //                 "Complement" => $this->Customer->Address->Complement,
    //                 "District" => $this->Customer->Address->District,
    //                 "StateInitials" => $this->Customer->Address->ZipCode,
    //                 "CityName" => $this->Customer->Address->CityName,
    //                 "CountryName" => $this->Customer->Address->CountryName,
    //             ]
    //         ]
    //     ];
    // }
}

?>