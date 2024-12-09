curl -X 'POST' \
  'http://127.0.0.1:8000/api/pets?uname=a&password=a' \
  -H 'accept: application/ld+json' \
  -H 'Content-Type: application/ld+json' \
  -d '{
  "name": "string",
  "age": 0,
  "species": "string",
  "breed": "string",
  "sterilized": true,
  "health": "string",
  "descriptions": "string",
  "createdAt": "2024-12-09T14:28:19.600Z",
  "updatedAt": "2024-12-09T14:28:19.600Z",
  "volunteerUserId": "string",
  "status": "string"
}'