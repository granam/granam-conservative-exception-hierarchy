###Origins
This hierarchy is clone of granam/exceptions-hierarchy, just with conservative "Exception" suffixes, Runtime = RuntimeException and Logic = LogicException.


_Philosophy of exception hierarchy is kind of *you need to know*._

It is important to know what happened. And it happens...

The system fails. Something exceptionable occurs.

Take extra care to get as much description of a problem as possible.

The good way how to achieve that is keep exceptions hierarchy clean and clear.

 - follow the project structure.
 - make a **root exception marker as an interface**.
 - include this interface in **every** exception you produce.
    - by that, anyone can catch exceptions from your project in his project. By single catch.
 - learn the difference between logic and runtime exception
    - logic exception should occurs if definitely there is an mistake in the application itself
        - that exception tells you: fix it, it is somewhere in the code
    - runtime exception is everything else of course
        - that means there is nothing to fix
    - is it so simple, with clean borders?
        - of course not
        - but you can catch all the logic exceptions into folder Bugs and runtime ones into BulletproofFailure

####In short
*Runtime exception* should occurs if something is wrong from **outside**.

*Logic exception* should occurs if something is wrong from **inside**.

###Example of use of Logic and Runtime exception

You built and eshop with API.

Your frontend application sends to API a request for new customer:

 - email: dontbotherme

That is not valid email for sure. The frontend check failed and now you are forced to handle that failure.

So lets throw some *Runtime* (like InvalidEmailFormat) exception somewhere inside your code.

Your API of course should catch all Runtime exceptions and returns 400 Bad Request (and descriptive error message).

In another case your application calculates price of an purchase, including discount coupon, volume discount, loyalty discount and... voala, the final price is negative!

That is fatal error for sure, originating inside your application. *Logic* exception (like FinalPriceZeroOrLesser) should be thrown.

The API of course catch that exception and turn it into response 500 Server error (and log that exception for asap fix!).
