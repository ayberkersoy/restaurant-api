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
[Get Postman Collection](http://api.maycreator.com/docs/collection.json)

<!-- END_INFO -->

#Campaign Management

APIs for managing campaigns
<!-- START_921cbb74b619293232d4ec538cf50e7b -->
## Index all campaigns

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/campaigns" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Bu hafta ürünlerde %10 indirim!",
    "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`GET api/campaigns`


<!-- END_921cbb74b619293232d4ec538cf50e7b -->

<!-- START_13d0cb6ab5f840a15171cac542b44614 -->
## Show specific campaign

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/campaigns/{campaign}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns/{campaign}");

    let params = {
            "id": "0Ja8oEBmjrMzw3vg",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Bu hafta ürünlerde %10 indirim!",
    "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`GET api/campaigns/{campaign}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the campaign.

<!-- END_13d0cb6ab5f840a15171cac542b44614 -->

<!-- START_63db4deeeed886c876501f95fc3c3931 -->
## Create a new campaign

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/campaigns" \
    -H "Content-Type: application/json" \
    -d '{"name":"DRDuYXoczDw1N43B","description":"aOisMT8OLsE0clYJ","image_url":"KEWWmWQgP5ds1xyw"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "DRDuYXoczDw1N43B",
    "description": "aOisMT8OLsE0clYJ",
    "image_url": "KEWWmWQgP5ds1xyw"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Bu hafta ürünlerde %10 indirim!",
    "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`POST api/campaigns`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the campaign.
    description | string |  required  | The description of the campaign.
    image_url | file |  required  | The image of the campaign.

<!-- END_63db4deeeed886c876501f95fc3c3931 -->

<!-- START_036f5d300b9f9a6a1875defb4be628af -->
## Update specific campaign

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/campaigns/{campaign}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"IX5K5gsNE3RpqQbL","description":"NJt2G0imvucDnrUV","image_url":"fNn6zVhz1S5sGR05"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns/{campaign}");

    let params = {
            "id": "8YLOOjFTYUNs58NF",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "IX5K5gsNE3RpqQbL",
    "description": "NJt2G0imvucDnrUV",
    "image_url": "fNn6zVhz1S5sGR05"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "name": "Bu hafta ürünlerde %10 indirim!",
    "description": "Haftanın her günü 13:00-15:00 arası ana yemek kategorisindeki bütün ürünler %10 indirimli!",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`POST api/campaigns/{campaign}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the campaign.
    name | string |  required  | The name of the campaign.
    description | string |  required  | The description of the campaign.
    image_url | file |  required  | The image of the campaign.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the campaign.

<!-- END_036f5d300b9f9a6a1875defb4be628af -->

<!-- START_b9bc16cc5f70ad5203739ace06c9807e -->
## Delete specific campaign

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/campaigns/{campaign}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns/{campaign}/destroy");

    let params = {
            "id": "nlmI4f2jQuC79Av8",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/campaigns/{campaign}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the campaign.

<!-- END_b9bc16cc5f70ad5203739ace06c9807e -->

#Category Management

APIs for managing categories
<!-- START_109013899e0bc43247b0f00b67f889cf -->
## Index all categories

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/categories" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/categories");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Tatlılar",
    "description": "Birbirinden lezzetli tatlılarımız",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`GET api/categories`


<!-- END_109013899e0bc43247b0f00b67f889cf -->

<!-- START_34925c1e31e7ecc53f8f52c8b1e91d44 -->
## Show specific category

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/categories/{category}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/categories/{category}");

    let params = {
            "id": "X8m9uTiC4gs7eFPZ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Tatlılar",
    "description": "Birbirinden lezzetli tatlılarımız",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`GET api/categories/{category}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the category.

<!-- END_34925c1e31e7ecc53f8f52c8b1e91d44 -->

<!-- START_2335abbed7f782ea7d7dd6df9c738d74 -->
## Create a new category

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/categories" \
    -H "Content-Type: application/json" \
    -d '{"name":"zgRMf8TF0T8Wm4Ij","description":"joTuNYJmB1hysMhK","image_url":"jM2EGUmlvwFHvSA5"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/categories");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "zgRMf8TF0T8Wm4Ij",
    "description": "joTuNYJmB1hysMhK",
    "image_url": "jM2EGUmlvwFHvSA5"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Tatlılar",
    "description": "Birbirinden lezzetli tatlılarımız",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`POST api/categories`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the category.
    description | string |  required  | The description of the category.
    image_url | file |  required  | The image of the category.

<!-- END_2335abbed7f782ea7d7dd6df9c738d74 -->

<!-- START_d3b39e9aa0cd07cb781d58951bb7ff87 -->
## Update specific category

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/categories/{category}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"SaPpWkvAnv4m2pUs","description":"ohhx6F71IHKp2fDR","image_url":"fbqYZlotwGuPEu8l"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/categories/{category}");

    let params = {
            "id": "zTOqiOsOJe60os17",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "SaPpWkvAnv4m2pUs",
    "description": "ohhx6F71IHKp2fDR",
    "image_url": "fbqYZlotwGuPEu8l"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "name": "Tatlılar",
    "description": "Birbirinden lezzetli tatlılarımız",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`POST api/categories/{category}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the category.
    name | string |  required  | The name of the category.
    description | string |  required  | The description of the category.
    image_url | file |  required  | The image of the category.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the category.

<!-- END_d3b39e9aa0cd07cb781d58951bb7ff87 -->

<!-- START_b7a0a2decc3b1bce3ba7d05c6ffff124 -->
## Delete specific category

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/categories/{category}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/categories/{category}/destroy");

    let params = {
            "id": "vhX7mF3UVPLjNttF",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/categories/{category}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the category.

<!-- END_b7a0a2decc3b1bce3ba7d05c6ffff124 -->

#Comment Management

APIs for managing comments
<!-- START_38702aa9c6f225b36ff53e89358992ea -->
## Index all comments

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/comments" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/comments");

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

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/comments`


<!-- END_38702aa9c6f225b36ff53e89358992ea -->

<!-- START_269ffb3df7dcc5ae9ed5de70f1a30ef3 -->
## Show specific comment

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/comments/{comment}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/comments/{comment}");

    let params = {
            "id": "mYDFMhhLEukap4XG",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/comments/{comment}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the comment.

<!-- END_269ffb3df7dcc5ae9ed5de70f1a30ef3 -->

<!-- START_6c560cb463cae69ddba197afa896608b -->
## Create a new comment

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/comments" \
    -H "Content-Type: application/json" \
    -d '{"user_id":16,"product_id":16,"comment":"NQ6pAgIT482QkI4t","stars":0.6418}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/comments");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 16,
    "product_id": 16,
    "comment": "NQ6pAgIT482QkI4t",
    "stars": 0.6418
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/comments`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | The id of the user.
    product_id | integer |  required  | The id of the product.
    comment | string |  required  | The content of the comment.
    stars | float |  required  | The stars of the comment.

<!-- END_6c560cb463cae69ddba197afa896608b -->

<!-- START_60efda4375ad180bf595162107db4782 -->
## Update specific comment

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/comments/{comment}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"user_id":16,"product_id":1,"comment":"Vf9fWMCVF59kEreg","stars":36827.8311}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/comments/{comment}");

    let params = {
            "id": "thbNVg2aqeQc2cKa",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "user_id": 16,
    "product_id": 1,
    "comment": "Vf9fWMCVF59kEreg",
    "stars": 36827.8311
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/comments/{comment}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the category.
    user_id | integer |  required  | The id of the user.
    product_id | integer |  required  | The id of the product.
    comment | string |  required  | The content of the comment.
    stars | float |  required  | The stars of the comment.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the comment.

<!-- END_60efda4375ad180bf595162107db4782 -->

<!-- START_a4439bf1997dbcbf12a01b8b83031a2a -->
## Delete specific comment

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/comments/{comment}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/comments/{comment}/destroy");

    let params = {
            "id": "FdaV1sCtyocKDneF",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/comments/{comment}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the comment.

<!-- END_a4439bf1997dbcbf12a01b8b83031a2a -->

<!-- START_3f67898f85c19ca7744fb35829e22934 -->
## Homepage reviews

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/getReviews" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/getReviews");

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

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "product_id": 1,
    "comment": "Yemekler, hizmet her şey harikaydı.",
    "stars": "4",
    "user": {
        "id": 1,
        "name": "Ayberk",
        "surname": "Ersoy",
        "email": "ayberkersoy@gmail.com",
        "email_verified_at": null,
        "avatar": "https:\/\/via.placeholder.com\/300x300",
        "status": "user",
        "created_at": "2018-12-27 11:18:38",
        "updated_at": "2018-12-27 11:18:38"
    }
}
```

### HTTP Request
`GET api/getReviews`


<!-- END_3f67898f85c19ca7744fb35829e22934 -->

#Company Management

APIs for managing companies
<!-- START_83764a2de1a941a0a3cbae52bba9776e -->
## Index all companies

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/companies" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/companies");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Bosphorus Tech",
    "slug": "bosphorus-tech",
    "address": "Yenisehir mah. Osmanli blv. No: 5\/B Arwen Ofis D: 51 Pendik\/Istanbul",
    "phone": "2164823125",
    "logo": "https:\/\/via.placeholder.com\/300x100",
    "working_hours_day": "10:00",
    "working_hours_night": "23:00",
    "facebook": "https:\/\/facebook.com\/bosphorus-tech",
    "twitter": "https:\/\/twitter.com\/bosphorustech",
    "instagram": "https:\/\/instagram.com\/bosphorustech",
    "about_text": "ABOUT US",
    "about_image": "https:\/\/via.placeholder.com\/500x300",
    "locationx": "40.928010",
    "locationy": "29.309073"
}
```

### HTTP Request
`GET api/companies`


<!-- END_83764a2de1a941a0a3cbae52bba9776e -->

<!-- START_b4015228dd0e0c0b6a959ebaf0865a05 -->
## Show specific company

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/companies/{company}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/companies/{company}");

    let params = {
            "id": "Vrtfs5rM1JfPL3lo",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Bosphorus Tech",
    "slug": "bosphorus-tech",
    "address": "Yenisehir mah. Osmanli blv. No: 5\/B Arwen Ofis D: 51 Pendik\/Istanbul",
    "phone": "2164823125",
    "logo": "https:\/\/via.placeholder.com\/300x100",
    "working_hours_day": "10:00",
    "working_hours_night": "23:00",
    "facebook": "https:\/\/facebook.com\/bosphorus-tech",
    "twitter": "https:\/\/twitter.com\/bosphorustech",
    "instagram": "https:\/\/instagram.com\/bosphorustech",
    "about_text": "ABOUT US",
    "about_image": "https:\/\/via.placeholder.com\/500x300",
    "locationx": "40.928010",
    "locationy": "29.309073"
}
```

### HTTP Request
`GET api/companies/{company}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the company.

<!-- END_b4015228dd0e0c0b6a959ebaf0865a05 -->

<!-- START_a242a34f0abd359a9196226970606774 -->
## Create a new company

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/companies" \
    -H "Content-Type: application/json" \
    -d '{"name":"X71GaFUP46zCiUeK","address":"ZQUwXuTarPNhqznz","phone":"7PCH1so3IQydtUWD","logo":"M9ZbwlrIULe6Gp8H","working_hours_day":"sbHZkWjnBtr3dHFe","working_hours_night":"CCw2GE16E9g1BO3P","facebook":"nB6Cjr0qH1m8Lbky","twitter":"q9rWbDtYwLhq4sU9","instagram":"bvl3gwjpTSMUXze7","about_text":"iL1xSUgmSkA3VUMa","about_image":"HojYPg3RpO44Gd5a","locationy":"IVImiI8lYEQq5RuY","locationx":"axBhab23mmN0MYen"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/companies");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "X71GaFUP46zCiUeK",
    "address": "ZQUwXuTarPNhqznz",
    "phone": "7PCH1so3IQydtUWD",
    "logo": "M9ZbwlrIULe6Gp8H",
    "working_hours_day": "sbHZkWjnBtr3dHFe",
    "working_hours_night": "CCw2GE16E9g1BO3P",
    "facebook": "nB6Cjr0qH1m8Lbky",
    "twitter": "q9rWbDtYwLhq4sU9",
    "instagram": "bvl3gwjpTSMUXze7",
    "about_text": "iL1xSUgmSkA3VUMa",
    "about_image": "HojYPg3RpO44Gd5a",
    "locationy": "IVImiI8lYEQq5RuY",
    "locationx": "axBhab23mmN0MYen"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Bosphorus Tech",
    "slug": "bosphorus-tech",
    "address": "Yenisehir mah. Osmanli blv. No: 5\/B Arwen Ofis D: 51 Pendik\/Istanbul",
    "phone": "2164823125",
    "logo": "https:\/\/via.placeholder.com\/300x100",
    "working_hours_day": "10:00",
    "working_hours_night": "23:00",
    "facebook": "https:\/\/facebook.com\/bosphorus-tech",
    "twitter": "https:\/\/twitter.com\/bosphorustech",
    "instagram": "https:\/\/instagram.com\/bosphorustech",
    "about_text": "ABOUT US",
    "about_image": "https:\/\/via.placeholder.com\/500x300",
    "locationx": "40.928010",
    "locationy": "29.309073"
}
```

### HTTP Request
`POST api/companies`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the company.
    address | string |  optional  | optional The address of the company.
    phone | string |  required  | The phone of the company.
    logo | file |  required  | The image of the company.
    working_hours_day | string |  optional  | optional The image of the company.
    working_hours_night | string |  optional  | optional The image of the company.
    facebook | string |  optional  | optional The facebook of the company.
    twitter | string |  optional  | optional The twitter of the company.
    instagram | string |  optional  | optional The instagram of the company.
    about_text | string |  optional  | optional The about text of the company.
    about_image | string |  optional  | optional The about image of the company.
    locationy | string |  optional  | optional The longitude of the company.
    locationx | string |  optional  | optional The latitude of the company.

<!-- END_a242a34f0abd359a9196226970606774 -->

<!-- START_c1544273f6db9c57f9efc7b22b91a011 -->
## Update specific company

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/companies/{company}" \
    -H "Content-Type: application/json" \
    -d '{"name":"gQbwkWDYSFm7VKWU","address":"NXrBUojL5GjlCb2N","phone":"mWNs6Ja0ls90pCfX","logo":"GlWxBvheuurBkgqR","working_hours_day":"8Fdi12ZQgsBL6KqI","working_hours_night":"mBsdZ4OkdzFvUDNC","facebook":"TYgiPcrbTHeDvMiz","twitter":"2VFvnA01hGqBjKpB","instagram":"X2BRvBC01QCVFcLY","about_text":"SPktSREfAFR8YlIl","about_image":"IYhdkC1pkLlGEGev","locationy":"EYY9LkV84r5GmK8e","locationx":"a4pvUZCtuqdfFHrM"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/companies/{company}");

    let params = {
            "id": "33FezQCmHsxaSMuv",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "gQbwkWDYSFm7VKWU",
    "address": "NXrBUojL5GjlCb2N",
    "phone": "mWNs6Ja0ls90pCfX",
    "logo": "GlWxBvheuurBkgqR",
    "working_hours_day": "8Fdi12ZQgsBL6KqI",
    "working_hours_night": "mBsdZ4OkdzFvUDNC",
    "facebook": "TYgiPcrbTHeDvMiz",
    "twitter": "2VFvnA01hGqBjKpB",
    "instagram": "X2BRvBC01QCVFcLY",
    "about_text": "SPktSREfAFR8YlIl",
    "about_image": "IYhdkC1pkLlGEGev",
    "locationy": "EYY9LkV84r5GmK8e",
    "locationx": "a4pvUZCtuqdfFHrM"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Bosphorus Tech",
    "slug": "bosphorus-tech",
    "address": "Yenisehir mah. Osmanli blv. No: 5\/B Arwen Ofis D: 51 Pendik\/Istanbul",
    "phone": "2164823125",
    "logo": "https:\/\/via.placeholder.com\/300x100",
    "working_hours_day": "10:00",
    "working_hours_night": "23:00",
    "facebook": "https:\/\/facebook.com\/bosphorus-tech",
    "twitter": "https:\/\/twitter.com\/bosphorustech",
    "instagram": "https:\/\/instagram.com\/bosphorustech",
    "about_text": "ABOUT US",
    "about_image": "https:\/\/via.placeholder.com\/500x300",
    "locationx": "40.928010",
    "locationy": "29.309073"
}
```

### HTTP Request
`POST api/companies/{company}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the company.
    address | string |  optional  | optional The address of the company.
    phone | string |  required  | The phone of the company.
    logo | file |  required  | The image of the company.
    working_hours_day | string |  optional  | optional The image of the company.
    working_hours_night | string |  optional  | optional The image of the company.
    facebook | string |  optional  | optional The facebook of the company.
    twitter | string |  optional  | optional The twitter of the company.
    instagram | string |  optional  | optional The instagram of the company.
    about_text | string |  optional  | optional The about text of the company.
    about_image | string |  optional  | optional The about image of the company.
    locationy | string |  optional  | optional The longitude of the company.
    locationx | string |  optional  | optional The latitude of the company.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the company.

