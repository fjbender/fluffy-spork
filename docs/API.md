## Our API

We offer some kind of API to integrate with our services and trigger payments. See the examples below.

###Initiate a transaction

Just send the data to our API endpoint, we'll take care of the rest:

```
http://endpoint.cloud/?request=pay&amount=1000&returnto=http%3A%2F%2Fmyshop.invalid%2F%3Faction%3Dpaid%26order%3D12345
```

We'll send the customer back to your `returnto` endpoint, no questions asked. Quick and easy payment.