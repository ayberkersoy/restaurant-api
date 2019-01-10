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
[Get Postman Collection](http://localhost/docs/collection.json)

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
            "id": "kRheeHNvQNQXLsxa",
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
curl -X POST "https://api.maycreator.com/api/campaigns"     -d "name"="yD8ZT7eN4UgKO6Ai" \
    -d "description"="2ANeVO1t9lV8RCFr" \
    -d "image_url"="0EOW59S3Ip8iLmuA" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "yD8ZT7eN4UgKO6Ai",
    "description": "2ANeVO1t9lV8RCFr",
    "image_url": "0EOW59S3Ip8iLmuA",
})

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
curl -X POST "https://api.maycreator.com/api/campaigns/{campaign}"     -d "id"="9" \
    -d "name"="MITLh50OrMLxNBya" \
    -d "description"="3mCh6Def2p9npWvc" \
    -d "image_url"="IDdSEBsdj3mnOuDn" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/campaigns/{campaign}");

    let params = {
            "id": "eiUR4cMYz5r6bPAe",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "name": "MITLh50OrMLxNBya",
    "description": "3mCh6Def2p9npWvc",
    "image_url": "IDdSEBsdj3mnOuDn",
})

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
            "id": "EPjNbSrOb6AdgP5a",
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
            "id": "GX1hkFUr0A0X68M0",
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
curl -X POST "https://api.maycreator.com/api/categories"     -d "name"="Nyw9VFy7C3T50tSG" \
    -d "description"="UsrdfVhdH6GIGlQa" \
    -d "image_url"="xC8jqRw3dIxft2Hv" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/categories");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "Nyw9VFy7C3T50tSG",
    "description": "UsrdfVhdH6GIGlQa",
    "image_url": "xC8jqRw3dIxft2Hv",
})

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
curl -X POST "https://api.maycreator.com/api/categories/{category}"     -d "id"="9" \
    -d "name"="JiamhO4b4Vkwhb9c" \
    -d "description"="cMAusRyAglOyJNs4" \
    -d "image_url"="fp7hMOQGJ7EOsANm" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/categories/{category}");

    let params = {
            "id": "aPKiGAhfnWgAUERJ",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "name": "JiamhO4b4Vkwhb9c",
    "description": "cMAusRyAglOyJNs4",
    "image_url": "fp7hMOQGJ7EOsANm",
})

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
            "id": "jMWrjJ1GqeNQvY0Z",
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
            "id": "xGVxwacSh56CSUaX",
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
curl -X POST "https://api.maycreator.com/api/comments"     -d "user_id"="19" \
    -d "product_id"="13" \
    -d "comment"="aMerA8Rfs4WLIT9P" \
    -d "stars"="1.021" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/comments");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "19",
    "product_id": "13",
    "comment": "aMerA8Rfs4WLIT9P",
    "stars": "1.021",
})

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
curl -X POST "https://api.maycreator.com/api/comments/{comment}"     -d "id"="9" \
    -d "user_id"="19" \
    -d "product_id"="20" \
    -d "comment"="XNfLCG364ePWWEej" \
    -d "stars"="5.7254" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/comments/{comment}");

    let params = {
            "id": "wBDonWfcNGaFQxJd",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "user_id": "19",
    "product_id": "20",
    "comment": "XNfLCG364ePWWEej",
    "stars": "5.7254",
})

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
            "id": "qwhegrkpe64G0zHg",
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
            "id": "BKo0Pex7TQmnxY0o",
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
curl -X POST "https://api.maycreator.com/api/companies"     -d "name"="lRlJEnNAJ9UanbhQ" \
    -d "address"="XNsFyoCj1AhAQk8T" \
    -d "phone"="Vz110vMfnKTwKNPU" \
    -d "logo"="s5Vho7IKE2LMjlG3" \
    -d "working_hours_day"="IL36b01tlTVjKAcv" \
    -d "working_hours_night"="Xsuau0ML1HfECRiy" \
    -d "facebook"="LWMzve27EVUUeTxJ" \
    -d "twitter"="5rl3VKb8Rv1HzN7O" \
    -d "instagram"="TZuRR3gw3oKffRvo" \
    -d "about_text"="JmqcrAyjGsy4qnZX" \
    -d "about_image"="NDOPIiGoFortGvn5" \
    -d "locationy"="YS5aZJuGjSVDLjnd" \
    -d "locationx"="rGFGJGv8utM68Tq5" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/companies");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "lRlJEnNAJ9UanbhQ",
    "address": "XNsFyoCj1AhAQk8T",
    "phone": "Vz110vMfnKTwKNPU",
    "logo": "s5Vho7IKE2LMjlG3",
    "working_hours_day": "IL36b01tlTVjKAcv",
    "working_hours_night": "Xsuau0ML1HfECRiy",
    "facebook": "LWMzve27EVUUeTxJ",
    "twitter": "5rl3VKb8Rv1HzN7O",
    "instagram": "TZuRR3gw3oKffRvo",
    "about_text": "JmqcrAyjGsy4qnZX",
    "about_image": "NDOPIiGoFortGvn5",
    "locationy": "YS5aZJuGjSVDLjnd",
    "locationx": "rGFGJGv8utM68Tq5",
})

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
curl -X POST "https://api.maycreator.com/api/companies/{company}"     -d "name"="0JDRLnTJp9n7GjtE" \
    -d "address"="7eyfZsGQZ4mYhwds" \
    -d "phone"="MHjJoqHkzJ7GgHKk" \
    -d "logo"="iToEs443nEN4skDA" \
    -d "working_hours_day"="HCwpNigXveJAsQrd" \
    -d "working_hours_night"="ggDEnRmcegBiMjSu" \
    -d "facebook"="mHw1BlAwYYEWWNAn" \
    -d "twitter"="dhpD4x4BR9fkeKG2" \
    -d "instagram"="HtP9Lr8U9PjKhfAJ" \
    -d "about_text"="aU2EVUlN1cglmbyq" \
    -d "about_image"="wzftkXgjJR2pnj7U" \
    -d "locationy"="QNzaL48VueHQpAFz" \
    -d "locationx"="vComyVsr475NKjxM" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/companies/{company}");

    let params = {
            "id": "lTV42g9yfizUDK6Q",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "0JDRLnTJp9n7GjtE",
    "address": "7eyfZsGQZ4mYhwds",
    "phone": "MHjJoqHkzJ7GgHKk",
    "logo": "iToEs443nEN4skDA",
    "working_hours_day": "HCwpNigXveJAsQrd",
    "working_hours_night": "ggDEnRmcegBiMjSu",
    "facebook": "mHw1BlAwYYEWWNAn",
    "twitter": "dhpD4x4BR9fkeKG2",
    "instagram": "HtP9Lr8U9PjKhfAJ",
    "about_text": "aU2EVUlN1cglmbyq",
    "about_image": "wzftkXgjJR2pnj7U",
    "locationy": "QNzaL48VueHQpAFz",
    "locationx": "vComyVsr475NKjxM",
})

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
            "id": "df2jqmkiz2wAFbjC",
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
            "id": "yARuOFKIsJtKsIeg",
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
curl -X POST "https://api.maycreator.com/api/employees"     -d "name"="TNm2s0gyMCJcv1XH" \
    -d "surname"="579yGIMzrqkwlRyf" \
    -d "description"="d6xzD6ecu1g6Az57" \
    -d "image_url"="0I1JsCrIBKzv3CGd" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/employees");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "TNm2s0gyMCJcv1XH",
    "surname": "579yGIMzrqkwlRyf",
    "description": "d6xzD6ecu1g6Az57",
    "image_url": "0I1JsCrIBKzv3CGd",
})

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
curl -X POST "https://api.maycreator.com/api/employees/{employee}"     -d "id"="9" \
    -d "name"="b3Jj0BC2TQ5vrTwy" \
    -d "surname"="FyHBOOt7ctFNyYWn" \
    -d "description"="Q1RfrVPw7EYFtstv" \
    -d "image_url"="qKeDV6DOdaC3jLih" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/employees/{employee}");

    let params = {
            "id": "lCvTGi1Z5op7RGl6",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "name": "b3Jj0BC2TQ5vrTwy",
    "surname": "FyHBOOt7ctFNyYWn",
    "description": "Q1RfrVPw7EYFtstv",
    "image_url": "qKeDV6DOdaC3jLih",
})

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
            "id": "IlH8dY3fIDgjl5b4",
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
curl -X POST "https://api.maycreator.com/api/favourites"     -d "user_id"="4" \
    -d "product_id"="16" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/favourites");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "4",
    "product_id": "16",
})

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

