using System;
using Newtonsoft.Json;

namespace Safe2Pay
{
    public class DebitAccountReturn
    {
        [JsonProperty(PropertyName = "success")]
        public bool IsSuccess { get; set; }

        [JsonProperty(PropertyName = "error")] public string ErrorMessage { get; set; }

        [JsonProperty(PropertyName = "payment")]
        public Payment Payment { get; set; }
    }

    public class Payment
    {
        [JsonProperty(PropertyName = "code")] public string Code { get; set; }

        [JsonProperty(PropertyName = "due_date")]
        public DateTime DueDate { get; set; }

        [JsonProperty(PropertyName = "accountDebitTransaction")]
        public AccountDebitTransaction AccountDebitTransaction { get; set; }
    }

    public class AccountDebitTransaction
    {
        [JsonProperty(PropertyName = "id")] public int Id { get; set; }

        [JsonProperty(PropertyName = "payment_id")]
        public int PaymentId { get; set; }

        [JsonProperty(PropertyName = "status")]
        public string Status { get; set; }

        [JsonProperty(PropertyName = "transaction_status")]
        public string TransactionStatus { get; set; }

        [JsonProperty(PropertyName = "transaction_status_msg")]
        public string TransactionStatusMessage { get; set; }

        [JsonProperty(PropertyName = "transaction_status_at")]
        public DateTime? TransactionStatusDate { get; set; }

        [JsonProperty(PropertyName = "transaction_debit_at")]
        public DateTime? TransactionDebitDate { get; set; }

        [JsonProperty(PropertyName = "created_at")]
        public DateTime? CreatedDate { get; set; }

        [JsonProperty(PropertyName = "updated_at")]
        public DateTime? UpdatedDate { get; set; }
    }
}