<!-- END_c1544273f6db9c57f9efc7b22b91a011 -->

<!-- START_26a737ce557cbc4c2fcc46687fc67821 -->
## Delete specific company

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/companies/{company}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/companies/{company}/destroy");

    let params = {
            "id": "cF8DqUPxkLFYJJ4Z",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/companies/{company}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the company.

<!-- END_26a737ce557cbc4c2fcc46687fc67821 -->

<!-- START_5f3898135a2440dac1639f3eb8958a97 -->
## Get company

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/getCompany" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/getCompany");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Bosphorus Tech",
    "slug": "bosphorus-tech",
    "address": "Yenisehir mah. Osmanli blv. No: 5\/B Arwen Ofis D: 51 Pendik\/Istanbul",
    "phone": "2164823125",
    "logo": "https:\/\/via.placeholder.com\/300x100",
    "working_hours_day": "10:00",
    "working_hours_night": "23:00",
    "facebook": "https:\/\/facebook.com\/bosphorus-tech",
    "twitter": "https:\/\/twitter.com\/bosphorustech",
    "instagram": "https:\/\/instagram.com\/bosphorustech",
    "about_text": "ABOUT US",
    "about_image": "https:\/\/via.placeholder.com\/500x300",
    "locationx": "40.928010",
    "locationy": "29.309073"
}
```

### HTTP Request
`GET api/getCompany`


<!-- END_5f3898135a2440dac1639f3eb8958a97 -->

#Employee Management

APIs for managing employees
<!-- START_bbf5f53764a43af9eab11504db0c39b5 -->
## Index all employees

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/employees" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/employees");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Ali",
    "surname": "Usta",
    "description": "Dünya mutfağında uzman şefimiz.",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`GET api/employees`


<!-- END_bbf5f53764a43af9eab11504db0c39b5 -->

<!-- START_cd1327e6928a67fc015a065d74fc9065 -->
## Show specific category

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/employees/{employee}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/employees/{employee}");

    let params = {
            "id": "2vMrk8pqlOIpuMG1",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Ali",
    "surname": "Usta",
    "description": "Dünya mutfağında uzman şefimiz.",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`GET api/employees/{employee}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the employee.

