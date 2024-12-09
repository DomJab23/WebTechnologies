curl -X 'PATCH' \
  'http://127.0.0.1:8000/api/pets/36?uname=a&password=a' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/merge-patch+json' \
  -d '{
  "name": "PYZIA",
  "age": 123,
  "species": "DOG",
  "breed": "OWCZAREK",
  "sterilized": true,
  "health": "OK",
  "descriptions": "CZY SIE ZMIENILO TERAZ",
  "createdAt": "2024-12-04T12:22:59.000000Z",
  "updatedAt": "2024-12-05T11:50:30.000000Z"
  "volunteerUserId": null,
  "status": "AVALIABLE"
}'