<!-- START_035a8e2fd419c2e54bbb1fcb004824f0 -->
## Delete specific favourite

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/favourites/{favourite}/destroy" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/favourites/{favourite}/destroy");

    let params = {
            "id": "QTpMnpLaYFRE6zrT",
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
`POST api/favourites/{favourite}/destroy`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    id |  required  | The id of the favourite.

<!-- END_035a8e2fd419c2e54bbb1fcb004824f0 -->

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
            "id": "S5xBWssASor5pu7w",
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
curl -X POST "https://api.maycreator.com/api/messages"     -d "name"="ZjdWQMlHDdB7ZeAT" \
    -d "about"="EUwf9QY4taM2XBbv" \
    -d "message"="YGNVKMQPkVCSaEiu" \
    -d "phone"="8BfBTxMNx6fvn2kW" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/messages");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "ZjdWQMlHDdB7ZeAT",
    "about": "EUwf9QY4taM2XBbv",
    "message": "YGNVKMQPkVCSaEiu",
    "phone": "8BfBTxMNx6fvn2kW",
})

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
curl -X POST "https://api.maycreator.com/api/messages/{message}"     -d "id"="9" \
    -d "name"="2FW31EXsOTsdDViQ" \
    -d "about"="1Hdjlpejxsj5Lvzy" \
    -d "message"="OwgGtpRfQcOq9OaI" \
    -d "phone"="NLHccapBCaqpuLoB" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/messages/{message}");

    let params = {
            "id": "9gHBJWc9MACoP0fV",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "name": "2FW31EXsOTsdDViQ",
    "about": "1Hdjlpejxsj5Lvzy",
    "message": "OwgGtpRfQcOq9OaI",
    "phone": "NLHccapBCaqpuLoB",
})

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
            "id": "KQ50xOJyCTn12Ul2",
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
            "id": "0Kum52qnM3k4WiVa",
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
curl -X POST "https://api.maycreator.com/api/orders"     -d "user_id"="3" \
    -d "user_contact_id"="4" \
    -d "status"="1" \
    -d "price"="26rsj6RT7nUaDNLD" \
    -d "note"="BurF8FSGEQwLBr2h" \
    -d "date_ordered"="JuOz91MDrY2JLOF8" \
    -d "currency"="IBaqKJjEBbn2OX9o" \
    -d "payment_type_id"="1" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/orders");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "3",
    "user_contact_id": "4",
    "status": "1",
    "price": "26rsj6RT7nUaDNLD",
    "note": "BurF8FSGEQwLBr2h",
    "date_ordered": "JuOz91MDrY2JLOF8",
    "currency": "IBaqKJjEBbn2OX9o",
    "payment_type_id": "1",
})

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