<!-- END_cd1327e6928a67fc015a065d74fc9065 -->

<!-- START_42af3d8d5862fde3052509cbae29451c -->
## Create a new employee

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/employees" \
    -H "Content-Type: application/json" \
    -d '{"name":"nrqP7HJQZmO4xeFE","surname":"Rie26PicWuap9ZzK","description":"jcObRgLzBTWKOPiV","image_url":"AnY2ZRzI6rGtL0I0"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/employees");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "nrqP7HJQZmO4xeFE",
    "surname": "Rie26PicWuap9ZzK",
    "description": "jcObRgLzBTWKOPiV",
    "image_url": "AnY2ZRzI6rGtL0I0"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Ali",
    "surname": "Usta",
    "description": "Dünya mutfağında uzman şefimiz.",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`POST api/employees`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the employee.
    surname | string |  required  | The surname of the employee.
    description | string |  required  | The description of the employee.
    image_url | file |  required  | The image of the employee.

<!-- END_42af3d8d5862fde3052509cbae29451c -->

<!-- START_29ff8f72fbf8fee58c6a76feee168b45 -->
## Update specific employee

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/employees/{employee}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"RczHEkjRqKdLDWdB","surname":"KElHqoXTO7ee0Fc2","description":"oxERCOXe8lWr2sIe","image_url":"31pF84OHEFx1kkKa"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/employees/{employee}");

    let params = {
            "id": "tog8Yi4JEtwTBLr7",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "RczHEkjRqKdLDWdB",
    "surname": "KElHqoXTO7ee0Fc2",
    "description": "oxERCOXe8lWr2sIe",
    "image_url": "31pF84OHEFx1kkKa"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "name": "Ali",
    "surname": "Usta",
    "description": "Dünya mutfağında uzman şefimiz.",
    "image_url": "https:\/\/via.placeholder.com\/500x300"
}
```

### HTTP Request
`POST api/employees/{employee}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the category.
    name | string |  required  | The name of the employee.
    surname | string |  required  | The surname of the employee.
    description | string |  required  | The description of the employee.
    image_url | file |  required  | The image of the employee.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the employee.

<!-- END_29ff8f72fbf8fee58c6a76feee168b45 -->

<!-- START_97c36d94da51d33eea24a49fe79b685f -->
## Delete specific employee

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/employees/{employee}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/employees/{employee}/destroy");

    let params = {
            "id": "SQ6XPb2LcfTY0StR",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/employees/{employee}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the employee.

<!-- END_97c36d94da51d33eea24a49fe79b685f -->

#Favourite Management

APIs for managing favourites
<!-- START_96eef668fd04658a62a9de771c466380 -->
## Create a new favourite

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/favourites" \
    -H "Content-Type: application/json" \
    -d '{"user_id":4,"product_id":2}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/favourites");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 4,
    "product_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/favourites`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | The id of the user.
    product_id | integer |  required  | The id of the product.

<!-- END_96eef668fd04658a62a9de771c466380 -->

<!-- START_5c4d21a1308649e5518b8c9b76f04f0b -->
## Delete specific favourite

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/favourites/{product}/{user}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/favourites/{product}/{user}/destroy");

    let params = {
            "product_id": "KLQDuQyEtZko6sgQ",
            "user_id": "HhtVnFMCyISlIArn",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/favourites/{product}/{user}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    product_id |  required  | The id of the product.
    user_id |  required  | The id of the user.

<!-- END_5c4d21a1308649e5518b8c9b76f04f0b -->

#Message Management

APIs for managing messages
<!-- START_c61e9c2b3fdeea56ee207c8db3d88546 -->
## Index all messages

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/messages" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/messages");

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

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/messages`


<!-- END_c61e9c2b3fdeea56ee207c8db3d88546 -->

<!-- START_cef8438938cd56a8a7a685a273a52336 -->
## Show specific message

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/messages/{message}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/messages/{message}");

    let params = {
            "id": "Ec6gyPiRIla2CwEs",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/messages/{message}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the message.

<!-- END_cef8438938cd56a8a7a685a273a52336 -->

<!-- START_35df1f44031ea96b6e03eca6e38ceda7 -->
## Create a new message

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/messages" \
    -H "Content-Type: application/json" \
    -d '{"name":"eQ4zjHaPQaejyLjS","about":"mXGlkGd8Pv0sN99b","message":"Kl1K1Ov9CtPrjyMX","phone":"FWFtMvzrq8tk5GpI"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/messages");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "eQ4zjHaPQaejyLjS",
    "about": "mXGlkGd8Pv0sN99b",
    "message": "Kl1K1Ov9CtPrjyMX",
    "phone": "FWFtMvzrq8tk5GpI"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/messages`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the message.
    about | string |  required  | The about of the message.
    message | string |  required  | The message of the message.
    phone | string |  required  | The phone of the message.

