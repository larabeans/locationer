<?php

/**
 * @apiDefine LocationSuccessSingleResponse
 * @apiSuccessExample {json} Success-Response:
HTTP/1.1 200 OK
{
  "data": [
    {
      "object": "Location",
      "id": "",
      "address_line_1": "House #335, Street #17",
      "address_line_2": "Bla Bla Town, Phase 1",
      "post_code": "0213 566",
      "latitude": "0.899656565",
      "longitude": "0.323565666",
      "created_at": "2021-01-19T06:12:35.000000Z",
      "updated_at": "2021-01-19T06:12:35.000000Z",
      "real_id": "87dbf76c-099d-4c6c-bc8c-5c440e51a785",
      "country": {
        "object": "Country",
        "id": "gomreqn3a943vxpl",
        "name": "Pakistan",
        "native": "Pakistan",
        "alpha2": "PK",
        "alpha3": "PAK",
        "isd": "92",
        "capital": "Islamabad",
        "currency": "PKR",
        "continent": "Asia",
        "subcontinent": "Southern Asia",
        "emoji": "🇵🇰",
        "emoji_unicode": "U+1F1F5 U+1F1F0",
        "created_at": "2021-01-19T06:12:35.000000Z",
        "updated_at": "2021-01-19T06:12:35.000000Z",
        "real_id": 167
      },
      "state": {
          "object": "State",
          "id": "qekr8ny0vy7b6mjx",
          "country_id": 167,
          "name": "Islamabad Capital Territory",
          "code": "IS",
          "created_at": "2021-01-19T06:12:38.000000Z",
          "updated_at": "2021-01-19T06:12:38.000000Z",
          "real_id": 3169
      },
      "city": {
          "object": "City",
          "id": "0o6vk48q9w04pw9j",
          "name": "Islamabad",
          "latitude": "33.72148000",
          "longitude": "73.04329000",
          "created_at": "2021-01-19T06:13:42.000000Z",
          "updated_at": "2021-01-19T06:13:42.000000Z",
          "real_id": 85475
      }
    }
  ],
  "meta": {
    "include": [
      "country",
      "state",
      "city"
    ],
    "custom": [],
    "pagination": {
      "total": 1,
      "count": 1,
      "per_page": 10,
      "current_page": 1,
      "total_pages": 1,
      "links": []
    }
  }
}*/