<!-- END_285c87403b6cfdebe26bc357f22e870f -->

<!-- START_c45b79b58650b1cae1e64b6b47428534 -->
## Update specific order

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/orders/{order}"     -d "id"="9" \
    -d "user_id"="1" \
    -d "user_contact_id"="3" \
    -d "status"="20" \
    -d "price"="zca0uJxdlACdUQgr" \
    -d "note"="TeCNLYRDOoNhGo5x" \
    -d "date_ordered"="Jfsz9yUxPBqY2WKk" \
    -d "currency"="eWVKjL6HFaEYjyM4" \
    -d "payment_type_id"="3" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/orders/{order}");

    let params = {
            "id": "iSCHgsVsr9CEdy3R",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "user_id": "1",
    "user_contact_id": "3",
    "status": "20",
    "price": "zca0uJxdlACdUQgr",
    "note": "TeCNLYRDOoNhGo5x",
    "date_ordered": "Jfsz9yUxPBqY2WKk",
    "currency": "eWVKjL6HFaEYjyM4",
    "payment_type_id": "3",
})

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
            "id": "eYoAKYRkt6AFhvZf",
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
            "id": "5Mrkp2Tke5Bkhrdw",
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
curl -X POST "https://api.maycreator.com/api/products"     -d "name"="JRgJr2DFQlxhYa2S" \
    -d "description"="QZQ29UoyPC6d0Xz5" \
    -d "image_url"="OFHzpc2nnIEOQ4jL" \
    -d "category_id"="8" \
    -d "price"="dcx3emP2wynSG1yN" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/products");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "JRgJr2DFQlxhYa2S",
    "description": "QZQ29UoyPC6d0Xz5",
    "image_url": "OFHzpc2nnIEOQ4jL",
    "category_id": "8",
    "price": "dcx3emP2wynSG1yN",
})

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
curl -X POST "https://api.maycreator.com/api/products/{product}"     -d "id"="9" \
    -d "name"="meJ105Ey4a6nxtrP" \
    -d "description"="A4BGYXkX7Njee2nf" \
    -d "image_url"="Us26aM6nKerviMyz" \
    -d "category_id"="6" \
    -d "price"="F99KSkCUPYnqmjzG" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/products/{product}");

    let params = {
            "id": "YgCVmNZCXcttt2hM",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "name": "meJ105Ey4a6nxtrP",
    "description": "A4BGYXkX7Njee2nf",
    "image_url": "Us26aM6nKerviMyz",
    "category_id": "6",
    "price": "F99KSkCUPYnqmjzG",
})

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
            "id": "NHpua3SSuxiXqUGj",
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
            "id": "CrGQOmt1y4oFJIU5",
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
            "id": "DHS9jLlhakwqnvic",
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
            "id": "F5hFY4onhHzNTYrL",
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
    "note": "Manzaralı masa olursa güzel olur."
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
            "id": "3L9lFD6CUL5WjeCZ",
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
curl -X POST "https://api.maycreator.com/api/reservations"     -d "reservation_date"="fbwjXzE8QuEymexI" \
    -d "reservation_hour"="3s7KbVquSLmgHqUR" \
    -d "people_count"="10" \
    -d "name"="Yp7mLEEcBbXoclss" \
    -d "surname"="vcfPWfvDYMzApfw8" \
    -d "phone"="TskCVgGt2obLzfPr" \
    -d "note"="UzdxJyUhVj2cRqGt" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "reservation_date": "fbwjXzE8QuEymexI",
    "reservation_hour": "3s7KbVquSLmgHqUR",
    "people_count": "10",
    "name": "Yp7mLEEcBbXoclss",
    "surname": "vcfPWfvDYMzApfw8",
    "phone": "TskCVgGt2obLzfPr",
    "note": "UzdxJyUhVj2cRqGt",
})

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
    "note": "Manzaralı masa olursa güzel olur."
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