<!-- END_35df1f44031ea96b6e03eca6e38ceda7 -->

<!-- START_f3c26748f7a1c060ac6721486ed68641 -->
## Update specific message

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/messages/{message}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"1HvBrrPMzU71Yhnx","about":"DGkObdaEOX7eWy2k","message":"rgzjOKgzEtoX0CFY","phone":"2SGPoE8b1HnDtDNN"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/messages/{message}");

    let params = {
            "id": "50XjeY9veaueJpIu",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "1HvBrrPMzU71Yhnx",
    "about": "DGkObdaEOX7eWy2k",
    "message": "rgzjOKgzEtoX0CFY",
    "phone": "2SGPoE8b1HnDtDNN"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/messages/{message}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the category.
    name | string |  required  | The name of the message.
    about | string |  required  | The about of the message.
    message | string |  required  | The message of the message.
    phone | string |  required  | The phone of the message.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the message.

<!-- END_f3c26748f7a1c060ac6721486ed68641 -->

<!-- START_8482fbb65ea13134d6870c69b27b71a9 -->
## Delete specific message

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/messages/{message}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/messages/{message}/destroy");

    let params = {
            "id": "J74r2sgO6pJg4wyY",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/messages/{message}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the message.

<!-- END_8482fbb65ea13134d6870c69b27b71a9 -->

#Order Management

APIs for managing orders
<!-- START_f9301c03a9281c0847565f96e6f723de -->
## Index all orders

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/orders" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/orders");

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

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/orders`


<!-- END_f9301c03a9281c0847565f96e6f723de -->

<!-- START_7e6be1b9dd04564a7b1298dd260f3183 -->
## Show specific order

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/orders/{order}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/orders/{order}");

    let params = {
            "id": "jWQjQ0H4Iyu1Koh5",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/orders/{order}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the order.

<!-- END_7e6be1b9dd04564a7b1298dd260f3183 -->

<!-- START_285c87403b6cfdebe26bc357f22e870f -->
## Create a new order

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/orders" \
    -H "Content-Type: application/json" \
    -d '{"user_id":9,"user_contact_id":1,"status":18,"price":"5VKdao7d8ykD9lkw","note":"rGyB4OGmQl7Df8mb","date_ordered":"WRmfN54fgu7eUCka","currency":"uYuiMHzI99jA4bcn","payment_type_id":15,"products":"vYQCgXN7azFAmavF","piece":11}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/orders");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 9,
    "user_contact_id": 1,
    "status": 18,
    "price": "5VKdao7d8ykD9lkw",
    "note": "rGyB4OGmQl7Df8mb",
    "date_ordered": "WRmfN54fgu7eUCka",
    "currency": "uYuiMHzI99jA4bcn",
    "payment_type_id": 15,
    "products": "vYQCgXN7azFAmavF",
    "piece": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "user_contact_id": 1,
    "status": "1",
    "price": "15.00",
    "note": "Lütfen çatal bıçak koymayın.",
    "date_ordered": "2018-12-17 10:06:40",
    "currency": "TL",
    "payment_type_id": 1,
    "products": [
        {
            "id": 1,
            "piece": 2
        },
        {
            "id": 2,
            "piece": 1
        }
    ]
}
```

### HTTP Request
`POST api/orders`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | The id of the user.
    user_contact_id | integer |  required  | The contact id of the user.
    status | integer |  required  | The status of the order.
    price | decimal |  required  | The price of the order.
    note | string |  required  | The note of the order.
    date_ordered | timestamp |  required  | The date_ordered of the order.
    currency | string |  required  | The currency of the order.
    payment_type_id | integer |  required  | The payment type of the order.
    products | json |  required  | The product's ids.
    piece | integer |  required  | The product's piece.

<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_c45b79b58650b1cae1e64b6b47428534 -->
## Update specific order

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/orders/{order}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"user_id":5,"user_contact_id":2,"status":8,"price":"cfqRKPDUY1x7KrM9","note":"zNgMsZzHcYVnbhAF","date_ordered":"I04RbLitBsRaPcnS","currency":"2S8nYPdsuPYxds8P","payment_type_id":16}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/orders/{order}");

    let params = {
            "id": "e9Bl6vsUd91YSw4i",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "user_id": 5,
    "user_contact_id": 2,
    "status": 8,
    "price": "cfqRKPDUY1x7KrM9",
    "note": "zNgMsZzHcYVnbhAF",
    "date_ordered": "I04RbLitBsRaPcnS",
    "currency": "2S8nYPdsuPYxds8P",
    "payment_type_id": 16
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/orders/{order}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the order.
    user_id | integer |  required  | The id of the user.
    user_contact_id | integer |  required  | The contact id of the user.
    status | integer |  required  | The status of the order.
    price | decimal |  required  | The price of the order.
    note | string |  required  | The note of the order.
    date_ordered | timestamp |  required  | The date_ordered of the order.
    currency | string |  required  | The currency of the order.
    payment_type_id | integer |  required  | The payment type of the order.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the order.

<!-- END_c45b79b58650b1cae1e64b6b47428534 -->

<!-- START_cd5dbb35cb196bae94c3c19cc4f9cb01 -->
## Delete specific order

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/orders/{order}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/orders/{order}/destroy");

    let params = {
            "id": "z2G0WMLGglMz6M0z",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/orders/{order}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the order.

<!-- END_cd5dbb35cb196bae94c3c19cc4f9cb01 -->

#Payment Type Management

APIs for managing payment types
<!-- START_198d0341e682bdf2fabc88e051bc6b7b -->
## Index all payment types

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/paymentTypes" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/paymentTypes");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Nakit"
}
```

### HTTP Request
`GET api/paymentTypes`


<!-- END_198d0341e682bdf2fabc88e051bc6b7b -->

<!-- START_8ce4e115502b1618ee18c04e951bc696 -->
## Show specific payment type

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/paymentTypes/{paymentType}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/paymentTypes/{paymentType}");

    let params = {
            "id": "dapDyF8OAsJ5PXMH",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Nakit"
}
```

### HTTP Request
`GET api/paymentTypes/{paymentType}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the payment type.

<!-- END_8ce4e115502b1618ee18c04e951bc696 -->

<!-- START_6141d8f9c0a4c9e9751795a028ba6c5f -->
## Create a new payment type

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/paymentTypes" \
    -H "Content-Type: application/json" \
    -d '{"name":"k4Sbnnlv63Sd6ob1"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/paymentTypes");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "k4Sbnnlv63Sd6ob1"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Nakit"
}
```

### HTTP Request
`POST api/paymentTypes`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the payment type.

<!-- END_6141d8f9c0a4c9e9751795a028ba6c5f -->

<!-- START_e1da2c3db24394644889a6b5c72ee836 -->
## Update specific payment type

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/paymentTypes/{paymentType}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"yx7cdYGljpkiBhLG"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/paymentTypes/{paymentType}");

    let params = {
            "id": "EmpeQUfagu5PjaiJ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "yx7cdYGljpkiBhLG"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "name": "Kredi Kartı"
}
```

### HTTP Request
`POST api/paymentTypes/{paymentType}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the payment type.
    name | string |  required  | The name of the payment type.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the payment type.

