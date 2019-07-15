namespace Safe2Pay
{
    public class Split
    {
        public string Identity { get; set; }
        public bool IsPayTax { get; set; }
        public decimal Amount { get; set; }
        public EnumTaxType CodeTaxType { get; set; }
        public EnumReceiverType CodeReceiverType { get; set; }
    }
    
    public enum EnumTaxType
    {
        None = 0,
        Percentage = 1,
        Amount = 2
    }

    public enum EnumReceiverType
    {
        NONE = 0,
        MERCHANT = 1,
        SUBACCOUNT = 2
    }
}