<!-- END_ab282f256617c21610a7231da4ebdcda -->

<!-- START_4b71ec126089f525cf48a1fb117256d1 -->
## Update specific reservation

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/reservations/{reservation}"     -d "id"="9" \
    -d "reservation_date"="aafcZqnLyQkYyZOO" \
    -d "reservation_hour"="l1dUPH8wfyk6IKOL" \
    -d "people_count"="1" \
    -d "name"="ZHTGuZkjM2pptq2r" \
    -d "surname"="1Vj3pHJlXosxEXK7" \
    -d "phone"="teP3FBdjwTPfhEAm" \
    -d "note"="m6cdxP6V5yV7oP3e" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/reservations/{reservation}");

    let params = {
            "id": "G2SyxYTMJwCics4T",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "reservation_date": "aafcZqnLyQkYyZOO",
    "reservation_hour": "l1dUPH8wfyk6IKOL",
    "people_count": "1",
    "name": "ZHTGuZkjM2pptq2r",
    "surname": "1Vj3pHJlXosxEXK7",
    "phone": "teP3FBdjwTPfhEAm",
    "note": "m6cdxP6V5yV7oP3e",
})

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
    "note": "Manzaralı masa olursa güzel olur."
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
            "id": "cILtGKUrYGY11n7r",
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
            "id": "DdJgdl5IFJbJSNBA",
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
curl -X POST "https://api.maycreator.com/api/userContacts"     -d "user_id"="19" \
    -d "name"="aaLHnytHHAErX7xL" \
    -d "phone"="iVVEO76cEhYecadb" \
    -d "address"="yikhuiSxxYK4j8tZ" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "user_id": "19",
    "name": "aaLHnytHHAErX7xL",
    "phone": "iVVEO76cEhYecadb",
    "address": "yikhuiSxxYK4j8tZ",
})

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
curl -X POST "https://api.maycreator.com/api/userContacts/{userContact}"     -d "id"="9" \
    -d "user_id"="20" \
    -d "name"="D6559O3RMobSpvkl" \
    -d "phone"="gHchiCbIsvZV9t1d" \
    -d "address"="5I5OsLYrwml5EBN3" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/userContacts/{userContact}");

    let params = {
            "id": "aFJ7VirsyLmbrtn7",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "user_id": "20",
    "name": "D6559O3RMobSpvkl",
    "phone": "gHchiCbIsvZV9t1d",
    "address": "5I5OsLYrwml5EBN3",
})

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
            "id": "KVqWmSwVAeIaOCcb",
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
            "id": "YKAUUM7pABMQpUIz",
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
curl -X POST "https://api.maycreator.com/api/users"     -d "name"="N39DE4iTcj19bJg8" \
    -d "surname"="he9NZDY6DCSf89He" \
    -d "email"="UqbsyFyBFCywSOu8" \
    -d "password"="al0aEVyHMRtBY1OL" \
    -d "password_confirmation"="lHElaxXn0bk0mcbH" \
    -d "status"="u1AN9RQsCHOsmRyi" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "N39DE4iTcj19bJg8",
    "surname": "he9NZDY6DCSf89He",
    "email": "UqbsyFyBFCywSOu8",
    "password": "al0aEVyHMRtBY1OL",
    "password_confirmation": "lHElaxXn0bk0mcbH",
    "status": "u1AN9RQsCHOsmRyi",
})

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
curl -X POST "https://api.maycreator.com/api/users/{user}"     -d "id"="9" \
    -d "name"="HoSV6jkAw3T1yeGs" \
    -d "surname"="IKwFRL1aBANDT5kS" \
    -d "email"="27HEBazX3CNNWRO5" \
    -d "password"="OU3V5XB1V0zxpSNK" \
    -d "password_confirmation"="USXHk4O80kCstXH5" \
    -d "status"="uROZujoUBHoDFlV9" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/users/{user}");

    let params = {
            "id": "LoJl6lwpfDNIQ1x8",
        };
    Object.keys(params).forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "id": "9",
    "name": "HoSV6jkAw3T1yeGs",
    "surname": "IKwFRL1aBANDT5kS",
    "email": "27HEBazX3CNNWRO5",
    "password": "OU3V5XB1V0zxpSNK",
    "password_confirmation": "USXHk4O80kCstXH5",
    "status": "uROZujoUBHoDFlV9",
})

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
            "id": "nOcU4z3OYDd4KGJw",
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
            "id": "wwoer9stpZBEExTd",
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
            "id": "p3R6lI9i2MkTL4iQ",
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

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login a user