<!-- END_e1da2c3db24394644889a6b5c72ee836 -->

<!-- START_b4cb82d8eee5bd0c4bb65f4dabba38da -->
## Delete specific payment type

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/paymentTypes/{paymentType}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/paymentTypes/{paymentType}/destroy");

    let params = {
            "id": "uZsronKkRRnZfWqN",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/paymentTypes/{paymentType}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the payment type.

<!-- END_b4cb82d8eee5bd0c4bb65f4dabba38da -->

#Product Management

APIs for managing products
<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## Index all products

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/products" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/products");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Makarna",
    "description": "Bildiğimiz makarna",
    "image_url": "https:\/\/via.placeholder.com\/500x300",
    "category_id": 1,
    "price": "10.00",
    "currency": "TL"
}
```

### HTTP Request
`GET api/products`


<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_a285e63bc2d1a5b9428ae9aed745c779 -->
## Show specific product

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/products/{product}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/products/{product}");

    let params = {
            "id": "oA04YfAytRtEaces",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Makarna",
    "description": "Bildiğimiz makarna",
    "image_url": "https:\/\/via.placeholder.com\/500x300",
    "category_id": 1,
    "price": "10.00",
    "currency": "TL",
    "isFeatured": 1,
    "stars": 3.5,
    "favourite": true
}
```

### HTTP Request
`GET api/products/{product}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the product.

<!-- END_a285e63bc2d1a5b9428ae9aed745c779 -->

<!-- START_05b4383f00fd57c4828a831e7057e920 -->
## Create a new product

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/products" \
    -H "Content-Type: application/json" \
    -d '{"name":"hrpPGzcTc69GUqcy","description":"FhlnvhWuVe1iDi5q","image_url":"Ky1vS3xI1HOXEcLU","category_id":11,"price":"3l9E9TRBlBu3wKei"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/products");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "hrpPGzcTc69GUqcy",
    "description": "FhlnvhWuVe1iDi5q",
    "image_url": "Ky1vS3xI1HOXEcLU",
    "category_id": 11,
    "price": "3l9E9TRBlBu3wKei"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Makarna",
    "description": "Bildiğimiz makarna",
    "image_url": "https:\/\/via.placeholder.com\/500x300",
    "category_id": 1,
    "price": "10.00",
    "currency": "TL"
}
```

### HTTP Request
`POST api/products`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the product.
    description | string |  optional  | optional The description of the product.
    image_url | file |  required  | The message of the product.
    category_id | integer |  required  | The category id of the product.
    price | decimal |  required  | The price of the product.

<!-- END_05b4383f00fd57c4828a831e7057e920 -->

<!-- START_7ad6b2dbfbd58a7c201ba85e185e0eb4 -->
## Update specific product

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/products/{product}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"5VabCYme7y8yFjFj","description":"faOebMvDbeHIJhzF","image_url":"yi6U5hVEs4s4LxFR","category_id":17,"price":"Z58F7ZksTwbK0m0y"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/products/{product}");

    let params = {
            "id": "h1QDNoWQZv2MvZm0",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "5VabCYme7y8yFjFj",
    "description": "faOebMvDbeHIJhzF",
    "image_url": "yi6U5hVEs4s4LxFR",
    "category_id": 17,
    "price": "Z58F7ZksTwbK0m0y"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "name": "Makarna",
    "description": "Bildiğimiz makarna",
    "image_url": "https:\/\/via.placeholder.com\/500x300",
    "category_id": 1,
    "price": "10.00",
    "currency": "TL"
}
```

### HTTP Request
`POST api/products/{product}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the category.
    name | string |  required  | The name of the product.
    description | string |  optional  | optional The description of the product.
    image_url | file |  required  | The message of the product.
    category_id | integer |  required  | The category id of the product.
    price | decimal |  required  | The price of the product.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the product.

<!-- END_7ad6b2dbfbd58a7c201ba85e185e0eb4 -->

