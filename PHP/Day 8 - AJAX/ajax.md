# Principle
AJAX: Asynchronous Javascript And XML
A classic web application transmits data from the server to the client by so-called "synchronous" requests
For example, the client accesses a page by its URL, and then receives a response from the server.
Or, the client sends a form, which is received by the server, in POST, then the server sends the client a reply.
With the AJAX mechanism, you can, for example, make sure that the form is submitted and sent to the server, without the page being reloaded.

In order for the javascript file, on the client side, to communicate with the server, an XMLHttpRequest object is used.
This object is used to launch HTTP requests from the script, and manipulate the server response, all in the background, without reloading the page.

To work with the XMLHttpRequest object:
- Define an instance of the object
- Create an asynchronous call to a page on the server side, and define a callback function that will be called once the response has been received
- Write the callback function, which will process the information received from the server
- Manipulate the DOM to use this new data.

The applications are multiple: text field with auto-completion from data from the server, dynamic menus in an application, chat, etc.

# Define an instance of XMLHttpRequest
    `var xhr = new XMLHttpRequest();`
Problem : For Internet Explorer <=6, XHR is not available.
Therefor, we'll use this syntax :
    `var xhr = new ActiveXObject('Msxml2.XMLHTTP');`, or
    `var xhr = new ActiveXObject('Microsoft.XMLHTTP');`

To handle these 3 different cases, we can use this function :

```
<script type="text/javascript">
function getXHR()
{
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(exception) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest(); 
        }
    } else {
        alert("Your browser does not support XMLHTTP Request...!");
    }
}
</script>
```

# Asynchronous request
We can use the method 'open()' to open/prepare the HTTP request :

```
<script type="text/javascript">
    xhr.open("GET", "file_on_server.php", true); // Sending method, file to reach, true to specify it's asynchronous
</script>
```

We can now send the request :
```
<script type="text/javascript">
    // ...
    xhr.send();
</script>
```

Before sending, we need to specify a callback function :

```
<script type="text/javascript">
    // ...
    xhr.onreasystatechange = function() {
        if(xhr.readyState == 4) { // If respons is "DONE"
            document.getElementById('my-container').innerHTML = xhr.responseText;
            // We write in the element #my-container the response of the server
        }
    }
</script>
```

# JQuery
## Basic
JQuery allows to use XMLHttpRequest object in a easier way !
Here how you can do with JQuery : 

```
<script type="text/javascript">
$.ajax({
    method: "GET",
    url: "file_on_server.php",
}).done(function(response) {
    $('#container').html(response);
});
</script>
```

## Parameters
We can send parameters(data) with the request :

```
<script type="text/javascript">
$.ajax({
    method: "GET",
    url: "file_on_server.php",
    data: {
        param1: "Foo",
        param2: "Bar"
    }
}).done(function(response) {
    $('#container').html(response);
});
</script>
```

Here the request is like saying : `file_on_server.php?param1=Foo&param2=Bar`
We can use GET or POST

## Returned data
You can specify which type of data should be returned by the server.

```
<script type="text/javascript">
$.ajax({
    method: "GET",
    url: "file_on_server.php",
    dataType: "html" // Ici, on attend du HTML
}).done(function(response) {
    $('#container').html(response);
});
</script>
```

Example: get the HTML content of an article :
```
<script type="text/javascript">
$.ajax({
    method: "GET",
    url: "get-article.php",
    data: {
        articleId: 42
    }
    dataType: "html"
}).done(function(response) {
    $('#article').html(response);
});
</script>
```

Some valid type :
- html
- script (load JS file)
- json
- jsonp (cross domain)

Example with JSON
```
function loadMessages()
{
    $.ajax({
        method: "GET",
        url: "get-messages.php",
        dataType: "json",
    }).done(function(response) {
        response.forEach(function(message, index){
            console.log(message);
        });
    });
}
```

On server side, page `get-messages.php` looks like :
```
<?php

    $messages = [
        0 => 'L\'éléphant du jardin des plantes s\'appelle Charles',
        1 => 'Gabrielle vous envoie ses amitiés',
        2 => 'Saint Liguori fonda Naples',
    ];

    echo json_encode($messages);
```

- En PHP, `json_encode()` transforme un tableau en JSON
- En JS, `response` est reconnu comme du JSON et on peut directement travailler dessus, comme un tableau classique

## Soumission de formulaire
Il est possible de soumettre un formulaire entier, grâce à `serialize()`
```
$('form').submit(function(e){
    e.preventDefault();
    console.log($('form').serialize()); // Va afficher dans la console les données du formulaire
});
```

Dans une requête AJAX :
```
$.ajax({
    method: "POST",
    url: "post-message.php",
    data: $('form').serialize()
});
```

En PHP, on pourra accéder au tableau `$_POST` en parsant l'URL :
```
$data = [];
parse_str($_POST['formInputs'], $data);
```

`$data` contiendra les données du formulaire.

`$_POST['name']` => `$data['name']`