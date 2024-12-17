curl -X 'POST' \
  'http://127.0.0.1:8000/api/pets?uname=travis&password=travis' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "name": "BELLA",
  "age": 2,
  "species": "DOG",
  "breed": "GOLDEN RETRIVER",
  "sterilized": true,
  "health": "OK",
  "descriptions": "Bella is a very nice and fridly dog with beautiful black patch on her left eye",
  "createdAt": "2024-12-04T12:22:59.000000Z",
  "updatedAt": "2024-12-04T12:22:59.000000Z",
  "volunteerUserId": null,
  "status": "AVAILABLE"
}'