<!-- START_ef3deea77f02137e38819a252b4579db -->
## Delete specific product

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/products/{product}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/products/{product}/destroy");

    let params = {
            "id": "2aa7cdDhTwIM3Zio",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/products/{product}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the product.

<!-- END_ef3deea77f02137e38819a252b4579db -->

<!-- START_bc488d4e0f8782f799071557553bc45e -->
## List product&#039;s comments

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/products/{product}/comments" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/products/{product}/comments");

    let params = {
            "id": "wFNyUesRHAPqSjmi",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
[
    {
        "id": 1,
        "user_id": 2,
        "product_id": 1,
        "comment": "Makarna çok güzeldi.",
        "stars": 5,
        "created_at": "2019-01-03 11:16:01",
        "updated_at": "2019-01-03 11:16:01",
        "user": {
            "id": 2,
            "name": "Ayberk",
            "surname": "Ersoy",
            "email": "ayberkersoy@gmail.com",
            "email_verified_at": null,
            "avatar": null,
            "status": "user",
            "created_at": "2018-12-27 11:00:17",
            "updated_at": "2018-12-27 11:00:17"
        }
    }
]
```

### HTTP Request
`GET api/products/{product}/comments`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the product.

<!-- END_bc488d4e0f8782f799071557553bc45e -->

<!-- START_e7da731f6efadc0397233b18300f719d -->
## Show specific products by category

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/getProductsByCategory/{category}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/getProductsByCategory/{category}");

    let params = {
            "id": "TogqnkaE17yQVBFE",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Makarna",
        "description": null,
        "image_url": "https:\/\/via.placeholder.com\/500x300",
        "category_id": 1,
        "created_at": "2018-12-17 10:06:59",
        "updated_at": "2018-12-17 10:06:59",
        "price": "10.00",
        "currency": "TL",
        "isFeatured": "1",
        "stars": 5
    },
    {
        "id": 2,
        "name": "Tavuklu Makarna",
        "description": null,
        "image_url": "https:\/\/via.placeholder.com\/500x300",
        "category_id": 1,
        "created_at": "2018-12-17 10:06:59",
        "updated_at": "2018-12-17 10:06:59",
        "price": "10.00",
        "currency": "TL",
        "isFeatured": "1",
        "stars": 5
    }
]
```

### HTTP Request
`GET api/getProductsByCategory/{category}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the category.

<!-- END_e7da731f6efadc0397233b18300f719d -->

<!-- START_df24ba68761bbb338251c7cf105cc42f -->
## Show specific featured products by category

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/getFavouriteProductsByCategory/{category}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/getFavouriteProductsByCategory/{category}");

    let params = {
            "id": "DbmyJXR9vbXp9PZ0",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Makarna",
        "description": null,
        "image_url": "https:\/\/via.placeholder.com\/500x300",
        "category_id": 1,
        "created_at": "2018-12-17 10:06:59",
        "updated_at": "2018-12-17 10:06:59",
        "price": "10.00",
        "currency": "TL",
        "isFeatured": "1",
        "stars": 5
    },
    {
        "id": 2,
        "name": "Tavuklu Makarna",
        "description": null,
        "image_url": "https:\/\/via.placeholder.com\/500x300",
        "category_id": 1,
        "created_at": "2018-12-17 10:06:59",
        "updated_at": "2018-12-17 10:06:59",
        "price": "10.00",
        "currency": "TL",
        "isFeatured": "1",
        "stars": 5
    }
]
```

### HTTP Request
`GET api/getFavouriteProductsByCategory/{category}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the category.

<!-- END_df24ba68761bbb338251c7cf105cc42f -->

#Reservation Management

APIs for managing reservations
<!-- START_bd35db24aeed3fefde86cc3a7f7cbe16 -->
## Index all reservations

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/reservations" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations");

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

> Example response (200):

```json
{
    "id": 1,
    "reservation_date": "2019-01-05",
    "reservation_hour": "17:00:00",
    "people_count": 4,
    "name": "Ahmet",
    "surname": "Mehmet",
    "phone": "5304783400",
    "note": "Manzaralı masa olursa güzel olur.",
    "user_id": 1
}
```

### HTTP Request
`GET api/reservations`


<!-- END_bd35db24aeed3fefde86cc3a7f7cbe16 -->

<!-- START_bac85f02bd98a669859f3c9e876a6b4b -->
## Show specific reservation

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/reservations/{reservation}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations/{reservation}");

    let params = {
            "id": "0hKoCXZmIZuxeBq6",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "reservation_date": "2019-01-05",
    "reservation_hour": "17:00:00",
    "people_count": 4,
    "name": "Ahmet",
    "surname": "Mehmet",
    "phone": "5304783400",
    "note": "Manzaralı masa olursa güzel olur.",
    "user_id": 1
}
```

### HTTP Request
`GET api/reservations/{reservation}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the reservation.

<!-- END_bac85f02bd98a669859f3c9e876a6b4b -->

<!-- START_ab282f256617c21610a7231da4ebdcda -->
## Create a new reservation

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/reservations" \
    -H "Content-Type: application/json" \
    -d '{"reservation_date":"wmnLoHWqY3Rm7T6w","reservation_hour":"TcavYUIyn6oI1VKE","people_count":4,"name":"QLddlyiEam68QiNh","surname":"owHi8WMfjRc4wpt4","phone":"XvNeZRFwiHVLPOUH","note":"wHmfOoi1F5cpbLZ6","user_id":2}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "reservation_date": "wmnLoHWqY3Rm7T6w",
    "reservation_hour": "TcavYUIyn6oI1VKE",
    "people_count": 4,
    "name": "QLddlyiEam68QiNh",
    "surname": "owHi8WMfjRc4wpt4",
    "phone": "XvNeZRFwiHVLPOUH",
    "note": "wHmfOoi1F5cpbLZ6",
    "user_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "reservation_date": "2019-01-05",
    "reservation_hour": "17:00:00",
    "people_count": 4,
    "name": "Ahmet",
    "surname": "Mehmet",
    "phone": "5304783400",
    "note": "Manzaralı masa olursa güzel olur.",
    "user_id": 1
}
```

### HTTP Request
`POST api/reservations`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    reservation_date | date |  required  | The date of the reservation.
    reservation_hour | time |  required  | The time of the reservation.
    people_count | integer |  required  | The people count of the reservation.
    name | string |  required  | The name of the person.
    surname | string |  required  | The surname of the person.
    phone | string |  required  | The phone of the person.
    note | string |  optional  | optional The note of the reservation.
    user_id | integer |  optional  | optional The id of the user.

<!-- END_ab282f256617c21610a7231da4ebdcda -->

<!-- START_4b71ec126089f525cf48a1fb117256d1 -->
## Update specific reservation

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/reservations/{reservation}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"reservation_date":"OKcwspN0kF8HBaW4","reservation_hour":"mA7vugb7ubDGaBQf","people_count":13,"name":"lGkwPfTl76lVRbZS","surname":"rpn1wYXt6mM2AUgF","phone":"acoYQAZP1GIX0wtx","note":"p3Aw2zk94UpASEsU","user_id":20}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations/{reservation}");

    let params = {
            "id": "rkev7UrAmRaYNjcy",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "reservation_date": "OKcwspN0kF8HBaW4",
    "reservation_hour": "mA7vugb7ubDGaBQf",
    "people_count": 13,
    "name": "lGkwPfTl76lVRbZS",
    "surname": "rpn1wYXt6mM2AUgF",
    "phone": "acoYQAZP1GIX0wtx",
    "note": "p3Aw2zk94UpASEsU",
    "user_id": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "reservation_date": "2019-01-05",
    "reservation_hour": "17:00:00",
    "people_count": 4,
    "name": "Ahmet",
    "surname": "Mehmet",
    "phone": "5304783400",
    "note": "Manzaralı masa olursa güzel olur.",
    "user_id": 1
}
```

### HTTP Request
`POST api/reservations/{reservation}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the reservation.
    reservation_date | date |  required  | The date of the reservation.
    reservation_hour | time |  required  | The time of the reservation.
    people_count | integer |  required  | The people count of the reservation.
    name | string |  required  | The name of the person.
    surname | string |  required  | The surname of the person.
    phone | string |  required  | The phone of the person.
    note | string |  optional  | optional The note of the reservation.
    user_id | integer |  optional  | optional The id of the user.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the reservation.

<!-- END_4b71ec126089f525cf48a1fb117256d1 -->

<!-- START_1a8a7bd3028563c34de31dfbf07f6ce2 -->
## Delete specific reservation

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/reservations/{reservation}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations/{reservation}/destroy");

    let params = {
            "id": "aRuWQiL1fi7ldRcS",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/reservations/{reservation}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the reservation.

<!-- END_1a8a7bd3028563c34de31dfbf07f6ce2 -->

#User Contact Management

APIs for managing user contacts
<!-- START_bc8ae8fa53cdd3241b1de68aaea44a1a -->
## Index all user contacts

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/userContacts" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts");

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

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "name": "Ahmet Mehmet",
    "phone": "5304783400",
    "address": "Yenisehir mah. osmanli blv."
}
```

### HTTP Request
`GET api/userContacts`


<!-- END_bc8ae8fa53cdd3241b1de68aaea44a1a -->

<!-- START_596151ef4c0d9a6bc35ed19e1eb4dd2f -->
## Show specific user contact

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/userContacts/{userContact}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts/{userContact}");

    let params = {
            "id": "8oUlTZDzWBBwaHej",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "name": "Ahmet Mehmet",
    "phone": "5304783400",
    "address": "Yenisehir mah. osmanli blv."
}
```

### HTTP Request
`GET api/userContacts/{userContact}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user contact.

<!-- END_596151ef4c0d9a6bc35ed19e1eb4dd2f -->

<!-- START_724a6ce825e0fbdb5e065992ef526139 -->
## Create a new user contact

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/userContacts" \
    -H "Content-Type: application/json" \
    -d '{"user_id":14,"name":"Z5sweJwcYSVjvLyu","phone":"Df9V0DFikx8djOSj","address":"t4sDbIPAM3pWG2lY"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "user_id": 14,
    "name": "Z5sweJwcYSVjvLyu",
    "phone": "Df9V0DFikx8djOSj",
    "address": "t4sDbIPAM3pWG2lY"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "name": "Ahmet Mehmet",
    "phone": "5304783400",
    "address": "Yenisehir mah. osmanli blv."
}
```

### HTTP Request
`POST api/userContacts`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | The id of the user.
    name | string |  required  | The name of the user contact.
    phone | string |  required  | The phone of the user contact.
    address | string |  required  | The phone of the user contact.

<!-- END_724a6ce825e0fbdb5e065992ef526139 -->

<!-- START_7d40d46c3470073e47d42ec64c7ff8eb -->
## Update specific user contact

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/userContacts/{userContact}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"user_id":17,"name":"rNxQPTMOv3689wRO","phone":"1QFun21DDdOFpZ8E","address":"rVQDYWbaCr2FfyUO"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts/{userContact}");

    let params = {
            "id": "JPnaqflhMBPGb3X5",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "user_id": 17,
    "name": "rNxQPTMOv3689wRO",
    "phone": "1QFun21DDdOFpZ8E",
    "address": "rVQDYWbaCr2FfyUO"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "user_id": 1,
    "name": "Ahmet Mehmet",
    "phone": "5304783400",
    "address": "Yenisehir mah. osmanli blv."
}
```

### HTTP Request
`POST api/userContacts/{userContact}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the user contact.
    user_id | integer |  required  | The id of the user.
    name | string |  required  | The name of the user contact.
    phone | string |  required  | The phone of the user contact.
    address | string |  required  | The phone of the user contact.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user contact.

<!-- END_7d40d46c3470073e47d42ec64c7ff8eb -->

