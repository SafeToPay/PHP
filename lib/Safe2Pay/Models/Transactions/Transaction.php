namespace Safe2Pay
{
    public class Transaction<T> : Base where T : new()
    {
        public T PaymentObject { get; set; }
    }
}