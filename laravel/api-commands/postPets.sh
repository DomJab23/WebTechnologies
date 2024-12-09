curl -X 'POST' \
  'http://127.0.0.1:8000/api/pets?uname=a&password=a' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "name": "PYZIA",
  "age": 2,
  "species": "DOG",
  "breed": "OWCZAREK",
  "sterilized": true,
  "health": "OK",
  "descriptions": "jak bedzie to bedzie a jak nie to nie ",
  "createdAt": "2024-12-04T12:22:59.000000Z",
  "updatedAt": "2024-12-04T12:22:59.000000Z",
  "volunteerUserId": null,
  "status": "AVAILABLE"
}'