<!-- START_3b7249c4fbe84ddf287412e77c9aef59 -->
## Delete specific user contact

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/userContacts/{userContact}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts/{userContact}/destroy");

    let params = {
            "id": "TiijNxenyLMlwqMn",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/userContacts/{userContact}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user contact.

<!-- END_3b7249c4fbe84ddf287412e77c9aef59 -->

#User Management

APIs for managing users
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Index all users

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users");

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Ahmet",
    "surname": "Mehmet",
    "email": "info@bosphorustech.com",
    "avatar": "https:\/\/via.placeholder.com\/300x300",
    "status": "user"
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Show specific user

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users/{user}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}");

    let params = {
            "id": "ZpsXGnRMGb9XJWsk",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "name": "Ahmet",
    "surname": "Mehmet",
    "email": "info@bosphorustech.com",
    "avatar": "https:\/\/via.placeholder.com\/300x300",
    "status": "user"
}
```

### HTTP Request
`GET api/users/{user}`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Create a new user

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/users" \
    -H "Content-Type: application/json" \
    -d '{"name":"PLb1xUroT6flH4sz","surname":"Mx9Rfhnrfs3Rp4Zn","email":"MN8YrSVF1GGS0l4k","password":"hkaK0CAMJnURd9sH","password_confirmation":"N65SNQUTf6cXg84U","status":"CkO6HFmURVOqbJdF"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/users");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "PLb1xUroT6flH4sz",
    "surname": "Mx9Rfhnrfs3Rp4Zn",
    "email": "MN8YrSVF1GGS0l4k",
    "password": "hkaK0CAMJnURd9sH",
    "password_confirmation": "N65SNQUTf6cXg84U",
    "status": "CkO6HFmURVOqbJdF"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Ahmet",
    "surname": "Mehmet",
    "email": "info@bosphorustech.com",
    "avatar": "https:\/\/via.placeholder.com\/300x300",
    "status": "user"
}
```

### HTTP Request
`POST api/users`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the user.
    surname | string |  required  | The surname of the user.
    email | string |  required  | The email of the user.
    password | string |  required  | The password of the user.
    password_confirmation | string |  required  | The password confirmation of the user.
    status | string |  required  | The status of the user.

<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_cd7a3397a1d9a367b3dd7dc4afe0fe93 -->
## Update specific user

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/users/{user}" \
    -H "Content-Type: application/json" \
    -d '{"id":9,"name":"OGuHhXrV48RZes7V","surname":"dRwM5cVPHlRvFwUi","email":"FK9hfjfQeBnSqqND","password":"c1HgQKzAG93qfRzJ","password_confirmation":"eqAHgGw9fIimvkNA","status":"LZ6ItZ5poEzRJ6N5"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}");

    let params = {
            "id": "FhHyv4d5htO42phn",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "id": 9,
    "name": "OGuHhXrV48RZes7V",
    "surname": "dRwM5cVPHlRvFwUi",
    "email": "FK9hfjfQeBnSqqND",
    "password": "c1HgQKzAG93qfRzJ",
    "password_confirmation": "eqAHgGw9fIimvkNA",
    "status": "LZ6ItZ5poEzRJ6N5"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 9,
    "name": "Ahmet",
    "surname": "Mehmet",
    "email": "info@bosphorustech.com",
    "avatar": "https:\/\/via.placeholder.com\/300x300",
    "status": "user"
}
```

### HTTP Request
`POST api/users/{user}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id | integer |  required  | The id of the user.
    name | string |  required  | The name of the user.
    surname | string |  required  | The surname of the user.
    email | string |  required  | The email of the user.
    password | string |  required  | The password of the user.
    password_confirmation | string |  required  | The password confirmation of the user.
    status | string |  required  | The status of the user.
#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_cd7a3397a1d9a367b3dd7dc4afe0fe93 -->

<!-- START_c7b7dd2c799b1460d5a992353c511293 -->
## Delete specific user

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/users/{user}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}/destroy");

    let params = {
            "id": "NQ89rB9yV1jNvyfA",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/users/{user}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_c7b7dd2c799b1460d5a992353c511293 -->

<!-- START_1cc90017d5f1b78fc0a82d15c2df5a4d -->
## List user&#039;s favourites

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users/{user}/favourites" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}/favourites");

    let params = {
            "id": "1mPSfbjylYFod8v1",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
[
    {
        "id": 1,
        "name": "Makarna",
        "description": null,
        "image_url": "https:\/\/via.placeholder.com\/500x300",
        "category_id": 1,
        "created_at": "2018-12-17 10:06:59",
        "updated_at": "2018-12-17 10:06:59",
        "price": "10.00"
    },
    {
        "id": 2,
        "name": "Tavuklu Makarna",
        "description": null,
        "image_url": "https:\/\/via.placeholder.com\/500x300",
        "category_id": 1,
        "created_at": "2018-12-17 10:06:59",
        "updated_at": "2018-12-17 10:06:59",
        "price": "10.00"
    }
]
```

### HTTP Request
`GET api/users/{user}/favourites`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_1cc90017d5f1b78fc0a82d15c2df5a4d -->

<!-- START_31239443db5563ca121cf9f1dfdb2f6e -->
## List user&#039;s contacts

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users/{user}/contacts" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}/contacts");

    let params = {
            "id": "t6mt64491oYX87an",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
[
    {
        "id": 1,
        "user_id": 2,
        "name": "Ev",
        "phone": "5304783400",
        "address": "Sapanbaglari mah.",
        "created_at": "2019-01-03 10:32:12",
        "updated_at": "2019-01-03 10:32:12"
    },
    {
        "id": 2,
        "user_id": 2,
        "name": "Ofis",
        "phone": "5304783400",
        "address": "yenisehir mah",
        "created_at": "2019-01-03 10:32:12",
        "updated_at": "2019-01-03 10:32:12"
    }
]
```

### HTTP Request
`GET api/users/{user}/contacts`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_31239443db5563ca121cf9f1dfdb2f6e -->

<!-- START_a112bd8509fb1fb043bf9d316d276e56 -->
## List user&#039;s comments

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users/{user}/comments" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}/comments");

    let params = {
            "id": "TYA0D6EJhiu677yN",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "product_id": 1,
    "comment": "Yemekler, hizmet her şey harikaydı.",
    "stars": "4",
    "product": {
        "id": 1,
        "name": "Makarna",
        "description": "Bildiğimiz makarna.",
        "image_url": "https:\/\/via.placeholder.com\/1280x720",
        "category_id": 3,
        "created_at": "2018-12-28 09:43:10",
        "updated_at": "2018-12-28 09:43:10",
        "price": "10.00",
        "currency": "TL",
        "isFeatured": 1
    }
}
```

### HTTP Request
`GET api/users/{user}/comments`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_a112bd8509fb1fb043bf9d316d276e56 -->

<!-- START_c9c56a10eba591a9e0c73f55aef87f33 -->
## List user&#039;s orders

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users/{user}/orders" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}/orders");

    let params = {
            "id": "nK52sA1gaV2mw789",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "user_id": 1,
    "user_contact_id": 1,
    "status": 1,
    "price": "50.00",
    "created_at": "2019-01-23 11:55:28",
    "updated_at": "2019-01-23 11:55:28",
    "note": null,
    "date_ordered": "2019-01-23 11:55:28",
    "currency": "TL",
    "payment_type_id": 1,
    "user_contact": {
        "id": 1,
        "user_id": 1,
        "name": "Ev",
        "phone": "5304783400",
        "address": "Sapanbağları mah.",
        "created_at": "2019-01-03 13:29:09",
        "updated_at": "2019-01-03 13:29:09"
    }
}
```

### HTTP Request
`GET api/users/{user}/orders`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_c9c56a10eba591a9e0c73f55aef87f33 -->

