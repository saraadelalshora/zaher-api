---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8080/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_de6fbcd6570f9efed6b933e5b4fbcb46 -->
## Display the installer welcome page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install" 
```

```javascript
const url = new URL("http://localhost:8080/install");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install`


<!-- END_de6fbcd6570f9efed6b933e5b4fbcb46 -->

<!-- START_34d1ce79b36d7f61cfe4aded56b1b082 -->
## Display the Environment menu page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/environment" 
```

```javascript
const url = new URL("http://localhost:8080/install/environment");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/environment`


<!-- END_34d1ce79b36d7f61cfe4aded56b1b082 -->

<!-- START_d591bc052c05812bd25a1d546aac3184 -->
## Display the Environment page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/environment/wizard" 
```

```javascript
const url = new URL("http://localhost:8080/install/environment/wizard");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/environment/wizard`


<!-- END_d591bc052c05812bd25a1d546aac3184 -->

<!-- START_aa9a0a690c5ff56e2d3d2bdfb9da134d -->
## Processes the newly saved environment configuration (Form Wizard).

> Example request:

```bash
curl -X POST "http://localhost:8080/install/environment/saveWizard" 
```

```javascript
const url = new URL("http://localhost:8080/install/environment/saveWizard");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST install/environment/saveWizard`


<!-- END_aa9a0a690c5ff56e2d3d2bdfb9da134d -->

<!-- START_cc96a146b7da140043ce0336c845dce6 -->
## Display the Environment page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/environment/classic" 
```

```javascript
const url = new URL("http://localhost:8080/install/environment/classic");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/environment/classic`


<!-- END_cc96a146b7da140043ce0336c845dce6 -->

<!-- START_1ca7cec731b54ab44550087a999bbe32 -->
## Processes the newly saved environment configuration (Classic).

> Example request:

```bash
curl -X POST "http://localhost:8080/install/environment/saveClassic" 
```

```javascript
const url = new URL("http://localhost:8080/install/environment/saveClassic");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST install/environment/saveClassic`


<!-- END_1ca7cec731b54ab44550087a999bbe32 -->

<!-- START_04a66ea9055b85530bd4e5e972af7fcb -->
## Display the requirements page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/requirements" 
```

```javascript
const url = new URL("http://localhost:8080/install/requirements");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/requirements`


<!-- END_04a66ea9055b85530bd4e5e972af7fcb -->

<!-- START_730c57164a7409af8227c4230c35bf78 -->
## Display the permissions check page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/permissions" 
```

```javascript
const url = new URL("http://localhost:8080/install/permissions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/permissions`


<!-- END_730c57164a7409af8227c4230c35bf78 -->

<!-- START_777443a083d9fd18aa414e15b8169fbc -->
## Migrate and seed the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/database" 
```

```javascript
const url = new URL("http://localhost:8080/install/database");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/database`


<!-- END_777443a083d9fd18aa414e15b8169fbc -->

<!-- START_0b504b7728dc7fdbe0bd9ea3ce750582 -->
## Update installed file and display finished view.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/install/final" 
```

```javascript
const url = new URL("http://localhost:8080/install/final");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET install/final`


<!-- END_0b504b7728dc7fdbe0bd9ea3ce750582 -->

<!-- START_6f2fe2f742d262b468bb116f2516f7e9 -->
## Update installed file and display finished view.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/update/final" 
```

```javascript
const url = new URL("http://localhost:8080/update/final");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET update/final`


<!-- END_6f2fe2f742d262b468bb116f2516f7e9 -->

<!-- START_20aea1d842a05c2ba3fcf1b63c8cc0f0 -->
## Display the updater overview page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/update/overview/1" 
```

```javascript
const url = new URL("http://localhost:8080/update/overview/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET update/overview/{version}`


<!-- END_20aea1d842a05c2ba3fcf1b63c8cc0f0 -->

