# SOS-CPS
Content publishing system

Basically I'm building a simple blogging application.

The app architecture is as follows:
Request -> Controller -> (Model) -> Controller -> View -> Response

First a client makes a request for a webpage. The controller validates
the request and, if necessary, invokes the model. The model either returns
the requested data, returns the data is unavailable, or throws an exception.
Logic flow then returns to the controller. The controller then invokes the
view and logic flows ends with a response being sent to the client.