> Example request:

```bash
curl -X POST "https://api.maycreator.com/api/login"     -d "email"="CGnxuWMg8vGxm89x" \
    -d "password"="A14sxAkd8R6YKjI9" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "CGnxuWMg8vGxm89x",
    "password": "A14sxAkd8R6YKjI9",
})

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
curl -X POST "https://api.maycreator.com/api/register"     -d "name"="40Om1hdT7zWD3WIs" \
    -d "surname"="NIaWL7hy3F72zHsi" \
    -d "email"="dCu6bDarv8OmSrm9" \
    -d "password"="T4SicfsH8aMCmAvI" \
    -d "password_confirmation"="Tz0LaRhJV0kZLCjH" 
```

```javascript
const url = new URL("https://api.maycreator.com/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "name": "40Om1hdT7zWD3WIs",
    "surname": "NIaWL7hy3F72zHsi",
    "email": "dCu6bDarv8OmSrm9",
    "password": "T4SicfsH8aMCmAvI",
    "password_confirmation": "Tz0LaRhJV0kZLCjH",
})

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
[]
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

> Example response (404):

```json
{
    "message": "No query results for model [App\\Basket].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 200,
    "trace": [
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 176,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 684,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 659,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 614,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/barryvdh\/laravel-cors\/src\/HandleCors.php",
            "line": 36,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 272,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 256,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 33,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/Generator.php",
            "line": 54,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 196,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 57,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 572,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/symfony\/console\/Application.php",
            "line": 901,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/vagrant\/code\/restaurant-api\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
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