<!-- START_3e90c95d04383a8eb50025a202c10a87 -->
## List user&#039;s reservations

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/users/{user}/reservations" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}/reservations");

    let params = {
            "id": "wUMuKWf9ezLvn4yg",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "id": 1,
    "reservation_date": "2019-01-05",
    "reservation_hour": "17:00:00",
    "people_count": 4,
    "name": "Ahmet",
    "surname": "Mehmet",
    "phone": "5304783400",
    "note": "Manzaralı masa olursa güzel olur."
}
```

### HTTP Request
`GET api/users/{user}/reservations`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the user.

<!-- END_3e90c95d04383a8eb50025a202c10a87 -->

<!-- START_b5f775854dd346ed0f5bc9386e9662d7 -->
## Send password recovery email

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/resetPass" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/resetPass");

    let params = {
            "email": "RSmPiO8KTvCX1UAg",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

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

> Example response (200):

```json
{
    "status": true
}
```

### HTTP Request
`POST api/resetPass`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    email |  required  | The email of the user.

<!-- END_b5f775854dd346ed0f5bc9386e9662d7 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login a user

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/login" \
    -H "Content-Type: application/json" \
    -d '{"email":"acytPuPOwuL6iN17","password":"mGDgdNlEZgv6DSwK"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/login");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "email": "acytPuPOwuL6iN17",
    "password": "mGDgdNlEZgv6DSwK"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": {
        "token": "REALLYLONGTOKEN"
    }
}
```

### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | The email of the user.
    password | string |  required  | The password of the user.

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register a user

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/register" \
    -H "Content-Type: application/json" \
    -d '{"name":"rESRLdnBd5hNG2LZ","surname":"OcW9CKsEVaRo3fFJ","email":"GrcRq3eAfFHmsLhk","password":"D1myUgp2hH0aYlsI","password_confirmation":"J7Zm8TslXpEtls5K"}'

```

```javascript
const url = new URL("https://api.maycreator.com/api/register");

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "name": "rESRLdnBd5hNG2LZ",
    "surname": "OcW9CKsEVaRo3fFJ",
    "email": "GrcRq3eAfFHmsLhk",
    "password": "D1myUgp2hH0aYlsI",
    "password_confirmation": "J7Zm8TslXpEtls5K"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": {
        "token": "REALLYLONGTOKEN"
    }
}
```

### HTTP Request
`POST api/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | The name of the user.
    surname | string |  required  | The surname of the user.
    email | string |  required  | The email of the user.
    password | string |  required  | The password of the user.
    password_confirmation | string |  required  | The password confirmation of the user.

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_de8c14bf8c667d39af01ea1e6fcc847a -->
## Get authenticated user

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/getUser" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/getUser");

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

> Example response (200):

```json
{
    "id": 3,
    "name": "Bosphorus",
    "surname": "Tech",
    "email": "info@bosphorustech.com",
    "email_verified_at": null,
    "avatar": null,
    "status": "user",
    "created_at": "2019-01-03 10:35:51",
    "updated_at": "2019-01-03 10:35:51"
}
```

### HTTP Request
`GET api/getUser`


<!-- END_de8c14bf8c667d39af01ea1e6fcc847a -->

#general
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/oauth/authorize" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/authorize");

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
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "https://api.maycreator.com/oauth/authorize" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/authorize");

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
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "https://api.maycreator.com/oauth/authorize" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/authorize");

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
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "https://api.maycreator.com/oauth/token" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/token");

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
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/oauth/tokens" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/tokens");

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
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "https://api.maycreator.com/oauth/tokens/{token_id}" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/tokens/{token_id}");

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
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "https://api.maycreator.com/oauth/token/refresh" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/token/refresh");

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
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/oauth/clients" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/clients");

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
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "https://api.maycreator.com/oauth/clients" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/clients");

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
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "https://api.maycreator.com/oauth/clients/{client_id}" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/clients/{client_id}");

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
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "https://api.maycreator.com/oauth/clients/{client_id}" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/clients/{client_id}");

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
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/oauth/scopes" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/scopes");

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
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/personal-access-tokens");

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
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "https://api.maycreator.com/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/personal-access-tokens");

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
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "https://api.maycreator.com/oauth/personal-access-tokens/{token_id}" 
```

```javascript
const url = new URL("https://api.maycreator.com/oauth/personal-access-tokens/{token_id}");

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
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_c308a6e856a99e719ebf4c50d9fe8c1d -->
## api/baskets
> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/baskets" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/baskets");

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

> Example response (200):

```json
[
    {
        "id": 1,
        "order_id": 1,
        "product_id": 1,
        "product_name": "Makarna",
        "description": "Bildiğimiz makarna.",
        "price": "10.00",
        "created_at": "2019-01-28 08:40:53",
        "updated_at": "2019-01-28 08:40:53",
        "piece": 0
    },
    {
        "id": 2,
        "order_id": 1,
        "product_id": 2,
        "product_name": "Tavuklu Makarna",
        "description": "Bildiğimiz tavuklu makarna.",
        "price": "10.00",
        "created_at": "2019-01-28 08:40:53",
        "updated_at": "2019-01-28 08:40:53",
        "piece": 0
    },
    {
        "id": 3,
        "order_id": 7,
        "product_id": 1,
        "product_name": "Antrikot",
        "description": "Konfit soğan, patates kızartması, mantar, kırmızı\/yeşil biber ve demi glace sos ile...",
        "price": "10.00",
        "created_at": "2019-02-15 11:24:33",
        "updated_at": "2019-02-15 11:24:33",
        "piece": 2
    },
    {
        "id": 4,
        "order_id": 7,
        "product_id": 2,
        "product_name": "Hamburger",
        "description": "Hamburger köftesi, çedar peyniri, patates, halka soğan eşliğinde...",
        "price": "10.00",
        "created_at": "2019-02-15 11:24:33",
        "updated_at": "2019-02-15 11:24:33",
        "piece": 1
    }
]
```

### HTTP Request
`GET api/baskets`


<!-- END_c308a6e856a99e719ebf4c50d9fe8c1d -->

<!-- START_9f996d69ddd45af933fa921df2a4945b -->
## api/baskets/{basket}
> Example request:

```bash
curl -X GET -G "https://api.maycreator.com/api/baskets/{basket}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/baskets/{basket}");

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

> Example response (200):

```json
{
    "id": 1,
    "order_id": 1,
    "product_id": 1,
    "product_name": "Makarna",
    "description": "Bildiğimiz makarna.",
    "price": "10.00",
    "created_at": "2019-01-28 08:40:53",
    "updated_at": "2019-01-28 08:40:53",
    "piece": 0
}
```

### HTTP Request
`GET api/baskets/{basket}`


<!-- END_9f996d69ddd45af933fa921df2a4945b -->

<!-- START_1851d4498ec477b1f41d11c7a2ef4750 -->
## api/baskets
> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/baskets" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/baskets");

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
`POST api/baskets`


<!-- END_1851d4498ec477b1f41d11c7a2ef4750 -->

<!-- START_18f5c1b1a00a62ee79a8b219df8368c8 -->
## api/baskets/{basket}
> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/baskets/{basket}" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/baskets/{basket}");

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
`POST api/baskets/{basket}`


<!-- END_18f5c1b1a00a62ee79a8b219df8368c8 -->

<!-- START_b656c799b02ccceddbfb3fea4c61ac59 -->
## api/baskets/{basket}/destroy
> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/baskets/{basket}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/baskets/{basket}/destroy");

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
`POST api/baskets/{basket}/destroy`


<!-- END_b656c799b02ccceddbfb3fea4c61ac59 -->

<!-- START_e1b70dd9a88c20c094c7a9c02c418db2 -->
## deploy
> Example request:

```bash
curl -X POST "https://api.maycreator.com/deploy" 
```

```javascript
const url = new URL("https://api.maycreator.com/deploy");

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
`POST deploy`


<!-- END_e1b70dd9a88c20c094c7a9c02c418db2 -->