<!-- START_617eb440443d12fa26761b00993d5353 -->
## Migrate and seed the database.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/update/database/1" 
```

```javascript
const url = new URL("http://localhost:8080/update/database/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET update/database/{version}`


<!-- END_617eb440443d12fa26761b00993d5353 -->

<!-- START_3ae98557063206f63c0b6f2723d519fd -->
## Display the updater welcome page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/update/1" 
```

```javascript
const url = new URL("http://localhost:8080/update/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET update/{version}`


<!-- END_3ae98557063206f63c0b6f2723d519fd -->

<!-- START_c6c5c00d6ac7f771f157dff4a2889b1a -->
## _debugbar/open
> Example request:

```bash
curl -X GET -G "http://localhost:8080/_debugbar/open" 
```

```javascript
const url = new URL("http://localhost:8080/_debugbar/open");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET _debugbar/open`


<!-- END_c6c5c00d6ac7f771f157dff4a2889b1a -->

<!-- START_7b167949c615f4a7e7b673f8d5fdaf59 -->
## Return Clockwork output

> Example request:

```bash
curl -X GET -G "http://localhost:8080/_debugbar/clockwork/1" 
```

```javascript
const url = new URL("http://localhost:8080/_debugbar/clockwork/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET _debugbar/clockwork/{id}`


<!-- END_7b167949c615f4a7e7b673f8d5fdaf59 -->

<!-- START_01a252c50bd17b20340dbc5a91cea4b7 -->
## _debugbar/telescope/{id}
> Example request:

```bash
curl -X GET -G "http://localhost:8080/_debugbar/telescope/1" 
```

```javascript
const url = new URL("http://localhost:8080/_debugbar/telescope/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET _debugbar/telescope/{id}`


<!-- END_01a252c50bd17b20340dbc5a91cea4b7 -->

<!-- START_5f8a640000f5db43332951f0d77378c4 -->
## Return the stylesheets for the Debugbar

> Example request:

```bash
curl -X GET -G "http://localhost:8080/_debugbar/assets/stylesheets" 
```

```javascript
const url = new URL("http://localhost:8080/_debugbar/assets/stylesheets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET _debugbar/assets/stylesheets`


<!-- END_5f8a640000f5db43332951f0d77378c4 -->

<!-- START_db7a887cf930ce3c638a8708fd1a75ee -->
## Return the javascript for the Debugbar

> Example request:

```bash
curl -X GET -G "http://localhost:8080/_debugbar/assets/javascript" 
```

```javascript
const url = new URL("http://localhost:8080/_debugbar/assets/javascript");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET _debugbar/assets/javascript`


<!-- END_db7a887cf930ce3c638a8708fd1a75ee -->

<!-- START_0973671c4f56e7409202dc85c868d442 -->
## Forget a cache key

> Example request:

```bash
curl -X DELETE "http://localhost:8080/_debugbar/cache/1/1" 
```

```javascript
const url = new URL("http://localhost:8080/_debugbar/cache/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE _debugbar/cache/{key}/{tags?}`


<!-- END_0973671c4f56e7409202dc85c868d442 -->

<!-- START_8f84a574765c547365e6dc7ddbfe763a -->
## api/driver/login
> Example request:

```bash
curl -X POST "http://localhost:8080/api/driver/login" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/driver/login`


<!-- END_8f84a574765c547365e6dc7ddbfe763a -->

<!-- START_758c5ce4b6de7437277c2d4b3b90b245 -->
## Create a new user instance after a valid registration.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/driver/register" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/driver/register`


<!-- END_758c5ce4b6de7437277c2d4b3b90b245 -->

<!-- START_69a60b3237efbb461eecd74c8cb3626a -->
## api/driver/send_reset_link_email
> Example request:

```bash
curl -X POST "http://localhost:8080/api/driver/send_reset_link_email" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/send_reset_link_email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/driver/send_reset_link_email`


<!-- END_69a60b3237efbb461eecd74c8cb3626a -->

<!-- START_a6d3e38c0a979fa1ad6a611ad3109c6d -->
## api/driver/user
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/user" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/driver/user`


<!-- END_a6d3e38c0a979fa1ad6a611ad3109c6d -->

<!-- START_5d2da63403a7a6cd6c7528fbe827f8f4 -->
## api/driver/logout
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/logout" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/driver/logout`


<!-- END_5d2da63403a7a6cd6c7528fbe827f8f4 -->

<!-- START_d400d7dfcba4bb9e68ee47ab2b8b6069 -->
## api/driver/settings
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/settings" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/driver/settings`


<!-- END_d400d7dfcba4bb9e68ee47ab2b8b6069 -->

<!-- START_bf375da300a9f5e18e0c22152c6a6b26 -->
## api/manager/login
> Example request:

```bash
curl -X POST "http://localhost:8080/api/manager/login" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/manager/login`


<!-- END_bf375da300a9f5e18e0c22152c6a6b26 -->

<!-- START_977b6a416e7cb0795b10c7f75d7318d3 -->
## Create a new user instance after a valid registration.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/manager/register" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/manager/register`


<!-- END_977b6a416e7cb0795b10c7f75d7318d3 -->

<!-- START_8482f664c5d6ad0316b44cc3aa01f326 -->
## api/manager/send_reset_link_email
> Example request:

```bash
curl -X POST "http://localhost:8080/api/manager/send_reset_link_email" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/send_reset_link_email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/manager/send_reset_link_email`


<!-- END_8482f664c5d6ad0316b44cc3aa01f326 -->

<!-- START_15896eda93e0ea379d016b5d0230ec88 -->
## api/manager/user
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/user" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/manager/user`


<!-- END_15896eda93e0ea379d016b5d0230ec88 -->

<!-- START_8a80d49da234ad500fd596e6711ff2f1 -->
## api/manager/logout
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/logout" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/manager/logout`


<!-- END_8a80d49da234ad500fd596e6711ff2f1 -->

<!-- START_49246c20b4763496098e789162867e44 -->
## api/manager/settings
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/settings" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/manager/settings`


<!-- END_49246c20b4763496098e789162867e44 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login
> Example request:

```bash
curl -X POST "http://localhost:8080/api/login" 
```

```javascript
const url = new URL("http://localhost:8080/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Create a new user instance after a valid registration.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/register" 
```

```javascript
const url = new URL("http://localhost:8080/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_b51c3047b626b6299dbf4c37f3db7566 -->
## api/send_reset_link_email
> Example request:

```bash
curl -X POST "http://localhost:8080/api/send_reset_link_email" 
```

```javascript
const url = new URL("http://localhost:8080/api/send_reset_link_email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/send_reset_link_email`


<!-- END_b51c3047b626b6299dbf4c37f3db7566 -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## api/user
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/user" 
```

```javascript
const url = new URL("http://localhost:8080/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## api/logout
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/logout" 
```

```javascript
const url = new URL("http://localhost:8080/api/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/logout`


<!-- END_00e7e21641f05de650dbe13f242c6f2c -->

<!-- START_10633908636252dc838d3a5bd392f07c -->
## api/settings
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/settings" 
```

```javascript
const url = new URL("http://localhost:8080/api/settings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/settings`


<!-- END_10633908636252dc838d3a5bd392f07c -->

<!-- START_5ad229a3f4ddbaf4f3333b1eb7f7e890 -->
## Display a listing of the Field.

GET|HEAD /fields

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/fields" 
```

```javascript
const url = new URL("http://localhost:8080/api/fields");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/fields`


<!-- END_5ad229a3f4ddbaf4f3333b1eb7f7e890 -->

<!-- START_ae8a8fac20391b973ecfbf8c9c92729b -->
## Display the specified Field.

GET|HEAD /fields/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/fields/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/fields/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Field not found"
}
```

### HTTP Request
`GET api/fields/{field}`


<!-- END_ae8a8fac20391b973ecfbf8c9c92729b -->

<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Display a listing of the Category.

GET|HEAD /categories

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/categories" 
```

```javascript
const url = new URL("http://localhost:8080/api/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

<!-- START_34925c1e31e7ecc53f8f52c8b1e91d44 -->
## Display the specified Category.

GET|HEAD /categories/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/categories/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Category not found"
}
```

### HTTP Request
`GET api/categories/{category}`


<!-- END_34925c1e31e7ecc53f8f52c8b1e91d44 -->

<!-- START_f632255cbd9347e368643fb9750bd9cc -->
## Display a listing of the Market.

GET|HEAD /markets

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/markets" 
```

```javascript
const url = new URL("http://localhost:8080/api/markets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/markets`


<!-- END_f632255cbd9347e368643fb9750bd9cc -->

<!-- START_ee05adfb30a72ed9a72a5ce0d60a243f -->
## Store a newly created Market in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/markets" 
```

```javascript
const url = new URL("http://localhost:8080/api/markets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/markets`


<!-- END_ee05adfb30a72ed9a72a5ce0d60a243f -->

<!-- START_e1843b92b3e626b2141befc05e54dde1 -->
## Display the specified Market.

GET|HEAD /markets/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Market not found"
}
```

### HTTP Request
`GET api/markets/{market}`


<!-- END_e1843b92b3e626b2141befc05e54dde1 -->

<!-- START_de6d3a6c8831e1dd1d341473499d4725 -->
## Update the specified Market in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/markets/{market}`

`PATCH api/markets/{market}`


<!-- END_de6d3a6c8831e1dd1d341473499d4725 -->

<!-- START_6d32b29ac4e4d60e2ea95c7839bed5b6 -->
## Remove the specified Market from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/markets/{market}`


<!-- END_6d32b29ac4e4d60e2ea95c7839bed5b6 -->

<!-- START_a09c9e9ea1f70cabcbac0ab1b7adbe33 -->
## Display a listing of the FaqCategory.

GET|HEAD /faqCategories

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/faq_categories" 
```

```javascript
const url = new URL("http://localhost:8080/api/faq_categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/faq_categories`


<!-- END_a09c9e9ea1f70cabcbac0ab1b7adbe33 -->

<!-- START_6b5dd073270d0dd2bcf5c6eef7ecd51d -->
## Display the specified FaqCategory.

GET|HEAD /faqCategories/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/faq_categories/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/faq_categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Faq Category not found"
}
```

### HTTP Request
`GET api/faq_categories/{faq_category}`


<!-- END_6b5dd073270d0dd2bcf5c6eef7ecd51d -->

<!-- START_5c12eff4e00a85b5577a440ef9aa127f -->
## Display a listing of the Product.

GET|HEAD /products/categories

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/products/categories" 
```

```javascript
const url = new URL("http://localhost:8080/api/products/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/products/categories`


<!-- END_5c12eff4e00a85b5577a440ef9aa127f -->

<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## Display a listing of the Product.

GET|HEAD /products

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/products" 
```

```javascript
const url = new URL("http://localhost:8080/api/products");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/products`


<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_05b4383f00fd57c4828a831e7057e920 -->
## Store a newly created Product in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/products" 
```

```javascript
const url = new URL("http://localhost:8080/api/products");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/products`


<!-- END_05b4383f00fd57c4828a831e7057e920 -->

<!-- START_a285e63bc2d1a5b9428ae9aed745c779 -->
## Display the specified Product.

GET|HEAD /products/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/products/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/products/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Product not found"
}
```

### HTTP Request
`GET api/products/{product}`


<!-- END_a285e63bc2d1a5b9428ae9aed745c779 -->

<!-- START_b7842ce7893c09eb3c53713f82c2e12d -->
## Update the specified Product in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/products/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/products/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/products/{product}`

`PATCH api/products/{product}`


<!-- END_b7842ce7893c09eb3c53713f82c2e12d -->

<!-- START_1d809ca5e8b10fa7fdc75d04506a55ea -->
## Remove the specified Product from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/products/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/products/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/products/{product}`


<!-- END_1d809ca5e8b10fa7fdc75d04506a55ea -->

<!-- START_d0b104492af76ec0a8ad9231c0c44fd3 -->
## Display a listing of the Gallery.

GET|HEAD /galleries

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/galleries" 
```

```javascript
const url = new URL("http://localhost:8080/api/galleries");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/galleries`


<!-- END_d0b104492af76ec0a8ad9231c0c44fd3 -->

<!-- START_f8f75dce2d7e353e9b771e2505d6a5aa -->
## Display the specified Gallery.

GET|HEAD /galleries/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/galleries/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/galleries/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Gallery not found"
}
```

### HTTP Request
`GET api/galleries/{gallery}`


<!-- END_f8f75dce2d7e353e9b771e2505d6a5aa -->

<!-- START_e6dbc46b91f2dd442b6c5cf5257d23b3 -->
## Display a listing of the ProductReview.

GET|HEAD /productReviews

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/product_reviews" 
```

```javascript
const url = new URL("http://localhost:8080/api/product_reviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/product_reviews`


<!-- END_e6dbc46b91f2dd442b6c5cf5257d23b3 -->

<!-- START_0ba417bda23a9d6dcce52753cdb0d369 -->
## Store a newly created ProductReview in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/product_reviews" 
```

```javascript
const url = new URL("http://localhost:8080/api/product_reviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/product_reviews`


<!-- END_0ba417bda23a9d6dcce52753cdb0d369 -->

<!-- START_98b899a5bc455a433b48bd9aa8f639d7 -->
## Display the specified ProductReview.

GET|HEAD /productReviews/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/product_reviews/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/product_reviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Product Review not found"
}
```

### HTTP Request
`GET api/product_reviews/{product_review}`


<!-- END_98b899a5bc455a433b48bd9aa8f639d7 -->

<!-- START_b8171a4fd016c86f64f8106d911dabd2 -->
## Display a listing of the Faq.

GET|HEAD /faqs

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/faqs" 
```

```javascript
const url = new URL("http://localhost:8080/api/faqs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/faqs`


<!-- END_b8171a4fd016c86f64f8106d911dabd2 -->

<!-- START_139501a554143ddf1d08122c6043e431 -->
## Display the specified Faq.

GET|HEAD /faqs/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/faqs/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/faqs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Faq not found"
}
```

### HTTP Request
`GET api/faqs/{faq}`


<!-- END_139501a554143ddf1d08122c6043e431 -->

<!-- START_406cc5cc7f60b0a3f858051b181e5bae -->
## Display a listing of the MarketReview.

GET|HEAD /marketReviews

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/market_reviews" 
```

```javascript
const url = new URL("http://localhost:8080/api/market_reviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/market_reviews`


<!-- END_406cc5cc7f60b0a3f858051b181e5bae -->

<!-- START_ab09db1ca49112f9009a5ef412326f7f -->
## Store a newly created MarketReview in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/market_reviews" 
```

```javascript
const url = new URL("http://localhost:8080/api/market_reviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/market_reviews`


<!-- END_ab09db1ca49112f9009a5ef412326f7f -->

<!-- START_5c81943fa71c8391f9fc68535aa7d40e -->
## Display the specified MarketReview.

GET|HEAD /marketReviews/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/market_reviews/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/market_reviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Market Review not found"
}
```

### HTTP Request
`GET api/market_reviews/{market_review}`


<!-- END_5c81943fa71c8391f9fc68535aa7d40e -->

<!-- START_aa2087c88a0544b7da514dfdd673acc0 -->
## Display a listing of the Currency.

GET|HEAD /currencies

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/currencies" 
```

```javascript
const url = new URL("http://localhost:8080/api/currencies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/currencies`


<!-- END_aa2087c88a0544b7da514dfdd673acc0 -->

<!-- START_3a3de8519134b961245b00843c83314c -->
## Store a newly created Currency in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/currencies" 
```

```javascript
const url = new URL("http://localhost:8080/api/currencies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/currencies`


<!-- END_3a3de8519134b961245b00843c83314c -->

<!-- START_dbc92b87f08648e5fc649f6677876ac0 -->
## Display the specified Currency.

GET|HEAD /currencies/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/currencies/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/currencies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Currency not found"
}
```

### HTTP Request
`GET api/currencies/{currency}`


<!-- END_dbc92b87f08648e5fc649f6677876ac0 -->

<!-- START_c6971b0296ea1ec27eff9ccf57dd7cac -->
## Update the specified Currency in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/currencies/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/currencies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/currencies/{currency}`

`PATCH api/currencies/{currency}`


<!-- END_c6971b0296ea1ec27eff9ccf57dd7cac -->

<!-- START_c2a506528fd96c1a820f64892ce7068f -->
## Remove the specified Currency from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/currencies/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/currencies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/currencies/{currency}`


<!-- END_c2a506528fd96c1a820f64892ce7068f -->

<!-- START_f313dcae154669e2499ecd43c8f31de3 -->
## Display a listing of the Slide.

GET|HEAD /slides

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/slides" 
```

```javascript
const url = new URL("http://localhost:8080/api/slides");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/slides`


<!-- END_f313dcae154669e2499ecd43c8f31de3 -->

<!-- START_2149460f9f89fbd57a346f84c7c6be47 -->
## Display a listing of the OptionGroup.

GET|HEAD /optionGroups

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/option_groups" 
```

```javascript
const url = new URL("http://localhost:8080/api/option_groups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/option_groups`


<!-- END_2149460f9f89fbd57a346f84c7c6be47 -->

<!-- START_5b16536e75e80965794d657fe1f8d819 -->
## Display the specified OptionGroup.

GET|HEAD /optionGroups/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/option_groups/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/option_groups/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Option Group not found"
}
```

### HTTP Request
`GET api/option_groups/{option_group}`


<!-- END_5b16536e75e80965794d657fe1f8d819 -->

<!-- START_6123c5d8c5d6161e58948ec29f97cd24 -->
## Display a listing of the Option.

GET|HEAD /options

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/options" 
```

```javascript
const url = new URL("http://localhost:8080/api/options");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET api/options`


<!-- END_6123c5d8c5d6161e58948ec29f97cd24 -->

<!-- START_85f2abdc69192cf9df9d65ed6dad45d3 -->
## Display the specified Option.

GET|HEAD /options/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/options/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/options/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "success": false,
    "message": "Option not found"
}
```

### HTTP Request
`GET api/options/{option}`


<!-- END_85f2abdc69192cf9df9d65ed6dad45d3 -->

<!-- START_0c736370d481d78592a5079e0f4a71af -->
## Display a listing of the Order.

GET|HEAD /orders

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/orders" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/orders`


<!-- END_0c736370d481d78592a5079e0f4a71af -->

<!-- START_7c0608d83f99c1f0c8985094847d5bb0 -->
## Store a newly created Order in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/driver/orders" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/driver/orders`


<!-- END_7c0608d83f99c1f0c8985094847d5bb0 -->

<!-- START_16cee1691530eb9f4ac778f9f0d9f58d -->
## Display the specified Order.

GET|HEAD /orders/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/orders/{order}`


<!-- END_16cee1691530eb9f4ac778f9f0d9f58d -->

<!-- START_d33594c95998d20f9e3d6cc0b58b0830 -->
## Update the specified Order in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/driver/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/driver/orders/{order}`

`PATCH api/driver/orders/{order}`


<!-- END_d33594c95998d20f9e3d6cc0b58b0830 -->

<!-- START_2ee5cff099bbd27fa08b193e2a258b32 -->
## Display a listing of the Notification.

GET|HEAD /notifications

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/notifications" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/notifications");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/notifications`


<!-- END_2ee5cff099bbd27fa08b193e2a258b32 -->

<!-- START_5d71db3b931d700b373423f7c897d0d3 -->
## Display the specified Notification.

GET|HEAD /notifications/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/notifications/{notification}`


<!-- END_5d71db3b931d700b373423f7c897d0d3 -->

<!-- START_b51bffe7c993a9418d4eaf6e6297dbad -->
## Update the specified Notification in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/driver/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/driver/notifications/{notification}`

`PATCH api/driver/notifications/{notification}`


<!-- END_b51bffe7c993a9418d4eaf6e6297dbad -->

<!-- START_1cabf88870704fde12a6e6cc64f96eff -->
## Remove the specified Favorite from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/driver/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/driver/notifications/{notification}`


<!-- END_1cabf88870704fde12a6e6cc64f96eff -->

<!-- START_6ba6b972bb2a107fc9991d9feda57500 -->
## Update the specified User in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/driver/users/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/driver/users/{id}`


<!-- END_6ba6b972bb2a107fc9991d9feda57500 -->

<!-- START_987eaffa426e9257a440c2978f431aa1 -->
## Display a listing of the FaqCategory.

GET|HEAD /faqCategories

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/faq_categories" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/faq_categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/faq_categories`


<!-- END_987eaffa426e9257a440c2978f431aa1 -->

<!-- START_8ff77d3e735197d5d54d58b9d4798b93 -->
## Display the specified FaqCategory.

GET|HEAD /faqCategories/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/faq_categories/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/faq_categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/faq_categories/{faq_category}`


<!-- END_8ff77d3e735197d5d54d58b9d4798b93 -->

<!-- START_dfa9a82cf6e194f50c3bd797ba7936ad -->
## Display a listing of the Faq.

GET|HEAD /faqs

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/faqs" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/faqs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/faqs`


<!-- END_dfa9a82cf6e194f50c3bd797ba7936ad -->

<!-- START_66fd94afd1c24d1d9aa6c879cb643fd8 -->
## Display the specified Faq.

GET|HEAD /faqs/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driver/faqs/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driver/faqs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/driver/faqs/{faq}`


<!-- END_66fd94afd1c24d1d9aa6c879cb643fd8 -->

<!-- START_bbf8a610315812896abea059f6643281 -->
## Update the specified User in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/manager/users/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/manager/users/{id}`


<!-- END_bbf8a610315812896abea059f6643281 -->

<!-- START_459f25b638ebb983d3e323859413b043 -->
## Display a listing of the Drivers.

GET|HEAD /markets

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/users/drivers_of_market/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/users/drivers_of_market/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/manager/users/drivers_of_market/{id}`


<!-- END_459f25b638ebb983d3e323859413b043 -->

<!-- START_bc048813b107f49147a1500a852ad912 -->
## Display a listing of the Faq.

GET|HEAD /faqs

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/dashboard/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/dashboard/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/manager/dashboard/{id}`


<!-- END_bc048813b107f49147a1500a852ad912 -->

<!-- START_829ad141119ae6a938956bee2fd727de -->
## Display a listing of the Market.

GET|HEAD /markets

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/markets" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/markets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/manager/markets`


<!-- END_829ad141119ae6a938956bee2fd727de -->

<!-- START_cad1dce98677c965dd6965c74a8a1504 -->
## Store a newly created Market in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/manager/markets" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/markets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/manager/markets`


<!-- END_cad1dce98677c965dd6965c74a8a1504 -->

<!-- START_d08fee9d32baf28ddd92acc92dd06e95 -->
## Display the specified Market.

GET|HEAD /markets/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/manager/markets/{market}`


<!-- END_d08fee9d32baf28ddd92acc92dd06e95 -->

<!-- START_91a50cae605ce902c08ed08a2116873d -->
## Update the specified Market in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/manager/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/manager/markets/{market}`

`PATCH api/manager/markets/{market}`


<!-- END_91a50cae605ce902c08ed08a2116873d -->

<!-- START_6bc7c2c76abb9a836e4c1c509ac73758 -->
## Remove the specified Market from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/manager/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/manager/markets/{market}`


<!-- END_6bc7c2c76abb9a836e4c1c509ac73758 -->

<!-- START_e96e0ee2332e7d0736c65ca5f2873137 -->
## Display a listing of the Notification.

GET|HEAD /notifications

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/notifications" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/notifications");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/manager/notifications`


<!-- END_e96e0ee2332e7d0736c65ca5f2873137 -->

<!-- START_93939667bfea57dc1c5b60e5dd9c42fe -->
## Display the specified Notification.

GET|HEAD /notifications/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/manager/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/manager/notifications/{notification}`


<!-- END_93939667bfea57dc1c5b60e5dd9c42fe -->

<!-- START_6e76b324bbf1fa23b017e1e236723406 -->
## Update the specified Notification in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/manager/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/manager/notifications/{notification}`

`PATCH api/manager/notifications/{notification}`


<!-- END_6e76b324bbf1fa23b017e1e236723406 -->

<!-- START_4c40af26a20c7d3e9fcd72e4c2967a65 -->
## Remove the specified Favorite from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/manager/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/manager/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/manager/notifications/{notification}`


<!-- END_4c40af26a20c7d3e9fcd72e4c2967a65 -->

<!-- START_4b0d0a6312a175fab4c6aa05b8931502 -->
## Update the specified User in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/users/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users/{id}`


<!-- END_4b0d0a6312a175fab4c6aa05b8931502 -->

<!-- START_988ca824aa52d421841d7d9bf1bcdd68 -->
## Display a listing of the OrderStatus.

GET|HEAD /orderStatuses

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/order_statuses" 
```

```javascript
const url = new URL("http://localhost:8080/api/order_statuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/order_statuses`


<!-- END_988ca824aa52d421841d7d9bf1bcdd68 -->

<!-- START_ea6fe02e7cb65415418cb75dec01b3a9 -->
## Display the specified OrderStatus.

GET|HEAD /orderStatuses/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/order_statuses/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/order_statuses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/order_statuses/{order_status}`


<!-- END_ea6fe02e7cb65415418cb75dec01b3a9 -->

<!-- START_33afb25425ee96ea0f0e6c1d4c7284e7 -->
## api/payments/byMonth
> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/payments/byMonth" 
```

```javascript
const url = new URL("http://localhost:8080/api/payments/byMonth");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/payments/byMonth`


<!-- END_33afb25425ee96ea0f0e6c1d4c7284e7 -->

<!-- START_d6c74f99b225e5f2201ef212b86d2214 -->
## Display a listing of the Payment.

GET|HEAD /payments

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/payments" 
```

```javascript
const url = new URL("http://localhost:8080/api/payments");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/payments`


<!-- END_d6c74f99b225e5f2201ef212b86d2214 -->

<!-- START_98d6c912df811e364e7bb7907bffd40d -->
## Display the specified Payment.

GET|HEAD /payments/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/payments/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/payments/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/payments/{payment}`


<!-- END_98d6c912df811e364e7bb7907bffd40d -->

<!-- START_1695ad65cda44f2cbb51259fd08046cb -->
## Store a newly created Favorite in storage.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/favorites/exist" 
```

```javascript
const url = new URL("http://localhost:8080/api/favorites/exist");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/favorites/exist`


<!-- END_1695ad65cda44f2cbb51259fd08046cb -->

<!-- START_5ca940b94da038e53d0f51ca143d9895 -->
## Display a listing of the Favorite.

GET|HEAD /favorites

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/favorites" 
```

```javascript
const url = new URL("http://localhost:8080/api/favorites");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/favorites`


<!-- END_5ca940b94da038e53d0f51ca143d9895 -->

<!-- START_6e1b3d703163afd8bd8e26868a2501a3 -->
## Store a newly created Favorite in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/favorites" 
```

```javascript
const url = new URL("http://localhost:8080/api/favorites");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/favorites`


<!-- END_6e1b3d703163afd8bd8e26868a2501a3 -->

<!-- START_50a9856fd67610a9fb5491390cfe7ae9 -->
## Display the specified Favorite.

GET|HEAD /favorites/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/favorites/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/favorites/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/favorites/{favorite}`


<!-- END_50a9856fd67610a9fb5491390cfe7ae9 -->

<!-- START_97ec0704830257876def221f38a749b0 -->
## Update the specified Favorite in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/favorites/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/favorites/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/favorites/{favorite}`

`PATCH api/favorites/{favorite}`


<!-- END_97ec0704830257876def221f38a749b0 -->

<!-- START_5ce13c8da05e7b84c0b2b8487b6514b6 -->
## Remove the specified Favorite from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/favorites/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/favorites/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/favorites/{favorite}`


<!-- END_5ce13c8da05e7b84c0b2b8487b6514b6 -->

<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Display a listing of the Order.

GET|HEAD /orders

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/orders" 
```

```javascript
const url = new URL("http://localhost:8080/api/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/orders`


<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_285c87403b6cfdebe26bc357f22e870f -->
## Store a newly created Order in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/orders" 
```

```javascript
const url = new URL("http://localhost:8080/api/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/orders`


<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_7e6be1b9dd04564a7b1298dd260f3183 -->
## Display the specified Order.

GET|HEAD /orders/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/orders/{order}`


<!-- END_7e6be1b9dd04564a7b1298dd260f3183 -->

<!-- START_37f7b8cec13991c44b134bb2186e9d1e -->
## Update the specified Order in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/orders/{order}`

`PATCH api/orders/{order}`


<!-- END_37f7b8cec13991c44b134bb2186e9d1e -->

<!-- START_13bbe1da139d505dd43a802c56fc6ddd -->
## Display a listing of the ProductOrder.

GET|HEAD /productOrders

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/product_orders" 
```

```javascript
const url = new URL("http://localhost:8080/api/product_orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/product_orders`


<!-- END_13bbe1da139d505dd43a802c56fc6ddd -->

<!-- START_638d96099a96080b3747c9a3ff01c1c2 -->
## Display the specified ProductOrder.

GET|HEAD /productOrders/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/product_orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/product_orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/product_orders/{product_order}`


<!-- END_638d96099a96080b3747c9a3ff01c1c2 -->

<!-- START_e65df2963c4f1f0bfdd426ee5170e8b7 -->
## Display a listing of the Notification.

GET|HEAD /notifications

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/notifications" 
```

```javascript
const url = new URL("http://localhost:8080/api/notifications");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/notifications`


<!-- END_e65df2963c4f1f0bfdd426ee5170e8b7 -->

<!-- START_7a16ee49a8fe186e925d62b616742394 -->
## Display the specified Notification.

GET|HEAD /notifications/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/notifications/{notification}`


<!-- END_7a16ee49a8fe186e925d62b616742394 -->

<!-- START_925ff04a7e2ea910accc06ad080a3503 -->
## Update the specified Notification in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/notifications/{notification}`

`PATCH api/notifications/{notification}`


<!-- END_925ff04a7e2ea910accc06ad080a3503 -->

<!-- START_d1aee9dd60b3caeea32a2ad84cc15e48 -->
## Remove the specified Favorite from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/notifications/{notification}`


<!-- END_d1aee9dd60b3caeea32a2ad84cc15e48 -->

<!-- START_e7389de0f4c48c916c005e58dda08139 -->
## Display a listing of the Cart.

GET|HEAD /carts

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/carts/count" 
```

```javascript
const url = new URL("http://localhost:8080/api/carts/count");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/carts/count`


<!-- END_e7389de0f4c48c916c005e58dda08139 -->

<!-- START_acb8269be2928b6a8d3878ae76e8e34a -->
## Display a listing of the Cart.

GET|HEAD /carts

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/carts" 
```

```javascript
const url = new URL("http://localhost:8080/api/carts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/carts`


<!-- END_acb8269be2928b6a8d3878ae76e8e34a -->

<!-- START_a3e27e3b9158bd9625572542978aa954 -->
## Store a newly created Cart in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/carts" 
```

```javascript
const url = new URL("http://localhost:8080/api/carts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/carts`


<!-- END_a3e27e3b9158bd9625572542978aa954 -->

<!-- START_75afb775ab4a18790abf23a96dc0f760 -->
## Display the specified Cart.

GET|HEAD /carts/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/carts/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/carts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/carts/{cart}`


<!-- END_75afb775ab4a18790abf23a96dc0f760 -->

<!-- START_3ed3ceced12059179c196f67ae20ba20 -->
## Update the specified Cart in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/carts/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/carts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/carts/{cart}`

`PATCH api/carts/{cart}`


<!-- END_3ed3ceced12059179c196f67ae20ba20 -->

<!-- START_e4d8ed46f57f9546223b6654bad4caa4 -->
## Remove the specified Favorite from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/carts/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/carts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/carts/{cart}`


<!-- END_e4d8ed46f57f9546223b6654bad4caa4 -->

<!-- START_a5153497d0e89dadc16db7b2ae73728f -->
## Display a listing of the DeliveryAddress.

GET|HEAD /deliveryAddresses

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/delivery_addresses" 
```

```javascript
const url = new URL("http://localhost:8080/api/delivery_addresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/delivery_addresses`


<!-- END_a5153497d0e89dadc16db7b2ae73728f -->

<!-- START_d6c202502abd71b31f8827de9f64ffac -->
## Store a newly created DeliveryAddress in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/api/delivery_addresses" 
```

```javascript
const url = new URL("http://localhost:8080/api/delivery_addresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/delivery_addresses`


<!-- END_d6c202502abd71b31f8827de9f64ffac -->

<!-- START_7e93377722ab6f6783950a2adc08f926 -->
## Display the specified DeliveryAddress.

GET|HEAD /deliveryAddresses/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/delivery_addresses/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/delivery_addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/delivery_addresses/{delivery_address}`


<!-- END_7e93377722ab6f6783950a2adc08f926 -->

<!-- START_2eb347c4be211cbbdedd38e825100817 -->
## Update the specified DeliveryAddress in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/api/delivery_addresses/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/delivery_addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/delivery_addresses/{delivery_address}`

`PATCH api/delivery_addresses/{delivery_address}`


<!-- END_2eb347c4be211cbbdedd38e825100817 -->

<!-- START_bab4cb75fc0959c08dafbf0436e01c3e -->
## Remove the specified Address from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/api/delivery_addresses/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/delivery_addresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/delivery_addresses/{delivery_address}`


<!-- END_bab4cb75fc0959c08dafbf0436e01c3e -->

<!-- START_a1456aacb67521a2e69d0730748b0ce9 -->
## Display a listing of the Driver.

GET|HEAD /drivers

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/drivers" 
```

```javascript
const url = new URL("http://localhost:8080/api/drivers");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/drivers`


<!-- END_a1456aacb67521a2e69d0730748b0ce9 -->

<!-- START_42fae5a497f284a63942263a2398734d -->
## Display the specified Driver.

GET|HEAD /drivers/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/drivers/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/drivers/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/drivers/{driver}`


<!-- END_42fae5a497f284a63942263a2398734d -->

<!-- START_ac773384363d1b20be0801c8c7ec2b7c -->
## Display a listing of the Earning.

GET|HEAD /earnings

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/earnings" 
```

```javascript
const url = new URL("http://localhost:8080/api/earnings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/earnings`


<!-- END_ac773384363d1b20be0801c8c7ec2b7c -->

<!-- START_f0fcff8afbbdc3025a08325f7d744bde -->
## Display the specified Earning.

GET|HEAD /earnings/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/earnings/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/earnings/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/earnings/{earning}`


<!-- END_f0fcff8afbbdc3025a08325f7d744bde -->

<!-- START_4dfb1a76e0f405d8f630564e59cc1697 -->
## Display a listing of the DriversPayout.

GET|HEAD /driversPayouts

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driversPayouts" 
```

```javascript
const url = new URL("http://localhost:8080/api/driversPayouts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/driversPayouts`


<!-- END_4dfb1a76e0f405d8f630564e59cc1697 -->

<!-- START_fc151d9209eb3e3b7ce6d29db77fdf7b -->
## Display the specified DriversPayout.

GET|HEAD /driversPayouts/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/driversPayouts/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/driversPayouts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/driversPayouts/{driversPayout}`


<!-- END_fc151d9209eb3e3b7ce6d29db77fdf7b -->

<!-- START_62b6a557beb1d1857a8c269f51e70f94 -->
## Display a listing of the MarketsPayout.

GET|HEAD /marketsPayouts

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/marketsPayouts" 
```

```javascript
const url = new URL("http://localhost:8080/api/marketsPayouts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/marketsPayouts`


<!-- END_62b6a557beb1d1857a8c269f51e70f94 -->

<!-- START_6afd1dc1b2e2499809579ee013fcae4e -->
## Display the specified MarketsPayout.

GET|HEAD /marketsPayouts/{id}

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/marketsPayouts/1" 
```

```javascript
const url = new URL("http://localhost:8080/api/marketsPayouts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/marketsPayouts/{marketsPayout}`


<!-- END_6afd1dc1b2e2499809579ee013fcae4e -->

<!-- START_7434c3c603d2152d13eed1a88027c97b -->
## Display a listing of the Coupon.

GET|HEAD /coupons

> Example request:

```bash
curl -X GET -G "http://localhost:8080/api/coupons" 
```

```javascript
const url = new URL("http://localhost:8080/api/coupons");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (429):

```json
{
    "message": "Too Many Attempts."
}
```

### HTTP Request
`GET api/coupons`


<!-- END_7434c3c603d2152d13eed1a88027c97b -->

<!-- START_048e6bf521350fb4208af0fee1ac67c3 -->
## api/uploads/store
> Example request:

```bash
curl -X POST "http://localhost:8080/api/uploads/store" 
```

```javascript
const url = new URL("http://localhost:8080/api/uploads/store");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/uploads/store`


<!-- END_048e6bf521350fb4208af0fee1ac67c3 -->

<!-- START_49892b48af8f301f5cb788f38024fc6e -->
## clear cache from Upload table

> Example request:

```bash
curl -X POST "http://localhost:8080/api/uploads/clear" 
```

```javascript
const url = new URL("http://localhost:8080/api/uploads/clear");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/uploads/clear`


<!-- END_49892b48af8f301f5cb788f38024fc6e -->

<!-- START_b2654e7e22296413be9def5c9ba36d8f -->
## Redirect the user to the Facebook authentication page.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/login/1" 
```

```javascript
const url = new URL("http://localhost:8080/login/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET login/{service}`


<!-- END_b2654e7e22296413be9def5c9ba36d8f -->

<!-- START_141bf24f04835d5230946d95086545ab -->
## Obtain the user information from Facebook.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/login/1/callback" 
```

```javascript
const url = new URL("http://localhost:8080/login/1/callback");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET login/{service}/callback`


<!-- END_141bf24f04835d5230946d95086545ab -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/login" 
```

```javascript
const url = new URL("http://localhost:8080/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost:8080/login" 
```

```javascript
const url = new URL("http://localhost:8080/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost:8080/logout" 
```

```javascript
const url = new URL("http://localhost:8080/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/register" 
```

```javascript
const url = new URL("http://localhost:8080/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost:8080/register" 
```

```javascript
const url = new URL("http://localhost:8080/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/password/reset" 
```

```javascript
const url = new URL("http://localhost:8080/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost:8080/password/email" 
```

```javascript
const url = new URL("http://localhost:8080/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/password/reset/1" 
```

```javascript
const url = new URL("http://localhost:8080/password/reset/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost:8080/password/reset" 
```

```javascript
const url = new URL("http://localhost:8080/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_d39b4f4541de8096062cdbdb06028b12 -->
## payments/failed
> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/failed" 
```

```javascript
const url = new URL("http://localhost:8080/payments/failed");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payments/failed`


<!-- END_d39b4f4541de8096062cdbdb06028b12 -->

<!-- START_242d495042a196952c27fd31b2d828aa -->
## payments/razorpay/checkout
> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/razorpay/checkout" 
```

```javascript
const url = new URL("http://localhost:8080/payments/razorpay/checkout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payments/razorpay/checkout`


<!-- END_242d495042a196952c27fd31b2d828aa -->

<!-- START_f6e841e19de7760fd000d89c41a91ea5 -->
## payments/razorpay/pay-success/{userId}/{deliveryAddressId?}/{couponCode?}
> Example request:

```bash
curl -X POST "http://localhost:8080/payments/razorpay/pay-success/1/1/1" 
```

```javascript
const url = new URL("http://localhost:8080/payments/razorpay/pay-success/1/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST payments/razorpay/pay-success/{userId}/{deliveryAddressId?}/{couponCode?}`


<!-- END_f6e841e19de7760fd000d89c41a91ea5 -->

<!-- START_f1bf765d707b712732af3b99d891eeae -->
## payments/razorpay
> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/razorpay" 
```

```javascript
const url = new URL("http://localhost:8080/payments/razorpay");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payments/razorpay`


<!-- END_f1bf765d707b712732af3b99d891eeae -->

<!-- START_5af5fbb54c7ec51683fd73536c76a7cb -->
## payments/paypal/express-checkout
> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/paypal/express-checkout" 
```

```javascript
const url = new URL("http://localhost:8080/payments/paypal/express-checkout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payments/paypal/express-checkout`


<!-- END_5af5fbb54c7ec51683fd73536c76a7cb -->

<!-- START_a1dd3afc25c5ab02b7c6a4e8944d7a4c -->
## Process payment on PayPal.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/paypal/express-checkout-success" 
```

```javascript
const url = new URL("http://localhost:8080/payments/paypal/express-checkout-success");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payments/paypal/express-checkout-success`


<!-- END_a1dd3afc25c5ab02b7c6a4e8944d7a4c -->

<!-- START_e68d6b9e77e32ac4cc3371edca5c0a9d -->
## payments/paypal
> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/paypal" 
```

```javascript
const url = new URL("http://localhost:8080/payments/paypal");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET payments/paypal`


<!-- END_e68d6b9e77e32ac4cc3371edca5c0a9d -->

<!-- START_d3664c487aae08150825252713b24291 -->
## firebase/sw-js
> Example request:

```bash
curl -X GET -G "http://localhost:8080/firebase/sw-js" 
```

```javascript
const url = new URL("http://localhost:8080/firebase/sw-js");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET firebase/sw-js`


<!-- END_d3664c487aae08150825252713b24291 -->

<!-- START_d0cb8f249d6d5edc3beccd93cd9bc376 -->
## Get images paths

> Example request:

```bash
curl -X GET -G "http://localhost:8080/storage/app/public/1/1/1" 
```

```javascript
const url = new URL("http://localhost:8080/storage/app/public/1/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET storage/app/public/{id}/{conversion}/{filename?}`


<!-- END_d0cb8f249d6d5edc3beccd93cd9bc376 -->

<!-- START_f497f1f7d005ed681f077661b5a3f11b -->
## logs
> Example request:

```bash
curl -X GET -G "http://localhost:8080/logs" 
```

```javascript
const url = new URL("http://localhost:8080/logs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET logs`


<!-- END_f497f1f7d005ed681f077661b5a3f11b -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/" 
```

```javascript
const url = new URL("http://localhost:8080/");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_09b35fc255df32f9091f4b0e4fb77ad1 -->
## uploads/store
> Example request:

```bash
curl -X POST "http://localhost:8080/uploads/store" 
```

```javascript
const url = new URL("http://localhost:8080/uploads/store");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST uploads/store`


<!-- END_09b35fc255df32f9091f4b0e4fb77ad1 -->

<!-- START_3879651214227ef29c336f564dfd82b0 -->
## Display a user profile.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/users/profile" 
```

```javascript
const url = new URL("http://localhost:8080/users/profile");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users/profile`


<!-- END_3879651214227ef29c336f564dfd82b0 -->

<!-- START_fa2bf9ce671616ca4e38f30b35733d42 -->
## Remove Media of User

> Example request:

```bash
curl -X POST "http://localhost:8080/users/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/users/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users/remove-media`


<!-- END_fa2bf9ce671616ca4e38f30b35733d42 -->

<!-- START_89966bfb9ab533cc3249b91a9090d3dc -->
## Display a listing of the User.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/users" 
```

```javascript
const url = new URL("http://localhost:8080/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users`


<!-- END_89966bfb9ab533cc3249b91a9090d3dc -->

<!-- START_04094f136cb91c117bde084191e6859d -->
## Show the form for creating a new User.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/users/create" 
```

```javascript
const url = new URL("http://localhost:8080/users/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users/create`


<!-- END_04094f136cb91c117bde084191e6859d -->

<!-- START_57a8a4ba671355511e22780b1b63690e -->
## Store a newly created User in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/users" 
```

```javascript
const url = new URL("http://localhost:8080/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST users`


<!-- END_57a8a4ba671355511e22780b1b63690e -->

<!-- START_5693ac2f2e21af3ebc471cd5a6244460 -->
## Display the specified User.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/users/1" 
```

```javascript
const url = new URL("http://localhost:8080/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users/{user}`


<!-- END_5693ac2f2e21af3ebc471cd5a6244460 -->

<!-- START_9c6e6c2d3215b1ba7d13468e7cd95e62 -->
## Show the form for editing the specified User.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/users/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/users/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET users/{user}/edit`


<!-- END_9c6e6c2d3215b1ba7d13468e7cd95e62 -->

<!-- START_7fe085c671e1b3d51e86136538b1d63f -->
## Update the specified User in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/users/1" 
```

```javascript
const url = new URL("http://localhost:8080/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT users/{user}`

`PATCH users/{user}`


<!-- END_7fe085c671e1b3d51e86136538b1d63f -->

<!-- START_a948aef61c80bf96137d023464fde21f -->
## Remove the specified User from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/users/1" 
```

```javascript
const url = new URL("http://localhost:8080/users/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE users/{user}`


<!-- END_a948aef61c80bf96137d023464fde21f -->

<!-- START_30059a09ef3f0284c40e4d06962ce08d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/dashboard" 
```

```javascript
const url = new URL("http://localhost:8080/dashboard");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET dashboard`


<!-- END_30059a09ef3f0284c40e4d06962ce08d -->

<!-- START_bcfc611cbec74809fb032e602df913e8 -->
## uploads/all/{collection?}
> Example request:

```bash
curl -X GET -G "http://localhost:8080/uploads/all/1" 
```

```javascript
const url = new URL("http://localhost:8080/uploads/all/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET uploads/all/{collection?}`


<!-- END_bcfc611cbec74809fb032e602df913e8 -->

<!-- START_3bd5c8f7dae4f29d518806c5d2e76155 -->
## uploads/collectionsNames
> Example request:

```bash
curl -X GET -G "http://localhost:8080/uploads/collectionsNames" 
```

```javascript
const url = new URL("http://localhost:8080/uploads/collectionsNames");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET uploads/collectionsNames`


<!-- END_3bd5c8f7dae4f29d518806c5d2e76155 -->

<!-- START_a4e3575f798187eaffb9232223922347 -->
## clear cache from Upload table

> Example request:

```bash
curl -X POST "http://localhost:8080/uploads/clear" 
```

```javascript
const url = new URL("http://localhost:8080/uploads/clear");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST uploads/clear`


<!-- END_a4e3575f798187eaffb9232223922347 -->

<!-- START_428babfca7ce09afb6c0a469eb401a0b -->
## medias
> Example request:

```bash
curl -X GET -G "http://localhost:8080/medias" 
```

```javascript
const url = new URL("http://localhost:8080/medias");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET medias`


<!-- END_428babfca7ce09afb6c0a469eb401a0b -->

<!-- START_0ad3c7f3171c4f1783cca0618abaa6f2 -->
## clear all cache

> Example request:

```bash
curl -X GET -G "http://localhost:8080/uploads/clear-all" 
```

```javascript
const url = new URL("http://localhost:8080/uploads/clear-all");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET uploads/clear-all`


<!-- END_0ad3c7f3171c4f1783cca0618abaa6f2 -->

<!-- START_477a2b71778f8db2e667821c6777e331 -->
## permissions/role-has-permission
> Example request:

```bash
curl -X GET -G "http://localhost:8080/permissions/role-has-permission" 
```

```javascript
const url = new URL("http://localhost:8080/permissions/role-has-permission");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET permissions/role-has-permission`


<!-- END_477a2b71778f8db2e667821c6777e331 -->

<!-- START_a06a5aa65604de084fad04ad9132c71b -->
## permissions/refresh-permissions
> Example request:

```bash
curl -X GET -G "http://localhost:8080/permissions/refresh-permissions" 
```

```javascript
const url = new URL("http://localhost:8080/permissions/refresh-permissions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET permissions/refresh-permissions`


<!-- END_a06a5aa65604de084fad04ad9132c71b -->

<!-- START_74657e0122c71ac6928ba4ad24559467 -->
## permissions/give-permission-to-role
> Example request:

```bash
curl -X POST "http://localhost:8080/permissions/give-permission-to-role" 
```

```javascript
const url = new URL("http://localhost:8080/permissions/give-permission-to-role");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST permissions/give-permission-to-role`


<!-- END_74657e0122c71ac6928ba4ad24559467 -->

<!-- START_1c540686e1698e2c8c41e4a4d86e686d -->
## permissions/revoke-permission-to-role
> Example request:

```bash
curl -X POST "http://localhost:8080/permissions/revoke-permission-to-role" 
```

```javascript
const url = new URL("http://localhost:8080/permissions/revoke-permission-to-role");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST permissions/revoke-permission-to-role`


<!-- END_1c540686e1698e2c8c41e4a4d86e686d -->

<!-- START_560003de7fd1b6003fae2ea3c786a10c -->
## Display a listing of the Permission.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/permissions" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/permissions`


<!-- END_560003de7fd1b6003fae2ea3c786a10c -->

<!-- START_874c6c3a44378a7bb94fe2d3419b9e55 -->
## Show the form for creating a new Permission.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/permissions/create" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/permissions/create`


<!-- END_874c6c3a44378a7bb94fe2d3419b9e55 -->

<!-- START_2889c0a8ff9a3cbc58bf390ee593d222 -->
## Store a newly created Permission in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/settings/permissions" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST settings/permissions`


<!-- END_2889c0a8ff9a3cbc58bf390ee593d222 -->

<!-- START_5543fbc362e173a2a292bfd4d3c2f38b -->
## Display the specified Permission.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/permissions/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/permissions/{permission}`


<!-- END_5543fbc362e173a2a292bfd4d3c2f38b -->

<!-- START_2eca6e4023e04735fb9d1fe79d57864b -->
## Show the form for editing the specified Permission.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/permissions/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/permissions/{permission}/edit`


<!-- END_2eca6e4023e04735fb9d1fe79d57864b -->

<!-- START_7ad458c54e2dcc74bfb29048bb7ef658 -->
## Update the specified Permission in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/settings/permissions/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT settings/permissions/{permission}`

`PATCH settings/permissions/{permission}`


<!-- END_7ad458c54e2dcc74bfb29048bb7ef658 -->

<!-- START_78af407f1d5adec14e974f59c16d799f -->
## Remove the specified Permission from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/settings/permissions/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/permissions/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE settings/permissions/{permission}`


<!-- END_78af407f1d5adec14e974f59c16d799f -->

<!-- START_cbabba7825b65e4d080013a66c12b077 -->
## Display a listing of the Role.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/roles" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/roles`


<!-- END_cbabba7825b65e4d080013a66c12b077 -->

<!-- START_7dbabd05676c299291c798df4a97254a -->
## Show the form for creating a new Role.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/roles/create" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/roles/create`


<!-- END_7dbabd05676c299291c798df4a97254a -->

<!-- START_bb8cc42f096db2dc6784f409be11d74d -->
## Store a newly created Role in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/settings/roles" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST settings/roles`


<!-- END_bb8cc42f096db2dc6784f409be11d74d -->

<!-- START_e9b9832520404cc6fe23e37783b58062 -->
## Display the specified Role.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/roles/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/roles/{role}`


<!-- END_e9b9832520404cc6fe23e37783b58062 -->

<!-- START_3f1ee6b2a88252a1ea5a571930758d7b -->
## Show the form for editing the specified Role.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/roles/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/roles/{role}/edit`


<!-- END_3f1ee6b2a88252a1ea5a571930758d7b -->

<!-- START_a7cd862eded0c20fdd6dcaa2a5eaf94d -->
## Update the specified Role in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/settings/roles/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT settings/roles/{role}`

`PATCH settings/roles/{role}`


<!-- END_a7cd862eded0c20fdd6dcaa2a5eaf94d -->

<!-- START_51c36d326172004c76b0fbd6af7b99fb -->
## Remove the specified Role from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/settings/roles/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/roles/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE settings/roles/{role}`


<!-- END_51c36d326172004c76b0fbd6af7b99fb -->

<!-- START_8112f176a867887b65d473c3d94282ad -->
## Display a listing of the CustomField.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/customFields" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/customFields`


<!-- END_8112f176a867887b65d473c3d94282ad -->

<!-- START_c1f9d8b613ebbb5e653c8a2f087f16d3 -->
## Show the form for creating a new CustomField.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/customFields/create" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/customFields/create`


<!-- END_c1f9d8b613ebbb5e653c8a2f087f16d3 -->

<!-- START_acadde994506110395ef30f41c716414 -->
## Store a newly created CustomField in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/settings/customFields" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST settings/customFields`


<!-- END_acadde994506110395ef30f41c716414 -->

<!-- START_8275549f5eabc4b04b256756b85ef3c5 -->
## Display the specified CustomField.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/customFields/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/customFields/{customField}`


<!-- END_8275549f5eabc4b04b256756b85ef3c5 -->

<!-- START_bdf58a294300a6131374a468d984bf4a -->
## Show the form for editing the specified CustomField.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/customFields/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/customFields/{customField}/edit`


<!-- END_bdf58a294300a6131374a468d984bf4a -->

<!-- START_791a183254d094ffed936542d8c801ba -->
## Update the specified CustomField in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/settings/customFields/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT settings/customFields/{customField}`

`PATCH settings/customFields/{customField}`


<!-- END_791a183254d094ffed936542d8c801ba -->

<!-- START_25d17979855f9bebf20afca9f2f07215 -->
## Remove the specified CustomField from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/settings/customFields/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/customFields/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE settings/customFields/{customField}`


<!-- END_25d17979855f9bebf20afca9f2f07215 -->

<!-- START_730885dd82a281cfa10eff3be5f0e6b1 -->
## Display a listing of the Currency.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/currencies" 
```

```javascript
const url = new URL("http://localhost:8080/settings/currencies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/currencies`


<!-- END_730885dd82a281cfa10eff3be5f0e6b1 -->

<!-- START_c05515d21fe1ac38f9e83aa97cf3d07c -->
## Show the form for creating a new Currency.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/currencies/create" 
```

```javascript
const url = new URL("http://localhost:8080/settings/currencies/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/currencies/create`


<!-- END_c05515d21fe1ac38f9e83aa97cf3d07c -->

<!-- START_636ba0413b5f74b62e19bfac873b71a0 -->
## Store a newly created Currency in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/settings/currencies" 
```

```javascript
const url = new URL("http://localhost:8080/settings/currencies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST settings/currencies`


<!-- END_636ba0413b5f74b62e19bfac873b71a0 -->

<!-- START_2d9c5c95875cf7dad859bc8570c6e697 -->
## Show the form for editing the specified Currency.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/currencies/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/settings/currencies/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/currencies/{currency}/edit`


<!-- END_2d9c5c95875cf7dad859bc8570c6e697 -->

<!-- START_9a7267d669b724097308fad0a7af5c84 -->
## Update the specified Currency in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/settings/currencies/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/currencies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT settings/currencies/{currency}`

`PATCH settings/currencies/{currency}`


<!-- END_9a7267d669b724097308fad0a7af5c84 -->

<!-- START_0cd522e9199e1cda19ff09cec4950cb4 -->
## Remove the specified Currency from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/settings/currencies/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/currencies/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE settings/currencies/{currency}`


<!-- END_0cd522e9199e1cda19ff09cec4950cb4 -->

<!-- START_3feac8a4970aafed19eb84301d122685 -->
## settings/users/login-as-user/{id}
> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/users/login-as-user/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/users/login-as-user/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/users/login-as-user/{id}`


<!-- END_3feac8a4970aafed19eb84301d122685 -->

<!-- START_7008ab71aa7050ff51c1348b692b7918 -->
## settings/update
> Example request:

```bash
curl -X PATCH "http://localhost:8080/settings/update" 
```

```javascript
const url = new URL("http://localhost:8080/settings/update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH settings/update`


<!-- END_7008ab71aa7050ff51c1348b692b7918 -->

<!-- START_297cbf3622c5549c46c332c48f8b71f0 -->
## settings/translate
> Example request:

```bash
curl -X PATCH "http://localhost:8080/settings/translate" 
```

```javascript
const url = new URL("http://localhost:8080/settings/translate");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PATCH",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PATCH settings/translate`


<!-- END_297cbf3622c5549c46c332c48f8b71f0 -->

<!-- START_ab82c031fb774e2be786d6c1235bee02 -->
## settings/sync-translation
> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/sync-translation" 
```

```javascript
const url = new URL("http://localhost:8080/settings/sync-translation");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/sync-translation`


<!-- END_ab82c031fb774e2be786d6c1235bee02 -->

<!-- START_cbb10436f08cdee7dfc3bc013e62cfa0 -->
## settings/clear-cache
> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/clear-cache" 
```

```javascript
const url = new URL("http://localhost:8080/settings/clear-cache");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/clear-cache`


<!-- END_cbb10436f08cdee7dfc3bc013e62cfa0 -->

<!-- START_9e7cd16bc478e1282ec59f7603d2d466 -->
## settings/check-update
> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/check-update" 
```

```javascript
const url = new URL("http://localhost:8080/settings/check-update");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET settings/check-update`


<!-- END_9e7cd16bc478e1282ec59f7603d2d466 -->

<!-- START_bd76a70a5641d64dfaba207659474d9f -->
## settings/{type?}/{tab?}
> Example request:

```bash
curl -X GET -G "http://localhost:8080/settings/1/1" 
```

```javascript
const url = new URL("http://localhost:8080/settings/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET settings/{type?}/{tab?}`


<!-- END_bd76a70a5641d64dfaba207659474d9f -->

<!-- START_449a94d8cbad5da513976fe3bd7bc5ec -->
## Remove Media of Field

> Example request:

```bash
curl -X POST "http://localhost:8080/fields/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/fields/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fields/remove-media`


<!-- END_449a94d8cbad5da513976fe3bd7bc5ec -->

<!-- START_6fec8ffe6d292d05e0cea3fbb3bed408 -->
## Display a listing of the Field.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/fields" 
```

```javascript
const url = new URL("http://localhost:8080/fields");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET fields`


<!-- END_6fec8ffe6d292d05e0cea3fbb3bed408 -->

<!-- START_c4234b981583f6873ce592e1e334d97f -->
## Show the form for creating a new Field.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/fields/create" 
```

```javascript
const url = new URL("http://localhost:8080/fields/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET fields/create`


<!-- END_c4234b981583f6873ce592e1e334d97f -->

<!-- START_59fd6a3bfe5ffe50dac132cb268b7e0e -->
## Store a newly created Field in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/fields" 
```

```javascript
const url = new URL("http://localhost:8080/fields");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST fields`


<!-- END_59fd6a3bfe5ffe50dac132cb268b7e0e -->

<!-- START_27b6a5041bb3fedc4650f243ec2c2d1d -->
## Show the form for editing the specified Field.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/fields/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/fields/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET fields/{field}/edit`


<!-- END_27b6a5041bb3fedc4650f243ec2c2d1d -->

<!-- START_a2e94cb934bb7d6840f262f1041acfb0 -->
## Update the specified Field in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/fields/1" 
```

```javascript
const url = new URL("http://localhost:8080/fields/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT fields/{field}`

`PATCH fields/{field}`


<!-- END_a2e94cb934bb7d6840f262f1041acfb0 -->

<!-- START_3ae62388f856307cdcfa7dd0d166ea7f -->
## Remove the specified Field from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/fields/1" 
```

```javascript
const url = new URL("http://localhost:8080/fields/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE fields/{field}`


<!-- END_3ae62388f856307cdcfa7dd0d166ea7f -->

<!-- START_79ca093f1f10281177d92a4fe1a7c700 -->
## Remove Media of Market

> Example request:

```bash
curl -X POST "http://localhost:8080/markets/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/markets/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST markets/remove-media`


<!-- END_79ca093f1f10281177d92a4fe1a7c700 -->

<!-- START_3537db869f9b5dc12183eaedb70679d2 -->
## Display a listing of the Market.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/requestedMarkets" 
```

```javascript
const url = new URL("http://localhost:8080/requestedMarkets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET requestedMarkets`


<!-- END_3537db869f9b5dc12183eaedb70679d2 -->

<!-- START_34be390773eae636d65fed5e03f91c9f -->
## Display a listing of the Market.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/markets" 
```

```javascript
const url = new URL("http://localhost:8080/markets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET markets`


<!-- END_34be390773eae636d65fed5e03f91c9f -->

<!-- START_b52290b3a6da8d29cdc7461c09b538f5 -->
## Show the form for creating a new Market.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/markets/create" 
```

```javascript
const url = new URL("http://localhost:8080/markets/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET markets/create`


<!-- END_b52290b3a6da8d29cdc7461c09b538f5 -->

<!-- START_b3f16172ca9784c335dd1dbdee515415 -->
## Store a newly created Market in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/markets" 
```

```javascript
const url = new URL("http://localhost:8080/markets");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST markets`


<!-- END_b3f16172ca9784c335dd1dbdee515415 -->

<!-- START_19ffa76c44f593084f6ae9607d2bdeca -->
## Show the form for editing the specified Market.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/markets/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/markets/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET markets/{market}/edit`


<!-- END_19ffa76c44f593084f6ae9607d2bdeca -->

<!-- START_06d3ec99eabe8bda5a13d9c0aed47faa -->
## Update the specified Market in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT markets/{market}`

`PATCH markets/{market}`


<!-- END_06d3ec99eabe8bda5a13d9c0aed47faa -->

<!-- START_80168d0bb079760b6530c7c5e7289cdf -->
## Remove the specified Market from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/markets/1" 
```

```javascript
const url = new URL("http://localhost:8080/markets/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE markets/{market}`


<!-- END_80168d0bb079760b6530c7c5e7289cdf -->

<!-- START_0b391a30df7a43980d9318e4a1c6944e -->
## Remove Media of Category

> Example request:

```bash
curl -X POST "http://localhost:8080/categories/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/categories/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST categories/remove-media`


<!-- END_0b391a30df7a43980d9318e4a1c6944e -->

<!-- START_6a107a131f853e92450ac742beba0e7f -->
## Display a listing of the Category.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/categories" 
```

```javascript
const url = new URL("http://localhost:8080/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories`


<!-- END_6a107a131f853e92450ac742beba0e7f -->

<!-- START_6a2ad9b453d77d03400b055f92e9426f -->
## Show the form for creating a new Category.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/categories/create" 
```

```javascript
const url = new URL("http://localhost:8080/categories/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories/create`


<!-- END_6a2ad9b453d77d03400b055f92e9426f -->

<!-- START_cb37a009c57f6e054e721aada4d9664b -->
## Store a newly created Category in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/categories" 
```

```javascript
const url = new URL("http://localhost:8080/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST categories`


<!-- END_cb37a009c57f6e054e721aada4d9664b -->

<!-- START_bd3c894d3ea5ccd46778dcf41ef0ff3c -->
## Show the form for editing the specified Category.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/categories/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/categories/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET categories/{category}/edit`


<!-- END_bd3c894d3ea5ccd46778dcf41ef0ff3c -->

<!-- START_5c7692955c3e2542b25146f0d77e3767 -->
## Update the specified Category in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/categories/1" 
```

```javascript
const url = new URL("http://localhost:8080/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT categories/{category}`

`PATCH categories/{category}`


<!-- END_5c7692955c3e2542b25146f0d77e3767 -->

<!-- START_c595e22ac497b4ace0ad442feffe7712 -->
## Remove the specified Category from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/categories/1" 
```

```javascript
const url = new URL("http://localhost:8080/categories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE categories/{category}`


<!-- END_c595e22ac497b4ace0ad442feffe7712 -->

<!-- START_25bcc331ffa3b2f41cdcc92a29b3348b -->
## Display a listing of the FaqCategory.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/faqCategories" 
```

```javascript
const url = new URL("http://localhost:8080/faqCategories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET faqCategories`


<!-- END_25bcc331ffa3b2f41cdcc92a29b3348b -->

<!-- START_2d492a5f1299b76277818883b75e0ec5 -->
## Show the form for creating a new FaqCategory.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/faqCategories/create" 
```

```javascript
const url = new URL("http://localhost:8080/faqCategories/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET faqCategories/create`


<!-- END_2d492a5f1299b76277818883b75e0ec5 -->

<!-- START_10b52fd3ecd1126801d483ab1c4e65ae -->
## Store a newly created FaqCategory in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/faqCategories" 
```

```javascript
const url = new URL("http://localhost:8080/faqCategories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST faqCategories`


<!-- END_10b52fd3ecd1126801d483ab1c4e65ae -->

<!-- START_7799ee8a037569365db78cd40528eaf7 -->
## Show the form for editing the specified FaqCategory.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/faqCategories/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/faqCategories/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET faqCategories/{faqCategory}/edit`


<!-- END_7799ee8a037569365db78cd40528eaf7 -->

<!-- START_08e75763d287c70102ebb06357c55d29 -->
## Update the specified FaqCategory in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/faqCategories/1" 
```

```javascript
const url = new URL("http://localhost:8080/faqCategories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT faqCategories/{faqCategory}`

`PATCH faqCategories/{faqCategory}`


<!-- END_08e75763d287c70102ebb06357c55d29 -->

<!-- START_e5b5a682ea7bbcf258f120fd9d70f26e -->
## Remove the specified FaqCategory from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/faqCategories/1" 
```

```javascript
const url = new URL("http://localhost:8080/faqCategories/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE faqCategories/{faqCategory}`


<!-- END_e5b5a682ea7bbcf258f120fd9d70f26e -->

<!-- START_68c8ad0eb0167cd423165fc2f37b600d -->
## Display a listing of the OrderStatus.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orderStatuses" 
```

```javascript
const url = new URL("http://localhost:8080/orderStatuses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orderStatuses`


<!-- END_68c8ad0eb0167cd423165fc2f37b600d -->

<!-- START_c102d362f14aa1eaca2fbb63e99616ef -->
## Display the specified OrderStatus.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orderStatuses/1" 
```

```javascript
const url = new URL("http://localhost:8080/orderStatuses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orderStatuses/{orderStatus}`


<!-- END_c102d362f14aa1eaca2fbb63e99616ef -->

<!-- START_d9d9124e063588349ad826650540872f -->
## Show the form for editing the specified OrderStatus.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orderStatuses/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/orderStatuses/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orderStatuses/{orderStatus}/edit`


<!-- END_d9d9124e063588349ad826650540872f -->

<!-- START_8afb34508fd9e5466234c2ddd2c6680d -->
## Update the specified OrderStatus in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/orderStatuses/1" 
```

```javascript
const url = new URL("http://localhost:8080/orderStatuses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT orderStatuses/{orderStatus}`

`PATCH orderStatuses/{orderStatus}`


<!-- END_8afb34508fd9e5466234c2ddd2c6680d -->

<!-- START_165083ab6d383e4d8686dd3da53a6f39 -->
## Remove Media of Product

> Example request:

```bash
curl -X POST "http://localhost:8080/products/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/products/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST products/remove-media`


<!-- END_165083ab6d383e4d8686dd3da53a6f39 -->

<!-- START_fcdf2da1997bd4d8d126f782bc06524c -->
## Display a listing of the Product.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/products" 
```

```javascript
const url = new URL("http://localhost:8080/products");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET products`


<!-- END_fcdf2da1997bd4d8d126f782bc06524c -->

<!-- START_f991d4ee536427e80930fcd66f55be22 -->
## Show the form for creating a new Product.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/products/create" 
```

```javascript
const url = new URL("http://localhost:8080/products/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET products/create`


<!-- END_f991d4ee536427e80930fcd66f55be22 -->

<!-- START_e69e3804fa0af1eb523e480d661362b7 -->
## Store a newly created Product in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/products" 
```

```javascript
const url = new URL("http://localhost:8080/products");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST products`


<!-- END_e69e3804fa0af1eb523e480d661362b7 -->

<!-- START_8c5bdcaf79c3101b1f381b7fe35abe7d -->
## Show the form for editing the specified Product.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/products/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/products/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET products/{product}/edit`


<!-- END_8c5bdcaf79c3101b1f381b7fe35abe7d -->

<!-- START_3d6f3cbb4f154b7da4faac30c3380d51 -->
## Update the specified Product in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/products/1" 
```

```javascript
const url = new URL("http://localhost:8080/products/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT products/{product}`

`PATCH products/{product}`


<!-- END_3d6f3cbb4f154b7da4faac30c3380d51 -->

<!-- START_9dc19a575e78a6169cad6bda8a2186de -->
## Remove the specified Product from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/products/1" 
```

```javascript
const url = new URL("http://localhost:8080/products/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE products/{product}`


<!-- END_9dc19a575e78a6169cad6bda8a2186de -->

<!-- START_8da22b6c5bb5a59d0212c5d98456aec0 -->
## Remove Media of Gallery

> Example request:

```bash
curl -X POST "http://localhost:8080/galleries/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/galleries/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST galleries/remove-media`


<!-- END_8da22b6c5bb5a59d0212c5d98456aec0 -->

<!-- START_0368d86162279cd4e6b59c3e871925e2 -->
## Display a listing of the Gallery.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/galleries" 
```

```javascript
const url = new URL("http://localhost:8080/galleries");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET galleries`


<!-- END_0368d86162279cd4e6b59c3e871925e2 -->

<!-- START_459b0a663fef7fbf166b731b2aa6db79 -->
## Show the form for creating a new Gallery.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/galleries/create" 
```

```javascript
const url = new URL("http://localhost:8080/galleries/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET galleries/create`


<!-- END_459b0a663fef7fbf166b731b2aa6db79 -->

<!-- START_7d9db750d55c0e6e3d7b952d2a80d9bf -->
## Store a newly created Gallery in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/galleries" 
```

```javascript
const url = new URL("http://localhost:8080/galleries");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST galleries`


<!-- END_7d9db750d55c0e6e3d7b952d2a80d9bf -->

<!-- START_49bb9bbb23386674bd9b020cf31cf4ed -->
## Show the form for editing the specified Gallery.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/galleries/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/galleries/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET galleries/{gallery}/edit`


<!-- END_49bb9bbb23386674bd9b020cf31cf4ed -->

<!-- START_d8645eff19a3b2bfec3544d3dbaa8959 -->
## Update the specified Gallery in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/galleries/1" 
```

```javascript
const url = new URL("http://localhost:8080/galleries/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT galleries/{gallery}`

`PATCH galleries/{gallery}`


<!-- END_d8645eff19a3b2bfec3544d3dbaa8959 -->

<!-- START_c4738047e29e4881ff51f9242cc5e798 -->
## Remove the specified Gallery from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/galleries/1" 
```

```javascript
const url = new URL("http://localhost:8080/galleries/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE galleries/{gallery}`


<!-- END_c4738047e29e4881ff51f9242cc5e798 -->

<!-- START_6fe35573327885b65d8bd22ec24d4c5f -->
## Display a listing of the ProductReview.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/productReviews" 
```

```javascript
const url = new URL("http://localhost:8080/productReviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET productReviews`


<!-- END_6fe35573327885b65d8bd22ec24d4c5f -->

<!-- START_a40138ce84e0cb19788e873d910524a3 -->
## Show the form for creating a new ProductReview.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/productReviews/create" 
```

```javascript
const url = new URL("http://localhost:8080/productReviews/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET productReviews/create`


<!-- END_a40138ce84e0cb19788e873d910524a3 -->

<!-- START_cf515680334c669599ebc2bae4c16ff5 -->
## Store a newly created ProductReview in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/productReviews" 
```

```javascript
const url = new URL("http://localhost:8080/productReviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST productReviews`


<!-- END_cf515680334c669599ebc2bae4c16ff5 -->

<!-- START_986910c9131d5922430e481b9d682892 -->
## Show the form for editing the specified ProductReview.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/productReviews/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/productReviews/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET productReviews/{productReview}/edit`


<!-- END_986910c9131d5922430e481b9d682892 -->

<!-- START_4ceecc3ac85ec1c24e638363596f0d5c -->
## Update the specified ProductReview in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/productReviews/1" 
```

```javascript
const url = new URL("http://localhost:8080/productReviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT productReviews/{productReview}`

`PATCH productReviews/{productReview}`


<!-- END_4ceecc3ac85ec1c24e638363596f0d5c -->

<!-- START_ea2b7b2ddd5aa41119dc990287eccd28 -->
## Remove the specified ProductReview from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/productReviews/1" 
```

```javascript
const url = new URL("http://localhost:8080/productReviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE productReviews/{productReview}`


<!-- END_ea2b7b2ddd5aa41119dc990287eccd28 -->

<!-- START_008ba979897ad3422d44b2e2c249eda5 -->
## Remove Media of Option

> Example request:

```bash
curl -X POST "http://localhost:8080/options/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/options/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST options/remove-media`


<!-- END_008ba979897ad3422d44b2e2c249eda5 -->

<!-- START_0af9fab88fd7253ac8ccee578f299141 -->
## Display a listing of the Payment.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments" 
```

```javascript
const url = new URL("http://localhost:8080/payments");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET payments`


<!-- END_0af9fab88fd7253ac8ccee578f299141 -->

<!-- START_78f503fb9658b1ceadabc4775a31735e -->
## Display the specified Payment.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/payments/1" 
```

```javascript
const url = new URL("http://localhost:8080/payments/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET payments/{payment}`


<!-- END_78f503fb9658b1ceadabc4775a31735e -->

<!-- START_675c31be071655650d33175d7b59a834 -->
## Update the specified Payment in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/payments/1" 
```

```javascript
const url = new URL("http://localhost:8080/payments/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT payments/{payment}`

`PATCH payments/{payment}`


<!-- END_675c31be071655650d33175d7b59a834 -->

<!-- START_e622278db4d394c4f9584a6f1869270d -->
## Display a listing of the Faq.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/faqs" 
```

```javascript
const url = new URL("http://localhost:8080/faqs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET faqs`


<!-- END_e622278db4d394c4f9584a6f1869270d -->

<!-- START_7666afdc2fe62ef68978a6a0174fc6f5 -->
## Show the form for creating a new Faq.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/faqs/create" 
```

```javascript
const url = new URL("http://localhost:8080/faqs/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET faqs/create`


<!-- END_7666afdc2fe62ef68978a6a0174fc6f5 -->

<!-- START_1b12233d4044577d092026ed8c3ae3c4 -->
## Store a newly created Faq in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/faqs" 
```

```javascript
const url = new URL("http://localhost:8080/faqs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST faqs`


<!-- END_1b12233d4044577d092026ed8c3ae3c4 -->

<!-- START_3c839870f56e5973f399ad0c4b08e47a -->
## Show the form for editing the specified Faq.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/faqs/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/faqs/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET faqs/{faq}/edit`


<!-- END_3c839870f56e5973f399ad0c4b08e47a -->

<!-- START_1f6e1fa04a552ea623f904368bfaa0dc -->
## Update the specified Faq in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/faqs/1" 
```

```javascript
const url = new URL("http://localhost:8080/faqs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT faqs/{faq}`

`PATCH faqs/{faq}`


<!-- END_1f6e1fa04a552ea623f904368bfaa0dc -->

<!-- START_76dd8b3e07cc78426f222b5d0ead4f75 -->
## Remove the specified Faq from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/faqs/1" 
```

```javascript
const url = new URL("http://localhost:8080/faqs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE faqs/{faq}`


<!-- END_76dd8b3e07cc78426f222b5d0ead4f75 -->

<!-- START_bbf30fb7e0fd3a34b588ed220c85af92 -->
## Display a listing of the MarketReview.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/marketReviews" 
```

```javascript
const url = new URL("http://localhost:8080/marketReviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET marketReviews`


<!-- END_bbf30fb7e0fd3a34b588ed220c85af92 -->

<!-- START_f5a1fb45099c2a7ef1e0abc665fa69b1 -->
## Show the form for creating a new MarketReview.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/marketReviews/create" 
```

```javascript
const url = new URL("http://localhost:8080/marketReviews/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET marketReviews/create`


<!-- END_f5a1fb45099c2a7ef1e0abc665fa69b1 -->

<!-- START_e3a689ecbfc24801c79bb5f1ab04a804 -->
## Store a newly created MarketReview in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/marketReviews" 
```

```javascript
const url = new URL("http://localhost:8080/marketReviews");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST marketReviews`


<!-- END_e3a689ecbfc24801c79bb5f1ab04a804 -->

<!-- START_30c552dc781dd3ec714d2e8850fd5c76 -->
## Show the form for editing the specified MarketReview.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/marketReviews/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/marketReviews/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET marketReviews/{marketReview}/edit`


<!-- END_30c552dc781dd3ec714d2e8850fd5c76 -->

<!-- START_8f856a72e9202cdbfbfb4520f1d92438 -->
## Update the specified MarketReview in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/marketReviews/1" 
```

```javascript
const url = new URL("http://localhost:8080/marketReviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT marketReviews/{marketReview}`

`PATCH marketReviews/{marketReview}`


<!-- END_8f856a72e9202cdbfbfb4520f1d92438 -->

<!-- START_72a89b732489596bb2dafc6449435462 -->
## Remove the specified MarketReview from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/marketReviews/1" 
```

```javascript
const url = new URL("http://localhost:8080/marketReviews/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE marketReviews/{marketReview}`


<!-- END_72a89b732489596bb2dafc6449435462 -->

<!-- START_ea8f5c78466776b14fa5e13c4013ab4b -->
## Display a listing of the Favorite.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/favorites" 
```

```javascript
const url = new URL("http://localhost:8080/favorites");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET favorites`


<!-- END_ea8f5c78466776b14fa5e13c4013ab4b -->

<!-- START_66eeedff409d61e0e59d41c592d2e225 -->
## Show the form for creating a new Favorite.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/favorites/create" 
```

```javascript
const url = new URL("http://localhost:8080/favorites/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET favorites/create`


<!-- END_66eeedff409d61e0e59d41c592d2e225 -->

<!-- START_b4d32a9ad1af96835ae3c15fbd0d1170 -->
## Store a newly created Favorite in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/favorites" 
```

```javascript
const url = new URL("http://localhost:8080/favorites");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST favorites`


<!-- END_b4d32a9ad1af96835ae3c15fbd0d1170 -->

<!-- START_6e7c55b07d1b036ff2509a3b60aecec9 -->
## Show the form for editing the specified Favorite.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/favorites/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/favorites/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET favorites/{favorite}/edit`


<!-- END_6e7c55b07d1b036ff2509a3b60aecec9 -->

<!-- START_28746f2e530f817753f272c2dd30cf0c -->
## Update the specified Favorite in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/favorites/1" 
```

```javascript
const url = new URL("http://localhost:8080/favorites/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT favorites/{favorite}`

`PATCH favorites/{favorite}`


<!-- END_28746f2e530f817753f272c2dd30cf0c -->

<!-- START_de0635101d3ce70d1622d21b25d69ac9 -->
## Remove the specified Favorite from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/favorites/1" 
```

```javascript
const url = new URL("http://localhost:8080/favorites/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE favorites/{favorite}`


<!-- END_de0635101d3ce70d1622d21b25d69ac9 -->

<!-- START_b5c3d96b6f223c292187fb2933f21034 -->
## Display a listing of the Order.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orders" 
```

```javascript
const url = new URL("http://localhost:8080/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orders`


<!-- END_b5c3d96b6f223c292187fb2933f21034 -->

<!-- START_56760860f40bdc3b42f7de9b9a006e5e -->
## Show the form for creating a new Order.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orders/create" 
```

```javascript
const url = new URL("http://localhost:8080/orders/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orders/create`


<!-- END_56760860f40bdc3b42f7de9b9a006e5e -->

<!-- START_ec29d74de87750d93ffc5c2316881ba2 -->
## Store a newly created Order in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/orders" 
```

```javascript
const url = new URL("http://localhost:8080/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST orders`


<!-- END_ec29d74de87750d93ffc5c2316881ba2 -->

<!-- START_8ebabf804d4d9c276a852395bcb61678 -->
## Display the specified Order.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orders/{order}`


<!-- END_8ebabf804d4d9c276a852395bcb61678 -->

<!-- START_59fe1ae8219dc0c0c3db197c20b50bd1 -->
## Show the form for editing the specified Order.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/orders/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/orders/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET orders/{order}/edit`


<!-- END_59fe1ae8219dc0c0c3db197c20b50bd1 -->

<!-- START_9144c4cefdb1ada60d895a1766f1710f -->
## Update the specified Order in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT orders/{order}`

`PATCH orders/{order}`


<!-- END_9144c4cefdb1ada60d895a1766f1710f -->

<!-- START_29c8f0bec78089caa3791b727dc038b0 -->
## Remove the specified Order from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/orders/1" 
```

```javascript
const url = new URL("http://localhost:8080/orders/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE orders/{order}`


<!-- END_29c8f0bec78089caa3791b727dc038b0 -->

<!-- START_e4f3f8570b9b48dd1329d9b3eaed5bfc -->
## Display a listing of the Notification.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/notifications" 
```

```javascript
const url = new URL("http://localhost:8080/notifications");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET notifications`


<!-- END_e4f3f8570b9b48dd1329d9b3eaed5bfc -->

<!-- START_bd6868e2be3dab7f27d35ec4c42e37d1 -->
## Display the specified Notification.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET notifications/{notification}`


<!-- END_bd6868e2be3dab7f27d35ec4c42e37d1 -->

<!-- START_56bfe5fda966da4a3f9bf6feee557552 -->
## Remove the specified Notification from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/notifications/1" 
```

```javascript
const url = new URL("http://localhost:8080/notifications/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE notifications/{notification}`


<!-- END_56bfe5fda966da4a3f9bf6feee557552 -->

<!-- START_880eff7bd0508bcbdb81830f6081cea4 -->
## Display a listing of the Cart.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/carts" 
```

```javascript
const url = new URL("http://localhost:8080/carts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET carts`


<!-- END_880eff7bd0508bcbdb81830f6081cea4 -->

<!-- START_123777b78ffe4addd2a78ab893519524 -->
## Show the form for editing the specified Cart.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/carts/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/carts/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET carts/{cart}/edit`


<!-- END_123777b78ffe4addd2a78ab893519524 -->

<!-- START_2130146f3131e7793c530697516f1e57 -->
## Update the specified Cart in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/carts/1" 
```

```javascript
const url = new URL("http://localhost:8080/carts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT carts/{cart}`

`PATCH carts/{cart}`


<!-- END_2130146f3131e7793c530697516f1e57 -->

<!-- START_8d4dd774c269c1c0168e46ee32fe143e -->
## Remove the specified Cart from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/carts/1" 
```

```javascript
const url = new URL("http://localhost:8080/carts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE carts/{cart}`


<!-- END_8d4dd774c269c1c0168e46ee32fe143e -->

<!-- START_603e52d402c4c996cabffcc73a35a64b -->
## Display a listing of the DeliveryAddress.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/deliveryAddresses" 
```

```javascript
const url = new URL("http://localhost:8080/deliveryAddresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET deliveryAddresses`


<!-- END_603e52d402c4c996cabffcc73a35a64b -->

<!-- START_fc68c29ad46df1bc42a3d98478627de5 -->
## Show the form for creating a new DeliveryAddress.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/deliveryAddresses/create" 
```

```javascript
const url = new URL("http://localhost:8080/deliveryAddresses/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET deliveryAddresses/create`


<!-- END_fc68c29ad46df1bc42a3d98478627de5 -->

<!-- START_e65849424f5a2c12d26cc128a6895bb7 -->
## Store a newly created DeliveryAddress in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/deliveryAddresses" 
```

```javascript
const url = new URL("http://localhost:8080/deliveryAddresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST deliveryAddresses`


<!-- END_e65849424f5a2c12d26cc128a6895bb7 -->

<!-- START_ff199f9cc38b69deea07767244ef5f7d -->
## Show the form for editing the specified DeliveryAddress.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/deliveryAddresses/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/deliveryAddresses/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET deliveryAddresses/{deliveryAddress}/edit`


<!-- END_ff199f9cc38b69deea07767244ef5f7d -->

<!-- START_a98d1cf91d7e8380171a493cdef63148 -->
## Update the specified DeliveryAddress in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/deliveryAddresses/1" 
```

```javascript
const url = new URL("http://localhost:8080/deliveryAddresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT deliveryAddresses/{deliveryAddress}`

`PATCH deliveryAddresses/{deliveryAddress}`


<!-- END_a98d1cf91d7e8380171a493cdef63148 -->

<!-- START_43173ddffde690e74a8ad076040dddda -->
## Remove the specified DeliveryAddress from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/deliveryAddresses/1" 
```

```javascript
const url = new URL("http://localhost:8080/deliveryAddresses/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE deliveryAddresses/{deliveryAddress}`


<!-- END_43173ddffde690e74a8ad076040dddda -->

<!-- START_c83976fdf2b714ae0acc9778d06f92ba -->
## Display a listing of the Driver.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/drivers" 
```

```javascript
const url = new URL("http://localhost:8080/drivers");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET drivers`


<!-- END_c83976fdf2b714ae0acc9778d06f92ba -->

<!-- START_6865a4688911a578bf575650be3eb8b6 -->
## Show the form for creating a new Driver.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/drivers/create" 
```

```javascript
const url = new URL("http://localhost:8080/drivers/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET drivers/create`


<!-- END_6865a4688911a578bf575650be3eb8b6 -->

<!-- START_3a458b380643646b38c6f74839231049 -->
## Store a newly created Driver in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/drivers" 
```

```javascript
const url = new URL("http://localhost:8080/drivers");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST drivers`


<!-- END_3a458b380643646b38c6f74839231049 -->

<!-- START_02047b1dae746e2c33a57bcdef7d9957 -->
## Show the form for editing the specified Driver.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/drivers/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/drivers/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET drivers/{driver}/edit`


<!-- END_02047b1dae746e2c33a57bcdef7d9957 -->

<!-- START_bfebf28526771024c0310c3bbf5440b7 -->
## Update the specified Driver in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/drivers/1" 
```

```javascript
const url = new URL("http://localhost:8080/drivers/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT drivers/{driver}`

`PATCH drivers/{driver}`


<!-- END_bfebf28526771024c0310c3bbf5440b7 -->

<!-- START_9ce4c690029212669969217ec9a6c98d -->
## Remove the specified Driver from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/drivers/1" 
```

```javascript
const url = new URL("http://localhost:8080/drivers/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE drivers/{driver}`


<!-- END_9ce4c690029212669969217ec9a6c98d -->

<!-- START_8717fdd0879decb421522e48177e2afe -->
## Display a listing of the Earning.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/earnings" 
```

```javascript
const url = new URL("http://localhost:8080/earnings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET earnings`


<!-- END_8717fdd0879decb421522e48177e2afe -->

<!-- START_aa7c8c5358d4fa843ec3962b71125a4e -->
## Show the form for creating a new Earning.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/earnings/create" 
```

```javascript
const url = new URL("http://localhost:8080/earnings/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET earnings/create`


<!-- END_aa7c8c5358d4fa843ec3962b71125a4e -->

<!-- START_6fe23d824d57eca6bb48c8441a661f1f -->
## Store a newly created Earning in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/earnings" 
```

```javascript
const url = new URL("http://localhost:8080/earnings");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST earnings`


<!-- END_6fe23d824d57eca6bb48c8441a661f1f -->

<!-- START_c96df4836e18a2095ea7b988a0098edd -->
## Remove the specified Earning from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/earnings/1" 
```

```javascript
const url = new URL("http://localhost:8080/earnings/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE earnings/{earning}`


<!-- END_c96df4836e18a2095ea7b988a0098edd -->

<!-- START_d67bc0ba4693be483fe45f8cfebf555f -->
## Display a listing of the DriversPayout.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/driversPayouts" 
```

```javascript
const url = new URL("http://localhost:8080/driversPayouts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET driversPayouts`


<!-- END_d67bc0ba4693be483fe45f8cfebf555f -->

<!-- START_3cbff9f9da33ecac3f98ece487f21f30 -->
## Show the form for creating a new DriversPayout.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/driversPayouts/create" 
```

```javascript
const url = new URL("http://localhost:8080/driversPayouts/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET driversPayouts/create`


<!-- END_3cbff9f9da33ecac3f98ece487f21f30 -->

<!-- START_a32d7d56def9c46eaed487fbc7d5890b -->
## Store a newly created DriversPayout in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/driversPayouts" 
```

```javascript
const url = new URL("http://localhost:8080/driversPayouts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST driversPayouts`


<!-- END_a32d7d56def9c46eaed487fbc7d5890b -->

<!-- START_0918f1dcb235540aeb619fc5725a3d89 -->
## Remove the specified DriversPayout from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/driversPayouts/1" 
```

```javascript
const url = new URL("http://localhost:8080/driversPayouts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE driversPayouts/{driversPayout}`


<!-- END_0918f1dcb235540aeb619fc5725a3d89 -->

<!-- START_967cac6483de4b669037471b5e0295b2 -->
## Display a listing of the MarketsPayout.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/marketsPayouts" 
```

```javascript
const url = new URL("http://localhost:8080/marketsPayouts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET marketsPayouts`


<!-- END_967cac6483de4b669037471b5e0295b2 -->

<!-- START_7a79d34346a8bb2a1133abcc8567efd7 -->
## Show the form for creating a new MarketsPayout.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/marketsPayouts/create" 
```

```javascript
const url = new URL("http://localhost:8080/marketsPayouts/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET marketsPayouts/create`


<!-- END_7a79d34346a8bb2a1133abcc8567efd7 -->

<!-- START_c59ec8d58621513258fe1e4a45420696 -->
## Store a newly created MarketsPayout in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/marketsPayouts" 
```

```javascript
const url = new URL("http://localhost:8080/marketsPayouts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST marketsPayouts`


<!-- END_c59ec8d58621513258fe1e4a45420696 -->

<!-- START_a314dfd5064bcbf307b6f2344c37416a -->
## Remove the specified MarketsPayout from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/marketsPayouts/1" 
```

```javascript
const url = new URL("http://localhost:8080/marketsPayouts/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE marketsPayouts/{marketsPayout}`


<!-- END_a314dfd5064bcbf307b6f2344c37416a -->

<!-- START_ee4e0d057cb16d16478d9795c0c22dd0 -->
## Display a listing of the OptionGroup.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/optionGroups" 
```

```javascript
const url = new URL("http://localhost:8080/optionGroups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET optionGroups`


<!-- END_ee4e0d057cb16d16478d9795c0c22dd0 -->

<!-- START_8f910ba181c12526071218f58b57f2b3 -->
## Show the form for creating a new OptionGroup.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/optionGroups/create" 
```

```javascript
const url = new URL("http://localhost:8080/optionGroups/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET optionGroups/create`


<!-- END_8f910ba181c12526071218f58b57f2b3 -->

<!-- START_2dc43e43cf750730cf85f92a48ea0059 -->
## Store a newly created OptionGroup in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/optionGroups" 
```

```javascript
const url = new URL("http://localhost:8080/optionGroups");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST optionGroups`


<!-- END_2dc43e43cf750730cf85f92a48ea0059 -->

<!-- START_7ad1bd2e4c0a29ec520eb48ea62b1704 -->
## Show the form for editing the specified OptionGroup.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/optionGroups/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/optionGroups/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET optionGroups/{optionGroup}/edit`


<!-- END_7ad1bd2e4c0a29ec520eb48ea62b1704 -->

<!-- START_2b1e306c6edaa912f8b8839b3b6ba175 -->
## Update the specified OptionGroup in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/optionGroups/1" 
```

```javascript
const url = new URL("http://localhost:8080/optionGroups/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT optionGroups/{optionGroup}`

`PATCH optionGroups/{optionGroup}`


<!-- END_2b1e306c6edaa912f8b8839b3b6ba175 -->

<!-- START_ec3ccb50610fbeec0e3d86c9210f074d -->
## Remove the specified OptionGroup from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/optionGroups/1" 
```

```javascript
const url = new URL("http://localhost:8080/optionGroups/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE optionGroups/{optionGroup}`


<!-- END_ec3ccb50610fbeec0e3d86c9210f074d -->

<!-- START_f537a493de3770615b9f7e13b36c367d -->
## Display a listing of the Option.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/options" 
```

```javascript
const url = new URL("http://localhost:8080/options");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET options`


<!-- END_f537a493de3770615b9f7e13b36c367d -->

<!-- START_e5402ca780ca589b5eec70c4509f5edc -->
## Show the form for creating a new Option.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/options/create" 
```

```javascript
const url = new URL("http://localhost:8080/options/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET options/create`


<!-- END_e5402ca780ca589b5eec70c4509f5edc -->

<!-- START_b05973a060f0b6814f7765efa35ed01f -->
## Store a newly created Option in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/options" 
```

```javascript
const url = new URL("http://localhost:8080/options");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST options`


<!-- END_b05973a060f0b6814f7765efa35ed01f -->

<!-- START_c1be5e0f11064131b14dea5f7d7af31a -->
## Show the form for editing the specified Option.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/options/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/options/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET options/{option}/edit`


<!-- END_c1be5e0f11064131b14dea5f7d7af31a -->

<!-- START_ff02a02fa1a053c0fd105ba3256402d2 -->
## Update the specified Option in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/options/1" 
```

```javascript
const url = new URL("http://localhost:8080/options/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT options/{option}`

`PATCH options/{option}`


<!-- END_ff02a02fa1a053c0fd105ba3256402d2 -->

<!-- START_2ce0143c5151cf370ff219bff862e366 -->
## Remove the specified Option from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/options/1" 
```

```javascript
const url = new URL("http://localhost:8080/options/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE options/{option}`


<!-- END_2ce0143c5151cf370ff219bff862e366 -->

<!-- START_1d4104a9cae057bff93df57c989a2d01 -->
## Display a listing of the Coupon.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/coupons" 
```

```javascript
const url = new URL("http://localhost:8080/coupons");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET coupons`


<!-- END_1d4104a9cae057bff93df57c989a2d01 -->

<!-- START_d66512edff385889e69f543336dfd928 -->
## Show the form for creating a new Coupon.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/coupons/create" 
```

```javascript
const url = new URL("http://localhost:8080/coupons/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET coupons/create`


<!-- END_d66512edff385889e69f543336dfd928 -->

<!-- START_9c60a5f5983529086cb8d2e86de4e57c -->
## Store a newly created Coupon in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/coupons" 
```

```javascript
const url = new URL("http://localhost:8080/coupons");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST coupons`


<!-- END_9c60a5f5983529086cb8d2e86de4e57c -->

<!-- START_2cc060a5ce83a7b069913c99a44cdd1d -->
## Show the form for editing the specified Coupon.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/coupons/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/coupons/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET coupons/{coupon}/edit`


<!-- END_2cc060a5ce83a7b069913c99a44cdd1d -->

<!-- START_3e47642811231685ae4c9f70279492a1 -->
## Update the specified Coupon in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/coupons/1" 
```

```javascript
const url = new URL("http://localhost:8080/coupons/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT coupons/{coupon}`

`PATCH coupons/{coupon}`


<!-- END_3e47642811231685ae4c9f70279492a1 -->

<!-- START_45a54eb8feded1e8f5c2a0f3d25adf67 -->
## Remove the specified Coupon from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/coupons/1" 
```

```javascript
const url = new URL("http://localhost:8080/coupons/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE coupons/{coupon}`


<!-- END_45a54eb8feded1e8f5c2a0f3d25adf67 -->

<!-- START_9281d892de1aa0f43859166976f959eb -->
## Remove Media of Slide

> Example request:

```bash
curl -X POST "http://localhost:8080/slides/remove-media" 
```

```javascript
const url = new URL("http://localhost:8080/slides/remove-media");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST slides/remove-media`


<!-- END_9281d892de1aa0f43859166976f959eb -->

<!-- START_213d5c1ccf8274a48d9967d1f249b670 -->
## Display a listing of the Slide.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/slides" 
```

```javascript
const url = new URL("http://localhost:8080/slides");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET slides`


<!-- END_213d5c1ccf8274a48d9967d1f249b670 -->

<!-- START_ed00f6b9cedb141475a6f8382e125f49 -->
## Show the form for creating a new Slide.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/slides/create" 
```

```javascript
const url = new URL("http://localhost:8080/slides/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET slides/create`


<!-- END_ed00f6b9cedb141475a6f8382e125f49 -->

<!-- START_f152184cff9a546a0ab1553a95ae2b12 -->
## Store a newly created Slide in storage.

> Example request:

```bash
curl -X POST "http://localhost:8080/slides" 
```

```javascript
const url = new URL("http://localhost:8080/slides");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST slides`


<!-- END_f152184cff9a546a0ab1553a95ae2b12 -->

<!-- START_d2e9e9976dc0adaa6ae4e021b2e2c8b6 -->
## Show the form for editing the specified Slide.

> Example request:

```bash
curl -X GET -G "http://localhost:8080/slides/1/edit" 
```

```javascript
const url = new URL("http://localhost:8080/slides/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET slides/{slide}/edit`


<!-- END_d2e9e9976dc0adaa6ae4e021b2e2c8b6 -->

<!-- START_d8cc5ec2be455950a37479722cc57cac -->
## Update the specified Slide in storage.

> Example request:

```bash
curl -X PUT "http://localhost:8080/slides/1" 
```

```javascript
const url = new URL("http://localhost:8080/slides/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT slides/{slide}`

`PATCH slides/{slide}`


<!-- END_d8cc5ec2be455950a37479722cc57cac -->

<!-- START_02b1a956538933db9840473fd1a93af8 -->
## Remove the specified Slide from storage.

> Example request:

```bash
curl -X DELETE "http://localhost:8080/slides/1" 
```

```javascript
const url = new URL("http://localhost:8080/slides/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE slides/{slide}`


<!-- END_02b1a956538933db9840473fd1a93af8 -->


